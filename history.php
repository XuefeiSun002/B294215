<?php
include("php/db.php");
include("php/header.php");
?>

<div class="container">
    <h2>Analysis History</h2>
    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Protein</th>
                    <th>Taxon</th>
                    <th>View Results</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM results ORDER BY date DESC");
                while($row = $stmt->fetch()) {
                    $protein = $row['protein'] ?? 'Unknown';
                    $taxon = $row['taxon'] ?? 'Unknown';
                    $aln = $row['alignment_file'] ?? '';
                    $motif = $row['motif_file'] ?? '';
                    $plot = $row['plot_file'] ?? '';

                    echo "<tr>";
                    echo "<td>" . ($row['date'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($protein) . "</td>";
                    echo "<td>" . htmlspecialchars($taxon) . "</td>";
                    echo "<td>";

                    if (!empty($plot)) {
                        echo "<a class='btn' href='results.php?replot=" . urlencode($plot) . "' style='background-color:#9b59b6; margin-right:5px;'>Full Report</a>";
                    }
                    if (!empty($aln)) {
                        echo "<a class='btn' href='view_file.php?file=" . htmlspecialchars($aln) . "&type=aln' style='margin-right:5px;'>Alignment</a>";
                    }
                    if (!empty($motif)) {
                        echo "<a class='btn' href='view_file.php?file=" . htmlspecialchars($motif) . "&type=motif' style='background-color:#e67e22;'>Motifs</a>";
                    }

                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("php/footer.php"); ?>
