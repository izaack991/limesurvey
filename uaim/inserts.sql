USE unidad2;
INSERT INTO lime_uaim_tipoE value(1,'Alumno-Docente');
INSERT INTO lime_uaim_tipoE value(2,'Autoevaluacion');
INSERT INTO lime_uaim_tipoE value(3,'Cordinador-Docente');
INSERT INTO lime_uaim_tipoE value(4,'Jefe de Seccion academica-Docente');
INSERT INTO lime_uaim_tipoE value(5,'Evaluacion Par');

INSERT INTO lime_uaim_unidadacademica (nombre,direccion,telefono) VALUES ('Unidad Los Mochis','Los Mochis','6871234556');
INSERT INTO lime_uaim_semestre (nombre) VALUES ('Primer Semestre'),('Segundo Semestre'),('Tercer Semestre'),('Cuarto Semestre'),('Quinto Semestre'),('Sexto Semestre'),('Septimo Semestre'),('Octavo Semestre'),('Noveno Semestre');
INSERT INTO lime_uaim_carrera (nombre, id_unidadAcademica) VALUES ('Licenciatura en Contaduria','1');
INSERT INTO lime_uaim_grupo (nombre, id_carrera, id_semestre) VALUES ('CONT01','1','6');
INSERT INTO lime_uaim_materia (nombre) VALUES ('Contabilidad de sociedades y especiales');
insert into lime_uaim_rol values ('1','Empleado');
insert into lime_uaim_rol values ('2','Cordinador de Programa Educativo');
insert into lime_uaim_rol values ('3','Jefe de Seccion Academica');

INSERT INTO lime_uaim_empleado (no_empleado,id_rol,es_tutor,es_docente, nombre, apellido, password) VALUES ('70352','3','0','1','Roberto', 'Ramírez Acosta','RRAM352');
INSERT INTO lime_uaim_empleado (no_empleado,id_rol,es_tutor,es_docente, nombre, apellido, password) VALUES ('756','2','0','1','Brenda Edith', 'Gutiérrez Herrera','BGUT756');
INSERT INTO lime_uaim_empleado (no_empleado,id_rol,es_tutor,es_docente, nombre, apellido, password) VALUES ('697','1','1','1','Isabel Cristina', 'Cristerna Soto','ICRI697');
INSERT INTO lime_uaim_empleado (no_empleado,id_rol,es_tutor,es_docente, nombre, apellido, password) VALUES ('160','1','0','1','María del Carmen', 'Fierro González','MFIE160');
INSERT INTO lime_uaim_empleado (no_empleado,id_rol,es_tutor,es_docente, nombre, apellido, password) VALUES ('8683','1','0','1','María Trinidad', 'Gastelum Mendoza','MGAS683');

INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020214','Jesús Annaly', 'Leyva Osorio',lower('Leyvaosorioannaly@gmail.com'),'JLEY0214','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020218','Angie Fabiola', 'Suarez Reyes',lower('Angiefabiolasuarez@gmail.com'),'ASUA0218','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('Rosa Emma', 'Cruz Fernandez','22020234',lower('cruzfern1113@gmail.com'),'RCRU0234','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020258','Cristian Oswaldo', 'Ramos Rojas',lower('cristianosw2002@gmail.com'),'CRAM0258','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020244','Jesús Manuel', 'Soberanes Vizcarra',lower('Soberanesvizcarrajesus@gmail.com'),'JSOB0244','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020210','Jesse Karolina', 'Segundo Lerma ',lower('karojesse001@gmail.com'),'JSEG0210','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020251','Hanna Fabiola', 'Mendez Camacho',lower('hannafabiola003@gmail.com'),'HMEN0251','1');
INSERT INTO lime_uaim_alumno (matricula,nombre, apellido, correo, password, id_grupo) VALUES ('22020309','Juan Carlos', 'Alvarez Leyva',lower('juanfullbuster1428@gmail.com'),'JALV0309','1');

INSERT INTO lime_uaim_materiasemestre (id_semestre,id_carrera,id_materia) VALUES (6,1,1);
INSERT INTO lime_uaim_docentemateria (no_empleado,id_materiaSemestre,id_grupo) VALUES (756,1,1);

INSERT INTO lime_uaim_tutorgrupo (no_empleado,id_grupo) VALUES ('697','1');