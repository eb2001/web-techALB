<?php
$cookie_page;

if !(isset($_COOKIE[$cookie_page])) {
  setcookie("nav_history", $cookie_page, time() + (86400 * 30), "/");
}



$cookie_values = $_COOKIE["nav_history"];
$cookie_values .= $_COOKIE["nav_history"];
echo $cookie_values;
?>
