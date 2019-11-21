<?php 

include('header.php');
include('nav-bar.php');
require_once ('validate-session-admin.php');

?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" >
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul class="pagination">
        <li><a href="<?php echo FRONT_ROOT ?>Home/ShowHome">Home</a></li>
        <li><a href="<?php echo FRONT_ROOT ?>Home/ShowAdminLobby">MenuAdmin</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<main class="d-flex align-items-left justify-content-left height-100" >
          <div class="content">
               <header class="text-center text-white" >
                    <h2>Agregar Cine</h2>
               </header>
              <form action="<?php echo FRONT_ROOT;?>Cinema/Add" method="post" class="login-form bg-dark-alpha p-5 text-white">
                   <div class="form-group">
                        <label for=""> Nombre </label>
                        <input type="text" name="cinemaName" class="form-control form-control-lg" placeholder="Ingresar nombre del Cine"required>
                   </div>
                   <div class="form-group">
                   <label for=""> Direccion </label>
                        <input type="text" name="address" class="form-control form-control-lg" placeholder="Direccion"required>
                   </div>
                 
                   <div class="form-group">
                        <label for="">Valor de ticket</label>
                        <input type="number" name="ticketValue" class="form-control form-control-lg" placeholder="Valor Ticket" required>
                   </div>
                   
                  
                   <button class="btn btn-dark btn-block btn-lg" type="submit"> Agregar Cine </button>
              </form>
         </div>
    </main>