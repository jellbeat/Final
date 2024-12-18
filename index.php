<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
        <div class="container">
            <div class="box form-box">
                <?php 
                
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con,$_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);

                    $result = mysqli_query($con,"SELECT * FROM users Where Email='$email' AND Password='$password' ") or die("Selected Error");
                    $row= mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                    }else{
                        echo"<div class = 'message'>
                             <p>Wrong Username or Password</p>
                        </div> <br>";
                    echo"<a href='index.php'><button class='btn'>Go Back</button>";

                  }
                  if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                  }
                }else{
                

                ?>
                <header>Login</header>
                <form action="" methods="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="emai;" id="email" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="Password" required>
                    </div>

                    <div class="field input">
                        
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>

                    <div class="links">
                        Don't have account? <a href="register.html">Sign Up</a>
                    </div>

                    <div class="background">
                    </div>

                </form>
            </div>
            <?php } ?>
        </div>
</body>
</html>