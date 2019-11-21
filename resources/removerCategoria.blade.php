<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Remover Categoria</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
  <link rel='stylesheet' type='text/javascript' media='screen' href='js/js.js'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="grid-container">
    <div class="header">
      <header>
        <nav>
          <div class="dropdownRestauranete">
            <button class="dropbtn">Restaurante
              <i class="fa fa-fw fa fa-group"></i>
            </button>
            <div class="dropdown-content">
              <a href="cadastroRestaurante.php">Cadastrar</a>
              <a href="atualizarRestaurante.php">Atualizar</a>
              <a href="removerRestaurante.php">Remover</a>
              <a href="listarRestaurante.php">Restaurantes Cadastrados</a>
            </div>
          </div>
          <div class="dropdownCategoria">
            <button class="dropbtn">Categoria
              <i class="fa fa-fw fa-cutlery"></i>
            </button>
            <div class="dropdown-content">
              <a href="cadastroCategoria.php">Cadastrar</a>
              <a href="atualizarCategoria.php">Atualizar</a>
              <a href="removerCategoria.php">Remover</a>
              <a href="listarCategoria.php">Categorias Cadastradas</a>
            </div>
          </div>

        </nav>
      </header>
    </div>

    <div class="middle">
      <div class="remover">
        <form name="atualizaCategoria" id="atualizaCategoria" action="removerCategoriaPHP.php" method="POST" enctype="application/x-www-form-urlencoded">
          <label><i class="fa fa-fw fa fa-edit"></i> Id Categoria:</label>
          <input type="text" placeholder="Id Categoria" name="id_categoria" id="id_categoria" required oninvalid="this.setCustomValidity('Campo obrigatório')" onchange="try{setCustomValidity('')}catch(e){}" />
          <input type="hidden" name="cd_categoria" id="cd_categoria" />
          <input type="submit" value="Enviar" name="enviar">

        </form>
      </div>
    </div>

    <div class="left">
    </div>
    <div class="right">
    </div>
    <div class="footer ">
    </div>
  </div>

  </div>

</body>

</html>
