<?php
$pageName = 'task-table';
include 'connect.php';
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
}




if (isset($_GET['viewtask'])) {
  $sprint_id = $_GET['viewtask'];

  $_SESSION['viewtask'] = $sprint_id;
  $select_task = "SELECT task.*, 
                        category.category_name, 
                        priority.priority_name,
                        status.status_name, 
                        reporter.user_name AS reporter_name, 
                        reporter.user_id AS report_id,
                        assignee.user_name AS assignee_name  FROM `task` JOIN `category` ON `task`.`cat_id` = `category`.`category_id`
                        JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                        JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                        JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                        LEFT JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id  WHERE `sprint_id` = '$sprint_id'";
  $run = mysqli_query($connect, $select_task);
  $total_tasks = mysqli_num_rows($run);

  if (isset($_POST['search'])) {
    $text = $_POST['text'];

    $select_search = "SELECT task.*, 
                        category.category_name, 
                        priority.priority_name,
                        status.status_name, 
                        reporter.user_name AS reporter_name, 
                        reporter.user_id AS report_id,
                        assignee.user_name AS assignee_name  FROM `task` JOIN `category` ON `task`.`cat_id` = `category`.`category_id`
                        JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                        JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                        JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                        LEFT JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id  WHERE `sprint_id` = '$sprint_id' AND ((name LIKE '%$text%') OR (label LIKE '%$text%'))";
    $run = mysqli_query($connect, $select_search);
  }

  // Fetch tasks with status "Done"
  $select_status_done = "SELECT * FROM `task` WHERE `sprint_id` = '$sprint_id' AND `status_id` = 3";
  $run_status_done = mysqli_query($connect, $select_status_done);
  $done_count = mysqli_num_rows($run_status_done);


  // Fetch tasks with status "In Progress"
  $select_status_inprogress = "SELECT * FROM `task` WHERE `sprint_id` = '$sprint_id' AND `status_id` = 2";
  $run_status_inprogress = mysqli_query($connect, $select_status_inprogress);
  $inprogress_count = mysqli_num_rows($run_status_inprogress);





  // $selectCount="SELECT * FROM `task` where `sprint_id`=$sprint_id";
  // $runSelect=mysqli_query($connect,$selectCount);


  // Determine the sprint status
  if ($total_tasks == 0) {
    $new_status = 1;
  } elseif ($done_count == $total_tasks) {
    $new_status = 3;
  } elseif ($inprogress_count > 0) {
    $new_status = 2;
  } else {
    $new_status = 1;
  }

  $update_sprint_status = "UPDATE `sprint` SET `sprint_status_id` = '$new_status' WHERE `sprint_id` = '$sprint_id'";
  mysqli_query($connect, $update_sprint_status);


  // if($rows1==$rows2){

  //     $status3=3;
  //     $_SESSION['done']=$status3;



  // }else{
  //     $status3=2;
  //     $_SESSION['done']=$status3;
  // }



  if ($total_tasks > 0) {
    $fetch = mysqli_fetch_assoc($run);
    if (is_array($fetch)) {
      $name = $fetch['name'] ?? 'N/A';
      $description = $fetch['descreption'] ?? 'N/A';
      $stardate = $fetch['start_date'] ?? 'N/A';
      $enddate = $fetch['end_date'] ?? 'N/A';
      $category = $fetch['cat_id'] ?? 'N/A';
      $status = $fetch['status_id'] ?? 'N/A';


    } else {
      // Handle the case where $fetch is not an array
      $name = 'N/A';
      $description = 'N/A';
      $stardate = 'N/A';
      $enddate = 'N/A';
      $category = 'N/A';
      $status = 'N/A';

    }
    // if($status==1){
    //     $sprintstatus="";
    // }
  } else {
    $notasks = "No Tasks Found";
  }


  // $sql_all_1 = "SELECT COUNT(*) = SUM(CASE WHEN status_id = 1 THEN 1 ELSE 0 END) AS all_values_are_1 FROM task WHERE `sprint_id` = '$sprint_id'";
//     $result_all_1 = $connect->query($sql_all_1);
//     $row_all_1 = $result_all_1->fetch_assoc();
//     $all_values_are_1 = $row_all_1['all_values_are_1'];


  //     $sql_all_3 = "SELECT COUNT(*) = SUM(CASE WHEN status_id = 3 THEN 1 ELSE 0 END) AS all_values_are_3 FROM task WHERE `sprint_id` = '$sprint_id'";
//     $result_all_3 = $connect->query($sql_all_3);
//     $row_all_3 = $result_all_3->fetch_assoc();
//     $all_values_are_3 = $row_all_3['all_values_are_3'];


  //     $sql_at_least_one_2 = "SELECT SUM(CASE WHEN status_id = 2 THEN 1 ELSE 0 END) > 0 AS at_least_one_value_is_2 FROM task WHERE `sprint_id` = '$sprint_id'";
//     $result_at_least_one_2 = $connect->query($sql_at_least_one_2);
//     $row_at_least_one_2 = $result_at_least_one_2->fetch_assoc();
//     $at_least_one_value_is_2 = $row_at_least_one_2['at_least_one_value_is_2'];

  //     if ($all_values_are_1) {
//         $status1=1;
//         $_SESSION['todo']=$status1;
//     } elseif ($all_values_are_3) {
//         $status3=3;
//         $_SESSION['done']=$status3;
//     } elseif ($at_least_one_value_is_2) {
//         $status2=2;
//         $_SESSION['inprogress']=$status2;
//     } else {
//         echo "Other";
//     }
//? validations functions

  function is_edate_after_sdate($sdate, $edate)
  {

    $starttimestamp = strtotime($sdate);
    $endtimestamp = strtotime($edate);

    return $endtimestamp > $starttimestamp;
  }

  // $sprint_id=4;


  $select_sprint = "SELECT * FROM `sprint` WHERE `sprint_id`=$sprint_id";
  $run_select_sprint = mysqli_query($connect, $select_sprint);
  $sprint_rows = mysqli_num_rows($run_select_sprint);


  if ($sprint_rows == 1) {

    $fetch = mysqli_fetch_assoc($run_select_sprint);
    $s_start_date = $fetch['start_date'];
    $s_end_date = $fetch['end_date'];


  } else {
  }


  function task_edate_before_sprint_edate($edate, $s_end_date)
  {

    $task_end = strtotime($edate);
    $sprint_end = strtotime($s_end_date);

    return $sprint_end >= $task_end;

  }

  function task_sdate_after_sprint_sdate($sdate, $s_start_date)
  {

    $task_start = strtotime($sdate);
    $sprint_start = strtotime($s_start_date);

    return $sprint_start <= $task_start;
  }






  //? add task codes

  if (isset($_POST["Add"])) {

    $name = $_POST['name'];
    $label = $_POST['label'];
    $description = $_POST['description'];
    $assignee_email = $_POST['assignee'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $category = $_POST['category'];
    $priority = $_POST['priority'];

    //   
//     if(empty($file)){
    $file = $_FILES['file']['name'];

    // }else{}

    $status = 1;
    // $sprint=4;
    // $reporter_id=1;
    $reporter_id = $_SESSION['user_id'];

    if (empty($name)) {
      $err0r = "Please enter the name of the task";
    } elseif (empty($label)) {
      $err0r = "Please enter the label of the task";
    } elseif (empty($assignee_email)) {
      $err0r = "Please enter assignee email";
    } elseif (empty($edate) or empty($sdate)) {
      $err0r = "Please enter dates in dates fields";
    } else {

      $start_date = new datetime($sdate);
      $end_date = new datetime($edate);

      $interval = date_diff($start_date, $end_date);
      $diff = (int) $interval->format('%d');




      $select = "SELECT * FROM  `user` WHERE `user`.`user_email`='$assignee_email'";
      $run = mysqli_query($connect, $select);
      $rows = mysqli_num_rows($run);


      $select_member = "SELECT * FROM `project members` WHERE  `members`='$assignee_email'";
      $run_select_member = mysqli_query($connect, $select);
      $rows_member = mysqli_num_rows($run);

      if ($rows > 0) {

        $fetch = mysqli_fetch_assoc($run);
        $assignee_id = $fetch['user_id'];

        if (!empty($file)) {
          $escaped_file = mysqli_real_escape_string($connect, $file);
        }

        $select2 = "SELECT * FROM `sprint` WHERE `sprint_id`=$sprint_id";
        $run_select2 = mysqli_query($connect, $select2);
        $fetch = mysqli_fetch_assoc($run_select2);
        $project_id = $fetch['project_id'];
        $sprint_sdate = $fetch['start_date'];
        $sprint_edate = $fetch['end_date'];


        $select3 = "SELECT * FROM `project members` WHERE `project_id`=$project_id AND `user_id`=$assignee_id";
        $run_select3 = mysqli_query($connect, $select3);
        $rows3 = mysqli_num_rows($run_select3);


        // $select_sprint="SELECT * FROM `sprint` WHERE `sprint_id`=$sprint_id";
        // $run_sprint=mysqli_query($connect,$select_sprint);
        // $fetchdate=mysqli_fetch_assoc($run_sprint);
        // $sprint_sdate=$fetchdate['start_date'];
        // $sprint_edate=$fetchdate['end_date'];



        if ($rows3 >= 1) {
          if (is_edate_after_sdate($sdate, $edate)) {


            if ($diff <= 30) {

              if (task_edate_before_sprint_edate($edate, $s_end_date)) {

                if (task_sdate_after_sprint_sdate($sdate, $s_start_date)) {

                  if (empty($file)) {

                    $insert = "INSERT INTO `task` VALUES(NULL,'$description', '$name',' $sdate' , '$edate', '$sprint_id' , '$category' , '$priority'
    , $reporter_id , '$assignee_id' ,'$status','',' ','$label')";
                    $run_insert = mysqli_query($connect, $insert);
                    $passed = "Task Added ";
                    // header("location:task-table.php?viewtask=$sprint_id");

                  } else {

                    $insert = "INSERT INTO `task` VALUES(NULL,'$description', '$name',' $sdate' , '$edate ', '$sprint_id' , '$category' , '$priority'
   , $reporter_id , '$assignee_id' ,' $status ','$escaped_file',' ','$label')";
                    //  $insert = "INSERT INTO `task` (description, name, start_date, end_date, sprint_id, cat_id, prio_id, reporter_id, user_id, status_id, file) VALUES ('$description', '$name', '$sdate', '$edate', '$sprint', '$category', '$priority', $reporter_id, '$assignee_id', '$status', '$escaped_file')";


                    move_uploaded_file($_FILES['file']['tmp_name'], "./files/" . $file);
                    $run_insert = mysqli_query($connect, $insert);
                    header("location:task-table.php?viewtask=$sprint_id");


                  }


                } else {
                  $err0r = " Task start date Must be after sprint start date";
                }

              } else {
                $err0r = "Task end date Must be before sprint end date ";
              }

            } else {
              $err0r = "The duration can not be less than 7 days and can not be more than 30 days";
            }

          } else {
            $err0r = "The end date can not be before the start date";
          }

        } else {
          $err0r = "This person is not a member in this project";
        }

      } else {

        // $escaped_file = mysqli_real_escape_string($connect,$file);

        $select2 = "SELECT * FROM `sprint` WhERE `sprint_id`=$sprint_id";
        $run_select2 = mysqli_query($connect, $select2);
        $fetch = mysqli_fetch_assoc($run_select2);
        $project_id = $fetch['project_id'];
        $sprint_sdate = $fetch['start_date'];
        $sprint_edate = $fetch['end_date'];


        $select3 = "SELECT * FROM `project members` WHERE `project_id`='$project_id' AND  `member`='$assignee_email'";
        $run_select3 = mysqli_query($connect, $select3);
        $rows3 = mysqli_num_rows($run_select3);

        // $select_sprint="SELECT * FROM `sprint` WHERE `sprint_id`=$sprint_id";
        // $run_sprint=mysqli_query($connect,$select_sprint);
        // $fetchdate=mysqli_fetch_assoc($run_sprint);
        //


        if ($rows3 >= 1) {
          if (is_edate_after_sdate($sdate, $edate)) {
            if ($diff <= 30) {

              if (task_edate_before_sprint_edate($edate, $s_end_date)) {

                if (task_sdate_after_sprint_sdate($sdate, $s_start_date)) {



                  if (empty($file)) {
                    $insert = "INSERT INTO `task` VALUES(NULL,'$description', '$name',' $sdate' , '$edate ', '$sprint_id' , '$category' , '$priority'
                      , $reporter_id ,NULL,' $status ','','$assignee_email','$label')";
                    $run_insert = mysqli_query($connect, $insert);


                    $passed = "Task Added ";
                    // header("location:task-table.php?viewtask=$sprint_id");

                  } else {

                    $escaped_file = mysqli_real_escape_string($connect, $file);

                    $insert = "INSERT INTO `task` VALUES(NULL,'$description', '$name',' $sdate' , '$edate ', '$sprint_id' , '$category' , '$priority'
               , $reporter_id ,NULL,' $status ','$escaped_file','$assignee_email ','$label')";
                    //  $insert = "INSERT INTO `task` (description, name, start_date, end_date, sprint_id, cat_id, prio_id, reporter_id, user_id, status_id, file) VALUES ('$description', '$name', '$sdate', '$edate', '$sprint', '$category', '$priority', $reporter_id, '$assignee_id', '$status', '$escaped_file')";


                    move_uploaded_file($_FILES['file']['tmp_name'], "./files/" . $file);
                    $run_insert = mysqli_query($connect, $insert);

                    $passed = "Task Added ";
                    // header("location:task-table.php?viewtask=$sprint_id");
                  }

                } else {
                  $err0r = " Task start date have to be after sprint start date";
                }

              } else {
                $err0r = "Task end date have to be before sprint end date ";
              }

            } else {
              $err0r = "The duration can not be less than 7 days and can not be more than 30 days";
            }

          } else {
            $err0r = "The end date can not be before the start date";
          }

        } else {
          $err0r = "This person is not a member in this project";
        }

      }
    }
  }



}

