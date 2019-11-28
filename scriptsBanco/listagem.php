<?php
    require_once('conexao.php');
    function getPascientes($con){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }
     
    function getMedicamentos($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getExames($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getCirurgias($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getHabitos($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getVacinacao($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }

    function getDadosGeograficos($con,$id){
        $sql = "SELECT * FROM paciente ";
        $res =  mysqli_query($con,$sql);
        return mysqli_fetch_assoc($res);
    }
?>