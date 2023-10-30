<?php
  require_once("globals.php");
  require_once("connection.php");
  require_once("models/Message.php");
  require_once("dao/UserDAO.php");

 $message = new Message($BASE_URL);
$flassmessage = [];
?>

<!DOCTYPE html>
<html lang="pt-br">


<body>

    <header>
        <nav class="navbar bg-dark">
            <div>
                <a href="./index.php" class="logo-container">
                    <img class="logo" src="./assets/images/logo.svg" alt="Logo de estrela do site MovieStar">
                    MovieStar
                </a>
            </div>
            <form class="container-fluid ms-5">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar Filmes" aria-label="Buscar Filmes" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1">
                        <button class="search-btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </form>
            <div class="user-actions">
                <a href="./auth.php" class="sign-in">Entrar</a>
                <a href="./auth.php" class="sign-up">Cadastrar</a>
            </div>
        </nav>
    </header>

</body>

</html>

<?php if(!empty($flassmessage["msg"])) : ?>
<div class="show-message">
    <p class="message <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
</div>
<?php endif ; ?>