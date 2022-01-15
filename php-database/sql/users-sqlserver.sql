create database db_serverdbphp7;

use db_serverdbphp7;

CREATE TABLE tb_users (
	id_user INT IDENTITY(1, 1) PRIMARY KEY,
	des_login VARCHAR(64) NOT NULL,
	des_password VARCHAR(256) NOT NULL
);

INSERT INTO tb_users (des_login, des_password) VALUES('frajola', '123456');

INSERT INTO tb_users(des_login, des_password) VALUES('thor', '654321');

INSERT INTO tb_users(des_login, des_password) VALUES('lucifer', '666666');

SELECT * FROM tb_users;