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

function cari($data){
    $query = "SELECT * FROM todo where todo LIKE '$data'";

    return take($query);
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

function registrasi($data){
    global $conn;
    //menyimpan nilai ke dalam variable yang di tangkap oleh function
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek apakah username sudah terdafatar atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    //cek apakah validasi password sesuai
    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
            alert('Username Sudah Terdaftar!');
        </script>";
        return false;
    }

    //cek apakah validasi password sesuai
    if ($password !== $password2){
        echo "<script>alert('Password Tidak Sesuai')
        </script>";
        return false;
    }
    
    //membuat enkripsi pada password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES ('','$username','$password')");
    return mysqli_affected_rows($conn);
}

?>