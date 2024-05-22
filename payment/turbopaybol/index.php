<!DOCTYPE html>
<html lang="tr">
<head>
<title>İzpara</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://www.papara.com/Assets/img/icon/apple-touch-icon.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css?v2">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="yontem/main.css?v8">

</head>
<body>
<div class="limiter">
<input type="hidden" id="pid">
<div class="container-login100">
<div class="wrap-login100">
<center><img src="images/logo.png" class="logoo"><br>
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
<input type="hidden" value="476" id="sid" name="sid">
<input type="hidden" value="39537492" id="sessionid" name="sessionid">
<input type="hidden" value id="endpoint" name="endpoint">
<input type="hidden" value="TL" id="currency" name="currency">
<div class="wrap-input100" style="display:none;">
<input class="input100" type="text" name="username" id="username" value="8458018">
<span class="focus-input100" data-placeholder="Kullanıcı Adınız"></span>
</div>
<input class="input100" type="hidden" name="name" id="name">
<div class="wrap-input100">
<input class="input100 has-val" type="number" value="100.0" disabled name="miktar" id="miktar" step="0.01" required>
<span class="focus-input100" data-placeholder="Miktar (TL)"></span>
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
<h7>İşlem Süresince <b>Kesinlikle</b> Sayfadan Ayrılmayınız.</h7>
<h7>Lütfen Aşağıdaki Banka Hesabına üyeliğinizde bulunan isminizle <b id="miktarr"></b> yatırım gerçekleştiriniz.</h7>
<h7>Lütfen gönderim yaparken açıklama kısmını boş bırakınız !</h7><br>
<h7>isim soyisim / paybol numarası / siteadı /bahis/ vb. ifadeler kullanmayınız, yatırım onaylanmayacaktır.</h7><br><br>
<p>Hesap Sahibi :</p><b id="ppname"></b>
<p>Hesap Numarası :</p><b id="ppno"></b><br><button class="btn btn-warning btn-sm" type="button" onclick="CopyToClipboard('ppno')"><i class="fa fa-copy"></i> Kopyala</button><br>
<hr>
<div class="container-login100-form-btn">
<button class="btn btn-danger" onclick="cancel()">İşlemi İptal Et</button>
<button class="btn btn-success" style="margin-left: 30px;" onclick="success()">Yatırımı Gerçekleştirdim</button>
</div>
</center>
</form>
<form class="login100-form validate-form" action="#" onsubmit="return false;" id="form3" style="display:none;">
<center>
<div class="o-circle c-container__circle o-circle__sign--success">
<div class="o-circle__sign"></div>
</div>
<hr>
<h5>Yatırımınız Talebiniz Alınmıştır.Kontrollerin Ardından Bakiyeye Yansıyacaktır.<br>Siteye Yönlendiriliyorsunuz Lütfen Bekleyiniz.</h5>
<hr>
</center>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>
<script src="js/notify.js"></script>
<script type="text/javascript" src="vendor/qr/jquery.qrcode.min.js"></script>
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
           location.href="https://pyg.letspayments.com/finalpage?sp=107&ps=1632&mes=&clientRequestId=128373608&transactionAmount=100.0&currency=TRY&customerId=8458018&pstransid=&psName=TurboPaybol&isNew=1&lang= tr&r="+a;
  // history.back();
         },5000); 
    }


   function notify(a,b){
       $.notify(a,
        {
           className:b});
   }

function changeType(a){
$.ajax({
url:"api/check.php?changeType&id=2709775&token=484962c48e&type="+a,
async:true,
dataType:"json",
success:function(data){
if(data.error != ""){
	notify(data.error,"error");
	return false;
}else{
	location.reload();
}
}
});
}

       function updatewallets(){
        return false;
	$.ajax({
            url:"api/check.php?updatewallets",
            async:true,
            success:function(data){
            }
        }) 
    }
    

        function cancel(type="papara"){
        $("#loader").show();
        $("#form2").hide();
        $.ajax({
            url:"api/check.php?acancel&type="+type,
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
    }

    (function checkbid(){
    $.ajax({
    url:"api/check.php?checkbid",
    async:true,
    dataType:"json",
    success:function(data){
    var status = data.status;
    if(status == "1"){
     $("#form2").hide();
     $("#form3").show();
      yonlendir(1);
    }
    if(status == "0"){
     $("#form2").hide();
     $("#form4").show();
      yonlendir(0);
  }
    if(status == ""){

  }
  }
  }).then(function(){
    setTimeout(checkbid,5000);
})
  })();
$(document).ready(function() {
$(".logoo").attr("src","https://izpara.turboyatirim.com/images/logoPaybol.png");

    updatewallets()
        var name = $("#name").val("SerhatElçi");
    //gonder()
    });

function success() {
    $("#loader").show();
    $("#form2").hide();
    var id = $("#pid").val();
    var controlnumber = parseInt($("#controlnumber").val());
    console.log(controlnumber)
    $("#controlnumber").val(controlnumber + 1);
    if(controlnumber < 3) {
        $.ajax({
            url: "api/check.php?ysuccess",
            async: true,
            dataType: "json",
            success: function(data) {
                setTimeout(function() {
                    successcheck(id, controlnumber);
                }, 5000);
            }
        })
    } else {
        successcheck(id, controlnumber);
    }
}

function successcheck(a, b) {
    var id = a;
    var controlnumber = b;
	$("#form3").show();
	$("#loader").hide();
	yonlendir("1");
}


function CopyToClipboard(id)
{
var r = document.createRange();
r.selectNode(document.getElementById(id));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
}

function gonder() {
    updatewallets();
    var sid = $("#sid").val();
    var sessionid = $("#sessionid").val();
    var username = $("#username").val();
    var name = $("#name").val();
    var miktar = $("#miktar").val();
    var endpoint = $("#endpoint").val();
    var min = 0;
    var maks = 100000;
    if(miktar <= min || miktar >= maks) {
        notify("Miktar " + min + " Tl ile " + maks + " Tl aralığında olmalıdır.", "error")
    } else {
        $("#loader").show();
        $("#form1").hide();
        $.ajax({
            url: "api/check.php?asid=" + sid + "&miktar=" + miktar + "&fullname="+name+"&method=&id=2709775&token=484962c48e&method=paybol",
            async: true,
            type: "get",
            dataType: "json",
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
                        notify("Yatırımınıza Uygun Paybol Hesabı Bulunmamaktadır.", "error")
                        cancel()
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

function ismobile() {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return "mobile";
    } else {
        return "pc";
    }
}
</script>
</body>
</html>
