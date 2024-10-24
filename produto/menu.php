<?php 
    require_once 'header.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu Produto</title>
    </head>
    <body>

      <center><font face = "Century Gothic" size = 6 style="color: #a370f0;"><b><u> Menu: Produtos </u></b><br><br><br></font>

      <main>
        <div class="menu">
        <a href="listagem.php"><button class="cssbuttons-io-button">
          Listar Produto
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
          <br><br>
          <a href="excluir.php"><button class="cssbuttons-io-button">
          Excluir Produto
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
        </div>
      </main>
    </body>
</html>