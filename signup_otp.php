<?php
include ('mail.php');
$message="";
if($_SESSION['otp']){
$randd=$_SESSION['otp'];
}
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
$user_phone = $_SESSION['user_phone'];
$hashpassword = $_SESSION['hashpassword'];
$avatar_id = $_SESSION['avatar_id'];
$role_id = $_SESSION['role_id'];
$gender = $_SESSION['gender'];
$otp_expiration= $_SESSION['otp_expiration'];


// if($_SESSION['otp']){

//     $randd=$_SESSION['otp'];
// }



if(isset($_POST['submit'])){
    $a = isset($_POST['otp1']) ? $_POST['otp1'] : '';
    $b = isset($_POST['otp2']) ? $_POST['otp2'] : '';
    $c = isset($_POST['otp3']) ? $_POST['otp3'] : '';
    $d = isset($_POST['otp4']) ? $_POST['otp4'] : '';
    $otp = $a.$b.$c.$d;
    $current_time = time();
// if(empty($a) || empty($b) || empty($c) || empty($d)){
// $message_enter ="Please Enter OTP";
// } elseif ($current_time > $otp_expiration) {
//          $message ="message";
//     }elseif($rand!=$otp){
//         $error="error";}else{


            if ($current_time > $otp_expiration) {
                $message_time ="messages";
            }elseif($randd!=$otp){
                $error_not_equal="error";
            }else{
        $insert = "INSERT INTO `user` VALUES(NULL,'$user_name', '$user_email', '$user_phone', '$hashpassword', '$avatar_id', '$role_id', NULL, '$gender')";
        $run_insert=mysqli_query($connect,$insert); 


        $correct = "Your Account Has Been Added Please Log In. ";
     
        
        
 
       
       unset($_SESSION['user_name']);
       unset($_SESSION['user_email']);
       unset($_SESSION['user_phone']);
       unset($_SESSION['hashpassword']);
       unset($_SESSION['avatar_id']);
       unset($_SESSION['role_id']);
       unset($_SESSION['gender']);
       unset($_SESSION['otp']);
       unset($_SESSION['otp_expiration']);


       header("refresh: 4;url=thelog.php");
    }
}  

if (isset($_POST['resend_otp'])) {
    $new_rand = rand(1000, 9999); 
    $_SESSION['otp'] = $new_rand;
    $_SESSION['otp_expiration'] = time() + 60;

    $msg = "Hello dear, your new OTP number is $new_rand";

    
    $mail->setFrom('samashaheenn776@gmail.com', 'plaNest'); // sender mail address, website name
    $mail->addAddress($user_email); // receiver mail address
    $mail->isHTML(true);
    $mail->Subject = 'New Activation Code'; // mail subject
    $mail->Body = $msg; // mail content
    $mail->send();

    $message_send = "A new OTP has been sent to your email.";
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
</head>

<body>

    <div class="otp">

        <header>
            <i class="bx bxs-check-shield"></i>
        </header>

        <h4>Enter OTP Code</h4>

        <form method="POST">

            <div class="input-field">
                <input method="POST" name="otp1" type="number" >
                <input method="POST" name="otp2" type="number" disabled>
                <input method="POST" name="otp3" type="number" disabled>
                <input method="POST" name="otp4" type="number" disabled>
            </div>

            <button id="verifyBtn" type="submit" class="active" name="submit">Verify OTP</button>

            
        </form>
        <?php if(isset($error_not_equal)){ ?>
        <div class="error-message">
            <p><i class="bx bxs-error"></i> The code doesn't match the one we sent!</p>
            <form method="POST">
            <button class="resend" type="submit" name="resend_otp">Resend</button>
            </form>
        </div>
        <?php }elseif(isset($message_time)){ ?>
            <div class="error-message">
            <p><i class="bx bxs-error"></i>OTP has expired. Please request a new one.</p>
            <form method="POST">
            <button class="resend" type="submit" name="resend_otp">Resend</button>
            </form>
        </div>
        <?php } ?>
        
        <?php 
            if (!empty($message_send)) {
            echo "<p>$message_send</p>";
              }elseif(!empty($correct)){
                echo "<p>$correct</p>";
              }
          ?>

    </div>


    <script src="js/otp.js"></script>

</body>

</html>