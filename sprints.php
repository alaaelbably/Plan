<?php
$pageName = 'sprints';
include("mail.php");

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}


if (isset($_GET['view'])) {
    $project_id = $_GET['view'];

    $select_project_name = "SELECT * FROM `project` WHERE `project_id` = '$project_id'";
    $run_project_name = mysqli_query($connect, $select_project_name);
    $fetch_project_name = mysqli_fetch_assoc($run_project_name);
    $project_name = $fetch_project_name['project_name'];

    $select_creator = "SELECT `user_id` FROM `project` WHERE `project_id` = '$project_id'";
    $run_project = mysqli_query($connect, $select_creator);
    $project = mysqli_fetch_assoc($run_project);
    $creator_id = $project['user_id'];



    $select_view = "SELECT * FROM `sprint` JOIN `sprint_status` ON `sprint`.`sprint_status_id` = `sprint_status`.`sprint_status_id` WHERE `project_id` = '$project_id'";
    $run = mysqli_query($connect, $select_view);
    $rows = mysqli_num_rows($run);

    if ($rows > 0) {
        $fetch = mysqli_fetch_assoc($run);
        $name = $fetch['sprint_name'];
        $stardate = $fetch['start_date'];
        $enddate = $fetch['end_date'];
        $status = $fetch['sprint_status_id'];
    }

    $select_status = "SELECT * FROM `sprint_status`";
    $runselect = mysqli_query($connect, $select_status);

    $status = "";
    $run_select_search = $run;

    if (isset($_POST['submit'])) {
        $text = $_POST['text'] ?? '';
        $status = $_POST['status'] ?? '';

        $select_search = "SELECT * FROM `sprint` JOIN `sprint_status` ON `sprint`.`sprint_status_id` = `sprint_status`.`sprint_status_id` WHERE `sprint`.`project_id` = '$project_id'";
        if (!empty($text)) {
            $select_search .= " AND (`sprint_name` LIKE '%$text%')";
        }
        if (!empty($status)) {
            $select_search .= " AND `sprint`.`sprint_status_id` = '$status'";
        }

        $run = mysqli_query($connect, $select_search);
        $rows_search = mysqli_num_rows($run);
        if ($rows_search > 0) {
            $fetch = mysqli_fetch_assoc($run);
            $name = $fetch['sprint_name'];
            $stardate = $fetch['start_date'];
            $enddate = $fetch['end_date'];
            $status = $fetch['sprint_status_id'];
        }
    }
    //project member code start 
    $select_member = "SELECT 
COALESCE(`user`.`user_email`, `project members`.`member`) AS email 
FROM `project members` 
LEFT JOIN `user` ON `project members`.`user_id` = `user`.`user_id` 
LEFT JOIN `project` ON `project members`.`project_id` = `project`.`project_id` 
WHERE `project members`.`project_id` = '$project_id'";

    $run_select_member = mysqli_query($connect, $select_member);


}



function is_edate_after_sdate($start_date, $end_date)
{
    $starttimestamp = strtotime($start_date);
    $endtimestamp = strtotime($end_date);
    return $endtimestamp > $starttimestamp;
}

function is_date_not_before_today($date)
{
    $today = date('Y-m-d');
    return strtotime($date) >= strtotime($today);
}

if (isset($_POST['create_sprint'])) {
    $sprint_name = $_POST['name'];
    $start_date = $_POST['startdate'];
    $end_date = $_POST['enddate'];
    $sprint_status = 1;



    if (empty($sprint_name)) {
        $err0r = "Please enter sprint name";
    }
    if (empty($start_date) || empty($end_date)) {
        $err0r = "Please enter dates in the date fields";
    } else {
        if (!is_date_not_before_today($start_date) || !is_date_not_before_today($end_date)) {
            $err0r = "The start date and end date cannot be before today";
        } elseif (is_edate_after_sdate($start_date, $end_date)) {
            $startdate = new DateTime($start_date);
            $enddate = new DateTime($end_date);
            $interval = $startdate->diff($enddate);
            $diff = (int) $interval->format('%a'); // Using '%a' to get the total number of days

            if ($diff >= 7 && $diff <= 30) {
                $insert = "INSERT INTO `sprint` VALUES(NULL, '$sprint_name', '$start_date', '$end_date', '$user_id', '$project_id', $sprint_status)";
                $run_insert = mysqli_query($connect, $insert);
                header("Location: sprints.php?view=$project_id");
            } else {
                $err0r = "The duration cannot be less than 7 days and cannot be more than 30 days";
            }
        } else {
            $err0r = "The end date cannot be before the start date";
        }
    }



}

