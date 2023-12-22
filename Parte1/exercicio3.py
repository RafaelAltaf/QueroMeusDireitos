#3) Contador de Caracteres:
#Desenvolva um programa que conte quantas vezes cada caractere aparece em uma string fornecida pelo usuário.

limpaTela = "\n" * 130

while True:
    print("\n" * 130)
    frase = input("- Digite uma string para iniciar o programa ou '0' para encerrá-lo.\n")
    
    if frase != None: #Verificando se o usuário escreveu alguma coisa
        numCaracteres = len(frase)
        relatorio = f"\n\nRESULTADO:\nDos {numCaracteres} caracteres digitados:\n"
        while (frase != ""): 
            caractere = frase[0]
            count = 0
            novaFrase = ""
            
            for i in frase:
                if(i == caractere):
                    count += 1
                else:
                    novaFrase += i

            relatorio += f"- {count} são o caractere '{caractere}'\n"
            frase = novaFrase
        print (relatorio)

        continuar = input("\nDigite 0 se desejar sair -> ")
        if continuar.strip() == "0":
            exit()
        else: 
            continue
    else:
        print(f"\n!!!Você não digitou nada!!!\n\n")
