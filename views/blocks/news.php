<?php if ($allnews =='no'): ?>
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
<?php endif; ?>

<section class="news-block">
   <?php if ($allnews =='no'): ?> <div class="wrap"><?php endif; ?>     
        <div class="container bg">
          <?php if ($allnews =='no'): ?> <h2>Jaunumi / Blogs</h2><?php endif; ?> 


          <?php for( $i= 1 ; $i <= $newscount ; $i++ ): ?>
          <div class="col-md-6">
             <div class="news-wrap" data-aos="fade-right"  style="background-image: url('../public/img/news1.png');">

                <div class="news-right" >
                  <h4>Jaunuma virsraksts līdz divām rindām!</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
               </div>
               <div class="btn"> Lasīt ziņu </div>
            </div>
         </div>
         <?php endfor; ?>

        
         <div class="col-md-12">
          <div class="container">

            <?php if ($allnews =='no'): ?>
              <div class="transparent-btn">Visas ziņas</div>
            <?php else: ?>  
              <div class="pagination">
                <div class="page"><a href="#">1</a></div>
                <div class="page"><a href="#">2</a></div>
                <div class="page active"><a href="#">3</a></div>
                <div class="page"><a href="#">4</a></div>
              </div>
            <?php endif; ?> 
          </div>
         </div>
        

          

      </div>      
    <?php if ($allnews =='no'): ?> </div><?php endif; ?>  
</section>