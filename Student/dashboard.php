<?php 
session_start();
include '../php/connections.php';
include 'verification.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS Dashboard</title>
  <!--  -->
  <link rel="stylesheet" href="../css/dashboard.css">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/fontawesome-free-6.5.2-web/css/all.min.css">
  
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="profile-section">
      <img src="<?php echo "$Photo" ?>" alt="Profile Picture">
      <h5><?php echo "$Name" ?></h5>
      <p><?php echo "$Access" ?></p>
    </div>
    <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="#"><i class="fas fa-chalkboard-teacher"></i> My Courses</a>
    <a href="#"><i class="fas fa-users"></i> Classmates</a>
    <a href="#"><i class="fas fa-file-alt"></i> Assignments</a>
    <a href="#"><i class="fas fa-cogs"></i> Settings</a>
    <a href="../php/log-out.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Content -->
  <div class="content">
    <!--  -->
   <h1>Welcome <?php echo "$Name" ?></h1>
   
    
 <!-- Student Dashboard Cards -->
<div class="row">
  <!-- Enrolled Courses Card -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="fas fa-book-reader fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Enrolled Courses</h5>
        <p class="card-text">View and access the courses you are enrolled in.</p>
        <a href="#" class="btn btn-primary">Go to Courses</a>
      </div>
    </div>
  </div>

  <!-- Assignments Card -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="fas fa-pencil-alt fa-3x mb-3 text-success"></i>
        <h5 class="card-title">Assignments</h5>
        <p class="card-text">Submit and view your assignments.</p>
        <a href="#" class="btn btn-primary">Go to Assignments</a>
      </div>
    </div>
  </div>

  <!-- Grades Card -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="fas fa-chart-line fa-3x mb-3 text-info"></i>
        <h5 class="card-title">Grades</h5>
        <p class="card-text">Check your performance and grades.</p>
        <a href="#" class="btn btn-primary">View Grades</a>
      </div>
    </div>
  </div>

  <!-- Attendance Card -->
  <div class="col-md-4">
    <div class="card mt-4">
      <div class="card-body text-center">
        <i class="fas fa-calendar-alt fa-3x mb-3 text-danger"></i>
        <h5 class="card-title">Attendance</h5>
        <p class="card-text">Track your attendance records.</p>
        <a href="#" class="btn btn-primary">View Attendance</a>
      </div>
    </div>
  </div>

  <!-- Resources Card -->
  <div class="col-md-4">
    <div class="card mt-4">
      <div class="card-body text-center">
        <i class="fas fa-folder fa-3x mb-3 text-secondary"></i>
        <h5 class="card-title">Resources</h5>
        <p class="card-text">Access study materials and resources.</p>
        <a href="#" class="btn btn-primary">View Resources</a>
      </div>
    </div>
  </div>

  <!-- Discussion Forums Card -->
  <div class="col-md-4">
    <div class="card mt-4">
      <div class="card-body text-center">
        <i class="fas fa-comments fa-3x mb-3 text-warning"></i>
        <h5 class="card-title">Discussion Forums</h5>
        <p class="card-text">Participate in course discussions.</p>
        <a href="#" class="btn btn-primary">Join Forum</a>
      </div>
    </div>
  </div>
</div>
   


    <!--  -->
  </div>

  <!-- Bootstrap JS and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
