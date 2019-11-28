<?php
    require_once('conexao.php');
    
    function getPacientes($con){
        $sql = "SELECT * FROM paciente WHERE 1";
        $res =  mysqli_query($con,$sql);
        return $res;
    }
    
    function getPaciente($con, $id){
        $sql = "SELECT * FROM paciente WHERE idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getMedicamentos($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getExames($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getCirurgias($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getHabitos($con,$id){
        $sql = "SELECT nome, sexo, altura, peso, `tipo-sanguineo` FROM paciente WHERE 1";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getVacinacao($con,$id){
        $sql = "SELECT nome, dose, data, anotacoes FROM vacinacao WHERE idvacinacao = ".$id;
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getDadosGeograficos($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }
?>