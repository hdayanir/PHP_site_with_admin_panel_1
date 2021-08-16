<?php include 'header.php';

$haber_id=$_GET['haber_id'];
$habersor =mysqli_query($baglan,"SELECT * FROM haber where haber_id ='$haber_id'");
$habercek =mysqli_fetch_assoc($habersor);

$haber_hit= $habercek['haber_hit'];
$haber_hit++;
$haberhit=   mysqli_query( $baglan,"update haber set haber_hit='".$haber_hit."' where haber_id ='$haber_id'");
?>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          
        
        <figure class="img-indent"><img width="200" height="200" src="admin/<?php echo $habercek['haber_resimyol']?>" alt=""></figure>


        <div class="indent-left">
            <div class="wrapper prev-indent-bot">
              <div class="extra-wrap">
              
              <h3 class="prev-indent-bot"><?php echo $habercek['haber_ad']?></h3>
              <?php echo $habercek['haber_detay']?>
              </div>
            </div>
            <div style="float:right; padding-bottom : 15px;" class="indent-left">
            </div>
        </div>
        <br><br>
        <hr>
        
        


        </article>
        <article class="col-2">
          <h4 style="font-size:25px;" class="p1">En çok okunan haberler</h4>
          <ul class="list-1">

          <?php
              $habersor =mysqli_query($baglan,"SELECT * FROM haber order by haber_hit DESC limit 10");
              while ( $habercek =mysqli_fetch_assoc($habersor) ){?>

            <li><a href="haberDetay.php?haber_id=<?php echo $habercek['haber_id']?>"><?php echo $habercek['haber_ad']?> <h9 align=right; text-align:right;   style="font-size:12px; color:orange;"><?php  echo "Okuma Sayısı "; echo $habercek['haber_hit'];?></h9> </a></li>
    
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