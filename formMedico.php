<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="vendor/css/bootstrap.css">

    <title>Cadastro</title>
</head>
<body>
    <div class="container mt-3">
        <?php
            if($_POST['btn'] == 'vacina'){
                echo '<h2>Nova Vacina</h2>';
                echo '<form action="perfilPaciente.php" method="post">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formVacina.html');
            }
            if($_POST['btn'] == 'medicamento'){
                echo '<h2>Novo Medicamento</h2>';
                echo '<form action="perfilPaciente.php" method="post"">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formMedicamento.html');
            }
            if($_POST['btn'] == 'exame'){
                echo '<h2>Novo Exame</h2>';
                echo '<form action="perfilPaciente.php" method="post"">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formExame.html');
            }
            if($_POST['btn'] == 'cirurgia'){
                echo '<h2>Nova Cirugia</h2>';
                echo '<form action="perfilPaciente.php" method="post"">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formCirurgia.html');
            }
        ?>
    </div>
</body>
</html>