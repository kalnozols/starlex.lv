<!DOCTYPE html>
<html>
<?php include('views/partials/head.php'); ?>
<?php include('views/partials/loader.php'); ?>
<?php include('views/partials/menu.php'); ?>

<div class="extended-menu-line"></div>
<body class='map-search'>

 <?php include('views/blocks/searchbox.php'); ?>
  
<section class="map-search">
    <div class="container bg">
        <div id="map-search"></div> 
    </div>

   <script>
      var map;
      function initMap() {
          // Kartes centrs un zooms
          var myOptions = { center: {lat: 56.959, lng: 24.09}, zoom: 13 } 
          map = new google.maps.Map(document.getElementById("map-search"), myOptions);

          // definē info logus
          var infowindow = new google.maps.InfoWindow({ content: '<?php require ('./views/blocks/gmap-estate-info.php'); ?>' });
          var groupinfowindow = new google.maps.InfoWindow({ content: '<?php require ('./views/blocks/gmap-estate-group-info.php'); ?>' }); 

          // Izvieto kartē kursorus un to ikona definē
          var marker1 = new google.maps.Marker({position: {lat: 56.959, lng: 24.09}, map: map, icon: "./public/img/gmap-icon.png"});
          var marker2 = new google.maps.Marker({position: {lat: 56.940, lng: 24.08}, map: map, icon: "./public/img/gmap-icon.png"});
          var marker3 = new google.maps.Marker({position: {lat: 56.940, lng: 24.18}, map: map, icon: "./public/img/gmap-icon.png"});

          // Pievienot info logus katram marker
          marker1.addListener('click', function() { infowindow.open(map, marker1); }); 
          marker2.addListener('click', function() { infowindow.open(map, marker2); });
          marker3.addListener('click', function() { groupinfowindow.open(map, marker3); });


        // Izmainīt google maps default css infologam
        function customization() {
            var iwOuter = $('.gm-style-iw');
            var iwBackground = iwOuter.prev();
            iwBackground.children(':nth-child(2)').css({'display' : 'none'});
            iwBackground.children(':nth-child(4)').css({'display' : 'none'});
           iwOuter.css({top: '70px'});
           var iwCloseBtn = iwOuter.next();
            iwCloseBtn.css({opacity: '1', top: '80px', right: '50px'});
            iwCloseBtn.next('img').css({ top: '80px', right: '50px'});           
        } 

          google.maps.event.addListener(infowindow, 'domready', function() { customization();});
          google.maps.event.addListener(groupinfowindow, 'domready', function() { customization();});



      }
    </script>
       <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6vRkc2APMSQ96rPBkWfg51d1KXY0jh1o&callback=initMap" async defer></script>  
</section>



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