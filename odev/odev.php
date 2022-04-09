<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev</title>
</head>
<body>
<?php
    
    /* Uygulama Ödevi Kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanılarak örneklendirilmesini gerçekleştiriniz.*/

/* Son Giren İlk Çıkar*/
echo "<h2>Stack(YIĞIN)</h2>";
echo "<h3>Son Giren İlk Çıkar (LIFO , last in first out)</h3>";

$otopark = array(
    'Beyaz araba',
    'Kırmızı araba',
    'Mor araba',
    'Sarı araba',
    'Mavi araba',
);
/*array_push // Komutuyla Diziye eleman ekleme yapılır
  array_pop // Komutuyla Diziden Son Giren Elemanı Çıkarır
  array_unshift // Komutuyla Dizinin başına eleman ekleme yapılır
  array_shift // Komutuyla Dizinin ilk elemanını silme işlemi
*/

echo array_pop($otopark); 
print_r($otopark);


/* İlk Giren İlk Çıkar */
echo "<h2>Kuyruk(QUEUE)</h2>";
echo "<h3>İlk Giren İlk Çıkar (FIFO , first in first out )</h3>";

$biletsirasi = array(
    '1.sıra',
    '2.sıra',
    '3.sıra',
    '4.sıra',
    '5.sıra',
);
echo array_shift($biletsirasi);
print_r($biletsirasi);
?>

<br><br><hr>





    <?php 
    
    
        echo "<br><br><h4>1.Uygulama: Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta yazdırınız.<br></h4>";
      
       $ogrenciDetaylari = array(
        "ogrenci1" => array(
            "id"        => 1,
            "adi"       => "Nurullah",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => "25",
            "dersler"   => array(
                "ders1" => "Veri Tabanı",
                "ders2" => "Web Programlama",
                "ders3" => "Mobil Programlama"
            ),
            "sinif"     => "2"
        ),
        "ogrenci2" => array(
            "id"        => 2,
            "adi"       => "Ayşen",
            "soyadi"    => "Güler",
            "bolum"     => "Makine",
            "yas"       => "22",
            "dersler"   => array(
                "ders1" => "Matematik",
                "ders2" => "Sayı Teorileri",
                "ders3" => "Model Geliştirme"
            ),
            "sinif"     => "4"
        )
        
    );
    foreach($ogrenciDetaylari as $sırala){
        echo "<pre>";
       print_r($sırala);
       echo "</pre>";
    }
   



echo "<br><br><h4>2.Uygulama: 0 ile 100 arasında Tek mi Çift mi olduğunu bulan program<br></h4>";
$random = rand(0,100);
$tek= $random % 2;
if ($tek !=0){

    echo "sayınız tektir: " . $random;

}else{
        echo "sayınız çifttir: " . $random;
}
    
echo "<br><br><h4>3.Uygulama: 0 ile 100 arasında üretilen değerde Kaldığınızı veya Geçtiğinizi bulan program<br></h4>";
 $random = rand(0,100);

 if($random <=49){
     echo "Kaldınız , Notunuz :" . $random;
 }else{
     echo "Geçtiniz , Notunuz :" . $random;
 }

    echo "<br><br><h4>4.Uygulama: 18 yaşından büyük olanların ehliyet alıp alamıcağını kontrol eden if programı<br></h4>";
    
     $random = rand(1980,2022);
       if($random <2004){
           echo "Ehliyet Alabilirsiniz , Doğum Tarihiniz : " . $random;
       }else{
           echo "Ehliyet Alamazsınız , Doğum Tarihiniz : " . $random;
       }
      


    ?>
  
</body>
</html>