if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $delete = "DELETE FROM `task`
  WHERE `task_id` = $id";
  $run_delete = mysqli_query($connect, $delete);
  header("Location: task-table.php?viewtask=$sprint_id");

}








if (isset($_POST['sort_submit'])) {
  $sort_time = $_POST['sort_time'] ?? '';
  $sort_priority = $_POST['sort_priority'] ?? '';

  $select_sort = "SELECT task.*, 
                        category.category_name, 
                        priority.priority_name,
                        status.status_name, 
                        reporter.user_name AS reporter_name,
                        reporter.user_id AS report_id, 
                        assignee.user_name AS assignee_name  FROM `task` JOIN `category` ON `task`.`cat_id` = `category`.`category_id`  JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                        JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                        JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                        LEFT JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id  WHERE `sprint_id` = '$sprint_id'";

  if (!empty($sort_time)) {
    $select_sort .= " ORDER BY `task`.`end_date` $sort_time";
  } elseif (!empty($sort_priority)) {
    $select_sort .= " ORDER BY `priority`.`priority_id` $sort_priority";
  }

  $run = mysqli_query($connect, $select_sort);
}


$select_status = "SELECT * FROM `status`";
$runselect = mysqli_query($connect, $select_status);


$select_priority = "SELECT * FROM `priority`";
$run_select_priority = mysqli_query($connect, $select_priority);


