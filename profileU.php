<?php
$pageName = 'profileU';

include('connect.php');
$user_id = $_SESSION['user_id'];

$select_edit = "SELECT * FROM `user` WHERE `user_id` = '$user_id' ";
$runedit = mysqli_query($connect, $select_edit);
$fetch = mysqli_fetch_assoc($runedit);
$name = $fetch['user_name'];
$email = $fetch['user_email'];
$phone = $fetch['user_phone'];


if (isset($_POST['update'])) {
    $user_name = $_POST['user_name'];
    $edit_email = $_POST['user_email'];
    $edit_phone = $_POST['user_phone'];


    if (empty($user_name)) {
        $err0r = "Please Enter Username";

    } elseif (empty($edit_email)) {
        $err0r = "Please Enter Email";

    } elseif (empty($edit_phone)) {
        $err0r = "Please Enter Phone Number";
    } elseif (strlen($edit_phone) != 11) {
        $err0r = "Phone invalid";
    } else {
        $update = "UPDATE `user` SET `user_name` = '$user_name' , 
    `user_email` = '$edit_email' , `user_phone` = '$edit_phone' WHERE `user_id` = '$user_id'";

        $runupdate = mysqli_query($connect, $update);
        $passed = "Updated successfully!";
    }

}


// $user_id=$_SESSION['user_id'];
$select = "SELECT * FROM `user` WHERE `user_id`=$user_id";
$run = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($run);
$name = $fetch['user_name'];


$message = "";
if (!isset($_SESSION['user_id'])) {
    header("location:thelog.php");
    exit();
}

// $user_id = $_SESSION['user_id'];


if (isset($_POST['submit'])) {
    $select = "SELECT * FROM `user` where `user_id`=$user_id";
    $runSelect = mysqli_query($connect, $select);
    $fetch = mysqli_fetch_assoc($runSelect);
    $fetchOldPassword = $fetch['user_password'];
    $oldPassword = $_POST['oldpassword'];
    $newPassword = $_POST['newpassword'];
    $confirmPassword = $_POST['confirmpassword'];


    $uppercase = preg_match('@[A-Z]@', $newPassword);
    $lowercase = preg_match('@[a-z]@', $newPassword);
    $numbers = preg_match('@[0-9]@', $newPassword);
    $specialChars = preg_match('@[^\w]@', $newPassword);

    if (password_verify($oldPassword, $fetchOldPassword)) {

        if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
            $err0r = "Please fill all the required fields.";
        } elseif ($newPassword !== $confirmPassword) {
            $err0r = "Passwords do not match.";
        } elseif (!$uppercase || !$lowercase || !$numbers || !$specialChars) {
            $err0r = "Password must contain an uppercase letter, a lowercase letter, a number, and a special character.";
        } else {
            $newHashedpass = password_hash($newPassword, PASSWORD_DEFAULT);
            $update = "UPDATE `user` set `user_password` = '$newHashedpass' WHERE `user_id`=$user_id";
            $runUpdate = mysqli_query($connect, $update);
            $passed = "Password updated successfully";
        }




    } else {
        $err0r = "Old password is wrong, Please Try Again";
    }
}

