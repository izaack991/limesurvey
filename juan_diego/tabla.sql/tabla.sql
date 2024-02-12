-- Crear base de datos
CREATE DATABASE unidad;
USE unidad;

-- Crear tabla UnidadAcademica
CREATE TABLE UnidadAcademica (
    ID_UnidadAcademica INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);

-- Crear tabla Carrera
CREATE TABLE Carrera (
    ID_Carrera INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    ID_UnidadAcademica INT,
    FOREIGN KEY (ID_UnidadAcademica) REFERENCES UnidadAcademica(ID_UnidadAcademica)
);

-- Crear tabla Semestre
CREATE TABLE Semestre (
    ID_Semestre INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla Grupo
CREATE TABLE Grupo (
    ID_grupo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    ID_Carrera INT,
    ID_Semestre INT,
    FOREIGN KEY (ID_Carrera) REFERENCES Carrera(ID_Carrera),
    FOREIGN KEY (ID_Semestre) REFERENCES Semestre(ID_Semestre)
);

-- Crear tabla Alumno
CREATE TABLE Alumno (
    ID_Alumno INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    matricula VARCHAR(20) UNIQUE,
    ID_grupo INT,
    FOREIGN KEY (ID_grupo) REFERENCES Grupo(ID_grupo)
);

-- Crear tabla Maestro
CREATE TABLE Maestro (
    ID_Maestro INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla Materia
CREATE TABLE Materia (
    ID_Materia INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla MaestroMateria
CREATE TABLE MaestroMateria (
    ID_MaestroMateria INT PRIMARY KEY AUTO_INCREMENT,
    ID_Maestro INT,
    ID_MateriaDetalle INT,
    ID_Grupo INT,
    FOREIGN KEY (ID_Maestro) REFERENCES Maestro(ID_Maestro),
    FOREIGN KEY (ID_Grupo) REFERENCES Grupo(ID_grupo),
    FOREIGN KEY (ID_MateriaDetalle) REFERENCES MateriaDetalle(ID_MateriaDetalle)
);

-- Corrección en el nombre de la clave primaria en EstatusEncuestas
CREATE TABLE EstatusEncuestas (
    ID_EstatusEncuestas INT PRIMARY KEY AUTO_INCREMENT,
    ID_MaestroMateria INT,
    ID_Alumno INT,
    Encuesta_1 BOOLEAN,
    FOREIGN KEY (ID_Alumno) REFERENCES Alumno(ID_Alumno),
    FOREIGN KEY (ID_MaestroMateria) REFERENCES MaestroMateria(ID_MaestroMateria)
);

-- Crear tabla MateriaUnidadAcademica
CREATE TABLE MateriaUnidadAcademica (
    ID_MateriaDetalle INT PRIMARY KEY AUTO_INCREMENT,
    ID_Materia INT,
    ID_UnidadAcademica INT,
    FOREIGN KEY (ID_Materia) REFERENCES Materia(ID_Materia),
    FOREIGN KEY (ID_UnidadAcademica) REFERENCES UnidadAcademica(ID_UnidadAcademica)
);

-- Crear tabla MateriaCarrera
CREATE TABLE MateriaCarrera (
    ID_MateriaDetalle INT PRIMARY KEY AUTO_INCREMENT,
    ID_Materia INT,
    ID_Carrera INT,
    FOREIGN KEY (ID_Materia) REFERENCES Materia(ID_Materia),
    FOREIGN KEY (ID_Carrera) REFERENCES Carrera(ID_Carrera)
);

-- Crear tabla DetalleCarrera
CREATE TABLE DetalleCarrera (
    ID_DetalleCarrera INT PRIMARY KEY AUTO_INCREMENT,
    ID_UnidadAcademica INT,
    nombre VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_UnidadAcademica) REFERENCES UnidadAcademica(ID_UnidadAcademica)
);
