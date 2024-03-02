USE unidad2;

INSERT INTO lime_uaim_unidadacademica (nombre,direccion,telefono) VALUES ('Unidad Los Mochis','Los Mochis','6871234556');
INSERT INTO lime_uaim_semestre (nombre) VALUES ('Primer Semestre');
INSERT INTO lime_uaim_carrera (nombre, id_unidadAcademica) VALUES ('Enfermeria','1');

INSERT INTO lime_uaim_grupo (nombre, id_carrera, id_semestre) VALUES ('ENFE01','1','1');


INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('Roberto', 'Ramírez Acosta','70352','RRAM352');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('Brenda Edith', 'Gutiérrez Herrera','756','BGUT756');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('Isabel Cristina', 'Cristerna Soto','697','ICRI697');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('María del Carmen', 'Fierro González','160','MFIE160');
INSERT INTO lime_uaim_docente (nombre, apellido, no_empleado, password) VALUES ('María Trinidad', 'Gastelum Mendoza','8683','MGAS683');

INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Jesús Annaly', 'Leyva Osorio','22020214','Leyvaosorioannaly@gmail.com','JLEY0214','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Angie Fabiola', 'Suarez Reyes','22020218','Angiefabiolasuarez@gmail.com','ASUA0218','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Rosa Emma', 'Cruz Fernandez','22020234','cruzfern1113@gmail.com','RCRU0234','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Cristian Oswaldo', 'Ramos Rojas','22020258','cristianosw2002@gmail.com','CRAM0258','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Jesús Manuel', 'Soberanes Vizcarra','22020244','Soberanesvizcarrajesus@gmail.com','JSOB0244','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Jesse Karolina', 'Segundo Lerma ','22020210','karojesse001@gmail.com','JSEG0210','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Hanna Fabiola', 'Mendez Camacho','22020251','hannafabiola003@gmail.com ','HMEN0251','1');
INSERT INTO lime_uaim_alumno (nombre, apellido, matricula, correo, password, id_grupo) VALUES ('Juan Carlos', 'Alvarez Leyva','22020309','juanfullbuster1428@gmail.com','JALV0309','1');
