<?php

include 'BD.class.php';

class Usuario extends DB{
private $id;
private $nome;
private $endereco;
private $email;
private $sexo;
private $cpf;

	public function setId($id) {
         $this->id=$id;
    }
	
    public function getId() {
        return $this->id;
    }

 	public function setNome($nome) {
         $this->nome=$nome;
    }
	
    public function getNome() {
        return $this->nome;
    }

	public function setEndereco($endereco) {
         $this->endereco=$endereco;
    }
	
    public function getEndereco() {
        return $this->endereco;
    }
	
	public function setEmail($email) {
         $this->email=$email;
    }
	
    public function getEmail() {
        return $this->email;
    }
	
	public function setSexo($sexo) {
         $this->sexo=$sexo;
    }
	
    public function getSexo() {
        return $this->sexo;
    }
	
	public function setCPF($cpf) {
         $this->cpf=$cpf;
    }
	
    public function getCPF() {
        return $this->cpf;
    }
   
}
 