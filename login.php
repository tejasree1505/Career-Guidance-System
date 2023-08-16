<?php
	session_start();
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pw = $_POST['pw'];
		$conn = mysqli_connect('localhost','root','','careerguidance');
		$sql = "SELECT * FROM test_user WHERE name='$uname' AND pw='$pw'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) == 0){
			echo "<script>alert('Incorrect username or password or both!')</script>";
		}
		else{
			$row = mysqli_fetch_array($result);			
			$_SESSION['uname'] = $row['name'];
      $sql = "SELECT * FROM test_user WHERE name='$uname'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $id = $row['id'];

      $q2 = "SELECT * FROM results WHERE id = $id";
      $result = mysqli_query($conn,$q2);
      $row = mysqli_fetch_array($result);
      //if($row['result']){
        $_SESSION['result'] = $_row['result'];
      //}
			header("Location: careerguidance.php");
		}
    mysqli_close($conn);
	}
?>

<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="career2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="" method='post'>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name ='uname' required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name='pw' placeholder="Password" required>
          </div>
          
          <div class="row button">
            <input  name='submit' id='button' type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href='register.php'>Sign up now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
