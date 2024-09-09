<?php
include('mail.php');


$message = "";
$logmessage = "";

if (isset($_POST['signup'])) {

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    //  $user_email ="mohamedtarekbadr047@gmail.com";
    $user_phone = $_POST['user_phone'];
    $user_password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    $hashpassword = password_hash($user_password, PASSWORD_DEFAULT);
    $gender = $_POST['gender'];



    $select = "SELECT * FROM `user` WHERE `user_email` = '$user_email'";
    $run_select = mysqli_query($connect, $select);
    $rows = mysqli_num_rows($run_select);

    $uppercase = preg_match('@[A-Z]@', $user_password);
    $lowercase = preg_match('@[a-z]@', $user_password);
    $numbers = preg_match('@[0-9]@', $user_password);
    $specialChars = preg_match('@[^\w]@', $user_password);

    if (empty($user_name) || empty($user_email) || empty($user_phone) || empty($user_password) || empty($confirm_password) || empty($gender)) {
        $err0r = "Please fill all the required fields.";
    } elseif ($user_password !== $confirm_password) {
        $err0r = "Passwords do not match.";
    } elseif (!$uppercase || !$lowercase || !$numbers || !$specialChars) {
        $err0r = "Password must contain an uppercase letter, a lowercase letter, a number, and a special character.";
    } elseif ($rows > 0) {
        $err0r = "Email already taken.";
    } elseif (strlen($user_phone) != 11) {
        $err0r = "Phone invalid";
    } else {
        $avatar_id = ($gender === 'Male') ? 1 : 2;
        $role_id = 2;
        // $_SESSION['user_email'] = $user_email;
        // $user_email = $_SESSION['user_email'];
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_phone'] = $user_phone;
        $_SESSION['hashpassword'] = $hashpassword;
        $_SESSION['avatar_id'] = $avatar_id;
        $_SESSION['role_id'] = $role_id;
        $_SESSION['gender'] = $gender;

        $rand = rand(1000, 9999);
        $_SESSION['otp'] = $rand;
        $_SESSION['otp_expiration'] = time() + 60;
        $msg = "Hello dear,
                    Your OTP number is $rand";
        $mail->setFrom('samashaheenn776@gmail.com', 'plaNest');          //sender mail address , website name
        $mail->addAddress($user_email);      //reciever mail address
        $mail->isHTML(true);
        $mail->Subject = 'Activation code';             //mail subject
        $mail->Body = ($msg);                  //mail content
        $mail->send();
        header('Location:signup_otp.php');
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
    <link rel="stylesheet" href="css/newsign.css">
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
                <h2>Sign-up</h2>
                <form method="post">
                    <div class="flex-it">
                        <div class="inputs-container">
                            <input type="text" id="username" name="user_name" required />
                            <label>Username</label>
                        </div>

                        <div class="inputs-container">
                            <input type="number" id="phone" name="user_phone" required />
                            <label>Phone</label>
                        </div>
                    </div>
                    <div class="inputs-container">
                        <input type="email" id="email" name="user_email" required />
                        <label>Email</label>
                    </div>
                    <div class="inputs-container">
                        <input type="password" id="password" name="user_password" required />
                        <label>Password</label>
                    </div>
                    <div class="inputs-container">
                        <input type="password" id="Confirm" name="confirm_password" required />
                        <label>Confirm Password</label>
                    </div>
                    <div class="gender-div">
                        <label class="gender" for="gender">Gender:</label>
                        <div class="radio-group">
                            <input class="check" type="radio" id="male" name="gender" value="Male" required>
                            <label for="male">Male</label>
                        </div>
                        <div class="radio-group">
                            <input class="check" type="radio" id="female" name="gender" value="Female" required>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="check-it">
                        <input type="checkbox" id="termsCheckbox">
                        <label class="check-it" for="termsCheckbox">I have read and agree to the <a href="terms.html">Terms
                                and Conditions.</a>
                        </label>
                    </div>
                    <?php
                    if(isset($err0r)) { ?>
                    <div class="message"><?php echo $err0r; ?></div>
                    <?php } ?>
                    <button class="submit-btn" name="signup">Sign up</button>
                    <p>Already Have an Account? <a href="thelog.php">Login Now</a></p>

                   
                    
                    
                    

                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="js/sign.js"></script>
</body>

</html>