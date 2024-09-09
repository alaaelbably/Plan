<?php
$pageName = 'projects';
include("connect.php");
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

// $sel = "SELECT DISTINCT `project`.`project_id`, `project`.`project_name`
//         FROM `project`
//         LEFT JOIN `project members` 
//         ON `project`.`project_id` = `project members`.`project_id`
//         WHERE `project`.`user_id` = '$user_id' 
//         OR `project members`.`user_id` = '$user_id'";

$sel = "SELECT DISTINCT 
project.project_id, 
project.project_name,
project.user_id as creator_id
FROM project
LEFT JOIN `project members`
ON `project`.`project_id` = `project members`.`project_id`
WHERE `project`.`user_id` = '$user_id' 
OR `project members`.`user_id` = '$user_id'";







$run = mysqli_query($connect, $sel);

// while ($row = mysqli_fetch_assoc($run)) {
//     $creator_id = $row['creator_id'];
// }
$result = "SELECT plan_id FROM user WHERE user_id = $user_id";
$runs = mysqli_query($connect, $result);
$fetch = mysqli_fetch_assoc($runs);
$check = $fetch['plan_id'];

if (isset($_POST['create'])) {
    $create_project_name = $_POST['project_name'];
    if (empty($create_project_name)) {
        $error = "Please enter project name";
    } else {
        $insert = "INSERT INTO `project` VALUES(NULL,'$create_project_name','$user_id')";
        $run_insert = mysqli_query($connect, $insert);
        header("Location:projects.php");
    }

}


// if(mysqli_num_rows($run) > 0){

//     $pro_id=$fetch['project_id'];}





if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $delete = "DELETE FROM `project` WHERE `project_id` = $id";
    $run_delete = mysqli_query($connect, $delete);
    header("Location: projects.php");
}

$run_select_search = null;
$filter = '';




if (isset($_POST['filterr'])) {
    $filter = $_POST['filter'] ?? '';

    $select_filter = "SELECT DISTINCT 
    project.project_id, 
    project.project_name,
    project.user_id as creator_id
    FROM project
    LEFT JOIN `project members`
    ON `project`.`project_id` = `project members`.`project_id`";

    // Add the WHERE clause only if the filter is set properly
    if ($filter === "created") {
        $select_filter .= " WHERE `project`.`user_id` = '$user_id'";
    } elseif ($filter === "assigned") {
        $select_filter .= " WHERE `project members`.`user_id` = '$user_id'";
    }

    // Run the query only if a filter condition was applied
    if ($filter === "created" || $filter === "assigned") {
        $run = mysqli_query($connect, $select_filter);
    }
}

// Check if the search form was submitted
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    // Search
    // $select_search = "SELECT * FROM `project` WHERE (`project_name` LIKE '%$text%') AND `user_id` = $user_id";

    $select_search = "SELECT DISTINCT 
project.project_id, 
project.project_name,
project.user_id as creator_id
FROM project
LEFT JOIN `project members`
ON `project`.`project_id` = `project members`.`project_id`
        WHERE (`project_name` LIKE '%$text%') AND `project`.`user_id` = '$user_id' 
        OR `project members`.`user_id` = '$user_id'";






    $run_select_search = mysqli_query($connect, $select_search);
    $fetchsearch = mysqli_fetch_assoc($run_select_search);

    if (mysqli_num_rows($run_select_search) > 0) {

        $pro_id_search = $fetchsearch['project_id'];
    }
}





// if (isset($_POST['create_sprint'])) {
//     $sprint_name = $_POST['name'];
//     $start_date = $_POST['startdate'];
//     $end_date = $_POST['enddate'];
//     $projectId = $_POST['project_id'];
//     $sprint_status = 1;

//     // Debugging output to check project ID
//     echo "Project ID: $projectId<br>";
//     echo "Sprint Name: $sprint_name<br>";

//     // Check if project_id exists in the project table
//     $check_project_query = "SELECT * FROM project WHERE project_id = '$projectId'";
//     $check_project_result = mysqli_query($connect, $check_project_query);

//     if (mysqli_num_rows($check_project_result) > 0) {
//         // Insert the sprint if project ID is valid
//         $insert = "INSERT INTO sprint VALUES(NULL,'$sprint_name','$start_date','$end_date','$user_id','$projectId','$sprint_status')";
//         $run_insert = mysqli_query($connect, $insert);

//         header("Location:sprints.php?view=$projectId");
//     } else {
//         echo "Error: Project ID $projectId does not exist in the project table.";
//     }
// }



// if (isset($_GET['createsprint'])) {
//     $project_id_sprint = $_GET['createsprint'];
//     if (isset($_POST['create_sprint'])) {
//         $sprint_name = $_POST['name'];
//         $start_date = $_POST['startdate'];
//         $end_date = $_POST['enddate'];
//         $sprint_status = 1;

//         // $select = "SELECT * FROM `sprint` JOIN `project` ON `sprint`.`sprint_id`=`sprint`.`sprint_id`";
//         //                 $run_select = mysqli_query($connect, $select);

//         $insert_sprint = "INSERT INTO `sprint` VALUES(NULL,'$sprint_name','$start_date','$end_date','$user_id','$project_id_sprint',$sprint_status)";

//         $run_insert_sprint = mysqli_query($connect, $insert_sprint);
//         header("Location:viewsprints.php?view=$project_id_sprint");

//     }
// }

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
    <link rel="stylesheet" href="css/projects.css">
