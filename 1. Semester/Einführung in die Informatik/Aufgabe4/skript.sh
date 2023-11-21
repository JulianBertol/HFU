#!/bin/bash

# Virtual Environment erstellen
python3 -m venv venv

# Virtual Environment aktivieren
source venv/bin/activate


pip install -r requirements.txt


python Matplotlib/main.py

open funktion.png
# Virtual Environment deaktivieren
deactivate

