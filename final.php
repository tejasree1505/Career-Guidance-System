<?php
/*
$_SESSION['result'] = "one of the following";

Designer - designer
Legal Consultant - legal
Finance - finance   left right
Teacher/Professor - teacher
Data Analyst - analyst
Writer/Journalist - writer
Sales - sales
Digital Marketing - dmark
Entrepreneurship - entreprenuer
Computer Science Engineer - cs  (developer as per flowchart)

//we need to prepare result details for the following

Therapist - therapist
Podcaster - podcaster
Production Engineer - production

*/
session_start();

$res = $_SESSION['result'];
$uname = $_SESSION['uname'];
$conn = mysqli_connect('localhost','root','','careerguidance');
if(!$conn){
    die("<script>alert('Oops! Connection failed...Try again later')</script>");
} else {
      $sql = "UPDATE results SET result = '$res' WHERE id = (SELECT id FROM test_user WHERE name='$uname')";
      $result = mysqli_query($conn,$sql);
      if(!$result){
        echo "<script>alert('Something went wrong! Try again later...')</script>";
  }
}
mysqli_close($conn);
?>
<html>
<head>
<title>Result</title>
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
  transition: 0.3s;
  width: 60%;
  font-family: 'Courier';
  margin-top:150px;
  background-color:white;
}

.card:hover {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  }

.container {
  padding: 2px 16px;
}
.part2{
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin: 1em;
    padding: 1em;
    text-align: left;
}

p{
  padding-left: 2%;
  text-align: left;
  font-size: 20px;
}
b{
  text-align: center;
  font-size: 45px;
}
body{
  background-color:	 rgb(163, 168, 233);
}
.btn-group .button {
  background-color: rgb(22, 25, 59);
  
  border: none;
  color: white;
  font-weight: bold;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  
}

