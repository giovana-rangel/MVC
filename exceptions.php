<?php 
  class DatabaseException extends Exception
  {
    public function errorMessage()
    {
      $errorMsg = 'Lo sentimos: ' . $this->getMessage();
      return $errorMsg;
    }
  }

  class FormException extends Exception 
  {
    public function errorMessage()
    {
      $errorMsg = 'Campos obligatorios sin completar: ' . $this->getMessage();
      return $errorMsg;
    }
  }

  //convierte errores en excepciones
  function errorHandler($error_level, $error_message, $error_file, $error_line)
  {
    saveError($error_message, $error_line, $error_file);
    throw new Exception("");
  }

  function checkForm($name, $amount, $price, $size)
  {
    $message = '';

    if(empty($name)) $message = ' Nombre';
    if(empty($amount)) $message = ' Cantidad/stock';
    if(empty($price)) $message = ' Precio';
    if(!empty($message)) throw new FormException($message);
  }
?>