<?php

//injects a simple function to pre code
$content = $_POST["content"];
$pretty = "function printr(\$data, \$exit = TRUE) {
  if (\$data) {
    print '<pre>';
    print_r(\$data);
    print '</pre>';
  }
  if (\$exit) {
    exit;
  }
}";

if(stristr($content,"?>")) $content = str_replace("?>",$pretty." ?>",$content);
else $content = $content.$pretty;    

file_put_contents("php_files/php_temp.php",$content);
