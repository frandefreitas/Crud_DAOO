<?php
include_once "../Model/Usuario.class.php";
include_once "../Model/UsuarioDAO.class.php";

/*

*/

if( isset($_GET['tag']) )
{
    $tag = $_GET['tag'];
   
    if($tag == 'listar'){
        $registros = new UsuarioDAO();
        $retorno = $registros->listar();
        include "../View/lista.php";
        exit;
    }
    
    
    else if($tag == 'update'){
        $id = $_GET['id'];
        $registros = new UsuarioDAO();
        $retorno = $registros->listarUm($id);
        include "../View/update.php";
        exit;
    }

    
    else if($tag == 'delete'){
        $id = $_GET['id'];
        $registros = new UsuarioDAO();
        $retorno = $registros->excluir($id);
        $registroso = new UsuarioDAO();
        $retorno = $registroso->listar();
        include "../View/lista.php";
        exit;
    }
}


@$variavel = $_REQUEST['acao']; 
if($variavel=="Cadastrar"){	
$nome=$_REQUEST['nome'];
$endereco=$_REQUEST['endereco'];
$email=$_REQUEST['email'];
$sexo=$_REQUEST['sexo'];
$cpf=$_REQUEST['cpf'];


$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setEndereco($endereco);
$usuario->setEmail($email);
$usuario->setSexo($sexo);
$usuario->setCPF($cpf);


$usuarioDAO = new UsuarioDAO();

	if($usuarioDAO->inserir($usuario))
	{
		echo "Usuário inserido com sucesso";
	}
	else
	{
		echo "Erro ao inserir";
	}

}
else if($variavel=="Editar"){	
$nome=$_REQUEST['nome'];
$endereco=$_REQUEST['endereco'];
$email=$_REQUEST['email'];
$sexo=$_REQUEST['sexo'];
$cpf=$_REQUEST['cpf'];
$id=$_REQUEST['id'];

$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setEndereco($endereco);
$usuario->setEmail($email);
$usuario->setSexo($sexo);
$usuario->setCPF($cpf);
$usuario->setId($id);
$usuarioDAO = new UsuarioDAO();

$usuarioDAO->alterar($usuario);

}








include "../View/cadastro.php";         //senão cai na opção ele vai para o cadatro









?>