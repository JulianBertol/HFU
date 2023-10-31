echo "Suche nach dateien die größer als 500kb sind..."
result=$(find . -maxdepth 1 -type f -size +500k)
if [ -n "$result" ]; then
    echo "$result"
else
    echo "Keine Dateien gefunden"
fi