<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script>

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
                return "Novo Fornecedor";
            }
            else{
                if(tipo == "alterar"){
                    return "Alteração de Fornecedor";
                }
            }
        }
        function preparar(){
            document.getElementById("titulo").innerHTML = "Empresa Erva-Mate Chimarrão";
            document.getElementById("subTitulo").innerHTML = "Cadastro de fornecedores";
           document.getElementById("operacao").innerHTML = subTitulo();
        }
    </script>
</head>

<body onload="preparar();">


    <h2 id="operacao" style="text-align: center; color: blue; font-weight: bold;"></h2>

    <form name="fornecedor" class="form-horizontal" method="post" action="../php/index_usuario.php">

   
    <div class="form-group">
      <label class="col-md-2 control-label" for="razao">Razão social:</label>
      <div class="col-md-4">
      <input autofocus id="razao" name="razao" placeholder="Razão social" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->razao : ''; ?>">
      </div>
    </div>


       
    <div class="form-group">
      <label class="col-md-4 control-label" for="cnpj">CNPJ:</label>
      <div class="col-md-4">
      <input autofocus id="cnpj" name="cnpj" placeholder="CNPJ" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->cnpj : ''; ?>">
      </div>
    </div>


          
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">E-mail:</label>
      <div class="col-md-4">
      <input autofocus id="email" name="email" placeholder="Informe o email" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->email : ''; ?>">
      </div>
    </div>


        
    <div class="form-group">
      <label class="col-md-4 control-label" for="cidade">Cidade</label>
      <div class="col-md-2">
        <select id="cidade" name="cidade" class="form-control">
            <option value='' selected></option>
             <?php
               echo $mod->lista_cidade($acao == 'alterar' ? $mod->reg->cidade : '');
            ?>
        </select>
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-md-4 control-label" for="gravar"></label>
      <div class="col-md-8">
        <button id="gravar" name="gravar" class="btn btn-success" >Gravar</button>
        <button id="cancelar" name="cancelar" class="btn btn-danger" onclick="window.location = '?menu=fornecedores';" type="reset">Cancelar</button>
      </div>
    </div>
        <input type="hidden" name="menu" value="<?= $menu; ?>">
        <input type="hidden" name="acao" value="gravar_<?= $acao; ?>">
        <input type="hidden" name="id" value="<?php echo $acao == 'alterar' ? $mod->reg->cod : ''; ?>">

    </form>

</body>
</html>
