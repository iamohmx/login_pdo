<?php 

    require_once 'connect.php';

    session_start();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $role = $_POST['role'];

        if (empty($username)) {
            $error_msg = "ENTER YOUR USERNAME!";
        } else if (empty($password)) {
            $error_msg = "ENTER YOUR PASSWORD!";
        } else if (empty($role)) {
            $error_msg = "PLEASE SELECT YOUR ROLE BEFORE!";
        } else if ($username AND $password AND $role) {
            try {

                $select_stmt = $conn->prepare("SELECT username, password, role FROM users 
                WHERE username = :username AND password = :password AND role = :role");
                $select_stmt->bindParam(":username", $usernmae, PDO::PARAM_STR);
                $select_stmt->bindParam(":password", $password, PDO::PARAM_STR);
                $select_stmt->bindParam(":role", $role, PDO::PARAM_STR);
                $select_stmt->execute();
                

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                    $dbusername = $row['username'];
                    $dbpassword = $row['password'];
                    $dbrole = $row['role'];
                }
                
                if ($username != null AND $password != null AND $role != null) {
                    if ($select_stmt->rowCount() == 1) {
                        if ($dbusername == $username AND $dbpassword == $password AND $dbrole == $role) {
                            switch ($dbrole) {
                                case 'admin':
                                    $_SESSION['admin'] = $usernmae;
                                    $_SESSION['success'] = 'Admin login successfully';
                                    header('location: admin/index.php');
                                break;
                                case 'director':
                                    $_SESSION['director'] = $usernmae;
                                    $_SESSION['success'] = 'Direct login successfully';
                                    header('location: director/index.php');
                                break;
                                case 'teacher':
                                    $_SESSION['teacher'] = $usernmae;
                                    $_SESSION['success'] = 'Teacher login successfully';
                                    header('location: teacher/index.php');
                                break;
                                case 'student':
                                    $_SESSION['student'] = $usernmae;
                                    $_SESSION['success'] = 'Student login successfully';
                                    header('location: student/index.php');
                                break;
                                default:
                                    $_SESSION['error'] = "Username or Password and Role Invalid!";
                                    header("location: index.php");
                            }
                        }
                    } else {
                        $_SESSION['error'] = "Username or Password and Role Invalid!";
                        header("location: index.php");
                    }
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
