<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once "./components/head.php";
    ?>
    <link rel="stylesheet" href="./assets/css/auth.css">
    <title>MovieStar</title>
</head>

<body>
    <?php
    require_once "./components/header.php";
    ?>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-4">
                <h2>Entrar</h2>
                <form action="#">
                    <div>
                        <label class="form-label" for="email">E-mail:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div>
                        <label class="form-label" for="password">Senha:</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Senha">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h2>Registrar</h2>
                <form action="#">
                    <div>
                        <label class="form-label" for="email">E-mail:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div>
                        <label class="form-label" for="name">Nome:</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Digite seu nome">
                    </div>
                    <div>
                        <label class="form-label" for="lastname">Sobrenome:</label>
                        <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Digite seu nome">
                    </div>
                    <div>
                        <label class="form-label" for="password">Senha:</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Senha">
                    </div>
                    <div>
                        <label class="form-label" for="password">Confirmação da senha:</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Confirme a senha">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>


    </div>


    <?php
    require_once "./components/footer.php";
    ?>

</body>

</html>