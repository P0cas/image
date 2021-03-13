<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  $file = $page . ".php";

  // Saving ourselves from any kind of hackings and all
  assert("strpos('$file', '..') === false") or die("HACKING DETECTED! PLEASE STOP THE HACKING PRETTY PLEASE");
  
} else {
  $file = "home.php";
}

include($file);
// flag is flag{85a25711fa6e111ed54b86468a45b90c}
?>

