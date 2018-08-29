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
            document.getElementById("subTitulo").innerHTML = "Lista de Clientes";
            document.getElementById("operacao").innerHTML = "Listagem de Clientes"; 
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
            <table class="table table-striped text-center" style="width: 69em;color: white;background-color: black;">
              <thead>
                <tr>
                  <th class="text-center">Código</th>
                  <th class="text-center">Nome</th>
                  <th class="text-center">Login</th>
                  <th class="text-center">Cidade</th>
                  <th class="text-center">Estado</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Endereço</th>
                  <th class="text-center">CPF</th>
                  <th class="actions text-center">Ações</th>
                  </tr>
              </thead>
              <tbody>
               <?php

                while ($reg = $mod->res->FetchNextObject()) {
                ?>
                <tr style="color: white;background-color: black;">
                  <td><?php echo $reg->COD; ?></td>
                  <td><?php echo $reg->NOME; ?></td>
                  <td><?php echo $reg->LOGIN; ?></td>
                  <td><?php echo $reg->CIDADE; ?></td>
                  <td><?php echo $reg->ESTADO; ?></td>
                  <td><?php echo $reg->EMAIL; ?></td>
                  <td><?php echo $reg->ENDERECO; ?></td>
                  <td><?php echo $reg->CPF; ?></td>
                  <td class="actions">
                    <a class="btn btn-danger btn-xs" data-href="?menu=clientes&acao=excluir&id=<?php echo $reg->COD; ?>" data-toggle="modal" data-target="#confirm-delete">Excluir</a>
                 </td>
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
