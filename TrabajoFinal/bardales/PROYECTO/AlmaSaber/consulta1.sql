CREATE DATABASE IF NOT EXISTS proyecto_php_col;

-- ==========================================================
-- Seleccionar la Base de Datos
-- ==========================================================

USE proyecto_php_col;


--
-- Base de datos: `proyecto_php_col`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_alumno`
--

CREATE TABLE col_alumno (
  id_alumno int auto_increment NOT NULL,
  nombre_alumno varchar(200) NOT NULL,
  ap_alumno varchar(200) NOT NULL,
  am_alumno varchar(200) NOT NULL,
  col_Grado_id_grado int NOT NULL,
  email_alumno varchar(200) NOT NULL,
  telefono_alumno varchar(9) NOT NULL,
  celular_alumno varchar(9) NOT NULL,
  fregistro_alumno datetime NOT NULL,
  estado int NOT NULL,
  constraint  pk_id_alumno primary key (id_alumno)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_curso`
--

CREATE TABLE col_curso (
  id_curso int auto_increment NOT NULL,
  nombre_curso varchar(150) NOT NULL,
  descripcion_curso varchar(500) NOT NULL,
  fregistro_curso datetime NOT NULL,
  estado int NOT NULL,
  col_docente_id_docente int NOT NULL,
  Constraint pk_id_curso primary key (id_curso)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_docente`
--

CREATE TABLE col_docente (
  id_docente int auto_increment NOT NULL,
  dni_docente varchar(10) NOT NULL,
  nombre_docente varchar(200) NOT NULL,
  ap_docente varchar(200) NOT NULL,
  am_docente varchar(200) NOT NULL,
 mail_docente varchar(100) NOT NULL,
  telefono_docente varchar(9) NOT NULL,
  celular_docente varchar(9) NOT NULL,
  fregistro_docente datetime NOT NULL,
  estado_docente int NOT NULL,
  Constraint pk_id_docente primary key (id_docente)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_grado`
--

CREATE TABLE col_grado (
  id_grado int auto_increment NOT NULL,
  nivel_grado varchar(200) NOT NULL,
  grado_grado varchar(200) NOT NULL,
  col_Seccion_id_seccion int NOT NULL,
  col_Turno_id_turno int NOT NULL,
  max_alumno int NOT NULL,
  cant_alumnob int NOT NULL,
  finicio_grado date NOT NULL,
  ffin_grado date NOT NULL,
  estado_grado int NOT NULL,
  constraint pk_id_grado primary key (id_grado)
) ENGINE = INNODB;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_grado_has_col_curso`
--

CREATE TABLE col_grado_has_col_curso(
  col_Grado_id_grado int auto_increment NOT NULL,
  col_Curso_id_curso int auto_increment NOT NULL,
  constraint pk_col_grado_has_col_curso  primary key  (col_Grado_id_grado,col_Curso_id_curso)

) ENGINE = INNODB;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_grado_has_col_docente`
--

CREATE TABLE col_grado_has_col_docente (
  col_Grado_id_grado int NOT NULL,
  col_Docente_id_docente int NOT NULL,
  constraint pk_col_grado_has_col_docente  primary key (col_Grado_id_grado,col_Docente_id_docente)
) ENGINE = INNODB ;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_matricula`
--

CREATE TABLE col_matricula (
  id_matricula int auto_increment NOT NULL,
  col_Alumno_id_alumno int NOT NULL,
  fmatricula_matricula datetime NOT NULL,
  estado_matricula int NOT NULL,
  col_Grado_id_grado int NOT NULL,
  pago_matricula decimal(18,5) NOT NULL,
  Constraint pk_id_matricula primary key (id_matricula)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_pago`
--

CREATE TABLE col_pago (
  id_pago int auto_increment  NOT NULL,
  col_Grado_id_grado int NOT NULL,
  cuotas_pago int NOT NULL,
  fvencimiento_pago date NOT NULL,
  monto_pago decimal(18,5) NOT NULL,
  fpago_pago date DEFAULT NULL,
  montopagado_pago decimal(18,5) NOT NULL,
  estadopago_pago int NOT NULL,
  fregistro datetime NOT NULL,
  estado_pago int NOT NULL,
  Constraint pk_id_pago primary key (id_pago)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_seccion`
--

CREATE TABLE col_seccion (
  id_seccion int auto_increment NOT NULL,
  nombre_seccion varchar(200) NOT NULL,
  constraint pk_id_seccion primary key (id_seccion)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_tipousuario`
--

CREATE TABLE col_tipousuario (
  id_tipousuario int auto_increment NOT NULL,
  descripcion_tu varchar(200) NOT NULL,
  constraint pk_id_tipousuario primary key (id_tipousuario)
) ENGINE = INNODB ;

--
-- Volcado de datos para la tabla `col_tipousuario`
--

INSERT INTO col_tipousuario (id_tipousuario, descripcion_tu) VALUES(1, 'Administrador'),(2, 'Matricula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_turno`
--

CREATE TABLE col_turno (
  id_turno int auto_increment  NOT NULL,
  descripcion_turno varchar(200) NOT NULL,
  horario_turno varchar(200) NOT NULL,
  constraint pk_id_turno primary key (id_turno)
) ENGINE = INNODB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_usuario`
--

CREATE TABLE col_usuario (
  id_usuario int  auto_increment NOT NULL,
  col_TipoUsuario_id_tipousuario int  NOT NULL,
  nombre_usuario varchar(200) NOT NULL,
  ap_usuario varchar(200) NOT NULL,
  am_usuario varchar(200) NOT NULL,
  sexo_usuario varchar(50) NOT NULL,
  email_usuario varchar(200) NOT NULL,
  usu_usuario varchar(200) NOT NULL,
  password_usuario varchar(200) NOT NULL,
  fregistro_usuario datetime NOT NULL,
  estado_usuario int NOT NULL,
  constraint pk_id_usuario primary key (id_usuario)
) ENGINE = INNODB ;

--
-- Volcado de datos para la tabla `col_usuario`
--

INSERT INTO col_usuario (id_usuario, col_TipoUsuario_id_tipousuario, nombre_usuario, ap_usuario, am_usuario, sexo_usuario, email_usuario, usu_usuario, password_usuario, fregistro_usuario, estado_usuario) VALUES
(34, 1, 'kevin', 'huayhuas', 'cariapaza', 'M', 'kevin_4592@hotmail.com', 'Admin', 'david', '2016-11-24 19:00:49', 1),
(36, 2, 'jair', 'polanco', 'santos', 'M', 'polanco@gmail.com', 'adriel', 'ordoñez', '2016-11-25 04:18:32', 1);


--
-- Filtros para la tabla `col_alumno`
--
ALTER TABLE col_alumno ADD CONSTRAINT fk_col_Alumno_col_Grado1 FOREIGN KEY (col_Grado_id_grado) REFERENCES col_grado  (id_grado) ON DELETE NO ACTION ON UPDATE NO ACTION

--
-- Filtros para la tabla `col_curso`
--
ALTER TABLE col_curso ADD CONSTRAINT fk_col_Curso_col_Docente1 FOREIGN KEY (col_docente_id_docente) REFERENCES col_docente (id_docente) ON DELETE NO ACTION ON UPDATE NO ACTION

--
-- Filtros para la tabla `col_grado`
--
ALTER TABLE col_grado ADD CONSTRAINT fk_col_Grado_col_Seccion1 FOREIGN KEY (col_Seccion_id_seccion) REFERENCES col_seccion (id_seccion) ON DELETE NO ACTION ON UPDATE NO ACTION
ALTER TABLE col_grado ADD CONSTRAINT fk_col_Grado_col_Turno1 FOREIGN KEY (col_Turno_id_turno) REFERENCES col_turno  (id_turno) ON DELETE NO ACTION ON UPDATE NO ACTION

--
-- Filtros para la tabla `col_grado_has_col_curso`
--
ALTER TABLE col_grado_has_col_curso ADD CONSTRAINT fk_col_Grado_has_col_Curso_col_Curso1 FOREIGN KEY (col_Curso_id_curso) REFERENCES col_curso  (id_curso) ON DELETE NO ACTION ON UPDATE NO ACTION
ALTER TABLE col_grado_has_col_curso  ADD CONSTRAINT fk_col_Grado_has_col_Curso_col_Grado1 FOREIGN KEY (col_Grado_id_grado) REFERENCES col_grado  (id_grado) ON DELETE NO ACTION ON UPDATE NO ACTION

--
-- Filtros para la tabla `col_grado_has_col_docente`
--
ALTER TABLE col_grado_has_col_docente ADD CONSTRAINT fk_col_Grado_has_col_Docente_col_Docente1 FOREIGN KEY (col_Docente_id_docente) REFERENCES col_docente  (id_docente) ON DELETE NO ACTION ON UPDATE NO ACTION
ALTER TABLE col_grado_has_col_docente ADD CONSTRAINT fk_col_Grado_has_col_Docente_col_Grado1 FOREIGN KEY (col_Grado_id_grado) REFERENCES col_grado (id_grado) ON DELETE NO ACTION ON UPDATE NO ACTION

--
-- Filtros para la tabla `col_matricula`
--
ALTER TABLE col_matricula ADD CONSTRAINT fk_col_Matricula_col_Alumno1 FOREIGN KEY (col_Alumno_id_alumno) REFERENCES col_alumno  (id_alumno) ON DELETE NO ACTION ON UPDATE NO ACTION
ALTER TABLE col_matricula ADD CONSTRAINT fk_col_Matricula_col_Grado1 FOREIGN KEY (col_Grado_id_grado) REFERENCES col_grado   (id_grado) ON DELETE NO ACTION ON UPDATE NO ACTION

--
-- Filtros para la tabla `col_pago`
--
ALTER TABLE col_pago ADD CONSTRAINT fk_col_Pago_col_Grado1 FOREIGN KEY (col_Grado_id_grado) REFERENCES col_grado  (id_grado) ON DELETE NO ACTION ON UPDATE NO ACTION
--
-- Filtros para la tabla `col_usuario`
--
ALTER TABLE col_usuario ADD CONSTRAINT fk_col_Usuario_col_TipoUsuario1 FOREIGN KEY (col_TipoUsuario_id_tipousuario) REFERENCES col_tipousuario  (id_tipousuario) ON DELETE NO ACTION ON UPDATE NO ACTION

