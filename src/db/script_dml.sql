INSERT INTO db_magalu.tb_usuario (id, usuario, senha) VALUES 
('1', 'magalu', 'm@galu123');

INSERT INTO db_magalu.tb_product (id, name, price) VALUES 
('1', 'Lápis', '2'), 
('2', 'Biscoito', '1.5'),
('3', 'Camisa', '18.99');

INSERT INTO db_magalu.tb_category (id, name) VALUES 
('1', 'escolar'),
('2', 'vestuário'), 
('3', 'alimentação');

INSERT INTO db_magalu.tb_product_category (id, productId, categoryId) VALUES 
('1', '2', '3'), 
('2', '3', '2'), 
('3', '1', '1');

SELECT * FROM tb_product WHERE price > 100

UPDATE tb_product SET name = 'Lápis colorido' WHERE id = 1

DELETE FROM tb_product WHERE id = 2