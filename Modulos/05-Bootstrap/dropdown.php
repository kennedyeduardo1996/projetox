<?php
//by Kennedy E M Silva
include_once './assets/header.php';
?>

<div class="container">
  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Alterna primeiro elemento</a>
  </p>
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
          Anim pariatur cliche reprehenderit, enim alemanha 7x1 brasil life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
      </div>
    </div>

  </div>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Botão dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Alguma ação</a>
      <a class="dropdown-item" href="#">Outra ação</a>
      <a class="dropdown-item" href="#">Alguma coisa aqui</a>
    </div>
  </div>
  <!-- Exemplo de único botão danger -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Ação
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Alguma ação</a>
      <a class="dropdown-item" href="#">Outra ação</a>
      <a class="dropdown-item" href="#">Alguma coisa aqui</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Link separado</a>
    </div>
  </div>

  <!-- Exemplo de botão danger dividido -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger">Ação</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Alguma ação</a>
      <a class="dropdown-item" href="#">Outra ação</a>
      <a class="dropdown-item" href="#">Alguma coisa aqui</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Link separado</a>
    </div>
  </div>
<!-- Botão dropright padrão -->
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Alguma ação</a>
      <a class="dropdown-item" href="#">Outra ação</a>
      <a class="dropdown-item" href="#">Alguma coisa aqui</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Link separado</a>
  </div>
</div>



</div>











<?php
include_once './assets/footer.php';
?>

