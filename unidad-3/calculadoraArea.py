def calcular_area():
    while True:
        print("\nCalculadora de Área de Figuras Geométricas")
        print("1. Triángulo")
        print("2. Cuadrado")
        print("3. Rectángulo")
        print("4. Salir")

        try:
            opcion = int(input("Seleccione una opción: "))
        except ValueError:
            print("Por favor, ingrese un número entero.")
            continue

        if opcion == 1:
            try:
                base = float(input("Ingrese la base del triángulo: "))
                altura = float(input("Ingrese la altura del triángulo: "))
                area = (base * altura) / 2
                print(f"El área del triángulo es: {area}")
            except ValueError:
                print("Por favor, ingrese valores numéricos válidos.")
        elif opcion == 2:
            try:
                lado = float(input("Ingrese el lado del cuadrado: "))
                area = lado ** 2
                print(f"El área del cuadrado es: {area}")
            except ValueError:
                print("Por favor, ingrese valores numéricos válidos.")
        elif opcion == 3:
            try:
                base = float(input("Ingrese la base del rectángulo: "))
                altura = float(input("Ingrese la altura del rectángulo: "))
                area = base * altura
                print(f"El área del rectángulo es: {area}")
            except ValueError:
                print("Por favor, ingrese valores numéricos válidos.")
        elif opcion == 4:
            print("¡Hasta luego!")
            break
        else:
            print("Opción inválida. Por favor, seleccione una opción válida.")


calcular_area()