<?php


include_once 'Usuario.class.php';
include_once 'BD.class.php';
class UsuarioDAO extends Usuario{
private $tabela; //nome da tabela

    public function __construct() {
        $this->tabela = "usuario";
    }

    public function __destruct() {
        unset($this->bd);
    }

//insere um novo registro na tabela usuário      
    public function inserir($usuario) {
		
		$nome=$usuario->getNome();
		$endereco=$usuario->getEndereco();
		$email=$usuario->getemail();
		$sexo=$usuario->getSexo();
		$cpf=$usuario->getCPF();

        $sql = "INSERT INTO $this->tabela (nome, endereco, email, sexo, cpf ) values (:nome,:endereco,:email,:sexo,:cpf)";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':nome', $nome);
        $retorno->bindParam(':endereco', $endereco);
        $retorno->bindParam(':email', $email);
        $retorno->bindParam(':sexo', $sexo);
        $retorno->bindParam(':cpf', $cpf);
  
        return $retorno->execute();
     }
    
     
         public function alterar($usuario) {
		//pega tudo de usuario e vai separando para fazer o update
		$nome=$usuario->getNome();
		$endereco=$usuario->getEndereco();
		$email=$usuario->getemail();
		$sexo=$usuario->getSexo();
		$cpf=$usuario->getCPF();
                $id=$usuario->getId();
                $sql = "update $this->tabela SET nome=:nome, endereco=:endereco, email=:email, sexo=:sexo, cpf=:cpf where id=:id";
                $retorno = DB::prepare($sql);
                $retorno->bindParam(':id', $id);
                $retorno->bindParam(':nome', $nome);
                $retorno->bindParam(':endereco', $endereco);
                $retorno->bindParam(':email', $email);
                $retorno->bindParam(':sexo', $sexo);
                $retorno->bindParam(':cpf', $cpf);
                return $retorno->execute();
     }
    
     
    public function listar() {
        $sql = "SELECT * FROM $this->tabela";
        $retorno = DB::prepare($sql);
        
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }

    
    
    public function listarUm($id) {
        $sql = "SELECT * FROM $this->tabela where id=:id";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':id', $id);
        $retorno->execute();

        return $retorno->fetchAll(PDO::FETCH_ASSOC);
        
  
    }    
    
    
    
    
    
    
    public function excluir($id) {

        $sql = "delete from $this->tabela where id=:id";
        $retorno = DB::prepare($sql);
        $retorno->bindParam(':id', $id);
        $retorno->execute();
        
    }
    



    
}