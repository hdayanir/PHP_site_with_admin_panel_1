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


?>
