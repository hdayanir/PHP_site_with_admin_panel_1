<?php include 'admin/netting/baglan.php' ?>
<?php
$ayarsor =mysqli_query($baglan,"SELECT * FROM ayarlar");
$ayarcek =mysqli_fetch_assoc($ayarsor);
?> 






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $ayarcek['ayar_title'];?></title>

<meta name="description" content="<?php echo $ayarcek['ayar_description'];?>">
<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'];?>">
<meta name="author" content="YAZILIM">

<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">

            <img style="margin-top:30px; margin-left:30px;" src="<?php echo $ayarcek['ayar_logo'];?>" alt="">
  
            <strong class="support"><?php echo $ayarcek['ayar_telefon'];?></strong> </div>
       
        </div>



        <nav>
        <ul class="menu">
            <li><a class="active" href="index.php">Home</a></li>
            <?php
              $menusor =mysqli_query($baglan,"SELECT * FROM menuler");
              $menusay = mysqli_num_rows($menusor);
              $say=0;
              while ( $menucek =mysqli_fetch_assoc($menusor) ){ $say++;?>

                <li class="<?php 
                  if($menusay == $say){
                    echo "last";
                  }
                ?>"><a href="<?php echo $menucek['menu_link']?>"><?php echo $menucek['menu_ad']?></a></li>
              
            <?php }
            
        ?> 
           
            
          </ul>
        </nav>



        
      </div>
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
    </header>