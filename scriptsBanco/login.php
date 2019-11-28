<?php
    function login ($user,$senha,$tipo, $con){
        
        if($tipo == 'medico'){
            $sql = "SELECT * FROM medicos WHERE usuario = '$user' AND senha = '$senha'";
        }

        if ($tipo == 'paciente'){
            $sql = "SELECT * FROM paciente WHERE idpaciente = '$user' AND senha = '$senha'";
        }

        $res = mysqli_query($con,$sql);
        if($res != NULL){
            return 1;
        }
        echo $sql;
        return 0;
    }
?>