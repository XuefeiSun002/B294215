from Bio import Entrez
import sys

Entrez.email = "s2799711@ed.ac.uk"

protein = sys.argv[1]
taxon   = sys.argv[2]
limit   = sys.argv[3]

if len(sys.argv) > 4:
    save_path = sys.argv[4]
else:
    save_path = "data/sequences.fasta"

query = f"{protein}[Protein Name] AND {taxon}[Organism]"

try:
    handle = Entrez.esearch(db="protein", term=query, retmax=limit)
    record = Entrez.read(handle)
    handle.close()

    ids = record["IdList"]
    
    if not ids:
        print(f"Error: No sequences found for {query}")
        sys.exit(1)

    handle = Entrez.efetch(db="protein", id=ids, rettype="fasta")
    data = handle.read()
    handle.close()

    with open(save_path, "w") as f:
        f.write(data)

    print(f"Sequences downloaded to {save_path}")

except Exception as e:
    print(f"Python Error: {e}")
    sys.exit(1)
