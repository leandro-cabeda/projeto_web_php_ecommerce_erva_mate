<?php

class usuarios {

    var $sql;
    var $res;
    var $reg;
    var $con;

    function __construct() {
        $this->con = new conecta();
    }
    
     function listar() {
        $this->sql = "select * from usuario order by nome asc";
        $this->res = $this->con->bd->Execute($this->sql);
    }

    function incluir($nome,$login,$senha,$email){

            $this->sql="insert into usuario(nome,login,senha,email) values('".$nome."','".$login."','".md5($senha)."','".$email."')"; // md5 funçao que criptografa a senha

            if($this->con->bd->Execute($this->sql)) // retorna true se deu certo ou false se deu errado
            {

                return true;
            } 
            else
            {
                return false;
            }
    }


    function alterar($nome,$login,$senha,$email,$id){
            
            $this->sql="update usuario set nome='".$nome."',login='".$login."',senha='".md5($senha)."',email='".$email."',where cod=".$id;
           
            if($this->con->bd->Execute($this->sql))
            {   
                return true;
            } 
            else
            {
                return false;
            }
    }

    function excluir($id)
    {

        $this->sql = "delete from usuario where cod = ".$id;
        if($this->con->bd->Execute($this->sql))
        {
            
            return true;
        }
        else
            return false;
    }

    function verifica_login($login)
    {
        $this->sql="select * from usuario where upper(login) = upper('".$login."')";
        $this->res=$this->con->bd->Execute($this->sql);
        return $this->res->RecordCount();
    }

    function verifica_email($email)
    {
        $this->sql="select * from usuario where upper(email) = upper('".$email."')";
        $this->res=$this->con->bd->Execute($this->sql);
        return $this->res->RecordCount();
    }


    function editar($id)
    {
        $this->sql="select * from usuario where cod=".$id;
        $this->res=$this->con->bd->Execute($this->sql);
        $this->reg=$this->res->FetchNextObject();
    }
}

$mod = new usuarios();

if(isset($_REQUEST['acao']))
{
    $acao = $_REQUEST['acao'];
}
else
{
    $acao = 'listar';
}

switch($acao)
{
    case 'listar':
        $mod->listar();
        require('usuarios_list.php');
        break;
    case 'incluir':
        require('usuarios_form.php');
        break;
    case 'gravar_incluir':
        if($mod->verifica_login($_POST['login']) > 0)
            mensagem('alerta','Registro já cadastrado!','index_usuario.php?menu=usuarios');
        elseif($mod->verifica_email($_POST['email']) > 0)
            mensagem('alerta','Registro já cadastrado!','index_usuario.php?menu=usuarios');
        else
        {
            if($mod->incluir($_POST['nome'], $_POST['login'], $_POST['senha'],$_POST['email']))
                mensagem('informacao','Registro incluído com sucesso!','index_usuario.php?menu=usuarios');
            else
                mensagem('erro','Ação solicitada não foi realizada!','index_usuario.php?menu=usuarios');
        }
        $mod->listar();
        require('usuarios_list.php');
        break;
        
    case 'excluir':
        if($mod->excluir($_GET['id'])){
            mensagem('informacao','Registro excluído com sucesso!','index_usuario.php?menu=usuarios');
        }
        else
            mensagem('erro','Ação solicitada não foi realizada!','index_usuario.php?menu=usuarios');

        $mod->listar();
        require('usuarios_list.php');
        break;
    case 'alterar':
        $mod->editar($_GET['id']);
        require('usuarios_form.php');
        break;
    case 'gravar_alterar':
        if($mod->alterar($_POST['nome'], $_POST['login'], $_POST['senha'],$_POST['email'], $_POST['id'])){
            mensagem('informacao','Registro alterado com sucesso!','index_usuario.php?menu=usuarios');
        }
        else
            mensagem('E','Ação solicitada não foi realizada!','index_usuario.php?menu=usuarios');

        $mod->listar();
        require('usuarios_list.php');
        break;           
}
?>
