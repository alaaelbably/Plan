<?php
$pageName = 'upgrade';
include "connect.php";

$user_id = $_SESSION['user_id'];

// Fetch the old plan details for the current user
$select_user = "SELECT * FROM `user` WHERE `user_id`=$user_id";
$run_user = mysqli_query($connect, $select_user);
$fetch_user = mysqli_fetch_assoc($run_user);
$oldplan_id = $fetch_user['plan_id'];

$select_old_plan = "SELECT * FROM `plan` WHERE `plan_id`=$oldplan_id";
$run_old_plan = mysqli_query($connect, $select_old_plan);
$fetch_old_plan = mysqli_fetch_assoc($run_old_plan);

$oldprice = $fetch_old_plan['price'];

// echo $oldprice;
// Fetch details for plan 1
$select1 = "SELECT * FROM `plan` WHERE `plan_id` > $oldplan_id";
$run1 = mysqli_query($connect, $select1);
$row = mysqli_num_rows($run1);

if ($row > 0) {


    $fetch1 = mysqli_fetch_assoc($run1);
    $totalcost1 = $fetch1['price'] - $oldprice;
}

// // Fetch details for plan 2
// $select2 = "SELECT * FROM `plan` WHERE `plan_id`=2";
// $run2 = mysqli_query($connect, $select2);
// $fetch2 = mysqli_fetch_assoc($run2);
// $totalcost2 = $fetch2['price'] - $oldprice;

// // Fetch details for plan 3
// $select3 = "SELECT * FROM `plan` WHERE `plan_id`=3";
// $run3 = mysqli_query($connect, $select3);
// $fetch3 = mysqli_fetch_assoc($run3);
// $totalcost3 = $fetch3['price'] - $oldprice;

// // Fetch details for plan 4
// $select4 = "SELECT * FROM `plan` WHERE `plan_id`=4";
// $run4 = mysqli_query($connect, $select4);
// $fetch4 = mysqli_fetch_assoc($run4);
// $totalcost4 = $fetch4['price'] - $oldprice;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plaNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/test.css">
</head>

<body>

    <div class="upgrade-container">

        <?php include('theside.php'); ?>

        <div class="restUpgrade" id="mainDiv">
            <div class="all-plans-up">
                <?php if ($oldplan_id == 4) { ?>
                    <div class="title">
                        <h1>No Plans To Upgrade</h1>
                    </div>
                <?php } else { ?>

                    <div class="title">
                        <h1>DISCOVER OUR PLANS</h1>
                    </div>
                <?php } ?>
                <div class="slide">
                    <!-- Start first card -->
                    <?php
                    foreach ($run1 as $key) { ?>
                        <div class="card-common card">
                            <h4><?php echo $key['plan_name'] ?></h4>
                            <p class="member"> <?php echo $key['members'] ?> <i class="fa-solid fa-users"></i></p>
                            <p><?php echo $key['description']; ?>
                            </p>
                            <!-- start big div -->
                            <!-- <div class="feature">
        <div class="icon1">
            <i class="fa-solid fa-check"></i>
            <p class="describe">Acecess to basic features</p>
        </div> -->
                            <!--  -->
                            <!-- <div class="icon1">
            <i class="fa-solid fa-check"></i>
            <p class="describe">team collaboration</p>
        </div> -->
                            <!--  -->
                            <!-- <div class="icon1">
            <i class="fa-solid fa-check"></i>
            <p class="describe">limited advanced feature</p>
        </div>
    </div> -->
                            <p class="price"> <?php echo $key['price'] - $oldprice ?> $</p>
                            <!-- end of bif div -->
                            <a href="pay.php?plan=<?php echo $key['plan_id']; ?>">Choose plan</a>
                            <!-- ##3 -->
                        </div>
                        <!-- end of the first card -->
                    <?php } ?>


                    <!-- End fourth card -->
                </div>
            </div>
        </div>
    </div>
    <script src="test.js"></script>
    <script src="js/thside.js"></script>
</body>

</html>