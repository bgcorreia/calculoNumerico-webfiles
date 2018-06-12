/*
A C++ Program To evaluate a Definite Integral by Gauss Quadrature Formula.
*/


#include<iostream>  //Header file for cin & cout
#include<cmath>  //Header file for mathematical operartions
#include<iomanip> //Header file for precession
#include <fstream>

using namespace std;  //calling the standard directory

//Given Fi=unction of Integration
long double f(long double x)
{
    long double d;
    d=pow(x,3);
    return d;
}

//For Legendre's Polynomial Pn(x)
long double pn(long double a[],int n,int m,long double x)
{
    int i;
    long double p=0;
    if(m==0)
    {
        for(i=0;i<=n;i=i+2)
        {
            if(x==0)
                break;
            p+=a[i]*pow(x,i);
        }
    }
    else
    {
        for(i=1;i<=n;i=i+2)
        {
            p+=a[i]*pow(x,i);
        }
    }
    return p;
}

//Derivative of Pn(x)
long double dn(long double a[],int n,int m,long double x)
{
    int i;
    long double p=0;
    if(m==0)
    {
        for(i=0;i<=n;i=i+2)
        {
            if(x==0)
                break;
            p+=i*a[i]*pow(x,i-1);
        }
    }
    else
    {
        for(i=1;i<=n;i=i+2)
        {
            p+=i*a[i]*pow(x,i-1);
        }
    }
    return p;
}

//Factorial Function
long double fact(int n)
{
    int i;
    long double f=1;
    for(i=2;i<=n;i++)
    {
        f*=i;
    }
    return f;
}

//Main Function
int main(int argc, char *argv[])
{

    int n=atoi(argv[1]),m,i,N;

    double c=atof(argv[2]),d=atof(argv[3]);

    if(n<=0)
        return 0;

    long double a[n],b,x,y[n],z[n],w[n],l,v,s,g=0,u[n];
    m=n%2;
    if(m==0)
    {
        N=n/2;
    }
    else
    {
        N=(n-1)/2;
    }

    for(i=0;i<=N;i++)
    {
        a[n-2*i]=(pow(-1,i)*fact(2*n-2*i))/(pow(2,n)*fact(i)*fact(n-i)*fact(n-2*i));
    }

    ofstream legendre;
    legendre.open("polinomioLegendre");

    if(m==0)
    {
        //legendre<<"\nThe Legendre's Polynomial is : ";
        legendre<<a[0];
        for(i=2;i<=n;i=i+2)
            legendre<<" + ("<<setprecision(10)<< a[i]<<") X^"<<i;
    }
    else
    {
        //legendre<<"\nThe Legendre's Polynomial is : ";
        legendre<<"("<<a[1]<<") X";
        for(i=3;i<=n;i=i+2)
            legendre<<" + ("<<a[i]<<") X^"<<i;
    }
    cout<<endl;

    legendre.close();

    //Roots of Pn(x)
    for(i=0;i<n;i++)
    {
        z[i]=cos(3.14*(i+0.75)/(n+0.5));
        l=z[i];
        do
        {
            s=l-(pn(a,n,m,l)/dn(a,n,m,l));
            v=l;
            l=s;
        }
        while(fabs(l-v)>0.0000000000000001);

        y[i]=l;
        w[i]=2/((1-pow(l,2))*(dn(a,n,m,l)*dn(a,n,m,l)));
    }

    ofstream raizes;
    raizes.open("raizesPesos");

    for(i=0;i<n;i++)
    {
        u[i]=((d-c)*y[i]/2)+(c+d)/2;
    }
    //raizes<<"Raizes\t\t\t\t"<<"Pesos\n";
    for(i=0;i<n;i++)
    {
        raizes<<setprecision(15)<<y[i]<<"\t\t"<<setprecision(15)<<w[i]<<endl;
    }

    raizes.close();

    ofstream integracao;
    integracao.open("valorIntegration");

    for(i=0;i<n;i++)
        g+=w[i]*f(u[i]);

    g=g*(d-c)/2;
    //cout<<"The Value of Integration is = 
    integracao<<setprecision(10)<<g<<endl;
    integracao.close();
    return 0;
}
