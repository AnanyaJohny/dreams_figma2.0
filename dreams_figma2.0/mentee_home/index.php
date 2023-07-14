<?php
  session_start();
  if(isset($_SESSION['email']) && isset($_SESSION['name'])){
    $name=$_SESSION['name'];
  }
  else{
    header("Location: ../login/index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="inde.css" />
  <link rel="stylesheet" href="badge.css" />
 
</head>

<body>
  <div class="header pd-0">
  <img src="Dreams B.png" width="130px" height="130px" />
    <h1 class="title ps-3 pt-4">DREAMS</h1>
    <h2 class="logout"><button type="button" onclick = "location.href ='http://localhost/dreams_figma2.0/dreams_figma2.0/mentee_home/logout.php';">Logout</button></h2>
  </div>
<script>
  
</script>
  <div class="row">
    <div class="head px-5 mx-5 "></div>
    <div class="col-2"></div>
    <div class="col">
    <div class="blah">
        <div class="badge red">
            <p class="title" style="color:black;"><?php echo $name; ?><br>Desire group christ school</p>
        </div>
        <div class="structure">
          <div class="badge-two">
            <h3>Year 1</h3> 
          </div>
        </div> 
    </div>

      <div class="row py-3">
        <a href="../mentee_course_materials/index.php" class="items">
       
          <img class="images" src="icons/online-learning.png" />
          <h2 class="it-text">View Course</h2>
        </a>
      </div>
      <div class="row py-3">
        <a href="../chat2/index.php" class="items">
          <img class="images" src="icons/chat.png" alt="" />
          <h2 class="it-text">Chat with Mentor</h2>
        </a>
      </div>
      <div class="row py-3">
        <a href="../mentee_task/tasks_page.php" class="items">
          <img class="images" src="icons/to-do-list.png" alt="" />
          <h2 class="it-text">Tasks</h2>
        </a>
      </div>
      <div class="row py-3">
        <a href="../mentee_notes/mentee_notes_front/index.php" class="items">
          <img class="images" src="icons/notes.png" alt="" />
          <h2 class="it-text">Notes</h2>
        </a>
      </div>
      <div class="row py-3">
        <a href="../mentee_accolades/accolades.html" class="items">
          <img class="images" src="icons/certificate.png" alt="" />
          <h2 class="it-text">Accolades</h2>
        </a>
      </div>
    </div>
    <div class="col">
    <div class="announcement">
            <svg width="53" height="57" viewBox="0 0 53 57" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="53" height="57" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_105_23" transform="matrix(0.0025 0 0 0.00232456 0 0.174561)"/>
                </pattern>
                </defs>
                </svg>
            <h4>Announcements</h4>
                <?php include('./get_announcement.php') ?>
        </div>

    </div>
</body>

</html><!--dbhsdu--> 
