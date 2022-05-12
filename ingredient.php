

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <title>ingredient</title>
    <style>
      .hidden {
        display: none;
      }
    </style>
  </head>
  <body>
    
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark gap-3">
        <span style="color:grey; font-size: large;">Pizza El Balad</span>

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
    
    <div class="container"></div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <div class="recepie_details_area">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-6 col-md-6">
                  <div class="recepies_thumb">
                      <img src="images/italian.jpg" alt="">
                  </div>
              </div>
              <div class="col-xl-6 col-md-6">
                  <div class="recepies_info">
                      <h3>Pizza margherita <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-share"></i>
                      </button></h3>
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              
                              <h5 class="modal-title" id="exampleModalLabel">Share To A Friend!</h5>
                              
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h6>Enter Your Username</h6>
                              <input
                              type="text"
                              name="userName" 
                              id="userName"
                              placeholder="Username"
                            />
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">SHARE</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Pizza margherita, as the Italians call it, is a simple pizza hailing from Naples. When done right, margherita pizza features a bubbly crust, crushed San Marzano tomato sauce, fresh mozzarella and basil, a drizzle of olive oil, and a sprinkle of salt. That is all..</p>

                      <div class="resepies_details">
                          <ul>
                              <li><p><strong>Rating</strong> : 5 stars<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </p></li>
                              <li><p><strong>Time</strong> : 30 Mins </p></li>
                              <li><p><strong>Category</strong> : Main Dish </p></li>
                              <li><p><strong>Tags</strong> :  Dinner, Main, Chicken, Dragon, Phoenix </p></li>
                          </ul>
                      </div>
                      <div class="links">
                          <a href="#"> <i class="fa fa-facebook"></i> </a>
                          <a href="#"> <i class="fa fa-twitter"></i> </a>
                          <a href="#"> <i class="fa fa-linkedin"></i> </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-12">
                  <div class="recepies_text">
                      <p><h3>INGREDIENTS:</h3>.</p>
                      <script>
                      function hello(i){
    var ele = document.getElementsByClassName("myelement"+i);
    for (var i in ele)
	ele[i].style.textDecoration='line-through'
    
} </script>
                      <p> <ul>
                        <li><p class="myelement1">1 batch easy whole wheat pizza dough or 1 pound store-bought pizza dough
                        <input type="checkbox" name="Check" onclick="hello(1)">
             
                        </p>
                        </li>
                        <li><p class="myelement2">1 large can (28 ounces) whole San Marzano tomatoes
                        <input type="checkbox" name="Check" onclick="hello(2)">
                        </p></li>
                        <li><p class="myelement3">
                        12 ounces (dry weight) ovoline-type mozzarella or other fresh mozzarella balls, ideally water-packed 
                        <input type="checkbox" name="Check" onclick="hello(3)">
                      </p></li>
                        <li><p class="myelement4">
                        Handful of fresh basil, thinly sliced plus small leaves
                        <input type="checkbox" name="Check" onclick="hello(4)"></p></li>
                    </ul>.</p>
                      <p><h2>INSTRUCTIONS:</h2></p>
                      <p class="myelement5">1. Preheat the oven to 500 degrees Fahrenheit with a rack in the upper third of the oven. If you’re using a baking stone or baking steel, place it on the upper rack. Prepare dough through step 5.
                      <input type="checkbox" name="Check" onclick="hello(5)">
                      </p>
                      <p class="myelement6">2. Place a medium mixing bowl in the sink and pour the canned tomatoes into the bowl, juices and all. Crush the tomatoes by hand. Spread about ¾ cup of the tomato sauce evenly over each pizza, leaving about 1 inch bare around the edges.
                      <input type="checkbox" name="Check" onclick="hello(6)">
                      </p>
                      <p class="myelement7">3. If your mozzarella is packed in water, drain off the water and gently pat the mozzarella dry on a clean tea towel or paper towels. If you’re working with large mozzarella balls, tear them into smaller 1-inch balls. Distribute the mozzarella over the pizza, concentrating it a bit more in the center of the pizza, as it will melt toward the edges.
                      <input type="checkbox" name="Check" onclick="hello(7)">
                      </p>
                      <p class="myelement8">4. Bake pizzas individually on the top rack until the crust is golden and the cheese is just turning golden, about 10 to 12 minutes (or significantly less, if you’re using a baking stone/steel—keep an eye on it).
                      <input type="checkbox" name="Check" onclick="hello(8)">
                      </p>
                      <p class="myelement9">5. Top each pizza generously with fresh basil, followed by a light back-and-forth drizzle of olive oil, a sprinkling of salt, and red pepper flakes, if you wish. Slice and enjoy. Leftover pizza will keep well in the refrigerator for up to 4 days.
                      <input type="checkbox" name="Check" onclick="hello(9)">
                      </p>
                  </div>
              </div>
          </div>
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