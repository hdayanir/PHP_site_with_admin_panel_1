<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Slider Ekleme</h1>
                       
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Slider başarıyla eklendi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Slider eklenemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Sitenize slider ekliyorsunuz.</h1>
                            <?php } ?>
                            
                            <a href="slider.php?durum"><button class="btn btn-success">Geri Dön </button></a>
                            <hr>        
                            
                    </div>
                </div>
                <!-- /. ROW  -->
               
                <form action="netting/islem.php" method ="POST" enctype="multipart/form-data" >
                <div class="form-group">
                        <label class="control-label col-lg-4">Resim Yükle</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Resim Seç</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="sliderGorsel">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" 
                                style="float: none">×</a>
                            </div>
                        </div>
                    </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Slider Adı </label>
                        <input class="form-control" type="text" name ="slider_ad" placeholder="Slider adını giriniz.">
                    </div>
                </div>
                <div class="col-md-12">
                    <!--<div class="form-group col-md-8">
                        <label>Slider Url</label>
                        <input class="form-control" type="text" name ="slider_url" placeholder="Slider yönlendirmek için link giriniz.">
                    </div>-->
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Slider Sıra</label>
                        <input class="form-control" type="number" name ="slider_sira" placeholder="Slider sırasını giriniz.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-4" >
                        <input style="width:100%"  class="btn btn-success" type="submit" name ="sliderKaydet" value="Slider Kaydet">
                    </div>
                </div>
                
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

    

<?php include 'footer.php' ?>