<?php 
include("php/header.php"); 
?>

<div class="container">
    <div style="max-width: 800px; margin: 40px auto;">
        <h2 style="color: #2c3e50; border-left: 5px solid #3498db; padding-left: 15px; margin-bottom: 30px;">
            About ProteinSite Pro
        </h2>

        <div class="card" style="padding: 30px; margin-bottom: 25px;">
            <h3 style="color: #3498db; margin-top: 0;">Our Mission</h3>
            <p style="color: #555; line-height: 1.8; font-size: 1.1em;">
                ProteinSite Pro is a comprehensive bioinformatics platform designed to streamline the process of protein sequence analysis. 
                By integrating powerful computational tools, we provide researchers and students with a seamless way to visualize sequence conservation 
                and discover functional motifs in a unified web environment.
            </p>
        </div>

        <div class="card" style="padding: 30px;">
            <h3 style="color: #3498db; margin-top: 0;">Core Technology Stack</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
                <div style="padding: 15px; background: #f8f9fa; border-radius: 8px;">
                    <strong style="color: #2c3e50;">🌐 Web Core</strong>
                    <p style="margin: 5px 0 0; color: #7f8c8d; font-size: 0.9em;">PHP 8.x & MySQL for robust data management and dynamic routing.</p>
                </div>
                <div style="padding: 15px; background: #f8f9fa; border-radius: 8px;">
                    <strong style="color: #2c3e50;">🐍 Processing</strong>
                    <p style="margin: 5px 0 0; color: #7f8c8d; font-size: 0.9em;">Python 3 scripts powered by Biopython and Matplotlib.</p>
                </div>
                <div style="padding: 15px; background: #f8f9fa; border-radius: 8px;">
                    <strong style="color: #2c3e50;">🔬 Bio Tools</strong>
                    <p style="margin: 5px 0 0; color: #7f8c8d; font-size: 0.9em;">Clustal Omega for MSA and EMBOSS suite for motif scanning.</p>
                </div>
                <div style="padding: 15px; background: #f8f9fa; border-radius: 8px;">
                    <strong style="color: #2c3e50;">🎨 UI/UX</strong>
                    <p style="margin: 5px 0 0; color: #7f8c8d; font-size: 0.9em;">Modern CSS grid layouts with a focus on scientific clarity.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px; color: #bdc3c7;">
            <p>Version 1.0.2 | Released March 2026</p>
        </div>
    </div>
</div>

<?php include("php/footer.php"); ?>
