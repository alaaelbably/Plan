<?php
$pageName = 'home';
include 'connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch user information
    $sel = "SELECT * FROM `user` 
            JOIN `avatar` ON `user`.`avatar_id` = `avatar`.`avatar_id` 
            WHERE `user_id` = '$user_id'";
    $run = mysqli_query($connect, $sel);
    $rows = mysqli_num_rows($run);
    if ($rows > 0) {
        $fetch = mysqli_fetch_assoc($run);
        $user_name = $fetch['user_name'];
    }

    // Fetch tasks
    $select_task = "SELECT task.*, 
                            priority.priority_name,
                            status.status_name, 
                            reporter.user_name AS reporter_name, 
                            assignee.user_name AS assignee_name, 
                            reporter_avatar.avatar_image AS reporter_avatar_image,
                            sprint.sprint_name,    
                            project.project_name   
                          FROM `task` 
                          JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                          JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id 
                          JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                          JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                          JOIN `avatar` AS reporter_avatar ON `reporter`.`avatar_id` = reporter_avatar.avatar_id  
                          JOIN `sprint` ON `task`.`sprint_id` = `sprint`.`sprint_id`   
                          JOIN `project` ON `sprint`.`project_id` = `project`.`project_id` 
                          WHERE `assignee_id` = '$user_id'";
    $run_tasks = mysqli_query($connect, $select_task);
    $total_tasks = mysqli_num_rows($run_tasks);


    $select_status = "SELECT * FROM `status`";
    $runselect = mysqli_query($connect, $select_status);

    $status = "";
    $run_select_search = $run_tasks;

    if (isset($_POST['submit'])) {
        $text = $_POST['text'];
        $status = $_POST['status'] ?? '';


        // $select_search = "SELECT task.*, 
        //                     priority.priority_name,
        //                     reporter.user_name AS reporter_name, 
        //                     assignee.user_name AS assignee_name, 
        //                     reporter_avatar.avatar_image AS reporter_avatar_image 
        //                   FROM `task` 
        //                   JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
        //                   JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id 
        //                   JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
        //                   JOIN `avatar` AS reporter_avatar ON `reporter`.`avatar_id` = reporter_avatar.avatar_id  
        //                   WHERE `assignee_id` = '$user_id'";



        $select_search = "SELECT task.*, 
                            priority.priority_name,
                            status.status_name, 
                            reporter.user_name AS reporter_name, 
                            assignee.user_name AS assignee_name, 
                            reporter_avatar.avatar_image AS reporter_avatar_image,
                            sprint.sprint_name,    
                            project.project_name   
                          FROM `task` 
                          JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                          JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id 
                          JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                           JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                          JOIN `avatar` AS reporter_avatar ON `reporter`.`avatar_id` = reporter_avatar.avatar_id  
                          JOIN `sprint` ON `task`.`sprint_id` = `sprint`.`sprint_id`   
                          JOIN `project` ON `sprint`.`project_id` = `project`.`project_id` 
                          WHERE `assignee_id` = '$user_id'";


        if (!empty($text)) {
            $select_search .= " AND (`name` LIKE '%$text%' OR `label` LIKE '%$text%')";
        }
        if (!empty($status)) {
            $select_search .= " AND `task`.`status_id` = '$status'";
        }

        $run_tasks = mysqli_query($connect, $select_search);
    }

    if (isset($_POST['sort_submit'])) {
        $sort_time = $_POST['sort_time'] ?? '';
        $sort_priority = $_POST['sort_priority'] ?? '';

        $select_sort = "SELECT task.*, 
                            priority.priority_name,
                            status.status_name, 
                            reporter.user_name AS reporter_name, 
                            assignee.user_name AS assignee_name, 
                            reporter_avatar.avatar_image AS reporter_avatar_image,
                            sprint.sprint_name,    
                            project.project_name   
                          FROM `task` 
                          JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                          JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id 
                          JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                          JOIN `avatar` AS reporter_avatar ON `reporter`.`avatar_id` = reporter_avatar.avatar_id  
                          JOIN `sprint` ON `task`.`sprint_id` = `sprint`.`sprint_id`   
                            JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                          JOIN `project` ON `sprint`.`project_id` = `project`.`project_id` 
                          WHERE `assignee_id` = '$user_id'";

        if (!empty($sort_time)) {
            $select_sort .= " ORDER BY `task`.`end_date` $sort_time";
        } elseif (!empty($sort_priority)) {
            $select_sort .= " ORDER BY `priority`.`priority_id` $sort_priority";
        }

        $run_tasks = mysqli_query($connect, $select_sort);
    }
}
// include ('sidebar.php');
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/thehome.css">
</head>

<body>

    <div class="home-container">

        <?php include('theside.php'); ?>


        <div class="restHome" id="mainDiv">

            <div class="all-inputs">
                <form class="search-sort" method="POST">
                    <div class="search">
                        <input placeholder="Search Now..." type="text" name="text" value="<?php if (isset($_POST['submit'])) {
                            echo $text;
                        } ?>">
                        <button class="go-button" type="submit" name="submit">Go</button>
                    </div>

                    <div class="forms">
                        <select name="status" id="filter-dropdown">
                            <option selected disabled value="">Filter By Status</option>
                            <?php foreach ($runselect as $data) { ?>
                                <option value="<?php echo $data['status_id'] ?>">
                                    <?php echo $data['status_name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <button class="go-button" type="submit" name="submit">Filter</button>
                    </div>
                </form>

                <div class="sort-strap">
                    <ul class="nav nav-pills " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Sort by time</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Sort by priority </button>
                        </li>
                    </ul>
                    <form method="POST">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <select name="sort_time" id="sort_time_dropdown" class="sort-dropdown">
                                    <option disabled selected value="">Sort By Time</option>
                                    <option value="asc">Nearest Deadline</option>
                                    <option value="desc">Latest Deadline</option>
                                </select>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <select name="sort_priority" id="sort_priority_dropdown" class="sort-dropdown">
                                    <option disabled selected value="">Sort By Priority</option>
                                    <option value="asc"> From High To Low</option>
                                    <option value="desc"> From Low To High</option>
                                </select>
                            </div>
                            <button class="go-button" type="submit" name="sort_submit">Sort</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="my-tasks-all">
                <div class="your-name">
                    <h2>Welcome Back, <?php echo $user_name; ?>!</h2>
                </div>
                <!-- Task List -->
                <?php if ($total_tasks > 0) {
                    foreach ($run_tasks as $key) { ?>
                        <div class="main-div">
                            <div class="task">
                                <p class="task-title">Task Name: <?php echo $key['name']; ?></p>
                                <p class="from-to">Description: <?php echo $key['descreption']; ?></p>
                                <p class="from-to">From: <?php echo $key['reporter_name']; ?></p>
                                <p class="from-to">Priority: <?php echo $key['priority_name']; ?></p>
                                <p class="from-to">Status: <?php echo $key['status_name']; ?></p>
                                <p class="from-to">Project: <?php echo $key['project_name']; ?></p>

                            </div>
                            <div class="time">
                                <p>Deadline: <?php echo $key['end_date']; ?>
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                </p>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo "<h1> There is No Assigned Tasks!</h1>";
                } ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/thside.js"></script>

</body>

</html>