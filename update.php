<?php

require "functions.php";

$id = $_GET["id"];

if( update($id) > 0 ){
    echo "<script>
    alert('Tugas Selesai');
    document.location.href = 'index.php';
    </script>";
}else{
    echo "<script>
    alert('Gagal');
    document.location.href = 'index.php';
    <?script>";
}
?>