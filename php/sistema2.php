<?php

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
			require("funcoes.php");

			
			$con = new conecta();

			$sql="select * from usuario where login = '" . $login . "' and senha = '" . md5($senha) . "'";
			$res=$con->bd->Execute($sql);

			if($res->RecordCount() > 0)
			{
					$reg = $res->FetchNextObject();// percorre todo registro de dados do banco

					$_SESSION['ses_cod'] = $reg->COD;
					$_SESSION['ses_nome'] = $reg->NOME;
					$_SESSION['ses_num_acesso'] = $reg->NUM_ACESSO+1;
					$_SESSION['ses_dat'] = $reg->DAT;
					$_SESSION['ses_hora_acesso'] = $reg->HORA_ACESSO;
 
					$res2= $con->bd->Execute("update usuario set num_acesso = ".($reg->NUM_ACESSO+1).", dat = current_date, hora_acesso = date_trunc('second', clock_timestamp())::time, ip = '".$_SERVER["REMOTE_ADDR"]."' where cod = ".$reg->COD);
				
					mensagem('informacao', 'Bem vindo ao Site ', 'index_usuario.php');
			}
			else
			{
				mensagem('informacao', 'Acesso negado!!!', '../index.php');
			}

			


}




?>