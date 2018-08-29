<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/inicio.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- site dos icons do bootstrap -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="../js/holder.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/ie.js"></script>
      <!--<script type="text/javascript" src="../js/jquery.min.js"></script>-->
      <script type="text/javascript" src="code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>

        <!-- Modal -->
        <div id="msgModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Informação</h4>
                    </div>
                    <div class="modal-body">
                        <p id="mensagem2">Mensagem</p>
                    </div>
                    <div class="modal-footer">
                        <button id="botao2" type="button" class="btn" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <?php

                      
                  

        function redirecionar($url) {
            echo '<script>';
            echo "window.location='$url'";
            echo '</script>';
        }

        function inverte_data($dt, $a, $n) 
        {
            $vet = explode($a, $dt);
            return $vet[2] . $n . $vet[1] . $n . $vet[0];
        }


        function mensagem($tipo, $texto, $fw) {
            
            if ($tipo == 'alerta') {
                echo "<script>
              $('#msgModal').modal('show');
              $('.modal-title').html('Atenção');
              $('.modal-body').html('" . $texto . "');
              $('#botao2').addClass('btn-warning');
             $('#msgModal').on('hide.bs.modal', function () { 
                window.location.href = '" . $fw . "';
              });
              </script>";
            } elseif ($tipo == 'informacao') {
                echo "<script>
              $('#msgModal').modal('show');
              $('.modal-title').html('Informação');
              $('.modal-body').html('" . $texto . "');
              $('#botao2').addClass('btn-info');
             $('#msgModal').on('hide.bs.modal', function () { 
                window.location.href = '" . $fw . "';
              });
              </script>";
            } elseif ($tipo == 'erro') {
                echo "<script>
              $('#msgModal').modal('show');
              $('.modal-title').html('Erro');
              $('.modal-body').html('" . $texto . "');
              $('#botao2').addClass('btn-danger');
             $('#msgModal').on('hide.bs.modal', function () { 
                window.location.href = '" . $fw . "';
              });
              </script>";
            }
        }
        ?>


    </body>
</html>
