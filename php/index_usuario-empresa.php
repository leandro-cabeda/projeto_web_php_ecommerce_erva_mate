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

          <form role="form">
            <div class="form-group">
              <label for="sel" class="control-label pro">Selecione qual deseja gerar o relatório:</label>
              <select name="sel" id="sel" class="form-control">
                <option value="" selected></option>
                <option>usuario</option>
                <option>cliente</option>
                <option>produto</option>
                <option>tudo</option>
              </select>
            </div>

          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Gerar Relatório</button>
        </div>
      </div>
      
    </div>
  </div>

<?php
    session_start();
    require("../bibliotecas/adodb/adodb.inc.php");
    require("conecta.php");
    require("funcoes.php");

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
                    <li><a href="index_usuario.php" class="link"><span class="glyphicon glyphicon-home link"></span>Home</a></li>
                    <li><a href="#" class="link"><span class="glyphicon glyphicon-briefcase link"></span>Empresa</a></li>
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
    

       


   
          <div class="row">
    
                  <div class="col-sm-3 col-md-2 sidebar sidebar text-center">
                        <ul class="nav nav-sidebar">
                          <li><a href="index_usuario.php"><strong class="sede">Home</strong></a></li>
                          <li><a href="?menu=usuarios"><strong class="sede">Usuários</strong></a></li>
                          <li><a href="?menu=clientes"><strong class="sede">Clientes</strong></a></li>
                          <li><a href="?menu=cli_prod"><strong class="sede">Clientes_Produtos</strong></a></li>
                          </ul>
                      
                      <ul class="nav nav-sidebar">
                          <li><a href="?menu=cidades"><strong class="sede">Cidades</strong></a></li>
                      </ul>
                      <ul class="nav nav-sidebar">
                          <li><a href="?menu=fornecedores"><strong class="sede">Fornecedores</strong></a></li>
                      </ul>
                      <ul class="nav nav-sidebar">
                          <li><a href="?menu=produtos"><strong class="sede">Produtos</strong></a></li>
                          <li><a href="#" id="rela"><strong class="sede">Relatório</strong></a></li>
                      </ul>

                        <ul class="nav nav-sidebar">
                         <li><a href="logoff.php"><strong class="sede">Sair</strong></a></li>
                          </ul>
                        </div>

                    <div class="col-sm-3 col-md-4">
                      <h3 class="text-center" style="color:white;">Histórico</h3>
                        <p style="color: white;" class="text-center">A Empresa de Erva Mate, foi fundada no ano de 2017, e quando construiu sozinho um mangiolo movido a água nos fundos da casa onde morava, produzia e também revendia sua erva mate já pronta para chimarrão aos moradores do interior de Passo Fundo e região.
                        </p>
                          <h3 class="text-center" style="color:white;">Modo Preparo do Chimarrão</h3>
                          <p style="color: white;" class="text-center">
                            <p style="color: white;" class="text-center"> 1-Preencha 2/3 da cuia com a Erva-Mate Seiva Verde;</p>
                           <p style="color: white;" class="text-center">2- Ajeite a Erva em um lado da cuia;</p>
                            <p style="color: white;" class="text-center">3-Derrame água morna sobre a Erva-Mate e deixe-a inchar por alguns momentos;</p>
                            <p style="color: white;" class="text-center">4-Coloque a bomba até o fundo da cuia;</p>
                           <p style="color: white;" class="text-center"> 5-Encha o mate com água quente(não fervida) e pronto!</p>

                          </p>
                
                    </div>

                    <div class="col-sm-3 col-md-3">
                      
                      <h3 class="text-center" style="color:white;">Localização</h3><br><br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5910.0522175514!2d-52.41982883216521!3d-28.26382984919614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94e2c09e3fe0c317%3A0x7aed940e24c087c3!2sRua+Lava+P%C3%A9s%2C+526-690+-+Boqueir%C3%A3o%2C+Passo+Fundo+-+RS%2C+99025-120%2C+Brasil!3m2!1d-28.2633805!2d-52.4211956!5e0!3m2!1spt-BR!2sbr!4v1478895236619" width="400" height="210" frameborder="0" style="height: 19em;width: 18em;" allowfullscreen></iframe>
                 
                
                    </div>

                    <div class="col-sm-3 col-md-3">
                      <h3 class="text-center" style="color:white;">Demonstração</h3><br><br>
                      <iframe width="400" height="220" src="https://www.youtube.com/embed/E2opUlKCWxs" frameborder="0" allowfullscreen style="width: 18em;height: 19em;"></iframe>
                    
                 
                
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

                    <?php
                        if (isset($_REQUEST['menu'])) 
                        {

                            $menu = $_REQUEST['menu'];
                            require('menu/' . $menu . '/' . $menu . '.php');
                        }

                      }
                      
                    ?>
              
      </footer>
</nav>

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