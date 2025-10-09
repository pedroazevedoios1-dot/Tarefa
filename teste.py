
numero1 = float(input("Digite o primeiro número: "))
numero2 = float(input("Digite o segundo número: "))
numero3 = float(input("Digite o terceiro número: "))


numeros = [numero1, numero2, numero3]


maior_numero = max(numeros) 


menor_numero = min(numeros) 


soma_numeros = numero1 + numero2 + numero3 


media_numeros = soma_numeros / 3 


print(f"\nOs números digitados foram: {numeros}")
print(f"O maior número é: {maior_numero}")
print(f"O menor número é: {menor_numero}")
print(f"A soma dos números é: {soma_numeros}")
print(f"A média dos números é: {media_numeros}")
