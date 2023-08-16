<?php
	session_start();
	if(isset($_POST['submit'])){
		$mail = $_POST['mail'];
		$ph = $_POST['contact'];
		$name = $_POST['name'];
		$pw = $_POST['pw'];
		$cpw = $_POST['cpw'];
		if ($pw != $cpw){
			echo "<script>alert('Password not matched!')</script>";
		}
		else{
			$conn = mysqli_connect('localhost','root','','careerguidance');
			if(!$conn){
				die("<script>alert('Oops! Connection failed...Try again later')</script>");
			} else {
				$sql = "SELECT * FROM test_user WHERE name='$name'";
				$result = mysqli_query($conn,$sql);
				if ((mysqli_num_rows($result))>0){
					echo "<script>alert('Email already registered by another user!!')</script>";
				}
				else{
					$sql = "INSERT INTO test_user (name, pw, mail, contact) VALUES ('$name', '$pw', '$mail', $ph)";
					$result = mysqli_query($conn,$sql);
					if(!$result){
						echo "<script>alert('Something went wrong! Try again later...')</script>";
					}
					else{
						echo "<script>alert('User Registration Successful!')</script>";
						$_SESSION['uname'] = $name;
						$uname = $name = $pw = $cpw = $mail = '';
						$ph = 0;
						header("Location: careerguidance.php");
					}
				}
			}
			mysqli_close($conn);
		}

	}
?>

<!DOCTYPE html>
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
        <div class="title"><span>Register</span></div>
        <form action="" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name ='name' required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name='pw' placeholder="Password" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name='cpw' placeholder="Confirm Password" required>
          </div>
		    <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="email" name='mail' placeholder="Email" required>
          </div>
			<div class="row">
            <i class='fas fa-phone-alt'></i>
            <input type="telephone" name='contact' placeholder="Contact" required>
		</div>

          <div class="row button">
          <input  name='submit' id='button' type="submit" value="Register"> 
             <!--<button name="submit" id='button'>Register</button>  -->
           </div>
          
        </form>
      </div>
    </div>

  </body>
</html>
