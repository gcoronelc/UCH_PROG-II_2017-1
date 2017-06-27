create database Programacion;
use Programacion;

create table Estudiante(
id_estudiante int(20)not null,
nombre_estu varchar(30)not null,
apellido_estu varchar (30)not null,
edad int(20),
primary key (id_estudiante)

);

create table Matricula(
id_matricula int(20)not null,
id_estudiante int(20)not null,
cod_programacion int (20)not null,
id_administrador int(20)not null,
costo decimal(18,0)not null,
mensualidad decimal (18,0) not null,
cuotas int(20)not null,
primary key(id_matricula)
);

create table Administrador(
id_administrador int(20)not null,
nombre_admi varchar(30)not null,
apellido_admi varchar(30)not null,
edad_admi int(20),
primary key(id_administrador)

);

create table Programacion(
cod_programacion int(20)not null,
grado char,
seccion varchar(30),
nivel varchar(30),
primary key (cod_programacion)

);
