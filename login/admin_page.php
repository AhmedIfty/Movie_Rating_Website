<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY website</title>
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.css">
    <h1> Admin page</h1>
    
    <?php session_start();?>
    <?php 
    if(isset($_SESSION['uname'])){
        echo "<h2>hello ".$_SESSION['uname']."</h2>";
    }
    else{
        header('location:login_page.php?message=You need to login to enter the site');
    }
    ?>
    <a href="logout_process.php" class ="btn btn-danger">LOG OUT</a>
    
</head>
<body>
</body>
</html>