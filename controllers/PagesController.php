<?php 
  include_once "connection.php";
  include_once "models/product.php";
  include_once "exceptions.php";
  include_once "log.php";

  set_error_handler('errorHandler');

  class PagesController 
  {
    public function Template()
    {
      include_once "views/template.php";
    }

    public function GetPage()
    {
      if(isset($_GET['action']))
      {
        //Obtenemos el valor del boton del menu que se apreto
        $action = $_GET['action'];
        //Llamamos al metodo que tenga el mismo nombre que la accion 
        return $this->$action();
      }
    }

    public function error()
    {
      return include_once "views/error.php";
    }

    private function latest()
    {
      try
      {
        $products = Product::Latest();
        return include_once "views/product/latest.php";
      }
      catch(DatabaseException $e)
      {
        $error = $e->errorMessage();
        return include_once "views/error.php";
      }
      catch(Exception $e)
      {
        $error = "Se produjo un error al cargar la página";
        return include_once "views/error.php";
      }
    }

    private function oferta()
    {
      try
      {
        $products = Product::Oferta();
        return include_once "views/product/oferta.php";
      }
      catch(DatabaseException $e)
      {
        $error = $e->errorMessage();
        return include_once "views/error.php";
      }
      catch(Exception $e)
      {
        $error = "Se produjo un error al cargar la página";
        return include_once "views/error.php";
      }
    }

    private function homepage()
    {
      try
      {
        $products = Product::query();
        return include_once "views/product/homepage.php";
      }
      catch(DatabaseException $e)
      {
        $error = $e->errorMessage();
        return include_once "views/error.php";
      }
      catch(Exception $e)
      {
        $error = "Se produjo un error al cargar la página";
        return include_once "views/error.php";
      }
    }

    private function checkin()
    {
      try
      {
        if($_POST)
        {
          $name = $_POST['name'];
          $amount = $_POST['amount'];
          $price = $_POST['price'];
          $size = $_POST['size'];
          validarForm($name, $amount, $price, $size);

          if($_FILES['file']['name'] != null)
          {
            $img_name = $_FILES['file']['name'];
            $img_temp = $_FILES['file']['tmp_name'];
            $folder= 'assets/products';
            $img_route = $folder . '/' . $img_name;
            move_uploaded_file($img_temp, $folder . '/'. $img_name);
          }
          else
          {
            $img_route = "assets/products/not-found.png";
          }

          Product::CreateProduct($name, $amount, $price, $size, $img_route);
        }
        return include_once "views/product/checkin.php";
      }
      catch(DatabaseException $e)
      {
        $error = $e->errorMessage();
        return include_once "views/error.php";
      }
      catch(FormException $f)
      {
        $error = $f->errorMessage();
        return include_once "views/error.php";
      }
      catch(Exception $e)
      {
        $error = "Se produjo un error al cargar la página";
        return include_once "views/error.php";
      }
    }
      
    private function update()
    {
      try
      {
        if(isset($_GET['id']))
        {
          $product = Product::Search($_GET['id']);
        }

        if($_POST)
        {
          print_r($_POST);
          $id = $_POST['id'];
          $name = $_POST['name'];
          $amount = $_POST['amount'];
          $price = $_POST['price'];
          $size = $_POST['size'];
          
          if($_FILES['file']['name'] != null)
          {
            $img_name = $_FILES['file']['name'];
            $img_temp = $_FILES['file']['tmp_name'];
            $folder= 'assets/products';
            $img_route = $folder . '/' . $img_name;
            move_uploaded_file($img_temp, $folder . '/'. $img_name);
          }
          else
          {
            $img_route = "assets/products/not-found.png";
          }

          Product::Update($id, $name, $amount, $price, $size, $img_route);
          header("Location:./?action=homepage");
        }
        return include_once "views/product/update.php";
      }
      catch(DatabaseException $e)
      {
        $error = $e->errorMessage();
        return include_once "views/error.php";
      }
      catch(FormException $f)
      {
        $error = $f->errorMessage();
        return include_once "views/error.php";
      }
      catch(Exception $e)
      {
        $error = "Se produjo un error al cargar la página";
        return include_once "views/error.php";
      }
    }

    private function delete()
    {
      try
      {
        if(isset($_GET['id']))
        {
          Product::Delete($_GET['id']);
          header("Location:./?action=homepage");
        }
      }
      catch(DatabaseException $e)
      {
        $error = $e->errorMessage();
        return include_once "views/error.php";
      }
      catch(Exception $e)
      {
        $error = "Se produjo un error al cargar la página";
        return include_once "views/error.php";
      }
      
    }
  }
?>