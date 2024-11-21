<?php
session_start();
include 'php/connections.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Email"])) {
        echo "<script>history.back();</script>";
         echo "<script>window.location.href='index.php?email_empty=true';</script>";
    } else {
        $Email = $_POST["Email"];
    }

    if (empty($_POST["Password"])) {
       echo "<script>history.back();</script>";
       echo "<script>window.location.href='index.php?password_empty=true';</script>";
    } else {
        $password1 = $_POST["Password"];
    }

    if ($Email && $password1) {
        include("php/connections.php");

        $check_Email = mysqli_query($connections, "SELECT * FROM account_tbl WHERE Email='$Email'");
        $check_Email_row = mysqli_num_rows($check_Email);

        if ($check_Email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_Email)) {
                $db_password1 = $row["Password"];
                $db_account_type = $row["Account_Type"];
                if ($password1 == $db_password1) {
                if ($db_account_type == "1") {
                   $_SESSION['Email'] = $Email;
                    echo "<script>window.location.href='teacher/dashboard.php';</script>";
                    exit(); 
                }
                else{
                     $_SESSION['Email'] = $Email;
                     echo "<script>window.location.href='student/dashboard.php';</script>";
                }        
               
            } else {
                /*Password incorrect */
                 echo "<script>window.location.href='index.php?password_empty=true';</script>";
            }
            }
         }
        
        else {
            /*Email is not registered */
           echo "<script>window.location.href='index.php?Invalid_Account=true';</script>";
        }
    }
    // Reset error messages when the page is loaded initially
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $EmailErr = $password1Err = "";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="left-side">
               <div class="svg-container">
                    <img src="svg/learning-animate.svg" alt="">
               </div>
        </div>
        <div class="right-side">
            <form action="index.php" method="POST">
                <div class="form-system">
                    <h1>Learning Management System</h1>
                </div>
                <div class="form-title">
                    <h2>Sign In</h2>
                </div>
                      <!-- Email Input -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="Email" class="form-control" placeholder="Enter your email" required>
                            </div>
      
                            <!-- Password Input -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="Password" class="form-control" placeholder="Enter your password" required>
                            </div>

                            <a href="">Don't Have an Account</a>

                            <div class="button-form">
                                <button type="submit">Sign In</button>
                            </div>
                    </form>
        </div>
    
    </section>

   <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html> 