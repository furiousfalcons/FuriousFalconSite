<?php
session_start();

if(isset($_SESSION["isLoggedIn"])) {
  $isLoggedIn = $_SESSION["isLoggedIn"];
  if ($isLoggedIn) {
    $userInfo = $_SESSION["userInfo"];
    session_unset();
    session_destroy();
  }
} else {
  $_SESSION["isLoggedIn"] = False;
  header("Location: /login.php");
}
?>

<html>
<title>Furious Falcons - Student Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#ffc200">
<meta name="msapplication-TileColor" content="#181818">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<body class="w3-black">
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="images/FalconsLogoOnly.png" style="width:100%">
    <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-sign-out fa-rotate-180 w3-xxlarge"></i>
      <p>RETURN & LOGOUT</p>
    </a>
    <!-- TODO: Change href -->
    <a href="/attendance.php" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-sign-in w3-xxlarge"></i>
      <p>SIGN INTO A MEETING</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-hover-opacity-off w3-center w3-small">
      <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:50% !important"><i class="fa fa-sign-out fa-rotate-180 w3-xlarge"></i><br />RETURN & LOGOUT</a>
      <!-- TODO: Change href -->
      <a href="/attendance.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:50% !important"><i class="fa fa-sign-in fa-rotate-180 w3-xlarge"></i><br />SIGN INTO A MEETING</a>
    </div>
  </div>
  <!-- Page Content -->
  <div class="w3-padding-large" id="wrapper" style="margin-top: 50px;">

    <div class="w3-content" style="text-align: center;">
      <h1 style="font-weight: bold;">Welcome to your Robotics Automated Dashboard, Fellow Falcon!</h1>
      <h3>What can I do for you, <?php echo $userInfo["fName"]; ?>?</h3>
    </div>
    <div class="w3-content">

    </div>
    <!-- END PAGE CONTENT -->
  </div>

</body>
</html>
