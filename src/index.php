<?php require_once 'logado.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <h2 class="text-body">Acesso ao sistema</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form method="POST" action="verifica_login.php">
                            <div class="mb-3">
                                <label class="form-label">Usuário</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Informe seu usuário">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha" placeholder="Informe sua senha">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
                                <label class="form-check-label" for="lembrar">Continuar conectado</label>
                            </div>
                            <div class="mb-3">
                                <p class="alert-danger">
                                    <?php if (isset($_GET['erro']) && $_GET['erro'] == 1)
                                        echo "Usuário ou senha inválidos, tente novamente!"; ?>
                                </p>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>