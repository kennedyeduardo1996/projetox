<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        
        
        <div class="carousel-inner" role="listbox">
                    <?php foreach ($info["fotos"] as $chave => $foto) : ?>

          <div class="carousel-item  <?php echo ($chave == "0") ? "active" : ""; ?>">
            <img class="d-block w-100" src="assets/images/anuncios/<?php echo $foto["url"]; ?> Slide" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
          </div>
                  <?php endforeach; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
