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

      
      <input type="button" onclick="sortList()" id="mybutton" value="Sort" />
    
      <ul class="list-group list-group-flush" id="id01">
     
    
     
        <div class="container">
          <div class="row">
   
  <li class="list-group-item">
  <div class="d-flex justify-content-center">
  
  <div class="col-md-4">
   <div class="card mb-4 box-shadow">
 
                <img
                src="images/italian.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    <div id="sor">
                   Margherita pizza (our favorite)
                  </div>
            
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
</div>
  </li>

  <li class="list-group-item">
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
              
                <img
                  src="images/nap.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                  <div id="sor">
                    Neapolitan Pizza.
</div>
                    
                    
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

  <li class="list-group-item">
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
                <img
                 src="images/newyork.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                  <div id="sor">
                    New York-Style Pizza.
</div>
                    
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
 
  <li class="list-group-item">
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
                <img
                  src="images/California Pizza..jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                  <div id="sor">
                    California Pizza.
</div>
                 
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
  
  <li class="list-group-item">
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
              <div class="card mb-4 box-shadow">
                <img
                 src="images/Sicilian Pizza..jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                  <div id="sor">
                    Sicilian Pizza.
</div>
                   
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
 

  <li class="list-group-item">
  <div class="d-flex justify-content-center">
  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                  src="images/chic.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                  <div id="sor">
                    Chicago Pizza.

</div>
                   
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
            </div>

            </div>
            </div>
    
          </ul>
</div>
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
       <!--  <ul class="list-group list-group-flush" id="id01">
      <div class="album py-5 bg-light" >
      <div class="ss">
        <div class="container">
          <div class="row">
         

                <li class="list-group-item">Margherita pizza (our favorite)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                src="images/italian.jpg" height="250px"
                />
                <div class="card-body">
                  <p class="card-text">
                    <div id="sor">
                    Margherita pizza (our favorite).
                  </div>
                    
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
                  <div id="sor">
                    Neapolitan Pizza.
</div>
                    
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
                  <div id="sor">
                    Chicago Pizza.
</div>
                    <small> pizza with a thick crust that had raised edges, similar to a pie, and ingredients in reverse, with slices of mozzarella lining the dough followed by meat, vegetables, and then topped with a can of crushed tomatoes</small>
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
                  <div id="sor">
                    New York-Style Pizza.
</div>
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
                  <div id="sor">
                    Sicilian Pizza.
</div>
                    <small>also known as "sfincione," provides a thick cut of pizza with pillowy dough, a crunchy crust, and robust tomato sauce</small>
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
                  <div id="sor">
                    California Pizza.
</div>
                    <small>or gourmet pizza, is known for its unusual ingredients.<Br>a pizza with mustard, ricotta, pate, and red pepper</small>
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
        </div>
       
      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript">
       
        window.onload = function(){
document.getElementById("mybutton").onclick = sortID;
}
   var sortID = function () {
    var articles = $('div.row');
  articles.each((art_idx, el)=>{
    var art = $(el);
    var boxes = art.find('.col-md-4'); //Get the boxes that have the image and name

   
    boxes.detach(); //Remove the entries without losing their JS attributes
    boxes.sort((a,b)=>{return ($(b).find('.sor').text() < $(a).find('.sor').text())?1:-1;}); //Sort by the name in the h5 title

    var wrappers = art.find('.card-text'); //Get the rows
    var wrapper_idx = -1; //At the very first element, this will be incremented to index 0
    boxes.each((idx, box)=>{ //For each content box
        wrapper_idx++; //For each fourth content box, move to the next row
       
        $(box).appendTo($(wrappers[wrapper_idx])); //Add the content box into the current row
    });
});

};


              </script> -->
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
