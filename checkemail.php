<?php
include 'mail.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    //0 $password = $_POST['user_password'];
    // $password_hash = password_hash($password, PASSWORD_DEFAULT);
    // $lowercase = preg_match('@[a-z]@', $password);
    // $uppercase = preg_match('@[A-Z]@', $password);
    // $numbers = preg_match('@[0-9]@', $password);

    $select = "SELECT * FROM `user` WHERE  `user_email` = '$email'";
    $run_select = mysqli_query($connect, $select);
    if (mysqli_num_rows($run_select) > 0) {
        $rand = rand(1000, 9999);
        $msg = "Hello, your OTP is $rand";

        $mail->setFrom('alisalahabdelhamed2005299@gmail.com', 'plaNest');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Activation Code';
        $mail->Body = ($msg);
        $mail->send();
        $_SESSION['otp'] = $rand;
        $_SESSION['otp_expiration'] = time() + 30;
        header("location:otp.php");

    } else {
        $err0r = "E-mail not found . Signup Now";
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated-Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/recovery.css">
</head>

<body>
    <div class="main-container">
        <div class="MAIN">
            <!-- Forms -->
            <div class="signup-form">
                <h2>Forgot your Password?</h2>
                <form method="POST">

                    <!-- Email Form -->
                    <div class="form-group">
                        <label for="email"> Enter Your Email:</label>
                        <div class="icon">
                            <input class="Email2" type="email" id="email" placeholder="Enter Your Email" name="email"
                                required>
                            <i class="fa-solid fa-envelope icon2"></i>

                        </div>
                    </div>
                    <?php

                    if (isset($err0r)) { ?>
                        <div class="message"><?php echo $err0r; ?></div>
                    <?php } ?>
                    <input type="submit" name="submit" value="Confirm" id="submit" class="btn2">
                </form>
            </div>

        </div>
    </div>
</body>

</html>