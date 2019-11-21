<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Cadastrar Categoria</title>
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
      <div class="categoria">
        <form name="cadastroCategoria" id="cadastroCategoria" action="cadastroCategoriaPHP.php" method="POST">
          <label><i class="fa fa-fw fa fa-edit"></i> Nome Categoria:</label>
          <input type="text" placeholder="Nome Categoria" name="nm_categoria" id="nm_categoria" required oninvalid="this.setCustomValidity('Campo obrigatório')" onchange="try{setCustomValidity('')}catch(e){}" />
          <label><i class="fa fa-fw fa fa-edit"></i>Descrição Categoria: </label>
          <input type="text" placeholder="Descricao Categoria" name="desc_categoria" id="desc_categoria" required oninvalid="this.setCustomValidity('Campo obrigatório')" onchange="try{setCustomValidity('')}catch(e){}" />
          <input type="hidden" name="cd_categoria" id="cd_categoria" />
          <input type="submit" value="Enviar" name="enviar" id="enviar">
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

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

    function printRetorno(title, data){
        var details = document.createElement('details');
        var sumamry = document.createElement('summary');

        sumamry.innerHTML = title;

        var pre = document.createElement('pre');
        pre.innerHTML = JSON.stringify(data, null, 4);

        details.appendChild(sumamry);
        details.appendChild(pre);

        return details;
    }

    var btConsulta = document.querySelector('#btConsulta');
    var txtRetorno = document.querySelector('#retorno');
    var txtCabecalhos = document.querySelector('#cabecalhos');

    btConsulta.addEventListener('click', function(e){
        var cep = document.querySelector('#cep').value;

        axios.get(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => {

            txtCabecalhos.appendChild(printRetorno('GET CEP', response.data));
            var ibge2  = response.data.ibge;

            axios.get(`https://servicodados.ibge.gov.br/api/v1/localidades/municipios/${ibge2}`)
            .then(response => {

                txtCabecalhos.appendChild(printRetorno('GET IBGE', response.data));
                txtRetorno.innerHTML = ibge2;


            var valor = response.data;
            var valor2 = response.data.ibge2;
            console.log(valor);
            console.log(valor2);


            })
            .catch(error => {
            console.log(error);
            })



        })
        .catch(error => {
            console.log(error);
        })

    });

    </script>

</body>

</html>
