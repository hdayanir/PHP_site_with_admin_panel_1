<?php include 'header.php'?>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          
        <?php
              $habersor =mysqli_query($baglan,"SELECT * FROM haber");
              while ( $habercek =mysqli_fetch_assoc($habersor) ){?>


        <div class="indent-left">
            <div class="wrapper prev-indent-bot">
              <figure class="img-indent"><img width="200" height="200" src="admin/<?php echo $habercek['haber_resimyol']?>" alt=""></figure>
              <div class="extra-wrap">
              
              <h6 class="prev-indent-bot"><?php echo $habercek['haber_ad']?></h6>
              <?php echo substr($habercek['haber_detay'],0,270); echo "  ...";?>
              </div>
            </div>
            <div style="float:right; padding-bottom : 15px;" class="indent-left">
            <a class="button-2" href="haberDetay.php?haber_id=<?php echo $habercek['haber_id']?>">Read More</a> 
            </div>
        </div>
        <br><br>
        <hr>
        
        
        <?php  } ?>


        </article>
        <article class="col-2">
          <h4 style="font-size:25px;" class="p1">En çok okunan haberler</h4>
          <ul class="list-1">

          <?php
              $habersor =mysqli_query($baglan,"SELECT * FROM haber order by haber_hit DESC limit 10");
              while ( $habercek =mysqli_fetch_assoc($habersor) ){?>

            <li><a href="haberDetay.php?haber_id=<?php echo $habercek['haber_id']?>"><?php echo $habercek['haber_ad']?></a></li>
    
            <?php } ?>
          </ul>
        </article>
      </div>
    </section>
    <!--==============================aside================================-->
    <aside>
      
      <div class="block"></div>
    </aside>
  </div>
</div>
<!--==============================footer=================================-->
<?php include 'footer.php' ?>