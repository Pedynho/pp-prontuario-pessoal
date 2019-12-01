<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
</head>
<body>
    <div class="container">
    <h3 class="mt-5">Lista de pacientes</h3>
    <div class="row justify-content-end">
        <div class="col-auto">
            <p><a href="formCadastro.php" class="btn btn-primary">Adicionar Paciente</a></p>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Altura</th>
            <th scope="col">Peso</th>
            <th scope="col">Tipo Sanguíneo</th>
            <th scope="col">Mais informações</th>
            </tr>
        </thead>  
        <tbody>  
            <?php
                require_once ('scriptsBanco/listagem.php');
                $linhas = getPacientes($con);
                mysqli_fetch_assoc($linhas);
                foreach ($linhas as $linha){
            ?>
                    <tr>
                        <td><?= $linha['nome'] ?> </td>
                        <td><?= $linha['sexo'] ?></td>
                        <td><?= $linha['altura'] ?></td>
                        <td><?= $linha['peso'] ?></td>
                        <td><?= $linha['tipo-sanguineo'] ?></td>
                        <td class="text-center">
                            <form action='perfilPaciente.php' method='post'> 
                                <input type="hidden" id="custId" name="id" value="<?= $linha['idpaciente'] ?>">
                                <input type="submit" class="btn btn-primary" value="Mais...">
                            </form>
                        </td>
                    </tr>
            <?php
                }
            ?>  
        </tbody>
    </table>
    </div>
</body>
</html>