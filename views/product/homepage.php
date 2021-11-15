<section class="mt-5 mb-5">

  <table id="product" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Talle</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) { ?>
      <tr>
        <td scope="row" class="text-center"><?php echo $product->Id ?></td>
        <td class="col-4"><?php echo $product->Name ?></td>
        <td class="col-1 text-center"><?php echo $product->Amount ?></td>
        <td class="col-1 text-center"><?php echo $product->Price ?></td>
        <td class="col-1 text-center"><?php echo $product->Size ?></td>
        <td><img src='<?php echo $product->Img ?>' class="col-2"></td>
        <td>
          <div class="btn-group" role="group">
            <a href="index.php?action=update&id=<?php echo $product->Id ?>" class="btn" style="font-size:1.3rem; background:#FF501B; color:#fff">
              <i class='bx bx-edit'></i>
            </a>
            <a href="index.php?action=delete&id=<?php echo $product->Id ?>" class="btn" style="font-size:1.3rem;background:#000; color:#fff">
              <i class='bx bx-trash'></i>
            </a>
          </div>
        </td>
      </tr>
      <?php  } ?>
    </tbody>
  </table>   
</section>