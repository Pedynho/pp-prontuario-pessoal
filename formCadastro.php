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
        <h2>Novo Paciente</h2>
        <form>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="masculino">
                <label class="form-check-label">
                    Masculino
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="feminino">
                <label class="form-check-label">
                    Feminino
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Altura</label>
            <input type="number" name="altura" step=".01" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Peso</label>
            <input type="number" name="peso" class="form-control">
        </div>
        <div class="form-group">
            <label>Tipo Sanguíneo</label>
            <select class="custom-select" name="tipoSanguineo">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O-</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>