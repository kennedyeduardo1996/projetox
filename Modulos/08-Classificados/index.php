<?php

/*
* Pagina index.php
*
* Pagina de inicio com quantidade de anuncios e usuarios, listagem de anuncios e
 * filtro de anuncios onde envia-se os dados do filtro e numero de pagina para 
 * a mesma pagina onde recebe-se os dados por $_GET
 * 
 * É feita a requisição do cabeçalho header.php
 * É feita a requisição da classe anuncios anuncios.class.php
 * É feita a requisição da classe usuarios usuarios.class.php
 * É feita a requisição da classe categorias categorias.class.php
*
 * É criado um array com os filtros caso nenhum seja preenchido e depois
 * é verificado se os filtros foram recebido para preenchimento do array.
 * @param $filtros é um array os filtros da pesquisa feita pelo usuario.
 * 
*
 * É recebido o numero da pagina via $_GET e feita a verificação do mesmo.
 * 
 * É calculado o total de paginas.
 * 
 * É enviado para a Função "getUltimosAnuncios" os devidos parametros.
 * @param $page é o numero da pagina que o usuario esta.
 * @param $por_pagina é a quantidade de anuncios por pagina.
 * @param $filtros é um array os filtros da pesquisa feita pelo usuario.
 * 
 * É feita a listagem dos anuncios totais ou de acordo com a pesquisa do usuario.
 * 
 */ 





require './pages/header.php';
require './classes/anuncios.class.php';
require './classes/usuarios.class.php';
require './classes/categorias.class.php';
$a = new Anuncios();
$user = new Usuarios();
$c = new Categorias();

$filtros = array(
    "categoria" => "",
    "preco" => "",
    "estado" => ""
);

if (isset($_GET["filtro"])) {
    $filtros = $_GET["filtro"];
}


$categorias = $c->getListaCategorias();
$total_anuncios = $a->getTotalAnuncios($filtros);
$total_usuarios = $user->getTotalUsuarios();

$page = 1;
if (isset($_GET["p"]) && !empty($_GET["p"])) {
    $page = addslashes($_GET["p"]);
}
$por_pagina = 2;

$total_paginas = ceil($total_anuncios[0] / $por_pagina);

$anuncios = $a->getUltimosAnuncios($page, $por_pagina, $filtros);
?>
<div class="container">
  <div class="jumbotron">
    <h2 class="display-4">Nós temos hoje <?php echo $total_anuncios["total_anuncios"]; ?> anúncios.</h2>
    <p class="lead">E mais de <?php echo $total_usuarios["total_usuarios"]; ?> usuários cadastrados.</p>
  </div>


  <div class="row">
    <div class="col-sm-3">
      <h4>Pesquisa Avançada</h4>

      <form method="GET">
        <div class="form-group">
          <label for="categoria">Categoria:</label>
          <select name="filtro[categoria]" class="form-control" id="categoria">
            <option></option>
            <?php foreach ($categorias as $cat) : ?>
                <option <?php echo ($cat["id"] == $filtros["categoria"]) ? "selected='selected'" : ""; ?> value="<?php echo $cat["id"]; ?>"><?php echo $cat["nome"]; ?></option>
            <?php endforeach; ?>

          </select>
        </div>

        <div class="form-group">
          <label for="preco">Preço:</label>
          <select name="filtro[preco]" class="form-control" id="preco">
            <option></option>
            <option value="0-50" 
                    <?php echo ("0-50" == $filtros["preco"]) ? "selected='selected'" : ""; ?>>
              R$ 0 - 50
            </option>
            <option value="51-100"
                    <?php echo ("51-100" == $filtros["preco"]) ? "selected='selected'" : ""; ?>>
              R$ 51 - 100
            </option>
            <option value="101-200"
                    <?php echo ("101-200" == $filtros["preco"]) ? "selected='selected'" : ""; ?>>
              R$ 101 - 200
            </option>
            <option value="201-500"
                    <?php echo ("201-500" == $filtros["preco"]) ? "selected='selected'" : ""; ?>>
              R$ 201 - 500
            </option>
          </select>
        </div>
        
        
        <div class="form-group">
          <label for="estado">Estado de Conservação:</label>
          <select name="filtro[estado]" class="form-control" id="estado">
            <option></option>
            <option value="0" 
                    <?php echo ("0" == $filtros["estado"]) ? "selected='selected'" : ""; ?>>
               Ruim
            </option>
            <option value="1"
                    <?php echo ("1" == $filtros["estado"]) ? "selected='selected'" : ""; ?>>
              Bom
            </option>
            <option value="2"
                    <?php echo ("2" == $filtros["estado"]) ? "selected='selected'" : ""; ?>>
              Otimo
            </option>
            
          </select>
        </div>
        
        
        



        <div class="form-group">
          <button type="submit" class="btn btn-primary">
            Buscar
          </button>
        </div>
      </form>




    </div>
    <div class="col-sm-9">
      <h4>Ultimos Anúncios</h4>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Primeiro</th>
            <th scope="col">Último</th>
            <th scope="col">Nickname</th>
          </tr>
        </thead>
        <tbody>
            <?php
            foreach ($anuncios as $anuncio) :
                ?>
              <tr>
                <th scope="row ">
                  <img height="50"
                       src="assets/images/anuncios/<?php echo!empty($anuncio["url"]) ? $anuncio["url"] : "defaut.jpg"; ?>"
                       border="0"/>
                </th>
                <td>
                  <a href="produto.php?id=<?php echo $anuncio["id"]; ?>"><?php echo $anuncio["titulo"]; ?></a><br>
                  <?php echo $anuncio["categoria"]; ?>
                </td>

                <td><?php echo "R$ " . number_format($anuncio["valor"], 2); ?></td>

              </tr>

              <?php
          endforeach;
          ?>

        </tbody>
      </table>

      <nav aria-label="Navegação de página exemplo">
        <ul class="pagination">
            <?php
            for ($q = 1; $q <= $total_paginas; $q++) :
                ?>
              <li class="page-item <?php echo ($page == $q) ? "active" : ""; ?>"><a class="page-link" href="index.php?p=<?php echo $q; ?>"><?php echo $q; ?></a></li>
              <?php
          endfor;
          ?>
        </ul>
      </nav>

    </div>

  </div>

</div>



<?php
//by Kennedy E M Silva
require './pages/footer.php';
?>
 