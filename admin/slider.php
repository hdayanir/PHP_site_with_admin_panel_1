<?php 
include 'header.php';
include 'sidebar.php'; 

if(!isset($_SESSION['admin_kadi'])){ //session bossa buraya gonder.
    header('Location:login.php');
    //cookie, kullanıcı bilgisayarinin tarayıicisinda tutulan cerezdir.
    //session ise hostumunda bulunan serverda tutulan degiskenlerdir. session tarayiciyi kapatinca silinir.
}
//session_destroy();
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Slider</h1>
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Slider başarıyla silindi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Slider  silinemedi.</h1>
                        
                            <?php    
                            }  
                            else if($_GET['durum']=="ok1"){ ?>
                                <h1 style="color:green;"class="page-subhead-line">Slider  sırası güncellendi.</h1>
                        
                            <?php    
                            }
                            else if($_GET['durum']=="no1"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Slider  sırası güncellenemedi.</h1>
                        
                            <?php    
                            } 
                            else {?>
                                <h1 class="page-subhead-line">Sitenizdeki sliderları buradan yönetebilirsiniz.</h1>
                            <?php } ?>
                    </div>
                    <div class="col-md-12">
                    
                      <a href="sliderEkle.php?sliderEkle&durum"><button class="btn btn-success">Slider Ekle </button></a>
                       <hr>
                    </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan Sliderlar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th >Slider Adı</th>
                                            <th>Slider Resmi</th>
                                            <!--<th>Slider Link</th>-->
                                            <th>Slider Sıra</th>
                                            <th style="width:20px"></th>
                                            <th style="width:20px"><th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                       $slidersor =mysqli_query($baglan,"SELECT * FROM slider");
                                        while ( $slidercek =mysqli_fetch_assoc($slidersor) ){?>
                                        <tr>
                                            <td><?php echo $slidercek['slider_id']?></td>
                                            <td><?php echo $slidercek['slider_ad']?></td>
                                            <td>
                                                <img width="150" src="<?php echo $slidercek['slider_resimyol']?>" alt="Slider Resmi">
                                                <?php echo $slidercek['slider_resimyol']?></td>
                                            <!--<td><?php //echo $slidercek['slider_url']?></td>-->
                                            <td><form action="netting/islem.php" method ="POST">
                                            <div class="float:left;">
                                                
                                                    <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']?>">
                                                    <input style="width:25%; float:left;" class="form-control" type="text" name ="slider_sira" value="<?php echo $slidercek['slider_sira']?>">
                                                    <input style="width:40%; float:right;"  class="btn btn-primary" type="submit" name ="SıraGuncelle" value="Sıra Güncelle">
                                                
                                            </div>
                                            </form></td>
                                            <td ><a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id'];?>&sliderSil=ok">
                                                <button class="btn btn-danger">Sil</button></a></td>

                                        </tr>
                                        <?php }
                                    ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
                </div>
                <!-- /. ROW  -->
               

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

    

<?php include 'footer.php' ?>