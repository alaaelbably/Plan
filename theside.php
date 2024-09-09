<?php
include('connect.php');
if(isset($_SESSION['user_id'])){
    
$defaultAvatar = 'default.jpg';
$maleAvatar = 'male.png';
$femaleAvatar = 'female.png';

$avatar = $defaultAvatar;

if (isset($_SESSION['gender'])) {
    if ($_SESSION['gender'] == 'man') {
        $avatar = $maleAvatar;
    } elseif ($_SESSION['gender'] == 'woman') {
        $avatar = $femaleAvatar;
    }
}
$user_id = $_SESSION['user_id'];
$select = "SELECT * FROM `user`JOIN `avatar` ON `user`.`avatar_id`=`avatar`.`avatar_id` WHERE `user_id`='$user_id'";
$run_select = mysqli_query($connect, $select);

$select_plan = "SELECT plan_id FROM user WHERE user_id = $user_id";
$result = mysqli_query($connect, $select_plan);
$fetch_plan = mysqli_fetch_assoc($result);
$plan_id = $fetch_plan['plan_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plaNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/theside.css">

</head>

<body>
    <div class="side-nav-all">
        <div class="side-nav-main">
            <i class="fa-bars fa-solid btn-side btn-sm"></i>
        </div>

        <div class="my-side-nav" id="sideNav">

            <div class="top">
                <div class="side-acc">
                    <?php foreach ($run_select as $data) { ?>
                        <div class="user-img"><img src="<?php echo 'img/' . $data['avatar_image']; ?>"
                                alt="<?php echo $data['avatar_image']; ?>"></div>
                        <p> <?php echo $data['user_name']; ?> </p>
                    <?php } ?>
                </div>
                <i class="fa-bars fa-solid btn-side btn-lg" id="toggleBtn"></i>

            </div>
            <hr class="break">
            <div class="middle">

                <div class="side-icons">
                    <a href="home.php" class="items">
                        <i class="fa-home fa-solid"></i>
                        <p>Home</p>
                        <!-- <p class="hover-items">Home</p> -->
                    </a>
                </div>
                <div class="side-icons">
                    <a href="profileU.php" class="items">
                        <i class="fa-solid fa-user"></i>
                        <p>Profile</p>
                        <!-- <p class="hover-items">Home</p> -->
                    </a>
                </div>

                <div class="side-icons">
                    <a href="projects.php" class="items">
                        <i class="fa-diagram-project fa-solid"></i>
                        <p>Projects</p>
                        <!-- <p class="hover-items">Projects</p> -->
                    </a>
                    <?php if ($pageName == 'projects' && !is_null($plan_id) && $plan_id !== ''): ?>
                        <button onclick="addproject()"><i class="fa-solid fa-plus"></i></button>
                    <?php endif; ?>
                </div>
                <?php if (is_null($plan_id) && $plan_id == ''): ?>
                    <div class="side-icons ">
                        <a href="plans.php" class="items">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            <p>Pricing</p>
                            <!-- <p class="hover-items">Pricing</p> -->
                        </a>
                    </div>
                <?php endif; ?>
                <div class="side-icons ">
               

                    <input type="checkbox" class="theme-checkbox" id="theme-toggle">
                    <p>Change Theme</p>
               
                </div>
            </div>
            <hr class="break">
            <div class="logout">
                <?php if (!is_null($plan_id) && $plan_id !== ''): ?>
                    <div class="logout-cont">
                        <a href="upgrade.php">
                            <i class="fa-solid fa-circle-arrow-up"></i>
                            <p>Upgrade</p>
                            <!-- <p class="hover-items">Upgrade</p> -->
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        
    </div>

</body>

</html>
<?php } ?>