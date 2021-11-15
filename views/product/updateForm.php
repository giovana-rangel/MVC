<div class="card" color="red">
  <div class="card-header">
    Editar producto
  </div>
  <div class="card-body">
    <form action="" method="post" enctype='multipart/form-data'>

      <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" name="id" value="<?php echo $product->Id?>" readonly id="id" aria-describedby="helpId" >
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $product->Name?>" placeholder="Nombre del producto">
      </div>
      <div class="mb-3">
        <label for="amount" class="form-label">Cantidad disponible</label>
        <input type="number" class="form-control" name="amount" id="amount" value="<?php echo $product->Amount ?>" placeholder="Cantidad disponible">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Precio unitario: </label>
        <input type="text" class="form-control" name="price" id="price" value="<?php echo $product->Price ?>" placeholder="Precio unitario">
      </div>
      <div class="mb-3">
        <label for="size" class="form-label">Talle</label>
        <input type="text" class="form-control" name="size" id="size" value="<?php echo $product->Size ?>" placeholder="Talle">
      </div>

      <div class="mb-3">
        <label for="file" class="form-label">Subir imagen</label>
        <input type="file" id="file" name="file" class="file form-control">
      </div>

      <input name="update" id="" class="btn btn-success" type="submit" value="update">
      <a href="index.php?action=homepage" class="btn btn-primary">Cancelar</a>
    </form>
  </div>
  </div>