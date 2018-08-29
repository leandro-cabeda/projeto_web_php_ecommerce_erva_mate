
<?php

session_start();
require("../bibliotecas/adodb/adodb.inc.php");
require("conecta.php");
require("funcoes.php");


if(empty($_POST['opradio']))
{
	mensagem('alerta','É preciso selecionar para se cadastrar','index_acesso.php');
}
else
{
	$radio=$_POST['opradio'];

	if($radio == "cliente")
	{

		if(empty($_POST['nome']) || empty($_POST['login']) || empty($_POST['email']) || empty($_POST['endereco']) || empty($_POST['cpf']) || empty($_POST['cidade']) || empty($_POST['estado']) || empty($_POST['senha']))
		{

			mensagem('alerta','Falta campo para ser preenchido','index_acesso.php');
		}
		else
		{
			$c = array('=', 'or', 'and', ';', ',', '//', '@', '#'); // digitos  que não interessam, ingnorar
			$nome=$_POST['nome'];
			$login=$_POST['login'];
			$email=$_POST['email'];
			$endereco=$_POST['endereco'];
			$cpf=$_POST['cpf'];
			$cidade=$_POST['cidade'];
			$estado=$_POST['estado'];
			$senha=$_POST['senha'];
			
			foreach ($c as $v) 
			{
				str_replace($v, '', $login);
				str_replace($v, '', $senha);
			}


							


				    		$con = new conecta();


				    		$sqle="select login from cliente where upper(login) = upper('$login')";
				    		$rese = $con->bd->Execute($sqle);
				    		
				    		

				    		if($rese->RecordCount()>0)
				    		{
				    			echo "<script>alert('Já existe esse registro no sistema, insira outro!');
								window.history.go(-1);
								</script>";
				    		}
				    		else
				    		{
								
						    	$sqle="select login from cliente where upper(email) = upper('$email')";
				    			$rese = $con->bd->Execute($sqle);		
											
								if($rese->RecordCount()>0)
				    			{
				    				echo "<script>alert('Já existe esse registro no sistema, insira outro!');
									window.history.go(-1);
									</script>";
				    			}
				    			else
				    			{

				    					$sqle="select login from cliente where cpf='$cpf'";
				    					$rese = $con->bd->Execute($sqle);		
											
										if($rese->RecordCount()>0)
				    					{
				    						echo "<script>alert('Já existe esse registro no sistema, insira outro!');
											window.history.go(-1);
											</script>";
				    					}
				    					else
				    					{

				    						$sql="insert into cliente(nome,login,senha,cidade,estado,email,endereco,cpf) values('".$nome."','".$login."','".md5($senha)."','".$cidade."','".$estado."','".$email."','".$endereco."','".$cpf."')";
							    
								    		$res = $con->bd->Execute($sql);

								    		$sql = "select * from cliente where login = '" . $login . "' and senha = '" . md5($senha) . "';";
								    		$res = $con->bd->Execute($sql);
								    		if ($res->RecordCount() > 0) 
								    		{
									    		$reg = $res->FetchNextObject();// percorre todo registro de dados do banco

									        	$_SESSION['ses_cod'] = $reg->COD;
									        	$_SESSION['ses_nome'] = $reg->NOME;

								        		
								        		mensagem('informacao', 'Cadastro realizado com sucesso!! Bem vindo ao Site', 'index_cliente-home.php');
									        }
									        else
									        {
									        	mensagem('informacao', 'Acesso negado', 'index_acesso.php');
									        }






				    					}



				    			}
							
			
							}
		}
	}

}




?>