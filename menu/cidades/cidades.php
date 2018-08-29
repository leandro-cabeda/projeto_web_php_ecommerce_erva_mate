<?php

class cidades
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
    $this->sql = "select * from cidade order by estado";
    $this->res = $this->con->bd->Execute($this->sql);
  }

  function editar($id)
  {
    $this->sql = "select * from cidade where cod = ".$id;
    $this->res = $this->con->bd->Execute($this->sql);
    $this->reg = $this->res->FetchNextObject();
  }

  function incluir($nome, $estado)
  {
    $this->sql = "insert into cidade (nome,estado) values ('".$nome."', '".$estado."')";
    if($this->con->bd->Execute($this->sql))
    return true;
    else
    return false;
  }

  function alterar($nome, $estado, $id)
  {
    $this->sql = "update cidade set nome = '".$nome."', estado = '".$estado."' where cod = " . $id;
    if($this->con->bd->Execute($this->sql))
    return true;
    else
    return false;
  }

  function excluir($id)
  {
    $this->sql = "delete from cidade where cod = ".$id;
    if($this->con->bd->Execute($this->sql))
    return true;
    else
    return false;
  }



  function verifica_cidade($nome, $estado)
  {
    $this->sql = "select * from cidade where upper(nome) = upper('".$nome."') and upper(estado) = upper('".$estado."')";
    $this->res = $this->con->bd->Execute($this->sql);
    return $this->res->RecordCount();
  }

  function lista_estado($op)
  {
    $estado = array('AC','BA','CE','DF','PA','PR','RS','SC','SP','RJ','MG','SE','TO','MA','MT','MS','RR','RO');
    sort($estado);
    $opt = '';
    foreach($estado as $valor)
    {
      $selecionado = '';
      if($op == $valor)
      $selecionado = 'selected';
      $opt .= '<option value="'.$valor.'" '.$selecionado.'>'.$valor.'</option>';
    }
    return $opt;
  }


  function violacao_integridade($id)
  {
    $sql = "select * from fornecedor f where f.cidade = ". $id;
    $res = $this->con->bd->Execute($sql);
    return $res->RecordCount();
  }
}

$mod = new cidades();

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
  require('cidades_list.php');
  break;
  case 'incluir':
  require('cidades_form.php');
  break;
  case 'gravar_incluir':
  if($mod->verifica_cidade($_POST['nome'], $_POST['uf']) > 0)
    mensagem('alerta', 'Registro já cadastrado!', 'index_usuario.php?menu=cidades');
  elseif(!isset($_POST['nome']) || (!isset($_POST['uf']))){
    mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=cidades');
    break;
  }
  elseif($mod->incluir($_POST['nome'], $_POST['uf']))
    mensagem('informacao', 'Registro incluído com sucesso!', 'index_usuario.php?menu=cidades');
  else
    mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=cidades');

  $mod->listar();
  require('cidades_list.php');
  break;

  case 'excluir':
  if($mod->violacao_integridade($_GET['id']) > 0){
    mensagem('erro','Este registro não pode ser excluído, pois existem dados agregados a ele!','index_usuario.php?menu=cidades');
  }

  else{
    if($mod->excluir($_GET['id']))
    mensagem('informacao', 'Registro excluído com sucesso!', 'index_usuario.php?menu=cidades');
    else
    mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=cidades');
  }
  $mod->listar();
  require('cidades_list.php');
  break;
  case 'alterar':
  $mod->editar($_GET['id']);
  require('cidades_form.php');
  break;
  case 'gravar_alterar':
  if($mod->verifica_cidade($_POST['nome'], $_POST['uf']) > 0)
  mensagem('alerta', 'Registro já cadastrado!', 'index_usuario.php?menu=cidades');
  else{
    if($mod->alterar($_POST['nome'], $_POST['uf'], $_POST['id'])){
      mensagem('informacao', 'Registro alterado com sucesso!', 'index_usuario.php?menu=cidades');
    }
    else
    mensagem('erro', 'Ação solicitada não foi realizada!', 'index_usuario.php?menu=cidades');
  }
  $mod->listar();
  require('cidades_list.php');
  break;

}
?>
