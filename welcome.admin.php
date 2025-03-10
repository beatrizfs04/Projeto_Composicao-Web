<?php include 'app/welcome.api.php'; ?>
<?php include 'app/filmes.api.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Filmoo | Filmes</title>
    <link rel="stylesheet" href="welcome.admin.css">
</head>
<body>
    <!--Barra de Navegacao-->
    <div class="navback"></div>
    <nav class="navigation-bar">
        <img class="logo" src="imagens/logo.png">
        
        <div class="links-container">
            <a href="generate_pdf.php" target="_blank">Download Lista de Usernames (PDF)</a>
            <a href="app/logout.php" class="Logout">Sair da Conta</a>
        </div>
    </nav>
    </div>

    <!--Conteudo-->
    <div class="conteudo">
        <h1>Filmes Recomendados:</h1>
        <?php foreach ($names as $name) { ?>
            <div class="filme">
                <?php echo $name; ?>
            </div>
        <?php } ?>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">              
            <input placeholder="Escreva o novo filme..." type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"><br>
            <button type="submit">CRIAR</button>
            <button type="reset">CANCELAR</button>
        </form>
    </div>
    
</body>
</html>