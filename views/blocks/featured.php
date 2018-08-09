<section class="info-block bg-darkblue">
    <div class="wrap">     
        <div class="container">
           <div class="col-md-7">
        </div>
        <div class="col-md-5">         
        </div>
      </div>      
    </div>
</section>
<section class="search-grid featured">   
    <div class="wrap">     
        <div class="container bg">
          <?php if(isset($varap)): ?>
            <h2 class="left"> Pieejamie dzīvokļi </h2>
          <?php else: ?>
           <h2> Featured objekti </h2>
         <?php endif; ?>

          <?php $varap = $varap ?? "4"; ?>
          <?php  for( $i= 1 ; $i <= $varap; $i++ ): ?>
          <div class="col-md-3 col-sm-6 featured-item">
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


<?php if(!isset($varap)): ?>
         <div class="col-md-12">
          <div class="container">
            <div class="transparent-btn">Skatīt visus</div>
          </div>
         </div>
<?php endif; ?>

      </div>      
    </div>
</section>