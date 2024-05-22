<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <static-content class="ng-star-inserted">
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
            <div class="contentTextTitle">Sorumlu Oyunculuk</div>
            <div class="contentText">
               Onsekiz (18) Yaş Üzeri veya İlgili Bölgenin Yasal Yaşı<br><br>
               Limanbet’te 18 yaşın (veya ilgili bölgedeki yasal yaşın) altındaki bir kimsenin hesap açması veya kumar oynaması yasadışıdır. Limanbet yaş doğrulama sorumluluklarını çok ciddiye alır. 18 yaşın altındakilerin de kullanabileceği ödeme mekanizmalarını kullanan tüm müşterilerimize yaş doğrulama kontrolleri yaparız ve diğer tür finansman mekanizmaları kullanan müşterilerimize de rasgele yaş doğrulama kontrolleri yaparız. Yaşınızı doğrulamak için bilgi isteyebilir ve yaşınız onaylanıncaya kadar hesabınızı kısıtlayabilir veya askıya alabiliriz.<br><br>
               18 YAŞIN (VEYA İLGİLİ BÖLGEDEKİ YASAL YAŞIN) ALTINDA HERHANGİ BİRİNİN BU SİTEYİ KULLANDIĞI TESPİT EDİLDİĞİ DURUMLARDA HERHANGİ KAZANIMIN CEZA OLARAK GERİ ALINACAĞI VE AYNI ZAMANDA POLİSE DE RAPOR EDİLECEĞİ LÜTFEN BİLİNSİN.<br><br>
               Limanbet, sorumlu kumar oynamayı desteklemenin yanı sıra, kumar sorunlarına karşı farkındalık yaratmak ve önlemek, müdahale etmek ve iyileştirmeler geliştirmekle yükümlüdür. Limanbet’nin Sorumlu Kumar Politikası, kumar oynamanın olumsuz etkilerini en aza indirmeye ve sorumlu kumar oynamayı teşvik etmeyi taahhüd eder. Sorunlu kumar oynamayla ilgili müşterilerimizin sosyal ve finansal zararların tamamen farkında olarak, sitemizde bahis deneyimlerinin keyfini çıkarmalarını temin etmek için sorumluluğumuz olduğuna inanıyoruz. Müşterilerimizin sorumlu bir şekilde kumar oynamalarına yardımcı olmak için, tüm personelimizin sorumlu kumar bilinci eğitimi almasını sağlıyoruz. Aşağıdaki bilgi ve özellikler sitemizde mevcut.<br><br>
               • Oturum Süresi Limitleri*<br>
               • Yatırım Limitleri*<br>
               • Kaybetme Limitleri*<br>
               • Bahis Limitleri*<br>
               • Kumar yardım hatlarına ve diğer yardım organizasyonlarına bağlantılar<br>
               • Kendine yardım ve farkındalık bilgisi<br>
               • Reşit olmayan kişilerin erişime karşı koruyabilmek için bilgi ve araçlar<br><br>
               *Limitler istenildiği zaman tekrardan değiştirilebilir. Limiti yükseltmek veya tamamen kaldırmak isterseniz, 7 günlük bir bekleme süresi uygulanacaktır.
               Sorunlu kumar oynamak, kumarcının hayatına olumsuz etkisi olduğu kadar, yakınları örneğin ebeveynler, arkadaşlar, kardeşler, sevgililer veya hayatlarındaki diğer insanlar üzerinde de olumsuz bir etkisi vardır. Bir kişinin mutsuz olması, daha az enerjisi olması, okulda geride kalması, işyerinde daha düşük performans sergilemesi, para konusnda stres yaşaması veya aile üyeleri ve arkadaşlarıyla tartışmasının altında yatan neden kumar oynaması olabilir.<br><br>
               Kumar oynamak bu etkilerden herhangi birine neden oluyorsa, bu sorunlu kumar olarak kabul edilir ve Limanbet, bu tür kumar alışkanlıklarını web sitesinde kullanıcılar ve / veya müşterileri arasında farkındalık yaratarak önlemeye çalışmaktadır, çünkü site hizmetleri yalnızca iyi vakit geçirme amacıyla kullanılmalı ve başka anlamlarla kullanılmamalıdır.<br><br>
               Sorunlu kumar oynamak hayatınızın birçok yönünü olumsuz yönde etkileyebilir:<br><br>
               Arkadaşlarınız ve ailenizle olan ilişkinizi;<br>
               Sağlığınızı;<br>
               Çalışmalarınızı;<br>
               Eğitiminizı;<br>
               Başka şeyler yapmak için harcayacağınız süreyi.<br><br>
               Kumar oynamanın hayatınızın bu alanlarından herhangi birini etkilediğini fark ederseniz, yardım için bu kuruluşlardan biriyle iletişime geçmekten çekinmeyin:
               <br><br>
               https://www.gamblingtherapy.org/ <br>
               http://www.gambleaware.co.uk/ <br>
               http://www.gamcare.org.uk/ <br>
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
<div class="contentTextTitle">Sorumlu Oyunculuk</div>

