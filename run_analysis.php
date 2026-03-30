<?php
session_start();
include("php/header.php");
include("php/db.php");

$protein = $_POST['protein'] ?? '';
$taxon   = $_POST['taxon'] ?? '';
$limit   = $_POST['limit'] ?? 10;

echo "<div class='container'>";
echo "<div class='card' style='margin-top: 50px; padding: 40px; text-align: center;'>";

if (empty($protein) || empty($taxon)) {
    echo "<h2 style='color: #e74c3c;'>❌ Error</h2>";
    echo "<p>Please provide both Protein and Taxon names.</p>";
    echo "<a href='search.php' class='btn' style='margin-top:20px;'>Go Back</a>";
    echo "</div></div>";
    include("php/footer.php");
    exit;
}

echo "<h2 style='color: #2c3e50; margin-bottom: 30px;'>🧬 Analysis in Progress...</h2>";
echo "<div style='width: 100%; background: #eee; border-radius: 20px; height: 10px; margin-bottom: 20px;'>";
echo "<div id='progress-bar' style='width: 10%; height: 100%; background: #3498db; transition: width 0.5s;'></div>";
echo "</div>";
echo "<div id='status-list' style='text-align: left; max-width: 500px; margin: 0 auto; font-family: monospace;'>";

$timestamp = date("YmdHis");
$fasta_file = "data/seq_{$timestamp}.fasta";
$aln_file   = "data/aln_{$timestamp}.aln";
$motif_file = "data/motif_{$timestamp}.txt";
$plot_file  = "data/plot_{$timestamp}.png";

echo "<span>> Fetching sequences...</span> ";
shell_exec("python3 python/fetch_sequences.py '$protein' '$taxon' '$limit' '$fasta_file' 2>&1");
echo "DONE<br>";
echo "<script>document.getElementById('progress-bar').style.width = '25%';</script>";
flush();

echo "<span>> Running Clustal Omega...</span> ";
shell_exec("clustalo -i $fasta_file -o $aln_file --force 2>&1");
echo "DONE<br>";
echo "<script>document.getElementById('progress-bar').style.width = '50%';</script>";
flush();

echo "<span>> Generating conservation plot...</span> ";
shell_exec("python3 python/plot.py '$plot_file' '$aln_file' 2>&1");
echo "DONE<br>";
echo "<script>document.getElementById('progress-bar').style.width = '75%';</script>";
flush();

echo "<span>> Scanning for Motifs (EMBOSS)...</span> ";
shell_exec("patmatmotifs -sequence $fasta_file -outfile $motif_file 2>&1");
echo "DONE<br>";
echo "<script>document.getElementById('progress-bar').style.width = '100%';</script>";
flush();

$sql = "INSERT INTO results (protein, taxon, fasta_file, alignment_file, motif_file, plot_file) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$protein, $taxon, $fasta_file, $aln_file, $motif_file, $plot_file]);
$_SESSION['last_plot'] = $plot_file;

echo "</div>";
echo "<div style='margin-top: 40px;'>";
echo "<h3 style='color: #27ae60;'>✅ Analysis Complete!</h3>";
echo "<p style='color: #7f8c8d; margin-bottom: 30px;'>Results for <strong>$protein</strong> in <strong>$taxon</strong> are ready.</p>";
echo "<a href='results.php' class='btn' style='padding: 12px 30px;'>View Full Results</a>";
echo "</div></div></div>";

include("php/footer.php");
?>
