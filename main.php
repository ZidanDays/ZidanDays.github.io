<?php

session_start();

include "functions.php";

if (!isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}


if( isset($_POST["save"]) ){
    if( tambah($_POST) > 0 ){
        echo "<script>
             alert('Data Berhasil Ditambahkan');
             document.location.href = 'index.php';  
                  </script>";
        }else{
            echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';  
                 </script>";
        }
    };

// if( isset($_POST["find"]) ){
//     if( cari($_POST) > 0 ){
//         echo "<script>
//         alert('Data Ditemukan');
//         document.location.href = 'search.php';  
//              </script>";
//    }else{
//        echo "<script>
//        alert('Data Tidak ditemukan');
//        document.location.href = 'search.php';  
//             </script>";
//     }
// }
$todo = take("SELECT * FROM todo");

if(isset($_POST["find"])){
    $todo = cari($_POST["createfind"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- <section class="vh-100" style="background-color: #eee;"> -->
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">

                        <h4 class="text-center my-3 pb-3">To Do App</h4>

                        <form action="" method="post"
                            class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                            <div class="col-12">
                                <div class="form-outline">
                                    <input type="text" name="createfind" id="form1" class="form-control" autofocus
                                        required>
                                    <label class="form-label" for="form1">Enter This Area</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="save" class="btn btn-primary">Add Task</button>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="find" class="btn btn-warning">Get tasks</button>
                            </div>
                        </form>

                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Todo item</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $i = 1; global $todo; ?>
                                    <?php foreach ($todo as $value) : ;?>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $value["todo"]; ?></td>
                                    <td><?= $value["status"]; ?></td>

                                    <td>
                                        <a href="delete.php?id=<?= $value["id"];?>"
                                            onclick=" return confirm('Yakin ingin menghapus list ini?');"><button
                                                type=" submit" name="delete" class="btn btn-danger">Delete</button>

                                            <a href="update.php?id=<?= $value["id"];?>"><button type=" submit"
                                                    name="finish" class="btn btn-success ms-1">Finished</button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach;?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </section> -->
</body>

</html>

<!-- if (tambah($conn < 0)){ // echo "<script> alert('Data Gagal Ditambahkan')</script>" ; // }else{ // -->
<!-- echo "<script> alert('Data Berhasil Ditambahkan')
</script>" ;} // } -->