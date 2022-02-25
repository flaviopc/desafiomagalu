CREATE DATABASE IF NOT EXISTS db_magalu;

CREATE TABLE db_magalu.tb_product (
id INT NOT NULL, 
name VARCHAR(100) NOT NULL, 
price DECIMAL(10,2) NOT NULL, 
PRIMARY KEY (id)
);

CREATE TABLE db_magalu.tb_category ( 
id INT NOT NULL,
name VARCHAR(100) NOT NULL, 
PRIMARY KEY (id)
);

CREATE TABLE db_magalu.tb_product_category (
id INT NOT NULL, 
productId INT NOT NULL, 
categoryId INT NOT NULL, 
PRIMARY KEY (id)
);

CREATE TABLE db_magalu.tb_usuario (
id INT NOT NULL AUTO_INCREMENT, 
usuario VARCHAR(100) NOT NULL,
senha VARCHAR(200) NOT NULL, 
PRIMARY KEY (id)
);

ALTER TABLE db_magalu.tb_product_category ADD CONSTRAINT fk_product 
FOREIGN KEY (productId) REFERENCES db_magalu.tb_product(id);

ALTER TABLE db_magalu.tb_product_category ADD CONSTRAINT fk_category 
FOREIGN KEY (categoryId) REFERENCES db_magalu.tb_category(id);

