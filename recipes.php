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
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  </head>
  <body>
  <script>
      function sortListdate(){
        
        
  // Now sort them

  var board = $("#hi");
  var boards = board.children('.card-date').detach().get();

  boards.sort(function(a, b) {
    return new Date($(a).data("date")) - new Date($(b).data("date"));
  });

  board.append(boards);

};


    </script>
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
    <?php if(isset($_REQUEST['info'])){?>
      <?php if (($_REQUEST)['info'] == "added"){?>
      <div class="alert alert-success" role="alert">
        Successfully Added
      </div>
   <?php }?>
   <?php } ?>
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
        
        
      <input type="button" class="btn btn-primary" onclick="sortList()" id="mybutton" value="Sort A-Z/Z-A" />
      <a href="create.php" class="btn btn-outline-dark">Add A new Recipe</a>
      <form method="post" >
      <button name="sortdate" class="btn btn-primary" id="mybutton"> Sort By Date</button>
      </form>
</div>

<div class="col-md-3"></div>
	<div class="col-md-6 well">

		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			
			<form class="form-inline" method="POST" action="recipes.php">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Search here..." name="keyword"  value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"
           />
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search">Search Pizzas!</button>
					</span>
				</div>
			</form>
        
			<?php
				if(ISSET($_POST['search'])){
          
					$keyword = $_POST['keyword'];
			?>
      <div class="col-4d-flex justify-content-center align-items-center">
				<h2>Result</h2>
				<hr style="border-top:2px dotted #ccc;"/>
				<?php
					require 'server.php';
					$query = mysqli_query($db, "SELECT * FROM `recipedata` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
        <ul id="id01">
				 <?php foreach($query as $q){?>
          <div class="hi">
    <div class="col-4d-flex justify-content-center align-items-center">
        <div class="card text-white bg-dark mt-5">
             <div class="card-body justify-content-center text-center" style="width:18 rem;">
                  <h5 class="card-title"><?php echo $q['title'];?></h5>
                  <p class="card-text"><?php echo$q['content'];?></p>
                  <p class="card-text"><?php echo$q['writtenBy'];?></p> 
                  <p class="card-date"><?php echo$q['dateT'];?></p>
                  <a href="view-ingredient.php?title=<?php echo $q['title'];?>&curr=&currM=" class="btn btn-light"> Read More<span class="text-danger">&rarr;
                  </span></a>
         </div>
        </div>
       </div>

    </div>
         </br>
<?php }?>
         </ul>
				<?php
					}
				?>
			</div>
      
			<?php
				}
			?>
		</div>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" required="required"/>
							</div>
							<div class="form-group">
								<label>Content</label>
								<textarea class="form-control" style="resize:none; height:250px;" name="content" required="required"></textarea>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>


     
     
    
     
   <div class="test">
    <?php
    
 
    if(ISSET($_POST['sortdate']) || !isset($_POST['search']) ){
    
    foreach($sortq as $q){?>
    
    
    <div class="hi">
         <div class="Temp col-4d-flex justify-content-center align-items-center"  >
             <div class="card text-white bg-dark mt-5">
                  <div class="card-body"style="width:18 rem;">
                  <h5 class="card-title"><?php echo $q['title'];?></h5>
                  <p class="card-text"><?php echo$q['content'];?></p>
               <p class="card-text"><?php echo$q['writtenBy'];?></p> 
               <p class="card-date" data-date="<?php echo$q['dateT']?>"><?php echo$q['dateT'];?></p>
              
                       <a href="view-ingredient.php?title=<?php echo $q['title'];?>&curr=&currM=" class="btn btn-light"> Read More<span class="text-danger">&rarr;

                       </span></a>
    </p>
    </div>
             </div>
            </div>
    </div></div>
         </div>
    <?php }}?>
    <br>
    
        <!-- <div class="container">
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
           
    
          </ul> -->

          <script>
            var flag = true;
function sortList() {
 if (flag == true){
  flag = false;
    
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = document.getElementsByClassName("hi");
    // Loop through all list items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() <b[i + 1].innerHTML.toLowerCase()) {
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
 else{
  flag=true;
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = document.getElementsByClassName("hi");
    // Loop through all list items:
    for (i = 0; i<(b.length - 1); i++) {
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

}
</script>


<script>
            var flag = true;
function sortListdate() {
 if (flag == true){
  flag = false;
    
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = document.getElementsByClassName("hi");
    // Loop through all list items:
    for (i = 0; i < (b.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() <b[i + 1].innerHTML.toLowerCase()) {
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
 else{
  flag=true;
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    b = document.getElementsByClassName("hi");
    // Loop through all list items:
    for (i = 0; i<(b.length - 1); i++) {
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
