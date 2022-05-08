create database sistemas;
use sistemas;

create table maestro(
	id_maestro int not null,
    nombre_maestro char(50) not null,
    palabras_maestro char(100),
    informacion_maestro char(255),
    materias_maestro char(255) not null
);

create table materia(
	id_materia int not null,
	nombre_materia char(50) not null,
    area_materia char(20) not null,
    semestre_materia char(20) not null,
    descripcion_materia char(255) not null,
    url_materia char(70) not null,
    url_programa char(70) not null
);

