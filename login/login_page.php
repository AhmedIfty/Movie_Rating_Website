<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./login.css">
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.css">
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/style.css">
</head>
<body class="head">
    <h1 class="head"> LOGIN  PAGE </h1>
    <div class="container log">

                <!--login form -->
<form class="form tex" action="login_process.php" method="post">
    <!-- Existing login form fields go here -->
    <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" name="uname" placeholder ="Username" class="form-control">
    </div>
    <!-- <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
    </div> -->
    <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder ="Password" class="form-control">
    </div>
    <div class="form-group">
            <br>
            <input type="submit" name="login" value="Login" class="btn btn-success">
    </div>
    <div class="text-white">
        <br>
        <b>Don't have an account? <a href="register_process.php">Register now</a></b> <br>
        <!-- <p>Are you an Admin ? <a href="admin_login_process.php" class="btn btn-warning">Admin Login</a></p> -->
        <b>Are you an admin? <a href="admin_login_page.php">Admin LogIn</a></b>
    </div>
</form>
    </div>

    <?php
        if(isset($_GET['message'])){
            echo "<h6>".$_GET['message']."</h6>";
        }
    ?>
</body>
</html>