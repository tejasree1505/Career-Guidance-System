<?php
session_start();
if(isset($_POST['submit']))
{
    $ans = $_POST['q1'];
    $conn = mysqli_connect('localhost','root','','careerguidance');
    if($ans=="no"){
        $sql = "SELECT no FROM quiz WHERE question=1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $loc = $row['no'];
    }
    else{
        $sql = "SELECT yes FROM quiz WHERE question=1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $loc = $row['yes'];
    }
    header($loc);    
}

?>
<html>
<head>
<title>Q 1</title>
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
  <!--NAVBAR--> 
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="careerguidance.php" class="w3-bar-item w3-button w3-wide"><i class="fa fa-solid fa-cube "></i></a> 
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
      <a href="careerguidance.php#about" class="w3-bar-item w3-button">ABOUT</a>
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
      <a href="careerguidance.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="careerguidance.php#contact" class="w3-bar-item w3-button"><i class="fa fa-star"></i> RATE US</a>
    </div>
  </div>
</div>
<center>
<form action ="" method="post">
<div class="card">
  <div class="container">
  <center><p>Do you own a suit?</p></center>
<div class="option-group">
  <div class="option-container">
    <input class="option-input" id="option-1" type="radio" name="q1" value="yes"/>
    <input class="option-input" id="option-2" type="radio" name="q1" value="no"/>
    
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