.btn-group .button:hover {
  background-color:rgb(140, 143, 187); /* Green */
  color:black;
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
<!--600px works good for pictures bro-->
  <div class="card" id='designer' style='display:none'>
    <img src="https://media.istockphoto.com/id/1290439360/vector/woman-with-mannequin-patterns-and-threads-fashion-designer-dressmaker-seamstress-sewing.jpg?s=612x612&w=0&k=20&c=LkJnqHiQjXXzIAdgLxGmHXr7CpoSn1JIsdPCQl7bopg=" alt="Designer" >
    <div class="container">
      <h4><b>Designer</b></h4> 
      <p>People skilled in Design are in high demand these days, with more and more startups popping up, someone has to design their website, create their logo, and so on. Best part? You don't even need a fancy degree - everything you need to know is on the web.</p> 
    </div>
  </div>
</center>
<center>

  <div class="card" style="display:none" id="legal" >
    <img src="https://img.freepik.com/premium-vector/lawyer-attorney-justice-illustration-with-laws-scales-wooden-judge-hammer-consultant_2175-4659.jpg?w=2000" alt="Legal Consultant" width="600px" >
    <div class="container">
      <h4><b>Legal Consultant</b></h4> 
      <p>Corporations pay top buck for skilled lawyers willing to defend their interest.If you are really good in arguing ad persuading,it will pay off pretty fast.  </p> 
    </div>
  </div>
  </center>

  <center>
   
  <div class="card" style="display:none" id="finance">
  <img src="https://img.freepik.com/free-vector/business-innovation-based-alternative-financial-services-digital-currency-market-exchange-financial-technology-flat-vector-illustration-fintech-startup-economy-finances-concept-banner_74855-22404.jpg?w=2000" alt="Avatar" style="width:400px;">
    <div class="container">
    <h4><b>Finance</b></h4><br><p>
    Like Money? Don't mind working mind-numbing hours? Then Accounting and finance be the perfect career for you. The gist of finance is dealing with someone else money</p> 
    </div>
</div>
    </center>


    <center>
    <div class="card" style="display:none" id="teacher">
        <img src="https://img.freepik.com/free-vector/teacher-concept-profesor-standing-front-blackboard-school-college-workers-with-professional-discipline-tools-idea-education-knowledge-flat-vector-illustration_613284-1977.jpg?w=2000" alt="Teacher/Professor" width="600px" >
        <div class="container">
          <h4><b>Teacher/Professor</b></h4> 
          <p>Teaching is considered to be one of the most respectable  professions.If you enjoy talking to people,presenting go for it,You'll love it.</p> 
        </div>
      </div>
      </center>
        <center>
      <div class="card" style="display:none" id="analyst">
        <img src="https://img.freepik.com/free-vector/data-inform-illustration-concept_114360-864.jpg?w=2000" alt="Data Analyst" width="600px" >
        <div class="container">
          <h4><b>Data Analyst</b></h4> 
          <p>Since the creation of computers,companies started gathering up the data of their customers-until they reached a point when they have a ton of data and no idea how to use it.Data analysts are becoming more and more in demand as companies realize the utilization of the data can lead to increased profits.</p> 
        </div>
      </div>
    </center>
    <center>

      <div class="card" style="display:none" id="writer">
        <img src="https://img.freepik.com/free-vector/diary-concept-illustration_114360-3755.jpg?w=2000" alt="Writer/Journalist" width="600px" >
        <div class="container">
          <h4><b>Writer/Journalist</b></h4> 
          <p>Using their command of the common language of their audience, writers conceptualize, research, write, and edit polished manuscripts, poems, articles, and other types of written content. In their role, they may work across genres, from nonfiction to poetry, fiction to satire. In a business environment, writers may work as copywriters, technical writers, blog and feature writers, and as editors.</p> 
        </div>
      </div>
    </center>
    <center>

      <div class="card" style="display:none" id="sales">
        <img src="https://img.freepik.com/free-vector/managers-generation-sales-by-marketing-funnel-tiny-people-working-conversion-digital-data-ideas-into-money-flat-vector-illustration-advertising-social-media-seo-service-concept_74855-21977.jpg?w=2000" alt="Sales" width="600px" >
        <div class="container">
          <h4><b>Sales</b></h4> 
          <p>Salespeople have the potential to earn a high salary and often have a clear career path within their organizations. Most importantly, anyone can get into sales. You only need to have the drive to grow your sales skills and the desire to succeed.If you are a practical person go for it.</p> 
        </div>
      </div>

    </center>
    <center>

      <div class="card" style="display:none" id="dmark">
        <img src="https://img.freepik.com/free-vector/digital-marketing-team-with-laptops-light-bulb-marketing-team-metrics-marketing-team-lead-responsibilities-concept-white-background_335657-2022.jpg?w=2000" alt="Digital Marketing" width="600px" >
        <div class="container">
          <h4><b>Digital Marketing</b></h4> 
          <p>The job of digital marketing is one of India's highest-paying jobs, and it's also one of the fastest-paced. Starting in posts like social media marketing or email marketing, you will be able to advance quickly to higher positions in high-growth companies.</p> 
        </div>
      </div>

    </center>
    <center>

      <div class="card" style="display:none" id="entrepreneur">
        <img src="https://img.freepik.com/free-vector/businessman-working-flying-like-superhero-with-briefcase-start-up-launch-start-up-venture-entrepreneurship-concept-white-background_335657-1678.jpg?w=2000" alt="Entrepreneurship" width="600px" >
        <div class="container">
          <h4><b>Entrepreneurship</b></h4> 
          <p>Entrepreneurship is the creation or extraction of economic value. With this definition, entrepreneurship is viewed as change, generally entailing risk beyond what is normally encountered in starting a business, which may include other values than simply economic ones.If you have a good idea,starvingto take it to the market and earn You're an entrepreneur.</p> 
        </div>
      </div>

    </center>
    <center>

      <div class="card" style="display:none" id="cs">
        <img src="https://img.freepik.com/free-vector/pair-programming-concept-illustration_114360-3941.jpg?w=2000" alt="Computer Science Engineer" width="600px" >
        <div class="container">
          <h4><b>Computer Science Engineer</b></h4> 
          <p>There is no such thing as better because they lead to different careers and have different specialisations or subfields. Either discipline is a great choice for your studies, as long as you're passionate about technology, and you understand what each study option implies.It is fine even if you start from scratch,You can be a techsavy</p> 
        </div>
      </div>
    </center>

    <center>
      <div class="card" style="display:none" id="therapist">
        <img src="https://img.freepik.com/free-vector/psychologist-concept-illustration_114360-2141.jpg?w=2000" alt="Therapist" width="600px" >
        <div class="container">
          <h4><b>Therapist</b></h4> 
          <p>A therapist is a broad designation that refers to professionals who are trained to provide treatment and rehabilitation. The term is often applied to psychologists, but it can include others who provide a variety of services, including social workers, counselors, life coaches, and many others. 

The term therapist is not a protected occupational title, but there are many types of therapists who do need to be licensed in order to practice. This includes occupational therapists and marriage and family therapists.</p> 
        </div>
      </div>
    </center>

    <center>
      <div class="card" style="display:none" id="podcaster">
        <img src="https://img.freepik.com/free-vector/people-recording-podcast-together_23-2148777693.jpg?w=2000" alt="Podcaster" width="600px" >
        <div class="container">
          <h4><b>Podcaster</b></h4> 
          <p>Whether as a side hustle or a full-time job, podcasting can be a fun way to share your interests and expertise with an audience. It can also be a way to break into broadcasting and turn a passion project into something profitable, potentially joining the ranks of podcasters who earn decent money through ad revenue and creator funds.</p> 
        </div>
      </div>

    </center>

        <center>

      <div class="card" style="display:none" id="production">
        <img src="https://img.freepik.com/free-vector/factory-workers-robotic-arm-removing-packages-from-conveyor-line-engineer-using-computer-operating-process-vector-illustration-business-production-machine-technology-concepts_74855-9859.jpg" alt="Production Engineer" width="600px" >
        <div class="container">
          <h4><b>Production Engineer</b></h4> 
          <p>Production engineers are responsible for supervising and improving production at plants and factories. They support engineering teams, draw up safety protocols, report issues to the manager, and develop strategies to improve efficiency and profit.</p> 
        </div>
      </div>
<br>
    </center>
    <div class="btn-group">
         <center><button class='button'><a href="careerguidance.php" style='text-decoration:none'>GO TO HOME</a></button></center> <br><br>
        </div>
      <script type="text/javascript">
        var myvar = "<?php echo $res; ?>";
        document.getElementById(myvar).style.display = "block";
      </script>
  </body>
  </html>

