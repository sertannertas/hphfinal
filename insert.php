<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $yemek_adi = $_POST['yemek_adi'];
     $yemek_malzeme = $_POST['yemek_malzeme'];
     $yemek_tarif = $_POST['yemek_tarif'];
     $sql = "INSERT INTO yemeklistesi (yemek_adi,yemek_malzeme,yemek_tarif)
     VALUES ('$yemek_adi','$yemek_malzeme','$yemek_tarif')";
     if (mysqli_query($conn, $sql)) {
        echo "Kayıt Eklendi";
     } else {
        echo "Hata: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>