<?php
   session_start();
   $_SESSION = array();  // Limpa as variáveis de sessão
   session_destroy();     // Destroi a sessão
   header('Location: /astrology/adm/login.php');  // Redirecionamento absoluto
   exit();
   
?>
