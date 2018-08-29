<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script type="text/javascript">
      function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
            });
            return vars;
    }
        
       function subTitulo(){
            var tipo = getUrlVars()["acao"];
            if(tipo == "incluir"){
                return "";
            }
            else{
                if(tipo == "alterar"){
                    return "";
                }
            }
        }

    function preparar(){
            document.getElementById("titulo").innerHTML = "Empresa Erva-Mate Chimarrão";
            document.getElementById("subTitulo").innerHTML = "Clientes e Produtos Cadastrados";
            document.getElementById("operacao").innerHTML = "Listagem de Clientes com Produtos"; 
    }

    </script>
</head>

<body onload="preparar();">

   <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirma a exclusão deste registro?</h4>
                </div>
            
                <div class="modal-body">
                    <p> A exclusão elimina o registro definitivamente do banco de dados!</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Excluir</a>
                </div>
            </div>
        </div>
    </div>  
       <h2 id="operacao" style="text-align: center; color: blue; font-weight: bold;"></h2>
          <div class="table-responsive" style="margin-top: 10px;">
            <table class="table table-striped text-center" style="width: 60em;color: white;background-color: black;">
              <thead>
                <tr>
                  <th class="text-center">Código</th>
                  <th class="text-center">Cliente</th>
                  <th class="text-center">Produto</th>
                  <th class="text-center">Quantidade</th>
                  <th class="text-center">Total</th>
                  </tr>
              </thead>
              <tbody>
               <?php

                while ($reg = $mod->res->FetchNextObject()) {
                ?>
                <tr style="color: white;background-color: black;">
                  <td><?php echo $reg->COD; ?></td>
                  <td><?php echo $reg->CLI; ?></td>
                  <td><?php echo $reg->PROD; ?></td>
                  <td><?php echo $reg->QTD; ?></td>
                  <td><?php echo $reg->TOTAL; ?></td>
                </tr>
                <?php
                    }
                ?>
                               
              </tbody>
            </table>
          </div> 
          <script>
        $(document).ready(function(){
             });
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
        
    </script>

</body>
</html>
