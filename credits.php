<?php 
include("php/header.php"); 
?>

<div class="container">
    <div style="max-width: 900px; margin: 40px auto;">
        <h2 style="color: #2c3e50; border-left: 5px solid #3498db; padding-left: 15px; margin-bottom: 30px;">
            Statement of Credits
        </h2>

        <div class="card" style="padding: 30px; margin-bottom: 20px;">
            <h3 style="color: #3498db; margin-top: 0;">🛠️ Software and Tools</h3>
            <ul style="line-height: 1.8; color: #555;">
                <li><strong>BioPython</strong> (<a href="https://biopython.org/" target="_blank">biopython.org</a>) – used to retrieve protein sequences from NCBI using Entrez.</li>
                <li><strong>Clustal Omega</strong> (<a href="https://www.ebi.ac.uk/Tools/msa/clustalo/" target="_blank">ebi.ac.uk</a>) – used for multiple sequence alignment (MSA).</li>
                <li><strong>EMBOSS patmatmotifs</strong> (<a href="http://emboss.sourceforge.net/" target="_blank">emboss.sourceforge.net</a>) – used to scan protein sequences for PROSITE motifs.</li>
                <li><strong>Matplotlib</strong> (<a href="https://matplotlib.org/" target="_blank">matplotlib.org</a>) – used in Python scripts to generate conservation plots.</li>
            </ul>
        </div>

        <div class="card" style="padding: 30px; margin-bottom: 20px;">
            <h3 style="color: #3498db; margin-top: 0;">📊 Data Sources</h3>
            <ul style="line-height: 1.8; color: #555;">
                <li><strong>NCBI Protein Database</strong> – Primary source of protein sequence data.</li>
                <li><strong>PROSITE Database</strong> – Source of motif definitions and functional domain data.</li>
            </ul>
        </div>

        <div class="card" style="padding: 30px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <h3 style="color: #3498db; margin-top: 0;">🤖 AI & External Development Tools</h3>
    <ul style="line-height: 1.8; color: #555;">
        <li>
            <strong>Gemini (Google) & ChatGPT (OpenAI)</strong> – Used for the following technical tasks:
            <ul>
                <li><strong>Backend Integration:</strong> Debugging and configuring the logic for PHP PDO database interactions and result parsing.</li>
                <li><strong>System Debugging:</strong> Resolving execution errors within `shell_exec` and implementing self-healing permission logic for server-side restrictions.</li>
                <li><strong>Code Optimization:</strong> Refactoring Python scripts for EMBOSS tool integration and data visualization.</li>
            </ul>
        </li>

        <li>
            <strong>Google Search, Microsoft Bing & Documentation</strong> – Used for research and implementation of web standards:
            <ul>
                <li><strong>MDN Web Docs (Mozilla):</strong> Referenced <a href="https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Styling_basics" target="_blank" style="color: #3498db;">CSS Styling Basics</a> for building a responsive and standard-compliant user interface.</li>
                <li><strong>W3Schools:</strong> Utilized the <a href="https://www.w3schools.com/html/html_css.asp" target="_blank" style="color: #3498db;">HTML/CSS Tutorials</a> for implementing global stylesheets and refining component layouts (Card-based UI, Navigation).</li>
                <li><strong>UI/UX Design:</strong> Sourcing modern CSS grid/flexbox layouts and aesthetic component designs to improve user experience.</li>
            </ul>
        </li>
    </ul>
</div>

        <div class="card" style="padding: 30px; margin-bottom: 20px;">
    <h3 style="color: #3498db; margin-top: 0;">🖼️ Media Credits</h3>
    <ul style="line-height: 1.8; color: #555;">
        <li>
            <strong>Hero Image (Home Page):</strong> 
            Visualization of predicted 3D protein structures by DeepMind. 
            Source: <a href="https://www.advancedsciencenews.com/deepmind-used-to-create-the-most-complete-database-of-predicted-3d-protein-structures/" target="_blank">Advanced Science News</a>. 
            Original Credit: <em>Getty / Science Photo Library RF</em>.
        </li>
    </ul>
</div>

        <div class="card" style="padding: 30px; background-color: #fdfefe; border-top: 4px solid #27ae60;">
            <h3 style="color: #27ae60; margin-top: 0;">📜 Code Statement</h3>
            <p style="color: #666; line-height: 1.6;">
                The core logic of this project was authored by the student, with certain bioinformatics workflows adapted from course lectures. 
                Official documentation from the tools listed above was consulted for implementation. All AI-assisted debugging and search-driven 
                UI enhancements were manually integrated and verified by the author.
            </p>
        </div>
    </div>
</div>

<?php include("php/footer.php"); ?>