</head>

<body>
    <div class="add-project">
        <div class="entries-pro">
            <i onclick="hideproject()" class="fa-solid fa-xmark"></i>
            <form method="post">

                <label class="pro-name" for="name">Project name</label>
                <input type="text" name="project_name" id="name" placeholder="Enter project name">

                <button id="addHide" type="submit" name="create" class="submit">Confirm</button>
            </form>
        </div>

    </div>

    <div id="deleteShow" class="deletepopup">
        <div class="deletecard">
            <a class="closebtn" title="cancel">
                <i class="fa-solid fa-x" id="closeee"></i>
            </a>
            <form method="POST">
                <h2>Delete Project?</h2>
                <input type="hidden" id="delete_project_id" name="delete">
                <button id="deleteHide" class="popupconfirm" type="submit">Confirm</button>

            </form>
        </div>
    </div>

    <div class="projects-container">

        <?php include('theside.php'); ?>
        <div class="restProjects" id="mainDiv">


            <div class="all-inputs">
                <form method="POST">
                    <div class="search">
                        <input type="text" name="text" placeholder="Search..." value="<?php if (isset($_POST['submit'])) {
                            echo $text;
                        } ?>" class="search-input">
                        <button class="go-button" type="submit" name="submit">Search</button>
                    </div>
                    <div class="forms">
                        <select class="filter-disabled" name="filter" id="">
                            <option selected disabled value="">Filter By Creator</option>
                            <option value="created">Created by Me</option>
                            <option value="assigned">Assigned to Me</option>
                        </select>
                        <button class="go-button" type="submit" name="filterr">Filter</button>
                    </div>
                </form>
                <?php if (!is_null($plan_id) && $plan_id !== '') { ?>
                    <div onclick="addproject()" id="backlog">
                        <button class="add-Btn"> + Add Project</button>
                    </div>
                <?php } else { ?>
                    <div onclick="addproject()" id="backlog">
                        <button class="add-Btn"> + Add Project</button>
                    </div>
                <?php } ?>
            </div>

            <div class="main-left-container">
                <div class="left-board">
                    <?php
                    if (isset($_POST['submit']) && $run_select_search) {
                        foreach ($run_select_search as $data) {
                            $creator_id = $data['creator_id'];
                            $_SESSION['creator_id'] = $creator_id;
                            ?>
                            <div class="column column-main" id="backlog">
                                <div class="column-header">
                                    <p><?php echo $data['project_name']; ?></p>
                                    <?php if ($creator_id == $user_id) { ?>
                                        <a class="deleteBtn" title="Delete Project"
                                            onclick="showDeletePopup(<?php echo $data['project_id']; ?>)">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    <?php } else {
                                    } ?>
                                </div>
                                <?php
                                $project_id = $data['project_id'];
                                $select_tasks = "SELECT * FROM `sprint` WHERE `project_id` = '$project_id'";
                                $run_tasks = mysqli_query($connect, $select_tasks);
                                $counter = 0;
                                foreach ($run_tasks as $key) {
                                    if ($counter == 3)
                                        break;
                                    ?>
                                    <p class="task"><?php echo $key['sprint_name']; ?></p>
                                    <?php
                                    $counter++;
                                }
                                ?>
                                <hr class="break">
                                <a title="view all sprints" class="view-all-sprints"
                                    href="sprints.php?view=<?php echo $data['project_id']; ?>">View All</a>
                            </div>
                        <?php }
                    } else {
                        foreach ($run as $data) {
                            $creator_id = $data['creator_id'];
                            ?>
                            <div class="column column-main" id="backlog">
                                <div class="column-header">
                                    <p><?php echo $data['project_name']; ?></p>
                                    <?php if ($creator_id == $user_id) { ?>
                                        <a class="deleteBtn" title="Delete Project"
                                            onclick="showDeletePopup(<?php echo $data['project_id']; ?>)">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    <?php } else {
                                    } ?>
                                </div>
                                <?php
                                $project_id = $data['project_id'];
                                $select_tasks = "SELECT * FROM `sprint` WHERE `project_id` = '$project_id'";
                                $run_tasks = mysqli_query($connect, $select_tasks);
                                $counter = 0;
                                foreach ($run_tasks as $key) {
                                    if ($counter == 3)
                                        break;
                                    ?>
                                    <p class="task"><?php echo $key['sprint_name']; ?></p>
                                    <?php
                                    $counter++;
                                }
                                ?>
                                <hr class="break">
                                <a title="view all sprints" class="view-all-sprints"
                                    href="sprints.php?view=<?php echo $data['project_id']; ?>">View All</a>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>

        <?php if (isset($error)) { ?>
            <div class="error-container">
                <div class="error-msg">
                    <div class="error-content">
                        <h2>Error!</h2>
                        <a href="projects.php"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <i class="fa-solid fa-circle-xmark"></i>
                    
                    <p> <?php echo $error; ?></p>
                </div>
            </div>

        <?php } ?>

        <script>
            function showDeletePopup(projectId) {
                document.getElementById('deleteShow').style.display = 'block';
                document.getElementById('delete_project_id').value = projectId;
            }

            function hideDeletePopup() {
                document.getElementById('deleteShow').style.display = 'none';
            }
        </script>
        <!-- <script src="js/sidebar.js"></script> -->
        <script src="./js/projects.js"></script>
        <script src="js/thside.js"></script>
</body>

</html>