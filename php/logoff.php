<?php

    require("funcoes.php");

   session_start();
   
   unset($_SESSION['ses_cod']);
   unset($_SESSION['ses_nome']);
   unset($_SESSION['ses_num_acesso']);
   unset($_SESSION['ses_dat']);
   unset($_SESSION['ses_hora_acesso']);
   
   session_destroy();

   redirecionar('../index.php');
   
   exit();
  
?>
