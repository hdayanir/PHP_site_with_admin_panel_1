<div class="wrapper">
        <div class="slider">
          <ul class="items">


          <?php
             $slidersor =mysqli_query($baglan,"SELECT * FROM slider order by slider_sira ASC");
              while ( $slidercek =mysqli_fetch_assoc($slidersor)){ ?>
            <li><img src="admin/<?php echo $slidercek['slider_resimyol'];?>" alt="<?php echo $slidercek['slider_ad'] ?>"></li>
                
            <?php } ?>

            <!--<li> <img src="admin/uploads/22713203842420222923slider1.jpg"></li>  -->

          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>