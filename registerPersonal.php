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
            <form action="">
                <div class="form-system">
                    <h1>Learning Management System</h1>
                </div>
                <div class="form-title">
                    <h2>Sign Up</h2>
                </div>
                      <!-- Email Input -->
                              <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                 <input type="text" class="form-control" placeholder="Enter your name" required>
                              </div>
      
                              <!-- Section Input -->
                                <div class="mb-3 input-group">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter your section" required>
                                </div>

                                                                <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                <select class="form-control" required>
                                    <option value="" disabled selected>Select your role</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select>
                                </div>
                            <a href="index.php">Already Have An Account</a>

                            <div class="button-form">
                                <button>Sign Up</button>
                            </div>
</form>
        </div>
    
    </section>

   <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html> 