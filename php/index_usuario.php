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
    <script rel="stylesheet" type="text/javascript">
       function preparar(){
            document.getElementById("titulo").innerHTML = "Empresa de Erva Mate Chimarrão";
            document.getElementById("subTitulo").innerHTML = "Menu Principal do Usuário";
        } 
    </script>
  </head>
  <body onload="preparar();">


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xs">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Relatório</h4>
        </div>
        <div class="modal-body">
          <div class="container">
          <div class="row">
          <div class=" col-xs-12 col-sm-3 col-md-2 sidebar sidebar text-center">
          <ul class="nav nav-sidebar" style="background-color: white;font-size: 0.6em;">
              <li style="margin-top: 0.3em;font-size: 2em;
              color: darkblue;">Selecione o relatório</li>
              <li><a href="../menu/relatorios/cidade.php" target="_blank" class="cab"><strong style="color: darkblue;">Cidade</strong></a></li>
              <li><a href="../menu/relatorios/cliente.php" target="_blank" class="cab"><strong style="color: darkblue;">Clientes</strong></a></li>
              <li><a href="../menu/relatorios/produto.php" target="_blank" class="cab"><strong style="color: darkblue;">Produtos</strong></a></li>
              <li><a href="../menu/relatorios/cli_prod.php" target="_blank" class="cab"><strong style="color: darkblue;">Clientes_Produtos</strong></a></li>
              <li><a href="../menu/relatorios/usuario.php" target="_blank" class="cab"><strong style="color: darkblue;">Usuários</strong></a></li>
              <li><a href="../menu/relatorios/fornecedor.php" target="_blank" class="cab"><strong style="color: darkblue;">Fornecedor</strong></a></li>
          </ul>
              </div>
              </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
        
      </div>
      
    </div>
                    
  </div>


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
                    <li><a href="#" class="cab">ERVA MATE CHIMARRÃO</a></li>
                   </ul>
                 
            </div>
            <div class="col-xs-12 col-md-5">
               <div class=" na navbar-collapse collapse">
                  <ul class="nav nav-pills nav-justified" style="margin-top: 1em;">
                    <li><a href="#" class="link"><span class="glyphicon glyphicon-home link"></span>Home</a></li>
                    <li><a href="index_usuario-empresa.php" class="link"><span class="glyphicon glyphicon-briefcase link"></span>Empresa</a></li>
                </ul>
          </div>
        </div>
        
        <div class="col-xs-12 col-md-4" style="width: 25em; height: 7.5em;">
            <div class=" na media">
            <div class="media-body">
              <h4 class="media-heading link2" style="margin-top: 0.7em;font-size: 20px;">Seja bem vindo: <?php echo $_SESSION['ses_nome'];?></h4>
              <h5 class="link2" style="font-size: 20px;">Usuário do Sistema da Empresa Erva-Mate Chimarrão.</h5>
            </div>


            </div>
               
          </div>
          </div>
          </div>
    </nav>

  </div>

       


   <div class="container">
          <div class="row">
    
      <div class=" col-xs-12 col-sm-3 col-md-2 sidebar sidebar text-center">
            <ul class="nav nav-sidebar" style="background-color: black;font-size: 0.6em;">
              <li><a href="#" class="cab">Home</a></li>
              <li><a href="?menu=usuarios" class="cab">Usuários</a></li>
              <li><a href="?menu=clientes" class="cab">Clientes</a></li>
              <li><a href="?menu=cli_prod" class="cab">Clientes_Produtos</a></li>
              </ul>
          
          <ul class="nav nav-sidebar" style="background-color: black;font-size: 0.6em;">
              <li><a href="?menu=cidades" class="cab">Cidades</a></li>
          </ul>
          <ul class="nav nav-sidebar" style="background-color: black;font-size: 0.6em;">
              <li><a href="?menu=fornecedores" class="cab">Fornecedores</a></li>
          </ul>
          <ul class="nav nav-sidebar" style="background-color: black;font-size: 0.6em;">
              <li><a href="?menu=produtos" class="cab">Produtos</a></li>
              <li><a href="#" id="rela" class="cab">Relatório</a></li>
          </ul>

            <ul class="nav nav-sidebar" style="background-color: black;font-size: 0.6em;">
             <li><a href="logoff.php" class="cab">Sair</a></li>
              </ul>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-10">
                      <div id="page-wrapper" class="main col-md-10 ">
                      <h1 id="titulo" style="color: black;" class="text-center"></h1>
                      <h2 id="subTitulo" style="color: black;" class="text-center"></h2>
                      <h5 style="position:relative; text-align: right; top: -1px;">Acesso nº: <?php echo $_SESSION['ses_num_acesso'];?>&nbsp;&nbsp;-&nbsp;&nbsp;Último acesso foi em : <?php echo inverte_data($_SESSION['ses_dat'],'-','/').' as '. $_SESSION['ses_hora_acesso'];?></h5>
                    
                    </div>

            </div>
                    <?php
                        if (isset($_REQUEST['menu'])) 
                        {

                            $menu = $_REQUEST['menu'];
                            require('../menu/' . $menu . '/' . $menu . '.php');
                        }

                      }
                      
                    ?>


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
    <script type="text/javascript" src="../js/holder.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/ie.js"></script>
    <!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
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

    <script type="text/javascript">
    $(document).ready(function(){   
      $('#rela').click(function(){
        $('#myModal').modal({backdrop:false, keyboard:false},'show');

      });

      /*$('#myModal').modal({backdrop:false, keyboard:false}); // backdrop tira imagem escua da mensagem modal, keyboard nao permite que apertar ESC feche a janela automático

      $('#myModal').modal('show');

      setTimeout(function(){
        $('#myModal').modal('hide'); // tempo de segundos ele fica ativo depois se fecha automatico

      },3000);*/

    });
    
  </script>

</body>
</html>