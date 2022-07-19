<?php
include('navbar.php');
include('server.php');


?>
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

                  <div class="container mt-5">
                    
           <?php
        while($row = $result->fetch_assoc()) {?>
               <?php $user1 = $_SESSION['username'];
               
               $user2 = $row['writtenBy'];
               $Title = $row['title'];
               ?>
               
              
                      <h3><?php echo $row['title'];?><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-share"></i>
                      </button><?php if($user1==$user2){?>
                        <form method="post">
                        <button class="btn btn-danger" name="deleterec">Delete</button>
                      </form>
                     <?php }?> </h3>
                    
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
             
                              <h5 class="modal-title" id="exampleModalLabel">Share To A Friend!</h5>
                              
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h6>Select your friend username</h6>
              
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
                      <p>
                      <div class="resepies_details">
                          <ul>
                            <li> <p><?php echo $row['content'];?></p></li>
                              <li><p><strong>Date</strong> : <?php echo $row['dateT']; ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </p></li>
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
          </div>
          <div class="row">
              <div class="col-xl-12">
                  <div class="recepies_text">
                  <?php }?>
                      <p><h3>INGREDIENTS:</h3>.</p>
                      <p> <ul>
                      <div class = "row justify-content-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ingredient</th>
                                    <th>Check</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                      <?php while($row= $IngredientResult ->fetch_assoc()){
                      
                        
                        ?>
                        <tr>
                                    <td>
                                    <?php echo $row['ingredient'];?>
                                    </td>
                                    <td><input type="checkbox" class="ch1" name="Check" ></td>
                                    <td>
                                       <?php if($user1 == $user2){?>
                                        <form action="server.php?recipe=<?php echo $row['recipe']?>&ingredient=<?php echo $row['ingredient']?>" method="post">
                                       <button type="submit" class="btn btn-danger" name="deleteBtnIngredient">Delete</button>
                                        </form>   

                                        <form action="server.php?Editrecipe=<?php echo $row['recipe']?>&ingredient=<?php echo $row['ingredient']?>" method="post">
                                        <button type="submit" class="btn btn-info" name="EditIngredientBtn">Edit</button>
                                       
                                    </form>
                                        <?php }?> 
                                    </td>
                                </tr>
                                <?php }?>
                                
                        </table>

                        <?php if($user1==$user2){?>
                        <div class="row justify-content-center">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label> Edit Ingredient Panel </label>
                                    <input type="text" id="addInput" name="EditIngredient" value="<?php echo $_GET['curr'] ?>" placeholder="Please Select an Ingredient from the table first" class="form-control"></input>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="saveBtnEditIngredient" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                       

                        <?php if($user1==$user2){?>
                        <div class="row justify-content-center">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label> Ingredient </label>
                                    <textarea type="text" id="addInput" name="Ingredient" placeholder="Ingredient" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="saveBtnIngredient" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                       


                        <p><h3>Methods:</h3>.</p>
                     
                      <p> <ul>
                      

                        <div class = "row justify-content-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>MethodName</th>
                                    <th>Check</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <?php while($row= $MethodResult ->fetch_assoc()){?>
                                <tr>
                                    <td>
                                    <?php echo $row['method'];?>
                                    </td>
                                    <td><input type="checkbox" class="ch1" name="Check" ></td>
                                    <td>
                                       <?php if($user1 == $user2){?>
                                        <form action="server.php?recipe=<?php echo $row['recipe']?>&method=<?php echo $row['method']?>" method="post">
                                       <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
                                        </form>   

                                        <form action="server.php?EditMethod=<?php echo $row['recipe']?>&method=<?php echo $row['method']?>" method="post">
                                        <button type="submit" class="btn btn-info" name="EditMethodBtn">Edit</button>
                                       
                                    </form>
                                        <?php }?>
                                    </td>
                                </tr>
                                <?php }?>

                        </table>

                        
                        <?php if($user1==$user2){?>
                        <div class="row justify-content-center">
                        <form action="" method="POST">
                                <div class="form-group">
                                    <label> Edit Method Panel </label>
                                    <input type="text" id="addInput" name="EditMethod" value="<?php echo $_GET['currM'] ?>" placeholder="Please Select a Method from the table first" class="form-control"></input>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="saveBtnEditMethod" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                       


                        <?php if($user1==$user2){?>
                        <div class="row justify-content-center">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label> Method </label>
                                    <textarea type="text" id="addInput" name="Method" placeholder="Method" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="saveBtnMethod" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                            <?php }?>
                        </div>

          
                      <script>
                      function hello(i){
                        
                        
    var ele = document.getElementsByClassName("myelement"+i);
    var check = document.getElementsByClassName("ch"+i); 
                       
    for (var i in ele) {
  
        if (check[i].checked){
      ele[i].style.textDecoration='line-through'
        }
        else{
          ele[i].style.textDecoration='none'
        }
    }
}


</script>