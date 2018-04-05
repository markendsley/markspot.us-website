#include<stdio.h>
#include<stdlib.h>
#include<ctype.h>
#include<time.h>
#include<windows.h>

int main(int argc, char** argv)
{
    int a = atoi(argv[1]);
    int *arr = malloc (sizeof(int) * a);
    int i,x=0,y=2,z=7, counter=0;


    for(i=0;i<a;i++)
    {
        arr[i] = i;
    }
    printf("Original Array:\n");
    for(i=0;i<a;i++)
    {
        printf("%d   ", arr[i]);
    }


        randomize(arr,a);

        Sleep(3000);

    printf("\n");
    printf("Shuffled Array Array:\n");
    for(i=0;i<a;i++)
    {
        printf("%d   ", arr[i]);
    }


   int n=a;
    int j=0;

    printf("\n");
    while(!inorder(arr,a)!=0)
    {

            srand ( time(NULL));

    for(i=n-1;i>0;i--)
    {
        j = (rand()+x+y+z) % (i+1);

                x++;
        y=x+z*2;
        z=z*5;
        if(x>10000)
            x=3;
        if (y> 1000000)
            y=z;
        if (z>2003500)
            z=1;





        swap(&arr[i], &arr[j]);
    }




        printf("%d:    ", counter);
        for(i=0;i<a;i++)
        {
            printf("%d   ", arr[i]);
        }
        counter++;


        printf("\n");
        //Sleep(1000);
    }





    return 0;

}

int inorder(int *arr, int n)
{
    int i;

    for(i=1;i<n;i++)
    {
        if(arr[i]<arr[i-1])
            return 0;
    }

    return 1;

}

void randomize(int *arr, int n)
{
    int i, j;

    srand ( time(NULL));

    for(i=n-1;i>0;i--)
    {
        j = rand() % (i+1);

        swap(&arr[i], &arr[j]);
    }
}
void swap(int *a, int *b)
{
    int temp = *a;
    *a = *b;
    *b = temp;
}
