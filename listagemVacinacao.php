<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Dose</th>
            <th scope="col">Data</th>
            <th scope="col">Anotações</th>
            </tr>
        </thead>  
        <tbody>  
            <?php
                require_once ('scriptsBanco/listagem.php');
                $linhas = getPacientes($con);
                mysqli_fetch_assoc($linhas);
                foreach ($linhas as $linha){
                    echo "
                    <tr>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['sexo']."</td>
                        <td>".$linha['altura']."</td>
                        <td>".$linha['peso']."</td>
                        <td>".$linha['tipo-sanguineo']."</td>
                    </tr>";
                }
            ?>  
        </tbody>
    </table>
</body>
</html>