<?php
//by Kennedy E M Silva
include_once './assets/header.php';
?>

<div class="container">
  <ul class="list-group">
    <li class="list-group-item active">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>

  <ul class="list-group">
    <li class="list-group-item">Dapibus ac facilisis in</li>


    <li class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center">Um simples item primary do grupo de lista<span class="badge badge-primary badge-pill">1</span></li>
    <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">Um simples item secondary do grupo de lista<span class="badge badge-primary badge-pill">2</span></li>
    <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">Um simples item success do grupo de lista<span class="badge badge-primary badge-pill">3</span></li>
    <li class="list-group-item list-group-item-danger d-flex justify-content-between align-items-center">Um simples item danger do grupo de lista<span class="badge badge-primary badge-pill">4</span></li>
    <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center">Um simples item dark do grupo de lista<span class="badge badge-primary badge-pill">5</span></li>
  </ul>

  <div class="row">
    <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#lista-home" role="tab" aria-controls="home">Home</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Perfil</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Mensagens</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Configurações</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Texto do Home aaaaaaaaaaaaaaaaa</div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Texto do Profile bbbbbbbbbbbbbbbb</div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Texto do Messages cccccccccccccc</div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Texto do settings dddddddddddddd</div>
      </div>
    </div>
  </div>
</div>







<?php
include_once './assets/footer.php';
?>
