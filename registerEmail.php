<?php include_once 'php/connections.php';
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['registerEmail'])){
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            $sql = "INSERT INTO account_tbl (Email, Password) VALUES ('$Email', '$Password')";
            $result = mysqli_query($connections, $sql);

            if($result){
                $_SESSION['Email'] = $Email;
                echo "<script>window.location.href='registerPersonal.php';</script>";
            }
            else{
                echo "Error:" .$connections->error;
            }
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
    <title>Register</title>
</head>
<body>
    <section>
        <div class="left-side">
               <div class="svg-container">
                    <img src="svg/learning-animate.svg" alt="">
               </div>
        </div>
        <div class="right-side">
            <form action="registerEmail.php" method="POST">
                <div class="form-system">
                    <h1>Learning Management System</h1>
                </div>
                <div class="form-title">
                    <h2>Sign Up</h2>
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

                            <a href="index.php">Already Have An Account</a>

                            <div class="button-form">
                                <button name="registerEmail" type="submit">Sign Up</button>
                            </div>
</form>
        </div>
    
    </section>

   <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html> 