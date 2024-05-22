<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <static-content class="ng-star-inserted">
      <!---->
      <div id="content-area">
         <div extroutelink="">
            <script type="text/javascript">
               setTimeout(function(){
                   $(document).ready(function(){ 
               
               
                   var pushState = history.pushState;
               history.pushState = function () {
                   pushState.apply(history, arguments);
                  console.log("aaa11");
               console.log(window.location.pathname.split("/").pop());
               
               if (window.location.pathname.split("/").pop()=="promotions") {
               	getTake();
               }
               };
               
                
               function getTake() {
               	$.get("https://api.cdnroot.net/api/lmn/promo/getPromo.php", function(data) {
                   $("#bosbos").html(data);
                 }); 
               }
               
                 getTake();
               
               }); 
               
               },500);
            </script>
            <div id="bosbos">
               <style type="text/css">
                  body{
                  background: url(https://liman.cdnroot.blog/test/44.jpg) top left/cover no-repeat fixed !important;
                  background-size: cover;
                  }
                  .popup-trigger {  cursor: pointer; }
                  .popup {display: none; position: absolute; top: 100px; left: 50%; width: 700px; margin-left: -350px; padding: 30px 30px;
                  background: #fff; color: #333; font-size: 12px; line-height: 20px; border: 10px solid #150E2D; z-index: 9999;}
                  .popup-mobile {position: relative; top: 0; left: 0; margin: 30px 0 0; width: 100%;}
                  .popup-btn-close {position: absolute; top: 8px; right: 14px; color: #000; font-size: 14px; font-weight: bold; text-transform: uppercase; cursor: pointer;}
                  #page-content {
                  background-color: #2a2a2a;
                  }
                  #bosbos {
                  margin: 0 auto;
                  }
                  .promo_image {
                  float: left;
                  margin: 16px;
                  height: 250px;
                  }
                  .promo_image img {
                  width: 350px;
                  border: 2px #976226 solid;
                  height: 250px;
                  border-radius: 12px;
                  }
                  .promo_image img:hover {
                  border: 2px #FFF  solid;
                  }
                  .popup span {
                  font-size: 19px;
                  }
                  .footer-pro {
                  z-index: -1;
                  }
                  strong {
                  font-weight: 700;
                  }
                  @media only screen and (max-width: 1080px) {
                  .promo_image {
                  float: left;
                  margin: 18px;
                  height: 132px;
                  }
                  .promo_image img {
                  border: 2px #976226 solid;
                  width: 213px;
                  height: 132px;
                  }
                  #bosbos {
                  max-width: 760px;
                  margin: 0 auto;
                  }
                  }
                  @media only screen and (max-width: 650px) {
                  #promo_cen {
                  margin-top: 20px;
                  }
                  body {
                  background: #000 !important;
                  }
                  .promo_image {
                  float: none;
                  margin: 0 auto;
                  width: 100%;
                  height: 100%;
                  padding: 14px;
                  }
                  .promo_image img {
                  border: 2px #976226 solid;
                  width: 100%;
                  height: 100%;
                  }
                  .popup-mobile {
                  margin-left: -28px;
                  }
                  .popup {
                  padding: 30px 10px;
                  width: 100%;
                  position: absolute;
                  margin: 0px;
                  }
                  }
                  #promo_cen {
                  display: block;
                  width: 100% !important;
                  max-width: 1152px  !important;
                  margin: 0 auto;
                  }
               </style>
               <div id="promo_cen" style="margin-top: 10px;">
                  <br>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1698747061-liman-promosyon-bannerlar-700x500px.jpg"></a>
                     <div class="popup">
                        <p><strong>%15 PAPARA, PAYFİX, PARAZULA VE BITCOIN YATIRIM BONUSU
                           </strong><br><br>
                           1. Bu promosyon sadece spor bahislerine Papara, Parazula, Payfix, Youpaycoin ve Bitcoin ile yatırım yapacak olan kullanıcılar için geçerlidir. (Astropay, Kredi Kartı veya diğer yatırım yöntemleri ile yatırım yapanlar kullanıcılar bonustan faydalanamazlar. Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamaz!)
                           <br>2. Promosyon haftanın her günü geçerlidir.
                           <br>3. Bonusunuzu alabilmeniz için yatırımınızdan sonra canlı desteğe bağlanmanız gerekmektedir.
                           <br>4.Yatırımınızı yaptıktan sonra hesaplar arası transfer yapmadığınız ve çekim işlemi yapmadığınız sürece son yatırımınızın bonusunu istediğiniz zaman talep edebilirsiniz.
                           <br>5. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.
                           <br>6- Bonusunuzun çekilebilir duruma gelmesi için ana paranızı 1 defa 1.30 oranında, bonusunuzu ise oranların minimum 2.00 olduğu kuponlarda 10 katını çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.
                           <br>7.Yatırım Bonusu Papara ve Bitcoin ile min. 50 TL ve üzeri yatırımlarda geçerlidir. Banka Havelesi yatırım bonusundan sadece spor bahislerine yaptığınız para yatırımı işleminizde yararlanabilirsiniz. Bonustan yararlanabilmek için yatırmınızı yaptıktan sonra Canlı yardıma bağlanıp Bonusu talep edebilirsiniz. Aynı anda yalnızca bir bonustan yararlanabilirsiniz.
                           <br>8- Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dir.
                           <br>9- Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir. (Örneğin ; Fenerbahçe- Beşiktaş karşılaşmasına 1 kuponda ise alt seçeneğine 1 kuponda üst seçeneğine karşılıklı bahisler bonus çevriminden sayılmayacaktır.))
                           <br>10-Para çekimi yaptıktan sonraki ilk 24 saat içerisindeki yatırımlarınıza bonus verilmeyecektir. (para çekimizinin talep verildiği saat baz alınacaktır.)<br>11- Tek çekim limiti kripto ödemelerinde 1.000.000 TL'dir.<br>
                        </p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061717-liman-promosyon-bannerlar-350x250px-12.jpg"></a>
                     <div class="popup">
                        <p><strong>%25 CEPBANK ve QR'KOD  YATIRIM BONUSU</strong></p>
                        <p>1. Bu promosyon sadece spor bahislerine Cep Bank ve QR Kod ile yatırım yapacak olan kullanıcılar için geçerlidir. (Bitcoin, Astropay, Kredi Kartı veya diğer yatırım yöntemleri ile yatırım yapanlar kullanıcılar bonustan faydalanamazlar. Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamaz!)<br>2. Promosyon haftanın her günü geçerlidir.<br>3. Bonusunuzu alabilmeniz için yatırımınızdan sonra canlı desteğe bağlanmanız gerekmektedir,%25 bonusunuz anında hesabınıza yatırılacaktır.<br>4. Yatırımınızı yaptıktan sonra hesaplar arası transfer yapmadığınız ve çekim işlemi yapmadığınız sürece son yatırımınızın bonusunu istediğiniz zaman talep edebilirsiniz.<br>5. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.<br>6. %25 CEPBANK ve QR bonusunuzun çekilebilir duruma gelmesi için yatırdığınız miktarın (anapara) min. 1.30 oran , almış olduğunuz bonusun 10 katına , tek maç ( single ) min. 2,00 oranından spor karşılaşmaların da çevirmeniz yeterlidir. Kombine kuponlarda ise tek maçın oranının en az 1,70 toplam oranın ise en az 2.00 olması gereklidir.<br>7. Yatırım bonusu Cepbank ve QR ıle yapacağınız min 50 TL ve üzeri yatırımlarda geçerlidir. Cepbank ve QR yatırım bonusundan sadece spor bahislerine yaptığınız para yatırımı işleminizde yararlanabilirsiniz. Bonustan yararlanabilmek için yatırımınızı yaptıktan sonra Canlı yardıma bağlanıp bonusu talep edebilirsiniz. Aynı anda yalnızca bir bonustan yararlanabilirsiniz.<br>8. Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dır.<br>9. Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir. (Örneğin ; Real Madrid - Juventus karşılaşmasına 1 kuponda alt seçeneğine başka 1 kuponda üst seçeneğine karşılıklı bahisler bonus çevriminden sayılmayacaktır.)<br>10. Para çekimi yaptıktan sonraki ilk 24 saat içerisindeki yatırımlarınıza bonus verilmeyecektir. (para çekimizinin onaylandığı saat baz alınacaktır.)<br>11. İş Bu bonus şartı 29.06.2021 tarihinden itibaren geçerli olup, üyelerin bu promosyon detaylarını ve çevrim şartlarını bilme sorumluluğu kendilerine aittir.<br>12. Bu promosyon 24 ağustos 2021 tarihinden itibaren başlar.</p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061758-liman-promosyon-bannerlar-350x250px-08.jpg"></a>
                     <div class="popup">
                        <p><strong>%20 SPOR BAHİSLERİ PARA YATIRMA BONUSU<br></strong><br>1. Bu promosyon sadece spor bahislerine Banka havalesi,Envoy Hızlı Havale&nbsp; ile yatırım yapacak olan kullanıcılar için geçerlidir. (Astropay, Youpaycoin, Kredi kartı veya diğer yatırım yöntemleri ile yatırım yapanlar kullanıcılar bonustan faydalanamazlar. Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamaz!)</p>
                        <p>2. Promosyon haftanın her günü, her yatırımınızda geçerlidir.<br>3. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye veya bir önceki yatırımınızdan açık kupon var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.<br>4. Bonusunuzun çekilebilir duruma gelmesi için ana paranızı 1 defa 1.30 oranında, bonusunuzu ise oranların minimum 2.00 olduğu kuponlarda 10 katını çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.<br>5. Yatırım Bonusu&nbsp; ENVOY hızlı havale ile yapacagınız min 50 TL ve üzeri, banka havalesi ile min. 50 TL ve üzeri yatırımlarda geçerlidir. Bu yatırım bonusundan sadece spor bahislerine yaptığınız para yatırımı işleminizde yararlanabilirsiniz. Bonustan yararlanabilmek için yatırmınızı yaptıktan sonra Canlı yardıma bağlanıp Bonusu talep edebilirsiniz. Aynı anda yalnızca bir bonustan yararlanabilirsiniz.<br>6. Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dir.<br>7. Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir. (Örneğin ; Galatasaray - Beşiktaş karşılaşmasına 1 kuponda ise alt seçeneğine 1 kuponda üst seçeneğine karşılıklı bahisler bonus çevriminden sayılmayacaktır.))<br>8. Bu bonustan faydalanan üyelerimiz aynı anda başka promosyondan faydalanamazlar.<br>9. Yatırım bonusu talep edebilmeniz için son 24 saat içinde herhangi bir çekim işleminiz olmaması gerekmektedir.(Yatırım saatine göre uygulanacaktır.)<br>10. Tüm bonuslarda Bonus Genel Şartları geçerlidir.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061786-liman-promosyon-bannerlar-350x250px-13.jpg"></a>
                     <div class="popup">
                        <p><strong>%10 ÇEVRİMSİZ BONUS<br></strong><br>1. Bu bonusdan yararlanabilmeniz için Envoy Hızlı Havale- Envoy QR Kod veya CEPBANK yöntemiyle yatırım yapmanız yeterlidir.<br>2. çevrimsiz yatırım bonusundan sadece Spor bahislerine yaptığınız yatırım işleminizde yararlanabilirsiniz.<br>3. Bonustan yararlanabilmek için Envoy Hızlı Havale- Envoy QR Kod veya CEPBANK ile minumum yatirim miktari 100 TL dir.<br>4. Bir üyenin kazanabileceği maksimum bonus miktarı 100 TL’dir.<br>5. Para yatırma işlemi yaptıktan hemen sonra Canlı Destek hattına bağlanarak bonusunuzu talep edebilirsiniz.(Hesaplar arası transfer yapıldıktan sonra talep edilen bonuslar işleme alınmayacaktır)<br>6. Çekim yapabilmeniz veya bakiyenizi spor bahisleri dışında diğer alanlara aktarabilmeniz için, ana para ve almış olduğunuz bonusunuzu, minimum 1.30 orandan, 1 kez çevirmeniz gerekmektedir.<br>7. Oyuncunun bonusları kötüye kullandığı yada kural dışı işlemler gerçekleştirdiği tespit edilir ise, LimanBet söz konusu bonusları ve bunlarla ilgili kazançları iptal etme hakkına sahiptir.<br>8. Kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilir ise hiç bir mazeret belirtilmeden LimanBet hesabı kapatılacaktır ve tüm bakiyesine el konulacaktır.<br>9. Limanbet herhangi bir bonusdaki kural ve şartları değiştirme yada bonusu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>10. Herhangi bir anlaşmazlık durumunda Limanbet tarafından alınan kararlar bağlayıcı nitelikte olacaktır.<br>11. Bonus iptali yapılmamaktadır. Ancak bonus hiç kullanılmamış ise iptal edilebilir.<br>12. Tüm bonuslarda Bonus Genel Şartları geçerlidir.</p>
                        <p>13. Bu Promosyon 20.11.2019 tarihinden itibaren geçerli olacaktır.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1705282536-liman-promosyon-bannerlar-700x500px.jpg"></a>
                     <div class="popup">
                        <p><strong>100 TL BEDAVA ÜYELİK BONUSU VEYA 100 FREESPINS</strong><br><br>1. Promosyondan sadece yeni üyeler , ilk kayıt olduklarında alma hakkı elde eder.. ( Mevcut aktif üyelerimiz bu promosyondan faydalanamaz. )<br>2. Sitemize üye olduktan hemen sonra canlı yardıma bağlanarak bonusunuzu talep edebilirsiniz.<br>3. Bir üyenin maksimum alabileceği ‘ Bedava Bahis ‘ bonusu bir keredir.<br>4. Bu promosyondan faydalanan üyelerimiz aynı anda başka bir promosyondan faydalanamaz.<br>5. Herhangi bir müşterinin ip çakışması ve çoklu hesap dolayısıyla promosyon suistimal edildiği tespit edilir ise LimanBet söz konusu promosyonu iptal eder.<br>6. Bonusunuzun çekilebilir duruma gelmesi için minimum 2(iki) maç 3.00 (üç) orandan 6 (altı) katını çevirmeniz gerekmektedir ve maksimum çekilebilecek miktar 300 TL dir.Çekim yapabilmeniz için min. 50 TL yatırım yaparak min. 1,30 oranında bahis yapmanız yeterli olacaktır.<br>7. 100 Freespini Pragmatic Play saglayıcsında ( Sweet Bonanza. Gates of Olympus ve Starlight Princess ) oyunlarında kulanabilirsiniz. Çekim yapabilmeniz için freespin den elde edilen kazancınızın 10 katı kadar çevrim yapmalısınız&nbsp; çevrim sonrasında 50 TL yatırım yapmanız yeterlidir. 300 TL FREESPIN kazancı ile yatırımınız olan 50 TL’yi dilerseniz çekebilirsiniz.<br>8. LimanBet istediği zaman üyelerinden Kimlik, İkamet Belgesi vb. istemeye sahiptir, bu belgelerin kullanıcı tarafından ibraz edilmemesi durumunda oyuncunun kazançları bloke edilebilir. Üyenin ilk çekim talebi banka havalesi olmak zorundadır.<br></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061863-liman-promosyon-bannerlar-350x250px-01.jpg"></a>
                     <div class="popup">
                        <p><strong>%15 GÜNLÜK NAKİT İADE<br></strong><br>1. Bu kampanya 00:00 dan aynı günün gecesı 23:59 a kadar olan net bahis kaybınızı kapsamaktadır.<br>2. Günlük 2.000 TL'ye kadar kayıplarınıza %10, 2.001 TL ve üstü kayıplarınıza %15 Nakit İade alablirsiniz.<br>3. %15 Nakit İadeye sadece spor bahislerinde yapmış olduğunuz günlük kayıplarınız üzerinden hak kazanabilirsiniz.Diğer bölümlerdeki(Casino,Poker vb..) kazancınız spor bahisleri kaybınıza yansımamaktadır.<br>4. Nakit iade bonusunun herhangi bir çevrim şartı yoktur.Dilerseniz çekebilir veya diğer bölümlerde(Casino,Poker) kullanabilirsiniz.Üyenin Minimum 20TL kaybı olması gerekmektedir.Bonus için herhangi bir üst limit bulunmamaktadır.<br>5. Nakit İade taleb edebilmesi için üyenin o gün mutlaka min 20TL yatırım yapması gerekmektedir.<br>6. %15 Nakit İade taleplerinizi Hesap Hareketleri -&gt; Bonus Hareketleri sayfasında bulunan alandan "Nakit İade"yi seçip talep edebilirsiniz.Canlı Destek personelimizden nakit iade işlemleri dikkate alınmayacaktır.<br>7. Üyenin hesabında açık kupon veya o gün kazancı varsa nakit iade alma hakkı yoktur.<br>8.Yatırım bonusu alınan yatırımlarınız günlük kaybınızdan çıkaralarak Nakit İade verilecektir.<br>9. Bu promosyondan faydalanan üyelerimiz aynı anda başka promosyondan faydalanamazlar.<br>10. Tüm bonuslarda Bonus Genel Şartları geçerlidir.<br>11. 5 Aralık 2018 tarihinden itibaren geçerlidir.</p>
                        <p><br></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061899-liman-promosyon-bannerlar-350x250px-16.jpg"></a>
                     <div class="popup">
                        <p><strong>%10 KREDİ KARTI VE SANAL KART YATIRIM BONUSU<br></strong><br>1. Bu promosyon spor bahislerine sadece Sanal Kart,Mobile Ödeme ve Kredi Kartı ile yatırım yapacak olan kullanıcılar için geçerlidir. (Astropay,Kredi Kartı) Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamazlar.<br>2. Bonustan yararlanabilmek için yatırmanız gereken minimum miktar 20 (TL-DOLAR-EURO)dur.<br>3. Gün içinde en fazla alınabilecek bonus miktarı toplam 500 TL’dir.<br>4. Bonusunuzu alabilmeniz için yatırımınızdan hemen sonra canlı desteğe bağlanmanız yeterlidir, %10 bonusunuz anında hesabınıza yatırılacaktır.<br>5. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye veya bir önceki yatırımınızdan açık kupon var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.<br>6. Bonusunuzun çekilebilir duruma gelmesi için yatırdığınız miktarın 1 katını min. 1.30 oranından almış olduğunuz bonusun 10 katını min. 2,00 oranından spor karşılaşmalarında çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.<br>7. Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir.<br>8. Bu bonustan faydalanan üyelerimiz aynı anda başka promosyondan faydalanamazlar.<br>9. Para çekimi yaptıktan sonraki ilk 24 saat içerisindeki yatırımlarınıza bonus verilmeyecektir. (para çekiminizin talep verildiği saat baz alınacaktır.)<br>10. LimanBet bu bonusu haber vermeksizin iptal etme, geri çekme veya kural ve şartlarını değiştirme hakkını saklı tutar. Ayrıca gerekli gördüğü kişilere ait hesaplara bonus vermeme hakkını da saklı tutar. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>11. Bu kurallara ek olarak sitemizin Genel kural ve şartları da dahildir.<br>12. LimanBet istediği zaman üyelerinden Kimlik, İkamet Belgesi vb. istemeye sahiptir, bu belgelerin kullanıcı tarafından ibraz edilmemesi durumunda oyuncunun kazançları bloke edilebilir.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061925-liman-promosyon-bannerlar-350x250px-09.jpg"></a>
                     <div class="popup">
                        <p><strong>%25 İLK ÜYELİK BONUSU<br></strong><br>1. Bu bonusdan yararlanabilmeniz için banka havalesi veya CEP-BANK yöntemiyle yatırım yapmanız gerekmektedir.<br>2. İlk üyelik bonusundan sadece spor bahislerine yaptığınız ilk para yatırımı işleminizde yararlanabilirsiniz.<br>3. Bonustan yararlanabilmek için yatırmanız gereken cepbank Minimum miktarı 50 TL, Banka Havalesi Minimum 100 TL dir.<br>4. Göndereceğiniz tüm yatırımlarınızda 500 TL’ye kadar % ilk üyelik bonusu verilmektedir.<br>5. Bir üyenin kazanabileceği maksimum bonus miktarı 500 TL’dir aynı anda yalnızca bir bonustan yararlanabilirsiniz.<br>6. Para yatırma işlemi yaptıktan hemen sonra Canlı Destek hattına bağlanarak bonusunuzu talep edebilirsiniz. Aksi takdirde geçmişe dönük bonus talepleriniz işleme alınmayacaktır.<br>7. Bonusunuzun çekilebilir duruma gelmesi için ana paranızı 1 defa 1.30 oranında, bonusunuzu ise oranların minimum 2.00 olduğu kuponlarda 10 defa çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.<br>8. Oyuncunun bonusları kötüye kullandığı yada kural dışı işlemler gerçekleştirdiği tespit edilir ise, Liman Bet söz konusu bonusları ve bunlarla ilgili kazançları iptal etme hakkına sahiptir.<br>9. Kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilir ise hiç bir mazeret belirtilmeden Liman Bet hesabı kapatılacaktır ve tüm bakiyesine el konulacaktır.<br>10. Liman Bet herhangi bir bonusdaki kural ve şartları değiştirme yada bonusu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>11. Her üye bu promosyondan yalnızca bir defa yararlanabilir.<br>12. Herhangi bir anlaşmazlık durumunda Liman Bet tarafından alınan kararlar bağlayıcı nitelikte olacaktır.<br>13. Bonus iptali yapılmamaktadır. Ancak bonus hiç kullanılmamış ise iptal edilebilir.<br>14. Tüm bonuslarda Bonus Genel Şartları geçerlidir.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1684264685-liman-promosyon-bannerlar-700x500px.jpg"></a>
                     <div class="popup">
                        <p><strong style="background-color: initial;">%20 GÜNLÜK ÇEKİLEBİLİR CANLI CASINO DISCOUNT</strong><br><br></p>
                        <p>1. Canlı casino discountu yalnızca canlı casino bölümündeki günlük (gece 00:00 dan diğer gece 00:00 a kadar olan) nakit yatırım kayıplarınız için geçerlidir.</p>
                        <p>- 19999 TL ye kadar olan kayıplar için %15 oranında Casino Discount ,<br>- 20000 TL üzeri olan kayıplarınıza %20 oranında Casino Discount eklenecektir.&nbsp;</p>
                        <p>2. Discounttan yararlanabilmeniz için herhangi bir bölümde bakiyenizin olmaması gerekmektedir.<br>3. Discountunuz eklendikten sonra discountu istediğiniz alanda kullanabilirsiniz. Canlı casino discount için herhangi bir çevirme şartı yoktur, dilerseniz çekebilirsiniz.<br>4. Oyuncunun bonusları kötüye kullandığı yada kural dışı hareketlerde bulunduğu tespit edilir ise, LimanBet söz konusu bonusları iptal etme hakkına sahiptir.<br>5. İki ihtimalli bahis yapılan oyunlar kayıp bonusu kapsamına girmemektedir. Böyle bir durum tespit edilirse oyuncunun kayıp bonus talebi dikkate alınmayacaktır. Tek-çift, kırmızı-siyah, column-dozen, dragon tiger, sic bo gibi oyunlar.<br>6. Herhangi bir kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilirse hiç bir mazeret belirtilmeden hesabı kapatılacaktır ve tüm bakiyesine el konulacaktır.<br>7. LimanBet herhangi bir bonusdaki kural ve şartları değiştirme yada bonusu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>8. Aynı anda sadece bir promosyondan faydalanılabilir.<br>9. Tüm bonuslarda Bonus Genel Şartları geçerlidir.<br>10. Bu promosyon 17.05.2023 tarihinden itibaren geçerlidir.&nbsp;</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1684264639-liman-promosyon-bannerlar-700x500px-18.jpg"></a>
                     <div class="popup">
                        <p><b>% 20 GÜNLÜK ÇEKİLEBİLİR SLOT VE TOMBALA DISCOUNT<br></b><br>1. Günlük Slot discountu yalnızca casino bölümündeki günlük (gece 00:00 dan diğer gece 00:00 a kadar olan) nakit yatırım kayıplarınız için geçerlidir. İlgili gün bitiminden sonra dilediğiniz zaman Hesap Hareketleri -&gt; Bonus Hareketleri sayfasında bulunan alandan "Slot&nbsp;Discount"ı seçip talep edebilirsiniz.Canlı Destek personelimizden Slot&nbsp;Discount işlemleri dikkate alınmayacaktır.&nbsp;<br></p>
                        <p>- 19999 TL ye kadar olan kayıplar için %15 oranında Casino Discount ,<br>- 20000 TL üzeri olan kayıplarınıza %20 oranında Casino Discount eklenecektir.&nbsp;</p>
                        <p>2. Discounttan yararlanabilmeniz için herhangi bir bölümde bakiyenizin olmaması gerekmektedir.<br>3. Discountunuz eklendikten sonra istediğiniz alanda kullanabilirsiniz.Slot&nbsp;kayıp discount için herhangi bir çevirme şartı yoktur, dilerseniz kayıp discountunuzu çekebilirsiniz.<br>4 . Slot&nbsp;veya tombala kayıp discountunuzu talep ettikten sonra 15 dakika ile 30 dakika arası hesabınıza aktarılacaktır.<br>5. Slot&nbsp;casino kayıp discountu, amacı sadece oyun oynamak olan üyelere verilmektedir, kullanıcının farklı amaçla kayıp discount aldığı tespit edilirse, casinoya girişi engellenebilir,kişinin haksız kazançtan elde ettiği bakiyeye el konulabilir.<br>6. Oyuncunun bonusları kötüye kullandığı ya da kural dışı hareketlerde bulunduğu tespit edilir ise, LimanBet söz konusu discountları iptal etme hakkına sahiptir.<br>7. Herhangi bir kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilir ise hiç bir mazeret belirtilmeden hesabi kapatilacaktir ve tüm bakiyesine el konulacaktır.<br>8. LimanBet herhangi bir discounttaki kural ve şartları değiştirme yada discountu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>9. Aynı anda sadece bir promosyondan faydalanılabilir.<br>10. Tüm bonuslarda Bonus Genel Şartları geçerlidir.<br>11. Bu promosyon 17.05.2023 tarihinden itibaren geçerlidir. 00:00 dan itibaren 24 saat içinde talep edilmeyen discount işleme alınmayacaktır.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061958-liman-promosyon-bannerlar-350x250px-15.jpg"></a>
                     <div class="popup">
                        <p><strong>BAHİS BOZDUR<br></strong><br>1. Bonus ve Freebet'ten kullanılan bahislere Bahis Bozdur yapılamaz.<br>2. Kupondaki herhangi bir bahis oynanıyorken askıya alındığında veya durduğunda Bahis Bozdur’a izin verilmez.<br>3. “Miktar değişikliğini kabul ediyorum” seçenegi işaretlenmediği takdirde, Bahis Bozdur’a başvurulduğu zaman ile Bahis Bozdur’un işleneceği zamanki miktarlar uyuşmuyor ise; Bahis Bozdur’a izin verilmez. "Miktar değişimlerini kabul ediyorum" işaretlenir ise; o an ki miktar ile Bahis Bozdurma yapılır.<br>4. Kupondaki herhangi bir bahis marketinde Bahis Bozdurma aktif degil ise bu işleme izin verilmez.<br>5. Kuponda kaybetmiş bir bahis var ise; Bahis Bozdurma işlemine izin verilmez.<br>6. Limanbet'te Bahis Bozdur etkin durumda ve kupon Bahis Bozdur’a uygun olsa dahi belli başlı müşteriler Bahis Bozdur’dan muaf tutulabilir.<br>7. Bahis Bozdur işlemi talep verdikten sonra iptal edilemez.<br>8. Her bahis tipinde her zaman Bahis Bozdur fonksiyonunu açık olmayabilir. Limanbet belirli marketleri ve belirli ligleri herhangi bir anda Bahis Bozdur seçeneğinden muaf tutabilir.<br>9. Herhangi bir nedenle veya Bahis Bozdur yapılmış bir kupondaki bir bahis tipinin veya karşılaşmanın iptal edilmesi durumunda, Limanbet Bahis Bozdur miktarını geri alma hakkını saklı tutar.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061971-liman-promosyon-bannerlar-350x250px-10.jpg"></a>
                     <div class="popup">
                        <p><strong>GÜNLÜK POKER RAKEBACK</strong><br><br>Poker oyuncuları poker odasına doğrudan para kaybetmez, ancak poker odası her paralı oyundan düzenli rake alır. Çevrimiçi olarak alınan rake, gerçek casino'lardaki gibi potun kabaca %3'üne denk gelir. Bir oyuncunun rake tutarı, pota olan katkısıyla orantılıdır.<br>Rakeback, oyunlarda alınan rakelerin bir bölümünün size geri ödenmesidir.<br>Rakeback tutarınızı hesabınıza aktarmak için canlı Yardıma bağlanabilirsiniz.<br>Rakeback promosyonunda herhangi bir çevrim şartı yoktur. Dilediğiniz an nakit olarak çekebilirsiniz.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061996-liman-promosyon-bannerlar-350x250px-06.jpg"></a>
                     <div class="popup">
                        <p><strong>DOĞUM GÜNÜ BONUSU</strong></p>
                        <p>1. Bu promosyondan sadece en az bir defa yatırım yapmış üyelerimiz faydalanabilr. <br></p>
                        <p>2. Üyeler sadece doğum gününün oldugu gün içinde (24 saat) talep verebilirler. <br></p>
                        <p>3. Promosyonun herhangi bir çevrim şartı yoktur. Dilediğiniz an nakit olarak çekebilirsiniz. <br></p>
                        <p>4. Kurallar gereği geçmişe dönük talep verilememektedir. <br></p>
                        <p>5. Son 3 aylik topam net kaybının %5 ini dogum günü bonusu olarak alabilir.(poker hariç) <br></p>
                        <p>6. Bu Promosyon 01.04.2020 tarihinden itibaren geçerli olacaktır. </p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1643628918-liman-promosyon-bannerlar-350x250px-05.jpg"></a>
                     <div class="popup">
                        <p><strong>IPHONE - ANDROID MOBILE UYGULAMA<br></strong><br>IPhone - Android telefon kullanan üyelerimiz LimanBet Spor Bahisleri uygulamamız sayesinde bahislerini daha hızlı ve kolay oluşturabilecekler.<br>1.Uygulamayı yükleyebilmek için<a href="https://limanbet.app/">https://limanbet.app</a> adresinden gerekli adımları lütfen yapınız.<br></p>
                        <p><br></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641079486-liman-promosyon-bannerlar-350x250px-11-1.jpg"></a>
                     <div class="popup">
                        <p><strong>BONUS GENEL ŞARTLARI<br></strong><br>1. Her üye bir bonustan faydalanabilir, aynı anda birden fazla bonus talep edilemez.<br>2. Depozit yaptıktan sonra ana parasını Casino ve Poker oyunlarına aktaran üyeler Spor Bahislerine Özel Promosyonlardan Faydalanamaz.<br>3. Çevrim Şartları yerine getirilmeden veya bakiyenizi sıfırlamadan Para Çekimi, Canlı Casino, Casino ve Poker’e para aktarımı yapılamaz. Çevrim şartı devam ederken yeni yatırımlarınızda çevrime dahil olmaktadır.<br>4. Promosyon şartları içerisinde Çevrim Şartı maddesi belirtilmemiş ise Çevrim Şartları şu şekildedir, Bonus Çevrimi:10 katı 2.00 oran’dır.<br>5. Promosyon şartlarını ve kazançlarını kötüye kullanmaya yönelik hesap veya bahis hareketlerinin tespit edilmesi durumunda, bonus ve bonus kazançları iptal edilecek ve yetkili karar merci Liman Bet yönetimi olacaktır.<br>6. Promosyonlardan yararlanmak isteyen üyelerimiz, ilgili kural ve şartları okuduklarını ve kabul ettiklerini teyit etmiş sayılacaklardır.<br>7. Liman Bet yönetimi; promosyon ile ilgili kuralları, sebep göstermeksizin değiştirme ve güncelleme hakkını saklı tutar.<br>8. Herhangi bir anlaşmazlık durumunda, karar verme yetkisi Liman Bet yönetimine aittir.<br>9. Aşağıdaki durumlarda tespit edilen hesaplara bonus ödemesi yapılmaz.</p>
                        <ul>
                           <li>a. Aynı ismi paylaşan hesaplar.</li>
                           <li>b. Aynı aileye/eve ait hesaplar.</li>
                           <li>c. Aynı IP’yi paylaşan hesaplar.</li>
                           <li>d. Aynı kişisel bilgileri içeren hesaplar.</li>
                           <li>e. Aynı bilgisayardan kullanılan hesaplar.</li>
                           <li>f. Aynı kişiye ait birden çok hesap.</li>
                           <li>g. Genel bonus şartlarının ihlali.</li>
                        </ul>
                        <p>10. Poker oyunlarına bonus verilmemektedir.<br>11. Canlı Casino ve Casino kayıp bonuslarınız, yatırım kaybınızdan hesaplanacaktır.<br>12. Canlı Casino ya da Netent Dıscountu alındıktan 24 saat ıcınde kazanım saglanması halınde alınmıs olan dıscount kesılecektir.<br>13. Bonusunuzu alabilmeniz için yatırımınızdan sonra son 24 saati içinde para çekim işlemi yapmamış olmak kaydıyla, canlı desteğe bağlanmanız yeterlidir.<br>14. Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dir.<br>15. Poker, Canlı casino ve Netent casinoya aktarılan miktarlar için bonus talep edilemez.<br>16. LimanBet aynı ip adresinden yapılan limit aşımını sağlayan yada sağlamayan (Aynı Maç,Aynı Lig,Aynı Bahis) Bahisleri silme ve/veya iptal etme hakkını saklı tutar. LimanBet birden fazla hesaba aynı ip adresi ile giriş yapıldığını tespit ettiği takdirde sadece ilk hesap baz alınarak diğer hesaplar kapatılır ve kazanç sağlanan kuponları silme veya iptal etme hakkını saklı tutar.<br>17.Çevrim içi Bonuslar 90 gün geçerlilik süresi mevcuttur, 90 gün içerisinde kullanılmayan bonuslar otomatik iptal olmaktadır.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
               </div>
               <script>
                  // Popup Window
                  var scrollTop = '';
                  var newHeight = '100';
                  
                  $(window).bind('scroll', function() {
                      scrollTop = $( window ).scrollTop();
                      newHeight = scrollTop + 100;
                  });
                  
                  $('.popup-trigger').click(function(e) {
                      e.stopPropagation();
                      if(jQuery(window).width() < 767) {
                          $(this).after( $(this).nextAll('.popup:first') );
                          $(this).nextAll('.popup:first').show().addClass('popup-mobile').css('top', 0);
                          $('html, body').animate({
                              scrollTop: $(this).nextAll('.popup:first').offset().top
                          }, 500);
                      } else {
                          $('.popup').hide();
                          $(this).nextAll('.popup:first').removeClass('popup-mobile').css('top', newHeight).toggle();
                      };
                  });
                  
                  $('html').click(function() {
                      $('.popup').hide();
                  });
                  
                  $('.popup-btn-close').click(function(e){
                      $(this).parent().hide();
                  });
                  
                  $('.popup').click(function(e){
                      e.stopPropagation();
                  });
               </script>
            </div>
         </div>
         <div>
            <script type="text/javascript">
               setTimeout(function(){
                   $(document).ready(function(){ 
               
               
                   var pushState = history.pushState;
               history.pushState = function () {
                   pushState.apply(history, arguments);
                  console.log("aaa11");
               console.log(window.location.pathname.split("/").pop());
               
               if (window.location.pathname.split("/").pop()=="promotions") {
               	getTake();
               }
               };
               
                
               function getTake() {
               	$.get("https://api.cdnroot.net/api/lmn/promo/getPromo.php", function(data) {
                   $("#bosbos").html(data);
                 }); 
               }
               
                 getTake();
               
               }); 
               
               },500);
            </script>
         </div>
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
    <main>
   <router-outlet></router-outlet>
   <static-content class="ng-star-inserted">
      <!---->
      <div id="content-area">
         <div extroutelink="">
            <script type="text/javascript">
               setTimeout(function(){
                   $(document).ready(function(){ 
               
               
                   var pushState = history.pushState;
               history.pushState = function () {
                   pushState.apply(history, arguments);
                  console.log("aaa11");
               console.log(window.location.pathname.split("/").pop());
               
               if (window.location.pathname.split("/").pop()=="promotions") {
               	getTake();
               }
               };
               
                
               function getTake() {
               	$.get("https://api.cdnroot.net/api/lmn/promo/getPromo.php", function(data) {
                   $("#bosbos").html(data);
                 }); 
               }
               
                 getTake();
               
               }); 
               
               },500);
            </script>
            <div id="bosbos">
               <style type="text/css">
                  body{
                  background: url(https://liman.cdnroot.blog/test/44.jpg) top left/cover no-repeat fixed !important;
                  background-size: cover;
                  }
                  .popup-trigger {  cursor: pointer; }
                  .popup {display: none; position: absolute; top: 100px; left: 50%; width: 700px; margin-left: -350px; padding: 30px 30px;
                  background: #fff; color: #333; font-size: 12px; line-height: 20px; border: 10px solid #150E2D; z-index: 9999;}
                  .popup-mobile {position: relative; top: 0; left: 0; margin: 30px 0 0; width: 100%;}
                  .popup-btn-close {position: absolute; top: 8px; right: 14px; color: #000; font-size: 14px; font-weight: bold; text-transform: uppercase; cursor: pointer;}
                  #page-content {
                  background-color: #2a2a2a;
                  }
                  #bosbos {
                  margin: 0 auto;
                  }
                  .promo_image {
                  float: left;
                  margin: 16px;
                  height: 250px;
                  }
                  .promo_image img {
                  width: 350px;
                  border: 2px #976226 solid;
                  height: 250px;
                  border-radius: 12px;
                  }
                  .promo_image img:hover {
                  border: 2px #FFF  solid;
                  }
                  .popup span {
                  font-size: 19px;
                  }
                  .footer-pro {
                  z-index: -1;
                  }
                  strong {
                  font-weight: 700;
                  }
                  @media only screen and (max-width: 1080px) {
                  .promo_image {
                  float: left;
                  margin: 18px;
                  height: 132px;
                  }
                  .promo_image img {
                  border: 2px #976226 solid;
                  width: 213px;
                  height: 132px;
                  }
                  #bosbos {
                  max-width: 760px;
                  margin: 0 auto;
                  }
                  }
                  @media only screen and (max-width: 650px) {
                  #promo_cen {
                  margin-top: 20px;
                  }
                  body {
                  background: #000 !important;
                  }
                  .promo_image {
                  float: none;
                  margin: 0 auto;
                  width: 100%;
                  height: 100%;
                  padding: 14px;
                  }
                  .promo_image img {
                  border: 2px #976226 solid;
                  width: 100%;
                  height: 100%;
                  }
                  .popup-mobile {
                  margin-left: -28px;
                  }
                  .popup {
                  padding: 30px 10px;
                  width: 100%;
                  position: absolute;
                  margin: 0px;
                  }
                  }
                  #promo_cen {
                  display: block;
                  width: 100% !important;
                  max-width: 1152px  !important;
                  margin: 0 auto;
                  }
               </style>
               <div id="promo_cen" style="margin-top: 10px;">
                  <br>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1698747061-liman-promosyon-bannerlar-700x500px.jpg"></a>
                     <div class="popup">
                        <p><strong>%15 PAPARA, PAYFİX, PARAZULA VE BITCOIN YATIRIM BONUSU
                           </strong><br><br>
                           1. Bu promosyon sadece spor bahislerine Papara, Parazula, Payfix, Youpaycoin ve Bitcoin ile yatırım yapacak olan kullanıcılar için geçerlidir. (Astropay, Kredi Kartı veya diğer yatırım yöntemleri ile yatırım yapanlar kullanıcılar bonustan faydalanamazlar. Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamaz!)
                           <br>2. Promosyon haftanın her günü geçerlidir.
                           <br>3. Bonusunuzu alabilmeniz için yatırımınızdan sonra canlı desteğe bağlanmanız gerekmektedir.
                           <br>4.Yatırımınızı yaptıktan sonra hesaplar arası transfer yapmadığınız ve çekim işlemi yapmadığınız sürece son yatırımınızın bonusunu istediğiniz zaman talep edebilirsiniz.
                           <br>5. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.
                           <br>6- Bonusunuzun çekilebilir duruma gelmesi için ana paranızı 1 defa 1.30 oranında, bonusunuzu ise oranların minimum 2.00 olduğu kuponlarda 10 katını çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.
                           <br>7.Yatırım Bonusu Papara ve Bitcoin ile min. 50 TL ve üzeri yatırımlarda geçerlidir. Banka Havelesi yatırım bonusundan sadece spor bahislerine yaptığınız para yatırımı işleminizde yararlanabilirsiniz. Bonustan yararlanabilmek için yatırmınızı yaptıktan sonra Canlı yardıma bağlanıp Bonusu talep edebilirsiniz. Aynı anda yalnızca bir bonustan yararlanabilirsiniz.
                           <br>8- Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dir.
                           <br>9- Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir. (Örneğin ; Fenerbahçe- Beşiktaş karşılaşmasına 1 kuponda ise alt seçeneğine 1 kuponda üst seçeneğine karşılıklı bahisler bonus çevriminden sayılmayacaktır.))
                           <br>10-Para çekimi yaptıktan sonraki ilk 24 saat içerisindeki yatırımlarınıza bonus verilmeyecektir. (para çekimizinin talep verildiği saat baz alınacaktır.)<br>11- Tek çekim limiti kripto ödemelerinde 1.000.000 TL'dir.<br>
                        </p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061717-liman-promosyon-bannerlar-350x250px-12.jpg"></a>
                     <div class="popup">
                        <p><strong>%25 CEPBANK ve QR'KOD  YATIRIM BONUSU</strong></p>
                        <p>1. Bu promosyon sadece spor bahislerine Cep Bank ve QR Kod ile yatırım yapacak olan kullanıcılar için geçerlidir. (Bitcoin, Astropay, Kredi Kartı veya diğer yatırım yöntemleri ile yatırım yapanlar kullanıcılar bonustan faydalanamazlar. Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamaz!)<br>2. Promosyon haftanın her günü geçerlidir.<br>3. Bonusunuzu alabilmeniz için yatırımınızdan sonra canlı desteğe bağlanmanız gerekmektedir,%25 bonusunuz anında hesabınıza yatırılacaktır.<br>4. Yatırımınızı yaptıktan sonra hesaplar arası transfer yapmadığınız ve çekim işlemi yapmadığınız sürece son yatırımınızın bonusunu istediğiniz zaman talep edebilirsiniz.<br>5. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.<br>6. %25 CEPBANK ve QR bonusunuzun çekilebilir duruma gelmesi için yatırdığınız miktarın (anapara) min. 1.30 oran , almış olduğunuz bonusun 10 katına , tek maç ( single ) min. 2,00 oranından spor karşılaşmaların da çevirmeniz yeterlidir. Kombine kuponlarda ise tek maçın oranının en az 1,70 toplam oranın ise en az 2.00 olması gereklidir.<br>7. Yatırım bonusu Cepbank ve QR ıle yapacağınız min 50 TL ve üzeri yatırımlarda geçerlidir. Cepbank ve QR yatırım bonusundan sadece spor bahislerine yaptığınız para yatırımı işleminizde yararlanabilirsiniz. Bonustan yararlanabilmek için yatırımınızı yaptıktan sonra Canlı yardıma bağlanıp bonusu talep edebilirsiniz. Aynı anda yalnızca bir bonustan yararlanabilirsiniz.<br>8. Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dır.<br>9. Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir. (Örneğin ; Real Madrid - Juventus karşılaşmasına 1 kuponda alt seçeneğine başka 1 kuponda üst seçeneğine karşılıklı bahisler bonus çevriminden sayılmayacaktır.)<br>10. Para çekimi yaptıktan sonraki ilk 24 saat içerisindeki yatırımlarınıza bonus verilmeyecektir. (para çekimizinin onaylandığı saat baz alınacaktır.)<br>11. İş Bu bonus şartı 29.06.2021 tarihinden itibaren geçerli olup, üyelerin bu promosyon detaylarını ve çevrim şartlarını bilme sorumluluğu kendilerine aittir.<br>12. Bu promosyon 24 ağustos 2021 tarihinden itibaren başlar.</p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061758-liman-promosyon-bannerlar-350x250px-08.jpg"></a>
                     <div class="popup">
                        <p><strong>%20 SPOR BAHİSLERİ PARA YATIRMA BONUSU<br></strong><br>1. Bu promosyon sadece spor bahislerine Banka havalesi,Envoy Hızlı Havale&nbsp; ile yatırım yapacak olan kullanıcılar için geçerlidir. (Astropay, Youpaycoin, Kredi kartı veya diğer yatırım yöntemleri ile yatırım yapanlar kullanıcılar bonustan faydalanamazlar. Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamaz!)</p>
                        <p>2. Promosyon haftanın her günü, her yatırımınızda geçerlidir.<br>3. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye veya bir önceki yatırımınızdan açık kupon var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.<br>4. Bonusunuzun çekilebilir duruma gelmesi için ana paranızı 1 defa 1.30 oranında, bonusunuzu ise oranların minimum 2.00 olduğu kuponlarda 10 katını çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.<br>5. Yatırım Bonusu&nbsp; ENVOY hızlı havale ile yapacagınız min 50 TL ve üzeri, banka havalesi ile min. 50 TL ve üzeri yatırımlarda geçerlidir. Bu yatırım bonusundan sadece spor bahislerine yaptığınız para yatırımı işleminizde yararlanabilirsiniz. Bonustan yararlanabilmek için yatırmınızı yaptıktan sonra Canlı yardıma bağlanıp Bonusu talep edebilirsiniz. Aynı anda yalnızca bir bonustan yararlanabilirsiniz.<br>6. Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dir.<br>7. Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir. (Örneğin ; Galatasaray - Beşiktaş karşılaşmasına 1 kuponda ise alt seçeneğine 1 kuponda üst seçeneğine karşılıklı bahisler bonus çevriminden sayılmayacaktır.))<br>8. Bu bonustan faydalanan üyelerimiz aynı anda başka promosyondan faydalanamazlar.<br>9. Yatırım bonusu talep edebilmeniz için son 24 saat içinde herhangi bir çekim işleminiz olmaması gerekmektedir.(Yatırım saatine göre uygulanacaktır.)<br>10. Tüm bonuslarda Bonus Genel Şartları geçerlidir.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061786-liman-promosyon-bannerlar-350x250px-13.jpg"></a>
                     <div class="popup">
                        <p><strong>%10 ÇEVRİMSİZ BONUS<br></strong><br>1. Bu bonusdan yararlanabilmeniz için Envoy Hızlı Havale- Envoy QR Kod veya CEPBANK yöntemiyle yatırım yapmanız yeterlidir.<br>2. çevrimsiz yatırım bonusundan sadece Spor bahislerine yaptığınız yatırım işleminizde yararlanabilirsiniz.<br>3. Bonustan yararlanabilmek için Envoy Hızlı Havale- Envoy QR Kod veya CEPBANK ile minumum yatirim miktari 100 TL dir.<br>4. Bir üyenin kazanabileceği maksimum bonus miktarı 100 TL’dir.<br>5. Para yatırma işlemi yaptıktan hemen sonra Canlı Destek hattına bağlanarak bonusunuzu talep edebilirsiniz.(Hesaplar arası transfer yapıldıktan sonra talep edilen bonuslar işleme alınmayacaktır)<br>6. Çekim yapabilmeniz veya bakiyenizi spor bahisleri dışında diğer alanlara aktarabilmeniz için, ana para ve almış olduğunuz bonusunuzu, minimum 1.30 orandan, 1 kez çevirmeniz gerekmektedir.<br>7. Oyuncunun bonusları kötüye kullandığı yada kural dışı işlemler gerçekleştirdiği tespit edilir ise, LimanBet söz konusu bonusları ve bunlarla ilgili kazançları iptal etme hakkına sahiptir.<br>8. Kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilir ise hiç bir mazeret belirtilmeden LimanBet hesabı kapatılacaktır ve tüm bakiyesine el konulacaktır.<br>9. Limanbet herhangi bir bonusdaki kural ve şartları değiştirme yada bonusu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>10. Herhangi bir anlaşmazlık durumunda Limanbet tarafından alınan kararlar bağlayıcı nitelikte olacaktır.<br>11. Bonus iptali yapılmamaktadır. Ancak bonus hiç kullanılmamış ise iptal edilebilir.<br>12. Tüm bonuslarda Bonus Genel Şartları geçerlidir.</p>
                        <p>13. Bu Promosyon 20.11.2019 tarihinden itibaren geçerli olacaktır.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1705282536-liman-promosyon-bannerlar-700x500px.jpg"></a>
                     <div class="popup">
                        <p><strong>100 TL BEDAVA ÜYELİK BONUSU VEYA 100 FREESPINS</strong><br><br>1. Promosyondan sadece yeni üyeler , ilk kayıt olduklarında alma hakkı elde eder.. ( Mevcut aktif üyelerimiz bu promosyondan faydalanamaz. )<br>2. Sitemize üye olduktan hemen sonra canlı yardıma bağlanarak bonusunuzu talep edebilirsiniz.<br>3. Bir üyenin maksimum alabileceği ‘ Bedava Bahis ‘ bonusu bir keredir.<br>4. Bu promosyondan faydalanan üyelerimiz aynı anda başka bir promosyondan faydalanamaz.<br>5. Herhangi bir müşterinin ip çakışması ve çoklu hesap dolayısıyla promosyon suistimal edildiği tespit edilir ise LimanBet söz konusu promosyonu iptal eder.<br>6. Bonusunuzun çekilebilir duruma gelmesi için minimum 2(iki) maç 3.00 (üç) orandan 6 (altı) katını çevirmeniz gerekmektedir ve maksimum çekilebilecek miktar 300 TL dir.Çekim yapabilmeniz için min. 50 TL yatırım yaparak min. 1,30 oranında bahis yapmanız yeterli olacaktır.<br>7. 100 Freespini Pragmatic Play saglayıcsında ( Sweet Bonanza. Gates of Olympus ve Starlight Princess ) oyunlarında kulanabilirsiniz. Çekim yapabilmeniz için freespin den elde edilen kazancınızın 10 katı kadar çevrim yapmalısınız&nbsp; çevrim sonrasında 50 TL yatırım yapmanız yeterlidir. 300 TL FREESPIN kazancı ile yatırımınız olan 50 TL’yi dilerseniz çekebilirsiniz.<br>8. LimanBet istediği zaman üyelerinden Kimlik, İkamet Belgesi vb. istemeye sahiptir, bu belgelerin kullanıcı tarafından ibraz edilmemesi durumunda oyuncunun kazançları bloke edilebilir. Üyenin ilk çekim talebi banka havalesi olmak zorundadır.<br></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061863-liman-promosyon-bannerlar-350x250px-01.jpg"></a>
                     <div class="popup">
                        <p><strong>%15 GÜNLÜK NAKİT İADE<br></strong><br>1. Bu kampanya 00:00 dan aynı günün gecesı 23:59 a kadar olan net bahis kaybınızı kapsamaktadır.<br>2. Günlük 2.000 TL'ye kadar kayıplarınıza %10, 2.001 TL ve üstü kayıplarınıza %15 Nakit İade alablirsiniz.<br>3. %15 Nakit İadeye sadece spor bahislerinde yapmış olduğunuz günlük kayıplarınız üzerinden hak kazanabilirsiniz.Diğer bölümlerdeki(Casino,Poker vb..) kazancınız spor bahisleri kaybınıza yansımamaktadır.<br>4. Nakit iade bonusunun herhangi bir çevrim şartı yoktur.Dilerseniz çekebilir veya diğer bölümlerde(Casino,Poker) kullanabilirsiniz.Üyenin Minimum 20TL kaybı olması gerekmektedir.Bonus için herhangi bir üst limit bulunmamaktadır.<br>5. Nakit İade taleb edebilmesi için üyenin o gün mutlaka min 20TL yatırım yapması gerekmektedir.<br>6. %15 Nakit İade taleplerinizi Hesap Hareketleri -&gt; Bonus Hareketleri sayfasında bulunan alandan "Nakit İade"yi seçip talep edebilirsiniz.Canlı Destek personelimizden nakit iade işlemleri dikkate alınmayacaktır.<br>7. Üyenin hesabında açık kupon veya o gün kazancı varsa nakit iade alma hakkı yoktur.<br>8.Yatırım bonusu alınan yatırımlarınız günlük kaybınızdan çıkaralarak Nakit İade verilecektir.<br>9. Bu promosyondan faydalanan üyelerimiz aynı anda başka promosyondan faydalanamazlar.<br>10. Tüm bonuslarda Bonus Genel Şartları geçerlidir.<br>11. 5 Aralık 2018 tarihinden itibaren geçerlidir.</p>
                        <p><br></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061899-liman-promosyon-bannerlar-350x250px-16.jpg"></a>
                     <div class="popup">
                        <p><strong>%10 KREDİ KARTI VE SANAL KART YATIRIM BONUSU<br></strong><br>1. Bu promosyon spor bahislerine sadece Sanal Kart,Mobile Ödeme ve Kredi Kartı ile yatırım yapacak olan kullanıcılar için geçerlidir. (Astropay,Kredi Kartı) Hesaplar arası transferler ve para çekim işleminizden sonraki talepler bu bonustan yararlanamazlar.<br>2. Bonustan yararlanabilmek için yatırmanız gereken minimum miktar 20 (TL-DOLAR-EURO)dur.<br>3. Gün içinde en fazla alınabilecek bonus miktarı toplam 500 TL’dir.<br>4. Bonusunuzu alabilmeniz için yatırımınızdan hemen sonra canlı desteğe bağlanmanız yeterlidir, %10 bonusunuz anında hesabınıza yatırılacaktır.<br>5. Hesabınızda bonus mevcut iken hesaplar arası transfer yapamazsınız. Müşteri hesabında bakiye veya bir önceki yatırımınızdan açık kupon var ise , yeni yapılan yatırımlar için bonus alma hakkı yoktur.<br>6. Bonusunuzun çekilebilir duruma gelmesi için yatırdığınız miktarın 1 katını min. 1.30 oranından almış olduğunuz bonusun 10 katını min. 2,00 oranından spor karşılaşmalarında çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.<br>7. Bonus çevriminde Alt/Üst, Tek/Çift gibi aynı maça yapılan iki olasılıklı bahisler kabul edilmeyecektir.<br>8. Bu bonustan faydalanan üyelerimiz aynı anda başka promosyondan faydalanamazlar.<br>9. Para çekimi yaptıktan sonraki ilk 24 saat içerisindeki yatırımlarınıza bonus verilmeyecektir. (para çekiminizin talep verildiği saat baz alınacaktır.)<br>10. LimanBet bu bonusu haber vermeksizin iptal etme, geri çekme veya kural ve şartlarını değiştirme hakkını saklı tutar. Ayrıca gerekli gördüğü kişilere ait hesaplara bonus vermeme hakkını da saklı tutar. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>11. Bu kurallara ek olarak sitemizin Genel kural ve şartları da dahildir.<br>12. LimanBet istediği zaman üyelerinden Kimlik, İkamet Belgesi vb. istemeye sahiptir, bu belgelerin kullanıcı tarafından ibraz edilmemesi durumunda oyuncunun kazançları bloke edilebilir.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061925-liman-promosyon-bannerlar-350x250px-09.jpg"></a>
                     <div class="popup">
                        <p><strong>%25 İLK ÜYELİK BONUSU<br></strong><br>1. Bu bonusdan yararlanabilmeniz için banka havalesi veya CEP-BANK yöntemiyle yatırım yapmanız gerekmektedir.<br>2. İlk üyelik bonusundan sadece spor bahislerine yaptığınız ilk para yatırımı işleminizde yararlanabilirsiniz.<br>3. Bonustan yararlanabilmek için yatırmanız gereken cepbank Minimum miktarı 50 TL, Banka Havalesi Minimum 100 TL dir.<br>4. Göndereceğiniz tüm yatırımlarınızda 500 TL’ye kadar % ilk üyelik bonusu verilmektedir.<br>5. Bir üyenin kazanabileceği maksimum bonus miktarı 500 TL’dir aynı anda yalnızca bir bonustan yararlanabilirsiniz.<br>6. Para yatırma işlemi yaptıktan hemen sonra Canlı Destek hattına bağlanarak bonusunuzu talep edebilirsiniz. Aksi takdirde geçmişe dönük bonus talepleriniz işleme alınmayacaktır.<br>7. Bonusunuzun çekilebilir duruma gelmesi için ana paranızı 1 defa 1.30 oranında, bonusunuzu ise oranların minimum 2.00 olduğu kuponlarda 10 defa çevirmeniz gerekmektedir. Kombine kuponlarda 1 maçın oranının en az 1.70, toplam oranın ise en az 2.00 olması yeterlidir.<br>8. Oyuncunun bonusları kötüye kullandığı yada kural dışı işlemler gerçekleştirdiği tespit edilir ise, Liman Bet söz konusu bonusları ve bunlarla ilgili kazançları iptal etme hakkına sahiptir.<br>9. Kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilir ise hiç bir mazeret belirtilmeden Liman Bet hesabı kapatılacaktır ve tüm bakiyesine el konulacaktır.<br>10. Liman Bet herhangi bir bonusdaki kural ve şartları değiştirme yada bonusu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>11. Her üye bu promosyondan yalnızca bir defa yararlanabilir.<br>12. Herhangi bir anlaşmazlık durumunda Liman Bet tarafından alınan kararlar bağlayıcı nitelikte olacaktır.<br>13. Bonus iptali yapılmamaktadır. Ancak bonus hiç kullanılmamış ise iptal edilebilir.<br>14. Tüm bonuslarda Bonus Genel Şartları geçerlidir.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1684264685-liman-promosyon-bannerlar-700x500px.jpg"></a>
                     <div class="popup">
                        <p><strong style="background-color: initial;">%20 GÜNLÜK ÇEKİLEBİLİR CANLI CASINO DISCOUNT</strong><br><br></p>
                        <p>1. Canlı casino discountu yalnızca canlı casino bölümündeki günlük (gece 00:00 dan diğer gece 00:00 a kadar olan) nakit yatırım kayıplarınız için geçerlidir.</p>
                        <p>- 19999 TL ye kadar olan kayıplar için %15 oranında Casino Discount ,<br>- 20000 TL üzeri olan kayıplarınıza %20 oranında Casino Discount eklenecektir.&nbsp;</p>
                        <p>2. Discounttan yararlanabilmeniz için herhangi bir bölümde bakiyenizin olmaması gerekmektedir.<br>3. Discountunuz eklendikten sonra discountu istediğiniz alanda kullanabilirsiniz. Canlı casino discount için herhangi bir çevirme şartı yoktur, dilerseniz çekebilirsiniz.<br>4. Oyuncunun bonusları kötüye kullandığı yada kural dışı hareketlerde bulunduğu tespit edilir ise, LimanBet söz konusu bonusları iptal etme hakkına sahiptir.<br>5. İki ihtimalli bahis yapılan oyunlar kayıp bonusu kapsamına girmemektedir. Böyle bir durum tespit edilirse oyuncunun kayıp bonus talebi dikkate alınmayacaktır. Tek-çift, kırmızı-siyah, column-dozen, dragon tiger, sic bo gibi oyunlar.<br>6. Herhangi bir kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilirse hiç bir mazeret belirtilmeden hesabı kapatılacaktır ve tüm bakiyesine el konulacaktır.<br>7. LimanBet herhangi bir bonusdaki kural ve şartları değiştirme yada bonusu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>8. Aynı anda sadece bir promosyondan faydalanılabilir.<br>9. Tüm bonuslarda Bonus Genel Şartları geçerlidir.<br>10. Bu promosyon 17.05.2023 tarihinden itibaren geçerlidir.&nbsp;</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1684264639-liman-promosyon-bannerlar-700x500px-18.jpg"></a>
                     <div class="popup">
                        <p><b>% 20 GÜNLÜK ÇEKİLEBİLİR SLOT VE TOMBALA DISCOUNT<br></b><br>1. Günlük Slot discountu yalnızca casino bölümündeki günlük (gece 00:00 dan diğer gece 00:00 a kadar olan) nakit yatırım kayıplarınız için geçerlidir. İlgili gün bitiminden sonra dilediğiniz zaman Hesap Hareketleri -&gt; Bonus Hareketleri sayfasında bulunan alandan "Slot&nbsp;Discount"ı seçip talep edebilirsiniz.Canlı Destek personelimizden Slot&nbsp;Discount işlemleri dikkate alınmayacaktır.&nbsp;<br></p>
                        <p>- 19999 TL ye kadar olan kayıplar için %15 oranında Casino Discount ,<br>- 20000 TL üzeri olan kayıplarınıza %20 oranında Casino Discount eklenecektir.&nbsp;</p>
                        <p>2. Discounttan yararlanabilmeniz için herhangi bir bölümde bakiyenizin olmaması gerekmektedir.<br>3. Discountunuz eklendikten sonra istediğiniz alanda kullanabilirsiniz.Slot&nbsp;kayıp discount için herhangi bir çevirme şartı yoktur, dilerseniz kayıp discountunuzu çekebilirsiniz.<br>4 . Slot&nbsp;veya tombala kayıp discountunuzu talep ettikten sonra 15 dakika ile 30 dakika arası hesabınıza aktarılacaktır.<br>5. Slot&nbsp;casino kayıp discountu, amacı sadece oyun oynamak olan üyelere verilmektedir, kullanıcının farklı amaçla kayıp discount aldığı tespit edilirse, casinoya girişi engellenebilir,kişinin haksız kazançtan elde ettiği bakiyeye el konulabilir.<br>6. Oyuncunun bonusları kötüye kullandığı ya da kural dışı hareketlerde bulunduğu tespit edilir ise, LimanBet söz konusu discountları iptal etme hakkına sahiptir.<br>7. Herhangi bir kullanıcının kural dışı faaliyetlerde bulunduğu yada hile yaptığı tespit edilir ise hiç bir mazeret belirtilmeden hesabi kapatilacaktir ve tüm bakiyesine el konulacaktır.<br>8. LimanBet herhangi bir discounttaki kural ve şartları değiştirme yada discountu tamamen kaldırma yetkisine sahiptir. Herhangi bir bonusun güncel kural ve şartlarını takip etme yükümlülüğü oyuncunun kendisine aittir.<br>9. Aynı anda sadece bir promosyondan faydalanılabilir.<br>10. Tüm bonuslarda Bonus Genel Şartları geçerlidir.<br>11. Bu promosyon 17.05.2023 tarihinden itibaren geçerlidir. 00:00 dan itibaren 24 saat içinde talep edilmeyen discount işleme alınmayacaktır.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061958-liman-promosyon-bannerlar-350x250px-15.jpg"></a>
                     <div class="popup">
                        <p><strong>BAHİS BOZDUR<br></strong><br>1. Bonus ve Freebet'ten kullanılan bahislere Bahis Bozdur yapılamaz.<br>2. Kupondaki herhangi bir bahis oynanıyorken askıya alındığında veya durduğunda Bahis Bozdur’a izin verilmez.<br>3. “Miktar değişikliğini kabul ediyorum” seçenegi işaretlenmediği takdirde, Bahis Bozdur’a başvurulduğu zaman ile Bahis Bozdur’un işleneceği zamanki miktarlar uyuşmuyor ise; Bahis Bozdur’a izin verilmez. "Miktar değişimlerini kabul ediyorum" işaretlenir ise; o an ki miktar ile Bahis Bozdurma yapılır.<br>4. Kupondaki herhangi bir bahis marketinde Bahis Bozdurma aktif degil ise bu işleme izin verilmez.<br>5. Kuponda kaybetmiş bir bahis var ise; Bahis Bozdurma işlemine izin verilmez.<br>6. Limanbet'te Bahis Bozdur etkin durumda ve kupon Bahis Bozdur’a uygun olsa dahi belli başlı müşteriler Bahis Bozdur’dan muaf tutulabilir.<br>7. Bahis Bozdur işlemi talep verdikten sonra iptal edilemez.<br>8. Her bahis tipinde her zaman Bahis Bozdur fonksiyonunu açık olmayabilir. Limanbet belirli marketleri ve belirli ligleri herhangi bir anda Bahis Bozdur seçeneğinden muaf tutabilir.<br>9. Herhangi bir nedenle veya Bahis Bozdur yapılmış bir kupondaki bir bahis tipinin veya karşılaşmanın iptal edilmesi durumunda, Limanbet Bahis Bozdur miktarını geri alma hakkını saklı tutar.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061971-liman-promosyon-bannerlar-350x250px-10.jpg"></a>
                     <div class="popup">
                        <p><strong>GÜNLÜK POKER RAKEBACK</strong><br><br>Poker oyuncuları poker odasına doğrudan para kaybetmez, ancak poker odası her paralı oyundan düzenli rake alır. Çevrimiçi olarak alınan rake, gerçek casino'lardaki gibi potun kabaca %3'üne denk gelir. Bir oyuncunun rake tutarı, pota olan katkısıyla orantılıdır.<br>Rakeback, oyunlarda alınan rakelerin bir bölümünün size geri ödenmesidir.<br>Rakeback tutarınızı hesabınıza aktarmak için canlı Yardıma bağlanabilirsiniz.<br>Rakeback promosyonunda herhangi bir çevrim şartı yoktur. Dilediğiniz an nakit olarak çekebilirsiniz.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641061996-liman-promosyon-bannerlar-350x250px-06.jpg"></a>
                     <div class="popup">
                        <p><strong>DOĞUM GÜNÜ BONUSU</strong></p>
                        <p>1. Bu promosyondan sadece en az bir defa yatırım yapmış üyelerimiz faydalanabilr. <br></p>
                        <p>2. Üyeler sadece doğum gününün oldugu gün içinde (24 saat) talep verebilirler. <br></p>
                        <p>3. Promosyonun herhangi bir çevrim şartı yoktur. Dilediğiniz an nakit olarak çekebilirsiniz. <br></p>
                        <p>4. Kurallar gereği geçmişe dönük talep verilememektedir. <br></p>
                        <p>5. Son 3 aylik topam net kaybının %5 ini dogum günü bonusu olarak alabilir.(poker hariç) <br></p>
                        <p>6. Bu Promosyon 01.04.2020 tarihinden itibaren geçerli olacaktır. </p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1643628918-liman-promosyon-bannerlar-350x250px-05.jpg"></a>
                     <div class="popup">
                        <p><strong>IPHONE - ANDROID MOBILE UYGULAMA<br></strong><br>IPhone - Android telefon kullanan üyelerimiz LimanBet Spor Bahisleri uygulamamız sayesinde bahislerini daha hızlı ve kolay oluşturabilecekler.<br>1.Uygulamayı yükleyebilmek için<a href="https://limanbet.app/">https://limanbet.app</a> adresinden gerekli adımları lütfen yapınız.<br></p>
                        <p><br></p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
                  <div class="promo_image">
                     <a class="popup-trigger" rel="nofollow"><img src="https://liman.cdnroot.blog/promo/1641079486-liman-promosyon-bannerlar-350x250px-11-1.jpg"></a>
                     <div class="popup">
                        <p><strong>BONUS GENEL ŞARTLARI<br></strong><br>1. Her üye bir bonustan faydalanabilir, aynı anda birden fazla bonus talep edilemez.<br>2. Depozit yaptıktan sonra ana parasını Casino ve Poker oyunlarına aktaran üyeler Spor Bahislerine Özel Promosyonlardan Faydalanamaz.<br>3. Çevrim Şartları yerine getirilmeden veya bakiyenizi sıfırlamadan Para Çekimi, Canlı Casino, Casino ve Poker’e para aktarımı yapılamaz. Çevrim şartı devam ederken yeni yatırımlarınızda çevrime dahil olmaktadır.<br>4. Promosyon şartları içerisinde Çevrim Şartı maddesi belirtilmemiş ise Çevrim Şartları şu şekildedir, Bonus Çevrimi:10 katı 2.00 oran’dır.<br>5. Promosyon şartlarını ve kazançlarını kötüye kullanmaya yönelik hesap veya bahis hareketlerinin tespit edilmesi durumunda, bonus ve bonus kazançları iptal edilecek ve yetkili karar merci Liman Bet yönetimi olacaktır.<br>6. Promosyonlardan yararlanmak isteyen üyelerimiz, ilgili kural ve şartları okuduklarını ve kabul ettiklerini teyit etmiş sayılacaklardır.<br>7. Liman Bet yönetimi; promosyon ile ilgili kuralları, sebep göstermeksizin değiştirme ve güncelleme hakkını saklı tutar.<br>8. Herhangi bir anlaşmazlık durumunda, karar verme yetkisi Liman Bet yönetimine aittir.<br>9. Aşağıdaki durumlarda tespit edilen hesaplara bonus ödemesi yapılmaz.</p>
                        <ul>
                           <li>a. Aynı ismi paylaşan hesaplar.</li>
                           <li>b. Aynı aileye/eve ait hesaplar.</li>
                           <li>c. Aynı IP’yi paylaşan hesaplar.</li>
                           <li>d. Aynı kişisel bilgileri içeren hesaplar.</li>
                           <li>e. Aynı bilgisayardan kullanılan hesaplar.</li>
                           <li>f. Aynı kişiye ait birden çok hesap.</li>
                           <li>g. Genel bonus şartlarının ihlali.</li>
                        </ul>
                        <p>10. Poker oyunlarına bonus verilmemektedir.<br>11. Canlı Casino ve Casino kayıp bonuslarınız, yatırım kaybınızdan hesaplanacaktır.<br>12. Canlı Casino ya da Netent Dıscountu alındıktan 24 saat ıcınde kazanım saglanması halınde alınmıs olan dıscount kesılecektir.<br>13. Bonusunuzu alabilmeniz için yatırımınızdan sonra son 24 saati içinde para çekim işlemi yapmamış olmak kaydıyla, canlı desteğe bağlanmanız yeterlidir.<br>14. Günlük maksimum alabileceğiniz Bonus Miktarı 500 TL dir.<br>15. Poker, Canlı casino ve Netent casinoya aktarılan miktarlar için bonus talep edilemez.<br>16. LimanBet aynı ip adresinden yapılan limit aşımını sağlayan yada sağlamayan (Aynı Maç,Aynı Lig,Aynı Bahis) Bahisleri silme ve/veya iptal etme hakkını saklı tutar. LimanBet birden fazla hesaba aynı ip adresi ile giriş yapıldığını tespit ettiği takdirde sadece ilk hesap baz alınarak diğer hesaplar kapatılır ve kazanç sağlanan kuponları silme veya iptal etme hakkını saklı tutar.<br>17.Çevrim içi Bonuslar 90 gün geçerlilik süresi mevcuttur, 90 gün içerisinde kullanılmayan bonuslar otomatik iptal olmaktadır.</p>
                        <span class="popup-btn-close">Kapat</span>
                     </div>
                  </div>
               </div>
               <script>
                  // Popup Window
                  var scrollTop = '';
                  var newHeight = '100';
                  
                  $(window).bind('scroll', function() {
                      scrollTop = $( window ).scrollTop();
                      newHeight = scrollTop + 100;
                  });
                  
                  $('.popup-trigger').click(function(e) {
                      e.stopPropagation();
                      if(jQuery(window).width() < 767) {
                          $(this).after( $(this).nextAll('.popup:first') );
                          $(this).nextAll('.popup:first').show().addClass('popup-mobile').css('top', 0);
                          $('html, body').animate({
                              scrollTop: $(this).nextAll('.popup:first').offset().top
                          }, 500);
                      } else {
                          $('.popup').hide();
                          $(this).nextAll('.popup:first').removeClass('popup-mobile').css('top', newHeight).toggle();
                      };
                  });
                  
                  $('html').click(function() {
                      $('.popup').hide();
                  });
                  
                  $('.popup-btn-close').click(function(e){
                      $(this).parent().hide();
                  });
                  
                  $('.popup').click(function(e){
                      e.stopPropagation();
                  });
               </script>
            </div>
         </div>
         <div>
            <script type="text/javascript">
               setTimeout(function(){
                   $(document).ready(function(){ 
               
               
                   var pushState = history.pushState;
               history.pushState = function () {
                   pushState.apply(history, arguments);
                  console.log("aaa11");
               console.log(window.location.pathname.split("/").pop());
               
               if (window.location.pathname.split("/").pop()=="promotions") {
               	getTake();
               }
               };
               
                
               function getTake() {
               	$.get("https://api.cdnroot.net/api/lmn/promo/getPromo.php", function(data) {
                   $("#bosbos").html(data);
                 }); 
               }
               
                 getTake();
               
               }); 
               
               },500);
            </script>
         </div>
      </div>
   </static-content>
   <!---->
</main>
<?php }?>