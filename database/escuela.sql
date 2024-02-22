/*BASE DE DATOS PARA ESCUELA*/

    CREATE DATABASE IF NOT EXISTS school;

    USE school;
    
    CREATE TABLE profesor (
        id_profesor int(255) AUTO_INCREMENT NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        apellidos VARCHAR(255),
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        imagen VARCHAR(100),
        CONSTRAINT pk_profesor PRIMARY KEY(id_profesor)
    ) ENGINE=INNODB;

    CREATE TABLE alumno (
        id_alumno int(255) AUTO_INCREMENT NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        apellidos VARCHAR(255),
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        imagen VARCHAR(100),
        CONSTRAINT pk_alumno PRIMARY KEY(id_alumno)
    ) ENGINE=INNODB;

    CREATE TABLE materia (
        id_materia int(255) AUTO_INCREMENT NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        descripcion TEXT,
        CONSTRAINT pk_materia PRIMARY KEY(id_materia)
    ) ENGINE=INNODB;

    CREATE TABLE calificacion (
        id_calificacion int(255) AUTO_INCREMENT NOT NULL,
        nota INT(11),
        alumno_id INT(255) NOT NULL,
        profesor_id INT(255) NOT NULL,
        materia_id INT(255) NOT NULL,
        grupo_id INT(255) NOT NULL,
        CONSTRAINT pk_calificacion PRIMARY KEY(id_calificacion),
        CONSTRAINT fk_calificacion_alumno FOREIGN KEY(alumno_id) REFERENCES alumno(id_alumno),
        CONSTRAINT fk_calificacion_profesor FOREIGN KEY(profesor_id) REFERENCES profesor(id_profesor),
        CONSTRAINT fk_calificacion_materia FOREIGN KEY(materia_id) REFERENCES materia(id_materia),
        CONSTRAINT fk_calificacion_grupo FOREIGN KEY(grupo_id) REFERENCES grupo(id_grupo)
    ) ENGINE=INNODB;

    CREATE TABLE grupo (
        id_grupo int(255) AUTO_INCREMENT NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        profesor_id INT(255) NOT NULL,
        alumno_grupo_id INT(255) NOT NULL,
        CONSTRAINT pk_grupo PRIMARY KEY(id_grupo),
        CONSTRAINT fk_grupo_profesor FOREIGN KEY(profesor_id) REFERENCES profesor(id_profesor),
        CONSTRAINT fk_grupo_alumno_grupo FOREIGN KEY(alumno_grupo_id) REFERENCES alumno_grupo(id_alumno_grupo)
    ) ENGINE=INNODB;

    CREATE TABLE alumno_grupo (
        id_alumno_grupo int(255) AUTO_INCREMENT NOT NULL,
        alumno_id INT(255) NOT NULL,
        CONSTRAINT pk_alumno_grupo PRIMARY KEY(id_alumno_grupo),
        CONSTRAINT fk_alumno_grupo_alumno FOREIGN KEY(alumno_id) REFERENCES alumno(id_alumno)
    ) ENGINE=INNODB;