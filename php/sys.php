<?php


if(!empty($_GET['email']) and !empty($_GET['message']))
{
	$texto=$_GET['message'];


	$arq=fopen('mensagem.txt', 'a+');


	if(fwrite($arq,$texto))
	{

		echo "<script>alert('Mensagem enviada com sucesso!');
			window.history.go(-1);
			</script>";
		
	}
	else
	{
		echo "<script>alert('Mensagem não foi enviada!');
			window.history.go(-1);
			</script>";
	}
	fclose($arq);
	
}
else
{
	echo "<script>alert('Falta de campo para preencher!');
			window.history.go(-1);
			</script>";
}



?>