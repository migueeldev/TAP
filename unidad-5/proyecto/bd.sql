-- Crear base de datos
CREATE DATABASE IF NOT EXISTS test_estilos CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Usar la base de datos
USE test_estilos;

-- Crear tabla para guardar los resultados del test
CREATE TABLE IF NOT EXISTS resultados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    respuestas VARCHAR(20) NOT NULL,
    resultado VARCHAR(20) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
