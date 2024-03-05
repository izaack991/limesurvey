USE unidad2;

INSERT INTO lime_uaim_unidadacademica (nombre,direccion,telefono) VALUES ('Unidad Los Mochis','Los Mochis','6871234556');
INSERT INTO lime_uaim_semestre (nombre) VALUES ('Primer Semestre'),('Segundo Semestre'),('Tercer Semestre'),('Cuarto Semestre'),('Quinto Semestre'),('Sexto Semestre'),('Septimo Semestre'),('Octavo Semestre'),('Noveno Semestre');
INSERT INTO lime_uaim_carrera (nombre, id_unidadAcademica) VALUES ('Licenciatura en Contaduria','1');
INSERT INTO lime_uaim_grupo (nombre, id_carrera, id_semestre) VALUES ('CONT01','1','6');
INSERT INTO lime_uaim_materia (nombre) VALUES ('Contabilidad de sociedades y especiales');

INSERT INTO lime_uaim_materiasemestre (id_semestre,id_carrera,id_materia) VALUES (6,1,1);
INSERT INTO lime_uaim_docentemateria (id_docente,id_materiaSemestre,id_grupo) VALUES (3,1,1);

INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('Roberto', 'Ramírez Acosta','70352','RRAM352');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('Brenda Edith', 'Gutiérrez Herrera','756','BGUT756');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('Isabel Cristina', 'Cristerna Soto','697','ICRI697');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('María del Carmen', 'Fierro González','160','MFIE160');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('María Trinidad', 'Gastelum Mendoza','8683','MGAS683');

INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Jesús Annaly', 'Leyva Osorio','22020214',lower('Leyvaosorioannaly@gmail.com'),'JLEY0214','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Angie Fabiola', 'Suarez Reyes','22020218',lower('Angiefabiolasuarez@gmail.com'),'ASUA0218','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Rosa Emma', 'Cruz Fernandez','22020234',lower('cruzfern1113@gmail.com'),'RCRU0234','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Cristian Oswaldo', 'Ramos Rojas','22020258',lower('cristianosw2002@gmail.com'),'CRAM0258','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Jesús Manuel', 'Soberanes Vizcarra','22020244',lower('Soberanesvizcarrajesus@gmail.com'),'JSOB0244','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Jesse Karolina', 'Segundo Lerma ','22020210',lower('karojesse001@gmail.com'),'JSEG0210','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Hanna Fabiola', 'Mendez Camacho','22020251',lower('hannafabiola003@gmail.com'),'HMEN0251','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Juan Carlos', 'Alvarez Leyva','22020309',lower('juanfullbuster1428@gmail.com'),'JALV0309','1');
