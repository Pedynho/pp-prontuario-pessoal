<?php
    require_once ('../scriptsBanco/conexao.php');
    require_once ('../scriptsBanco/login.php');
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    
    if (login($user, $senha, $tipo, $con)){
        if ($tipo == 'medico'){
            header('location: ../listagemPascientes.php');
        }
        if ($tipo == 'paciente'){
            header('location: ../perfilPaciente.php');
        }
        
    }
?>
