<?php 
session_start();

if (!isset($_SESSION['uname'])){
  header('location:home.php');
}

$name = $_SESSION['uname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="nav_style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="slide.css">
  <!-- <link rel="stylesheet" href="home.css"> -->
  <title>Tutorio</title>
</head>

<body>
<div id="cover"></div>
  <div class="nav">
    <div class="hamburger-menu">
      <input id="menu__toggle" type="checkbox" />
      <label class="menu__btn" for="menu__toggle">
        <span></span>
      </label>
      <ul class="menu__box">
        <li><a class="menu__item" href="#">Home</a></li>
        <li><a class="menu__item" href="#">Find Tutors</a></li>
        <li><a class="menu__item" href="./Aboutus.php">About US</a></li>
        <li><a class="menu__item" href="./contact.php">Contact US</a></li>
        <?php
          if(!isset($_SESSION['uname'])){
            echo '<li><a class="menu__item" href="./login.php">Login/Signup</a></li>';
            echo '<li><a class="menu__item" href="./tutor.php">Signup as Tutor</a></li>';
          }
          else{
            echo '<li><a class="menu__item" href="./profile.php">'. $name.'</a></li>';
            echo '<li><a class="menu__item" href="./login.php">Logout</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>


<script>
  $(window).scroll(function(e) {
  frames = 17;
  step = ($("body").height() - $(window).height()) / frames;
  scrollStep = parseInt($(window).scrollTop() / step);
  maskPosition = 100 - ( 100 / frames * scrollStep);
  $("#cover").css({
    "mask-position": maskPosition + "% 50%",
    "-webkit-mask-position": maskPosition + "% 50%"
  });
});

/* Just for CodePen Thumbnail */
$("html, body").animate({ scrollTop: $(document).height() - $(window).height() }, 1200).queue(function(next) {
  $("html, body").animate({ scrollTop: 0 }, 1200);
  next();
});

</script>
</body>

</html>