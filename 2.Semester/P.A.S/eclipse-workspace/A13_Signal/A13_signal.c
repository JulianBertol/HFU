/*
 ============================================================================
 Name        : A13_Signals.c
 Author      : EC
 Version     :
 Copyright   :
 Description : kleiner Sig-Handler für USR1 und INT mit Laufschleife
 ============================================================================
 */

#include <stdio.h>
#include <stdlib.h>
#include <signal.h>
#include <unistd.h>

int i;

void sig_handler(int signo)
{
    if (signo == SIGUSR1){
        printf("received SIGUSR1\n");
    	i = 0;
    }
    else if (signo == SIGINT) {
        printf("received SIGINT\n");
        printf("restart again\n");
        i *= 2;
    }
    else if (signo == SIGUSR2){
    	printf("received SIGUSR1\n");
    	i = -i;
    }
    else if (signo == SIGKILL)
        printf("received SIGKILL\n");
    else if (signo == SIGSTOP)
        printf("received SIGSTOP\n");
}

int main(void) {
    printf("Hello World!!!\n"); /* prints !!!Hello World!!! */
    int pid= getpid();

    if (signal(SIGUSR1, sig_handler) == SIG_ERR)
        printf("\ncan't catch SIGUSR1\n");
    if (signal(SIGINT, sig_handler) == SIG_ERR)
        printf("\ncan't catch SIGINT\n");
    if (signal(SIGKILL, sig_handler) == SIG_ERR)
        printf("\ncan't catch SIGKILL\n");
    if (signal(SIGSTOP, sig_handler) == SIG_ERR)
    	printf("\ncan't catch SIGSTOP\n");
    if (signal(SIGUSR2, sig_handler) == SIG_ERR)
    	printf("\ncan't catch SIGSTOP\n");

    for (i=0; i<1000; i++){
    	printf("PID= %d, i= %d\n",pid,i);
    	sleep (1);
    }

    return EXIT_SUCCESS;
}
