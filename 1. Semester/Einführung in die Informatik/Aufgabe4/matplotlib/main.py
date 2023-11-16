import numpy as np
import matplotlib.pyplot as plt

def f(x):
    return 10 * np.sin(x)**2

# Werte für x generieren
x_werte = np.linspace(0, 2*np.pi, 100)  # Von 0 bis 2*pi mit 100 Schritten

# Werte für y berechnen
y_werte = f(x_werte)

# Wertetabelle ausgeben
print(" x    |   f(x)")
print("--------------------")
for x, y in zip(x_werte, y_werte):
    print(f"{x:.2f}  |  {y:.2f}")


plt.plot(x_werte, y_werte, label='f(x) = 10 * (sin(x))^2')
plt.title('Graph der Funktion f(x) = 10 * (sin(x))^2')
plt.xlabel('x')
plt.ylabel('f(x)')
plt.legend()
plt.grid(True)
plt.savefig('funktion.png')