if (isset($_POST['delete_sprint_confirm'])) {
    $sprint_id_to_delete = $_POST['delete_sprint_id'];

    $delete_query = "DELETE FROM `sprint` WHERE `sprint_id` = '$sprint_id_to_delete'";
    $run_delete = mysqli_query($connect, $delete_query);

    if ($run_delete) {
        header("Location: sprints.php?view=$project_id");
    } else {
        $err0r = "Error deleting sprint.";
    }
}


// ?add member codes

if (isset($_POST['add_member'])) {
    $member_email = $_POST['email'];

    if (empty($member_email)) {
        $err0r = "Please enter member's email";
    } elseif (!filter_var($member_email, FILTER_VALIDATE_EMAIL)) {
        $err0r = "Please enter a valid email address";
    } else {
        $select = "SELECT * FROM `user` WHERE `user_email` = '$member_email'";
        $run_select = mysqli_query($connect, $select);
        $rows = mysqli_num_rows($run_select);

        $join = "SELECT * FROM `user` LEFT join `plan` on `user`.`plan_id`=`plan`.`plan_id` WHERE `user`. `user_id`=$user_id";
        $run_join = mysqli_query($connect, $join);
        $fetch = mysqli_fetch_assoc($run_join);
        // $leader_id=$fetch['user_id'];
        $plan_id = $fetch['plan_id'];
        $member_limit = $fetch['members'];

        $project_members_num = "SELECT * FROM  `project members` WHERE `project_id`= $project_id";
        $run_project_members_num = mysqli_query($connect, $project_members_num);




        $num = mysqli_num_rows($run_project_members_num);

        // echo $num;

        // echo "<br>";

        // echo $num ;


        if ($rows > 0) {
            $fetch = mysqli_fetch_assoc($run_select);
            $user_id = $fetch['user_id'];


            if ($num < $member_limit) {
                $alert = "alert";
                $insert = "INSERT INTO `project members` VALUES(NULL,$user_id,$project_id,'')";
                $run_insert = mysqli_query($connect, $insert);


                $msg = "Hello, <br><br>You have been added to $project_name project.<br><br>Best regards,<br>Your Project Team";
                $mail->setFrom('samashaheenn776@gmail.com', 'plaNest'); // sender mail address, website name
                $mail->addAddress($member_email); // receiver mail address
                $mail->isHTML(true);
                $mail->Subject = 'Get Ready! You have Been Added to a New Project.'; // mail subject
                $mail->Body = $msg; // mail content
                $mail->send();

                // echo "Member added and email sent successfully";

            } else {
                $limit = "limit";
            }

        } else {

            // $_SESSION=

            $join = "SELECT * FROM `user` 
        LEFT join `plan` on `user`.`plan_id`=`plan`.`plan_id`
         WHERE `user`. `user_id`=$user_id";
            $run_join = mysqli_query($connect, $join);
            $fetch = mysqli_fetch_assoc($run_join);


            $plan_id = $fetch['plan_id'];


            $member_limit = $fetch['members'];
            // echo $member_limit;
            $project_members_num = "SELECT * FROM `project members`
            JOIN `project` ON `project members`.`project_id` = `project`.`project_id`
            WHERE `project members`.`project_id`= $project_id";
            $run_project_members_num = mysqli_query($connect, $project_members_num);




            $num = mysqli_num_rows($run_project_members_num);
            // echo $num;


            if ($num < $member_limit) {
                $alert = "alert";

                $insert = "INSERT INTO `project members` VALUES(NULL,NULL,$project_id,'$member_email')";
                $run_insert = mysqli_query($connect, $insert);

            } else {
                $limit = "limit";
            }
        }
    }
}

