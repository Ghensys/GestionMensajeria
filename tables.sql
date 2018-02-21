CREATE TABLE instituciones
(
	id_institucion serial,
	descripcion_institucion varchar(30) unique not null,
	primary key (id_institucion)
);

CREATE TABLE gerencias
(
	id_gerencia serial,
	descripcion_gerencia varchar(30) not null,
	id_institucion int not null,
	PRIMARY KEY (id_gerencia),
	FOREIGN KEY (id_institucion) REFERENCES instituciones (id_institucion)
);

CREATE TABLE departamentos
(
	id_departamento serial,
	descripcion_departamento varchar(30) not null,
	id_gerencia int not null,
	PRIMARY KEY (id_departamento),
	FOREIGN KEY (id_gerencia) REFERENCES gerencias (id_gerencias)
);


CREATE TABLE tipo_requerimiento
(
	id_tipo_requerimiento serial,
	descripcion_tipo_requerimiento varchar(30) not null,
	PRIMARY KEY (id_tipo_requerimiento)
)

CREATE TABLE prioridad_requerimiento
(
	id_prioridad_requerimiento serial,
	descripcion_prioridad_requerimiento varchar(30) not null,
	PRIMARY KEY (id_prioridad_requerimiento)
)

CREATE TABLE registro_requerimiento
(
	id_requerimiento serial,
	id_institucion int not null,
	id_gerencia int not null,
	
)






--Pendiente por Definir
CREATE TABLE empleados
(
	cedula_empleado int,
	nombre_empleado varchar(40) not null,
	apellido_empleado varchar(40) not null,
	correo varchar(40) not null,
	password varchar(50) not null,
	id_institucion int not null,
	id_gerencia int not null,
	id_departamento int not null,
	--Pendiente por finalizar
	)
