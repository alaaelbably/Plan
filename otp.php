<?php
include('mail.php');
$message = "";
$otp_expiration = $_SESSION['otp_expiration'];
$email = $_SESSION['email'];
if ($_SESSION['otp']) {

    $randd = $_SESSION['otp'];
}
if (isset($_POST['submit'])) {
    // $otp=$_POST['otp'];
    $a = isset($_POST['num1']) ? $_POST['num1'] : '';
    $b = isset($_POST['num2']) ? $_POST['num2'] : '';
    $c = isset($_POST['num3']) ? $_POST['num3'] : '';
    $d = isset($_POST['num4']) ? $_POST['num4'] : '';
    $result = $a . $b . $c . $d;
    $current_time = time();

    if ($current_time > $otp_expiration) {
        $message_time = "messages";
    } elseif ($randd != $result) {
        $error_not_equal = "error";

    } else {

        $correct = "OTP Is Correct.";

        unset($_SESSION['otp_expiration']);
        header("refresh: 4;url=change_forgot_password.php");
    }


}

if (isset($_POST['resend_otp'])) {
    $new_rand = rand(1000, 9999);
    $_SESSION['otp'] = $new_rand;
    $_SESSION['otp_expiration'] = time() + 60;

    $msg = "Hello dear, your new OTP number is $new_rand";


    $mail->setFrom('samashaheenn776@gmail.com', 'plaNest'); // sender mail address, website name
    $mail->addAddress($email); // receiver mail address
    $mail->isHTML(true);
    $mail->Subject = 'New Activation Code'; // mail subject
    $mail->Body = $msg; // mail content
    $mail->send();

    $message = "A new OTP has been sent to your email.";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link rel="stylesheet" href="./css/otp.css">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.css" rel="stylesheet">

    <script src="./js/otp.js" defer> </script>


</head>

<body>

    <div class="otp">

        <header>
            <i class="bx bxs-check-shield"></i>
        </header>

        <h4>Enter OTP Code</h4>

        <form method="POST">

            <div class="input-field">
                <input method="POST" name="num1" type="number">
                <input method="POST" name="num2" type="number" disabled>
                <input method="POST" name="num3" type="number" disabled>
                <input method="POST" name="num4" type="number" disabled>
            </div>

            <button id="verifyBtn" type="submit" class="active" name="submit">Verify OTP</button>


        </form>
        <?php if (isset($error_not_equal)) { ?>
            <div class="error-message">
                <p><i class="bx bxs-error"></i> The code doesn't match the one we sent!</p>
                <form method="POST">
                    <button class="resend" type="submit" name="resend_otp">Resend</button>
                </form>
            </div>
        <?php } elseif (isset($message_time)) { ?>
            <div class="error-message">
                <p><i class="bx bxs-error"></i>OTP has expired. Please request a new one.</p>
                <form method="POST">
                    <button class="resend" type="submit" name="resend_otp">Resend</button>
                </form>
            </div>
        <?php } ?>

        <?php
        if (!empty($message)) {
            echo "<p>$message</p>";
        } elseif (!empty($correct)) {
            echo "<p>$correct</p>";
        }
        ?>

    </div>


    <script src="js/otp.js"></script>
</body>

</html>