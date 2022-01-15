CREATE DEFINER=`root`@`%` PROCEDURE `db_phpdb`.`sp_users_insert`(
pdeslogin VARCHAR(64),
pdespassword VARCHAR(64)
)
BEGIN
	
	INSERT tb_users (des_login, des_password) VALUES (pdeslogin, pdespassword);

	SELECT * FROM tb_users WHERE id_user = LAST_INSERT_ID(); 
	
END