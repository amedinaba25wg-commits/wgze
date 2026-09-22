<?php
function duplicar (&$a) {
$a  =  $a  * 2;
}
$var = 4;  
duplicar ($var);  
echo "$var<br>";
?>