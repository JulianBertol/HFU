#include <pthread.h>
#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>

// Gemeinsam genutzter Puffer
int data = 0;
int available = 0;  // Flag, um zu prüfen, ob Daten verfügbar sind

// Synchronisationsmechanismen
pthread_mutex_t mutex = PTHREAD_MUTEX_INITIALIZER; //initialisieren -> makros für struct
pthread_cond_t data_available = PTHREAD_COND_INITIALIZER; //initialisieren
pthread_cond_t space_available = PTHREAD_COND_INITIALIZER; //initialisieren

// Funktion zum Einfügen von Daten in den Puffer
void put(int value) {
    pthread_t id = pthread_self();
    pthread_mutex_lock(&mutex);

    // Solange der Puffer voll ist, warten
    while (available == 1) {
        printf("[put]:: Thread %d geraet in WAITING \n", id);
        pthread_cond_wait(&space_available, &mutex);
        printf("[put]:: Thread %d macht weiter \n", id);
    }

    // Daten in den Puffer legen
    data = value;
    available = 1;

    // Signal an Consumer, dass Daten verfügbar sind
    pthread_cond_signal(&data_available);
    pthread_mutex_unlock(&mutex);
}

// Funktion zum Lesen von Daten aus dem Puffer
int get() {
    pthread_t id = pthread_self();
    int value;

    pthread_mutex_lock(&mutex);

    // Solange keine Daten verfügbar sind, warten
    while (available == 0) {
        printf("[get]:: Thread %d geraet in WAITING \n", id);
        pthread_cond_wait(&data_available, &mutex);
        printf("[get]:: Thread %d macht weiter \n", id);
    }

    // Daten aus dem Puffer holen
    value = data;
    available = 0;

    // Signal an Producer, dass Platz im Puffer verfügbar ist
    pthread_cond_signal(&space_available);
    pthread_mutex_unlock(&mutex);

    return value;
}

// Producer-Thread-Funktion
void* produce(void* unused) { //wie Objekt in Java man weis nicht was kommt
    pthread_t id = pthread_self();
    int value = 0;

    while (1) {
        // Zahl erhöhen
        value++;

        // Kurze Pause (optional, für bessere Lesbarkeit der Ausgabe)
        usleep(rand() % 500000);

        // Zahl produzieren und ausgeben
        printf("[produce]:: Thread %d hat Zahl %d produziert\n", id, value);
        put(value);
    }

    return NULL;
}

// Consumer-Thread-Funktion
void* consume(void* unused) {
    pthread_t id = pthread_self();
    int value;

    while (1) {
        // Kurze Pause (optional, für bessere Lesbarkeit der Ausgabe)
        usleep(rand() % 1000000);

        // Zahl aus dem Puffer holen
        value = get();

        // Zahl und Consumer-ID ausgeben
        printf("[consume]:: Thread %d hat Zahl %d konsumiert\n", id, value);
    }

    return NULL;
}

int main() {
    // Seed für Zufallsgenerator (für usleep)
    srand(time(NULL));

    // Thread-IDs
    pthread_t producer1, producer2, producer3;
    pthread_t consumer1, consumer2;

    // Drei Producer-Threads erstellen
    pthread_create(&producer1, NULL, &produce, NULL);
    pthread_create(&producer2, NULL, &produce, NULL);
    pthread_create(&producer3, NULL, &produce, NULL);

    // Zwei Consumer-Threads erstellen
    pthread_create(&consumer1, NULL, &consume, NULL);
    pthread_create(&consumer2, NULL, &consume, NULL);

    // Auf Threads warten (wird nie erreicht, da Endlosschleifen)
    pthread_join(producer1, NULL);

    return 0;
}