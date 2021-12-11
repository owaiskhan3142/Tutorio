<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`first`, `last`, `age`, `city`, `username`, `password`) VALUES ('$first','$last', '$age', '$city', '$username', '$password');";
    //echo $sql;

    if ($con->query($sql) == true) {
        header("Location: Final_design/login.php");
    } else {
        echo "error, $sql <br> $con->error()";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav_style.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <title>Tutorio | Signup</title>
</head>

<body class="align">
    <div class="grid">
        <form action="./signup.php" method="POST" class="form login">

            <div class="form__field">
                <input id="login__username" type="text" name="first" class="form__input" placeholder="First Name" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="last" class="form__input" placeholder="Last Name" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="age" class="form__input" placeholder="age" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="city" class="form__input" placeholder="City" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
            </div>

            <div class="form__field">
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
            </div>

            <div class="form__field">
                <input type="submit" name="submit" value="Sign UP">
            </div>

        </form>
    </div>
</body>

<body>
    <div class="nav">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="./home.php">Home</a></li>
                <li><a class="menu__item" href="#">Find Tutors</a></li>
                <li><a class="menu__item" href="./Aboutus.php">About US</a></li>
                <li><a class="menu__item" href="./contact.php">Contact US</a></li>
                <li><a class="menu__item" href="./login.php">Login/Signup</a></li>
            </ul>
        </div>
    </div>
</body>
</html>