if (isset($_POST['sort_submit'])) {
    $sort_time = $_POST['sort_time'] ?? '';

    $select_sort = "SELECT * FROM `sprint` JOIN `sprint_status` ON `sprint`.`sprint_status_id` = `sprint_status`.`sprint_status_id` WHERE `project_id` = '$project_id'";

    if (!empty($sort_time)) {
        $select_sort .= " ORDER BY `sprint`.`end_date` $sort_time";
    } else {
    }

    $run = mysqli_query($connect, $select_sort);
}


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
    <link rel="stylesheet" href="css/sprints.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <!-- add sprints -->

    <div class="sprintpop">
        <div class="entries">
            <i onclick="hidesprint()" class="fa-solid fa-xmark"></i>
            <form method="POST">
                <h1>Sprint details</h1>
                <label for="name">Sprint name</label>
                <div class="icon">
                    <input type="text" name="name" id="name" placeholder="Enter Sprint Name">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <label for="start-date">Start Date</label>
                <input type="date" name="startdate" id="start-date" placeholder="Enter Start Date">
                <label for="end-date">End Date</label>
                <input type="date" name="enddate" id="end-date" placeholder="Enter End Date">
                <button class="submit" type="submit" name="create_sprint">Submit</button>
            </form>
        </div>
    </div>

    <!-- end of add sprint -->

    <!-- add project -->

    <div class="add-project">
        <div class="entries-pro">
            <i onclick="hideproject()" class="fa-solid fa-xmark"></i>
            <form>
                <h1>Project details</h1>
                <label for="name">Project name</label>
                <input type="text" name="name" id="name" placeholder="Enter project name">
                <button id="addHide" type="submit" class="popupconfirm">Confirm</button>
            </form>
        </div>
    </div>

    <!-- end of add sprint -->
    <!-- <div class="add-member">
        <div class="entries-pro">
            <i onclick="hidemember()" class="fa-solid fa-xmark"></i>
            <form method="POST">
                <div class="signup-form">
                    <h2>Add Members</h2>
                    <label for="username">Enter Member Email:</label>
                    <input class="USERNAME" type="email" id="username" placeholder="Email" name="email" required>
                </div>
                <div class="btns">
                    <button type="button" class="btn2" onclick="addMember()">Add</button>
                    <button type="button" class="btn2" onclick="done()">Done</button>
                </div>
                <button id="addHide" name="add_member" type="submit" class="popupconfirm">Confirm</button>
            </form>
        </div>
    </div> -->
    <div class="add-member">
        <div class="entries-pro">
            <i onclick="hidemember()" class="fa-solid fa-xmark"></i>
            <form action="" method="POST">
                <div class="signup-form">
                    <h2>Add Members</h2>

                    <label for="username">Enter Member Email:</label>
                    <input class="USERNAME" type="email" id="username" placeholder="Email" name="email">
                </div>
                <div class="btns">


                </div>
                <button name="add_member" id="addHide" type="submit" class="popupconfirm" <?php if (isset($alert)) { ?>
                        onclick="addMember()" <?php } elseif (isset($limit)) { ?> onclick="Limit()" <?php } ?>>Add</button>
            </form>
        </div>
    </div>

    <!-- add project -->



    <!-- delete javascript -->
    <div id="deleteShow" class="deletepopup">
        <div class="deletecard">
            <form method="POST">
                <h2>Delete Sprint?</h2>
                <a class="closebtn" title="cancel">
                    <i class="fa-solid fa-x" id="closeee"></i>
                </a>
                <input type="hidden" name="delete_sprint_id" id="delete_sprint_id">
                <button id="deleteHide" class="popupconfirm" type="submit" name="delete_sprint_confirm">Confirm</button>
            </form>
        </div>
    </div>
    <!-- end delete card -->

    <div class="sprints-container">

        <?php include('theside.php'); ?>


        <div class="restSprints" id="mainDiv">
            <div class="all-inputs">
                <form method="POST">
                    <div class="search">
                        <input placeholder="Search Now..." type="text" name="text" value="<?php if (isset($_POST['submit'])) {
                            echo $text;
                        } ?>">
                        <button class="go-button" type="submit" name="submit">Search</button>
                    </div>
                </form>

                <!-- Button trigger modal -->
                <button type="button" title="view members" class="add-Btn" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Members
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">My Team</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <?php foreach ($run_select_member as $members) { ?>
                                <div class="modal-body">
                                    <span><?php echo $members['email']; ?></span>
                                </div>
                            <?php } ?>
                            <div class="modal-footer">
                                <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="forms">
                    <form action="" method="post" class="filter-section">
                        <select name="status" id="">
                            <option selected disabled value="">Filter By Status</option>
                            <?php foreach ($runselect as $data) { ?>
                                <option value="<?php echo $data['sprint_status_id']
                                    ?>">
                                    <?php
                                    echo $data['sprint_status_name'];
                                    ?>
                                </option>
                            <?php } ?>
                        </select>
                        <button class="go-button" type="submit" name="submit">Filter</button>
                    </form>


                    <form method="POST">
                        <select name="sort_time" id="sort_time_dropdown" class="sort-dropdown">
                            <option disabled selected value="">Sort By Time</option>
                            <option value="asc">Earliest Deadline</option>
                            <option value="desc">Latest Deadline</option>
                        </select>
                        <!-- <button class="btn btn-primary" name="sort_submit" type="submit">Sort</button> -->
                        <button class="go-button" type="submit" name="sort_submit">Sort</button>
                    </form>

                </div>
                <?php


                if ($creator_id == $user_id) {

                    if (!is_null($plan_id) && $plan_id !== '') { ?>

                        <button class="add-Btn" onclick="addmember()"> + Add member</button>
                    <?php } elseif (is_null($plan_id) && $plan_id == '') { ?>
                        <button class="add-Btn" onclick="plan()"> + Add member</button>
                    <?php }
                } else {
                } ?>

                <button class="add-Btn" onclick="addsprint()"> + Add Sprint</button>
            </div>

            <div class="main-left-container">
                <div class="left-board">



                    <?php foreach ($run as $sprint) { ?>
                        <div class="column column-main" id="backlog">
                            <div class="column-header">
                                <p><?php echo $sprint['sprint_name']; ?></p>
                                <a class="deleteBtn" title="Delete Sprint"
                                    onclick="showDeletePopup(<?php echo $sprint['sprint_id']; ?>)">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </div>
                            <a href="" class="eye" title="view all tasks">
                                <a href="task-table.php?viewtask=<?php echo $sprint['sprint_id']; ?>" class="eye"
                                    title="view all tasks">
                                    <i class="fa-solid fa-eye"></i>
                                    <p>Overview</p>
                                </a>
                                <hr class="break">
                                <h4>
                                    <?php
                                    $edate = strtotime($sprint['end_date']);
                                    $now = time();
                                    $difference = $edate - $now;
                                    $days = floor($difference / (60 * 60 * 24));
                                    $hours = floor(($difference % (60 * 60 * 24)) / (60 * 60));
                                    ?>
                                    <?php if ($days < 0 and $hours < 0) { ?>
                                        <?php echo "Time's up"; ?>
                                    <?php } else { ?>
                                        Time left: <?php echo $days; ?> days and <?php echo $hours; ?> hours
                                    <?php } ?>
                                </h4>
                                <hr class="break">
                                <h4>Status: <?php echo $sprint['sprint_status_name']; ?></h4>
                                <hr class="break">
                                <?php
                                $sprint_id = $sprint['sprint_id'];
                                $select_tasks = "SELECT * FROM `task` WHERE `sprint_id` = '$sprint_id'";
                                $run_tasks = mysqli_query($connect, $select_tasks);
                                // $task_count = 0;
                                foreach ($run_tasks as $key) {

                                    // if ($task_count == 3)
                                    //     break;
                                    ?>
                                    <p><a href="taskdetails.php?taskdetails=<?php echo $key['task_id']; ?>" class="task-1"
                                            title="View task details"><?php echo $key['name']; ?></a></p>
                                    <?php
                                    // $task_count++;
                                } ?>
                                <!-- LOL -->
                                
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($err0r)) { ?>
        <div class="error-container">
            <div class="error-msg">
                <div class="error-content">
                    <h2>Error!</h2>
                    <a href="sprints.php?view=<?php echo $project_id; ?>"><i class="fa-solid fa-xmark"></i></a>
                </div>
                <i class="fa-solid fa-circle-xmark"></i>

                <p> <?php echo $err0r; ?></p>
            </div>
        </div>

    <?php } ?>


    <!-- end main sction -->
    <script>
        function showDeletePopup(sprintId) {
            document.getElementById('deleteShow').style.display = 'block';
            document.getElementById('delete_sprint_id').value = sprintId;
        }
        document.getElementById('closeee').addEventListener('click', function () {
            document.getElementById('deleteShow').style.display = 'none';
        });
    </script>
    <script src="js/sprints.js"></script>
    <script>
        function showDeletePopup(sprintId) {
            document.getElementById('deleteShow').style.display = 'block';
            document.getElementById('delete_sprint_id').value = sprintId;
        }
        document.getElementById('closeee').addEventListener('click', function () {
            document.getElementById('deleteShow').style.display = 'none';
        });

        function addMember() {
            alert("Member added successfully.");
            window.location.href = 'sprints.php?view=<?php echo $project_id; ?>';
        }
        function Limit() {
            alert("You have reached your plan members limit.");
            window.location.href = 'sprints.php?view=<?php echo $project_id; ?>';
        }
        function plan() {
            if (confirm("You Don't Have A Plan. Do You Want To Choose A Plan To Add Members.")) {
                window.location.href = 'plans.php';
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            <?php if (isset($alert)) { ?>
                addMember();
            <?php } elseif (isset($limit)) { ?>
                Limit();
            <?php } ?>
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/thside.js"></script>

</body>

</html>