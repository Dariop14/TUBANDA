CREATE DATABASE TuBanda;
USE TuBanda;

CREATE TABLE Usuario(
    uID INT NOT NULL AUTO_INCREMENT,
    uCorreo VARCHAR(50) NOT NULL,
    uUsuario VARCHAR(20) NOT NULL,
    uNombre VARCHAR(30) NOT NULL,
    uContrasena VARCHAR(20) NOT NULL,
    uImagen VARCHAR(50),
    uFechaNacimiento DATE NOT NULL,
    uLugarOrigen VARCHAR(30) NOT NULL,
    CONSTRAINT ck_usuario UNIQUE (uUsuario),
    CONSTRAINT ck_correo UNIQUE (uCorreo),
    CONSTRAINT pk_usuario PRIMARY KEY (uID)
);

CREATE TABLE Perfil(
    uID INT NOT NULL AUTO_INCREMENT,
    pTipo VARCHAR (10) NOT NULL,
    pNombre VARCHAR(20) NOT NULL,
    pDescripcion VARCHAR (255) NOT NULL,
    pImagen VARCHAR (255) NOT NULL,
    pVideo VARCHAR (255),
    pGenero VARCHAR (20) NOT NULL,
    pInstrumento VARCHAR (20) NOT NULL,
    CONSTRAINT fk_perfil_usuario FOREIGN KEY (uID) REFERENCES Usuario (uID),
    CONSTRAINT ck_perfil_nombre UNIQUE (pNombre)
);

CREATE TABLE Instrumento(
    pID INT NOT NULL AUTO_INCREMENT,
    iNombre VARCHAR(30) NOT NULL,
    CONSTRAINT ck_instrumento UNIQUE (iNombre),
    CONSTRAINT fk_instrumento_perfil FOREIGN KEY (pID) REFERENCES Perfil (uID)
);

CREATE TABLE Genero(
	pID INT NOT NULL AUTO_INCREMENT,
    gNombre VARCHAR(30) NOT NULL,
    CONSTRAINT ck_genero UNIQUE (gNombre),
    CONSTRAINT fk_perfil_genero FOREIGN KEY (pID) REFERENCES Perfil (uID)
);

INSERT INTO Usuario (uCorreo,uUsuario,uNombre,uContrasena,uFechaNacimiento,uLugarOrigen)
         VALUES ('dariop_14@hotmail.com','dariop14','Dario Pazmiño','dreamtheater','1997-10-19','Ecuador');
