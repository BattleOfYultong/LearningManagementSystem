<?php 
include_once 'php/connections.php';
session_start();

if(isset($_SESSION['Email'])){
   $Email = $_SESSION['Email'];

   $sql = "SELECT *FROM account_tbl WHERE Email = '$Email'";
   $result = mysqli_query($connections, $sql);

   if($result){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $accountID = $row['accountID'];
    }
   }
}
else{
    echo "You are not in Session";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(isset($_POST['registerPersonal'])){
        $Name = $_POST['Name'];
        $Section = $_POST['Section'];
        $Role = $_POST['Role'];

        $sql2 = "UPDATE account_tbl SET Name = '$Name', Section = '$Section', Account_Type = $Role WHERE accountID = $accountID";
        $result2 = mysqli_query($connections, $sql2);

        if($result2){
            $_SESSION['Email'] = $Email;
            echo "<script>window.location.href='registerPhoto.php';</script>";
        }
        else{
            echo "Error: ".$connections->error;
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
            <form action="registerPersonal.php" method="POST">
                <div class="form-system">
                    <h1>Learning Management System</h1>
                </div>
                <div class="form-title">
                    <h2>Sign Up</h2>
                </div>
                      <!-- Email Input -->
                              <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                 <input name="Name" type="text" class="form-control" placeholder="Enter your name" required>
                              </div>
      
                              <!-- Section Input -->
                                <div class="mb-3 input-group">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    <input name="Section" type="text" class="form-control" placeholder="Enter your section" required>
                                </div>

                                                                <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                <select name="Role" class="form-control" required>
                                    <option value="" disabled selected>Select your role</option>
                                    <option value="2">Teacher</option>
                                    <option value="1">Student</option>
                                </select>
                                </div>
                            <a href="index.php">Already Have An Account</a>

                            <div class="button-form">
                                <button type="submit" name="registerPersonal">Sign Up</button>
                            </div>
                </form>
        </div>
    
    </section>

   <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html> 