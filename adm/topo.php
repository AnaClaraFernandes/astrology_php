<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>    
        <header id="header">
            <nav>
                
                <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "Bem vindo, $nome | ";
                      if($nivel == 'adm'){
                        echo "<a href='../adm/adm.php'> Admin </a> | ";
                      }
                      echo "<a href='/astrology/adm/logout.php'> Logout </a>";
                  }else{
                    echo"
                        <a href='/astrology/adm/login.php'> LOGIN </a> |
                        <a href='/astrology/usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </nav>
        </header>