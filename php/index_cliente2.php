<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/inicio.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- site dos icons do bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>


 <?php
    session_start();
    require("../bibliotecas/adodb/adodb.inc.php");
    require("../php/conecta.php");
    require("../php/funcoes.php");

      if(isset($_SESSION['ses_cod']))
      {
          $con = new conecta();
?> 


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
		                    <li><a href="index_cliente-home.php" class="cab">ERVA MATE</a></li>
		                </ul>
		                 
		            </div>

		            <div class="col-xs-12 col-md-3">
		               <div class=" na navbar-collapse collapse">
		                  	<ul class="nav nav-pills nav-justified">
		                   		 <li><a href="index_cliente-home.php" class="link"><span class="glyphicon glyphicon-home link"></span>Home</a></li>
		                    	<li><a href="index_cliente-empresa.php" class="link"><span class="glyphicon glyphicon-briefcase link"></span>Empresa</a></li>
		                	</ul>
		          		</div>
		        	</div>

		        	<div class="col-xs-12 col-md-3">

		       			<ul class=" na nav nav-pills nav-justified">
		               		<li><a href="#" class="link"><span class="glyphicon glyphicon-shopping-cart link"></span>MeuCarrinho</a></li>
		         		</ul>
		         	</div>
		        
		        	<div class="col-xs-12 col-md-3" style="width: 18em; height: 7.5em;">
				            <div class=" na media">
				            	<div class="media-body">
				             		 <h4 class="media-heading link2" style="margin-top: 0.7em;font-size: 20px;">Seja bem vindo: <?php echo $_SESSION['ses_nome'];?></h4>
              						<h5 class="link2" style="font-size: 20px;">Erva-Mate Chimarrão.</h5>
				            	</div>

		            		</div>
		               
		          	</div>
		      </div>

		    </div>
		  
		  



   
   		
	   			<div class="row">

				      <div class=" col-xs-12 col-sm-3 col-md-2 text-center">
				            <ul class="nav nav-sidebar">
				              <li><a href="index_cliente-home.php"><strong class="sede">Home</strong></a></li>
				            </ul>
				          
				          <ul class="nav nav-sidebar">
				              <li><a href="index_cliente.php"><strong class="sede">Produtos</strong></a></li>
				              <li><a href="../menu/relatorios/produto.php" target="_blank"><strong class="sede">Relatório Produtos</strong></a></li>

				          </ul>

				            <ul class="nav nav-sidebar">
				             <li><a href="logoff.php"><strong class="sede">Sair</strong></a></li>
				              </ul>
				       </div>
					 		<div class=' col-xs-12 col-sm-3 col-md-8'>
				       			<div class='row'>
					<?php
						$c = array('=', 'or', 'and', ';', ',', '//', '@', '#');
			            $nome=$_POST['buscar'];
			            trim($nome);

			            foreach ($c as $v) 
			            {
			              str_replace($v, '', $nome);
			              
			            }

					    $con = new conecta();

			              $sql="select * from produto where nome LIKE '%$nome%'";
			              $res = $con->bd->Execute($sql);
			            if($res->RecordCount()>0)
			            {
			              while ($reg = $res->FetchNextObject()) 
			              {
			                    echo $x="<div class='col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-4'>
			                        <div class='thumbnail img-responsive'>
			                            <img src='../images/$reg->IMG' alt='picolo' style='height: 8.35em;'>
			                            <div class='caption'>
			                              <p><strong class='pro'>$reg->CUSTO</strong></p>
			                              <p><strong class='pro'>$reg->NOME</strong></p>
			                              <input type='number' name='qtd' style='height: 2.4em;'' id='$reg->COD' placeholder='Selecione a quantidade' autofocus  max='$reg->QTD'><a class='btn btn-warning btn-xs' href='#'>Adicionar</a>
			                            </div>
			                        </div>

			                    </div>";
			                }
			              }
			              else
			              {
			                
			                redirecionar('index_cliente-home.php');
			              }
			            
									 

					?>


				      </div>
				      <?php

                      }
                      
                    ?>
					

				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-5">
						
						

					</div>
					



				</div>


   
    
 
      <footer id="rodape">
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
              
      </footer>

    
</nav>

   </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/holder.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/ie.js"></script>
    <!--<script type="text/javascript" src="../js/jquery.min.js"></script>-->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
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