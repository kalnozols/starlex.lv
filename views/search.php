<!DOCTYPE html>
<html>
<?php include('./partials/head.php'); ?>
<?php include('./partials/loader.php'); ?>
<?php include('./partials/menu.php'); ?>
<div class="extended-menu-line"></div>
<body class='page'>

<?php include('./blocks/searchbox.php'); ?>

<section class="search-grid">    
        <div class="container bg">

          <?php for( $i= 1 ; $i <= 9 ; $i++ ): ?>
          <div class="col-md-4  col-sm-6">
             <div class="image-slider-wrap " data-aos="fade-down" data-aos-delay='0' >
                <a href="#" class="prev-img"></a>
                <a href="#" class="next-img"></a>
                <div class="image-wrap <?php echo "c".$i; ?>">
                  <div class="single-image"   style="background-image: url('../public/img/jaunie-cat.png');"  ></div>
                  <div class="single-image"   style="background-image: url('../public/img/majas-cat.png');"  ></div>
                  <div class="single-image"   style="background-image: url('../public/img/dzivokli-cat.png');"  ></div>
                </div>
                <div class="show-button">Apskatīt</div>

                <div class="featured-description" >
                  Rīga, Ilģuciems <br />
                  2 istabas <br />
                  <b>45'000 EUR </b>
                 </div>
            </div>
         </div>
         <?php endfor; ?> 
      </div>      
</section>



<?php include('./blocks/group-cat.php'); ?>

<section class="info-block bg-lightblue">
  <div class="white-middle-line md6 left"></div>      
        <div class="container">
                  <div class="col-md-6"></div>
           <div class="col-md-6">
            <div class="slogan" data-aos="fade-left">
               <b>Ja ir kādi jautājumi</b> tad droši raksti mums un jautā
            </div>
        </div>
      </div>  
</section>

<?php include('./blocks/kontakti.php'); ?>

<?php include('./partials/footer.php');  ?>
<?php include('./partials/scripts.php');  ?>


</body>
</html>