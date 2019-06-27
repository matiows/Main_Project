<?php
require 'includes/config.php';
require 'includes/form_handler/register_handler.php';
require 'includes/form_handler/login_handler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project x</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container login ">
        <h1>Welcome</h1>
        <form action="index.php" method="post" class="form-inline ">
            <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
            <div class="form-group">
                <label>Email or Username&nbsp</label>
                <input class="form-control" type="text" name="log_email"
                       value="<?php if(isset($_SESSION['log_email'])) {echo $_SESSION['log_email'];} ?>" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="log_password">
            </div>
            <input type="submit" class="btn btn-default btn-login" name="login_button" value="Log in">
        </form><br>
    </div><br>
    <div class="container register">
        <form action="index.php" method="POST" class="form-inline">
            <div class="form-group">
                <label>First name </label> <input class="form-control" type="text" name="reg_fname"
                                                  value="<?php if(isset($_SESSION['reg_fname'])) { echo $_SESSION['reg_fname']; }  ?>" required>
                <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
            </div>
            Last name  <input type="text" name="reg_lname" value="<?php
            if(isset($_SESSION['reg_lname'])) {
                echo $_SESSION['reg_lname'];
            }
            ?>" required>
            <br><br>
            <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

            Email  <input type="email" name="reg_email" value="<?php
            if(isset($_SESSION['reg_email'])) {
                echo $_SESSION['reg_email'];
            }
            ?>" required>

            Confirm Email  <input type="email" name="reg_email2" value="<?php
            if(isset($_SESSION['reg_email2'])) {
                echo $_SESSION['reg_email2'];
            }
            ?>" required>
            <br><br>
            <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
            else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
            else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


            Password  <input type="password" name="reg_password" required>
            Confirm password  <input type="password" name="reg_password2" required>
            <br><br>
            <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";
            else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
            else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


            <input type="submit" class="btn btn-default btn-register" name="register_button" value="Register">
            <br>

            <?php if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
        </form>
    </div>
</body>
</html>