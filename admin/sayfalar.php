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
                        <h1 class="page-head-line">Sayfalar</h1>
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Sayfa başarıyla silindi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Sayfa silinemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Sitenizdeki sayfaları buradan yönetebilirsiniz.</h1>
                            <?php } ?>
                    </div>
                    <div class="col-md-12">
                      <a href="sayfaEkle.php?durum"><button class="btn btn-success">Sayfa Ekle </button></a>
                       <hr>
                    </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan sayfalar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Eklendiği Tarih</th>
                                            <th style="width:400px">Sayfa Adı</th>
                                            <th>Anasayfada Göster</th>
                                            <th style="width:20px"></th>
                                            <th style="width:20px"><th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                       $sayfasor =mysqli_query($baglan,"SELECT * FROM sayfalar");
                                        while ( $sayfacek =mysqli_fetch_assoc($sayfasor) ){?>
                                        <tr>
                                            <td><?php echo $sayfacek['sayfa_id']?></td>
                                            <td><?php echo $sayfacek['sayfa_tarih']?></td>
                                            <td><?php echo $sayfacek['sayfa_ad']?></td>
                                            <td><?php 
                                            if ($sayfacek['sayfa_anasayfa'] ==0)
                                                echo "HAYIR";
                                            else if($sayfacek['sayfa_anasayfa'] ==1){
                                                echo "EVET";
                                            }
                                            ?></td>

                                            <td><a href="sayfaDuzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td><a href="netting/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id']?>&sayfaSil=ok"><button class="btn btn-danger">Sil</button></a></td>

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