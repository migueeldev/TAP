import threading
import time

def tarea(nombre):
    for i in range(5):
        print(f"Hilo {nombre} ejecutándose - Iteración {i}")
        time.sleep(1)

# Crear dos hilos
hilo1 = threading.Thread(target=tarea, args=("Uno",))
hilo2 = threading.Thread(target=tarea, args=("Dos",))

# Iniciar los hilos
hilo1.start()
hilo2.start()

# Esperar a que los hilos terminen
hilo1.join()
hilo2.join()

print("Ejecución finalizada")


'''Se define la función tarea() que imprimirá mensajes con pausas de 1 segundo.

Se crean dos hilos con threading.Thread(), asignándoles la función tarea.

Se inician los hilos con start(), permitiendo la ejecución concurrente.

join() se usa para esperar a que ambos hilos terminen antes de continuar con el código principal.'''