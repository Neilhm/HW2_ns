<?php
include "server.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Create New Recipe</title>
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
    <div class="container mt-5">
         <form method="post">
    </div>

    <input type="text" name="writtenBy"  class="form-control bg-dark text-white my-3
              text-center" placeholder="<?php echo $_SESSION['username']; ?>" readonly>

    <input type="text" name="date"  class="form-control bg-dark text-white my-3
              text-center" placeholder="<?php echo date("Y-m-d"); ?>" readonly>
             <input type="text" name="title"  placeholder="Recipe Name"  class="form-control bg-dark text-white my-3
              text-center" id="RecipeName" required>
              <div class="titleHolder">
              <textarea name="content" rows="5" class="form-control bg-dark text-white my-3" required></textarea>
</textarea>

<button name="new_recipe" class="btn btn-dark">Add Recipe</button>
</form>
         
    <!-- Bootstrap JS -->

 
    <script>
        const toggleBtn = document.querySelector('#toggleBtn');
const divList = document.querySelector('.listHolder');
addBtn.addEventListener('click', () => {
    const name = document.getElementById('RecipeName').value;
    if (name === undefined || name == null || name.length <= 0){
        alert('Enter Recipe Name First!');
    }
    else{
  addLists();
    }
});

function addLists() {
  if (addInput.value === '') {
    alert('Enter the list name please!!!');
  } else {
    const recipeName= document.getElementById('RecipeName').value;
    const ul = divList.querySelector('ul');
    const li = document.createElement('li');
    li.classList.add("pizza");
    li.innerHTML = addInput.value;
    addInput.value = '';
    ul.appendChild(li);
    createBtn(li);
   

  }
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
         </body>
</html>