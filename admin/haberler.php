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
                        <h1 class="page-head-line">Haberler</h1>
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Haber başarıyla silindi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">haber silinemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Sitenizdeki haberleri buradan yönetebilirsiniz.</h1>
                            <?php } ?>
                    </div>
                    <div class="col-md-12">
                      <a href="haberEkle.php?durum"><button class="btn btn-success">Haber Ekle </button></a>
                       <hr>
                    </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan haberler
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Haber Zamanı</th>
                                            <th style="width:400px">Haber Başlık </th>
                                            <th>Haber Hit</th>
                                            <th style="width:20px"></th>
                                            <th style="width:20px"><th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                       $habersor =mysqli_query($baglan,"SELECT * FROM haber");
                                        while ( $habercek =mysqli_fetch_assoc($habersor) ){?>
                                        <tr>
                                            <td><?php echo $habercek['haber_id']?></td>
                                            <td><?php echo $habercek['haber_zaman']?></td>
                                            <td><?php echo $habercek['haber_ad']?></td>
                                            <td><?php echo $habercek['haber_hit']?></td>


                                            <td><a href="haberDuzenle.php?haber_id=<?php echo $habercek['haber_id']?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td><a href="netting/islem.php?haber_id=<?php echo $habercek['haber_id']?>&haberSil=ok"><button class="btn btn-danger">Sil</button></a></td>

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