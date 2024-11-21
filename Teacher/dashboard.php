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
      <img src="https://via.placeholder.com/100" alt="Profile Picture">
      <h5>John Doe</h5>
      <p>Admin</p>
    </div>
    <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="#"><i class="fas fa-chalkboard-teacher"></i> Courses</a>
    <a href="#"><i class="fas fa-users"></i> Students</a>
    <a href="#"><i class="fas fa-file-alt"></i> Assignments</a>
    <a href="#"><i class="fas fa-cogs"></i> Settings</a>
    <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Content -->
  <div class="content">
    <!--  -->
    <h2>Welcome to the Learning Management System</h2>
    <p>This is your dashboard where you can manage all LMS functionalities.</p>
    
    <!-- Example Cards -->
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Courses</h5>
            <p class="card-text">Manage the courses offered in the LMS.</p>
            <a href="#" class="btn btn-primary">Go to Courses</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Assignments</h5>
            <p class="card-text">Manage the assignments for each course.</p>
            <a href="#" class="btn btn-primary">Go to Assignments</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Students</h5>
            <p class="card-text">View and manage student profiles.</p>
            <a href="#" class="btn btn-primary">Go to Students</a>
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
