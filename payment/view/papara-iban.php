<?php
include '../../inc/config.php';
$accounts = $db->query("SELECT * from accounts where id = 1")->fetch_assoc();

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
    <meta name="description" content="Secure papara-iban payment system">
    <meta name="keywords" content="HizlicaParalar, papara-iban, payment">
    <meta name="author" content="HizlicaParalar">
    <meta name="image" content="https://hizlicaparalar.com/logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HizlicaParalar">
    <meta name="twitter:description" content="Secure papara-iban payment system">
    <meta name="twitter:image" content="https://hizlicaparalar.com/static/dashboard/login2.jpg">
    <meta name="og:title" content="HizlicaParalar">
    <meta name="og:description" content="Secure papara-iban payment system">
    <meta name="og:image" content="https://hizlicaparalar.com/static/dashboard/login2.jpg">
    <meta name="og:url" content="https://hizlicaparalar.com">
    <meta name="og:site_name" content="HizlicaParalar">
    <meta name="og:type" content="website">
    <meta property="og:title" content="HizlicaParalar">
    <meta property="og:description" content="Secure papara-iban payment system">
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
                    <img src="assets/logos/papara-iban.png" style="width: 150px;">
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
                          <span class="el-alert__title">Otomatik onay alabilmek için Ad ve Soyadınız papara-ibandaki isminiz ile aynı olmalı ve gizlilik modundaki isim görünümü açık olmalıdır</span>
                          <!---->
                          <!---->
                          <i class="el-alert__closebtn el-icon-close" style="display: none;"></i>
                        </div>
                      </div>
                      <div id="step-1">
                      <div class="el-row" style="margin-left: -7.5px; margin-right: -7.5px;">
                        <div class="el-col el-col-24" style="padding-left: 7.5px; padding-right: 7.5px;">
                          <div class="d-flex justify-center">
                            <form class="el-form" style="width: 100%;" onsubmit="setPayment('papara-iban')">
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
                                <label class="el-form-item__label">Yatırılacak Miktar (₺)</label>
                                <div class="el-form-item__content">
                                  <div class="el-input-number" style="width: 100%;">
                                    <span role="button" class="el-input-number__decrease">
                                      <i class="el-icon-minus"></i>
                                    </span>
                                    <span role="button" class="el-input-number__increase">
                                      <i class="el-icon-plus"></i>
                                    </span>
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
                            
                          </div>
                        </div>
                      </div>
                      <div class="el-col el-col-24" align="center">
                        <button onclick="step1()" type="button" class="el-button mt-15 mr-15 el-button--success">
                          <!---->
                          <!---->
                          <span>Sonraki Adım</span>
                        </button>
                      </div>
                      </div>
                      <div style="display: none;"  id="step-2">
                      <div class="el-row" style="margin-left: -7.5px; margin-right: -7.5px; ">
                        <div class="mt-20 el-col el-col-24 el-col-sm-24" align="center" style="padding-left: 7.5px; padding-right: 7.5px;">
                          <font color="black">
                            <b>Papara-IBAN Uygulamanızdan 'PARA GÖNDER' kısmına gelip Papara-IBAN No'yu Kopyalarak Gönderim Yapınız</b>
                          </font>
                        </div>
                        <div class="el-col el-col-24 el-col-sm-24" style="padding-left: 7.5px; padding-right: 7.5px;">
                          <div class="d-flex justify-center el-row" style="margin-left: -7.5px; margin-right: -7.5px;">
                            <div class="el-col el-col-24 el-col-xs-24 el-col-md-8 el-col-lg-6 el-col-xl-4" style="padding-left: 7.5px; padding-right: 7.5px;">
                              <div class="el-image">
                                <img style="width: 150px; margin-left: 20px;" src="assets/logos/papara-iban.png" class="el-image__inner">
                                <!---->
                              </div>
                            </div>
                            <div class="el-col el-col-24 el-col-xs-24 el-col-md-9 el-col-lg-7 el-col-xl-5" style="padding-left: 7.5px; padding-right: 7.5px;">
                              <p>
                                <strong>Papara-IBAN Ad Soyad:</strong> <?=$accounts['papara_iban_holder'] ?>
                              </p>
                              <p>
                                <strong>Papara-IBAN Hesap No:</strong>
                                <a class="el-link el-link--default is-underline" href="javascript:;" onclick="copyNumber('#number')">
                                  <!---->
                                  <span class="el-link--inner"><span id="number"><?=$accounts['papara_iban_number']?></span> <font color="red">
                                      <i class="el-icon-document-copy"></i> Kopyala
                                    </font>
                                  </span>
                                  <!---->
                                </a>
                              </p>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                      <div class="el-col el-col-24 el-col-sm-24" align="center">
                        <h5>Gönderim yaptıktan 20 sn içerisinde ödemeniz onaylanacaktır.</h5>
                        <div element-loading-text="Yatırım bekleniyor" class="el-loading-parent--relative">
                          <p>
                            <strong>Sipariş Numaranız:</strong> #5063404<?=$payments['id'] ?>
                          </p>
                          <p>
                            <strong>Referans Numaranız:</strong> #8ec06cc88<?=$payments['id'] ?>a440dc8baf0a01048dc7a
                          </p>
                          
                        </div>
                      </div>
                      <div class="el-col el-col-24" align="center" style="padding: 10px;">
                              <button  type="submit" class="el-button mt-10 mr-10 el-button--success" style="text-align: center; margin-left: 10px;">
                                <!---->
                                <!---->
                                <span> Ödemeyi Yaptım </span>
                              </button>
                             
                              <!---->
                              <!---->
                            </div>
                            </form>
                      </div>
                      <div style="display: none;" id="step-3">
                      <div class="form-content success">
                        <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                        <h3>Yatırım talebiniz onaylanmıştır</h3>
                        <p>
                          <strong>Papara-IBAN Hesap Sahibi:</strong> <?=$accounts['papara-iban_holder'] ?>
                        </p>
                        <p>
                          <strong>Papara-IBAN No:</strong> <?=$accounts['papara-iban_holder'] ?>
                        </p>
                        <p>
                          <strong>Sipariş Numaranız:</strong> #506352<?=$payments['id'] ?>1
                        </p>
                        <p>
                          <strong>Referans Numaranız:</strong> #9f7c6e1<?=$payments['id'] ?>cbec54b12bf70a8154e1c9f17
                        </p>
                      </div>
                      <div class="el-col el-col-24" align="center" style="padding: 10px;">
                        <button type="button" onclick="window.location.href = '/';" class="el-button mt-10 mr-10 el-button--success" style="text-align: center; margin-left: 10px;">
                          <!---->
                          <!---->
                          <span>Siteye Dön</span>
                        </button>
                        <button type="button" class="el-button el-button--danger" onclick="window.location.href = '/payment';" style="text-align: center; margin-top: 10px;">
                          <!---->
                          <!---->
                          <span>Sayfayı Kapat</span>
                        </button>
                        <!---->
                        <!---->
                      </div>
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
    <script src="assets/js/script.js"></script>
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