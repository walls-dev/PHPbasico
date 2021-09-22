<?php
class Usuario {
        private $id;
        private $nome;
        private $email;

        public function setId($i){
            $this->id = trim($i);
        }
        public function getId(){
            return $this->id;
        }
        public function setNome($n){
            $this->nome = ucwords(trim($n));
        }
        public function getNome(){
            return $this->nome;
        }
        public function setEmail($e){
            $this->email = strtolower(trim($e));
        }
        public function getEmail(){
            return $this->email;
        }

    }

    interface UsuarioDAO {
        public function add(Usuario $u);//create
        public function findAll();//read
        public function findById($id);//read
        public function findByEmail($email);//read
        public function update(Usuario $u);//update
        public function delete($id);//delete
    }