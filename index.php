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
            <div class="col-xs-12 col-md-2">
            	
		              <ul class="nav nav-pills nav-justified">
		                <li><a href="#" class="cab">ERVA MATE</a></li>
		               </ul>
		             
            </div>
           	<div class="col-xs-12 col-md-2">
		           <div class=" na navbar-collapse collapse">
		              <ul class="nav nav-pills nav-justified">
		                <li><a href="#" class="link"><span class="glyphicon glyphicon-home link"></span>Home</a></li>
        						<li><a href="php/index_empresa.php" class="link"><span class="glyphicon glyphicon-briefcase link"></span>Empresa</a></li>
        				</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<form class=" na navbar-form" method="POST" action="index2.php" style="margin-left: 5em;" id="busc" role="search">

						<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
								<input type="text" name="buscar" required class="form-control" placeholder="Buscar">
						</div>
						<div class="input-group">
										<input type="submit"  class="btn btn-primary pv" value="Buscar" data-toggle="popover" data-placement="bottom" title="Procurar" data-content="Faça sua busca " data-container="body">
						</div>
					</form>

				</div>
				
				<div class="col-xs-12 col-md-3">
						
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

    <div class="container carse" style="background-color: #1C1C1C;width: 81em;">

      
      <div class="row" style="margin-top: 2em;">
        <div class="col-md-4">
          <img class="img-circle center-block" src="images/ev1.jpg" alt="seiva" width="140" height="140"><br><br><br><br>
          <p style="color: white;font-size: 1.5em;">Matear sozinho não é ruim.
			É um momento só meu, refletir, acalmar, pensar,
			Decidir o que faz bem pra mente e o que vai ficar no coração</p>
        </div>
        <div class="col-md-4">
          <img class="img-circle center-block" src="images/ev2.jpg" alt="picolo" width="140" height="140"><br><br><br><br>
          <p style="color: white;font-size: 1.5em;">Céu estrelado, 
			tu ao meu lado,
			Um mate ajeitado, 
			dá pra sonhar um bocado.</p>
        </div>
        <div class="col-md-4">
          <img class="img-circle center-block" src="images/ev3.jpg" alt="tertulia" width="140" height="140"><br><br><br><br>
          <p style="color: white;font-size: 1.5em;">A chuva me traz a saudade. 
			O mate me traz o sabor.
			O sabor me traz a lembrança,
			dos beijos do meu amor</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <p class="lead" style="color: white;font-size: 1.5em;margin-top: 3em;">Vamos apertar um mate, tchê? Moro no Sul desde de 1988, mas o gosto pelo chimarrão se deu aos poucos. Aprendi a apreciar o mate com o sogrão velho de guerra, que era chegado.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/ev4.jpg" alt="goma" style="height: 15em;width: 15em;">
        </div>
      </div>


      <div class="row">
        <div class="col-md-7 col-md-push-5">
          <p class="lead" style="color: white;font-size: 1.5em;margin-top: 3em;">A dificuldade com o plantio por meio de sementes acabou por gerar outro fato interessante: na época em que os jesuítas dominavam o cultivo da erva-mate, os senhores coloniais queriam a todo custo entrar naquele mercado, mas encontraram muita dificuldade, pois não conseguiam fazer com que as sementes germinassem.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/ev5.jpg" alt="goma" style="height: 15em;width: 15em;">
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <p class="lead" style="color: white;font-size: 1.5em;margin-top: 3em;">Uns diziam que as sementes eram escaldadas em água quente, outros afirmavam que antes do plantio os jesuítas davam as sementes para aves domésticas ou não (falou-se até em tucanos) e só as plantavam após serem expelidas.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/ev6.jpg" alt="goma" style="height: 15em;width: 15em;">
        </div>
      </div>

     </div>  


     <div class="container">
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

     </div>


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


