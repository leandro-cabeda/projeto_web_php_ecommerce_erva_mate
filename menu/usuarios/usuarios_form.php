<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
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
                return "Novo Usuário";
            }
            else{
                if(tipo == "alterar"){
                    return "Alteração de Usuário";
                }
            }
        }
        function preparar(){
            document.getElementById("titulo").innerHTML = "Empresa Erva-Mate Chimarrão";
            document.getElementById("subTitulo").innerHTML = "Cadastro de usuários";
            document.getElementById("operacao").innerHTML = subTitulo(); 
        }
    </script>
</head>

<body onload="preparar();">

    
    <h2 id="operacao" style="text-align: center; color: blue; font-weight: bold;"></h2>
      
    <form name="usuario" class="form-horizontal" method="post" action="../php/index_usuario.php">
    
    
    <div class="form-group">
      <label class="col-md-2 control-label" for="nome">Nome:</label>  
      <div class="col-md-4">
      <input autofocus id="nome" name="nome" placeholder="Digite seu nome" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->nome : ''; ?>">
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-md-4 control-label" for="login">Login:</label>  
      <div class="col-md-4">
      <input id="login" name="login" placeholder="Informe seu login" class="form-control input-md" required="" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->login : ''; ?>">
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-md-4 control-label" for="senha">Senha:</label>
      <div class="col-md-4">
        <input id="senha" name="senha" placeholder="Digite sua senha" class="form-control input-md" required="" type="password" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="email">E-mail:</label>
      <div class="col-md-4">
      <input autofocus id="email" name="email" placeholder="Informe o email" class="form-control input-md" type="text" value="<?php echo $acao == 'alterar' ? $mod->reg->email : ''; ?>">
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-md-4 control-label" for="gravar"></label>
      <div class="col-md-8">
        <button id="gravar" name="gravar" class="btn btn-success" >Gravar</button>
        <button id="cancelar" name="cancelar" class="btn btn-danger" onclick="window.location = '?menu=usuarios';" type="reset">Cancelar</button>
      </div>
    </div>
        <input type="hidden" name="menu" value="<?= $menu; ?>">
        <input type="hidden" name="acao" value="gravar_<?= $acao; ?>">
        <input type="hidden" name="id" value="<?php echo $acao == 'alterar' ? $mod->reg->cod : ''; ?>">

     </form>
  

</body>
</html>