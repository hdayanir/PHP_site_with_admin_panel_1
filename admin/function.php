<?php 
include 'netting/baglan.php';
session_start();
ob_start();

function girisKontrol($baglan){

    $admin_kadi = $_SESSION['admin_kadi'];
    $adminsor=mysqli_query($baglan, "select * from admin where admin_kadi='$admin_kadi'");
    // burada sadece kullanıcı adına yönelik bir doğrulama yapılıyor.
    // fakat kullanıcı şifresini de sql sorgusuna eklersek herşey daha güzel olur.
    $adminsay =mysqli_fetch_assoc($adminsor);
    if ($adminsay==0) {
        header('Location:login.php');
        
        //cookie, kullanıcı bilgisayarinin tarayıicisinda tutulan cerezdir.
    //session ise hostumunda bulunan serverda tutulan degiskenlerdir. session tarayiciyi kapatinca silinir.
    }
}


?>