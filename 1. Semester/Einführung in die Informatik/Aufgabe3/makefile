# Variable für Compiler-Flags. Das W steht für Warnungen aktivieren und das g für Debug-Informationen
Coption = -W -g

# Regel für das Standardziel "all"
all: euklerisch

# Regel für das Ziel "euklerisch"
euklerisch: euklerisch.cpp
	g++ euklerisch.cpp $(Coption) -o euklerisch

# Regel für das Ziel "ex" (Ausführen)
ex: euklerisch
	./euklerisch

# Regel für das Ziel "db" (Debugging)
db: euklerisch
	gdb euklerisch

# Regel für das Ziel "rm" (Löschen)
rm: euklerisch    
	rm euklerisch
	rm euklerisch.o
