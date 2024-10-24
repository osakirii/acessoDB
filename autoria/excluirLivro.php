<?php
    require_once 'header.php';
?>

<html>
    <head>
        <meta charset = "UTF-8">
        <title>Excluir Livro</title>
    </head>
    <body bgcolor="black">
        <center><font face = "Century Gothic" size = 6 style="color: #a370f0;;"><b><u>Excluir Produto</u></b><br><br><br><font size = 4 style="color: white;">
        <main><div class="menu">
        
        <form method="post" action="">
            <fieldset id="a" style="flex-flow: column;">
                <legend><b>Informe o Código do Livro desejado:</b></legend>
                <p>Cod_Livro: <input name="txtcod" type="text" size="20" maxlength="5" placeholder="Código do Livro..."></p>
                <button class="cssbuttons-io-button" name="btnenviar" type="submit">
                Excluir
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
            <br>
            <button class="cssbuttons-io-button" name="btnlimpar" type="reset">
                Limpar
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
            </fieldset>
        </form>

        <fieldset id="b">
            <legend><b>Resultado:</b></legend>

            <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar)){
                    include_once 'modelos/livro.php';
                    $l = new Livro();
                    $l->setCod_livro($txtcod);
                    echo '<h3>' . $l->exclusao() . '</h3>';
                }
            ?>
        </fieldset>


            <br><br>
        <a href="menu.php"><button class="cssbuttons-io-button">
                Voltar
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
            </a>
        </div></main>
    </body>
</html>