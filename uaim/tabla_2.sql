-- Crear la base de datos
CREATE DATABASE unidad2;
USE unidad2;

-- Crear tabla UnidadAcademica
CREATE TABLE lime_uaim_unidadAcademica (
    id_unidadAcademica INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);
ALTER TABLE lime_uaim_unidadAcademica AUTO_INCREMENT = 1;

-- Crear tabla Carrera
CREATE TABLE lime_uaim_carrera (
    id_carrera INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    id_unidadAcademica INT NOT NULL,
    FOREIGN KEY (id_unidadAcademica) REFERENCES lime_uaim_unidadAcademica(id_unidadAcademica)
);
ALTER TABLE lime_uaim_carrera AUTO_INCREMENT = 1;

-- Crear tabla Semestre
CREATE TABLE lime_uaim_semestre (
    id_semestre INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);
ALTER TABLE lime_uaim_semestre AUTO_INCREMENT = 1;

-- Crear tabla Grupo
CREATE TABLE lime_uaim_grupo (
    id_grupo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    id_carrera INT NOT NULL,
    id_semestre INT NOT NULL,
    FOREIGN KEY (id_carrera) REFERENCES lime_uaim_carrera(id_carrera),
    FOREIGN KEY (id_semestre) REFERENCES lime_uaim_semestre(id_semestre)
);
ALTER TABLE lime_uaim_grupo AUTO_INCREMENT = 1;

-- Crear tabla Alumno
CREATE TABLE lime_uaim_alumno (
	matricula VARCHAR(8) NOT NULL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    id_grupo INT NOT NULL,
    FOREIGN KEY (id_grupo) REFERENCES lime_uaim_grupo(id_grupo)
);
create table lime_uaim_rol(
    id_rol int primary key not null,
    nombre varchar(255)
);
-- Crear tabla Maestro
CREATE TABLE lime_uaim_empleado (
    no_empleado VARCHAR(25) PRIMARY KEY NOT NULL,
    id_rol int,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    es_tutor BOOLEAN NOT NULL,
    es_docente BOOLEAN NOT NULL,
	password varchar(255) NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES lime_uaim_rol(id_rol)
);

-- Crear tabla Materia
CREATE TABLE lime_uaim_materia (
    id_materia INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);
ALTER TABLE lime_uaim_materia AUTO_INCREMENT = 1;

-- Crear tabla intermedia MateriaSemestre
CREATE TABLE lime_uaim_materiaSemestre (
    id_materiaSemestre INT PRIMARY KEY AUTO_INCREMENT,
    id_semestre INT NOT NULL,
    id_carrera INT NOT NULL,
    id_materia INT NOT NULL,
    FOREIGN KEY (id_semestre) REFERENCES lime_uaim_semestre(id_semestre),
    FOREIGN KEY (id_carrera) REFERENCES lime_uaim_carrera(id_carrera),
    FOREIGN KEY (id_materia) REFERENCES lime_uaim_materia(id_materia)
);
ALTER TABLE lime_uaim_materiaSemestre AUTO_INCREMENT = 1;

-- Crear tabla intermedia MaestroMateria
CREATE TABLE lime_uaim_docenteMateria (
    no_empleado VARCHAR(25) NOT NULL,
    id_materiaSemestre INT NOT NULL,
    id_grupo INT NOT NULL,
    FOREIGN KEY (no_empleado) REFERENCES lime_uaim_empleado(no_empleado),
    FOREIGN KEY (id_grupo) REFERENCES lime_uaim_grupo(id_grupo),
    FOREIGN KEY (id_materiaSemestre) REFERENCES lime_uaim_materiaSemestre(id_materiaSemestre)
);

CREATE TABLE lime_uaim_encuesta (
    token varchar (50),
    id_encuesta INT,
    id_evaluador VARCHAR(25) NOT NULL,
    id_evaluado VARCHAR(25) NOT NULL,
    fecha DATE,
    id_unidadAcademica INT NOT NULL,
    id_carrera INT NOT NULL,
    id_semestre INT NOT NULL,
    id_grupo INT NOT NULL,
    FOREIGN KEY (id_unidadacademica) REFERENCES lime_uaim_unidAdacademica(id_unidadAcademica),
    FOREIGN KEY (id_carrera) REFERENCES lime_uaim_carrera(id_carrera),
    FOREIGN KEY (id_semestre) REFERENCES lime_uaim_semestre(id_semestre),
    FOREIGN KEY (id_grupo) REFERENCES lime_uaim_grupo(id_grupo)
);

CREATE TABLE lime_uaim_tutorGrupo (
	no_empleado VARCHAR(25) NOT NULL,
    id_grupo INT NOT NULL,
	FOREIGN KEY (no_empleado) REFERENCES lime_uaim_empleado(no_empleado),
    FOREIGN KEY (id_grupo) REFERENCES lime_uaim_grupo(id_grupo)
);


-- DROP DATABASE unidad2;