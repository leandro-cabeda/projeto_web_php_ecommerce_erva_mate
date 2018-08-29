<?php
class cli_prod {

    var $sql;
    var $res;
    var $reg;
    var $con;

    function __construct() {
        $this->con = new conecta();
    }

    function listar() {
        $this->sql = "select * from cli_prod";
        $this->res = $this->con->bd->Execute($this->sql);
    }

   /* function adicionar($id,$qtd,$custo)
    {
        $sql="select qtd from produto";
        $res = $this->con->bd->Execute($sql);
        while ($reg = $res->FetchNextObject())
        {
            if($id==$reg->COD)
            {
               if($reg->QTD>0)
               { 
                    $quant=$qtd*$custo;
                    $qt=$qtd-$reg->QTD;
                    $this->sql="insert into cli_prod(cli,prod,qtd,total) values('".$id."','".$reg->COD."','".$qt."','".$quant."')";
                    $res = $this->con->bd->Execute($sql);

                    $this->sql="update produto set qtd='".$qt."' where cod='".$reg->COD."'";
                    $res = $this->$con->bd->Execute($sql);
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }

    }*/
  


}

$mod = new cli_prod();

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
        require('cli_prod_list.php');
        break;
    /*case 'adicionar':
        if ($mod->adicionar($_POST['id'], $_POST['qtd'], $_POST['custo']))
        {
                mensagem('informacao', 'Adicionado com Sucesso ao carrinho!', 'index_cliente.php');
        }
        else
        {
            mensagem('erro', 'Quantidade indisponivel do produto!!', 'index_cliente.php');
        }

        require('cli_prod__list.php');
        break;*/
            
}


?>
