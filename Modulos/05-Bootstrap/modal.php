<?php
//by Kennedy E M Silva
include_once './assets/header.php';
?>

<div class="container">


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
    Abrir modal de demonstração
  </button>

  <!-- Modal -->
  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!--Formulario-->

          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputPassword4">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Endereço 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="form-row">


              <div class="form-group col-md-2">
                <label for="inputCity">Salario</label>
        <!--        <input type="text" class="form-control" id="inputCity">-->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Quantia">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

              </div>






              <div class="form-group col-md-4">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                  <option selected>Escolher...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Clique em mim
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>


          <!--fim do formulario-->




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar mudanças</button>
        </div>
      </div>
    </div>
  </div> 






</div>

<?php
include_once './assets/footer.php';
?>
