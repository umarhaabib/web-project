<?php

include "db.php";
include "head.php";

?>
<?php
//sign in
if (isset($_POST['loginAttempt'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
        $password = mysqli_real_escape_string($db, $_POST['Password']);

        $sql = "SELECT * FROM users WHERE  UserId = '$user_id' AND password = md5('$password')";

        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            
            $_SESSION['Role'] = $row['Role'];
            $_SESSION['LoggedInUserGroup'] = $row['GroupNumber'];
            $_SESSION['LoggedInUserID'] = $row['UserId'];
            header("location: admin/abc.php");
        } else {
            echo "<script>
                setTimeout(function() {
                    alert('Wrong Student Id or password');
                    location.href = 'login.php';

                }, 1000);
                </script>";

            exit();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url("public/images/hero_image2.jpg");
        }
    </style>
    <?php

    include 'header.php';
    ?>
</head>


<body>

    <div class="d-flex flex-column h-100">


        <main>
            <div class="container-xl px-4" style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <!-- Basic login form-->
                        <div class="card shadow-lg border-0 rounded-lg" style="margin-top: 100px;">
                            <div class="card-header justify-content-center">
                                <h3 class="fw-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <!-- Login form-->
                                <form method="post">
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">User Id</label>
                                        <input class="form-control" name="user_id" type="number" placeholder="Enter user id" />
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control" name="Password" type="password" placeholder="Enter password" />
                                    </div>
                                    <div style="float: right;" class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <input class="btn btn-primary" value="Login" type="submit" name="loginAttempt" />
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="index.php">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php'; ?>
    </div>

</body>

</html>