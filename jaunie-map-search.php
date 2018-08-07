<!DOCTYPE html>
<html>
<?php include('views/partials/head.php'); ?>
<?php include('views/partials/loader.php'); ?>
<?php include('views/partials/menu.php'); ?>
<?php include('views/blocks/topsearch.php'); ?>
<div class="extended-menu-line"></div>
<body class='page'>
<section class="map-search">
    <div class="container bg">
        <div id="map-search"></div> 
    </div>

   <script>
      var map;
      function initMap() {
          var np1 = {lat: 56.959, lng: 24.09};
          var np2 = {lat: 56.940, lng: 24.08};

          var myOptions = { center: {lat: 56.959, lng: 24.09}, zoom: 13 } 
          map = new google.maps.Map(document.getElementById("map-search"), myOptions);


      var infowindow = new google.maps.InfoWindow({ content: '<?php require ('./views/blocks/gmap-estate-info.php'); ?>' }); 

          var marker1 = new google.maps.Marker({position: np1, map: map, icon: "./public/img/zunda-gmap-icon.png",});
          var marker2 = new google.maps.Marker({position: np2, map: map, icon: "./public/img/skanste-gmap-icon.png",});
          var marker2 = new google.maps.Marker({position: {lat: 56.940, lng: 24.18}, map: map, icon: "./public/img/gmap-icon.png",});

          marker2.addListener('click', function() { infowindow.open(map, marker2); });
          marker1.addListener('click', function() { infowindow.open(map, marker1); }); 

        // Izmainīt google maps default css infologam
          google.maps.event.addListener(infowindow, 'domready', function() {
            var iwOuter = $('.gm-style-iw');
            var iwBackground = iwOuter.prev();
            iwBackground.children(':nth-child(2)').css({'display' : 'none'});
            iwBackground.children(':nth-child(4)').css({'display' : 'none'});
           iwOuter.css({top: '70px'});
           var iwCloseBtn = iwOuter.next();
            iwCloseBtn.css({opacity: '1', top: '80px', right: '50px'});
            iwCloseBtn.next('img').css({ top: '80px', right: '50px'});    
          });


      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6vRkc2APMSQ96rPBkWfg51d1KXY0jh1o&callback=initMap" async defer></script>
  
</section>






<?php include('views/partials/footer.php');  ?>
<?php include('views/partials/scripts.php');  ?>


</body>
</html>