<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/inicio.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- site dos icons do bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    
    function acao1() { 
      document.frm.action = "php/sistema2.php";
    }
    function acao2() { 
      document.frm.action = "php/sistema3.php";
    }

  </script>
  
</head>

  <body>
  
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".na" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              

            </div>


       <div class="row">     
            <div class="col-xs-12 col-md-3">
            	
		              <ul class="nav nav-pills nav-justified">
		                <li><a href="#" class="cab">ERVA MATE</a></li>
		               </ul>
		             
            </div>
           	<div class="col-xs-12 col-md-4">
		           <div class=" na navbar-collapse collapse">
		              <ul class="nav nav-pills nav-justified">
		                <li><a href="index.php" class="link"><span class="glyphicon glyphicon-home link"></span>Home</a></li>
        						<li><a href="php/index_empresa.php" class="link"><span class="glyphicon glyphicon-briefcase link"></span>Empresa</a></li>
        				</ul>
					</div>
				</div>
			
				
				<div class="col-xs-12 col-md-5">
						
			                  <form class=" na navbar-form navbar-right" name="frm" method="post" role="login" action="">
																	
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-user link2">&nbsp;Login:</span>
									<input type="text" class="form-control" placeholder="Digite seu Login" name="login" id="login">
								</div>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-log-in link2">&nbsp;Senha:</span>
									<input type="password" class="form-control" placeholder="Digite sua senha" name="senha" id="senha">
								</div>

								<div class="input-group">
									<input type="submit" class="btn btn-primary pv" value="Usuário" onclick="acao1();" name="usuario" data-toggle="popover" data-placement="bottom" title="Entre como Usuário" data-content="Faça seu login clicando aqui!" data-container="body">
								  <input type="submit" class="btn btn-primary pv" value="Cliente" onclick="acao2();" name="cliente" data-toggle="popover" data-placement="bottom" title="Entre como Cliente" data-content="Faça seu login clicando aqui!" data-container="body">
								
									<a href="php/index_acesso.php"><button type="button" class="btn btn-primary pv" value="Cadastrar" data-toggle="popover" data-placement="bottom" title="Cadastra-se" data-content="Faça seu cadastro clicando aqui!"  data-container="body">Cadastrar</button></a>
								</div>	
							</form>	

		            </div>
		        </div>
		           
          </div>
        </nav>

      </div>
    </div>

    <div class="container carse" style="background-color: #1C1C1C;width: 83em;">

      
      <div class="row" style="margin-top: 2em;">
      <?php
           require("php/funcoes.php");
            

            $c = array('=', 'or', 'and', ';', ',', '//', '@', '#');
            $nome=$_POST['buscar'];
            trim($nome);

            foreach ($c as $v) 
            {
              str_replace($v, '', $nome);
              
            }

            require("bibliotecas/adodb/adodb.inc.php");
            require("php/conecta.php");

            $con = new conecta();

              $sql="select * from produto where nome LIKE '%$nome%'";
              $res = $con->bd->Execute($sql);
            if($res->RecordCount()>0)
            {
              while ($reg = $res->FetchNextObject()) 
              {
                    echo $x="<div class='col-sm-3 col-sm-offset-2 col-md-3 col-md-offset-4'>
                        <div class='thumbnail img-responsive'>
                            <img src='images/$reg->IMG' alt='picolo' style='height: 8.35em;'>
                            <div class='caption'>
                              <p><strong class='pro'>$reg->CUSTO</strong></p>
                              <p><strong class='pro'>$reg->NOME</strong></p>
                            </div>
                        </div>

                    </div>";
                }
              }
              else
              {
                
                redirecionar('index.php');
              }
            


          ?>
        

     </div>  


     <div class="container">
      
        <div class="row">
          <div class="col-xs-12 col-md-5">
                <ul class="nav nav-pills nav-stacked text-center">
                  <li class="link2">Endereço: Rua Santo Antônio, 650, Silver</li>
                  <li class="link2">© Copyright 2017 Webnode AG. All rights reserved. Seu portal de Erva-Mate Chimarrão</li>
                  <li class="link2">Contato: (54)93046-8873</li>
                  <li class="link2">erva-mate@gmail.com</li>
                  <li class="link2">Todos os direitos reservados!</li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-offset-2  col-md-5">
                <ul class="nav nav-pills nav-stacked text-center" id="rd">
                  <li><strong class="font"><a href="#" class="fa fa-facebook link2">&nbsp;Clique aqui e nos curta no Facebook</a></strong></li>
                  <li><strong class="font"><a href="#" class="fa fa-twitter link2">&nbsp;Clique aqui e nos curta no Twitter</a></strong></li>
              </ul>
            </div>

          </div>
              
      

     </div>

     <?php


     ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/holder.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ie.js"></script>
    <!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
    <script type="text/javascript" src="code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function(){

          $(".pv").popover({

            animation: false,
            delay: {show:500, hide:500},
            trigger: 'hover focus'


          });
        
        });
    </script>

  </body>
</html>


