<!DOCTYPE HTML>
<html lang="pt-br">   
<head>   
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"  crossorigin="anonymous">
    <title>Biblioteca - Cadastro</title>
</head>
<body>
    <div class ="d-flex justify-content-center border border-secondary mx-auto" style="width: 28%;">
        <form action="../controller/validaCadastroUsuario.php" method="POST">
            <h1 class="text-center mt-2">Cadastro</h1>
            <div class="form-group mt-2">
                <label>Nome</label>
                <input name="nome" type="text" class="form-control"  placeholder="Digite o seu nome" required>
            </div>
            <div class="form-group mt-2">
                <label>Email</label>
                <input name="email" type="email" class="form-control"  placeholder="Digite um email válido" required>
            </div>
            <div class="form-group mt-2">
                <label>Senha</label>
                <input name="senha" type="password" class="form-control mt-2"  placeholder="Digite uma senha" required>
                <small>Já possui uma conta? Clique <a href = "viewLoginUsuario.php">aqui</a></small>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Cadastrar</button>
        </form>
    </div>
</body>