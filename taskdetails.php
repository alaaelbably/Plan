<?php
$pageName = 'taskdetails';
include 'connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $select_user = "SELECT `user_name` FROM `user` WHERE `user_id` = '$user_id'";
    $run_user = mysqli_query($connect, $select_user);
    $fet = mysqli_fetch_assoc($run_user);
    $user_name = $fet['user_name'];

}

if (isset($_GET['taskdetails'])) {
    $task_id = $_GET['taskdetails'];


    if (isset($_POST['status'])) {
        $new_status_id = $_POST['status'];
        $update_status_query = "UPDATE `task` SET `status_id` = '$new_status_id' WHERE `task_id` = '$task_id'";
        $update_status_run = mysqli_query($connect, $update_status_query);

        if ($update_status_run) {
            $sprint_id = $_SESSION['viewtask'];
            header("Location: task-table.php?viewtask=$sprint_id");
            exit();
        }
    }




    $select_task = "SELECT task.*, 
                        category.category_name, 
                        priority.priority_name,
                        status.status_name, 
                        reporter.user_name AS reporter_name, 
                        reporter.user_id AS report_id,
                        assignee.user_name AS assignee_name  
                    FROM `task` 
                    JOIN `category` ON `task`.`cat_id` = `category`.`category_id`  
                    JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                    JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                    JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                    LEFT JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id  
                    WHERE `task_id` = '$task_id'";
    $run = mysqli_query($connect, $select_task);

    if ($run) {
        $fetch = mysqli_fetch_assoc($run);
        $name = $fetch['name'];
        $description = $fetch['descreption'];
        $start_date = $fetch['start_date'];
        $end_date = $fetch['end_date'];
        $category = $fetch['category_name'];
        $priority = $fetch['priority_name'];
        $status = $fetch['status_name'];
        $reporter = $fetch['reporter_name'];
        $assignee = $fetch['assignee_name'];
        $assignee_email = $fetch['assignee_email'];
        $file = $fetch['file'];
        $label = $fetch['label'];
    }
}



