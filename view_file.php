<?php
session_start();
include("php/header.php");

$file = isset($_GET['file']) ? $_GET['file'] : '';
$type = isset($_GET['type']) ? $_GET['type'] : 'text';

if (!empty($file) && strpos($file, 'data/') === false) {
    $file = "data/" . $file;
}

if (empty($file) || !file_exists($file)) {
    echo "<div class='card'>";
    echo "<h3>System Error</h3>";
    echo "<p>Target file: <b>" . htmlspecialchars($file) . "</b> was not found on server.</p>";
    echo "<p>Please ensure the analysis has completed successfully.</p>";
    echo "</div>";
    include("php/footer.php");
    exit;
}

$content = file_get_contents($file);
?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2 style="margin: 0;">Result Viewer</h2>
    <a href="results.php" class="btn" style="background-color: #7f8c8d;">Back to Results</a>
</div>

<div class="card">
<?php if ($type == 'aln'): ?>
    <div class="fasta-container">
        <pre class="fasta-output"><code><?php echo htmlspecialchars($content); ?></code></pre>
    </div>
<?php else: ?>
    <div class="motif-terminal">
        <div class="terminal-header">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
            <span class="terminal-title">Sequence Analysis Report</span>
        </div>
        <pre class="motif-output"><?php 
            $lines = explode("\n", $content);
            foreach ($lines as $line) {
                if (strpos(trim($line), '#') === 0) {
                    echo "<span class='comment'>" . htmlspecialchars($line) . "</span>\n";
                } else {
                    echo htmlspecialchars($line) . "\n";
                }
            }
        ?></pre>
    </div>
<?php endif; ?>
</div>

<div style="margin-top: 20px; text-align: center;">
    <a href="<?php echo $file; ?>" download class="btn">Download Raw File</a>
</div>

<?php include("php/footer.php"); ?>
