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
                        <h1 class="page-head-line">Menüler</h1>
                        <?php 
                            if($_GET['durum'] == "ok"){ ?>
                                <h1 style="color:green;" class="page-subhead-line">Menü başarıyla silindi.</h1>
                        
                            <?php  
                            }
                            else if($_GET['durum']=="no"){ ?>
                                <h1 style="color:red;"class="page-subhead-line">Menü silinemedi.</h1>
                        
                            <?php    
                            }   
                            else {?>
                                <h1 class="page-subhead-line">Sitenizdeki menüleri buradan yönetebilirsiniz.</h1>
                            <?php } ?>
                    </div>
                    <div class="col-md-12">
                      <a href="menuEkle.php?durum"><button class="btn btn-success">Menü Ekle </button></a>
                       <hr>
                    </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan menüler
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="width:250px">Menü Adı</th>
                                            <th>Menü Link</th>
                                            <th style="width:20px"></th>
                                            <th style="width:20px"><th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                       $menusor =mysqli_query($baglan,"SELECT * FROM menuler");
                                        while ( $menucek =mysqli_fetch_assoc($menusor) ){?>
                                        <tr>
                                            <td><?php echo $menucek['menu_id']?></td>
                                            <td><?php echo $menucek['menu_ad']?></td>
                                            <td><?php echo $menucek['menu_link']?></td>
                                            <td><a href="menuDuzenle.php?menu_id=<?php echo $menucek['menu_id']?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td><a href="netting/islem.php?menu_id=<?php echo $menucek['menu_id']?>&menuSil=ok"><button class="btn btn-danger">Sil</button></a></td>

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