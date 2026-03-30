<?php include("php/header.php"); ?>

<div class="card">
    <h2>Welcome to Protein Analysis Platform</h2>
<div class="card" style="text-align: center; padding: 25px; margin-bottom: 30px; background-color: #fcfcfc;">
    <div style="margin-bottom: 15px;">
        <img src="images/protein_structure.jpg" 
             alt="Predicted 3D Protein Structure" 
             style="width: 100%; max-width: 600px; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    </div>

    <p style="font-size: 0.85em; color: #7f8c8d; line-height: 1.5;">
        <strong>Image Source:</strong> 
        <a href="https://www.advancedsciencenews.com/deepmind-used-to-create-the-most-complete-database-of-predicted-3d-protein-structures/" target="_blank" style="color: #3498db; text-decoration: none;">
            DeepMind Predicted 3D Protein Structure Database
        </a><br>
        <span style="font-style: italic;">Credit: Getty / Science Photo Library RF</span>
    </p>
</div>
    <p>Analyze sequence conservation and discover structural motifs across multiple species using integrated bioinformatics tools.</p>
    
    <div style="margin-top: 30px;">
        <a href="search.php" class="btn">Start New Analysis</a>
        <a href="example.php" class="btn" style="background-color: #7f8c8d;">View Example</a>
    </div>
</div>

<div class="card">
    <h3>Quick Start Guide</h3>
    <ol>
        <li>Go to <strong>Analysis</strong>.</li>
        <li>Enter a protein name (e.g., "kinase") and a taxon.</li>
        <li>View conservation plots and download alignment files.</li>
    </ol>
</div>

<?php include("php/footer.php"); ?>
