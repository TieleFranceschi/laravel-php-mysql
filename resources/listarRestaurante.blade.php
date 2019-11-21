<!DOCTYPE html>

<?php
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
$sql = "SELECT * FROM restaurante r
INNER JOIN categoria_restaurante cr on cr.cd_categoria = r.cd_categoriafk
INNER JOIN especialidade_restaurante er on er.cd_especialidade = r.cd_especialidadefk";

$query = mysqli_query($conn, $sql);

?>
<html>

<head>
  <meta charset='utf-8'>
  <title>Restaurantes Cadastrados</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="grid-container">
    <!--Inicio cabeçalho-->
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
      <div class="tabelas">
        <div class="tabelaCategoria">
          <table style="width:100%" action="listarRestaurante.php">
            <tr>
              <th>Código Restaurante</th>
              <th>Nome Restaurante</th>
              <th>Código Categoria</th>
              <th>Nome Categoria</th>
              <th>Código Especialidade</th>
              <th>Nome Especialidade</th>
            </tr>
            <?php while ($listar = mysqli_fetch_assoc($query)) { ?>
              <tr>
                <td><?php echo $listar['cd_restaurante']; ?></td>
                <td><?php echo $listar['nm_restaurante']; ?></td>
                <td><?php echo $listar['cd_categoriafk']; ?></td>
                <td><?php echo $listar['nm_categoria']; ?></td>
                <td><?php echo $listar['cd_especialidadefk']; ?></td>
                <td><?php echo $listar['nm_especialidade']; ?></td>
              </tr>
            <?php } ?>

          </table>
        </div>
      </div>
    </div>
    <div class="left">
    </div>
    <div class="right">
    </div>
    <div class="footer ">
    </div>
  </div>

</body>

</html>
