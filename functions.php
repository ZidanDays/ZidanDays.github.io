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
    $abc = $data["createfind"];
    $query = "INSERT INTO todo VALUES ('','$abc','Belum Dikerjakan')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($data){
    global $conn;
    $query = "DELETE FROM todo WHERE id = '$data'";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $query = "UPDATE todo set status='SELESAI!!!' WHERE id = '$data' ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
    

?>