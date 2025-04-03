#equeño ejemplo de un menu de dias de la semana
#Se ingresa un numero del 1 al 7 y se imprime el dia correspondiente

print("1- Lunes"
"2- Martes"
"3- Miercoles"
"4- Jueves"
"5- Viernes"
"6- Sabado"
"7- Domingo")

while True:
    try:
        dias = int (input("Ingrese el dia actual: "))
        break
    except ValueError:
        print("Por favor, ingrese un numero valido")

if dias == 1:
    print("Hoy es Lunes")
elif dias == 2:
    print("Hoy es Martes")
elif dias == 3:
    print("Hoy es Miercoles")
elif dias == 4:
    print("Hoy es Jueves")
elif dias == 5:
    print("Hoy es Viernes")
elif dias == 6:
    print("Hoy es Sabado")
elif dias == 7: 
    print("Hoy es Domingo")
else:
    print("El dia ingresado no es valido")