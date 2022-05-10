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
    <link rel="stylesheet" href="style.css" />
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
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                src="images/italian.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    Margherita pizza (our favorite).
                    <br>
                    <small>known for its ingredients representing the colours of the Italian flag. These ingredients include red tomato sauce, white mozzarella and fresh green basil. When all of these delicious flavours are combined on a hand-kneaded pizza base, a universally-adored pizza is created.</small>
                    
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <a href="ingredient.html">
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
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                  src="images/nap.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    Neapolitan Pizza.
                    <br>
                    <small>This delicious pie dates all the way back to 18th century in Naples, Italy. During this time, the poorer citizens of this seaside city frequently purchased food that was cheap and could be eaten quickly. Luckily for them, Neapolitan pizza was affordable and readily available through numerous street vendors.</small>
                  </p>
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
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                  src="images/chic.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    Chicago Pizza.
                    <br><small> pizza with a thick crust that had raised edges, similar to a pie, and ingredients in reverse, with slices of mozzarella lining the dough followed by meat, vegetables, and then topped with a can of crushed tomatoes</small>
                  </p>
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

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                 src="images/newyork.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    New York-Style Pizza.
                    <br><small>Originally a variation of Neapolitan-style pizza, the New York slice has taken on a fame all its own, with some saying its unique flavor has to do with the minerals present in New York’s tap water supply</small>
                  </p>
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
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                 src="images/Sicilian Pizza..jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    Sicilian Pizza.
                    <br><small>also known as "sfincione," provides a thick cut of pizza with pillowy dough, a crunchy crust, and robust tomato sauce</small>
                  </p>
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
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                  src="images/California Pizza..jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    California Pizza.
                    <br><small>or gourmet pizza, is known for its unusual ingredients.<Br>a pizza with mustard, ricotta, pate, and red pepper</small>
                  </p>
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
          </div>
        </div>
      </div>
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
