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
            if($_POST['btn'] == 'habitos'){
                echo '<h2>Hábitos</h2>';
                echo '<form action="perfilPaciente.php" method="post">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formHabitos.html');
            }
            if($_POST['btn'] == 'dadosGeograficos'){
                echo '<h2>Dados Geográficos</h2>';
                echo '<form action="perfilPaciente.php" method="post"">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formDadosGeograficos.html');
            }
            if($_POST['btn'] == 'perfil'){
                echo '<h2>Dados Pessoais</h2>';
                echo '<form action="perfilPaciente.php" method="post"">';
                echo '<input type="hidden" name="id" value="'.$_POST['id'].'"/>';
                echo '<input type="hidden" name="tipo" value="'.$_POST['btn'].'"/>';
                require_once ('formPerfil.html');
            }
        ?>
    </div>
</body>
</html>