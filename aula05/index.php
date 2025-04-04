<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina incial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
 
</body>
    
    <div class="caixa">
        BEM VINDO A TELA DE LOGIN
    </div>

    <div class="container">
        <form action="processa.php" method="POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" name="email"/>
                <label class="form-label" for="form1Example1">Digite seu email</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" name="senha"/>
                <label class="form-label" for="form1Example2">Digite sua senha</label>
            </div>

            <!-- Submit button -->
            <!--button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button -->
            <div class="text-center">
            <input type="submit" class= "btn btn-primary mb-4" value="Entrar">
            </div>
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>