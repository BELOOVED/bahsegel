<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <bonus-activities class="ng-star-inserted">
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Bonus Hareketlerim</a>
            </div>
         </div>
         <app-notifications>
            <div>
               <!---->
            </div>
         </app-notifications>
         <div accordion="" class="modul-accordion bonus-activities ng-star-inserted">
            <div class="modul-header"><span class="header-text"> Bonus İşlemleri </span><i class="fa fa-chevron-right right"></i></div>
            <div class="modul-content">
               <span class="title">En son 10 bonus işlemleri</span><!----><!---->
               <message-box type="error" content="MESSAGES.NO_BONUS_HISTORY_RECORD" class="ng-star-inserted">
                  <div class="card-panel message-box error">
                     <!----><!---->
                     <div class="ng-star-inserted">
                        Geçmiş dönemler için bonus işlemi bulunamadı<!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!---->
                  </div>
               </message-box>
               <!----><!---->
            </div>
         </div>
         <!---->
         <app-static-inner-content contentcode="m_bonus_action">
            <div extroutelink="" id="m_bonus_action" class="ng-star-inserted">
               <div id="bosbos">
                  <style>
                     .popup-trigger {
                     display: block;
                     width: 170px;
                     height: 45px;
                     margin-left: 45px;
                     float: left;
                     line-height: 38px;
                     border: 0;
                     text-align: center;
                     color: #FFF;
                     font-size: 18px;
                     padding: 4px 4px;
                     text-decoration: none;
                     text-transform: uppercase;
                     border-radius: 4px;
                     background: #dc9d10;
                     box-shadow: 0 3px 0 rgb(0 0 0 / 7%);
                     transition: 300ms all;
                     }
                     .popup-trigger:hover {
                     opacity:.8;
                     }
                     .popup {
                     position: fixed;
                     left: 0;
                     top: 0;
                     height: 100%;
                     z-index: 1000;
                     width: 100%;
                     background-color: rgba(94, 110, 141, 0.9);
                     opacity: 0;
                     visibility: hidden;
                     transition:500ms all;
                     box-sizing: unset;
                     }
                     .popup.is-visible {
                     opacity: 1;
                     visibility: visible;
                     transition:1s all;
                     }
                     .popup-container {
                     transform:translateY(-50%);
                     transition:500ms all;
                     position: relative;
                     width: 40%;
                     margin: 2em auto;
                     top: 5%;
                     padding: 34px;
                     background: #FFF;
                     border-radius: .25em .25em .4em .4em;
                     text-align: left;
                     box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                     }
                     .is-visible .popup-container {
                     transform:translateY(0);
                     transition:500ms all;
                     }
                     .popup-container .popup-close {
                     position: absolute;
                     top: 8px;
                     font-size:0;
                     right: 8px;
                     width: 30px;
                     height: 30px;
                     }
                     .popup-container .popup-close::before,
                     .popup-container .popup-close::after {
                     content: '';
                     position: absolute;
                     top: 12px;
                     width: 14px;
                     height: 3px;
                     background-color: #8f9cb5;
                     }
                     .popup-container .popup-close::before {
                     -webkit-transform: rotate(45deg);
                     -moz-transform: rotate(45deg);
                     -ms-transform: rotate(45deg);
                     -o-transform: rotate(45deg);
                     transform: rotate(45deg);
                     left: 8px;
                     }
                     .popup-container .popup-close::after {
                     -webkit-transform: rotate(-45deg);
                     -moz-transform: rotate(-45deg);
                     -ms-transform: rotate(-45deg);
                     -o-transform: rotate(-45deg);
                     transform: rotate(-45deg);
                     right: 8px;
                     }
                     .popup-container .popup-close:hover:before,
                     .popup-container .popup-close:hover:after {
                     background-color:#35a785;
                     transition:300ms all;
                     }
                     #xturu {
                     display: block;
                     width: 45%;
                     font-size: 14px;
                     float: left;
                     border: 1px solid #9e9a9a;
                     background: #fff;
                     color:#000;
                     }
                     @media only screen and (max-width: 800px) {
                     .popup-container {
                     width: 75%;
                     }
                     #info {
                     margin-bottom: 20px;
                     margin-top: 20px;
                     margin-left: 30px;
                     width: 83%;
                     }
                     #xturu {
                     height: 36px;
                     color: #000;
                     font-size: 18px;
                     margin-left: 30px;
                     float: left;
                     display: block;
                     width: 83%;
                     margin-top: 20px;
                     }
                     }
                     #iframInfo {
                     height: 190px;
                     overflow: scroll;
                     }
                     #submitSuc {
                     background: #257112;
                     color: #FFF;
                     border: 0;
                     padding: 0 14px;
                     float: right;
                     height: 34px;
                     line-height: 34px;
                     cursor: pointer;
                     }
                     #kapatSuc {
                     background: #257112;
                     color: #FFF;
                     border: 0;
                     padding: 0 14px;
                     float: right;
                     height: 34px;
                     line-height: 34px;
                     cursor: pointer;
                     display:none;
                     }
                     #xbonusHata {
                     display:none;
                     text-align: center;
                     color: #fff;
                     background: red;
                     height: 42px;
                     line-height: 42px;
                     margin-bottom: 10px;
                     width: 100%;
                     }
                  </style>
                  <div accordion="" class="modul-accordion bonus-activities ng-star-inserted">
                     <div class="modul-header"><span class="header-text"> Bonus Talep Verme Formu </span><i class="fa fa-chevron-right right"></i></div>
                     <div class="modul-content">
                        <message-box content="MESSAGES.NO_BONUS_HISTORY_RECORD" type="error" class="ng-star-inserted">
                           <select id="xturu" name="xturu">
                              <option value="0">Lütfen Bonusunuzu Seçiniz</option>
                              <option value="13">%15 Papara/Bitcoin Bonusu</option>
                              <option value="2">%20 Envoy Yatırım Bonusu</option>
                              <option value="12">%25 Envoy Qr Yatırım/Cepbank</option>
                              <option value="3">%10 Sanal Kart Bonusu</option>
                              <option value="5">Nakit Iade Bonusu</option>
                              <option value="4">Deneme Bonusu(Spor)</option>
                              <option value="14">Free Spins</option>
                              <option value="11">%10 Çevrim Şartsız Bonus</option>
                              <option value="6">Casino Discount</option>
                              <option value="7">Netent Bonusu</option>
                              <option value="8">Rakeback Bonusu</option>
                           </select>
                           <button id="info" class="info popup-trigger" type="button">TALEBİ GÖNDER</button>
                           <div style="clear:both"></div>
                        </message-box>
                     </div>
                  </div>
                  <div class="popup" role="alert">
                     <div class="popup-container">
                        <a class="popup-close img-replace">Close</a>
                        <div id="xbonusHata"></div>
                        <div id="iframInfo">Liman</div>
                        <div id="submitSuc">Şartları Okudum ve Onaylıyorum</div>
                        <div id="kapatSuc">Kapat</div>
                        <br>
                     </div>
                  </div>
                  <div accordion="" class="modul-accordion bonus-activities ng-star-inserted">
                     <div class="modul-header"><span class="header-text"> Bonus Geçmişi </span><i class="fa fa-chevron-right right"></i></div>
                     <div class="modul-content">
                        <message-box content="MESSAGES.NO_BONUS_HISTORY_RECORD" type="error" class="ng-star-inserted">
                           <div id="bonusDetay">
                              Herhangi bir talebiniz mevcut değildir.
                              <style type="text/css">
                                 .idBonus {
                                 background: #c38a41;
                                 color: #FFF;
                                 }
                                 .bonusListe {
                                 width: 100%;
                                 line-height: 24px;
                                 width: 100%;
                                 line-height: 24px;
                                 color: #000;
                                 background: #ffe9b9;
                                 border-bottom: 6px solid #fff;
                                 }
                                 .bonusListeTarih {
                                 width: 33.33%;
                                 float: left;
                                 line-height: 24px;
                                 font-weight:bold;
                                 padding: 0 4px;
                                 }
                                 .bonusListeTuru {
                                 width: 33.33%;
                                 float: left;
                                 line-height: 24px;
                                 font-weight:bold;
                                 }
                                 .bonusListeDurum {
                                 width: 33.33%;
                                 float: left;
                                 line-height: 24px;
                                 font-weight:bold;
                                 }
                                 .bonusListeDurumIptal {
                                 width: 100%;
                                 padding: 0 4px;
                                 }
                                 @media only screen and (max-width: 600px) {
                                 .bonusListeDurumIptal {
                                 font-size: 12px;
                                 }
                                 }
                                 #bonusDetay {
                                 background: #fff;
                                 }
                              </style>
                              <div class="bonusListe idBonus">
                                 <div class="bonusListeTarih idBonus">TARİH</div>
                                 <div class="bonusListeTuru idBonus">TÜRÜ</div>
                                 <div class="bonusListeDurum idBonus">DURUM</div>
                              </div>
                              Herhangi bir talebiniz mevcut değildir.
                           </div>
                           <div style="clear:both"></div>
                        </message-box>
                     </div>
                  </div>
                  <script>
                     jQuery(document).ready(function($){
                         var user = $('.profile .text').text();
                         var code = $('.profile .number').text();
                         var dbak=$('.header-balance.right').text();
                         var gBakiye= Math.floor(dbak.substring(1));
                     
                     
                     
                     
                         $(".popup-container").on('click', '#submitSuc', function(){
                     
                     
                             //$("#submitSuc").hide();
                             if ($('#xturu').val() == 4 && gBakiye > 5) {
                                 $("#xbonusHata").css('display', 'inline-table');
                                 $('#xbonusHata').html("Deneme Bonusu sadece yeni üyeler için geçerlidir.");
                                 return;
                             }
                             if ($('#xturu').val() == 5 && gBakiye > 5) {
                                 $("#xbonusHata").css('display', 'inline-table');
                                 $('#xbonusHata').html("Nakit iade bonusundan faydalanmaniz için güncel bakiyeniz 0 olması gerekmektedir. ");
                                 return;
                             }
                             if ($('#xturu').val() == 6 && gBakiye > 5) {
                                 $("#xbonusHata").css('display', 'inline-table');
                                 $('#xbonusHata').html("Casino bonusundan faydalanmaniz için güncel bakiyeniz 0 olması gerekmektedir.");
                                 return;
                             }
                             if ($('#xturu').val() == 7 && gBakiye > 5) {
                                 $("#xbonusHata").css('display', 'inline-table');
                                 $('#xbonusHata').html("Netent bonusundan faydalanmaniz için güncel bakiyeniz 0 olması gerekmektedir.");
                                 return;
                             }
                     
                             if ($('#xturu').val() == 0) {
                                 $("#xbonusHata").css('display', 'inline-table');
                                 $('#xbonusHata').html("Lütfen Talep etmekte oldugunuz bonus türünü seçiniz.");
                             } else {
                                 console.log("test");
                                 console.log($('#xturu').val());
                     
                                 $("#iframInfo").hide();
                                 $("#submitSuc").hide();
                                 $("#kapatSuc").show();
                                 $("#xbonusHata").css('display', 'inline-table');
                                 $.get( "https://api.cdnroot.net/api/lmnv2/bonus/addBonus.php", { id:$('#xturu').val(),user: user, code: code } )
                                     .done(function( data ) {
                                         var obj = jQuery.parseJSON(data);
                                         if (obj.durum ==1) {
                                             $('#xbonusHata').html(obj.mesaj);
                                             $("#xbonusHata").css('display', 'inline-table');
                                         } else {
                                             $('#xbonusHata').html("Bonusunuz işleme alındı");
                                             $("#xbonusHata").css('display', 'inline-table');
                                             location.reload();
                                         }
                                     });
                             }
                         });
                     
                         $('.popup-trigger').on('click', function(event){
                             event.preventDefault();
                             $("#iframInfo").show();
                             $("#submitSuc").show();
                             $("#kapatSuc").hide();
                             $("#xbonusHata").hide();
                     
                             var selectedOptionVal = $('#xturu').find(":selected").val();
                             if (selectedOptionVal==0) {
                                 alert('Lütfen talep etmek istediğiniz bonus türünü seçiniz.');
                             } else {
                                 $.get( "https://api.cdnroot.net/api/lmnv2/bonus/lookBonus.php?id="+selectedOptionVal, {  } )
                                     .done(function( data ) {
                                         $("#iframInfo").html(data);
                                         document.getElementById('iframInfo').scrollTop = 0;
                                     });
                                 console.log(selectedOptionVal);
                                 $('.popup').addClass('is-visible');
                             }
                         });
                     
                         $(".popup").on('click', function(event){
                             if( $(event.target).is('#kapatSuc') ) {
                                 event.preventDefault();
                                 $(this).removeClass('is-visible');
                             }
                         });
                         $('.popup').on('click', function(event){
                             if( $(event.target).is('.popup-close') || $(event.target).is('.popup') ) {
                                 event.preventDefault();
                                 $(this).removeClass('is-visible');
                             }
                         });
                         //close popup when clicking the esc keyboard button
                         $(document).keyup(function(event){
                             if(event.which=='27'){
                                 $('.popup').removeClass('is-visible');
                             }
                         });
                     
                     
                         $.get( "https://api.cdnroot.net/api/lmnv2/bonus/getBonusRapor.php", { user: user, code: code } )
                             .done(function( data ) {
                                 $("#bonusDetay").html(data);
                             });
                     
                     
                     });
                  </script>
               </div>
            </div>
            <div class="ng-star-inserted">
               <script type="text/javascript">
                  setTimeout(function(){
                      $(document).ready(function(){ 
                    $.get("https://api.cdnroot.net/api/lmnv2/bonus/getBonusTalepM.php", function(data) {
                      $("#bosbos").html(data);
                    }); 
                  
                  }); 
                  
                  },500);
               </script>
            </div>
            <div class="ng-star-inserted"></div>
            <!----><!---->
         </app-static-inner-content>
         <div accordion="" class="modul-accordion bonus-activities ng-star-inserted">
            <div class="modul-header"><span class="header-text"> Casinopro Bonus Geçmişi </span><i class="fa fa-chevron-right right"></i></div>
            <div class="modul-content">
               <span class="title">En son 10 bonus işlemleri</span><!----><!---->
               <message-box type="error" content="MESSAGES.NO_BONUS_HISTORY_RECORD" class="ng-star-inserted">
                  <div class="card-panel message-box error">
                     <!----><!---->
                     <div class="ng-star-inserted">
                        Geçmiş dönemler için bonus işlemi bulunamadı<!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!---->
                  </div>
               </message-box>
               <!----><!---->
            </div>
         </div>
         <!---->
      </bonus-activities>
      <!---->
   </app-dashboard>
   <!---->
   <payments-widget>
      <owl-carousel-o _nghost-rlw-c77="" class="ng-star-inserted">
         <div _ngcontent-rlw-c77="" class="owl-carousel owl-theme owl-loaded owl-drag">
            <div _ngcontent-rlw-c77="" class="owl-stage-outer ng-star-inserted">
               <owl-stage _ngcontent-rlw-c77="" class="ng-tns-c78-3 ng-star-inserted">
                  <div class="ng-tns-c78-3" style="transition: all 0.88s ease 0s;">
                     <div class="owl-stage ng-tns-c78-3" style="width: 6370px; transform: translate3d(-2366px, 0px, 0px); transition: all 0.88s ease 0s;">
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="tiktak-havale-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1764 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="softpay-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1219 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="sistemnakit-papara-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1958 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="sistemnakit-bank-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1956 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="seripopy-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1871 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="safirhavale-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1423 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="scashmoney-bank-transfer-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" width="100" height="33" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1572 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="starpay-papara-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1869 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="envoysoft-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-412 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="envoyqr-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-521 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="papara-form-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-264 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="upaycoins-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-672 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted active" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="BANK_TRANSFER">
                                 <div class="fix-payments ng-star-inserted">
                                    <payment-icon>
                                       <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                    <span class="pymnt-icon icon-finance100x33-8"></span>
                                 </div>
                                 <!----><!----><!---->
                                 <div class="flex-container">
                                    <!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted active" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="MOBILEBANK">
                                 <!---->
                                 <div class="fix-payments ng-star-inserted">
                                    <payment-icon>
                                       <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                    <span class="pymnt-icon icon-cepbank100x33"></span>
                                 </div>
                                 <!----><!---->
                                 <div class="flex-container">
                                    <!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted active" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="turbohavale-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1651 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="scashmoney-fixturka-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1945 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="scashmoney-papara-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1576 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="tiktak-havale-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1764 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="softpay-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1219 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="sistemnakit-papara-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1958 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="sistemnakit-bank-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1956 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="seripopy-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1871 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="safirhavale-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1423 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="scashmoney-bank-transfer-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" width="100" height="33" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1572 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="starpay-papara-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1869 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="envoysoft-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-412 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="envoyqr-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-521 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="papara-form-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-264 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="upaycoins-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-672 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="BANK_TRANSFER">
                                 <div class="fix-payments ng-star-inserted">
                                    <payment-icon>
                                       <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                    <span class="pymnt-icon icon-finance100x33-8"></span>
                                 </div>
                                 <!----><!----><!---->
                                 <div class="flex-container">
                                    <!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="MOBILEBANK">
                                 <!---->
                                 <div class="fix-payments ng-star-inserted">
                                    <payment-icon>
                                       <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                    <span class="pymnt-icon icon-cepbank100x33"></span>
                                 </div>
                                 <!----><!---->
                                 <div class="flex-container">
                                    <!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="turbohavale-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1651 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="scashmoney-fixturka-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1945 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!---->
                        <div class="owl-item ng-tns-c78-3 ng-trigger ng-trigger-autoHeight ng-star-inserted cloned" style="width: 162px; margin-right: 20px;">
                           <div class="col s12 ng-star-inserted" style="">
                              <div class="card-panel bank-card" data-payment="scashmoney-papara-deposit">
                                 <!----><!---->
                                 <div class="flex-container">
                                    <payment-icon class="ng-star-inserted">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
                                    </payment-icon>
                                    <span class="icon-finance100x33-1576 pymnt-icon ng-star-inserted"></span><!----><!----><!----><!---->
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!---->
                     </div>
                  </div>
               </owl-stage>
            </div>
            <!---->
            <div _ngcontent-rlw-c77="" class="owl-nav ng-star-inserted">
               <div _ngcontent-rlw-c77="" class="owl-prev"><i class="material-icons">chevron_left</i></div>
               <div _ngcontent-rlw-c77="" class="owl-next"><i class="material-icons">chevron_right</i></div>
            </div>
            <div _ngcontent-rlw-c77="" class="owl-dots disabled ng-star-inserted">
               <!---->
            </div>
            <!----><!---->
         </div>
      </owl-carousel-o>
      <!----><!----><!----><!----><!----><!---->
      <div id="PaymentFormModal" materialize="modal" class="modal modal-md open dshbrd-modal pymnt-mdl black-text" style="z-index: 1025;">
         <div class="modal-header"><a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons white-text">close</i></a></div>
         <!---->
      </div>
   </payments-widget>
