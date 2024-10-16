<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form method="post">
        Login: <input type="text" name="txtlogin" required maxlength="5"><br>
        Senha: <input type="password" name="txtsenha" required maxlength="3" onkeypress="return blockletras(window.event.keyCode)">
        <button type="submit" name="acessar">Acessar</button>
    </form>

    <?php
        extract($_POST, EXTR_OVERWRITE);
        if(isset($acessar)){
            include_once 'modelos/usuario.php';
            $usr = new Usuario();
            $usr->setUser($txtlogin);
            $usr->setSenha($txtsenha);
            $pro_bd = $usr->logar();
            var_dump($pro_bd);

            $existe = false;
            foreach($pro_bd as $pro_mostrar){
                $existe = true;
                ?>
                <br><b><?php echo "Bem vindo! Usuário: " .$pro_mostrar[0]; ?></b><br><br>
                <button name="btnentrar"><a href="menu.html">Entrar</a></button>
                <?php
            }
            if($existe = false){
                header("location:loginInvalido.html");
            }

        }
    ?>
</body>
</html>