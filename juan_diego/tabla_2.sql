-- Crear la base de datos
CREATE DATABASE unidad;
USE unidad;

-- Crear tabla UnidadAcademica
CREATE TABLE lime_uaim_unidadacademica (
    id_unidadacademica INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);

-- Crear tabla Carrera
CREATE TABLE lime_uaim_carrera (
    id_carrera INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    id_unidadacademica INT,
    FOREIGN KEY (id_unidadacademica) REFERENCES lime_uaim_unidadacademica(id_unidadacademica)
);

-- Crear tabla Semestre
CREATE TABLE lime_uaim_semestre (
    id_semestre INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla Grupo
CREATE TABLE lime_uaim_grupo (
    ID_Grupo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    id_carrera INT,
    id_semestre INT,
    FOREIGN KEY (id_carrera) REFERENCES lime_uaim_carrera(id_carrera),
    FOREIGN KEY (id_semestre) REFERENCES lime_uaim_semestre(id_semestre)
);

-- Crear tabla Alumno
CREATE TABLE lime_uaim_carrera (
    id_alumno INT PRIMARY KEY AUTO_INCREMENT,
    tipo BOOLEAN,
    nombre VARCHAR(255) NOT NULL,
    ID_grupo INT,
    FOREIGN KEY (ID_grupo) REFERENCES lime_uaim_grupo(ID_grupo)
);

-- Crear tabla Maestro
CREATE TABLE lime_uaim_docente (
    id_docente INT PRIMARY KEY AUTO_INCREMENT,
    tipo BOOLEAN,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla Materia
CREATE TABLE lime_uaim_materia (
    id_materia INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

-- Crear tabla intermedia MateriaSemestre
CREATE TABLE lime_uaim_materiasemestre (
    id_materiasemestre INT PRIMARY KEY AUTO_INCREMENT,
    id_semestre INT,
    id_carrera INT,
    id_materia INT,
    FOREIGN KEY (id_semestre) REFERENCES lime_uaim_semestre(id_semestre),
    FOREIGN KEY (id_carrera) REFERENCES lime_uaim_carrera(id_carrera),
    FOREIGN KEY (id_materia) REFERENCES lime_uaim_materia(id_materia)
);

-- Crear tabla intermedia MaestroMateria
CREATE TABLE lime_uaim_docenteMateria (
    id_docente INT,
    id_materiasemestre INT,
    ID_Grupo INT,
    FOREIGN KEY (id_docente) REFERENCES lime_uaim_docente(id_docente),
    FOREIGN KEY (ID_Grupo) REFERENCES lime_uaim_grupo(ID_grupo),
    FOREIGN KEY (id_materiasemestre) REFERENCES lime_uaim_materiasemestre(id_materiasemestre)
);

create table lime_uaim_encuesta(
    id_encuesta int,
    id_evaluador int,
    id_eval int,
    FOREIGN KEY (id_docente) REFERENCES lime_uaim_docente(id_docente),
    FOREIGN KEY (id_alumno) REFERENCES lime_uaim_carrera(id_alumno)
);

