<?php 

session_start();


if (isset($_SESSION['admin'])) {
    header("location: admin/index.php");
}
if (isset($_SESSION['director'])) {
    header("location: director/index.php");
}
if (isset($_SESSION['teacher'])) {
    header("location: teacher/index.php");
}
if (isset($_SESSION['student'])) {
    header("location: student/index.php");
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::SPICC HOTSPOT::</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-5">
                <?php if (isset($_SESSION['success'])) :?>
                    <div class="alert alert-success" role="alert">
                        <h3 class="text-center">
                            <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                <?php if (isset($_SESSION['error'])) :?>
                    <div class="alert alert-danger" role="alert">
                        <h3 class="text-center">
                            <?php 
                            echo $_SESSION['error']; 
                            unset($_SESSION['error']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>

                    <div class="card ">
                        <div class="card-header text-white" style="background-color: #9145B6;">
                            <h3 class="text-center">::SPICC HOTSPOT::</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="username" class="form-label"> Username:</label>
                                        <input type="text" name="username" class="form-control" placeholder="??????????????????????????????????????????????????????????????????" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label"> Password:</label>
                                        <input type="password" name="password" class="form-control" placeholder="???????????????????????????????????????????????????" required>
                                        <br>
                                    </div>
                                    <div class="text-center">
                                        <div class="col-12">
                                            <div class="form-select">
                                                <select name="role" id="role" class="form-select">
                                                    <option selected>?????????????????????????????????????????????????????????????????????</option>
                                                    <option value="director">?????????????????????????????????</option>
                                                    <option value="teacher">??????????????????/?????????????????????</option>
                                                    <option value="student">????????????????????????/????????????????????????</option>
                                                    <option value="admin">?????????????????????????????????</option>
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary" name="login" value="Login">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>