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
		                <li><a href="../index.php" class="link">ERVA MATE CHIMARRÃO</a></li>
		               </ul>
		             
            </div>
           	<div class="col-xs-12 col-md-5">
		           <div class=" na navbar-collapse collapse">
		              <ul class="nav nav-pills nav-justified" style="margin-top: 0.2em;">
		                <li><a href="../index.php" class="link"><span class="glyphicon glyphicon-home link"></span>Home</a></li>
        						<li><a href="index_empresa.php" class="link"><span class="glyphicon glyphicon-briefcase link"></span>Empresa</a></li>
        				</ul>
					</div>
			</div>

      <div class="col-xs-12 col-md-4">
               <div class=" na navbar-collapse collapse">
                  <ul class="nav nav-pills nav-justified">
                    <li><a href="#" class="link" style="margin-right: 0.8em; margin-top: 0.2em;"><span class="glyphicon glyphicon-tower link"></span>&nbsp;Bem Vindo ao Cadastro</a></li>
                </ul>
          </div>
      </div>
		        </div>
		           
          </div>
        


        <div class="row">
            <div class="col-xs-12 col-md-12">
              
                          <h2 style="text-align: center; color: blue; font-weight: bold; font-size: 4em;"><strong id="hh">Cadastro</strong></h2>
                          <form name="index_acesso" class="form-horizontal" method="post" action="sistema.php">

                          		<div class="form-group">
                                  <label class="col-md-4 control-label link2" for="nome">Nome:</label>
                                  <div class="col-md-4">
                                  <input type="txt" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="login">Login:</label>
                                  <div class="col-md-4">
                                  <input type="txt" class="form-control" id="login" placeholder="Digite seu login" name="login">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="email">Email:</label>
                                  <div class="col-md-4">
                                  <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="endereco">Endereço:</label>
                                  <div class="col-md-4">
                                  <input type="text" class="form-control" id="endereco" placeholder="Digite seu endereço" name="endereco">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="cpf">CPF:</label>
                                  <div class="col-md-4">
                                  <input type="text" class="form-control" id="cpf" placeholder="Digite seu cpf" name="cpf">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="cidade">Cidade:</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="cidade" name="cidade">
                                      <option value='' selected></option>
                                      <option>Passo Fundo</option>
                                      <option >Marau</option>
                                      <option >Porto Alegre</option>
                                      <option >Florianópolis</option>
                                       <option>Blumenau</option>
                                      <option >Chapecó</option>
                                      <option >Curitiba</option>
                                      <option >São Paulo</option>
                                       <option>Rio de Janeiro</option>
                                      <option >Cascavel</option>
                                  </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="estato">Estato:</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="estado" name="estado">
                                      <option value='' selected></option>
                                      <option>RS</option>
                                      <option >Santa Catarina</option>
                                      <option >Paraná</option>
                                      <option >Rio de Janeiro</option>
                                       <option>São Paulo</option>
                                  </select>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-md-4 control-label link2" for="senha">Senha:</label>
                                  <div class="col-md-4">
                                  <input type="password" class="form-control" id="senha" placeholder="Digita a senha" name="senha">
                                  </div>
                                </div>


                                
                                  <label class="control-label col-md-4 link2">Marque a opção para Cadastrar:</label>
                                  <label class="radio-inline link2" style="margin-left: 1.5em;font-size: 1.3em;">
                                    <input type="radio" name="opradio" id="cli" value="cliente">Cliente
                                  </label>
                              


                               <div class="form-group" style="margin-top: 0.8em;">
                                <label class="col-md-4 control-label" for="enviar"></label>
                                <div class="col-md-4">
                                  <button id="enviar" name="enviar" class="btn btn-primary" >Enviar</button>
                                  <button id="cancelar" name="cancelar" class="btn btn-danger" onclick="window.location = '../index.php';" type="reset">Cancelar</button>
                                </div>
                              </div>



                          </form>

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
    <script type="text/javascript" src="code.jquery.com/jquery-1.10.2.js"></script>
</body>
</html>