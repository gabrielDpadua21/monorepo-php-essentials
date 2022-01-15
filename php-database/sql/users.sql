USE db_phpdb;

CREATE TABLE tb_users (
	id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	des_login VARCHAR(64) NOT NULL,
	des_password VARCHAR(256) NOT NULL,
	dt_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_users (des_login, des_password) VALUES('frajola', '123456');

INSERT INTO tb_users(des_login, des_password) VALUES('thor', '654321');

INSERT INTO tb_users(des_login, des_password) VALUES('lucifer', '666666');

SELECT * FROM tb_users;

TRUNCATE tb_users;