$select_category = "SELECT * FROM `category`";
$run_select_category = mysqli_query($connect, $select_category);

$status = "";
$priority = "";
$category = "";
$createdbyme = "";

if (isset($_POST['filter'])) {

  $status = $_POST['status'] ?? '';
  $priority = $_POST['priority'] ?? '';
  $category = $_POST['category'] ?? '';
  $createdbyme = $_POST['createdbyme'] ?? '';


  $select_filter = "SELECT task.*, 
                        category.category_name, 
                        priority.priority_name,
                        status.status_name, 
                        reporter.user_name AS reporter_name, 
                        reporter.user_id AS report_id,
                        assignee.user_name AS assignee_name  FROM `task` JOIN `category` ON `task`.`cat_id` = `category`.`category_id`  JOIN `priority` ON `task`.`prio_id` = `priority`.`priority_id`
                        JOIN `status` ON `task`.`status_id` = `status`.`status_id`
                        JOIN `user` AS reporter ON `task`.`reporter_id` = reporter.user_id  
                        LEFT JOIN `user` AS assignee ON `task`.`assignee_id` = assignee.user_id  WHERE `sprint_id` = '$sprint_id'";



  if (!empty($status)) {
    $select_filter .= " AND `task`.`status_id` = '$status'";
  }
  if (!empty($priority)) {
    $select_filter .= " AND `task`.`prio_id` = '$priority'";
  }
  if (!empty($category)) {
    $select_filter .= " AND `task`.`cat_id` = '$category'";
  }
  if (!empty($createdbyme)) {
    $select_filter .= " AND `task`.`reporter_id` = '$user_id'";
  }

  $run = mysqli_query($connect, $select_filter);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/tasks.css">
  <title>plaNest</title>
</head>

<body>

  <div class="semi-body">
    <div class="task-card">
      <form method="POST" enctype="multipart/form-data">
        <i onclick="hidetask()" class="fa-solid fa-xmark"></i>
        <h2>Create New Task</h2>
        <div class="dates">

          <div class="form-group">
            <label for="task-name">Task Name</label>
            <input type="text" id="task-name" name="name" placeholder="Enter Task Name" required>
          </div>
          <div class="form-group">
            <label for="task-lebel">Task Label</label>
            <input type="text" id="task-label" name="label" placeholder="Enter Task Label" required>
          </div>
        </div>
        <div class="form-group">
          <label for="assignee">Assignee Email</label>
          <input type="email" id="assignee" name="assignee" placeholder="Enter Assignee Email" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" name="description" placeholder="Enter Task Description..." required></textarea>
        </div>
        <div class="dates">
          <div class="form-group">
            <label for="task-start">Start Date</label>
            <input type="date" id="task-start" name="sdate" placeholder="Enter Start Date" required>
          </div>
          <div class="form-group">
            <label for="task-end">End Date</label>
            <input type="date" id="task-end" name="edate" placeholder="Enter End Date" required>
          </div>
        </div>
        <div class="dates">
          <div class="form-group">
            <label for="Priority">Priority</label>
            <select id="Priority" name="priority" required>
              <option value="1" class="choice-type">very high </option>
              <option value="2" class="choice-type">high</option>
              <option value="3" class="choice-type">moderate</option>
              <option value="4" class="choice-type">LOW</option>
              <option value="5" class="choice-type">very low</option>
            </select>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category" required>
              <option value="1" class="choice-type">bug </option>
              <option value="2" class="choice-type">task</option>
              <option value="3" class="choice-type">improvement</option>
            </select>
          </div>
        </div>
        <div id="attach">
          <input name="file" type="file">
        </div>



        <button id="addHide" name="Add" type="submit" class="popupconfirm">add</button>
      </form>
    </div>
  </div>

  <div class="table-container">
    <?php include('theside.php'); ?>
    <div class="restTable" id="mainDiv">

      <div class="all-inputs">
        <!-- <form method="POST">
          <div class="search">
            <input type="text" name="text" placeholder="Search Here...!">
            <button class="go-button" type="submit" name="search">Search</button>
          </div>
        </form> -->

        <div class="sort-strap">
          <ul class="nav nav-pills " id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-time-tab" data-bs-toggle="pill" data-bs-target="#pills-time"
                type="button" role="tab" aria-controls="pills-time" aria-selected="true">Sort by time</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-priority-tab" data-bs-toggle="pill" data-bs-target="#pills-priority"
                type="button" role="tab" aria-controls="pills-priority" aria-selected="false">Sort by priority </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-filter1-tab" data-bs-toggle="pill" data-bs-target="#pills-filter1"
                type="button" role="tab" aria-controls="pills-filter1" aria-selected="false">Filter by Status </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-filter2-tab" data-bs-toggle="pill" data-bs-target="#pills-filter2"
                type="button" role="tab" aria-controls="pills-filter2" aria-selected="false">Filter by Priority
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-filter3-tab" data-bs-toggle="pill" data-bs-target="#pills-filter3"
                type="button" role="tab" aria-controls="pills-filter3" aria-selected="false">Filter by Category
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-filter4-tab" data-bs-toggle="pill" data-bs-target="#pills-filter4"
                type="button" role="tab" aria-controls="pills-filter4" aria-selected="false">Filter by Reporter</button>
            </li>
          </ul>
          <div class="search-plus">
            <form method="POST">
              <div class="search">
                <input type="text" name="text" placeholder="Search Here...!">
                <button class="go-button" type="submit" name="search">Search</button>
              </div>
            </form>
            <form method="POST">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-time" role="tabpanel" aria-labelledby="pills-time-tab">
                  <select name="sort_time" id="dropdown" class="sort-dropdown">
                    <option disabled selected value="">Sort By Time</option>
                    <option value="asc">Earliest Deadline</option>
                    <option value="desc">Latest Deadline</option>
                  </select>
                  <button class="go-button" type="submit" name="sort_submit">Sort</button>
                </div>
                <div class="tab-pane fade" id="pills-priority" role="tabpanel" aria-labelledby="pills-priority-tab">
                  <select name="sort_priority" id="sort_priority_dropdown" class="sort-dropdown">
                    <option disabled selected value="">Sort By Priority</option>
                    <option value="asc"> High To Low</option>
                    <option value="desc"> Low To High</option>
                  </select>
                  <button class="go-button" type="submit" name="sort_submit">Sort</button>
                </div>
                <div class="tab-pane fade" id="pills-filter1" role="tabpanel" aria-labelledby="pills-filter1-tab">
                  <select name="status" id="dropdown" class="sort-dropdown">
                    <option selected disabled value="">Filter By Status</option>
                    <?php foreach ($runselect as $data) {
                      ?>
                      <option value="<?php echo $data['status_id'] ?>">
                        <?php echo $data['status_name'] ?>
                      </option>
                    <?php } ?>
                  </select>
                  <button class="go-button" type="submit" name="filter">Filter</button>
                </div>
                <div class="tab-pane fade" id="pills-filter2" role="tabpanel" aria-labelledby="pills-filter2-tab">
                  <select name="priority" id="dropdown" class="sort-dropdown">
                    <option selected disabled value="">Filter By Priority</option>
                    <?php foreach ($run_select_priority as $data) { ?>
                      <option value="<?php echo $data['priority_id'] ?>">
                        <?php echo $data['priority_name'] ?>
                      </option>
                    <?php } ?>
                  </select>
                  <button class="go-button" type="submit" name="filter">Filter</button>
                </div>
                <div class="tab-pane fade" id="pills-filter3" role="tabpanel" aria-labelledby="pills-filter3-tab">
                  <select name="category" id="dropdown" class="sort-dropdown">
                    <option selected disabled value="">Filter By Category</option>
                    <?php foreach ($run_select_category as $data) { ?>
                      <option value="<?php echo $data['category_id'] ?>">
                        <?php echo $data['category_name'] ?>
                      </option>
                    <?php } ?>
                  </select>
                  <button class="go-button" type="submit" name="filter">Filter</button>
                </div>
                <div class="tab-pane fade" id="pills-filter4" role="tabpanel" aria-labelledby="pills-filter4-tab">
                  <select name="createdbyme" id="dropdown" class="sort-dropdown">
                    <option selected disabled value="">Filter By</option>
                    <option value="<?php echo $user_id; ?>">Created by Me</option>
                  </select>
                  <button class="go-button" type="submit" name="filter">Filter</button>
                </div>
              </div>
            </form>





          </div>
        </div>
      </div>







      <!-- start of first section -->
      <div class="first_section">
        <!-- start of card -->
        <div class="add_task">
          <h2>Total tasks</h2>
          <p><?php echo $total_tasks; ?></p>
          <button class="add_task_btn" onclick="addtask()">
            <a href="#"> <i class="fa-solid fa-plus"></i> Add task</a>
          </button>
        </div>
        <!-- end of card -->
        <!-- start of card -->
        <div class="count">
          <!-- start of card -->
          <div class="done">
            <i class="fa-solid fa-check"></i>
            <h2>Done</h2>
            <p><?php echo $done_count; ?></p>
          </div>
          <!-- end of card -->
          <!-- start of card -->
          <div class="in_progress">
            <i class="fa-solid fa-hourglass-half"></i>
            <h2>In progress</h2>
            <p><?php echo $inprogress_count; ?></p>

          </div>
          <!-- end of card -->
        </div>
        <!-- end of card -->
      </div>
      <!-- end of first section -->

      <!-- title -->
      <h2 class="title">Tasks:</h2>
      <h2 class="title"><?php if (isset($notasks)) {
        echo $notasks;
      } else {
      } ?></h2>

      <!-- start of first table -->

      <?php if ($total_tasks > 0) {
        foreach ($run as $key) {

          $report_id = $key['report_id'] ?? '';
          // Set the status icon based on status_id
          if (($key['status_id'] ?? '') == 1) {
            $status_icon = 'fa-book'; // To Do
          } elseif (($key['status_id'] ?? '') == 2) {
            $status_icon = 'fa-hourglass-half'; // In Progress
          } elseif (($key['status_id'] ?? '') == 3) {
            $status_icon = 'fa-check'; // Done
          }

          // Set the priority class and icon based on prio_id
          if (($key['prio_id'] ?? '') == '1') {
            $priority_class = 'up';
            $priority_icon = 'fa-circle-up'; // Very High
          } elseif (($key['prio_id'] ?? '') == '2') {
            $priority_class = 'high';
            $priority_icon = 'fa-circle-up'; // High
          } elseif (($key['prio_id'] ?? '') == '3') {
            $priority_class = 'moderate'; // Moderate
            $priority_icon = ''; // No icon for Moderate
          } elseif (($key['prio_id'] ?? '') == '4') {
            $priority_class = 'low';
            $priority_icon = 'fa-circle-down'; // Low
          } elseif (($key['prio_id'] ?? '') == '5') {
            $priority_class = 'verylow';
            $priority_icon = 'fa-circle-down'; // Very Low
          }

          // Generate a unique ID for each accordion item
          $accordion_id = 'accordion-' . ($key['task_id'] ?? '');
          $collapse_id = 'collapse-' . ($key['task_id'] ?? '');
          ?>
          <div class="container">
            <div class="table_1">
              <table class="table">
                <thead>
                  <?php if ($total_tasks > 0) { ?>
                    <tr>
                      <th scope="col">Task Name</th>
                      <th scope="col">Label</th>
                      <th scope="col">Category</th>
                      <th scope="col">Status</th>
                      <th scope="col">Priority</th>
                      <th scope="col">Deadline</th>
                      <th scope="col">Reporter</th>
                      <th scope="col">Assignee</th>
                      <th>
                        <?php if ($report_id == $user_id) { ?>
                          <a class="deleteBtn" title="Delete Task" onclick="showDeletePopup(<?php echo $key['task_id']; ?>)">
                            <button class="button">

                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 69 14" class="svgIcon bin-top">
                                <g clip-path="url(#clip0_35_24)">
                                  <path fill="black"
                                    d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z">
                                  </path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_35_24">
                                    <rect fill="white" height="14" width="69"></rect>
                                  </clipPath>
                                </defs>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 69 57"
                                class="svgIcon bin-bottom">
                                <g clip-path="url(#clip0_35_22)">
                                  <path fill="black"
                                    d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z">
                                  </path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_35_22">
                                    <rect fill="white" height="57" width="69"></rect>
                                  </clipPath>
                                </defs>
                              </svg>
                            </button>
                          </a>
                        <?php } else {
                        } ?>
                      </th>
                    </tr>
                  <?php } else {
                    echo "<h1>There are No Tasks</h1>";
                  } ?>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $key['name'] ?? ''; ?></td>
                    <td><?php echo $key['label'] ?? ''; ?></td>
                    <td><?php echo $key['category_name'] ?? ''; ?></td>
                    <td><i class="fa-solid <?php echo $status_icon; ?>"></i> <?php echo $key['status_name'] ?? ''; ?></td>
                    <td>
                      <?php if (($priority_class ?? '') === 'moderate') { ?>
                        <div class="moderate"><?php echo $key['priority_name']; ?></div>
                      <?php } else { ?>
                        <div class="<?php echo $priority_class; ?>">
                          <i class="fa-regular <?php echo $priority_icon; ?>"></i>
                          <?php echo $key['priority_name'] ?? ''; ?>
                        </div>
                      <?php } ?>
                    </td>
                    <?php
                    // Calculate the time difference between now and the deadline
                    $edate = strtotime($key['end_date'] ?? '');
                    $now = time();
                    $difference = $edate - $now;
                    $days = floor($difference / (60 * 60 * 24));
                    $hours = floor(($difference % (60 * 60 * 24)) / (60 * 60));
                    ?>
                    <?php if ($days < 0 && $hours < 0) { ?>
                      <td class="deadline"> <?php echo "time is up"; ?> </td>
                    <?php } else { ?>
                      <td class="deadline"> Time left: <?php echo $days; ?> days and <?php echo $hours; ?> hours</td>
                    <?php } ?>
                    <td><?php echo $key['reporter_name'] ?? ''; ?></td>
                    <td>
                      <?php if (!is_null($key['assignee_name'])) {
                        echo $key['assignee_name'] ?? '';
                      } else {
                        echo $key['assignee_email'] ?? '';
                      } ?>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="accordion" id="<?php echo $accordion_id; ?>">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="false"
                    aria-controls="<?php echo $collapse_id; ?>">
                    <h5>Task description</h5>
                  </button>
                </h2>
                <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse"
                  data-bs-parent="#<?php echo $accordion_id; ?>">
                  <div class="accordion-body">
                    <?php echo $key['descreption']; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }
      } ?>
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


  <?php if (isset($err0r)) { ?>
    <div class="error-container">
      <div class="error-msg">
        <div class="error-content">
          <h2>Error!</h2>
          <a href="task-table.php?viewtask=<?php echo $sprint_id; ?>"><i class="fa-solid fa-xmark"></i></a>
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
          <a href="task-table.php?viewtask=<?php echo $sprint_id; ?>"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <i class="fa-solid fa-circle-check"></i>
        <p> <?php echo $passed; ?></p>
      </div>
    </div>
  <?php } ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/thside.js"></script>



  <script>
    function showDeletePopup(taskId) {
      document.getElementById('deleteShow').style.display = 'flex';
      document.getElementById('delete_project_id').value = taskId;
    }

    function hideDeletePopup() {
      document.getElementById('deleteShow').style.display = 'none';
    }
  </script>
</body>

</html>