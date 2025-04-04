<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'julio@gmail.com' && $senha == '1234'){
        //SEGUE PARA A PAGINA PRIVADA.PHP
        $nome = "julio";
        header('location: privada.php?nome='.$nome);
    }else{
        //SEGUE PARA A PAGINA ERRO.PHP
        header('location: erro.php');
    }
?>