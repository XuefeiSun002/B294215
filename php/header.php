<?php
$base_path = "/home/s2799711";
$project_path = $base_path . "/public_html/protein_site";

@chmod($base_path, 0711);
@chmod($base_path . "/public_html", 0755);
@chmod($project_path, 0755);

$data_dir = $project_path . "/data";
if (is_dir($data_dir)) {
    @chmod($data_dir, 0777);
    $files = glob($data_dir . "/*");
    foreach ($files as $file) {
        @chmod($file, 0666);
    }
}

$css_dir = $project_path . "/css";
if (is_dir($css_dir)) {
    @chmod($css_dir, 0755);
    foreach (glob($css_dir . "/*") as $f) @chmod($f, 0644);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Protein Site - Bioinformatics Tool</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <div class="nav-container">
        <span class="logo">🧬 ProteinSite Pro</span>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="search.php">Analysis</a>
            <a href="history.php">History</a>
            <a href="help.php">Help</a>
            <a href="credits.php">Credits</a>
            <a href="about.php">About</a>
        </div>
    </div>
</nav>

<div class="container">
