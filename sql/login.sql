CREATE DATABASE IF NOT EXISTS sesion;
USE sesion;
CREATE TABLE IF NOT EXISTS t_usuarios(

  id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  usuario_nombre VARCHAR(45) NOT NULL, 
  usuario_paterno VARCHAR(45) NOT NULL, 
  usuario_materno VARCHAR(45) NOT NULL, 
  usuario_email VARCHAR(45) NOT NULL, 
  usuario_password VARCHAR(16) NOT NULL
)ENGINE = InnoDB;