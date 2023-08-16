<?php
session_start();
if(isset($_POST['submit']))
{
    $ans = $_POST['q13'];
    $conn = mysqli_connect('localhost','root','','careerguidance');
    if($ans=="no"){
        $sql = "SELECT no FROM quiz WHERE question=13";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $loc = $row['no'];
    }
    else{
        $sql = "SELECT yes FROM quiz WHERE question=13";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $loc = $row['yes'];
        $_SESSION['result'] = 'teacher';
    }
    header($loc);    
}

?>
<html>
<head>
<title>Q 13</title>
  <meta charset="UTF-8">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="ques.css">
<style>
.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button w3-wide"><i class="fa fa-solid fa-cube "></i></a> 
    <?php
     //session_start();
      if (session_id() == '' || !isset($_SESSION['uname'])) {
        echo "";
      } else {
        
        echo "<a href='#home' class='w3-bar-item w3-button w3-wide'> Hi, ".$_SESSION['uname']."! </a>";
      }
    ?>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <!--a href="careerguidance.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i-->
        <?php
				//session_start();
				if (session_id() == '' || !isset($_SESSION['uname'])) {
					echo "<a href='login.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i>  LOGIN</a>";
				} else {
					echo "<a href='logout.php' class='w3-bar-item w3-button'><i class='fa fa-user'></i>  LOGOUT</a>";
				}
			?>
      <!--/a-->
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<center>
<form action ="" method="post">
<div class="card">
  <div class="container">
  <center><p>Do you like kids?</p></center>
<div class="option-group">
  <div class="option-container">
    <input class="option-input" id="option-1" type="radio" name="q13" value="yes"/>
    <input class="option-input" id="option-2" type="radio" name="q13" value="no"/>
    
    <label class="option" for="option-1">
      <span class="option__indicator"></span>
      <span class="option__label" >
        <center>YES</center>
      </span>
    </label>

    <label class="option" for="option-2">
      <span class="option__indicator"></span>
      <span class="option__label">
        <center>NO</center>
      </span>
    </label>
    
  </div>
</div><br><br>
<div class="btn-group">
<input name="submit" type="submit" class='button' value="Next">
</div>
</div>
</div>
</form>
</center>
</body>
</html>