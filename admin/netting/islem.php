<?php include 'baglan.php';
if(isset($_POST['ayarkaydet'])){
    /*
$id=0;
$sql = "UPDATE ayarlar SET                                 ayar_title='".$_POST['ayar_title']."', 
ayar_description='".$_POST['ayar_description']."',         ayar_keywords='".$_POST['ayar_keywords']."',
ayar_telefon='".$_POST['ayar_telefon']."',                 ayar_facebook='".$_POST['ayar_facebook']."',
ayar_twitter='".$_POST['ayar_twitter']."',                 ayar_linkedin='".$_POST['ayar_linkedin']."',
ayar_footer='".$_POST['ayar_footer']."',                   ayar_adres='".$_POST['ayar_adres']."',
ayar_mail='".$_POST['ayar_mail']."',                       ayar_fax='".$_POST['ayar_fax']."'
where ayar_id ='$id'";
if ($baglan->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $baglan->error;
  }
*/

  
$ayarkaydet =   mysqli_query( $baglan, "update ayarlar set     ayar_title='".$_POST['ayar_title']."', 
    ayar_description='".$_POST['ayar_description']."',         ayar_keywords='".$_POST['ayar_keywords']."',
    ayar_telefon='".$_POST['ayar_telefon']."',                 ayar_facebook='".$_POST['ayar_facebook']."',
    ayar_twitter='".$_POST['ayar_twitter']."',                 ayar_linkedin='".$_POST['ayar_linkedin']."',
    ayar_footer='".$_POST['ayar_footer']."',                   ayar_adres='".$_POST['ayar_adres']."',
    ayar_mail='".$_POST['ayar_mail']."',                       ayar_fax='".$_POST['ayar_fax']."'
    where ayar_id ='$id'");
echo $_POST['ayar_title'];
if(mysqli_affected_rows($baglan)){
    
    header("Location:../ayarlar.php?durum=ok"); //get metodu atandi.
}
else{
    
    header("Location:../ayarlar.php?durum=no");
}


}



if(isset($_POST['giris'])){
    $admin_kadi = $_POST['admin_kadi'];
    $admin_sifre = md5($_POST['admin_sifre']);
    
    if($admin_kadi && $admin_sifre){//varsa sorgula
        $sorgula =mysqli_query($baglan, "select * from admin WHERE  admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
        $verisay= mysqli_num_rows($sorgula);
        if($verisay>0 ){
            $_SESSION['admin_kadi'] = $admin_kadi;
            $_SESSION['admin_sifre'] = $admin_sifre;
            header('Location:../index.php');
            
        }else {
            header('Location:../login.php?login=no');
        }
    }
}


if(isset($_POST['menuKaydet'])){
   
        $menuEkle =mysqli_query($baglan, "insert into menuler (menu_ad,menu_link) 
                        VALUES ('".$_POST['menu_ad']."' , '".$_POST['menu_link']."')");
        if(mysqli_affected_rows($baglan)){
            header('Location:../menuEkle.php?durum=ok');
        }
        else {
            echo "Error updating record: " . $baglan->error;
            header('Location:../menuEkle.php?durum=no');
        }
}



if(isset($_POST['menuDuzenle'])){
 

$menu_id= $_POST['menu_id'];
$menuDuzenle =   mysqli_query( $baglan, "update menuler set     menu_ad='".$_POST['menu_ad']."', 
                         menu_link='".$_POST['menu_link']."'    where menu_id ='$menu_id'");
if(mysqli_affected_rows($baglan)){
    
    header("Location:../menuDuzenle.php?durum=ok&menu_id=$menu_id"); //get metodu atandi.
}
else{
    
    header("Location:../menuDuzenle.php?durum=no&menu_id=$menu_id");
}
}



if(isset($_GET['menuSil'])=="ok"){
    $menuSil =   mysqli_query( $baglan, "delete from menuler where menu_id ='".$_GET['menu_id']."'");
if(mysqli_affected_rows($baglan)){

header("Location:../menuler.php?durum=ok"); //get metodu atandi.
}
else{

    header("Location:../menuler.php?durum=no"); //get metodu atandi.
}

}



if(isset($_POST['sliderKaydet'])){
    $uploads_dir ="../uploads";
    @$tmp_name = $_FILES['sliderGorsel']['tmp_name'];
    @$name =$_FILES['sliderGorsel']['name'];
    $benzersizSayi1 = rand(20000,32000);
    $benzersizSayi2 = rand(20000,32000);
    $benzersizSayi3 = rand(20000,32000);
    $benzersizSayi4 = rand(20000,32000);
    $benzersizAd = $benzersizSayi1.$benzersizSayi2.$benzersizSayi3.$benzersizSayi4;
    $refimgyol = substr ($uploads_dir , 3)."/".$benzersizAd.$name;
    @move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");
    $sliderEkle= mysqli_query( $baglan, "insert into slider(slider_ad,slider_url,slider_resimyol,slider_sira)
    values ('".$_POST['slider_ad']."','".$_POST['slider_url']."','".$refimgyol."','".$_POST['slider_sira']."')");
if(mysqli_affected_rows($baglan)){
header("Location:../sliderEkle.php?durum=ok"); //get metodu atandi.
}
else{
    header("Location:../sliderEkle.php?durum=no"); //get metodu atandi.
}
}





if(isset($_GET['sliderSil'])=="ok"){
    $sliderSil =   mysqli_query( $baglan, "delete from slider where slider_id ='".$_GET['slider_id']."'");
if(mysqli_affected_rows($baglan)){

header("Location:../slider.php?durum=ok"); //get metodu atandi.
}
else{

    header("Location:../slider.php?durum=no"); //get metodu atandi.
}

}

if(isset($_POST['SıraGuncelle'])){
 

    $slider_id=$_POST['slider_id'];
    $slider_sira=$_POST['slider_sira'];
    $sliderSira =   mysqli_query( $baglan, "update slider  set     slider_sira='$slider_sira' 
                                where slider_id='".$_POST['slider_id']."'");
                               /*echo $_POST['slider_sira'];
                                echo "<br>";
                                echo $sliderSira;
                                exit();*/
    if(mysqli_affected_rows($baglan)){

        header("Location:../slider.php?durum=ok1&slider_id=$slider_id"); //get metodu atandi.
    }
    else{

        header("Location:../slider.php?durum=no1&slider_id=$slider_id"); //get metodu atandi.
    }
}




if(isset($_POST['sayfaKaydet'])){
    $zaman = date('Y-m-d H:i');
   
    $sayfaEkle =mysqli_query($baglan, "insert into sayfalar (sayfa_ad,sayfa_icerik,sayfa_sira,sayfa_anasayfa,sayfa_tarih) 
                    VALUES ('".$_POST['sayfa_ad']."' , '".$_POST['sayfa_icerik']."'
                          , '".$_POST['sayfa_sira']."', '".$_POST['sayfa_anasayfa']."', '".$zaman."')");
    if(mysqli_affected_rows($baglan)){
        header('Location:../sayfaEkle.php?durum=ok');
    }
    else {
        echo "Error updating record: " . $baglan->error;
        header('Location:../sayfaEkle.php?durum=no');
    }
}





if(isset($_GET['sayfaSil'])=="ok"){
    $menuSil =   mysqli_query( $baglan, "delete from sayfalar where sayfa_id ='".$_GET['sayfa_id']."'");
if(mysqli_affected_rows($baglan)){

header("Location:../sayfalar.php?durum=ok"); //get metodu atandi.
}
else{

    header("Location:../sayfalar.php?durum=no"); //get metodu atandi.
}

}




if(isset($_POST['sayfaDuzenle'])){
 

    $sayfa_id= $_POST['sayfa_id'];
    $sayfaDuzenle =   mysqli_query( $baglan, "update sayfalar set       sayfa_ad='".$_POST['sayfa_ad']."', 
                            sayfa_icerik='".$_POST['sayfa_icerik']."',  sayfa_sira='".$_POST['sayfa_sira']."'
                            ,  sayfa_anasayfa='".$_POST['sayfa_anasayfa']."'    where sayfa_id ='$sayfa_id'");
    if(mysqli_affected_rows($baglan)){
        
        header("Location:../sayfaDuzenle.php?durum=ok&sayfa_id=$sayfa_id"); //get metodu atandi.
    }
    else{
        
        header("Location:../sayfaDuzenle.php?durum=no&sayfa_id=$sayfa_id");
    }
    }
    

?>
