<?php 
 include('header.php');
 include('nav-bar.php');
?>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('../images/demo/backgrounds/1.png');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Add</a></li>
        <li><a href="#">List - Remove</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
<main class="container clear"> 
    <div class="content"> 
      <div id="comments" >
        <h2>Cinema</h2>
        <form action="" method="post"  style="background-color: #EAEDED;padding: 2rem !important;">
        <ul class="home-sidelinks">
            <li><a class="smooth-link"  href="<?php echo FRONT_ROOT ?>User/ShowLogin">Login</a></li>
            <li><a class="smooth-link"  href="<?php echo FRONT_ROOT ?>Cinema/ShowCinemaView">Logintomovie</a></li>
           
            <li><a class="smooth-link" href="<?php echo FRONT_ROOT ?>User/SignIn">Sign in</a></li>
            <!--<li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li> -->
        </ul> <!-- end home-sidelinks -->

        
        </form>
      </div>
    </div>
  </main>
</div>
<!-- ################################################################################################ -->

<?php 
  include('footer.php');
?>