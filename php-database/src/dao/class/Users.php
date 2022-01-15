<?php

    class Users {

        private $iduser;
        private $deslogin;
        private $despassword;
        private $dtcreateat;

        public function __construct(string $login = '', string $password = '')
        {
            $this->setDesLogin($login);
            $this->setDesPassword($password);
        }

        public function getIdUser() {
            return $this->iduser;
        }

        public function setIdUser($value) {
            $this->iduser = $value;
        }

        public function getDesLogin() {
            return $this->deslogin;
        }

        public function setDesLogin($value) {
            $this->deslogin = $value;
        }

        public function getDesPassword() {
            return $this->despassword;
        }

        public function setDesPassword($value) {
            $this->despassword = $value;
        }

        public function getDtCreateAt() {
            return $this->dtcreateat;
        }

        public function setDtCreateAt($value) {
            $this->dtcreateat = $value;
        }

        public function getDtDeleteAt() 
        {
            return $this->dtdeleteat;
        }

        public function setDtDeleteAt($value)
        {
            $this->dtdeleteat = $value;
        }

        public function getStatusDelete()
        {
            return $this->statusdeleted;
        }

        public function setStatusDelete($value)
        {
            $this->statusdeleted = $value;
        }

        public static function findAll() {
            $sql = new Sql();

            return $sql->select('SELECT * FROM tb_users ORDER BY dt_createat');
        }

        public static function search($login) 
        {
            $sql = new Sql();

            return $sql->select('SELECT * FROM tb_users WHERE des_login LIKE :SEARCH', [
                ':SEARCH' => '%'.$login.'%'
            ]);
        }

        public function login($login, $password)
        {
            $sql = new Sql();

            $result = $sql->select('SELECT * FROM tb_users WHERE des_login = :LOGIN AND des_password = :PASSWORD',
            [
                'LOGIN' => $login,
                'PASSWORD' => $password
            ]);

            if(!count($result)) {
                throw new Exception("Login ou Senha inválidos");
            }

            $this->setData($result[0]);
        }

        public function setData($data) {
            $this->setIdUser($data['id_user']);
            $this->setDesLogin($data['des_login']);
            $this->setDesPassword($data['des_password']);
            $this->setDtCreateAt(new DateTime($data['dt_createat']));
            $this->setDtDeleteAt($data['dt_deleteat']);
            $this->setStatusDelete($data['status_deleted']);
        }

        public function insert() 
        {
            $sql = new Sql();

            $results = $sql->select('CALL sp_users_insert(:LOGIN, :PASSWORD)', 
            [
                ':LOGIN'=>$this->getDesLogin(),
                ':PASSWORD'=>$this->getDesPassword()
            ]);

            if(count($results)) {
                $this->setData($results[0]);
            }
        }

        public function update($login, $password) 
        {

            $this->setDesLogin($login);
            $this->setDesPassword($password);

            $sql = new Sql();

            $sql->select('UPDATE tb_users SET des_login = :LOGIN, des_password = :PASSWORD WHERE id_user = :ID', [
                ':LOGIN' => $this->getDesLogin(),
                ':PASSWORD' => $this->getDesPassword(),
                ':ID' => $this->getIdUser()
            ]);
        }

        public function delete()
        {
            $sql = new Sql();

            $sql->select('CALL sp_deletat_users(:ID)', [
                ':ID' => $this->getIdUser()
            ]);
        }

        public function findById(int $id) 
        {
            $sql = new Sql();

            $result = $sql->select('SELECT * FROM tb_users WHERE id_user = :ID', [':ID' => $id]);

            if(count($result)) {
                $this->setData($result[0]);
            }
        }

        public function __toString()
        {
            return json_encode([
                'id' => $this->getIdUser(),
                'login' => $this->getDesLogin(),
                'password' => $this->getDesPassword(),
                'createat' => $this->getDtCreateAt()->format('d/m/Y H:m:s'),
                'deleted' => $this->getDtDeleteAt(),
                'status' => $this->getStatusDelete()
            ]);
        }

    }