$select = "SELECT * FROM `user`JOIN `avatar` ON `user`.`avatar_id`=`avatar`.`avatar_id` WHERE `user_id` ='$user_id' ";
$run_select = mysqli_query($connect, $select);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <!-- edit profile -->
    <div class="main-edit">
        <div class="edit-cont">
            <!-- Forms -->
            <div class="signup-form">
                <h2>Update Your Profile</h2>
                <i class="fa-solid fa-xmark" onclick="hideProf()"></i>
                <form method="POST">
                    <!-- UserName Form -->
                    <div class="form-group ">
                        <div class="label-div">
                            <label for="username">Edit Name:</label>
                        </div>
                        <div class="icon">
                            <input class="USERNAME" type="text" id="username" placeholder="Edit Name" name="user_name"
                                value="<?php echo $name ?>">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <!-- Phone Number Form -->
                    <div class="form-group  ">
                        <label for="phone">Edit Number:</label>
                        <div class="icon">
                            <input type="number" id="phone" value="<?php echo $phone ?>"="Edit Number"
                                name="user_phone">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                    <!-- Email Form -->
                    <div class="form-group">
                        <label for="email"> Edit Email:</label>
                        <div class="icon">
                            <input class="Email2" type="email" id="email" placeholder="Edit Email" name="user_email"
                                value="<?php echo $email ?>">
                            <i class="fa-solid fa-envelope icon2"></i>

                        </div>
                    </div>
                    <input type="submit" value="Confirm" id="submit" class="btn2" name="update">
                </form>
            </div>

        </div>
    </div>
    <!-- end profile -->

    <!-- edit pass -->
    <div class="main-pass">
        <div class="pass-cont">
            <!-- Forms -->
            <div class="signup-form">
                <i onclick="hidePass()" class="fa-solid fa-xmark"></i>
                <h2>Change Your Password</h2>
                <form method="POST">
                    <!-- NEW Password Form -->
                    <div class="form-group ">
                        <label for="Oldpassword">Your Old Password:</label>
                        <div class="icon">
                            <input class="PASSWORD" type="password" id="Oldpassword" placeholder=" Old Password"
                                name="oldpassword">
                            <i class="fa-solid fa-lock icon3 "></i>

                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password">Your New Password:</label>
                        <div class="icon">
                            <input class="PASSWORD" type="password" id="password" placeholder=" New Password"
                                name="newpassword">
                            <i class="fa-solid fa-lock icon3 "></i>

                        </div>
                    </div>
                    <!-- Confirm NEW Password Form -->
                    <div class="form-group ">
                        <label for="password">Confirm Your New Password:</label>
                        <div class="icon">
                            <input class="PASSWORD" type="password" id="password"
                                placeholder=" Confirm Your New Password" name="confirmpassword">
                            <i class="fa-solid fa-lock icon3 "></i>
                        </div>
                    </div>
                    <input type="submit" value="Update" id="submit" class="btn2" name="submit">
                </form>
            </div>

        </div>
    </div>

    <!-- main page -->
    <div class="profile-container">
        <?php
        include("theside.php")
            ?>
        <div class="restProfile" id="mainDiv">
            <div class="title">
                <h2>Welcome Back, <?php echo $name ?>!</h2>
            </div>
            <div class="my-account">
                <div class="my-img">
                    <?php foreach ($run_select as $data) { ?>
                        <img src="<?php echo 'img/' . $data['avatar_image']; ?>" alt="<?php echo $data['avatar_image']; ?>">
                    <?php } ?>

                </div>


                <div class="details">
                    <div class="title2">
                        <h1>User Information</h1>
                    </div>
                    <div class="data">
                        <h2>Email</h2>
                        <p class="my-data"><?php echo $email ?></p>
                        <br>

                        <h2>Phone Number</h2>
                        <p class="my-data"><?php echo $phone ?></p>
                        <br>
                    </div>

                    <div class="buttons">

                        <a href="#" id="ch-email" onclick="editProf()">Edit Info</a>
                        <a href="#" id="ch-pass" onclick="editPass()">Change Password</a>
                        <div class="button-log">
                            <form action="" method="post">
                                <button class="ui-logout log" name="logout" type="submit">
                                    <div class="sign">
                                        <svg viewBox="0 0 512 512">
                                            <path
                                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="text">Logout</div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php if (isset($err0r)) { ?>
            <div class="error-container">
                <div class="error-msg">
                    <div class="error-content">
                        <h2>Error!</h2>

                        <a href="profileU.php"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <i class="fa-solid fa-circle-xmark"></i>
                    <p> <?php echo $err0r; ?></p>
                </div>
            </div>

        <?php } ?>

        <?php if (isset($passed)) { ?>
            <div class="success-container">
                <div class="success-msg">
                    <div class="success-content">
                        <h2>Done!</h2>
                        <a href="profileU.php"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <i class="fa-solid fa-circle-check"></i>
                    <p> <?php echo $passed; ?></p>
                </div>
            </div>
        <?php } ?>

        <script src="./js/profile.js"></script>
        <script src="js/thside.js"></script>
</body>

</html>