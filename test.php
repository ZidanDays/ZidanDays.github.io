<?php

$conn = mysqli_connect("localhost","root","","do");

$delete = $_GET["id"];
    $query = "DELETE todo WHERE id = '$delete' ";
    mysqli_query($conn,$query);

?>