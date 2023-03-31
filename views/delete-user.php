<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
        include "main-nav.php";
    ?>
    <main class="card w-25 mx-auto border-0 my-5">
        <div class="card-header bg-white border-0">
            <h4 class="card-title text-center text-danger text-uppercase fw-bold">Delete User</h2>

        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <i class="fa-solid fa-triangle-exclamation text-warning fs-1"></i>
                <p class="fw-bold">Are you sure you want to delete "<?= $_SESSION['fullname'] ?>" </p>
            </div>
            <div class="row">
                <div class="col">
                    <a href="../views/dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="../actions/delete.php" method="post">
                        <button type="submit" class="btn btn-danger w-100" name="btn_delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>
</html>