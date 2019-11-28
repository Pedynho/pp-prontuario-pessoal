<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>e-pront</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
</head>
<body>
    <?php
    ?>
    <div class="container">
    <div class="mx-auto">
        <img src="img/e-pront.png" class="mx-auto d-block img-fluid">
    </div>    
   
    <form action="scriptsControle/login.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input type="text" class="form-control" name="user" placeholder="Usuário">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
        </div>
        <div class="form-group form-check">
            <input class="form-check-input" type="radio" name="tipo" value="medico">
            <label class="form-check-label" for="exampleRadios1">
                Médico
            </label>
            </br>
            <input class="form-check-input" type="radio" name="tipo" value="paciente">
            <label class="form-check-label" for="exampleRadios2">
                Paciente
            </label>
        </div>
            
        <button type="submit" class="btn btn-primary d-block mx-auto"><h5>Entrar</h5></button>
    </form>
    </div>  
</body>
</html>