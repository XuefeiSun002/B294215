<?php 
include("php/header.php"); 
?>

<div class="container">
    <div style="max-width: 800px; margin: 40px auto;">
        <h2 style="color: #2c3e50; border-left: 5px solid #3498db; padding-left: 15px; margin-bottom: 30px;">
            User Help & Documentation
        </h2>

        <div class="card" style="margin-bottom: 20px; padding: 30px;">
            <h3 style="color: #3498db; margin-top: 0;">🚀 Quick Start Guide</h3>
            <ol style="line-height: 2; color: #555;">
                <li>Go to the <strong>Analysis</strong> page.</li>
                <li>Enter a <strong>Protein Name</strong> (e.g., <em>Insulin</em>) and a <strong>Taxon</strong> (e.g., <em>Mammals</em>).</li>
                <li>Choose the number of sequences to compare (Limit).</li>
                <li>Click <strong>Run Analysis</strong> and wait for the results to generate.</li>
            </ol>
        </div>

        <div class="card" style="padding: 30px;">
            <h3 style="color: #3498db; margin-top: 0;">🧬 Science Explained</h3>
            
            <div style="margin-top: 20px;">
                <h4 style="margin-bottom: 5px; color: #2c3e50;">What is a Conservation Plot?</h4>
                <p style="color: #666; line-height: 1.6;">
                    The blue line chart represents the conservation score of each residue. 
                    <strong>Conserved regions</strong> (peaks in the chart) often indicate areas that are evolutionarily stable, suggesting they are critical for the protein's function or structure.
                </p>
            </div>

            <div style="margin-top: 25px;">
                <h4 style="margin-bottom: 5px; color: #2c3e50;">What are Motifs?</h4>
                <p style="color: #666; line-height: 1.6;">
                    <strong>Motifs</strong> are short, recurring patterns in DNA or protein sequences that are presumed to have a biological function. They represent functional domains like binding sites or catalytic centers.
                </p>
            </div>

            <div style="margin-top: 25px; padding: 15px; background: #ebf5fb; border-radius: 6px;">
                <p style="margin: 0; color: #2980b9; font-size: 0.9em;">
                    <strong>Note:</strong> We use <em>Clustal Omega</em> for alignment and <em>Patmatmotifs</em> for motif discovery.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <a href="search.php" class="btn">Start Your Analysis Now</a>
        </div>
    </div>
</div>

<?php include("php/footer.php"); ?>
