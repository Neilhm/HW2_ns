<?php include('server.php') ?>
<?php require_once('autocheck.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.php" />
    <title>Recipes</title>
  </head>
  <body>
    
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
            
          <a class="nav-link" href="index.php?logout='1'" style="color: red;">
                   
                Logout</a>
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
    
    <main role="main">
   
      <section class="jumbotron text-center">
        <div class="container" id="imageBackground">
          <h1 class="jumbotron-heading">The 6 BEST Pizza Recipes</h1>
          <p class="lead text-muted">
            <div class="opacity-50"> </div>
            Better than delivery, every time! Here are the best pizza recipes, with top-rated pizza dough, sauces, and topping ideas galore.
            <br>
         <span align="center">Cook your way through all, and impress your whole family. Have fun!</span>
          </p>
        </div>
      </section>

      <div class="d-flex justify-content-center">
      <input type="button" class="btn btn-primary" onclick="sortList()" id="mybutton" value="Sort" />
</div>
    
      <ul class="list-group list-group-flush" id="id01">
     
    
     
        <div class="container">
          <div class="row">
          
          <li class="list-group-item">Margherita pizza:

  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
 
                <img
                src="images/italian.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">Margherita pizza (our favorite)
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <a href="ingredient.php">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View (working ingredients)
                      </button>
                    </a>
                    </div>
                    <small class="text-muted">30 mins</small>
                  </div>
                </div>
              </div>
            </div>
            </div>

  </li>

  <li class="list-group-item">Neapolitan Pizza:
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
              
                <img
                  src="images/nap.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">Neapolitan Pizza. 
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-muted">15 mins</small>
                    </div>
                </div>
              </div>
            </div>
</div>
             
  </li>

  <li class="list-group-item">New York-Style Pizza:
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
                <img
                 src="images/newyork.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">New York-Style Pizza.      
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-muted">19 mins</small>
                  </div>
                </div>
              </div>
            </div>
</div>
  </li>
 
  <li class="list-group-item">California Pizza:
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
                <img
                  src="images/California Pizza..jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">California Pizza.
                 
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-muted">90 mins</small>
                  </div>
                </div>
              </div>
</div>
  </li>
  
  <li class="list-group-item">Sicilian Pizza:
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
              <div class="card mb-4 box-shadow">
                <img
                 src="images/Sicilian Pizza..jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">Sicilian Pizza.
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-muted">31 mins</small>
                  </div>
                </div>
              </div>
            </div>
</div>
  </li>
 

  <li class="list-group-item">Chicago Pizza:
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                  src="images/chic.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">Chicago Pizza.
                   
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        View
                      </button>
                    </div>
                    <small class="text-muted">24 mins</small>
                  </div>
                </div>
              </div>
            </div>
</div>
  </li>
  </div>


            </div>
           
    
          </ul>

          <script>
function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    // Loop through all list items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* If next item is alphabetically lower than current item,
        mark as a switch and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}
</script>
   
    </main>
    <footer class="footer text-white pt-5 pb-4 bg-dark">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="text-center">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                Pizza El Balad
            </h5>
            <p>
              Shadi Salem - 318577277
             <br>
             Neil Hamza - 318373693
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
