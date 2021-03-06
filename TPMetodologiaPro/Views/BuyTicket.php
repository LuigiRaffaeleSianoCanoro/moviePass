<?php

include('header.php');
include('nav-bar.php');
require_once('validate-session.php');

use DAO\CinemaDAODB as CinemaDAODB;

$repo = new CinemaDAODB();
$cinema = $repo->GetCinemaById($_SESSION['cinemaElect']);

?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" >
     <div class="overlay">
          <div id="breadcrumb" class="clear">
               <ul class="pagination">
                    <li><a href="<?php echo FRONT_ROOT ?>Home/ShowHome">Pagina inicial</a></li>
                    <li><a href="<?php echo FRONT_ROOT ?>Home/ShowUserLobby">Menu del Usuario</a></li>
               </ul>
          </div>
     </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content text-white">
          <header class="text-center">
               <h2>FINALIZA TU OPERACIÓN</h2>
          </header>
          <?php
          $now = date('l');
          if (($_SESSION['cant'] > 2)  && ($now = 'Tuesday') || ($now == 'Wednesday ')) {
               $newPrice = ($_SESSION['cant'] * $cinema->getTicketValue()) * 0.75;
               $_SESSION['newPrice'] = $newPrice;
               ?><p>El costo Total c/descuento del 25% es de: $<?php echo $newPrice; ?></p><?php
                                                                                               } else {
                                                                                                    ?>
               <p>El costo Total es de: $<?php echo ($_SESSION['cant'] * $cinema->getTicketValue()); ?></p>
          <?php  } ?>
          <form action="<?php echo FRONT_ROOT; ?>Ticket/BuyTicket" method="post" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group text-dark">
                    <select name="card" id="">
                         <option value="Visa Credito">Visa Credito</option>
                         <option value="Visa Debito">Visa Debito</option>
                         <option value="MasterCard">MasterCard</option>
                         </option>
                    </select>
               </div>
               <div class="form-group">
                    <label for=""> Numero de tarjeta </label>
                    <input type="number" name="card_number" class="form-control form-control-lg" placeholder="Numero de tarjeta" required>
               </div>
               <div class="form-group">
                    <label for=""> Numero de seguridad </label>
                    <input type="number" name="card_security_number" class="form-control form-control-lg" placeholder="Numero de seguridad" max="999" required>
               </div>
               <div class="form-group">
                    <br>
                    <input type="radio" name="isConfirm" class="form-control form-control-lg" required>
                    Acepto Términos y condiciones. Una vez realizada la compra,la transacción no puede ser revertida.<br>
                    Recuerde que al retirar sus entradas deberá contar con el DNI.
               </div>


               <button class="btn btn-dark btn-block btn-lg" type="submit"> Comprar! </button>

          </form>
     </div>
</main>