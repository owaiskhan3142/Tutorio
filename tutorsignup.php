<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $description = $_POST['description'];
    $language = $_POST['language'];
    $fee = $_POST['fee'];
    $source = $_POST['source'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `tutor` (`first`, `last`, `age`, `phone`, `gender`, `country`, `description`, `language`, `fee`, `source`, `email`, `password`, `photo`) VALUES ('$first', '$last', '$age', '$phone', '$gender', '$country', '$description', '$language', '$fee', '$source', '$username', '$password', '');";
    // echo $sql;

    if ($con->query($sql) == true) {
        header("Location: tutorlogin.php");
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav_style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <title>Tutorio | Signup</title>
</head>

<body class="align">
    <div class="grid">
        <h1>Signup As Tutor</h1>
        <form action="./tutorsignup.php" method="POST" class="form login">

            <div class="form__field">
                <input id="login__username" type="text" name="first" class="form__input" placeholder="First Name"
                    required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="last" class="form__input" placeholder="Last Name"
                    required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="age" class="form__input" placeholder="age" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="tel" name="phone" class="form__input" placeholder="phone" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="gender" class="form__input" placeholder="gender" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="country" class="form__input" placeholder="country"
                    required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="description" class="form__input"
                    placeholder="description " required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="language" class="form__input" placeholder="language "
                    required>
            </div>

            <div class="">
                <input
                    style="padding: 1rem; background-color: var(--loginInputBackgroundColor); border-bottom-left-radius: 0; border-top-left-radius: 0;"
                    name="fee" placeholder="Fees /Hour" required>
            </div>

            <div class="form__field">
                <input id="login__username" type="text" name="source" class="form__input" placeholder="Online/Onsite"
                    required>
            </div>

            <div class="form__field">
                <input id="login__username" type="email" name="username" class="form__input" placeholder="Email"
                    required>
            </div>

            <div class="form__field">
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password"
                    required>
            </div>


            <div class="form__field">
                <input type="submit" name="submit" value="Sign UP">
            </div>

        </form>

        <p class="text--center">Already a Tutor? <a href="tutorlogin.php">Sign in now</a> <svg class="icon">
                <use xlink:href="#icon-arrow-right"></use>
            </svg></p>

    </div>
</body>

</html>