
<?php include('server.php') ?>
<?php if (isset($_SESSION['username'])) : ?>
      <?php echo "<script type='text/javascript'>
      alert('You are already logged-in')
      window.location.replace('index.php');
      </script>";  ?><?php endif ?>
      

        
        
<!DOCTYPE html>
<html>
  <head>
  
    <link rel="stylesheet" href="style.php" />
    <title>Login</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
  </head>
  <body id="withBackground" style=" background-color: rgba(0, 0, 0, 0.329);">
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
    
    <div class="wrapper" id="loginForm">
      
    <form method="post" action="login.php">
    <?php include('errors.php'); ?>
      <div class="logo">
        <img src="images/login.png" />
      </div>
      <div class="text-center mt-4 name">LOG IN</div>
      <form class="p-3 mt-3" >
        <div class="form-field d-flex align-items-center">
          <span class="far fa-user"></span>
          <input
            type="text"
            name="username"
            id="userName"
            placeholder="Username"
            required
          />
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="fas fa-key"></span>
          <input
            type="password"
            name="password"
            id="pwd"
            placeholder="Password"
            required
          />
        </div>

        <button class="btn mt-3" type="submit" name="login_user"> Login</button>

        <div class="field-group">
	<input type="checkbox" name="remember" id="remember" 
    <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
		<label for="remember-me">Remember me</label>
	</div>
        
      </form>
      <div class="text-center fs-6">
        <a href="#">Forgot your password?</a> Or
        <a href="register.php">Register</a>
      </div>
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
