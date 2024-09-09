<?php
include('connect.php');
//start for the login backend
$message = "";
$logmessage = "";


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `user` where `user_email`='$email'";
    $runSelect = mysqli_query($connect, $select);
    $rows = mysqli_num_rows($runSelect);
    // echo $email;
    // echo $password;
    if ($rows == 1) {
        $fetch = mysqli_fetch_assoc($runSelect);
        $hashedPassword = $fetch['user_password'];
        if (password_verify($password, $hashedPassword)) {
            $user_id = $fetch['user_id'];
            $email = $fetch['user_email'];
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_email'] = $email;
            header("Location:home.php");


            $join = "SELECT * FROM `user`
        JOIN `project members` ON `user`.`user_email` = `project members`.`member`
        WHERE `user`.`user_id` = '$user_id'";
            $run_join = mysqli_query($connect, $join);
            $fetch = mysqli_fetch_assoc($run_join);
            $member_email = $fetch['member'];
            $member_id = $fetch['user_id'];
            if ($member_id == NULL) {
                $update = "UPDATE `project members` SET `user_id` = '$user_id' WHERE `member` = '$email'";
                $run_update = mysqli_query($connect, $update);
                header("location:home.php");
            } else {
                header("location:home.php");
            }
        } else {
            $logmessage = "Wrong password";
        }
    } else {
        $logmessage = "Please Enter correct data";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plaNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/thelog.css">
</head>

<body>
    <?php include('navBar.php'); ?>
    <div class="container">
        <div class="left">
            <div class="cta">
                <h1>Welcome <br> to plaNest</h1>
                <p>Streamline Your Projects, Collaborate Seamlessly, and Achieve Your Goals.</p>
            </div>
        </div>
        <div class="right">
            <div class="login-form">
                <h2>Login</h2>
                <form method="post">
                    <div class="inputs-container">
                        <input type="email" id="email" name="email" required />
                        <label for="email">Email</label>
                    </div>
                    <div class="inputs-container">
                        <input type="password" id="password" name="password" required />
                        <label for="password">Password</label>
                    </div>

                    <a href="checkemail.php" class="forget-password"> <i class="fa-solid fa-key"></i>Forget Password</a>

                    <?php if ($logmessage): ?>
                        <div class="message"><?php echo $logmessage; ?></div>
                    <?php endif; ?>
                    <button type="submit" class="btn sign-up" name="login">Login</button>
                    <p>Don't Have An Account? <a href="newsign.php">Sign-up Now</a></p>
                    <?php if ($message): ?>
                        <div class="message"><?php echo $message; ?></div>
                    <?php endif; ?>

                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="js/thelog.js"></script>
</body>

</html>