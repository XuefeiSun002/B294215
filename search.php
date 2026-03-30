<?php 
include("php/header.php"); 
?>

<div class="container">
    <div class="card" style="max-width: 600px; margin: 50px auto; padding: 40px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <h2 style="color: #2c3e50;">Start New Analysis</h2>
            <p style="color: #7f8c8d;">Enter protein details to fetch and analyze sequences.</p>
        </div>

        <form action="run_analysis.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #34495e;">Protein Name:</label>
                <input type="text" name="protein" placeholder="e.g. Insulin, Kinase..." required 
                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 16px;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #34495e;">Taxon (Organism):</label>
                <input type="text" name="taxon" placeholder="e.g. Mammals, Aves, Bacteria..." required 
                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 16px;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #34495e;">Sequence Limit:</label>
                <select name="limit" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 16px; background-color: white;">
                    <option value="10">10 Sequences (Fast)</option>
                    <option value="20">20 Sequences</option>
                    <option value="50">50 Sequences (Thorough)</option>
                </select>
            </div>

            <button type="submit" class="btn" style="width: 100%; padding: 15px; font-size: 18px; margin-top: 10px; cursor: pointer; border: none;">
                Run Analysis
            </button>
            
        </form>
    </div>
</div>

<?php include("php/footer.php"); ?>
