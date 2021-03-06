<?php
include ('connection.php');
session_start();

if (isset($_SESSION['uname'])) {
  $name = $_SESSION['uname'];
}
if(!isset($_SESSION['uname'])){
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/nav_style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="newhome.css">
    <!-- <link rel="stylesheet" href="home.css"> -->
    <title>Tutorio</title>
</head>

<body id="cover">
    <div></div>
    <div class="nav">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="./tutorhome.php">Home</a></li>
                <li><a class="menu__item" href="./mylectures.php">My Lectures</a></li>
                <li><a class="menu__item" href="./studentcircle.php">Student Circle</a></li>

                <?php
                if (isset($_SESSION['uname'])) {
                    echo '<li><a class="menu__item" href="./tutorProfile.php">' . $name . '</a></li>';
                    echo '<li><a class="menu__item" href="http://localhost:3003?username=' . $name . '"><?php session_destroy(); ?>Chat</a></li>';
                    echo '<li><a class="menu__item" href="./logout.php"><?php session_destroy(); ?>Logout</a></li>';
                }
                else{
                    echo '<li><a class="menu__item" href="./tutorlogin.php">Sign in as tutor</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="container">
        
        <div class="span2">
            <a href="/Tutorio/mylectures.php" style="font-size: large">
                My Lecutres
      </a>

            <h2 class="large">
                Tutorio Teacher
            </h2>
        </div>
  
        <div class="span5">
            <a href="/Tutorio/tutorProfile.php">
                Profile
            </a>
        </div>
        <div class="span6">
            <a href="/Tutorio/studentcircle.php">
            Student Circle
      </a>
        </div>
        <div class="span7">
        </div>

    </div>

      </div>
  
  </div>

    </script>
</body>

</html>