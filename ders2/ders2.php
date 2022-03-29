<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "<h4>Tırnak İşaretleri Arasındaki Farklar</h4>";

$uni = "Adnan Menderes Üniversitesi";
echo "Değişken İçeriği: $uni";
echo "<br>";
/* Değişkenin ismini yazdırır. */
echo "1-Kazandığınız Üniversite: " . '$uni';
echo "<br>";
/* Değişkenin içeriğini yazdırır. */
echo "2-Kazandığınız Üniversite: " . "$uni";
echo "<br>";
/* Değişkenin içeriğini yazdırır. */
echo "3-Kazandığınız Üniversite: " . $uni;
echo "<br>";
/* Değişkenin içeriğini yazdırır. */
echo "4-Kazandığınız Üniversite: $uni";

echo "<hr><h3>Temel Matematiksel İşlemler</h3>";

echo "<h4>Toplama İşlemi</h4>";

$sayi1 = 10;
$sayi2 = 20;

$sonuc = $sayi1 + $sayi2;
echo "$sayi1 + $sayi2 = $sonuc";

echo "<h4>Çıkarma İşlemi</h4>";

$sayi1 = 10;
$sayi2 = 20;

$sonuc = $sayi2 - $sayi1;
echo "$sayi2 - $sayi1 = $sonuc";

echo "<h4>Çarpma İşlemi</h4>";

$sayi1 = 10;
$sayi2 = 20;

$sonuc = $sayi1 * $sayi2;
echo "$sayi1 * $sayi2 = $sonuc";

echo "<h4>Bölme İşlemi</h4>";

$sayi1 = 10;
$sayi2 = 20;

$sonuc = $sayi1 / $sayi2;
echo "$sayi1 / $sayi2 = $sonuc";

echo "<h4>Üst alma(pow) İşlemi</h4>";

$x=3;
$y= 2;
echo "$x<sup>$y</sup>=". pow($x,$y);

echo "<br>Değişken Tipi = ".' ( $x ) '.gettype($x);

echo "<h4>Karekök Alma İşlemi(sqrt)</h4>";
$x=25;
$karekok =sqrt($x);
echo "$x'in Karekökü = $karekok";

echo "<h4>Mutlak Değer İşlemi(abs)</h4>";

$x = (-4);
$mutlak = abs($x);
echo "|$x|'in Mutlak Değeri : $mutlak";

echo "<h4>Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h4>";

echo "27 sayısının 2'lik tabandaki karşılığı : ".base_convert(27,10,2);
$sayi=30;
$taban =10;
$yenitaban=2;
$sonuc=base_convert($sayi,$taban,$yenitaban);
echo "<br>($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub>";


echo "<h5> Mod İşlemi(fmod(x,y))</h5>";
$x=15;
$y=4;
$mod=fmod($x,$y);
echo "$x mod $y = $mod";
echo "<br>$x Sayısı : ".((fmod($x,2)==0) ? "Çifttir." : "Tektir");

echo "<h4>Yuvarlama İşlemi(round(x,y))</h4>";
$x=15.315;
$y=15.385;
echo "$x Bir Ondalık Basamak Yuvarlanması: ".round($x,1);
echo "<br>$y Bir Ondalık Basamak Yuvarlanması: ".round($y,1);

echo "<h4>Yuvarlama İşlemi(floor(x))</h4>";
$x=15.315;
echo "$x : ".floor($x);

echo "<h4>Yuvarlama İşlemi(ceil(x))</h4>";
$x=15.315;
echo "$x : ".ceil($x);

echo "<h4>Rastgele Sayı Üretme İşlemi(rand())</h4>";
echo "10-100 Arasında Rastgele Değer : ".rand(10,100);

for ($i=0; $i <10 ; $i++) { 
    echo "<br>10-100 Arasında Rastgele Değer : ".rand(10,100);
}






?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>