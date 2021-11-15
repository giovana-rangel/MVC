<section class="mt-5 vh-100 w-100">
  <div class="contenedor">
    <h3>Latest</h3>
    <div class="carousel">
      <div class="carousel__contenedor">
        <button aria-label="Anterior" class="carousel__anterior">
          <i class='bx bx-chevron-left'></i>
        </button>

        <div class="carousel__lista">
          <?php foreach ($products as $product) { ?>
        
            <div class="text-center d-flex flex-column align-items-center m-2">
              <img src='<?php echo $product->Img ?>' class="col-10">
              <p class="col-10 text-uppercase mt-3" style="font-size: .7rem;">
                <strong><?php echo $product->Name ?></strong>
              </p>
              <div class="row col-10">
                <p class="col-5">$<?php echo $product->Price ?></p>
                <p class="col-5">Talle: <?php echo $product->Size ?></p>
              </div>
            </div>

          <?php  } ?>
        </div>
          
        <button aria-label="Siguiente" class="carousel__siguiente">
          <i class='bx bx-chevron-right'></i>
        </button>
      </div>

      <div role="tablist" class="carousel__indicadores text-secondary"></div>
    </div>
  </div>
</section>