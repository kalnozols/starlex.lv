<!DOCTYPE html>
<html>
<?php include('views/partials/head.php'); ?>
<?php include('views/partials/loader.php'); ?>
<body class='landing'>
 <?php include('views/blocks/landing-video.php'); ?>

<section class="wrap info-block bg-lightblue">
     <div class="white-middle-line"></div>  
  <div class="tr-romb right" data-enllax-ratio="-.2" data-enllax-type="foreground" data-enllax-direction="vertical"></div>
    <div class="wrap">     
        <div class="container">
           <div class="col-md-7">
            <div class="slogan" data-aos="fade-right">
               <b>Mūsu pakalpojumu</b> klāsts ir plašs un piedāvā visu ko
            </div>
        </div>
        <div class="col-md-5"></div>
      </div>      
    </div>

</section>



<?php include('views/blocks/pakalpojumi.php'); ?>

<section class="wrap info-block bg-lightblue">
  <div class="white-middle-line left"></div>
  <div class="tr-romb " data-enllax-ratio="-.2" data-enllax-type="foreground" data-enllax-direction="vertical"></div>  
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
         
</section>

<?php include('views/blocks/statistika.php'); ?>

<section class="wrap info-block prekomanda bg-lightblue">
     <div class="white-middle-line"></div>
    <div class="wrap">     
        <div class="container">
           <div class="col-md-7">
            <div class="slogan" data-aos="fade-right">
               <b>Profesionāla komanda</b> ir ļoti svarīga mērķu sasniegšanai
            </div>
        </div>
        <div class="col-md-5"></div>
      </div>      
    </div>

</section>

<?php include('views/blocks/komanda.php'); ?>

<?php include('views/blocks/tvb.php'); ?>

<section class="wrap info-block bg-lightblue">
  <div class="white-middle-line md6 left"></div>  
  <div class="tr-romb"  data-enllax-ratio="-.2" data-enllax-type="foreground" data-enllax-direction="vertical"></div>  
    <div class="wrap">     
        <div class="container">
                  <div class="col-md-5"></div>
           <div class="col-md-7">
            <div class="slogan" data-aos="fade-left">
               <b>Ziņās un aktualitātēs</b> mēs dalamies ar visu svarīgāko nekustamo īpašumu nozarē!
            </div>
        </div>
      </div>      
    </div>       
</section>

<?php $allnews='no'; $newscount= 2; include('views/blocks/news.php'); ?>

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