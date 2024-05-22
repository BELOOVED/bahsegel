<!DOCTYPE html>
<html lang="tr">
<head>
	<title>TurboHavale</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://turbohavale.com/assets/images/havaleicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?v2">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/main.css?v5">

<!--===============================================================================================-->
</head>
<body>
 <div class="limiter">
	<input type="hidden" id="pid">
	<div class="container-login100">
    	<div class="wrap-login100">
        	<center><img src="https://turbohavale.com/assets/images/turbohavalelogo.png" class="logoo"><br>
            <div id="loader" style="display:none;color:#fff;">
            	<center><h5>İşleminiz Kontrol Ediliyor Lütfen Bekleyiniz.</h5></center> 
               <div class="spinner">
  					<div class="rect1"></div>
  					<div class="rect2"></div>
  					<div class="rect3"></div>
  					<div class="rect4"></div>
  					<div class="rect5"></div>
              </div>
            </div>

<form class="login100-form validate-form" action="#" onsubmit="return gonder();" id="form1">
    <input type="hidden" value="618" id="sid" name="sid">
    <input type="hidden" value="39533974" id="sessionid" name="sessionid">
    <input type="hidden" value="" id="endpoint" name="endpoint">
    <input type="hidden" value="TL" id="currency" name="currency">
    <div class="wrap-input100" style='display:none;'>
        <input class="input100" type="text" name="username" id="username" value='8458018'>
        <span class="focus-input100" data-placeholder="Kullanıcı Adınız"></span>
    </div>
            <input class="input100" type="hidden" name="name" id="name">
        <div class="wrap-input100">
        <input class="input100 has-val" type="number" value='100.0' disabled name="miktar" id="miktar" step="0.01" required>
        <span class="focus-input100" data-placeholder="Miktar (TL)"></span>
    </div>
    <div class="wrap-input100">
        <select class="input100" id="banka">
<option value="">Bankanızı Seçiniz.</option>
                        <option value="Akbank">
	Akbank</option>
                        <option value="Aktif Bank">
	Aktif Bank</option>
                        <option value="Albaraka Türk Bankası">
	Albaraka Türk Bankası</option>
                        <option value="Alternatif Bank">
	Alternatif Bank</option>
                        <option value="DenizBank">
	DenizBank</option>
                        <option value="Enpara">
	Enpara</option>
                        <option value="Fast">
	Fast</option>
                        <option value="Fibabank">
	Fibabank</option>
                        <option value="Garanti Bankası">
	Garanti Bankası</option>
                        <option value="Halkbank">
	Halkbank</option>
                        <option value="ING Bank">
	ING Bank</option>
                        <option value="İş Bankası">
	İş Bankası</option>
                        <option value="Kuveyt Türk Bankası">
	Kuveyt Türk Bankası</option>
                        <option value="Odeabank">
	Odeabank</option>
                        <option value="Papara">
	Papara</option>
                        <option value="PTT Bank">
	PTT Bank</option>
                        <option value="QNB Finansbank">
	QNB Finansbank</option>
                        <option value="Şekerbank">
	Şekerbank</option>
                        <option value="TEB">
	TEB</option>
                        <option value="Türkiye Finans Bankası">
	Türkiye Finans Bankası</option>
                        <option value="Vakıf Katılım Bankası">
	Vakıf Katılım Bankası</option>
                        <option value="VakıfBank">
	VakıfBank</option>
                        <option value="Yapıkredi Bankası">
	Yapıkredi Bankası</option>
                        <option value="Ziraat Bankası">
	Ziraat Bankası</option>
                        <option value="Ziraat Katılım Bankası">
	Ziraat Katılım Bankası</option>
                    </select>
    </div>
    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">Yatırım İşlemine Başla</button>
        </div>
    </div>
</form>
<form class="login100-form validate-form" action="#" onsubmit="return false;" id="form2" style="display:none;"><input type="hidden" id="controlnumber" value="0">
<center>
<h7>İşlem Süresince <b>Kesinlikle</b> Sayfadan Ayrılmayınız.</h7><br>
<h7><b>Açıklama bölümünü lütfen boş bırakınız veya adınızı soyadınızı yazınız.</b></h7><br>
    <h7>Lütfen Aşağıdaki Banka Hesabına üyeliğinizde bulunan isminizle <b id="miktarr"></b> yatırım gerçekleştiriniz.</h7>
<p>Hesap Sahibi :</p><b id="ppname"></b>
<p>IBAN :</p><b id="ppno"></b><br>
<button class="btn btn-warning btn-sm" type="button" onclick="CopyToClipboard('ppno')"><i class="fa fa-copy"></i> Kopyala</button><br>
<hr>
<h7>Yatırım Yapmanızın Ardından Yatırımı Gerçekleştirdim Butonuna Tıklayınız.</h7>
<div class="container-login100-form-btn">
    <!--<button class="btn btn-danger" onclick="cancel()">İşlemi İptal Et</button>-->
        <button class="btn btn-success" id="yatSuccessBtn" style="margin-left: 30px;" onclick="success()">Yatırımı Gerçekleştirdim</button>
