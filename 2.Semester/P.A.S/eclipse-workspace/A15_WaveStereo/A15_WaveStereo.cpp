//============================================================================
// Name        : A15_WaveStereo.cpp
// Author      : EC
// Version     :
// Copyright   :
// Description : generates simple WAV-samples with stereo effect
//============================================================================

#include "sndfile.hh"
#include <iostream>
#include <cmath>
using namespace std;

int main()
{
    const int format = SF_FORMAT_WAV | SF_FORMAT_PCM_16;
    const int channels = 2;  // Anzahl der Kanäle auf 2 setzen
    const int sampleRate = 48000;
    const char* outfilename = "foo_stereo.wav";

    cout << "wav_writer..." << endl;

    SndfileHandle outfile(outfilename, SFM_WRITE, format, channels, sampleRate);
    if (not outfile) return -1;

    const int size = sampleRate * 5 * channels; // Buffergröße für Stereo
    float sample[size], factor = 1.0;
    for (int i = 0; i < size; i += 2) {
        // Kanal 1
        float volume1 = (sin(2 * M_PI * (i / 2) / sampleRate * 0.1) + 1) / 2; // Lautstärke modulieren
        sample[i] = sin(float(i / 2) / sampleRate * M_PI * 3000) * factor * volume1;

        // Kanal 2 mit leicht unterschiedlicher Frequenz
        float volume2 = (sin(2 * M_PI * (i / 2) / sampleRate * 0.1 + M_PI) + 1) / 2; // Lautstärke modulieren, phasenverschoben
        sample[i + 1] = sin(float(i / 2) / sampleRate * M_PI * 3100) * factor * volume2;
    }
    outfile.write(&sample[0], size);

    cout << "done!" << endl;
    return 0;
}
