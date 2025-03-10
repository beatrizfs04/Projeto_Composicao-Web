<?php include 'app/login.api.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Filmoo | Iniciar Sessão</title>
    <link rel="stylesheet" a href="logup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--Barra de Navegacao-->
    <nav class="navigation-bar">
    <img class="logo" src="imagens/logo.png">
    <div class="Maps"><a href="maps.php" target="_blanck">Cinemas</a></div>
    <div class="links-container">
        <div class="SobreNos"><a href="home.php">Sobre Nós</a></div>
        <div class="IniciarSessao"><a href="login.php">Iniciar Sessão</a></div>
        <div class="CriarConta"><a href="signin.php">Criar Conta</a></div>
    </div>
    </nav>
    
    <!--Conteudo-->
    <div class="conteudo">
        
        <div class="formularios">
            <div class="login">
              <div class="login-header">
                <h3>Iniciar Sessão</h3>
                <p>Por favor digite as suas credenciais para entrar.</p>
              </div>
            </div>
            
            <?php 
                if(!empty($login_err)){
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }        
            ?>

            <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input placeholder="username" type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <input placeholder="password" type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <button type="submit">ENTRAR</button>
                <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
            </form>
        </div>
    </div>

    <!--Rodape-->
    <div class="rodape">
      <table>
          <tr>
              <td>
                  <div class="titulos">Filmoo</div>
                  <div class="marca"><br>
                          Rede social basiada e influênciada nas plataformas de streaming.
                          <br><br>
                          A mesma foi criada pelas alunas Beatriz Santos e Inês Santos, da Uni-<br>
                          versidade da Beira Interior. Este é um projeto desenvolvido no âmbito<br>
                          da UC de Composição Web do curso de Informatica Web. 
                          <br><br>
                          O mesmo tem o objetivo de colocar em prática as capacidades adquiri-<br>
                          das ao longo da aprendizagem desta UC.
                  </div>
              </td>
              <td>
                <div class="titulos">Contacte-nos</div>
                <div class="contactos">
                    <br>Escreva-nos abaixo um email caso tenha alguma dúvida:
                </div>
                <a href="https://pt-pt.facebook.com/" target="_blanck" class="fa fa-facebook"></a>
                <a href="https://twitter.com/?lang=pt" target="_blanck" class="fa fa-twitter"></a>
                <a href="https://www.google.com/?hl=pt_pt" target="_blanck" class="fa fa-google"></a>
                <a href="https://www.youtube.com/" target="_blanck" class="fa fa-youtube"></a>
                <a href="https://www.instagram.com/" target="_blanck" class="fa fa-instagram"></a>
              </td>
          </tr>
      </table>
    </div>
</body>
</html>