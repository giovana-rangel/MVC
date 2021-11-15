<?php 
  //transferimos los errores de mysql a php
  //sin este código los errores de mysql no serán capturados como excepciones
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  class Product
  {
    public $Id;
    public $Name;
    public $Amount;
    public $Price;
    public $Size;
    public $Img;

    public function __construct($id, $name, $amount, $price, $size, $img)
    {
      $this->Id = $id;
      $this->Name = $name;
      $this->Amount = $amount;
      $this->Price = $price;
      $this->Size = $size;
      $this->Img = $img;
    }

    public static function query()
    {
      $ProductList = [];
      $connection = DB::CreateConnection();
      $query = "SELECT * FROM products";
      try
      {
        $res = mysqli_query($connection, $query); 
      }
      catch(Exception $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new DatabaseException("Error al obtener productos");
      }

      while($product = $res->fetch_object())
      { 
        $ProductList[] = new Product($product->ID, $product->Name, $product->Amount, $product->Price, $product->Size, $product->Img);
      }
      return $ProductList;
    }

    public static function Delete($id)
    {
      $connection = DB::CreateConnection();
      $query = "DELETE FROM products WHERE ID = '$id'";
      try
      {
        $res = mysqli_query($connection, $query);
      }
      catch(Exception $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new DatabaseException("Error al borrar el producto");
      }
    }

    public static function Update($id, $name, $amount, $price, $size, $img)
    {
      $connection = DB::CreateConnection();
      $query = "UPDATE products SET 
      Name = '$name',
      Amount = '$amount',
      Price = '$price',
      Size = '$size',
      Img = '$img'
      WHERE ID = $id";
      try
      {
        $res = mysqli_query($connection, $query);
      }
      catch(Exception $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new DatabaseException("Error al actualizar producto");
      }
    }

    public static function Search($id)
    {
      $connection = DB::CreateConnection();
      $query = "SELECT * FROM products WHERE ID = '$id'";
      try
      {
        $res = mysqli_query($connection, $query);

        if(mysqli_num_rows($res) > 0)
        {
          $product = $res->fetch_object();
          return new Product($product->ID, $product->Name, $product->Amount, $product->Price, $product->Size, $product->Img);
        }
        else
        {
          echo "<p class='text-secondary'>No se han encontrado productos con id: " . $id . "</p>";
        }
      }
      catch(Exeption $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new Exception("Error al buscar el producto");
      }
    }

    public static function Latest() 
    {
      $ProductList = [];
      $connection = DB::CreateConnection();
      $query = "SELECT * FROM products ORDER BY Id DESC LIMIT 8";
      try
      {
        $res = mysqli_query($connection, $query); 
      }
      catch(Exception $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new DatabaseException("Error al obtener productos");
      }

      while($product = $res->fetch_object())
      { 
        $ProductList[] = new Product($product->ID, $product->Name, $product->Amount, $product->Price, $product->Size, $product->Img);
      }
      return $ProductList;
    }

    public static function Oferta() 
    {
      $ProductList = [];
      $connection = DB::CreateConnection();
      $query = "SELECT * FROM products ORDER BY Price LIMIT 8";
      try
      {
        $res = mysqli_query($connection, $query); 
      }
      catch(Exception $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new DatabaseException("Error al obtener productos");
      }

      while($product = $res->fetch_object())
      { 
        $ProductList[] = new Product($product->ID, $product->Name, $product->Amount, $product->Price, $product->Size, $product->Img);
      }
      return $ProductList;
    }

    public static function CreateProduct($name, $amount, $price, $size, $img)
    {
      $connection = DB::CreateConnection();
      $query = "INSERT INTO products (Name, Amount, Price, Size, Img)  VALUES ('$name', '$amount', '$price', '$size', '$img')";
      try
      {
        $res = mysqli_query($connection, $query);
        if($res) echo "<p class='text-success'> Producto guardado </p>";
      }
      catch(Exeption $e)
      {
        saveError($e->getMessage(), $e->getLine(), $e->getFile());
        throw new DatabaseException("Error al registrar producto");
      }
    }
  }
?>