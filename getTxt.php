<?php
$enkripsi = $_POST['txt'];

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=Ajmmxx.txt");

echo $enkripsi;
 ?>