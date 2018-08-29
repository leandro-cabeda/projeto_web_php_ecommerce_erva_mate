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
                return "Novo Produto";
            }
            else{
                if(tipo == "alterar"){
                    return "Alteração de Produto";
                }
            }
        }
        function preparar(){
            document.getElementById("titulo").innerHTML = "Empresa Erva-Mate Chimarrão";
            document.getElementById("subTitulo").innerHTML = "Cadastro de produtos";
           document.getElementById("operacao").innerHTML = subTitulo();
        }
</script>
    </head>
<body>
    <h2 id="operacao" style="text-align: center; color: blue; font-weight: bold;"></h2>
    <form name="produto" id="produto" class="form-horizontal" method="post" action="../php/index_usuario.php" enctype="multipart/form-data">

   <!-- Nome -->
    <div class="form-group">
      <label class="col-md-2 control-label" for="nome">Nome:</label>
      <div class="col-md-4">
      <input autofocus id="nome" name="nome" placeholder="Nome do produto" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->nome : ''; ?>">
      </div>
    </div>

    <!-- Select Fornecedor -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="fornecedor">Fornecedor:</label>
      <div class="col-md-4">
        <input id="fornecedor" name="fornecedor" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->forne : ''; ?>">
            
      </div>
    </div>


    <!-- Quantidade -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="qtd">Quantidade:</label>
      <div class="col-md-2">
      <input id="qtd" name="qtd" placeholder="Quantidade" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->qtd : ''; ?>">
      </div>
    </div>

    <!-- File Imagem -->
  <div class="form-group">
  <label class="col-md-4 control-label" for="imagem">Imagem:</label>
  <div class="col-md-4">
  <input id="imagem" name="imagem" class="btn btn-primary btn-file"  type="file">
  </div>
  </div>



    <!-- Custo -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="custo">Custo:</label>
      <div class="col-md-2">
      <input id="custo" name="custo" placeholder="Custo" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->custo : ''; ?>">
      </div>
    </div>



<!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="gravar"></label>
      <div class="col-md-8">
        <button id="gravar" name="gravar" class="btn btn-success" >Gravar</button>
        <button id="cancelar" name="cancelar" class="btn btn-danger" onclick="window.location = '?menu=produtos';" type="reset">Cancelar</button>
      </div>
    </div>
        <input type="hidden" name="menu" value="<?= $menu; ?>">
        <input type="hidden" name="acao" value="gravar_<?= $acao; ?>">
        <input type="hidden" name="id" value="<?php echo $acao == 'alterar' ? $mod->reg->cod : ''; ?>">

</form>

    </body>
</html>
