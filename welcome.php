<?php include 'app/welcome.api.php'; ?>
<?php include 'app/filmes.api.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Filmoo | Filmes</title>
    <link rel="stylesheet" href="welcome.user.css">
</head>
<body>
    <!--Barra de Navegacao-->
    <div class="navback"></div>
    <nav class="navigation-bar">
        <a href="home.php" target="_blank"><img class="logo" src="imagens/logo.png"></a>
        <div class="links-container">
            <a href="app/logout.php" class="Logout">Sair da Conta</a>
        </div>
    </nav>
    </div>

    <!--Conteudo-->
    <div class="conteudo">
        <h1 class="my-5">Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem-vindo ao nosso site.</h1>
        <h1>Filmes Recomendados:</h1>
        <?php foreach ($names as $name) { ?>
            <div class="filme">
                <?php echo $name; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>