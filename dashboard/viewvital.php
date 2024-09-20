<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <?php require_once('master/title.php');?>
    
<link rel="icon" href="./../icon/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>



<body>
    <?php // include './../nav.php';?>
    <?php include 'master/navbar.php';?>
    <div class="main-wrapper">

        <!-- navbar -->
        

        <!-- sidebar -->
<?php include 'master/sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="content">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<center> 

<?php


$conn = mysqli_connect("localhost", "root", "", "mankind") or die("DataBase Error");

$sql = "SELECT * FROM `vitals` WHERE `userrid`='". $_SESSION['UserID']."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($rowss = mysqli_fetch_assoc($result)) {
        $v_id = $rowss['v_id'];
        $usserid = $rowss['userrid'];
        $wieght = $rowss['wieght'];
        $gluecose = $rowss['gluecose'];
        $bp = $rowss['bp'];
        $height = $rowss['height'];
        $pules = $rowss['pules'];
        $temp = $rowss['temp'];
        $age = $rowss['age'];
        $daibetes = $rowss['daibetes'];
      
    }
}



?>

<h1>Vitals Info</h1>
<div class="container"> 
  
  <div class="row">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Appointment ID</th>
          <th scope="col"><?php echo " $v_id" ?></th>
        </tr>
      </thead>
      <tbody>
        
          <td>UserID</td>
          <td><?php echo  $usserid ?></td>
         </tr>
        <tr>
          <td>Wieght</td>
          <td><?php echo " $wieght" ?></td>
        </tr>
       
        <tr>
          <td>Gluecose</td>
          <td><?php echo " $gluecose" ?></td>
        </tr>
        <tr>
          <td>BP</td>
          <td><?php echo " $bp" ?></td>
        </tr>
        <tr>
          <td>Height</td>
          <td><?php echo " $height" ?></td>
        </tr>
        <tr>
          <td>Pulse</td>
          <td><?php echo " $pules" ?></td>
        </tr>
        <tr>
          <td>Temp</td>
          <td><?php echo " $temp" ?></td>
        </tr>
        <tr>
          <td>Age</td>
          <td><?php echo " $age" ?></td>
        </tr>
        <tr>
          <td>Diabetes</td>
          <td><?php echo " $daibetes" ?></td>
        </tr>
      </tbody>
    </table>
    
<a class="alal btn btn-info" href="updatevital.php">Update</a>
  </div>
    

</div>
<style>
  .alal{
    color: #fff;
    
  }
</style>
</body>
</html>


        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>

<?php


?>

</html>



