import matplotlib
matplotlib.use('Agg')
import matplotlib.pyplot as plt
from Bio import AlignIO
import numpy as np
import sys

save_path = sys.argv[1] if len(sys.argv) > 1 else "data/plot.png"
aln_path = sys.argv[2] if len(sys.argv) > 2 else "data/aligned.aln"

try:
    alignment = AlignIO.read(aln_path, "fasta")
    length = alignment.get_alignment_length()
    num_seqs = len(alignment)
    scores = []

    for i in range(length):
        column = alignment[:, i]
        chars = [c for c in column if c != '-']
        if not chars:
            scores.append(0)
            continue
        
        most_common_count = max([chars.count(c) for c in set(chars)])
        conservation = most_common_count / num_seqs
        scores.append(conservation)

    plt.figure(figsize=(10, 4))
    plt.plot(scores, color='#3498db')
    plt.title("Sequence Conservation Map")
    plt.xlabel("Residue Position")
    plt.ylabel("Conservation Score (0-1)")
    plt.ylim(0, 1.1)
    plt.grid(True, alpha=0.3)
    plt.savefig(save_path)
    print(f"Plot saved to {save_path}")

except Exception as e:
    print(f"Error: {e}")

