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
        $Account_Type = $row['Account_Type'];
    }
   }
}
else{
    echo "You are not in Session";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['registerPhoto'])){
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file is an actual image
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["photo"]["size"] > 5000000) { // Adjusted to 5MB
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (!in_array($imageFileType, array("jpg", "png", "jpeg", "gif"))) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Generate a unique filename and set the target file path
            $uniqueFilename = uniqid() . "." . $imageFileType;
            $targetFilePath = $targetDirectory . $uniqueFilename;

            // Attempt to move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
                // Update the user profile with the new photo filename
                $updateQuery = "UPDATE account_tbl SET Photo = '$uniqueFilename' WHERE accountID = $accountID";
                if (mysqli_query($connections, $updateQuery)) {
                    if($Account_Type == 1){
                    $_SESSION['Email'] = $Email;
                    echo "<script>window.location.href='teacher/dashboard.php';</script>";
                    exit(); 
                    }
                    else{
                         $_SESSION['Email'] = $Email;
                     echo "<script>window.location.href='student/dashboard.php';</script>";
                    exit(); 
                    }
                   
                } else {
                    echo "Error updating record: " . mysqli_error($connections);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
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
                    <img src="svg/profile-pic-animate.svg" alt="">
               </div>
        </div>
        <div class="right-side">
            <form action="registerPhoto.php" method="POST" enctype="multipart/form-data">
                <div class="form-system">
                    <h1>Learning Management System</h1>
                </div>
                <div class="form-title">
                    <h2>Sign Up</h2>
                </div>
                    <div class="image-container">
                        <img id="previewImage" src="images/undraw_photo_re_5blb.svg" alt="">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-upload"></i></span>
                        <input name="photo" class="form-control" type="file" id="fileInput" accept="image/*" required>
                    </div>


                            <a href="index.php">Already Have An Account</a>

                            <div class="button-form">
                                <button type="submit" name="registerPhoto">Sign Up</button>
                            </div>
</form>
        </div>
    
    </section>

    <script>
  const fileInput = document.getElementById('fileInput');
  const previewImage = document.getElementById('previewImage');

  fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];

    if (file) {
      // Ensure it's an image
      if (!file.type.startsWith('image/')) {
        alert('Please upload a valid image file.');
        return;
      }

      // Create a FileReader to load the image
      const reader = new FileReader();
      reader.onload = function (e) {
        // Set the preview image source to the uploaded image
        previewImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
</script>

   <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html> 