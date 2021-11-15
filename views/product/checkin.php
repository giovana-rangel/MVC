<section class="mt-5 mb-4">
  <div class="card">
    <div class="card-header">
      <h4>Agregar producto</h4>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
          <label for="name" class="form-label"><strong>Nombre</strong></label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Nombre del producto" required>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12 mb-3">
            <label for="amount" class="form-label"><strong>Cantidad disponible</strong></label>
            <input type="number" class="form-control" name="amount" id="amount" placeholder="Cantidad disponible" required>
          </div>

          <div class="col-md-4 col-sm-12 mb-3">
            <label for="price" class="form-label"><strong>Precio unitario</strong></label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Precio unitario" required>
          </div>

          <div class="col-md-4 col-sm-12 mb-3">
            <label for="size" class="form-label"><strong>Talle</strong></label>
            <input type="text" class="form-control" name="size" id="size" placeholder="Talle" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="file" class="form-label"><strong>Subir imagen</strong></label>
          <input type="file" id="file" name="file" class="file form-control">
        </div>
        
        <div class="w-100 d-flex justify-content-end">
          <input name="" id="" class="btn  m-2" style="background:#FF501B; color:#fff" type="submit" value="Agregar">
          <a href="index.php?action=homepage" style="background:#000; color:#fff" class="btn m-2">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</section>