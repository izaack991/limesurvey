-- Crear la base de datos
CREATE DATABASE unidad;
USE unidad;

-- Crear tabla UnidadAcademica
CREATE TABLE lime_UAIM_UnidadAcademica (
    ID_UnidadAcademica INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);

-- Crear tabla Carrera
CREATE TABLE lime_UAIM_Carrera (
    ID_Carrera INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    ID_UnidadAcademica INT,
    FOREIGN KEY (ID_UnidadAcademica) REFERENCES lime_UAIM_UnidadAcademica(ID_UnidadAcademica)
);

-- Crear tabla Semestre
CREATE TABLE lime_UAIM_Semestre (
    ID_Semestre INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla Grupo
CREATE TABLE lime_UAIM_Grupo (
    ID_Grupo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    ID_Carrera INT,
    ID_Semestre INT,
    FOREIGN KEY (ID_Carrera) REFERENCES lime_UAIM_Carrera(ID_Carrera),
    FOREIGN KEY (ID_Semestre) REFERENCES lime_UAIM_Semestre(ID_Semestre)
);

-- Crear tabla Alumno
CREATE TABLE lime_UAIM_Alumno (
    ID_Alumno INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    matricula VARCHAR(20) UNIQUE,
    ID_grupo INT,
    FOREIGN KEY (ID_grupo) REFERENCES lime_UAIM_Grupo(ID_grupo)
);

-- Crear tabla Maestro
CREATE TABLE lime_UAIM_Maestro (
    ID_Maestro INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla Materia
CREATE TABLE lime_UAIM_Materia (
    ID_Materia INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla intermedia MateriaSemestre
CREATE TABLE lime_UAIM_MateriaSemestre (
    ID_MateriaSemestre INT PRIMARY KEY AUTO_INCREMENT,
    ID_Semestre INT,
    ID_Carrera INT,
    ID_Materia INT,
    FOREIGN KEY (ID_Semestre) REFERENCES lime_UAIM_Semestre(ID_Semestre),
    FOREIGN KEY (ID_Carrera) REFERENCES lime_UAIM_Carrera(ID_Carrera),
    FOREIGN KEY (ID_Materia) REFERENCES lime_UAIM_Materia(ID_Materia)
);

-- Crear tabla intermedia MaestroMateria
CREATE TABLE lime_UAIM_MaestroMateria (
    ID_Maestro INT,
    ID_MateriaSemestre INT,
    ID_Grupo INT,
    FOREIGN KEY (ID_Maestro) REFERENCES lime_UAIM_Maestro(ID_Maestro),
    FOREIGN KEY (ID_Grupo) REFERENCES lime_UAIM_Grupo(ID_grupo),
    FOREIGN KEY (ID_MateriaSemestre) REFERENCES lime_UAIM_MateriaSemestre(ID_MateriaSemestre)
);
