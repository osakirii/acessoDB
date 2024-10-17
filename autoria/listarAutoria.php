<?php 
    require_once 'header.php';
?>

<html>
    <head>
        <meta charset = "UTF-8">
        <title>Listar Autoria</title>
    </head>
    <body bgcolor="black">
        <center><font face = "Century Gothic" size = 6 style="color: #a370f0;;"><b><u>Relação de Produtos Cadastrados</u></b><br><br><br><font size = 4 style="color: white;">
        <?php

            include_once 'modelos/autoria.php';
            $ai = new Autoria();
            $aut_bd = $ai->Listar();
        ?>
        
        <b>Cod_livro &nbsp;&nbsp;&nbsp;&nbsp; Cod_autor &nbsp;&nbsp;&nbsp;&nbsp; Data de Lançamento &nbsp;&nbsp;&nbsp;&nbsp; Editora</b>

        <?php

            foreach($aut_bd as $aut_mostrar)
            {       
                echo '<br><br>';

                echo'<b>'.$aut_mostrar[0].'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo $aut_mostrar[1]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $aut_mostrar[2]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $aut_mostrar[3]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        ?>

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
    </body>
</html>