</div>
</center>
</form>
<form class="login100-form validate-form" action="#" onsubmit="return false;" id="form3" style="display:none;">
<center><div class="o-circle c-container__circle o-circle__sign--success"><div class="o-circle__sign"></div></div>
<hr><h5>Yatırım talebiniz başarıyla oluşturulmuştur. Kontrollerin ardından yatırımınız üyeliğinize yansıyacaktır.<br>Siteye Yönlendiriliyorsunuz Lütfen Bekleyiniz.</h5><hr>
</center>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/bootstrap/js/popper.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/js/main.js"></script>
<script src="assets/js/notify.js"></script>
<script type="text/javascript" src="assets/vendor/qr/jquery.qrcode.min.js"></script>
<script>

function wait(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
            end = new Date().getTime();
        }
    }
   
     function yonlendir(a){
        var link = "?snc="+a;
        notify("Siteye Yönlendiriliyorsunuz Lütfen Bekleyiniz.","warning");


         setTimeout(function(){
           location.href="https://pyg.letspayments.com/finalpage?sp=107&ps=1630&mes=&clientRequestId=128371485&transactionAmount=100.0&currency=TRY&customerId=8458018&pstransid=&psName=TurboHavale&isNew=1&lang= tr&r="+a;
  // history.back();
         },5000); 
    }


   function notify(a,b){
       $.notify(a,
        {
           className:b});
   }

       function updatewallets(){
        $.ajax({
            url:"api/check.php?updatewallets",
            async:true,
            success:function(data){
            }
        }) 
    }
    

      /*  function cancel(){
        $("#loader").show();
        $("#form2").hide();
        $.ajax({
            url:"api/check.php?acancel",
            async:true,
            type:"get",
            dataType:"json",
            success:function(data){
                notify("Yatırım İşleminiz İptal Edilmiştir.","success")
                $("#pid").val("");
                $("#loader").hide();
                yonlendir("0");
            }
        })
    }*/

    (function checkbid(){
    $.ajax({
    url:"api/check.php?checkbid&id=9874859&token=10714222ad",
    async:true,
    dataType:"json",
    headers: {Tbid:'9874859',Ttime:'1699779729',Thash:'90c31057cd0cbbd861d90bae582280b3cf01c6272ad5a33c4591e8d82eb08bc5'},
    success:function(data){
    var status = data.status;
    if(status == "1"){
      yonlendir(1);
    }
    if(status == "0"){
      yonlendir(0);
  }
    if(status == ""){

  }
  }
  }).then(function(){
    setTimeout(checkbid,20000);
})
  })();
$(document).ready(function() {

var name = $("#name").val("SerhatElçi");

});

function CopyToClipboard(id){
    var r = document.createRange();
    r.selectNode(document.getElementById(id));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();
}

function success() {
$("#loader").show();
$("#form2").hide();

$.ajax({
url: "api/check.php?ysuccess",
async: true,
dataType: "json",
headers: {Tbid:'9874859',Ttime:'1699779729',Thash:'90c31057cd0cbbd861d90bae582280b3cf01c6272ad5a33c4591e8d82eb08bc5'},
success: function(data) {
    $("#loader").hide();
    $("#form3").show();
    yonlendir("1");
}
})

}

function gonder() {

var miktar = $("#miktar").val();
var banka = $("#banka").val();
var min = 0;
var maks = 1000000;
var name = $("#name").val();
if(banka == ""){
notify("Bankanızı Seçiniz.");
return false;
}
if(miktar <= min || miktar >= maks) {
notify("Miktar " + min + " Tl ile " + maks + " Tl aralığında olmalıdır.", "error")
} else {
$("#loader").show();
$("#form1").hide();
$.ajax({
url: "api/check.php?asid&miktar=" + miktar + "&name="+name+"&method=havale&banka="+banka+"&token=10714222ad&id=9874859",
async: true,
type: "get",
dataType: "json",
headers: {Tbid:'9874859',Ttime:'1699779729',Thash:'90c31057cd0cbbd861d90bae582280b3cf01c6272ad5a33c4591e8d82eb08bc5'},
success: function(data) {
if(data.error == "") {
var id = data.id;
var sid = data.sid;
var site = data.site;
var name = data.name;
var amount = data.amount;
var amountqr = amount.replace(",", ".");
var username = data.username;
var ppname = data.hesap;
var ppno = data.walletno;
$("#pid").val(id);


if(ppno == "") {
notify("Yatırımınıza Uygun Banka Hesabı Bulunmamaktadır.", "error")
//cancel()
} else {
$("#namee").html(name);
$("#ppno").html(ppno);
$("#ppname").html(ppname);
$("#miktarr").html(miktar + " TL");
$("#form2").show();
notify("İşlem Süresince Kesinlikle Sayfadan Ayrılmayınız.", "info")
$("#loader").hide();
}
} else {
notify(data.error, "error")
//cancel();
}
},
error: function(error) {
yonlendir("0");
}
})
}
return false;
}

</script>
</body>
</html>
