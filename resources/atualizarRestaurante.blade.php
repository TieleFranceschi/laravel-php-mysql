<!DOCTYPE html>
<?php
//phpinfo();
$servername = "localhost";
$database = "projetorestauranteBD";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$Categoria = "SELECT * FROM categoria_restaurante";
$Especialidade = "SELECT * FROM especialidade_restaurante";
$queryOne = mysqli_query($conn, $Categoria);
$queryTwo = mysqli_query($conn, $Especialidade);
?>
<html>

<head>
  <meta charset='utf-8'>
  <title>Atualizar Restaurante</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
  <link rel='stylesheet' type='text/javascript' media='screen' href='js/main.js'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="grid-container">
    <!--Inicio cabeçalho-->
    <div class="header">
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
    </div>
  </div>
  <!--Fim cabeçalho-->

  <!--Inicio formulario-->
  <div class="middle">
    <div class="restauranteAtualizar">
      <form name="cadastroRestaurante" id="cadastroRestaurante" action="atualizarRestaurantePHP.php" method="POST">
        <label><i class="fa fa-fw fa fa-edit"></i>Restaurante:</label>
        <input type="text" placeholder="Id Restaurante" name="restaurante_selected" id="restaurante_selected" required oninvalid="this.setCustomValidity('Campo obrigatório')" onchange="try{setCustomValidity('')}catch(e){}" />
        <label><i class="fa fa-fw fa fa-edit"></i> Nome Restaurante:</label>
        <input type="text" placeholder="Nome Restaurante" name="nm_restaurante" id="nm_restaurante" required oninvalid="this.setCustomValidity('Campo obrigatório')" onchange="try{setCustomValidity('')}catch(e){}" />
        <label><i class="fa fa-fw fa-star"></i>Categoria Restaurante: </label>
        <select id="categorias" name="categoria">
          <?php while ($Categoria = mysqli_fetch_array($queryOne)) { ?>
            <option value="<?php echo $Categoria['cd_categoria'] ?>" selected="cd_categoria"><?php echo $Categoria['nm_categoria'] ?></option>
          <?php } ?>
        </select>
        <label><i class="fa fa-fw fa-star"></i>Especialidade Restaurante: </label>
        <select id="especialidades" name="especialidade">
          <?php while ($Especialidade = mysqli_fetch_array($queryTwo)) { ?>
            <option value="<?php echo $Especialidade['cd_especialidade'] ?>" name="cd_especialidade" id="cd_especialidade" selected="selected"><?php echo $Especialidade['nm_especialidade'] ?></option>
          <?php } ?>
        </select>
        <input type="submit" value="Enviar" name="enviar">
      </form>
    </div>
  </div>
  <!--Inicio formulario-->

  <div class="left">
  </div>
  <div class="right">
  </div>
  <div class="footer ">
  </div>
</body>

</html>
