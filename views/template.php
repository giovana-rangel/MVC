<!doctype html>
<html lang="es">
  <head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://releases.jquery.com/git/jquery-git.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
    <!-- CSS -->
    <link href='assets/styles.css' rel='stylesheet'>
    <!-- GLIDE CARROUSEL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
  </head>

  <body style="font-family:'Poppins';">
      
    <?php
      include_once "navigation.php";
    ?>

    <!-- Contenedor donde mostraremos el contenido de las diferentes paginas -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                  //A partir del metodo Get Pages del controlador iremos cambiando la pagina
                  $controller = new PagesController();
                  $controller->GetPage();
                ?>    
            </div>
        </div>
    </div>
  </body>
</html>

<!-- DATATABLE -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#product').DataTable();
  } );
</script>

<!-- GLIDE -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
<script src="js/carrousel.js"></script>