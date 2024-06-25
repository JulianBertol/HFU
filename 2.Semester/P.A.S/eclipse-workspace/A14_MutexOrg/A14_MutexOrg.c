/*
 ============================================================================
 Name        : A14_MutexOrg.c
 Author      : EC
 Version     :
 Copyright   :
 Description : Dining Philosophers w/ Mutex in C, Ansi-style
 Ref		 : http://osandnetworkingcslab.wordpress.com
 	 	 	 : Note - contains C-Programming bugs to be fixed
 ============================================================================
 */
/*
#include<stdio.h>
#include<stdlib.h>
#include<pthread.h>
#include <unistd.h>		// for sleep

void *philoWork(int n);
pthread_t philosopher[5];
pthread_mutex_t chopstick[5];

int main()
{
	int i,k;
	void *msg;
	for(i=0;i<5;i++)
	{
		k=pthread_mutex_init(&chopstick[i],NULL);
		if(k==-1)
		{
			printf("\n Mutex initialization failed");
			exit(1);
		}
	}
	for(i=0;i<5;i++)
	{
		k=pthread_create(&philosopher[i],NULL,(void *)philoWork, (int *) (long)i);
		if(k!=0)
		{
			printf("\n Thread creation error \n");
			exit(1);
		}
	}
	for(i=0;i<5;i++)
	{
		k=pthread_join(philosopher[i],&msg);
		if(k!=0)
		{
			printf("\n Thread join failed \n");
			exit(1);
		}
	}
	for(i=0;i<5;i++)
	{
		k=pthread_mutex_destroy(&chopstick[i]);
		if(k!=0)
		{
			printf("\n Mutex Destroyed \n");
			exit(1);
		}
	}
	printf("\nAll Philosophers are satisfied...\n");
	return 0;
}

void *philoWork(int n)
{
	printf("\nPhilosopher %d is thinking ",n);
	pthread_mutex_lock(&chopstick[n]);
	printf(" -> %d got left chopstick ",n);
	pthread_mutex_lock(&chopstick[(n+1)%5]);
	printf("\nPhilosopher %d is eating ",n);
	pthread_mutex_unlock(&chopstick[n]);
	pthread_mutex_unlock(&chopstick[(n+1)%5]);
	printf("\nPhilosopher %d Finished eating ",n);

	return 0;
}
*/
#include <stdio.h>
#include <stdlib.h>
#include <pthread.h>
#include <unistd.h>      // for sleep and usleep

#define MAX_EATING_ROUNDS 5

void *philoWork(void *num);
pthread_t philosopher[5];
pthread_mutex_t chopstick[5];

int main()
{
    int i, k;
    void *msg;
    for(i = 0; i < 5; i++)
    {
        k = pthread_mutex_init(&chopstick[i], NULL);
        if(k != 0)
        {
            printf("\n Mutex initialization failed");
            exit(1);
        }
    }
    for(i = 0; i < 5; i++)
    {
        k = pthread_create(&philosopher[i], NULL, philoWork, (void *) (long)i);
        if(k != 0)
        {
            printf("\n Thread creation error \n");
            exit(1);
        }
    }
    for(i = 0; i < 5; i++)
    {
        k = pthread_join(philosopher[i], &msg);
        if(k != 0)
        {
            printf("\n Thread join failed \n");
            exit(1);
        }
    }
    for(i = 0; i < 5; i++)
    {
        k = pthread_mutex_destroy(&chopstick[i]);
        if(k != 0)
        {
            printf("\n Mutex Destroyed \n");
            exit(1);
        }
    }
    printf("\nAll Philosophers are satisfied...\n");
    return 0;
}

void *philoWork(void *num)
{
    int n = (int)(long)num;
    int eating_rounds = 0;

    while(eating_rounds < MAX_EATING_ROUNDS) {
        printf("\nPhilosopher %d is thinking ", n);
        usleep((rand() % 500 + 1) * 1000); // Think for a random time between 1ms and 500ms

        if(n % 2 == 0) {
            // Even philosophers pick up left chopstick first
            pthread_mutex_lock(&chopstick[n]);
            printf(" -> %d got left chopstick ", n);
            pthread_mutex_lock(&chopstick[(n+1)%5]);
            printf(" -> %d got right chopstick ", n);
        } else {
            // Odd philosophers pick up right chopstick first
            pthread_mutex_lock(&chopstick[(n+1)%5]);
            printf(" -> %d got right chopstick ", n);
            pthread_mutex_lock(&chopstick[n]);
            printf(" -> %d got left chopstick ", n);
        }

        printf("\nPhilosopher %d is eating ", n);
        usleep((rand() % 500 + 1) * 1000); // Eat for a random time between 1ms and 500ms

        pthread_mutex_unlock(&chopstick[n]);
        pthread_mutex_unlock(&chopstick[(n+1)%5]);
        printf("\nPhilosopher %d finished eating ", n);

        eating_rounds++;
    }

    return NULL;
}

