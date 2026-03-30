<?php
session_start();
include("php/header.php");

if (isset($_GET['replot'])) {
    $plot = $_GET['replot'];
    if (strpos($plot, 'data/') !== 0) { $plot = "data/plot.png"; }
} else {
    $plot = isset($_SESSION['last_plot']) ? $_SESSION['last_plot'] : "data/plot.png";
}

$aln  = str_replace(".png", ".aln", str_replace("plot_", "aln_", $plot));
$motif = str_replace(".png", ".txt", str_replace("plot_", "motif_", $plot));
?>

<h2>Analysis Results</h2>

<div class="card" style="text-align: center; padding: 25px;">
    <img src="<?php echo $plot; ?>" style="max-width: 100%; border-radius: 8px; border: 1px solid #ddd; margin-bottom: 20px;">

    <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
        <a href="<?php echo $plot; ?>" download="analysis_plot.png" class="btn" style="background-color: #27ae60;">Download Plot</a>
        <a href="view_file.php?file=<?php echo $aln; ?>&type=aln" class="btn">View Alignment</a>
        <a href="view_file.php?file=<?php echo $motif; ?>&type=motif" class="btn">View Motifs</a>
        <a href="search.php" class="btn" style="background-color: #7f8c8d;">New Search</a>
    </div>
</div>

<?php include("php/footer.php"); ?>