if (isset($_GET['taskdetails'])) {
    $task_id = $_GET['taskdetails'];
    $runcomment = "";


    $select = "SELECT * FROM `comment` WHERE `task_id` = $task_id ";
    $runComment = mysqli_query($connect, $select);


    if (isset($_POST['add'])) {

        // $id=$_GET['task_id'];
        $comment = $_POST['comment'];
        $insert_com = "INSERT INTO `comment` (`comment_id`, `user_id`, `task_id`, `comment`, `user_name`) VALUES (NULL, '$user_id', '$task_id', '$comment', '$user_name')";
        $runInsCom = mysqli_query($connect, $insert_com);

        header("Location: taskdetails.php?taskdetails=$task_id");


    }




    if (isset($_GET['delete'])) {
        $ID = $_GET['delete'];
        $delete = "DELETE FROM `comment` WHERE `comment_id` = $ID";
        $rundelete = mysqli_query($connect, $delete);

        header("Location: taskdetails.php?taskdetails=$task_id");

    }
    $comment = '';
    $edit = false;
    if (isset($_GET['edit'])) {
        $edit = true;
        $id = $_GET["edit"];
        $select = "SELECT * FROM `comment` WHERE `comment_id`=$id ";
        $run_select = mysqli_query($connect, $select);
        $fetchs = mysqli_fetch_assoc($run_select);
        $comment = $fetchs['comment'];
        // header("location:comments.php");
        if (isset($_POST['update'])) {

            $newcomment = $_POST['comment'];
            $update = "UPDATE `comment` SET `comment` ='$newcomment' WHERE `comment_id`=$id";
            $run_update = mysqli_query($connect, $update);
            header("Location: taskdetails.php?taskdetails=$task_id");


        }


    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/task details.css">
</head>

<body>

    <!-- add members popup -->
    <div id="main-member">
        <div class="member-cont">
            <!-- Forms -->
            <div class="member-signup-form">
                <h2>Task status</h2>
                <i onclick="hideMembers()" class="fa-solid fa-xmark"></i>
                <form action="taskdetails.php?taskdetails=<?php echo $task_id; ?>" method="POST">
                    <div class="member-form-group ">
                        <div class="label-div">
                            <label for="done">done</label>
                        </div>
                        <div class="icon">
                            <input class="USERNAME" type="radio" id="done" name="status" value="3" required>
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="label-div">
                            <label for="inprogress">in progress</label>
                        </div>
                        <div class="icon">
                            <input class="USERNAME" type="radio" id="inprogress" name="status" value="2" required>
                            <i class="fa-solid fa-bars-progress"></i>
                        </div>

                        <div class="btns">

                            <button class="btn2" type="submit">Done</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- add members popup end -->

    <div class="details-container">
        <?php include('theside.php'); ?>


        <div class="restDetails" id="mainDiv">
            <div class="signup-form">
                <div class="headertask">
                    <h1>Task Details</h1>
                    <!-- <a href="" class="edit" title="Edit Status"> -->
                    <i onclick="showMembers()" class="fa-regular fa-pen-to-square edit"></i>
                    <!-- </a> -->
                </div>
                <div class="form-group ">
                    <table>
                        <tr>
                            <td>
                                <h3>Task Name:</h3>
                            </td>
                            <td>
                                <p><?php echo $name; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Description:</h3>
                            </td>
                            <td>
                                <p><?php echo $description; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Label:</h3>
                            </td>
                            <td>
                                <p><?php echo $label; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Category:</h3>
                            </td>
                            <td>
                                <p><?php echo $category; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Status:</h3>
                            </td>
                            <td>
                                <p><?php echo $status; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Periority:</h3>
                            </td>
                            <td>
                                <p><?php echo $priority; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Start Date:</h3>
                            </td>
                            <td>
                                <p><?php echo $start_date; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Deadline:</h3>
                            </td>
                            <td>
                                <p><?php echo $end_date; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Reporter:</h3>
                            </td>
                            <td>
                                <p><?php echo $reporter; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Assignee:</h3>
                            </td>
                            <td>
                                <p> <?php if (!is_null($fetch['assignee_name'])) {
                                    echo $assignee;
                                } else {

                                    echo $assignee_email;
                                }
                                ?></p>
                            </td>
                        </tr>
                    </table>
                </div>





                <form method="post" class="my-comment">
                    <input class="textarea" type="text" name="comment" id="comment" value="<?php echo $comment ?>"
                        placeholder="Enter Your Comment...">
                    <?php if (!$edit) { ?>
                        <div class="buttons">
                            <button class="add-comment" type="submit" name="add">Send</button>
                        </div>
                    <?php } else { ?>
                        <div class="buttons">
                            <button class="add-comment" type="submit" name="update">Update</button>
                        </div>
                    <?php } ?>
                </form>

                <!-- THE COMMENTS SECTION (OTHERS) -->
                <div class="comment-section">

                    <div class="comment">
                        <?php if (!empty($file)) {
                            $file_path = 'files/' . $file;
                            $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                            $file_name = pathinfo($file_path, PATHINFO_BASENAME); // Get the file name with extension
                        
                            if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])) { ?>
                                <div class="comment-body">
                                    <img src="<?php echo $file_path; ?>" alt="Task Image">
                                </div>
                            <?php } elseif (in_array($file_extension, ['mp4', 'avi', 'mov'])) { ?>
                                <div class="comment-body">
                                    <video width='800' src="<?php echo $file_path; ?>"
                                        type="video/<?php echo $file_extension; ?>" controls>
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            <?php } elseif ($file_extension === 'pdf') { ?>
                                <div class="comment-body">
                                    <a href="<?php echo $file_path; ?>" target="_blank">View PDF</a><br>
                                    <p><?php echo $file_name; ?></p> <!-- Display file name -->
                                </div>
                            <?php } elseif (in_array($file_extension, ['doc', 'docx'])) { ?>
                                <div class="comment-body">
                                    <a href="<?php echo $file_path; ?>" download>Download Word Document</a><br>
                                    <p><?php echo $file_name; ?></p> <!-- Display file name -->
                                </div>
                            <?php } elseif (in_array($file_extension, ['xls', 'xlsx'])) { ?>
                                <div class="comment-body">
                                    <a href="<?php echo $file_path; ?>" download>Download Excel Spreadsheet</a><br>
                                    <p><?php echo $file_name; ?></p> <!-- Display file name -->
                                </div>
                            <?php } else { ?>
                                <div class="comment-body">
                                    <a href="<?php echo $file_path; ?>" download>Download File</a><br>
                                    <p><?php echo $file_name; ?></p> <!-- Display file name -->
                                </div>
                            <?php }
                        } ?>

                    </div>
                    <?php foreach ($runComment as $data) { ?>
                        <div class="comment">
                            <div class="comment-body">
                                <p><?php echo $data['user_name'] . ': ' . $data['comment']; ?></p>


                            </div>


                            <div class="date-buttons">
                                <p>


                                <p><?php echo date('d/m/Y H:i', strtotime($data['created_at'])); ?></p>



                                <a href="taskdetails.php?taskdetails=<?php echo $task_id; ?>&delete=<?php echo $data['comment_id']; ?>"
                                    class="delete">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                                <a href="taskdetails.php?taskdetails=<?php echo $task_id; ?>&edit=<?php echo $data['comment_id']; ?>"
                                    class="edit">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/details.js"></script>
    <script src="js/thside.js"></script>
</body>

</html>