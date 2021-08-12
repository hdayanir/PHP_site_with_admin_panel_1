<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<head>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

</head>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Sayfa Ekleme</h1>
                       
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Sayfa başarıyla eklendi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Sayfa eklenemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Sitenize sayfa ekliyorsunuz.</h1>
                            <?php } ?>
                            
                            <a href="sayfalar.php?durum"><button class="btn btn-success">Geri Dön </button></a> 
                            <hr>        
                            
                    </div>
                </div>
                <!-- /. ROW  -->
               
                <form action="netting/islem.php" method ="POST">
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Sayfa Adı </label>
                        <input class="form-control" type="text" name ="sayfa_ad" placeholder="Sayfa adını giriniz.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-10">
                        <label>Sayfa İçerik </label>
                        <textarea name="sayfa_icerik" class="ckeditor"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Sayfa Sıra </label>
                        <input class="form-control" type="text" name ="sayfa_sira" placeholder="Sayfa sırasını giriniz.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label>Anasayfada Göster</label>
                        <select name="sayfa_anasayfa" class="form-control">
                        <option value="0">HAYIR</option>
                        <option value="1">EVET</option>
                        </select>
                    </div>
                </div>      
                <div class="col-md-12">
                    <div class="form-group col-md-4" >
                        <input style="width:100%"  class="btn btn-success" type="submit" name ="sayfaKaydet" value="Sayfa Kaydet">
                    </div>
                </div>
                
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

    

<?php include 'footer.php' ?>