<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
</head>
<body>
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Altura</th>
            <th scope="col">Peso</th>
            <th scope="col">Tipo Sanguíneo</th>
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
    </div>
</body>
</html>