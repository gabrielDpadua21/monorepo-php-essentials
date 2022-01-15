CREATE DEFINER=`root`@`%` PROCEDURE `db_phpdb`.`sp_deletat_users`(puserid INT)
BEGIN
	
	UPDATE tb_users SET dt_deleteat = CURRENT_TIMESTAMP(), status_deleted = 1 WHERE id_user = puserid;

	SELECT des_login, des_password, dt_deletedat, status_deleted FROM tb_users WHERE id_user = puserid;
	
END