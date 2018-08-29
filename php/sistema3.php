<?php
require("funcoes.php");

if(empty($_POST['login']) || empty($_POST['senha']))
{
	mensagem('alerta','Falta de campo para preencher','../index.php');
}
else
{

			$c = array('=', 'or', 'and', ';', ',', '//', '@', '#'); // digitos  que não interessam, ingnorar
			$login=$_POST['login'];
			$senha=$_POST['senha'];
			
			foreach ($c as $v) 
			{
				str_replace($v, '', $login);
				str_replace($v, '', $senha);
				
			}

			session_start();
			require("../bibliotecas/adodb/adodb.inc.php");
			require("conecta.php");


			
			$con = new conecta();

			$sql="select * from cliente";
			$res=$con->bd->Execute($sql);

			if($res->RecordCount() > 0)
			{
				$reg = $res->FetchNextObject(); // percorre todo registro de dados do banco

				$_SESSION['ses_cod'] = $reg->COD;
				$_SESSION['ses_nome'] = $reg->NOME;

				mensagem('informacao', 'Bem vindo ao Site', 'index_cliente-home.php');
				
					
			}
			else
			{
				mensagem('informacao', 'Acesso negado!!!', '../index.php');
			}

			


}




?>