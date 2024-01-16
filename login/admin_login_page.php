<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.css">
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/style.css">
</head>

<!-- admin_login.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY website</title>
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/style.css">
</head>
<body>
    <h1>WELCOME  ADMIN  ! </h1>
    <div class="form-container">
</body>  -->

<body class="head">
    <h1 class="head"> Admin LogIn Page </h1>
    <div class="container log">

    <form class="form tex" action="admin_login_process.php" method="post">
    <!-- Existing login form fields go here -->
    <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" name="uname" class="form-control">
    </div>
    <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" name="login" value="DONE" class="btn btn-primary">
    </div>

    </form>
    </div>
</body>
</html>