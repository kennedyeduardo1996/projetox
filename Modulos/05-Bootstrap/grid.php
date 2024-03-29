<?php

//by Kennedy E M Silva
include_once './assets/header.php';
?>
<style type="text/css">
  .row [class^=col-], .row .col{
      background-color: #DDD;
      border: 1px solid #CCC;
  }
  .row.centralizando {
      background-color: #FF9999;
      padding: 5px;
      border: 1px solid #CCC;
  }
    .row.centralizando2 {
      background-color: #FF9999;
      padding: 5px;
      border: 1px solid #CCC;
      height: 200px;
  }
  .row.centralizando2  [class^=col-], .row .col{
      height: 30px;
  }
</style>
<div class="container">
  tamanho definido em todas as telas iguais
  <div class="row">
    <div class="col-2" >...</div>
    <div class="col-4" >...</div>
    <div class="col-6" >...</div> 
  </div>
  tamanho para o celular(sm) diferente dos outros
  <div class="row">
    <div class="col-sm" >...</div>
    <div class="col" >...</div>
    <div class="col-2" >...</div>
  </div>
  colunas ordenadas
  <div class="row">
    <!--as que não tem ordem em numero ficam primeiro-->
    <div class="col order-1" >Primeira</div>
    <div class="col order-2" >Segunda</div>
    <div class="col order-first" >Terceira</div>
    <div class="col order-3" >Quarta</div>
    <div class="col " >Quinta</div>
    <div class="col" >Sexta</div>
  </div>
  Alinhando as colunas no centro
  <div class="row centralizando justify-content-center">
    <div class="col-3" >Primeira</div>
    <div class="col-3" >Segunda</div>
    <div class="col-3" >Terceira</div>
  </div>
  <div class="row centralizando justify-content-end">
    <div class="col-3" >Primeira</div>
    <div class="col-3" >Segunda</div>
    <div class="col-3" >Terceira</div>
  </div>
  <div class="row centralizando justify-content-between">
    <div class="col-3" >Primeira</div>
    <div class="col-3" >Segunda</div>
    <div class="col-3" >Terceira</div>
  </div>
  <div class="row centralizando2 align-items-center">
    <div class="col-3" >Primeira</div>
    <div class="col-3" >Segunda</div>
    <div class="col-3" >Terceira</div>
  </div>

</div>






<?php

include_once './assets/footer.php';
?>


