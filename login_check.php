<!--Created by Gopinath Bhowmick-->
<?php
// error_reporting(0);
// echo "welcome to php world";
require_once('database_con/connect.php');

$error = 0;
$base = "Signup_Doctor.php";

// Die if connection was not successful
if (!$conn) {
    $error = 1;
    $data = array('errorcode' => $error);
    $url = $base . '?' . http_build_query($data);
    header("location: $url");
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['log-mob-number']) and isset($_POST['log-password'])) {

            // get the data
            $logmnumber =  mysqli_real_escape_string($conn, $_POST["log-mob-number"]);
            $logpass =  mysqli_real_escape_string($conn, $_POST["log-password"]);

            if ($logmnumber != "" and $logpass != "") {
                # code...
                $filternumber = htmlspecialchars($logmnumber);
                $sql = "SELECT * FROM `db_doctor_account_reg` WHERE `mobilenumber` = '$filternumber'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if ($num == 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if (password_verify($logpass, $row['password'])) {
                            $login = true;
                            session_start();
                            $_SESSION['loggedin'] = $login;
                            $_SESSION['refarensid'] = $row['refarensid'];
                            $_SESSION['username'] = $row['doctorname'];
                            $_SESSION['mobileno'] = $row['mobilenumber'];
                            header("location: Doctor/doctor_das.php");
                        } else {
                            $error = 4;
                            $data = array('errorcode' => $error);
                            $url = $base . '?' . http_build_query($data);
                            header("location: $url");
                        }
                    }
                } else {
                    $error = 3;
                    $data = array('errorcode' => $error);
                    $url = $base . '?' . http_build_query($data);
                    header("location: $url");
                }
            } else {
                # code...
                $error = 2;
                $data = array('errorcode' => $error);
                $url = $base . '?' . http_build_query($data);
                header("location: $url");
            }
        }
    }
}

?>