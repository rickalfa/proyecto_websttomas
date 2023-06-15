<!DOCTYPE html>
<html>
 <head>
 <!-- #Head region -->
  <title> register Page  </title>
   <link rel="stylesheet" href="../estilos/estilosbase.css">

   <?php  include("head.php");     ?> 

<!-- #Head endregion -->

 </head>

 <!-- #Body region -->
 <body>
 <?php  include("navbar.php");     ?>
    <h1> Register Page </h1>
   
     <!-- #Form Register region -->
    <section>
      <div class="container">
         <form method="post" action="../controller/request.php">
            <div class="form-group row">
               <label for="inputName" class="col-sm-1-12 col-form-label"> Name</label>
               <div class="col-sm-1-12">
                  <input type="text" class="form-control" name="inputName" id="inputName" placeholder="NickName">
               </div>

               <label for="inputEmail" class="col-sm-1-12 col-form-label">Email </label>
               <div class="col-sm-1-12">
                  <input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder=" Email">
               </div>

               <label for="inputPassword" class="col-sm-1-12 col-form-label"> Password</label>
               <div class="col-sm-1-12">
                  <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="">
               </div>

               <label for="inputPasswordConfirm" class="col-sm-1-12 col-form-label"> Password</label>
               <div class="col-sm-1-12">
                  <input type="password" class="form-control" name="inputPasswordConfirm" id="inputPasswordConfirm" placeholder="">
               </div>



            </div>
            <fieldset class="form-group row">
               <legend class="col-form-legend col-sm-1-12">Group name</legend>
               <div class="col-sm-1-12">
                  
               </div>
            </fieldset>
            <div class="form-group row">
               <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Register </button>
               </div>
            </div>
         </form>
      </div>
     


    </section>
    <!-- #Form Register region -->


 </body>
<!-- # Body endregion -->
  




<!-- # Footer region -->

<?php  include("footer.php");     ?> 

<!-- # Footer endregion -->






</html>




















