<?php
include("php/header.php");

$example_id = "20260327141234";
$plot_file  = "data/plot_" . $example_id . ".png";
$aln_file   = "data/aln_" . $example_id . ".aln";
$motif_file = "data/motif_" . $example_id . ".txt";
?>

<div class="container">
    <div class="card" style="text-align: center; padding: 40px;">
        <h2 style="color: #2c3e50;">Example Dataset</h2>
        <p style="font-size: 1.2em; color: #3498db; font-weight: bold;">Glucose-6-phosphatase in Aves</p>

        <div style="margin: 30px 0;">
            <img src="<?php echo $plot_file; ?>" width="600" style="border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        </div>

        <div style="margin-top: 30px; display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="<?php echo $plot_file; ?>" download="example_plot.png" class="btn" style="background-color: #27ae60;">Download Plot</a>
            <a href="view_file.php?file=<?php echo $aln_file; ?>&type=aln" class="btn">View Alignment</a>
            <a href="view_file.php?file=<?php echo $motif_file; ?>&type=motif" class="btn">View Motifs</a>
            <a href="search.php" class="btn" style="background-color: #7f8c8d;">New Search</a>
        </div>
    </div>
</div>

<?php include("php/footer.php"); ?>
