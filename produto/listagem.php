<html>
    <head>
        <meta charset = "UTF-8">
        <title>Listar Produto</title>
        <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body bgcolor="black">
        <center><font face = "Century Gothic" size = 6 style="color: #a370f0;;"><b><u>Relação de Produtos Cadastrados</u></b><br><br><br><font size = 4 style="color: white;">
        <?php

            include_once 'Produto.php';
            $p = new Produto();
            $pro_bd = $p->Listar();
        ?>
        
        <b>Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque</b>

        <?php

            foreach($pro_bd as $pro_mostrar)
            {       
                echo '<br><br>';

                echo'<b>'.$pro_mostrar[0].'</b>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo $pro_mostrar[1]. "&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $pro_mostrar[2]. "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        ?>

            <br><br>
        <a href="menu.html"><button class="cssbuttons-io-button">
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