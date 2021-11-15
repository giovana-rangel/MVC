<section class="mt-4">
  <!--<div class="card mb-4">
    <div class="card-header">
      <h6 class="mb-3">Buscar por id</h6>
      <form method="get" action="">
        <div class="mb-3 d-flex">
          <input type="text"class="form-control" name="id" id="id" placeholder="Ingrese el id de producto">
          <button name="update" type="submit" class="btn">
            <i class='bx bx-search' style="font-size: 1.3rem;"></i>
          </button>
        </div> 
      </form>
    </div>
  </div>-->

  <?php 
    if(isset($_GET["id"]))
    {
      include_once "updateForm.php";
    }
  ?>
</section>