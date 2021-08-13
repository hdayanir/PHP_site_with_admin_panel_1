<?php 
include 'header.php' ;
include 'slider.php'
?>
    <!--==============================aside================================-->
    
    <?php
        $sayfasor =mysqli_query($baglan,"SELECT * FROM sayfalar where sayfa_anasayfa='1' order by sayfa_sira asc");
        while ( $sayfacek =mysqli_fetch_assoc($sayfasor) ){?>


        <div style="padding-left:12px; padding-top:10px;" class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $sayfacek['sayfa_ad']?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <p><?php echo substr($sayfacek['sayfa_icerik'],0,200)?></p>
              </div>
              <div class="aligncenter"> <a class="button" href="sayfaDetay.php?sayfa_id=<?php echo $sayfacek['sayfa_id']?>">Devamını Oku</a> </div>
            </div>
          </div>
        </div>
 

       <?php } ?>
        
       <aside>
      <div class="wrapper">


      
        
      </div>
    </aside>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2>Welcome!</h2>
            <h6 class="prev-indent-bot">Handyman is one of free website templates created by TemplateMonster.com</h6>
            <p class="prev-indent-bot">This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. Handyman Template goes with two packages – with PSD source files and without them. PSD<br>
              source files are available for free for the registered members of Templates.com. The basic pack<br>
              age (without PSD source) is available for anyone without registration.</p>
            This website template has several pages: <a class="color-2" href="index.html">Home Page</a>, <a class="color-2" href="services.html">Services</a>, <a class="color-2" href="faq.html">FAQ</a>, <a class="color-2" href="prices.html">Prices</a>, <a class="color-2" href="staff.html">Our Staff</a>, <a class="color-2" href="contacts.html">Contacts</a> (note that contact us form – doesn’t work). </div>
        </article>
        <article class="col-2">
          <h3>Testimonials</h3>
          <div class="wrapper indent-bot">
            <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">James Williams</a></h6>
                Lorem ipsum dolor sitmet consectetur adipisicing elit sed do eiusmod. </div>
            </div>
          </div>
          <div class="wrapper">
            <figure class="img-indent"><img src="images/page1-img2.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">Thomas Seether</a></h6>
                Tempor incididunt utlabore et dolore magna aliqua ut enim ad minim veniam. </div>
            </div>
          </div>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>

<?php include 'footer.php' ?>