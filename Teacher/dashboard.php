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
    <a href="#"><i class="fas fa-chalkboard-teacher"></i> Courses</a>
    <a href="#"><i class="fas fa-users"></i> Students</a>
    <a href="#"><i class="fas fa-file-alt"></i> Assignments</a>
    <a href="#"><i class="fas fa-cogs"></i> Settings</a>
    <a href="../php/log-out.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Content -->
  <div class="content">
    <!--  -->
   <h1>Welcome <?php echo "$Name" ?></h1>
   
    
   <!-- Example Cards -->
<div class="row">
  <!-- Courses Card -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="fas fa-book fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Courses</h5>
        <p class="card-text">Manage the courses offered in the LMS.</p>
        <a href="#" class="card-button">Go to Courses</a>
      </div>
    </div>
  </div>

  <!-- Assignments Card -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="fas fa-tasks fa-3x mb-3 text-success"></i>
        <h5 class="card-title">Assignments</h5>
        <p class="card-text">Manage the assignments for each course.</p>
        <a href="#" class="card-button">Go to Assignments</a>
      </div>
    </div>
  </div>

  <!-- Students Card -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="fas fa-user-graduate fa-3x mb-3 text-info"></i>
        <h5 class="card-title">Students</h5>
        <p class="card-text">View and manage student profiles.</p>
        <a href="#" class="card-button">Go to Students</a>
      </div>
    </div>
  </div>

  <!-- Grades Card -->
  <div class="col-md-4">
    <div class="card mt-4">
      <div class="card-body text-center">
        <i class="fas fa-chart-bar fa-3x mb-3 text-warning"></i>
        <h5 class="card-title">Grades</h5>
        <p class="card-text">Input and manage student grades.</p>
        <a href="#" class="card-button">Go to Grades</a>
      </div>
    </div>
  </div>

  <!-- Attendance Card -->
  <div class="col-md-4">
    <div class="card mt-4">
      <div class="card-body text-center">
        <i class="fas fa-calendar-check fa-3x mb-3 text-danger"></i>
        <h5 class="card-title">Attendance</h5>
        <p class="card-text">Track and manage class attendance.</p>
        <a href="#" class="card-button">Go to Attendance</a>
      </div>
    </div>
  </div>

  <!-- Resources Card -->
  <div class="col-md-4">
    <div class="card mt-4">
      <div class="card-body text-center">
        <i class="fas fa-folder-open fa-3x mb-3 text-secondary"></i>
        <h5 class="card-title">Resources</h5>
        <p class="card-text">Upload and manage teaching materials.</p>
        <a href="#" class="card-button">Go to Resources</a>
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
