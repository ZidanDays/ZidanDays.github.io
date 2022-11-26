<?php
require "functions.php";


if( isset($_post["save"]) )


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
                                    <input type="text" name="createfind" id="form1" class="form-control" />
                                    <label class="form-label" for="form1">Enter a task here</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
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
                                    <?php $i = 1; ?>
                                    <?php foreach ($todo as $value) : ;?>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $value["todo"]; ?></td>
                                    <td><?= $value["status"]; ?></td>

                                    <td>
                                        <button type="submit" name="delete" class="btn btn-danger"
                                            href="index.php?id=<?= $value["id"]; ?>">Delete</button>
                                        <button type="submit" name="finish" class="btn btn-success ms-1"
                                            href="index.php?id=<?= $value["id"]; ?>">Finished</button>
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