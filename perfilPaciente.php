<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <script src="vendor/js/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
        <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="home" aria-selected="true">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#habitos" role="tab" aria-controls="profile" aria-selected="false">Hábitos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#vacinacao" role="tab" aria-controls="contact" aria-selected="false">Vacinação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dados-geograficos" role="tab" aria-controls="contact" aria-selected="false">Dados Geográfico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#medicamentos" role="tab" aria-controls="contact" aria-selected="false">Medicamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#exames" role="tab" aria-controls="contact" aria-selected="false">Exames</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cirurgias" role="tab" aria-controls="contact" aria-selected="false">Cirurgias</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="home-tab">
                    <?php 
                        require_once ('scriptsBanco/listagem.php'); 
                        $linhas = getPaciente($con,$_SESSION['user']);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>
                    
                    <h5 class="card-title"><?= $linha['nome'] ?></h5>
                    <p class="card-text">
                        Sexo: <?= $linha['nome'] ?> </br>
                        Altura: <?= $linha['altura'] ?> </br>
                        Peso: <?= $linha['peso'] ?> </br>
                        Tipo Sanguíneo: <?= $linha['tipo-sanguineo'] ?> </br>
                        Data de Nacimento: <?= $linha['data-nascimento'] ?> </br>
                        CPF: <?= $linha['cpf'] ?> </br>
                        RG: <?= $linha['rg'] ?> </br>
                        Cartão SUS: <?= $linha['cartao-sus'] ?> </br>
                    </p>
                    <?php
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="habitos" role="tabpanel" aria-labelledby="profile-tab">
                    <h5 class="card-title">hhabito</h5>
                    <p class="card-text">teste2</p>
                </div>

                <div class="tab-pane fade" id="vacinacao" role="tabpanel" aria-labelledby="contact-tab">
                    <h5 class="card-title">vacinacao</h5>
                    <p class="card-text">teste3</p>
                </div>

                <div class="tab-pane fade" id="dados-geograficos" role="tabpanel" aria-labelledby="contact-tab">
                    <h5 class="card-title">dados geograficos</h5>
                    <p class="card-text">teste3</p>
                </div>

                <div class="tab-pane fade" id="medicamentos" role="tabpanel" aria-labelledby="contact-tab">
                    <h5 class="card-title">medicamentos</h5>
                    <p class="card-text">

                    </p>
                </div>

                <div class="tab-pane fade" id="exames" role="tabpanel" aria-labelledby="contact-tab">
                    <h5 class="card-title">exames</h5>
                    <p class="card-text">teste3</p>
                </div>

                <div class="tab-pane fade" id="cirurgias" role="tabpanel" aria-labelledby="contact-tab">
                    <h5 class="card-title">cirurgias</h5>
                    <p class="card-text">teste3</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>