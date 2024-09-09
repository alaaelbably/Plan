<?php
include ('connect.php');
if(isset($_POST['submit'])){
     $email=$_SESSION['email'];
     $password= $_POST['user_password'];
     $newpass= $_POST['newpassword'];

     $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $numbers = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

     if (empty($password) || empty($newpass)) {
        $err0r=  "Please fill all the required fields.";
    } elseif ($password !== $newpass) {
        $err0r=  "Passwords do not match.";
    }elseif (!$uppercase || !$lowercase || !$numbers || !$specialChars) {
        $err0r=  "Password must contain an uppercase letter, a lowercase letter, a number, and a special character.";
    }else{

     $hashed= password_hash($password, PASSWORD_DEFAULT);
     $update="UPDATE `user` SET `user_password` = '$hashed' WHERE `user_email` = '$email'";
     $runUpdate= mysqli_query($connect, $update);
     
     $passed= "Password Changed.";
     unset($_SESSION['email']);
     header("refresh: 3;url=thelog.php");
    }
     
     
     
    }
     // session_unset();
     // session_destroy();







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plaNest</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/newpw.css">
</head>

<body>
    <div class="main-container">
        <div class="MAIN">
            <!-- Forms -->
            <div class="signup-form">
                <h2>Reset your Password</h2>
                <form method="POST">
                    <!-- Email Form -->
                    <div class="form-group">
                        <label for="password"> Enter New Password:</label>
                        <div class="icon">
                            <input class="Email2" type="password" id="password" placeholder="Enter New Password"
                                name="user_password" >
                            <i class="fa-solid fa-lock icon2"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm"> Confirm New Password:</label>
                        <div class="icon">
                            <input class="Email2" type="password" id="confirm" placeholder="Confirm New Password"
                                name="newpassword" >
                            <i class="fa-solid fa-lock icon2"></i>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Confirm" id="submit" class="btn2">
                    <?php if (isset($err0r)){ ?>
                        <div class="message"><?php echo $err0r; ?></div>
                    <?php }elseif(isset($passed)){ ?>
                      <div class="message"><?php echo $passed; ?></div>
                  <?php  } ?>
                </form>
                
            </div>

        </div>
    </div>

    

   
</body>

</html>