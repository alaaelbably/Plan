<?php
$pageName = 'plans';

include('connect.php');
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id']; }
$select = "SELECT * FROM `plan`";
$run = mysqli_query($connect, $select);
// $fetch1=mysqli_fetch_assoc($run);
// $id=$fetch1['plan_id'];
// $name=$fetch1['plan_name'];
// $members=$fetch1['members'];
// $price=$fetch1['price'];

// $select="SELECT * FROM `plan` WHERE `plan_id`=2";
// $run=mysqli_query($connect,$select);
// $fetch2=mysqli_fetch_assoc($run);
// $id=$fetch2['plan_id'];
// $name=$fetch2['plan_name'];
// $members=$fetch2['members'];
// $price=$fetch2['price'];

// $select="SELECT * FROM `plan` WHERE `plan_id`=3";
// $run=mysqli_query($connect,$select);
// $fetch3=mysqli_fetch_assoc($run);
// $id=$fetch3['plan_id'];
// $name=$fetch3['plan_name'];
// $members=$fetch3['members'];
// $price=$fetch3['price'];

// $select="SELECT * FROM `plan` WHERE `plan_id`=4";
// $run=mysqli_query($connect,$select);
// $fetch4=mysqli_fetch_assoc($run);
// $id=$fetch4['plan_id'];
// $name=$fetch4['plan_name'];
// $members=$fetch4['members'];
// $price=$fetch4['price'];

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
    <link rel="stylesheet" href="css/theplans.css">
</head>

<body>

    <div class="plans-container">

        <?php 
        
         if(isset($_SESSION['user_id'])){
            include('theside.php');
        }else{

            include('navBar.php');
        }?>
        
        <div class="restPlans" id="mainDiv">

            <div class="all-plans-up">
                <div class="title">
                    <?php if(isset($_SESSION['user_id'])){ ?>
                    <h1>DISCOVER OUR PLANS</h1>
                    <?php }else{} ?>
                </div>
                <div class="slide">
                    <!-- statt first card -->
                    <?php
                    foreach ($run as $key) { ?>
                        <div class="card-common card">
                            <h4><?php echo $key['plan_name'] ?></h4>
                            <p class="member"> <?php echo $key['members'] ?> <i class="fa-solid fa-users"></i></p>
                            <p><?php echo $key['description']; ?></p>
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
                            <p class="price"> <?php echo $key['price'] ?> $</p>
                            <!-- end of bif div -->
                            <?php if(isset($_SESSION['user_id'])){ ?>
                                
                            <a href="pay.php?plan=<?php echo $key['plan_id']; ?>">Choose plan</a>
                            <?php } else{}?>
                            <!-- ##3 -->
                        </div>
                        <!-- end of the first card -->
                    <?php } ?>
                </div>
            </div>
        </div>  
    </div>
    <script src="js/thside.js"></script>

    <?php if(!isset($_SESSION['user_id'])){
        include('footer.php');
    }?>
</body>

</html>