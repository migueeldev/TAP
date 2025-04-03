def obtener_numero(mensaje):
    """Solicita un número al usuario y valida la entrada."""
    while True:
        try:
            return float(input(mensaje))
        except ValueError:
            print("Error: Ingresa un número válido.")

def calcular(opcion):
    
    if opcion in [1, 2, 3, 4]:
        num1 = obtener_numero("Primer número: ")
        num2 = obtener_numero("Segundo número: ")

        if opcion == 1:
            resultado = num1 + num2
            operacion = "suma"
        elif opcion == 2:
            resultado = num1 - num2
            operacion = "resta"
        elif opcion == 3:
            resultado = num1 * num2
            operacion = "multiplicación"
        elif opcion == 4:
            while num2 == 0:
                print("Error: No se puede dividir entre 0.")
                num2 = obtener_numero("Ingresa otro número: ")
            resultado = num1 / num2
            operacion = "división"

        print(f"El resultado de la {operacion} es: {resultado}\n")
    else:
        print("Opción no válida.\n")

def menu():
    
    print("Bienvenido a IA Calculator")
    nombre = input("¿Cómo te llamas? ")
    print(f"Saludos, {nombre}\n")

    while True:
        print("Selecciona una opción:")
        print("1.- Suma")
        print("2.- Resta")
        print("3.- Multiplicación")
        print("4.- División")
        print("5.- Salir")
        

        #Manejo de excepciones para salida del programa
        try:
            opcion = int(input("Opción: "))
            if opcion == 5:
                print("Gracias por usar IA Calculator. ¡Hasta luego!")
                break
            calcular(opcion)
        except ValueError:
            print("Error: Ingresa un número entero válido.\n")


menu()
