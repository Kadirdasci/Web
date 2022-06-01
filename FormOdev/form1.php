<?php 
include("vt.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Form</title>
</head>
<style>
    .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
</style>
<body>
    <form action="" method="post">
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1"> Bilgileriniz </h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div >
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Adınız Soyadınız</label>
                            <input type="text" class="form-control" name="adSoyad" placeholder="Adınız" required="required" />
                        </div>
                        
                        <div class="form-group">
                            <label for="email">
                                Mail Adresiniz</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="mail" placeholder="Mail Adresiniz" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Telefon Numaranız</label>
                            <input type="text" class="form-control" name="numara" placeholder="Telefon Numaranız" required="required" />
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="radios">Cinsiyetiniz</label>
                                <div class="controls">
                            <label class="radio" for="radios-0" style="    display: inline-block;">
                                <input type="radio"  name="cinsiyet" value="Kadin" checked="checked">
                                 Kadın
                                </label>
                                <label class="radio" for="radios-1" style="display: inline-block;">
                                <input type="radio"  name="cinsiyet" value="Erkek">
                                Erkek
                                </label>
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="subject">
                                Dersler</label>
                            <select  name="ders" class="form-control" required="required">
                                <option value="Yazılım Mimarileri">Yazılım Mimarileri</option>
                                <option value="Web Programlama">Web Programlama</option>
                                <option value="Sunucu İşletim Sistemleri">Sunucu İşletim Sistemleri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mesajınız</label>
                            <textarea  name="mesaj" class="form-control" rows="16" cols="25" required="required"
                                placeholder="Mesajınız"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="gonder">
                            Gönder</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
</form>
<?php 

if ($_POST) { 
	
	$adSoyad = $_POST['adSoyad']; 
	$mail = $_POST['mail'];
	$numara = $_POST['numara'];
	$cinsiyet = $_POST['cinsiyet'];
	$ders = $_POST['ders'];
	$mesaj = $_POST['mesaj'];

	if ($adSoyad<>"" && $mail<>"" && $numara<>"" && $cinsiyet<>"" && $ders<>"" && $mesaj<>"") { 
		
		if ($baglanti->query("INSERT INTO uye (adSoyad,mail,numara,cinsiyet,ders,mesaj) VALUES ('$adSoyad','$mail','$numara','$cinsiyet','$ders','$mesaj')")) 
		{
			echo "Veri Eklendi"; 
		}
		else
		{
			echo "Hata oluştu";
		}

	}

}

?>
</div>
<!-- ############################################################## -->


<div class="col-md-7">
<table class="table">
	
	<tr>
		<th>No</th>
		<th>Ad Soyad</th>
		<th>Mail</th>
		<th>Numara</th>
		<th>Cinsiyet</th>
		<th>Ders</th>
		<th>Mesaj</th>
		<th></th>
		<th></th>
	</tr>



<?php 

$sorgu = $baglanti->query("SELECT * FROM uye"); 

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id']; 
$adSoyad = $sonuc['adSoyad']; 
	$mail = $sonuc['mail'];
	$numara = $sonuc['numara'];
	$cinsiyet = $sonuc['cinsiyet'];
	$ders = $sonuc['ders'];
	$mesaj = $sonuc['mesaj'];


?>
	
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $adSoyad; ?></td>
		<td><?php echo $mail; ?></td>
		<td><?php echo $numara; ?></td>
		<td><?php echo $cinsiyet; ?></td>
		<td><?php echo $ders; ?></td>
		<td><?php echo $mesaj; ?></td>
	</tr>

<?php }  ?>

</table>
</div>
</div>




</body>
</html>