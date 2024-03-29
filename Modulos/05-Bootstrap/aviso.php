<?php
//by Kennedy E M Silva
include_once './assets/header.php';
?>
<div class="container">
  <div class="alert alert-primary" role="alert">Aviso ou alerta</div>
  <div class="alert alert-secondary" role="alert">Aviso ou alerta</div>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Muito bem!</h4>
    <p>Aêêê! Você conseguiu ler essa mensagem de alerta. Esse texto vai ter quer se extender um pouquinho pra você conseguir ver como o espaçamento dentro de um alerta funciona.</p>
    <hr>
    <p class="mb-0">Sempre que precisar, use utilitários de margem para manter as coisas perfeitas.</p>
  </div>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Oloco, meu!</strong> Olha esse alerta animado, como é chique!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

</div>

















<?php
include_once './assets/footer.php';
?>