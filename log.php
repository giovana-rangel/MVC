<?php 
  function saveError($message, $line, $file)
  {
    $filename = "log.txt";
    $newMsg = "Error: " . $message . "Línea: " . $line . "Archivo: " . $file . "\n";
    //Abrimos el archivo en modo escritura con el puntero al final del archivo. Si no existe lo crea
    $file = fopen($filename, "a");
    fwrite($file, $newMsg);
    fclose($file);
  }
?>