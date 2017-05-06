CREATE DATABASE tubanda;
USE tubanda;

CREATE TABLE Usuario(
    uID INT NOT NULL AUTO_INCREMENT,
    uCorreo VARCHAR(50) NOT NULL,
    uUsuario VARCHAR(20) NOT NULL,
    uNombre VARCHAR(30) NOT NULL,
    uContrasena VARCHAR(255) NOT NULL,
    uImagen text(100) NOT NULL,
    uFechaNacimiento DATE,
    uLugarOrigen VARCHAR(30),
    CONSTRAINT ck_usuario UNIQUE (uUsuario),
    CONSTRAINT ck_correo UNIQUE (uCorreo),
    CONSTRAINT pk_usuario PRIMARY KEY (uID)
);

CREATE TABLE Perfil(
    uID INT NOT NULL,
    pTipo VARCHAR (10) NOT NULL,
    pNombre VARCHAR(20) NOT NULL,
    pDescripcion TEXT NOT NULL,
    pImagen text(100) NOT NULL,
    pGenero VARCHAR (20) NOT NULL,
    pInstrumento VARCHAR (20) NOT NULL,
    CONSTRAINT fk_perfil_usuario FOREIGN KEY (uID) REFERENCES Usuario (uID),
    CONSTRAINT ck_perfil_nombre UNIQUE (pNombre)
);

INSERT INTO Usuario (uCorreo, uUsuario, uNombre, uContrasena, uFechaNacimiento, uLugarOrigen, uImagen)
			VALUES  ('uno@uno.com','uno','uno','uno','1997-10-07','Ecuador','imagenes/santana.jpg');


INSERT INTO Usuario (uCorreo, uUsuario, uNombre, uContrasena, uFechaNacimiento, uLugarOrigen,uImagen)
			VALUES  ('dos@dos.com','dos','dos','dos','1997-10-07','Ecuador','imagenes/santana.jpg');


INSERT INTO Perfil (uID,pTipo,pNombre,pDescripcion,pImagen,pGenero,pInstrumento)
            VALUES (1,'musico','Santana','Guitarrista profesional','imagenes/santana.jpg','Rock','Guitarra');

INSERT INTO Perfil (uID,pTipo,pNombre,pDescripcion,pImagen,pGenero,pInstrumento)
            VALUES (1,'banda','Jerome','Banda de rock con larga trayectoria','imagenes/santana.jpg','Rock','Guitarra');

INSERT INTO Perfil (uID,pTipo,pNombre,pDescripcion,pImagen,pGenero,pInstrumento)
            VALUES (2,'musico','Santana Junior','Guitarrista amateur ecuatoriano','imagenes/santana.jpg','Rock','Guitarra');

INSERT INTO Perfil (uID,pTipo,pNombre,pDescripcion,pImagen,pGenero,pInstrumento)
            VALUES (2,'banda','Banda Dos','Banda con experiencia','imagenes/banda.jpg','Indie','Varios');
