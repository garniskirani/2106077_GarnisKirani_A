<?php

$koneksi = mysqli_connect('localhost', 'root', '', '2106077_garnis');

if (!$koneksi) {
    echo "database tidak terhubung";
} 
?>