<div class="contentText">
Onsekiz (18) Yaş Üzeri veya İlgili Bölgenin Yasal Yaşı<br><br>

Limanbet’te 18 yaşın (veya ilgili bölgedeki yasal yaşın) altındaki bir kimsenin hesap açması veya kumar oynaması yasadışıdır. Limanbet yaş doğrulama sorumluluklarını çok ciddiye alır. 18 yaşın altındakilerin de kullanabileceği ödeme mekanizmalarını kullanan tüm müşterilerimize yaş doğrulama kontrolleri yaparız ve diğer tür finansman mekanizmaları kullanan müşterilerimize de rasgele yaş doğrulama kontrolleri yaparız. Yaşınızı doğrulamak için bilgi isteyebilir ve yaşınız onaylanıncaya kadar hesabınızı kısıtlayabilir veya askıya alabiliriz.<br><br>

18 YAŞIN (VEYA İLGİLİ BÖLGEDEKİ YASAL YAŞIN) ALTINDA HERHANGİ BİRİNİN BU SİTEYİ KULLANDIĞI TESPİT EDİLDİĞİ DURUMLARDA HERHANGİ KAZANIMIN CEZA OLARAK GERİ ALINACAĞI VE AYNI ZAMANDA POLİSE DE RAPOR EDİLECEĞİ LÜTFEN BİLİNSİN.<br><br>

Limanbet, sorumlu kumar oynamayı desteklemenin yanı sıra, kumar sorunlarına karşı farkındalık yaratmak ve önlemek, müdahale etmek ve iyileştirmeler geliştirmekle yükümlüdür. Limanbet’nin Sorumlu Kumar Politikası, kumar oynamanın olumsuz etkilerini en aza indirmeye ve sorumlu kumar oynamayı teşvik etmeyi taahhüd eder. Sorunlu kumar oynamayla ilgili müşterilerimizin sosyal ve finansal zararların tamamen farkında olarak, sitemizde bahis deneyimlerinin keyfini çıkarmalarını temin etmek için sorumluluğumuz olduğuna inanıyoruz. Müşterilerimizin sorumlu bir şekilde kumar oynamalarına yardımcı olmak için, tüm personelimizin sorumlu kumar bilinci eğitimi almasını sağlıyoruz. Aşağıdaki bilgi ve özellikler sitemizde mevcut.<br><br>

• Oturum Süresi Limitleri*<br>
• Yatırım Limitleri*<br>
• Kaybetme Limitleri*<br>
• Bahis Limitleri*<br>
• Kumar yardım hatlarına ve diğer yardım organizasyonlarına bağlantılar<br>
• Kendine yardım ve farkındalık bilgisi<br>
• Reşit olmayan kişilerin erişime karşı koruyabilmek için bilgi ve araçlar<br><br>
*Limitler istenildiği zaman tekrardan değiştirilebilir. Limiti yükseltmek veya tamamen kaldırmak isterseniz, 7 günlük bir bekleme süresi uygulanacaktır.
Sorunlu kumar oynamak, kumarcının hayatına olumsuz etkisi olduğu kadar, yakınları örneğin ebeveynler, arkadaşlar, kardeşler, sevgililer veya hayatlarındaki diğer insanlar üzerinde de olumsuz bir etkisi vardır. Bir kişinin mutsuz olması, daha az enerjisi olması, okulda geride kalması, işyerinde daha düşük performans sergilemesi, para konusnda stres yaşaması veya aile üyeleri ve arkadaşlarıyla tartışmasının altında yatan neden kumar oynaması olabilir.<br><br>

Kumar oynamak bu etkilerden herhangi birine neden oluyorsa, bu sorunlu kumar olarak kabul edilir ve Limanbet, bu tür kumar alışkanlıklarını web sitesinde kullanıcılar ve / veya müşterileri arasında farkındalık yaratarak önlemeye çalışmaktadır, çünkü site hizmetleri yalnızca iyi vakit geçirme amacıyla kullanılmalı ve başka anlamlarla kullanılmamalıdır.<br><br>

Sorunlu kumar oynamak hayatınızın birçok yönünü olumsuz yönde etkileyebilir:<br><br>

Arkadaşlarınız ve ailenizle olan ilişkinizi;<br>
Sağlığınızı;<br>
Çalışmalarınızı;<br>
Eğitiminizı;<br>
Başka şeyler yapmak için harcayacağınız süreyi.<br><br>

Kumar oynamanın hayatınızın bu alanlarından herhangi birini etkilediğini fark ederseniz, yardım için bu kuruluşlardan biriyle iletişime geçmekten çekinmeyin:
<br><br>
https://www.gamblingtherapy.org/ <br>
http://www.gambleaware.co.uk/ <br>
http://www.gamcare.org.uk/ <br>
     

</div> </div><div></div></div></static-content><!----></main>
<?php }?>