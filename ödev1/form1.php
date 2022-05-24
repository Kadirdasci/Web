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
                                Adınız</label>
                            <input type="text" class="form-control" id="ad" placeholder="Adınız" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Soyadınız</label>
                            <input type="text" class="form-control" id="soyad" placeholder="Soyadınız" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Mail Adresiniz</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="mail" placeholder="Mail Adresiniz" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Telefon Numaranız</label>
                            <input type="text" class="form-control" id="numara" placeholder="Telefon Numaranız" required="required" />
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="radios">Cinsiyetiniz</label>
                                <div class="controls">
                            <label class="radio" for="radios-0" style="    display: inline-block;">
                                <input type="radio" name="radios" id="radios-0" value="Kadin" checked="checked">
                                 Kadın
                                </label>
                                <label class="radio" for="radios-1" style="display: inline-block;">
                                <input type="radio" name="radios" id="radios-1" value="Erkek">
                                Erkek
                                </label>
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="subject">
                                Dersler</label>
                            <select id="subject" name="subject" class="form-control" required="required">
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
                            <textarea name="message" id="mesaj" class="form-control" rows="19" cols="25" required="required"
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



</body>
</html>