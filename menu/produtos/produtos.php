<?php


class produtos
{
    var $sql;
    var $res;
    var $reg;
    var $con;

    function __construct()
    {
        $this->con = new conecta();
    }

    function listar()
    {
        $this->sql = "select * from produto order by nome asc";
        $this->res = $this->con->bd->Execute($this->sql);
    }

    function editar($id)
    {
        $this->sql = "select * from produto where cod = ".$id;
        $this->res = $this->con->bd->Execute($this->sql);
        $this->reg = $this->res->FetchNextObject();
    }

    function incluir($nome,$fornecedor,$qtd,$custo)
    {
        $this->sql = "insert into produto (nome,forne, qtd, custo) values ('".$nome."', '".$fornecedor."', '".$qtd."',  '".$custo."')";
        if($this->con->bd->Execute($this->sql))
        {
            
            if($_FILES['imagem']['name'] != '')
            {
                $sql = "select max(cod) as MAIOR from produto";
                $res = $this->con->bd->Execute($sql);
                $reg = $res->FetchNextObject();
                  mensagem('informacao', $this->imagem($reg->MAIOR), 'index_usuario.php?menu=produtos');
            }
            return true;
        }
        else
            return false;
    }


    function alterar($nome, $custo, $qtd, $fornecedor, $id)
    {
        $this->sql = "update produto set nome = '".$nome."', forne = '".$fornecedor."', qtd = '".$qtd."', custo = '".$custo."', where cod = " . $id;
        if($this->con->bd->Execute($this->sql))
        {
            
            if($_FILES['imagem']['name'] != '')
            {
                
                  mensagem('informacao', $this->imagem($id), 'index_usuario.php?menu=produtos');
            }
            return true;
        }
        else
            return false;
    }

    function excluir($id)
    {
        $sql = "select img as FOTO from produto where cod = " . $id;
        $res = $this->con->bd->Execute($sql);
        $reg = $res->FetchNextObject();

        $this->sql = "delete from produto where cod = ".$id;
        if($this->con->bd->Execute($this->sql))
        {
            if($reg->IMG != '')
                unlink("../images/".$reg->IMG);
            
            return true;
        }
        else
            return false;
    }


    function verifica_nome($nome)
    {
        $this->sql = "select * from produto where upper(nome) = upper('".$nome."')";
        $this->res = $this->con->bd->Execute($this->sql);
        return $this->res->RecordCount();
    }



    function imagem($id) {
        $erro = 0;
        $msg = '';
        $extensao = array('.gif', '.GIF', '.jpg', '.JPG', '.png', '.PNG');
        $nome_arquivo = $_FILES['imagem']['name'];
        $tamanho_arquivo = $_FILES['imagem']['size'];
        $ext_arquivo = strrchr($nome_arquivo, '.');
        //extrai a extensão do arquivo enviado

        if ($tamanho_arquivo > 1000000) {
            $erro++;
            $msg = 'Tamanho do arquivo maior que o permitido!';
        }

        if (!in_array($ext_arquivo, $extensao)) {
            $erro++;
            $msg .= '\n' . 'Arquivo inválido, somente são aceitos arquivos de imagens!';
        }

        if ($erro > 0) {
            return $msg;
        } else {
            $nome = 'produto_' . $id . $ext_arquivo;
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], '../images/' . $nome)) {
                $msg = 'Imagem enviada ao servidor com sucesso!';
                $sql = "update produto set img = '" . $nome . "' where cod = " . $id;
                $this->con->bd->Execute($sql);
                return $msg;
            }
        }
    }

}

$mod = new produtos();

if (isset($_REQUEST['acao'])) {
    $acao = $_REQUEST['acao'];
} else {
    $acao = 'listar';
}

switch ($acao) {
    case 'listar':
        $mod->listar();
        require('produtos_list.php');
        break;
    case 'incluir':
        require('produtos_form.php');
        break;
    case 'gravar_incluir':
        if ($mod->verifica_nome($_POST['nome']) > 0)
            mensagem('alerta', 'Registro já cadastrado!', 'index_usuario.php?menu=produtos');
        else {
            if ($mod->incluir($_POST['nome'], $_POST['fornecedor'], $_POST['qtd'], $_POST['custo']))
                mensagem('informacao', 'Registro incluído com sucesso!', 'index_usuario.php?menu=produtos');
            else
                mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=produtos');
        }
        $mod->listar();
        require('produtos_list.php');
        break;

    case 'excluir':
        if ($mod->excluir($_GET['id']))
            mensagem('informacao', 'Registro excluído com sucesso!', 'index_usuario.php?menu=produtos');
        else
            mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=produtos');

        $mod->listar();
        require('produtos_list.php');
        break;
    case 'alterar':
        $mod->editar($_GET['id']);
        require('produtos_form.php');
        break;

    case 'gravar_alterar':
        if ($mod->alterar($_POST['nome'], $_POST['fornecedor'], $_POST['qtd'], $_POST['custo'], $_POST['id']))
            mensagem('informacao', 'Registro alterado com sucesso!', 'index_usuario.php?menu=produtos');
        else
            mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=produtos');
        $mod->listar();
        require('produtos_list.php');
        break;
}
?>
