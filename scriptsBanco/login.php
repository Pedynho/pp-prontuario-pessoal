<?php
    function login ($user,$senha,$tipo, $con){
        
        if($tipo == 'medico'){
            $sql = "SELECT * FROM medicos WHERE usuario = '$user' AND senha = '$senha'";
        }

        if ($tipo == 'paciente'){
            $sql = "SELECT * FROM paciente WHERE idpaciente = '$user' AND senha = '$senha'";
        }

        $res = mysqli_query($con,$sql);
        $linha = mysqli_fetch_assoc($res);

        if($linha['usuario'] == $user && $linha['senha'] == $senha){
            return 1;
        }
        if($linha['idpaciente'] == $user && $linha['senha'] == $senha){
            return 1;
        }

        return 0;
    }
?>