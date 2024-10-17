<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css">
    <title>Login</title>
    <script>
            function blockletras(keypress) {
                if(keypress >= 48 && keypress <= 57){
                    return true;
                } else {
                    return false;
                }
            }
    </script>
</head>
<body>
    <main style="height: 100%;"><div class="menu login">
    <form method="post">
       <p> Login: </p><input type="text" name="txtlogin" required maxlength="5"><br>
       <p> Senha: </p><input type="password" name="txtsenha" required maxlength="3" onkeypress="return blockletras(window.event.keyCode)"><br><br><br>
        <button class="cssbuttons-io-button" type="submit" name="acessar">
          Acessar
          <div class="icon">
            <svg
              height="24"
              width="24"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
        </button>
    </form>

    <?php
        extract($_POST, EXTR_OVERWRITE);
        if(isset($acessar)){
            include_once 'modelos/usuario.php';
            $usr = new Usuario();
            $usr->setUser($txtlogin);
            $usr->setSenha($txtsenha);
            $pro_bd = $usr->logar();

            $existe = false;
            foreach($pro_bd as $pro_mostrar){
                $existe = true;
                ?>
                <br><b><?php echo "Bem vindo! Usuário: " .$pro_mostrar[0]; ?></b><br><br>
                <a href="menu.php"><button name="btnentrar" class="entrarButton">Entrar</button></a>
                <?php
            }
            if($existe = false){
                header("location:loginInvalido.php");
            }
        }
    ?>
        </div></main>
</body>
</html>