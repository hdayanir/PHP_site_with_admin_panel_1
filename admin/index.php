<?php 
include 'header.php';
include 'sidebar.php'; 

if(!isset($_SESSION['kadi'])){ //session bossa buraya gonder.
    header('Location:index.php');
    //cookie, kullanıcı bilgisayarinin tarayıicisinda tutulan cerezdir.
    //session ise hostumunda bulunan serverda tutulan degiskenlerdir. session tarayiciyi kapatinca silinir.

    
}
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Yönetici Paneli</h1>
                        <h1 class="page-subhead-line">Siteyi sol taraftan yönetiyoruz.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
               

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

    

<?php include 'footer.php' ?>