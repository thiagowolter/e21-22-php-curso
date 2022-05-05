# **Entrada e Saída**

## Olá Mundo

```
programa 
{ 
	funcao inicio () 
	{
		escreva("Olá Mundo!\n")
	} 
}
```

## Digite um número

```
programa 
{ 
	funcao inicio () 
	{ 
		inteiro numero
		
		escreva("Digite um número inteiro: ")
		leia(numero)
		
		escreva("O número digitado foi: ", numero, "\n")
	} 
}
```

## Digite seu nome

```
programa
{
	funcao inicio ()
	{
		cadeia nome

		escreva("Digite seu nome: ")
		leia(nome)
	}
}

```
</br>

# **Operações Aritméticas**

</br>

## Operações Simples

```
Programa
{
	funcao inicio()
	{
		real a, b, soma, sub, mult, div
		
		escreva("Digite o primeiro número: ")
		leia(a)

		escreva("Digite o segundo número: ")
		leia(b)

		soma = a + b 
		sub  = a - b 
		mult = a * b 
		div  = a / b 

		escreva("\nA soma dos números é igual a: ", soma) 		
		escreva("\nA subtração dos números é igual a: ", sub) 		
		escreva("\nA multiplicação dos números é igual a: ", mult) 	
		escreva("\nA divisão dos números é igual a: ", div, "\n") 	
	}
}
```

## Prioridades

```
programa
{
	funcao inicio()
	{
		real resultado

	
		resultado = 5.0 + 4.0 * 2.0
		escreva("Operação: 5 + 4 * 2 = ", resultado) 


	
		resultado = (5.0 + 4.0) * 2.0
		escreva("\nOperação: (5 + 4) * 2 = ", resultado)		

	
		resultado = 1.0 + 2.0 / 3.0 * 4.0 
		escreva("\nOperação: 1 + 2 / 3 * 4 = ", resultado)

	
		resultado = (1.0 + 2.0) / (3.0 * 4.0)
		escreva("\nOperação: (1 + 2) / (3 * 4) = ", resultado, "\n")
	}
}

```

## Divisões Inteiras

```
programa
{
	funcao inicio() 
	{
		inteiro metade_inteira, resto, valor
		
		escreva("Digite um valor: ") 
		leia(valor)

		metade_inteira = valor / 2
		resto = valor % 3 
		
		escreva("\nA metade inteira do numero é: ", metade_inteira)
		escreva("\nO resto (mod) da divisão por 3 é: ", resto, "\n")
	}
}
```

## Potência e Raiz

```
programa
{
	inclua biblioteca Matematica --> mat  
	
	funcao inicio() 
	{
		real valor, potencia, raiz_quadrada
		
		escreva("Digite um valor: ") 
		leia(valor)

		potencia = mat.potencia(valor, 3.0)  	
		raiz_quadrada = mat.raiz (valor, 2.0) 	

		
		escreva("\nO número ao cubo é: ", potencia, "\n")
		escreva("A raiz quadrada do número é: ", raiz_quadrada, "\n")
	}
}
```


