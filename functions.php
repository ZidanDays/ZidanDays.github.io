<?php

$conn = mysqli_connect("localhost","root","","do");



// function show($query){
//     global $conn;
//     $row = mysqli_query($conn,$query);
//     $result = mysqli_fetch_assoc($row);
//     return $result;
// }

function take($query){
    global $conn;
    $rows =[];
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $createfind = $data["createfind"];
    $query = "INSERT INTO todo VALUES ('','$createfind','Belum Dikerjakan')";
    mysqli_query($conn,$query);

    if (mysqli_affected_rows($conn < 0)){
        echo "<script> alert('Data Berhasil Ditambahkan')</script>";
    }else{
        echo "<script> alert('Data Gagal Ditambahkan')</script>";}

}
    

?>