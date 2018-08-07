<!DOCTYPE html>
<html>
<?php include('views/partials/head.php'); ?>
<?php include('views/partials/loader.php'); ?>
<?php include('views/partials/menu.php'); ?>
<body class='group'>

<section class="group-slider-block">
      <div class="slogan" data-aos="fade-right">
           <div class="main-slogan"> Ideālas mājas <br /> Jūsu ģimenei! </div>
           <div class="sub-slogan"> Tepat centrā ar stāvvietu un citiem labumiem divās rindās!</div>
      </div>
    <div class="slide">        
      <div class="image-wrap" id="animated-thumbnials">     
        <img src="./public/img/group-bg.png" />
    </div>
    </div>
</section>


<?php include('views/blocks/group-cat.php'); ?>

<section class="wrap info-block bg-lightblue">
    <div class="wrap">     
        <div class="container">
                  <div class="col-md-4"></div>
           <div class="col-md-8">
            <div class="slogan" data-aos="fade-left">
               <b>Starlex Real Estate</b> ir  uzņēmums ar vairāk kā 15 gadu  pieredzi un plašu datubāzi!
            </div>
        </div>
      </div>      
    </div>
     <div class="white-middle-line left"></div>    
</section>

<?php include('views/blocks/komanda.php'); ?>

<?php include('views/blocks/featured.php'); ?>

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

<?php include('views/blocks/kontakti.php'); ?>

<?php include('views/partials/footer.php');  ?>
<?php include('views/partials/scripts.php');  ?>


</body>
</html>