

<?php include('server.php') ?>
<?php if (isset($_SESSION['username'])) : ?>
      <?php echo "<script type='text/javascript'>
      alert('You are already logged-in please logout to register')
      window.location.replace('index.php');
      </script>";  ?><?php endif ?>
      

<!DOCTYPE html>
<html lang="en">
  <head>
 
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  
    <link rel="stylesheet" href="style.php" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <title>Register</title>
  </head>
  <body id="withBackground">
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark gap-3">
      <span style="color: grey; font-size: large">Pizza El Balad</span>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#toggleMobileMenu"
        aria-controls="toggleMobileMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="toggleMobileMenu">
        <ul class="navbar-nav ms-auto text-center">
        <li>
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li>
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li>
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li>
            <a class="nav-link" href="recipes.php">Recipes</a>
          </li>
        </ul>
      </div>
    </nav>
  
    <div class="wrapper" id="RegisterForm" >
    <form action="register.php" method="post">
    <?php include('errors.php'); ?>
  
      <div class="text-center mt-4 name Headers">REGISTER</div>

      <form class="p-3 mt-3" >
        <div class="form-field d-flex align-items-center">
          <span class="far fa-user"></span>
          <input type="email" name="email" placeholder="Email" required 
          value="<?php echo $email; ?>"
          >
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="far fa-user"></span>
          <input
            type="text"
            name="username"
            id="userName"
            placeholder="Username"
            required
            value="<?php echo $username; ?>"
            
          />
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="fas fa-key"></span>
          <input
            type="password"
            name="password_1"
            id="pwd"
            placeholder="Password"
            required
          />
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="fas fa-key"></span>
          <input
            type="password"
            name="password_2"
            id="pwd"
            placeholder="Confirm Password"
            required
            
          />
        </div>

       
        <div class="col-xl-6 col-md-6">
        <div>
        <button type="button" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Register
                      </button>
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              
                              <h5 class="modal-title" id="exampleModalLabel">Share To A Friend!</h5>
                              
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!-- <h6>Verify your email</h6>
                              <input
                              type="text"
                              name="email" 
                              id="email"
                              placeholder="Username"
                            /> -->
                            </div>
                            <div class="modal-footer">
                            <button class="btn mt-3" type="submit " name="reg_user">Verify</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             
                            </div>
                          </div>
                        </div>
</div>
                      </div>
</div>

</div>
      </form>
      <div class="text-center fs-6">Join Us</div>
    </div>
    <footer class="footer text-white pt-5 pb-4 bg-dark">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="text-center">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Pizza El Balad
            </h5>
            <p>
              Shadi Salem - 318577277
              <br />
              Neil Hamza - 318373693
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
