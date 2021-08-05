<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Menü Ekleme</h1>
                       
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Menü başarıyla güncellendi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Menü eklenemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Sitenize menü ekliyorsunuz.</h1>
                            <?php } ?>
                            
                            <a href="menuler.php?durum"><button class="btn btn-success">Menülere Geri Dön </button></a>
                            <hr>        
                            
                    </div>
                </div>
                <!-- /. ROW  -->
               
                <form action="netting/islem.php" method ="POST">
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Menü Adı </label>
                        <input class="form-control" type="text" name ="menu_ad" placeholder="Menü adını giriniz.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Menü Link </label>
                        <input class="form-control" type="text" name ="menu_link" value="https://www.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-4" >
                        <input style="width:100%"  class="btn btn-success" type="submit" name ="menuKaydet" value="Menü Kaydet">
                    </div>
                </div>
                
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

    

<?php include 'footer.php' ?>