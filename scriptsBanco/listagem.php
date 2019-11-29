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
        $sql = "SELECT * FROM `medicamentos` WHERE paciente_idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getExames($con,$id){
        $sql = "SELECT * FROM `exames` WHERE paciente_idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getCirurgias($con,$id){
        $sql = "SELECT * FROM `cirurgias` WHERE paciente_idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getHabitos($con,$id){
        $sql = "SELECT * FROM `habitos` WHERE paciente_idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getVacinacao($con,$id){
        $sql = "SELECT * FROM `vacinacao` WHERE paciente_idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }

    function getDadosGeograficos($con,$id){
        $sql = "SELECT * FROM `dados-geograficos` WHERE paciente_idpaciente = $id";
        $res =  mysqli_query($con,$sql);
        return $res;
    }
?>