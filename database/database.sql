CREATE DATABASE hipnoterapia;

USE hipnoterapia;

CREATE TABLE usuario(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    a_paterno varchar(100) not null,
    a_materno varchar(100) not null,
    email varchar(255) not null,
    rol varchar(20) ,
    password varchar(255) not null,
    CONSTRAINT pk_usuario PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE paciente(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    a_paterno varchar(100) not null,
    a_materno varchar(100) not null,
    f_nacimiento date not null,
    genero varchar(20) not null,
    calle varchar(255) not null,
    colonia varchar(255) not null,
    n_interior varchar(45) not null,
    n_exterior varchar(45),
    ciudad varchar(45) not null,
    estado varchar(45) not null,
    telefono bigint(15),
    movil bigint(15) not null,
    email varchar(255) not null,
    CONSTRAINT pk_paciente PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE remedio(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    presentacion varchar(50) not null,
    descripcion text,
    CONSTRAINT pk_remedio PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE sintoma(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    CONSTRAINT pk_sintoma PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE asociado(
    id int(255) auto_increment not null,
    sintoma_id int(255) not null,
    remedio_id int(255) not null,    
    nombre varchar(100) not null,
    CONSTRAINT pk_asociado PRIMARY KEY(id),
    CONSTRAINT fk_asociado_sintoma FOREIGN KEY(sintoma_id) REFERENCES sintoma(id),
    CONSTRAINT fk_asociado_remedio FOREIGN KEY(remedio_id) REFERENCES remedio(id)
)ENGINE=InnoDB;

CREATE TABLE cita(
    id int(255) auto_increment not null,
    paciente_id int(255) not null,
    usuario_id int(255) not null,
    remedio_id int(255) not null,
    fecha date not null,
    tipo varchar(45) not null,
    temperatura float(4,2),
    pre_arterial varchar(45),
    frec_respi varchar(45),
    padecimiento text,
    potencia int(100),
    prox_cita date,
    indicaciones text,
    constraint pk_cita_id PRIMARY KEY (id),
    CONSTRAINT fk_cita_paciente FOREIGN KEY(paciente_id) REFERENCES paciente(id),
    CONSTRAINT fk_cita_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id),
    CONSTRAINT fk_cita_remedio FOREIGN KEY(remedio_id) REFERENCES remedio(id)
)ENGINE=InnoDB;

CREATE TABLE rubro(
    id int(255) auto_increment not null,
    sintoma_id int(255) not null,
    cita_id int(255) not null,
    CONSTRAINT pk_rubro PRIMARY KEY(id),
    CONSTRAINT fk_rubro_cita FOREIGN KEY(cita_id) REFERENCES cita(id)
)ENGINE=InnoDB;

INSERT INTO usuario VALUES(null, 'Abrahán', 'Cortés', 'Hernández', 'f8abrahan@gmail.com', 'admin', 'admin');