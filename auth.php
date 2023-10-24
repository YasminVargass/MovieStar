<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once ("components/head.php");
    ?>
    <link rel="stylesheet" href="./assets/css/auth.css">
    <title>MovieStar</title>
</head>

<body>
    <?php
    require_once ("components/header.php");
    ?>
    <main class="container-fluid text-center main-container">
        <div class="col-md-12">

            <div class="row justify-content-around">
                <div class="col-md-4">
                    <h2 class="auth-h2">Entrar</h2>
                    <form action="#" method="POST">
                        <input type="hidden" name="type" value="login">

                        <div>
                            <label class="form-label" for="email">E-mail:</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                        </div>
                        <div>
                            <label class="form-label" for="password">Senha:</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Senha" required>
                        </div>

                        <?php
                            require_once "./components/btn.php";
                         ?>

                    </form>
                </div>
                <div class="col-md-4">
                    <h2 class="auth-h2">Registrar</h2>
                    <form action="./data/auth_process.php" method="POST">
                        <input type="hidden" name="type" value="register">
                        <div>
                            <label class="form-label" for="email">E-mail:</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
                        </div>
                        <div>
                            <label class="form-label" for="name">Nome:</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Digite seu nome" required>
                        </div>
                        <div>
                            <label class="form-label" for="lastname">Sobrenome:</label>
                            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Digite seu nome" required>
                        </div>
                        <div>
                            <label class="form-label" for="password">Senha:</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Senha" required>
                        </div>
                        <div>
                            <label class="form-label" for="password">Confirmação da senha:</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Confirme a senha" required>
                        </div>

                        <?php
                            require "./components/btn.php";
                         ?>
                    </form>
                </div>
            </div>


        </div>
    </main>

    <?php
    require_once "./components/footer.php";
    ?>

</body>

</html>