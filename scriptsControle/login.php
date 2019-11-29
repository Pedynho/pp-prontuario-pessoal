<?php
    require_once ('../scriptsBanco/conexao.php');
    require_once ('../scriptsBanco/login.php');
    
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    
    if (login($user, $senha, $tipo, $con)){
        if ($tipo == 'medico'){
            $_SESSION['user'] = $user;
            $_SESSION['nivel'] = $tipo;
            header('location: ../listagemPacientes.php');
        }
        if ($tipo == 'paciente'){
            $_SESSION['user'] = $user;
            $_SESSION['nivel'] = $tipo;
            header('location: ../perfilPaciente.php');
        }
    }else{
        header('location: ../index.php');
    }
?>
