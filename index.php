<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="project.css">
  <title>Your Page Title</title>
 

</head>
<body>

  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <h4 class="link-secondary" href="#" id="mo">WELCOME</h4>
      </div>
      <div class="col-4 text-center">
        <img src="pngwing.com.png" alt="Logo" class="logo-img" id="logo" style="width: 180px; height: 80px;">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="#" onclick="showLoginModal()" style="margin-right: 10px;">Log In</a>
      </div>
    </div>
  </header>

  <!-- Login Modal -->
  
  <div class="modal" id="loginModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">Log In</h6>
          <button type="button" class="close" aria-label="Close" onclick="hideLoginModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h5 class="navbar-brand" href="#" style="color: #161493;">PolicyPilot</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #6ba576; color: black;">
        <ul class="navbar-nav nav-fill w-100" style="color: #000000;">
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="toggleDashboard()">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="profile()">Profile Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="appointment()" >Appointment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="claim()">Claim Submission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="payment()">Payments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="FAQ()">FAQ</a>
        </li>
        </ul>
    </div>
</nav>
<div class="container mt-4" id="policyDashboard" style="display: none;">
 <center> <h2 style="text-align: center; margin-bottom: 50px; color: #1e7a7e;">Policy Dashboard</h2></center>

  <!-- Policy Cards -->
  <div class="row">
      <div class="col-md-4">
          <div class="policy-card">
              <h5>Policy #12345</h5>
              <p><strong>Coverage:</strong> $100,000</p>
              <p><strong>Term:</strong> 1 Year</p>
              <p><strong>Status:</strong> Active</p>
          </div>
      </div>
      <div class="col-md-4">
          <div class="policy-card">
              <h5>Policy #67890</h5>
              <p><strong>Coverage:</strong> $150,000</p>
              <p><strong>Term:</strong> 2 Years</p>
              <p><strong>Status:</strong> Expired</p>
          </div>
      </div>
      <div class="col-md-4">
          <div class="policy-card">
              <h5>Policy #54321</h5>
              <p><strong>Coverage:</strong> $75,000</p>
              <p><strong>Term:</strong> 6 Months</p>
              <p><strong>Status:</strong> Active</p>
          </div>
      </div>
  </div>
</div>


<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4">POLICY PILOT</h1>
    <p class="lead my-3">Welcome to a revolution in insurance management. Our platform combines innovation and simplicity to redefine your protection journey. Experience the ease of policy handling, instant updates, and comprehensive coverage. Your peace of mind is our priority. Discover a new era in insurance with us – where security meets convenience, and your needs drive every decision. Explore our user-friendly interface, cutting-edge features, and customer-centric approach. Trust in a system that evolves with you, ensuring your assets and well-being are safeguarded at every step. Embrace the future of insurance management, tailored for you, by us.</p>
    
  </div></div>


  <div class="row">
    <div class="col-md-6">
      <div class="card mb-3">
        <img class="card-img-top" style="height: 350px;" src="pngwing.com (1).png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Car Insurance</h5>
          <p class="text-muted">What is car insurance?</p>
          <p class="card-text">What Is Car Insurance? Car insurance is effectively a contract between yourself and an insurance company in which you agree to pay premiums in exchange for protection against financial losses stemming from an accident or other damage to the vehicle.</p>
          
        </div>
      </div>
    </div>
  
    <div class="col-md-6">
      <div class="card mb-3">
        <center><img class="card-img-top" style="height: 365px; width: 75%; margin-top: 10px;" src="pngwing.com (2).png" alt="Card image cap"></center>
        <div class="card-body">
          <h5 class="card-title">Health Insurance</h5>
          <p class="text-muted">What is health insurance?</p>
          <p class="card-text">Health insurance is a contract between a company and a consumer. The company agrees to pay all or some of the insured person's healthcare costs in return for payment of a monthly premium.</p>
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-3">
        <img class="card-img-top" style="height: 350px;" src="pngwing.com (4).png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">&copy; Home Insurance</h5>
          <p class="text-muted">What is home insurance?</p>
          <p class="card-text">Home insurance provides you with financial protection if your home or its contents is unexpectedly damaged. Buildings insurance helps cover the costs of any unavoidable harm to your home, like fire or flood damage, while contents insurance can help in replacing possession's if you're burgled or they get damaged.</p>
          
        </div>
      </div>
    </div>
  
    <div class="col-md-6">
      <div class="card mb-3">
        <center><img class="card-img-top" style="height: 365px; width: 75%; margin-top: 10px;" src="pngwing.com (3).png" alt="Card image cap"></center>
        <div class="card-body">
          <h5 class="card-title">Life Insurance</h5>
          <p class="text-muted">What is life insurance?</p>
          <p class="card-text">Life Insurance can be defined as a contract between an insurance policy holder and an insurance company, where the insurer promises to pay a sum of money in exchange for a premium, upon the death of an insured person or after a set period.</p>
          
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <p>&copy; PolicyPilot. All rights reserved.2024 Thank you.</p>
   
  </footer>
  <!-- Policy Dashboard Section -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="project.js"></script>
  <script src="login.js"></script>

  <script>
    
  function payment() {
      window.location.href = 'Payment.html';
}

function profile() {
            // Assuming 'second-page.html' is the second page you want to navigate to
            window.location.href = 'profile_management.html';
        }
        function appointment() {
      window.location.href = 'appointment.html';
}
function claim() {
            // Assuming 'second-page.html' is the second page you want to navigate to
            window.location.href = 'claim.html';
        }
        function FAQ()
        {
          window.location.href = 'FAQ.html';
        }
  </script>

</body>
</html>
