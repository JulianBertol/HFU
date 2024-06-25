/*
 ============================================================================
 Name        : A13_Signals.c
 Author      : EC
 Version     :
 Copyright   :
 Description : Fork mit 2 unabh. Laufvariablen (Parent/Child)
 ============================================================================
 */

#include <unistd.h>
#include <sys/types.h>
#include <stdio.h>
#include <stdlib.h>
#include <signal.h>

int laufvar_child = 0;
int laufvar_parent = 0;
int pid_child, pid_parent;
int send = 0;

void sig_handler(int signo, siginfo_t *info){
	pid_t sender_pid = info->si_pid;
    if (signo == SIGUSR1){
        printf("received SIGUSR1\n");
    	laufvar_child = 0;
    }
    else if (signo == SIGINT) {
        printf("received SIGINT\n");
        printf("restart again\n");
        laufvar_child *= 2;
    }
    else if (signo == SIGUSR2){
    	printf("received SIGUSR1\n");
    	laufvar_child = -laufvar_child;
    }
    else if (signo == SIGKILL)
        printf("received SIGKILL\n");
    else if (signo == SIGSTOP)
        printf("received SIGSTOP\n");
    else if (signo == SIGHUP){
    	if (sender_pid == pid_parent){
    		printf("received SIGHUB\n");
    		printf("My Parent wants me to hang up!!");
    		kill(pid_child, SIGSTOP);
    	}
    }

    else if(signo == SIGCONT){
    	if(sender_pid == pid_parent && send == 0){
    		send = 1;
    		kill(pid_child, SIGCONT);
    		return;
    	}
    	printf("received SIGCONT\n");
    	send = 0;
    }
}


// dies ist, was im Child-Pr. laufen soll
int doChild(){
	pid_child = getpid();
		while (1) {
			printf("\tChild: i= %d\n",laufvar_child);
			laufvar_child += 1;
			sleep(1);
		}
}

// dies ist, was im Parent-Pr. laufen soll
int doParent(){
	pid_parent = getpid();
		while (1) {
			printf("Parent: i= %d\n",laufvar_parent);
			laufvar_parent += 2;
			if(laufvar_parent == 20)
				kill(pid_child, SIGUSR1);
			else if (laufvar_parent == 30)
				kill(pid_child, SIGUSR2);
			else if (laufvar_parent == 70){
				kill(pid_child, SIGHUP);
	    		break;
			}

			sleep(1);
		}
}

int main (void) {
   pid_t pid;			// hier wird die Prozess-ID abgelegt

   // jetzt wollen wir mit fork() einen Child-Prozess erzeugen
   // und das Ergebnis auswerten


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
   if (signal(SIGHUP, sig_handler) == SIG_ERR)
   	printf("\ncan't catch SIGSTOP\n");
   if (signal(SIGCONT, sig_handler) == SIG_ERR)
   	printf("\ncan't catch SIGSTOP\n");

   switch (pid = fork ()) {
   case -1:
      printf ("Fehler bei fork()\n");
      break;
   case 0:
      doChild();
      break;
   default:
	  sleep (1);   /* Kurze Pause */
      doParent();
      break;
   }
   return EXIT_SUCCESS;
}
