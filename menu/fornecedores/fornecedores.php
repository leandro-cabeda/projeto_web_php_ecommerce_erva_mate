  <?php
 

class fornecedores {

    var $sql;
    var $res;
    var $reg;
    var $con;

    function __construct() {
        $this->con = new conecta();
    }

    function listar() {

        $this->sql = "select * from fornecedor f, cidade c where f.cidade = c.cod";
        if (isset($_GET['ordem'])) {
            switch ($_GET['ordem']) {
                case 'crescente':
                    $this->sql .= " order by razao asc";
                    break;
                case 'decrescente':
                    $this->sql .= " order by razao desc";
                    break;
                default :
                    $this->sql .= " order by razao asc";
                    break;
            };
        }
        if(!isset($_GET['reg'])){
          $this->res = $this->con->bd->Execute($this->sql);

      
        }
        else{
          $this->res = $this->con->bd->PageExecute($this->sql,1,1);
        }


    }

    function editar($id) {
        $this->sql = "select * from fornecedor where cod = " . $id;
        $this->res = $this->con->bd->Execute($this->sql);
        $this->reg = $this->res->FetchNextObject();
    }

    function incluir($razao, $cnpj, $email, $cidade) {
        $this->sql = "insert into fornecedor (razao, cnpj,email,cidade) values ('" . $razao . "', '" . $cnpj .
                "', '" . $email . "', '" . $cidade . "')";
        if ($this->con->bd->Execute($this->sql))
            return true;
        else
            return false;
    }

    function alterar($razao, $cnpj, $email, $cidade, $id) {
        $this->sql = "update fornecedor set razao = '" . $razao . "', cnpj = '" . $cnpj . "', email = '" . $email .
                "', cidade = '" . $cidade . "' where cod = " . $id;
        if ($this->con->bd->Execute($this->sql))
            return true;
        else
            return false;
    }

    function excluir($id) {
        $this->sql = "delete from fornecedor where cod = " . $id;
        if ($this->con->bd->Execute($this->sql))
            return true;
        else
            return false;
    }

    function verifica_cnpj($cnpj) {
        $this->sql = "select * from fornecedor where upper(cnpj) = upper('" . $cnpj . "')";
        $this->res = $this->con->bd->Execute($this->sql);
        return $this->res->RecordCount();
    }

    function lista_cidade($op) {
        $sql = "select * from cidade order by nome";
        $res = $this->con->bd->Execute($sql);
        $opt = '';
        while ($reg = $res->FetchNextObject()) {
            $selecionado = '';
            if ($op == $reg->COD)
                $selecionado = 'selected';
            $opt .= '<option value="' . $reg->COD . '" ' . $selecionado . '>' . $reg->NOME . '</option>';
        }
        return $opt;
    }

    function violacao_integridade($id) {
        $sql = "select * from produto p where p.forne = " . $id;
        $res = $this->con->bd->Execute($sql);
        return $res->RecordCount();
    }


}



  $mod = new fornecedores();
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
          require('fornecedores_list.php');
          break;
      case 'incluir':
          require('fornecedores_form.php');
          break;
      case 'gravar_incluir':
          if($mod->verifica_cnpj($_POST['cnpj']) > 0)
              mensagem('alerta', 'Registro já cadastrado!', 'index_usuario.php?menu=fornecedores');
          else
          {
              if($mod->incluir($_POST['razao'],$_POST['cnpj'], $_POST['email'], $_POST['cidade']))
                  mensagem('informacao', 'Registro incluído com sucesso!', 'index_usuario.php?menu=fornecedores');
              else
                  mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=fornecedores');
          }
          $mod->listar();
          require('fornecedores_list.php');
          break;

      case 'excluir':
          if($mod->violacao_integridade($_GET['id']) > 0){
              mensagem('erro','Este registro não pode ser excluído, pois existem dados agregados a ele!','index_usuario.php?menu=fornecedores');
         }

          else{
          if($mod->excluir($_GET['id']))
              mensagem('informacao', 'Registro excluído com sucesso!', 'index_usuario.php?menu=fornecedores');
          else
              mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=fornecedores');
          }
          $mod->listar();
          require('fornecedores_list.php');
          break;
      case 'alterar':
          $mod->editar($_GET['id']);
          require('fornecedores_form.php');
          break;
      case 'gravar_alterar':
          if($mod->alterar($_POST['razao'],$_POST['cnpj'], $_POST['email'], $_POST['cidade'], $_POST['id']))
              mensagem('informacao', 'Registro alterado com sucesso!', 'index_usuario.php?menu=fornecedores');
          else
              mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=fornecedores');
          $mod->listar();
          require('fornecedores_list.php');
          break;
  }
  ?>
