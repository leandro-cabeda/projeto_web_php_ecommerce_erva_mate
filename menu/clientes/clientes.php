<?php


class clientes {

    var $sql;
    var $res;
    var $reg;
    var $con;

    function __construct() {
        $this->con = new conecta();
    }
    
     function listar() {
        $this->sql = "select * from cliente order by nome asc";
        $this->res = $this->con->bd->Execute($this->sql);
    }

    

    function excluir($id)
    {
        $this->sql="delete from cliente where cod=".$id;
        if($this->con->bd->Execute($this->sql))
            {
                return true;
            } 
            else
            {
                return false;
            }
    }

    function violacao_integridade($id) {
        $sql = "select * from cli_prod c where c.cli = " . $id;
        $res = $this->con->bd->Execute($sql);
        return $res->RecordCount();
    }


}

$mod = new clientes();

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
        require('clientes_list.php');
        break;
        
    case 'excluir':
        if($mod->violacao_integridade($_GET['id']) > 0){
              mensagem('erro','Este registro não pode ser excluído, pois existem dados agregados a ele!','index_usuario.php?menu=clientes');
         }

          else{
          if($mod->excluir($_GET['id']))
              mensagem('informacao', 'Registro excluído com sucesso!', 'index_usuario.php?menu=clientes');
          else
              mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=clientes');
          }
          $mod->listar();
          require('clientes_list.php');
          break;       
}
?>
