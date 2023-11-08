<?php

function recordLog($file_name) { 
  $path = __DIR__."/".$file_name;

  if (!is_dir($path)) { $mask = umask(0); mkdir($path, 0777, TRUE); umask($mask); }

}

$a = readline('Enter a name file: ');

recordLog($a);
