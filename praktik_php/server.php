<?php
// Memeriksa apakah variabel $_SERVER telah diatur sebelum mencoba mengaksesnya
if(isset($_SERVER['PHP_SELF'])){
    echo $_SERVER['PHP_SELF'];
}
echo "<br>";

if(isset($_SERVER['SERVER_NAME'])){
    echo $_SERVER['SERVER_NAME'];
}
echo "<br>";

if(isset($_SERVER['HTTP_HOST'])){
    echo $_SERVER['HTTP_HOST'];
}
echo "<br>";

if(isset($_SERVER['HTTP_REFERER'])){
    echo $_SERVER['HTTP_REFERER'];
}
echo "<br>";

if(isset($_SERVER['HTTP_USER_AGENT'])){
    echo $_SERVER['HTTP_USER_AGENT'];
}
echo "<br>";

if(isset($_SERVER['SCRIPT_NAME'])){
    echo $_SERVER['SCRIPT_NAME'];
}
?>
