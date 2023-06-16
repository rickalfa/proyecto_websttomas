<!DOCTYPE html>
<html>
 <head>
 <!-- #Head region -->
  <title> Homa Page  </title>

   <link rel="stylesheet" href="../estilos/estilosbase.css">
   <?php  include("head.php");     ?> 

<!-- #Head endregion -->

 </head>

 <!-- #Body region -->
 <body>

 <!-- #NavBar region --> 
 <?php  include("navbar.php");     ?> 
 <!-- #NavBar endregion -->

<h1> Contacto </h1>

 <!-- # container-fluid region -->
<div class="container-fluid">
   <div class="col-lg-12">
     <!-- # Form region -->

     <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNombre">Nombre</label>
              <input type="text" class="form-control" id="inputNombre" placeholder="Nombre ">
            </div>
            <div class="form-group col-md-6">
              <label for="inputApellido">Apellido</label>
              <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
  
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
  
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Ciudad</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
   

            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
  
          <button type="button" class="btn btn-secondary" > Limpiar Campos</button>
  
          <button type="submit" class="btn btn-primary">Sign in</button>
     </form>
     <!-- # Form endregion -->


   </div>    
 </div>
 <!-- # container-fluid endregion -->


<!-- # Footer region -->

<?php  include("footer.php");     ?> 

<!-- # Footer endregion -->




 </body>
<!-- # Body endregion -->






</html>




















