-- to create a new database
CREATE DATABASE sistema;

-- to use database
use sistema;

-- creating a new table
CREATE TABLE art (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  art_des VARCHAR(255) NOT NULL,
  co_art VARCHAR(200) NOT NULL unique,
  ref_art INT NOT NULL,
  prec_vta1 INT ,
  prec_vta2 INT ,
  stock INT NOT NULL,
  fecha datetime NOT NULL DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE tasa (
  ref INT UNIQUE,
  tasa_dia INT NOT NULL
);

INSERT INTO tasa VALUES (0,3000000)




