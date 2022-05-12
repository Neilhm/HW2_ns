

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
    <link rel="stylesheet" href="style.php" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Register</title>
  </head>
  <body id="withBackground">
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

        <button class="btn mt-3" type="submit " name="reg_user">Register</button>
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
