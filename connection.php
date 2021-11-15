<?php 
  class DB 
  {
    private static $connection = NULL;

    public static function CreateConnection(){
      if(!isset(self::$connection))
      {
        try
        {
          self::$connection = mysqli_connect("localhost","root","", "tienda");

          if(!self::$connection)
          {
            die("Error en la conexión: " . mysqli_connect_error());
          }
        }
        catch(Exception $e)
        {
          saveError($e->getMessage(), $e->getLine(), $e->getFile());
          throw new DatabaseException("Error al conectarse a la base de datos");
        }
      }
      return self::$connection;
    }
  }
?>