#NUMERO 1
'''
def boas_vindas():
   qntd_alunos = int(input('Quantos alunos estão presentes?'))
   for i in range(qntd_alunos): 
        nome = input(f'digite o nome do aluno')
        print(f'Bem vindo(a) {nome}!')
boas_vindas()
'''
#NUMERO 2

'''def saudar(nome, turno):
    
    if turno.upper() == 'M':
        print(f"Bom dia, {nome}")
    elif turno.upper() == 'T':
        print(f'Boa tarde, {nome}')
    elif turno.upper() == 'N':
        print(f'Boa noite, {nome}')
    else:
        print("turno invalido")
nome = input('Qual seu nome:')
turno = input("Qual seu turno? M = manhã, T = Tarde, N = Noite")
saudar(nome, turno)'''

#numero 3

'''def ler_numero():
    numero = int(input('Digite um numero:'))
    return numero
n1 = ler_numero()
n2 = ler_numero()
soma = n1 + n2
print(f'A soma é: {soma}')'''

#numero 4

'''def maior_numero(a, b):
    if a > b:
        return a
    elif a < b:
        return b
    else:
        return "numeros iguais"
for i in range(3):
    n1 = float(input("informe um numero:"))
    n2 = float(input("informe um numero:"))
    print(maior_numero(n1,n2))'''

#numero 5

'''def calcular_area_retangulo(base, altura=2):
    return base * altura
base = float(input('qual a base:'))
altura = float(input('Qual a altura:'))
print(f"a area é {calcular_area_retangulo(base, altura)}")'''

# numero 6

'''def tabuada(n):
    for i in range(1,11):
            print(f"{n}x{i}={n*i}")
n = int(input('digite um numero:'))
tabuada(n)'''

#numero 7

'''def media_lista(lista):
    return sum(lista)/len(lista)

li = [10, 7, 8,9]
media = media_lista(li)
print(f'lista: {11} média: {media}')'''

#numero 8

'''def estatistica(lista):
    maior = max(lista)
    menor = min(lista)
    media = sum(lista)/len(lista)
    return maior, menor, media
mai,men,med = estatistica([10, 7, 8, 9])
print(f'maior: {mai}\nmenor: {men}\nmédia: {med}')'''

input('Escreva o que voce quer agora:')