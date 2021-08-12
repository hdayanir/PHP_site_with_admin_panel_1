<?php 
include 'header.php' ;
 include 'sidebar.php' ;

$sayfa_id = $_GET['sayfa_id'];
$sayfasor =mysqli_query($baglan,"SELECT * FROM sayfalar where sayfa_id='$sayfa_id'");
$sayfacek =mysqli_fetch_assoc($sayfasor) ;
?>
<head>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

</head>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Sayfa Düzenleme</h1>
                       
                        <?php 
                            if(isset($_GET['durum']) == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Sayfa başarıyla düzenlendi.</h1>
                        
                            <?php  
                            }
                            else if(isset($_GET['durum']) =="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Sayfa düzenlenemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Düzenleme yapıp kaydediniz.</h1>
                            <?php } ?>
                            
                            <a href="sayfalar.php?durum"><button class="btn btn-success">Geri Dön </button></a> 
                            <hr>        
                            
                    </div>
                </div>
                <!-- /. ROW  -->
               
                <form action="netting/islem.php" method ="POST">
                <div class="col-md-12">
                <input class="form-control" type="hidden" name ="sayfa_id" value="<?php echo $sayfacek['sayfa_id']?>">
                    <div class="form-group col-md-8">
                        <label>Sayfa Adı </label>
                        <input class="form-control" type="text" name ="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad']?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-10">
                        <label>Sayfa İçerik </label>
                        <textarea name="sayfa_icerik" class="ckeditor"><?php echo $sayfacek['sayfa_icerik']?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Sayfa Sıra </label>
                        <input class="form-control" type="text" name ="sayfa_sira" value="<?php echo $sayfacek['sayfa_sira']?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Anasayfada Göster</label>
                        <select name="sayfa_anasayfa" class="form-control">
                        <?php
                            if($sayfacek['sayfa_anasayfa'] == 0){?>
                                <option value="0">HAYIR</option>
                                <option value="1">EVET</option>
                            <?php }   
                            else if($sayfacek['sayfa_anasayfa'] == 1){?>
                                <option value="1">EVET</option>
                                <option value="0">HAYIR</option>
                            <?php } 
                        ?>
                        </select>
                    </div>
                </div>      
                <div class="col-md-12">
                    <div class="form-group col-md-4" >
                        <input style="width:100%"  class="btn btn-success" type="submit" name ="sayfaDuzenle" value="Sayfa Düzenle">
                    </div>
                </div>
                
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

    

<?php include 'footer.php' ?>