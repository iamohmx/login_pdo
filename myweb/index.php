<?php 

session_start();


// if (isset($_SESSION['admin'])) {
//     header("location: admin/index.php");
// }
// if (isset($_SESSION['director'])) {
//     header("location: director/index.php");
// }
// if (isset($_SESSION['teacher'])) {
//     header("location: teacher/index.php");
// }
// if (isset($_SESSION['student'])) {
//     header("location: student/index.php");
// }





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
                    <div class="card ">
                        <div class="card-header text-white" style="background-color: #9145B6;">
                            <h3 class="text-center">::SPICC HOTSPOT::</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="username" class="form-label"> Username:</label>
                                        <input type="text" name="username" class="form-control" placeholder="กรุณาป้อนชื่อผู้ใช้งาน" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label"> Password:</label>
                                        <input type="password" name="password" class="form-control" placeholder="กรุณาป้อนรหัสผ่าน" required>
                                        <br>
                                    </div>
                                    <div class="text-center">
                                        <div class="col-12">
                                            <div class="form-select">
                                                <select name="role" id="role" class="form-select">
                                                    <option selected>กรุณาเลือกรดับผู้ใช้งาน</option>
                                                    <option value="director">ผู้อำนวยการ</option>
                                                    <option value="teacher">คุณครู/อาจารย์</option>
                                                    <option value="student">นักเรียน/นักศึกษา</option>
                                                    <option value="admin">ผู้ดูแลระบบ</option>
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