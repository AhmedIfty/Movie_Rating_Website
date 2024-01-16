<!-- register_process.php -->
<?php
include ('dbcon.php'); 
if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);

   $select = " SELECT * FROM users WHERE (user_name='$name' AND password = '$pass')";
   $result = mysqli_query($conn, $select);

   $select_mail = " SELECT * FROM users WHERE email = '$email'";
   $result_mail = mysqli_query($conn, $select_mail);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }
   elseif(mysqli_num_rows($result_mail) > 0){
      $error[] = 'Email already exist!';
   }  

   else
        {
         $insert = "INSERT INTO users(user_name, password,email,type) VALUES('$name','$pass','$email','user')";
         mysqli_query($conn, $insert);
         header('location:login_page.php');
         }
};
?>
<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY website</title>
    <link rel="stylesheet" href="./login.css">
    <link reL="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.css">
    <link reL="stylesheet"  href="include/bootstrap/css/style.css">
</head>
<body class="head">
<h1 class="head"> Register PAGE </h1>
    <div class="container log">
<form class="form tex" action="" method="post">
     <!-- <h3> Register NOW!  </h3> -->
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <div class="form-group">
      <label for="uname">Username</label>  
      <input type="text" name="name" required placeholder="enter your name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>  
      <input type="email" name="email" required placeholder="enter your email" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Password  </label>  
      <input type="password" name="password" required placeholder="enter your password" class="form-control">
    </div>
    <br>
    <div class="form-group">   
      <input type="submit" name="submit" value="register now" class="btn btn-warning">
    </div>
    
      <p>already have an account? <a href="login_page.php">login now</a></p>
</form>
</div>
</body>
</html>