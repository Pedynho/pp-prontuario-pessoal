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
  <?php 
    require_once ('scriptsBanco/listagem.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id = $_SESSION['user'];
    }
  ?>
  <div class="container">
        <h4 class="mt-5">Ficha de dados</h4>
        <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="home" aria-selected="true">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dados-geograficos" role="tab" aria-controls="contact" aria-selected="false">Dados Geográfico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#habitos" role="tab" aria-controls="profile" aria-selected="false">Hábitos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#vacinacao" role="tab" aria-controls="contact" aria-selected="false">Vacinação</a>
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
                        $linhas = getPaciente($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>
                    
                    <h5 class="card-title"><?= $linha['nome'] ?></h5>
                    <p class="card-text">
                        Sexo: <?= $linha['sexo'] ?> </br>
                        Altura: <?= $linha['altura'] ?> </br>
                        Peso: <?= $linha['peso'] ?> </br>
                        Tipo Sanguíneo: <?= $linha['tipo-sanguineo'] ?> </br>
                        Data de Nacimento: <?= $linha['data-nascimento'] ?> </br>
                        CPF: <?= $linha['cpf'] ?> </br>
                        RG: <?= $linha['rg'] ?> </br>
                        Cartão SUS: <?= $linha['cartao-sus'] ?> </br>
                    </p>
                    <form action="formPaciente.php" method="post">
                        <input name="id" type="hidden" value="<?= $id ?>"/>
                        <input name="btn" type="hidden" value="perfil"/>
                        <button type="submit" class="btn btn-primary">Editar Informações</buttom>
                    </form>

                    <?php
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="habitos" role="tabpanel" aria-labelledby="profile-tab">
                    <?php  
                        $linhas = getHabitos($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>

                    <p class="card-text">
                        Cigarro: <?= $linha['cigarro'] ?> </br>
                        Álcool: <?= $linha['alcool'] ?> </br>
                        Drogas Ilícitas: <?= $linha['drogas-ilicitas'] ?> </br>
                        Sono: <?= $linha['sono'] ?> Horas</br>
                    </p>
                    <form action="formPaciente.php" method="post">
                        <input name="id" type="hidden" value="<?= $id ?>"/>
                        <input name="btn" type="hidden" value="habitos"/>
                        <button type="submit" class="btn btn-primary">Editar Hábitos</buttom>
                    </form>
                    <?php
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="vacinacao" role="tabpanel" aria-labelledby="contact-tab">
                    <?php  
                        $linhas = getVacinacao($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>

                    <p class="card-text">
                        Nome: <?= $linha['nome'] ?> </br>
                        Dose: <?= $linha['dose'] ?> </br>
                        Data: <?= $linha['data'] ?> </br>
                        Anotações: <?= $linha['anotacoes'] ?> </br>
                    </p>
                            
                    <?php
                        }
                        if($_SESSION['nivel'] == 'medico'){
                            echo '
                             <form action="formMedico.php" method="post">
                                 <input name="id" type="hidden" value="'.$id.'"/>
                                 <input name="btn" type="hidden" value="vacina"/>
                                 <button type="submit" class="btn btn-primary">Adicionar Vacina</buttom>
                             </form>';
                         }
                    ?>
                </div>

                <div class="tab-pane fade" id="dados-geograficos" role="tabpanel" aria-labelledby="contact-tab">
                    <?php  
                        $linhas = getDadosGeograficos($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>

                    <p class="card-text">
                        Estado: <?= $linha['estado'] ?> </br>
                        Município: <?= $linha['municipio'] ?> </br>
                        Bairro: <?= $linha['bairro'] ?> </br>
                        Rua: <?= $linha['rua'] ?> </br>
                        N°: <?= $linha['numero'] ?> </br>
                        Apartamento: <?= $linha['ap'] ?> </br>
                    </p>
                    <form action="formPaciente.php" method="post">
                        <input name="id" type="hidden" value="<?= $id ?>"/>
                        <input name="btn" type="hidden" value="dadosGeograficos"/>
                        <button type="submit" class="btn btn-primary">Editar Dados</buttom>
                    </form>
                    
                    <?php
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="medicamentos" role="tabpanel" aria-labelledby="contact-tab">
                    <?php  
                        $linhas = getMedicamentos($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>
                    
                    <p class="card-text">
                        Nome: <?= $linha['nome'] ?> </br>
                        Dosagem: <?= $linha['dosagem'] ?> </br>
                        Inicio do Tratamento: <?= $linha['data-inicio'] ?> </br>
                        Fim do Tratamento: <?= $linha['data-fim'] ?> </br>
                        Anotações: <?= $linha['anotacoes'] ?> </br>
                    </p>
                    
                    <?php
                        }
                        if($_SESSION['nivel'] == 'medico'){
                            echo '
                             <form action="formMedico.php" method="post">
                                 <input name="id" type="hidden" value="'.$id.'"/>
                                 <input name="btn" type="hidden" value="medicamento"/>
                                 <button type="submit" class="btn btn-primary">Adicionar Medicamento</buttom>
                             </form>';
                         }
                    ?>
                </div>

                <div class="tab-pane fade" id="exames" role="tabpanel" aria-labelledby="contact-tab">
                    <?php  
                        $linhas = getExames($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>
                    
                    <p class="card-text">
                        Nome: <?= $linha['nome'] ?> </br>
                        Tipo: <?= $linha['tipo'] ?> </br>
                        Data da realização: <?= $linha['data'] ?> </br>
                        Anotações: <?= $linha['anotacoes'] ?> </br>
                    </p>
                    <form action=""></form>
                    <?php
                        }
                        if($_SESSION['nivel'] == 'medico'){
                           echo '
                            <form action="formMedico.php" method="post">
                                <input name="id" type="hidden" value="'.$id.'"/>
                                <input name="btn" type="hidden" value="exame"/>
                                <button type="submit" class="btn btn-primary">Adicionar Exame</buttom>
                            </form>';
                        }
                    ?>
                </div>

                <div class="tab-pane fade" id="cirurgias" role="tabpanel" aria-labelledby="contact-tab">
                    <?php  
                        $linhas = getCirurgias($con,$id);
                        mysqli_fetch_assoc($linhas);
                        foreach($linhas as $linha){
                    ?>
                    
                    <p class="card-text">
                        Nome: <?= $linha['nome'] ?> </br>
                        Data de realização: <?= $linha['data'] ?> </br>
                        Anotações: <?= $linha['anotacoes'] ?> </br>
                    </p>
                    
                    <?php
                        }
                        if($_SESSION['nivel'] == 'medico'){
                            echo '
                             <form action="formMedico.php" method="post">
                                 <input name="id" type="hidden" value="'.$id.'"/>
                                 <input name="btn" type="hidden" value="cirurgia"/>
                                 <button type="submit" class="btn btn-primary">Adicionar Cirurgia</buttom>
                             </form>';
                         }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>