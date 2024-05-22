<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <static-content>
      <!---->
      <div id="content-area">
         <div extroutelink="">
            <style type="text/css">
               .contentTextTitle {
               font-size: 24px;
               color: #FFF;
               padding-left: 12px;
               background: #5b0606;
               height: 48px;
               line-height: 48px;
               }
               .contentTextTitleS {
               color: #FFF;
               margin-top: 16px;
               height: 34px;
               font-size: 21px;
               background: rgba(163, 45, 0, 0.4);
               line-height: 34px;
               padding-left: 10px;
               }
               .contentText {
               background: rgba(0,0,0,0.5);
               color: #FFF;
               font-size: 16px;
               font-weight: normal;
               border: 1px #000000 solid;
               line-height: 24px;
               padding: 8px;
               }
            </style>
            <div class="contentTextTitle" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">BİZE ULAŞIN</div>
            <div class="contentText" style=""><font face="Arial, Verdana"><span style="font-size: 10pt;"> 
               Tüm soru , sorun ve önerileriniz için Canlı Destek ekibimizle 7/24 görüşebilirsiniz. </span></font><br><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
               Bize ulaşabileceğiniz mail adresleri: </span></font><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
               Müşteri Destek: info@limanbet.com </span></font><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
               Finans: finans@limandestek.com </span></font><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
               Belgeler: belge@limanbet.com </span></font><br><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
               Hafta içi 10:00 -20:00 ' a hafta sonu 10:00-22:00  arası  ' </span></font><br><br><font face="Arial, Verdana">+902323351949</font><br><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
               Nolu hattan müşteri temsilcimiz ile görüşebilirsiniz.Kullanıcı adınızı belirttikten sonra müşteri temsilcilerimiz gün içerisinde dönüş yapacaktır
               </span></font>
            </div>
         </div>
         <div></div>
      </div>
   </static-content>
   <!---->
   <payments-widget>
      <!---->
      <div id="PaymentFormModal" materialize="modal" class="modal modal-md open dshbrd-modal pymnt-mdl black-text" style="z-index: 1025;">
         <div class="modal-header"><a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons white-text">close</i></a></div>
         <!---->
      </div>
   </payments-widget>
</main>
<?php }else {?>
    <main><router-outlet></router-outlet><static-content><!----><div id="content-area"><div extroutelink=""><style type="text/css">
	.contentTextTitle {
    font-size: 24px;
    color: #FFF;
    padding-left: 12px;
    background: #5b0606;
    height: 48px;
    line-height: 48px;
	}
	.contentTextTitleS {
color: #FFF;
    margin-top: 16px;
    height: 34px;
    font-size: 21px;
    background: rgba(163, 45, 0, 0.4);
    line-height: 34px;
    padding-left: 10px;
	}
	.contentText {
background: rgba(0,0,0,0.5);
    color: #FFF;
    font-size: 16px;
    font-weight: normal;
    border: 1px #000000 solid;
    line-height: 24px;
    padding: 8px;
	}
</style>
<div class="contentTextTitle" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">BİZE ULAŞIN</div>

<div class="contentText" style=""><font face="Arial, Verdana"><span style="font-size: 10pt;"> 
Tüm soru , sorun ve önerileriniz için Canlı Destek ekibimizle 7/24 görüşebilirsiniz. </span></font><br><br><font face="Arial, Verdana"><span style="font-size: 10pt;">

Bize ulaşabileceğiniz mail adresleri: </span></font><br><font face="Arial, Verdana"><span style="font-size: 10pt;">

Müşteri Destek: info@limanbet.com </span></font><br><font face="Arial, Verdana"><span style="font-size: 10pt;">

Finans: finans@limandestek.com </span></font><br><font face="Arial, Verdana"><span style="font-size: 10pt;">

Belgeler: belge@limanbet.com </span></font><br><br><font face="Arial, Verdana"><span style="font-size: 10pt;">

Hafta içi 10:00 -20:00 ' a hafta sonu 10:00-22:00  arası  ' </span></font><br><br><font face="Arial, Verdana">+902323351949</font><br><br><font face="Arial, Verdana"><span style="font-size: 10pt;">
Nolu hattan müşteri temsilcimiz ile görüşebilirsiniz.Kullanıcı adınızı belirttikten sonra müşteri temsilcilerimiz gün içerisinde dönüş yapacaktır
</span></font></div> </div><div></div></div></static-content><!----></main>
<?php }?>