</main>
<?php }else {?>
    <main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <div class="container dshbrd-cntr">
         <div class="row">
         <?php include 'modules/sidebar.php' ?>

            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-bonus-activities class="ng-star-inserted">
                  <div class="bns-actvts-cntnt">
                     <app-notifications>
                        <div>
                           <!---->
                        </div>
                     </app-notifications>
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-gift fa-fw"></i><span class="inf-title">Bonus İşlemleri</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <!----><!---->
                           <message-box type="error" content="MESSAGES.NO_BONUS_HISTORY_RECORD" class="ng-star-inserted">
                              <div class="card-panel message-box error">
                                 <!----><!---->
                                 <div class="ng-star-inserted">
                                    Geçmiş dönemler için bonus işlemi bulunamadı<!----><!----><!----><!---->
                                 </div>
                                 <!----><!----><!----><!----><!---->
                              </div>
                           </message-box>
                           <!----><!---->
                        </div>
                     </div>
                     <!---->
                     <app-static-inner-content contentcode="bonus_action">
                        <div extroutelink="" id="bonus_action" class="ng-star-inserted">
                           <div id="bosbos">
                              <style>
                                 .popup-trigger {
                                 display: block;
                                 width: 170px;
                                 height: 45px;
                                 margin-left: 45px;
                                 float: left;
                                 line-height: 38px;
                                 border: 0;
                                 text-align: center;
                                 color: #FFF;
                                 font-size: 18px;
                                 padding: 4px 4px;
                                 text-decoration: none;
                                 text-transform: uppercase;
                                 border-radius: 4px;
                                 background: #dc9d10;
                                 box-shadow: 0 3px 0 rgb(0 0 0 / 7%);
                                 transition: 300ms all;
                                 }
                                 .popup-trigger:hover {
                                 opacity:.8;
                                 }
                                 .popup {
                                 position: fixed;
                                 left: 0;
                                 top: 0;
                                 height: 100%;
                                 z-index: 1000;
                                 width: 100%;
                                 background-color: rgba(94, 110, 141, 0.9);
                                 opacity: 0;
                                 visibility: hidden;
                                 transition:500ms all;
                                 box-sizing: unset;
                                 }
                                 .popup.is-visible {
                                 opacity: 1;
                                 visibility: visible;
                                 transition:1s all;
                                 }
                                 .popup-container {
                                 transform:translateY(-50%);
                                 transition:500ms all;
                                 position: relative;
                                 width: 40%;
                                 margin: 2em auto;
                                 top: 5%;
                                 padding: 34px;
                                 background: #FFF;
                                 border-radius: .25em .25em .4em .4em;
                                 text-align: left;
                                 box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                                 }
                                 .is-visible .popup-container {
                                 transform:translateY(0);
                                 transition:500ms all;
                                 }
                                 .popup-container .popup-close {
                                 position: absolute;
                                 top: 8px;
                                 font-size:0;
                                 right: 8px;
                                 width: 30px;
                                 height: 30px;
                                 }
                                 .popup-container .popup-close::before,
                                 .popup-container .popup-close::after {
                                 content: '';
                                 position: absolute;
                                 top: 12px;
                                 width: 14px;
                                 height: 3px;
                                 background-color: #8f9cb5;
                                 }
                                 .popup-container .popup-close::before {
                                 -webkit-transform: rotate(45deg);
                                 -moz-transform: rotate(45deg);
                                 -ms-transform: rotate(45deg);
                                 -o-transform: rotate(45deg);
                                 transform: rotate(45deg);
                                 left: 8px;
                                 }
                                 .popup-container .popup-close::after {
                                 -webkit-transform: rotate(-45deg);
                                 -moz-transform: rotate(-45deg);
                                 -ms-transform: rotate(-45deg);
                                 -o-transform: rotate(-45deg);
                                 transform: rotate(-45deg);
                                 right: 8px;
                                 }
                                 .popup-container .popup-close:hover:before,
                                 .popup-container .popup-close:hover:after {
                                 background-color:#35a785;
                                 transition:300ms all;
                                 }
                                 @media only screen and (max-width: 800px) {
                                 .popup-container {
                                 width: 80%;
                                 }
                                 }
                                 #xturu {
                                 display: block;
                                 width: 45%;
                                 font-size: 14px;
                                 float: left;
                                 border: 1px solid #9e9a9a;
                                 }
                                 #iframInfo {
                                 height: 190px;
                                 overflow: scroll;
                                 }
                                 #submitSuc {
                                 background: #257112;
                                 color: #FFF;
                                 border: 0;
                                 padding: 0 14px;
                                 float: right;
                                 height: 34px;
                                 line-height: 34px;
                                 cursor: pointer;
                                 }
                                 #kapatSuc {
                                 background: #257112;
                                 color: #FFF;
                                 border: 0;
                                 padding: 0 14px;
                                 float: right;
                                 height: 34px;
                                 line-height: 34px;
                                 cursor: pointer;
                                 display:none;
                                 }
                                 #xbonusHata {
                                 display:none;
                                 text-align: center;
                                 color: #fff;
                                 background: red;
                                 height: 42px;
                                 line-height: 42px;
                                 margin-bottom: 10px;
                                 width: 100%;
                                 }
                              </style>
                              <div class="dshbrd-mdl">
                                 <div class="mdl-hdr">
                                    <div class="inf-hdr">
                                       <i class="fa fa-gift fa-fw"></i><span class="inf-title">Bonus Talep Verme Formu</span>
                                    </div>
                                 </div>
                                 <div class="mdl-cntnt">
                                    <message-box content="MESSAGES.NO_BONUS_HISTORY_RECORD" type="error">
                                       <select id="xturu" name="xturu">
                                          <option value="0">Lütfen Bonusunuzu Seçiniz</option>
                                          <option value="13">%15 Papara/Bitcoin Bonusu</option>
                                          <option value="2">%20 Envoy Yatırım Bonusu</option>
                                          <option value="12">%25 Envoy Qr Yatırım/Cepbank</option>
                                          <option value="3">%10 Sanal Kart Bonusu</option>
                                          <option value="4">Deneme Bonusu(Spor)</option>
                                          <option value="14">Free Spins</option>
                                          <option value="5">Nakit Iade Bonusu</option>
                                          <option value="11">%10 Çevrim Şartsız Bonus</option>
                                          <option value="6">Casino Discount</option>
                                          <option value="7">Netent Bonusu</option>
                                          <option value="8">Rakeback Bonusu</option>
                                       </select>
                                       <button id="info" class="info popup-trigger" type="button">TALEBİ GÖNDER</button>
                                       <div style="clear:both"></div>
                                    </message-box>
                                 </div>
                              </div>
                              <div class="popup" role="alert">
                                 <div class="popup-container">
                                    <a class="popup-close img-replace">Close</a>
                                    <div id="xbonusHata"></div>
                                    <div id="iframInfo">Daily 20% Live Casino Discount
                                       1- Live Casino Bonus only applies to the losses in the live casino section (from 00:00hrs to 00:00hrs the following day) for cash deposit losses.
                                       2- To use the loss bonus all balances must be zero.
                                       3- Once the Loss bonus is applied customers can use the funds at any sections on the site. There are no requirements to turn-over the loss bonus and this can be withdrawn immediately.
                                       4- HayalBahis reserves the right to suspend all bonuses if customers are found to be wrongfully using their bonuses or acting act against site rules.
                                       5- Double chance games do not qualify for bonuses. In an event where customers are found to be requesting bonus for these games their requests will not be processed. This covers single/double, red/black, column ,dozen, beton poker , wheel of fortune, dragon/tiger, and bacarrat game types.
                                       6- If customers are found cheating or acting out of site rules their accounts will be suspended and funds seized.
                                       7- HayalBahis reserves the right to change, amend or cancel the terms and conditions for the promotion at any time as it sees fit. It is the customer’s responsibility to follow the most recent terms and conditions.
                                       8- Only one bonus can be applied at any time.
                                       9- General terms and conditions apply to all bonuses
                                    </div>
                                    <div id="submitSuc">Şartları Okudum ve Onaylıyorum</div>
                                    <div id="kapatSuc">Kapat</div>
                                    <br>
                                 </div>
                              </div>
                              <div class="dshbrd-mdl">
                                 <div class="mdl-hdr">
                                    <div class="inf-hdr">
                                       <i class="fa fa-gift fa-fw"></i><span class="inf-title">Bonus Geçmişi</span>
                                    </div>
                                 </div>
                                 <div class="mdl-cntnt">
                                    <message-box content="MESSAGES.NO_BONUS_HISTORY_RECORD" type="error">
                                       <div id="bonusDetay">
                                          <style type="text/css">
                                             .idBonus {
                                             background: #c38a41;
                                             color: #FFF;
                                             }
                                             .bonusListe {
                                             width: 100%;
                                             line-height: 24px;
                                             width: 100%;
                                             line-height: 24px;
                                             color: #000;
                                             background: #ffe9b9;
                                             border-bottom: 6px solid #fff;
                                             }
                                             .bonusListeTarih {
                                             width: 33.33%;
                                             float: left;
                                             line-height: 24px;
                                             font-weight:bold;
                                             padding: 0 4px;
                                             }
                                             .bonusListeTuru {
                                             width: 33.33%;
                                             float: left;
                                             line-height: 24px;
                                             font-weight:bold;
                                             }
                                             .bonusListeDurum {
                                             width: 33.33%;
                                             float: left;
                                             line-height: 24px;
                                             font-weight:bold;
                                             }
                                             .bonusListeDurumIptal {
                                             width: 100%;
                                             padding: 0 4px;
                                             }
                                             @media only screen and (max-width: 600px) {
                                             .bonusListeDurumIptal {
                                             font-size: 12px;
                                             }
                                             }
                                             #bonusDetay {
                                             background: #fff;
                                             }
                                          </style>
                                          <div class="bonusListe idBonus">
                                             <div class="bonusListeTarih idBonus">TARİH</div>
                                             <div class="bonusListeTuru idBonus">TÜRÜ</div>
                                             <div class="bonusListeDurum idBonus">DURUM</div>
                                          </div>
                                          <div class="bonusListe">
                                             <div class="bonusListeTarih cssNo2">2024-01-27 00:14:17</div>
                                             <div class="bonusListeTuru cssNo2">Casino Bonusu</div>
                                             <div class="bonusListeDurum cssNo2">ONAYLANDI </div>
                                          </div>
                                          <div style="clear: both;"></div>
                                       </div>
                                       <div style="clear:both"></div>
                                    </message-box>
                                 </div>
                              </div>
                              <script>
                                 jQuery(document).ready(function($){
                                     var user = isLoggedInUser.username;
                                     var code = isLoggedInUser.code;
                                     var gBakiye= isLoggedInUser.balance;
                                 
                                 
                                 
                                 
                                 
                                     $(".popup-container").on('click', '#submitSuc', function(){
                                 
                                 
                                         //$("#submitSuc").hide();
                                         if ($('#xturu').val() == 4 && gBakiye > 5) {
                                             $("#xbonusHata").css('display', 'inline-table');
                                             $('#xbonusHata').html("Deneme Bonusu sadece yeni üyeler için geçerlidir.");
                                             return;
                                         }
                                         if ($('#xturu').val() == 5 && gBakiye > 5) {
                                             $("#xbonusHata").css('display', 'inline-table');
                                             $('#xbonusHata').html("Nakit iade bonusundan faydalanmaniz için güncel bakiyeniz 0 olması gerekmektedir. ");
                                             return;
                                         }
                                         if ($('#xturu').val() == 6 && gBakiye > 5) {
                                             $("#xbonusHata").css('display', 'inline-table');
                                             $('#xbonusHata').html("Casino bonusundan faydalanmaniz için güncel bakiyeniz 0 olması gerekmektedir.");
                                             return;
                                         }
                                         if ($('#xturu').val() == 7 && gBakiye > 5) {
                                             $("#xbonusHata").css('display', 'inline-table');
                                             $('#xbonusHata').html("Netent bonusundan faydalanmaniz için güncel bakiyeniz 0 olması gerekmektedir.");
                                             return;
                                         }
                                 
                                         if ($('#xturu').val() == 0) {
                                             $("#xbonusHata").css('display', 'inline-table');
                                             $('#xbonusHata').html("Lütfen Talep etmekte oldugunuz bonus türünü seçiniz.");
                                         } else {
                                 
                                             $("#iframInfo").hide();
                                             $("#submitSuc").hide();
                                             $("#kapatSuc").show();
                                             $("#xbonusHata").css('display', 'inline-table');
                                             $.get( "https://api.cdnroot.net/api/lmnv2/bonus/addBonus.php", { id:$('#xturu').val(),user: user, code: code } )
                                                 .done(function( data ) {
                                                     var obj = jQuery.parseJSON(data);
                                                     if (obj.durum ==1) {
                                                         $('#xbonusHata').html(obj.mesaj);
                                                        $("#xbonusHata").css('display', 'inline-table');
                                                     } else {
                                                         $('#xbonusHata').html("Bonusunuz işleme alındı");
                                                         $("#xbonusHata").css('display', 'inline-table');
                                                         location.reload();
                                                     }
                                                 });
                                         }
                                     });
                                 
                                     $('.popup-trigger').on('click', function(event){
                                         event.preventDefault();
                                         $("#iframInfo").show();
                                         $("#submitSuc").show();
                                         $("#kapatSuc").hide();
                                         $("#xbonusHata").hide();
                                 
                                         var selectedOptionVal = $('#xturu').find(":selected").val();
                                         if (selectedOptionVal==0) {
                                             alert('Lütfen talep etmek istediğiniz bonus türünü seçiniz.');
                                         } else {
                                         $.get( "https://api.cdnroot.net/api/lmnv2/bonus/lookBonus.php?id="+selectedOptionVal, {  } )
                                             .done(function( data ) {
                                                 $("#iframInfo").html(data);
                                                 document.getElementById('iframInfo').scrollTop = 0;
                                             });
                                         console.log(selectedOptionVal);
                                         $('.popup').addClass('is-visible');
                                         }
                                     });
                                 
                                     $(".popup").on('click', function(event){
                                         if( $(event.target).is('#kapatSuc') ) {
                                             event.preventDefault();
                                             $(this).removeClass('is-visible');
                                         }
                                     });
                                     $('.popup').on('click', function(event){
                                         if( $(event.target).is('.popup-close') || $(event.target).is('.popup') ) {
                                             event.preventDefault();
                                             $(this).removeClass('is-visible');
                                         }
                                     });
                                     //close popup when clicking the esc keyboard button
                                     $(document).keyup(function(event){
                                         if(event.which=='27'){
                                             $('.popup').removeClass('is-visible');
                                         }
                                     });
                                 
                                 
                                     $.get( "https://api.cdnroot.net/api/lmnv2/bonus/getBonusRapor.php", { user: user, code: code } )
                                         .done(function( data ) {
                                             $("#bonusDetay").html(data);
                                         });
                                 
                                 
                                 });
                              </script>
                           </div>
                        </div>
                        <div class="ng-star-inserted">
                           <script type="text/javascript">
                              setTimeout(function(){
                                  $(document).ready(function(){ 
                               
                                $.get("https://api.cdnroot.net/api/lmnv2/bonus/getBonusTalep.php", function(data) {
                                  $("#bosbos").html(data);
                                }); 
                               
                                
                              
                              }); 
                              },500);
                           </script>
                        </div>
                        <div class="ng-star-inserted"></div>
                        <!----><!---->
                     </app-static-inner-content>
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-gift fa-fw"></i><span class="inf-title">Casinopro Bonus Geçmişi</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <!----><!---->
                           <message-box type="error" content="MESSAGES.NO_BONUS_HISTORY_RECORD" class="ng-star-inserted">
                              <div class="card-panel message-box error">
                                 <!----><!---->
                                 <div class="ng-star-inserted">
                                    Geçmiş dönemler için bonus işlemi bulunamadı<!----><!----><!----><!---->
                                 </div>
                                 <!----><!----><!----><!----><!---->
                              </div>
                           </message-box>
                           <!----><!---->
                        </div>
                     </div>
                     <!---->
                  </div>
                  <div id="sportBetDetailModal" materialize="modal" class="modal modal-md dshbrd-tckt-modal hdr-fix" style="z-index: 1109;">
                     <!---->
                  </div>
               </app-bonus-activities>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>