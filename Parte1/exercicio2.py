#2) Ordenador de Lista:
#Implemente um algoritmo que ordene uma lista de números em ordem crescente.

while True: 
    lista = input("- Digite os números da sua lista em UMA ÚNICA LINHA, separando-os com um espaço -> ").split()
    listaNumeros = lista.copy() 
    #A lista foi copiada pois, ao alterar a lista durante a iteração, houveram algumas incosistências no resultado do código
    #Dessa forma, apenas a cópia foi alterada
    for i in lista:
        try:
            int(i)
        except ValueError:
            listaNumeros.remove(i) 
    listaNumeros.sort(reverse=True)
    print(f"Abaixo, está a sua lista com os números em ordem crescente: \n{listaNumeros}")