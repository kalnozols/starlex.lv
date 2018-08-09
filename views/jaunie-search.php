<!DOCTYPE html>
<html>
<?php include('./partials/head.php'); ?>
<?php include('./partials/loader.php'); ?>
<?php $menu ="jaunie-projekti"; include('./partials/menu.php'); ?>
<?php include('./blocks/topsearch.php'); ?>
<body class='page'>
<section class="map-bg">
  <div id="map-bg"></div>
  <div class="map-overlay"> 
    <div class="container bg">
      <div class="show-on-map"><a href="#"><img src="../public/img/on-map-icon-white.png" /> Skatīt uz kartes </a></div>
    </div>
  </div>

   <script>
      var map, map1, map2, map3, map4, map5, map6;
      function initMap() {
          // create the maps

          var np1 = {lat: 56.997, lng: 24.04};
          var np2 = {lat: 55.997, lng: 24.14};
          var myOptions = { center: {lat: 56.397, lng: 24.644}, zoom: 8 }
          var myOptions2 = { center: np1, zoom: 14 }
          var myOptions3 = { center: np2, zoom: 14 }
 
          map = new google.maps.Map(document.getElementById("map-bg"), myOptions);
          map1 = new google.maps.Map(document.getElementById("np-map-1"), myOptions2);
          map2 = new google.maps.Map(document.getElementById("np-map-2"), myOptions3);
          map3 = new google.maps.Map(document.getElementById("np-map-3"), myOptions);
          map4 = new google.maps.Map(document.getElementById("np-map-4"), myOptions2);
          map5 = new google.maps.Map(document.getElementById("np-map-5"), myOptions3);
          map6 = new google.maps.Map(document.getElementById("np-map-6"), myOptions);
          var marker1 = new google.maps.Marker({position: np1, map: map1, icon: "../public/img/gmap-icon.png",});
          var marker2 = new google.maps.Marker({position: np2, map: map2, icon: "../public/img/gmap-icon.png",});  
      }



    //  var map;
   //   function initMap() {
   //     map = new google.maps.Map(document.getElementById('map-bg'), {
    //      center: {lat: -34.397, lng: 150.644},
    //      zoom: 8
   //     });
   //   }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6vRkc2APMSQ96rPBkWfg51d1KXY0jh1o&callback=initMap" async defer></script>
  
</section>


<section class="search-big-grid">    
        <div class="container bg">

          <?php for( $i= 1 ; $i <= 6 ; $i++ ): ?>
          <div class="col-md-6  col-sm-6">
             <div class="new-project" data-aos="fade-down" data-aos-delay='0' >


                  <div class="single-image"   style="background-image: url('../public/img/group-bg.png');"  >
                    <div class="icon on-map"><img src="../public/img/np-map-icon.png" /> <br /> uz kartes </div>
                    <div class="icon on-text">
                      <img src="../public/img/np-text-icon.png" /> <br /> apraksts 



                    </div>
                    <div class="icon on-visit"><img src="../public/img/np-visit-icon.png" /> <br /> opcija </div>
                    <div class="on-text-wrap">
                      <h4>Īrpirkums</h4>
                        <ul>
                          <li>Tā ir iespēja pārverst īri dzīvokļa pirkumā</li>
                          <li>Izdvēlies dzīvokli jau taggad, sāc tajā dz'viot gada nogalē</li>
                          <li>Ja pieņem lēmumu izmantoto šo iespēju, samaksātā īre kļūst par pirmo iemaksu </li>
                        </ul>
                    </div>
                    <div class="on-map-wrap">
                      <div class="np-map" id="np-map-<?php echo $i; ?>"></div>
                    </div>

                  </div>
                <div class="project-title">Zundas dārzi</div>
                <div class="btn">Apskatīt </div>

                <div class="featured-description" >
                  Rīga, Ilģuciems <br />
                  2 -5 istabas <br />
                  50 -142 m2 <br />
                  45'000 EUR - 148'000 EUR
                  <div class="project-logo"><img src="../public/img/bonava-logo.png" /> </div>
                 </div>
            </div>
         </div>
         <?php endfor; ?> 
      </div>      
</section>



<?php include('./partials/footer.php');  ?>
<?php include('./partials/scripts.php');  ?>


</body>
</html>