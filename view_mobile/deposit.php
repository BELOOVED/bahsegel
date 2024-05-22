<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <payment-component class="ng-star-inserted">
         <router-outlet></router-outlet>
         <deposit-money class="ng-star-inserted">
            <deposit-withdraw-money>
               <div class="breadcrumb-wrapper flex-container">
                  <div class="breadcrumbs-cont flex-container flex-item">
                     <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
                     <a href="javascript:;" class="breadcrumb ng-star-inserted">Para Yatırma</a><!----><!---->
                  </div>
               </div>
               <!----><!----><!---->
               <div class="modul-accordion-account">
                  <!---->
                  <app-notifications>
                     <div>
                        <!---->
                     </div>
                  </app-notifications>
                  <div class="modul-content">
                     <div class="money-list-cont">
                        <!----><!----><!----><!----><!---->
                        <app-static-inner-content contentcode="m_deposit-link" class="ng-star-inserted">
                           <div extroutelink="" id="m_deposit-link" class="ng-star-inserted">
                              <div id="bosbos">
                                 <style type="text/css">
                                    #paymentDep {
                                    width: 100%;
                                    margin: 0 auto;
                                    }
                                    #paymentDep img{
                                    width: 100%;
                                    margin: 5px; 
                                    }
                                 </style>
                                 <style>
                                    /* The Modal (background) */
                                    .modalDe {
                                    display: none; /* Hidden by default */
                                    position: fixed; /* Stay in place */
                                    z-index: 1; /* Sit on top */
                                    left: 0;
                                    top: 0;
                                    width: 100%; /* Full width */
                                    height: 100%; /* Full height */
                                    overflow: auto; /* Enable scroll if needed */
                                    background-color: rgb(0,0,0); /* Fallback color */
                                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                                    }
                                    /* Modal Content/Box */
                                    .modalDe-content {
                                    background-color: #fefefe;
                                    margin: 15% auto; /* 15% from the top and centered */
                                    padding: 20px;
                                    border: 1px solid #888;
                                    color: #000;
                                    width: 80%; /* Could be more or less, depending on screen size */
                                    }
                                    /* The Close Button */
                                    .close {
                                    color: #aaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                    }
                                    .close:hover,
                                    .close:focus {
                                    color: black;
                                    text-decoration: none;
                                    cursor: pointer;
                                    }
                                    #domains b {
                                    background: #ca0202;
                                    color: #fff;
                                    padding: 4px;
                                    }
                                    .modul-accordion-account {
                                    margin:  0px;
                                    overflow: hidden;
                                    }
                                 </style>
                                 
                                 
                                 <div id="paymentDep">
                                    <a href="#" id="envoygo" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/envoyhavale1.jpg"></a>
                                    <a href="#" id="envoyqr" style="display: inline;"><img src="https://beluga.cdnroot.blog/deposit/mobile_envoyqr25.jpg"></a>
                                    <a href="#" id="envoygo" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/papara2.jpg"></a>
                                    <!--  <a href="https://cdn.pandestek.com/deposit/bannerlar-beluga2.png" class="envoygo" target="_blank"  style="display: inline;"><img src="https://cdn.pandestek.com/deposit/en/lmn_deposit_qr1.jpg "/></a> !-->
                                    <a id="open-btn" style="display: inline;"><img src="https://beluga.cdnroot.blog/deposit/oto_papara_m.jpg"></a>
                                    <a href="#" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/kredikart22.jpg"></a>
                                    <a href="#" id="upaycoins" target="_blank" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/724sistem.jpg"></a>
                                    <!--<a href=" " id="envoyqr" class="parazula" target="_blank"  style="display: inline;"><img src="https://cdn.pandestek.com/deposit/parazulanew.jpg" ></a> !-->
                                 </div>
                                 <div style="clear:both;"></div>
                                 <!-- Modal Background and Modal -->
                                 <div id="modal-background">
                                    <div id="modal">
                                       <span id="close-btn">×</span>
                                       <p>Yatırım Tutarım </p>
                                       <div class="buttons">
                                          <!-- <a href="" id="papara50" class="yes" target="_blank">
                                             200 TL ALTI  Bu yatırım pasifdir.Lütfen Başka Ödeme Seçeneklerini Deneyiniz.
                                             </a>
                                             <a href="" id="allInOneInterPapara" class="no" target="_blank">
                                             200 TL ÜSTÜ
                                               </a>
                                             !-->
                                          <a href="https://limanbet.anindaislem.com/Pay/User/To/Dilafruz/2022046625030/Dilafruz Hudoyberdiyeva" id="papara250" class="yes listPrice" style="margin-bottom:20px;" target="_blank">
                                          MİN 100 TL VE ÜSTÜ
                                          </a>
                                          <a href="https://limanbet.anindaislem.com/Pay/User/To/Dilafruz/2022046625030/Dilafruz Hudoyberdiyeva" id="papara500" class="no1 no" target="_blank">
                                          MİN 500 TL VE ÜSTÜ
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <style type="text/css">
                                    /* common styles */
                                    body {
                                    font-family: sans-serif;
                                    }
                                    button:hover {
                                    cursor: pointer;
                                    }
                                    /* common styles end */
                                    /* modal part */
                                    #modal-background {
                                    display: none;
                                    background-color: rgba(0, 0, 0, 0.2);
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    z-index: 1;
                                    }
                                    #modal-background p {
                                    padding: 0;
                                    margin: 0;
                                    }
                                    #modal {
                                    background-color: #fff;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    width: 250px;
                                    padding: 10px 20px;
                                    border-radius: 5px;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                                    font-size: 1.5rem;
                                    animation-name: animatemodal;
                                    animation-duration: 0.4s;
                                    }
                                    .yes, .no {
                                    float: left;
                                    border: none;
                                    padding: 10px;
                                    font-size: 1rem;
                                    border-radius: 5px;
                                    width: 100%;
                                    text-align: center;
                                    margin-bottom: 10px;
                                    }
                                    .yes {
                                    background-color: #265065;
                                    color: #fff;
                                    }
                                    .no {
                                    background-color: #2f7921;
                                    color: #FFF;
                                    }
                                    .no1 {
                                    background-color: #6f1818;
                                    color: #FFF;
                                    }
                                    #close-btn {
                                    align-self: flex-end;
                                    }
                                    #close-btn:hover {
                                    cursor: pointer;
                                    color: #ff0000;
                                    }
                                    #open-btn {
                                    cursor: pointer;
                                    }
                                    /* modal part end */
                                    /* animation part */
                                    @keyframes animatemodal {
                                    from {
                                    top: -300px;
                                    opacity: 0;
                                    }
                                    to {
                                    top: 50%;
                                    opacity: 1;
                                    }
                                    }
                                    /* animation part end */
                                 </style>
                                
                              </div>
                           </div>
                           <div class="ng-star-inserted">
                              
                           </div>
                           <div class="ng-star-inserted"></div>
                           <!----><!---->
                        </app-static-inner-content>
                        <!----><!---->
                        <ul class="money-list-menu">
                           <!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/envoyhavale'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="envoysoft-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Envoy Hızlı Havale Yatırım" class="ng-star-inserted">Envoy Hızlı Havale Yatırım</b><br class="ng-star-inserted"><small class="ng-star-inserted">Envoy Hızlı Havale Yatırım ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 10,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/envoy_qr'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="envoyqr-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Envoy Hızlı QR Yatırım" class="ng-star-inserted">Envoy Hızlı QR Yatırım</b><br class="ng-star-inserted"><small class="ng-star-inserted">Envoy Hızlı QR Yatırım ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 5,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/paparaodeme'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="papara-form-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Papara Yatırım" class="ng-star-inserted">Papara Yatırım</b><br class="ng-star-inserted"><small class="ng-star-inserted">Papara Yatırım ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <li class="ng-star-inserted" onclick="window.location.href = '/fixturka'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="papara-form-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" width="100" height="33" class="hide" hidden=""><img src="/assets/payfix.png" width="100" height="33" class="payfix-form-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Papara Yatırım" class="ng-star-inserted">Payfix Yatırım</b><br class="ng-star-inserted"><small class="ng-star-inserted">Payfix Yatırım ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/youpaycoin'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="upaycoins-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Youpaycoin Yatırım" class="ng-star-inserted">Youpaycoin Yatırım</b><br class="ng-star-inserted"><small class="ng-star-inserted">Youpaycoin Yatırım ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 20.00 / Max. TRY: 1,000,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/banktransfer'">
                              <a queryparamshandling="merge" class="flex-container" href="#">
                                 <div class="img-wrapper">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                 </div>
                                 <br>
                                 <ul class="flex-item info">
                                    <li><b>Banka Transferi</b></li>
                                    <li>
                                       <small class="ng-star-inserted">Banka Havalesi ile Yatırım</small><!----><!---->
                                    </li>
                                    <li class="trans-fee ng-star-inserted">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ 10-30 <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <!---->
                                    <li class="bank-amound-limit"><small>Min: ₺50.00 / Max: ₺50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/cepbank'">
                              <a queryparamshandling="merge" class="flex-container" href="#">
                                 <div class="img-wrapper">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                 </div>
                                 <br>
                                 <ul class="flex-item info">
                                    <li><b>Atm/Cep Bank ile Transfer</b></li>
                                    <li><small>Mobil bankacılık ile yatırım</small></li>
                                    <li class="trans-fee ng-star-inserted">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ 10-30 <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <!---->
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 1,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/trendhavale'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="turbohavale-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Trend Havale Yatırım" class="ng-star-inserted">Trend Havale Yatırım</b><br class="ng-star-inserted"><small class="ng-star-inserted">Trend Havale Yatırım ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/fixturka'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="scashmoney-fixturka-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="ScashMoney Fixturka Deposit" class="ng-star-inserted">ScashMoney Fixturka Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">ScashMoney Fixturka Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><span class="ng-star-inserted">/ ANINDA <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 25.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/scashpapara'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="scashmoney-papara-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="ScashMoney Papara Deposit" class="ng-star-inserted">ScashMoney Papara Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">ScashMoney Papara Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 500,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/serihavale'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="tiktak-havale-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Tiktak Havale Deposit" class="ng-star-inserted">Tiktak Havale Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">Tiktak Havale Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/trinkhavale'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="softpay-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Trink Havale" class="ng-star-inserted">Trink Havale</b><br class="ng-star-inserted"><small class="ng-star-inserted">Trink Havale ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 250.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/sistempapara'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="sistemnakit-papara-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Sistem Nakit Papara Deposit" class="ng-star-inserted">Sistem Nakit Papara Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">Sistem Nakit Papara Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 250.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/sistemhavale'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="sistemnakit-bank-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Sistem Nakit Bank Deposit" class="ng-star-inserted">Sistem Nakit Bank Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">Sistem Nakit Bank Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/seripopy'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="safirhavale-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Safirhavale Deposit" class="ng-star-inserted">Safirhavale Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">Safirhavale Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 100.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/scashhavale'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="scashmoney-bank-transfer-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" width="100" height="33" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="ScashMoney Bank Transfer Deposit" class="ng-star-inserted">ScashMoney Bank Transfer Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">ScashMoney Bank Transfer Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 250.00 / Max. TRY: 50,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted" onclick="window.location.href = '/starpaypapara'">
                              <a queryparamshandling="merge" class="flex-container" data-payment="starpay-papara-deposit" href="#">
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Starpay Papara Deposit" class="ng-star-inserted">Starpay Papara Deposit</b><br class="ng-star-inserted"><small class="ng-star-inserted">Starpay Papara Deposit ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          Bedava<!----><!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 250.00 / Max. TRY: 200,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!---->
                        </ul>
                     </div>
                     <app-static-inner-content contentcode="m_deposit-bottom" class="ng-star-inserted">
                        <!---->
                     </app-static-inner-content>
                     <!----><!---->
                  </div>
               </div>
            </deposit-withdraw-money>
         </deposit-money>
         <!---->
      </payment-component>
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
<style>
   .dshbrd-modal .modal-content .dshbrd-mdl .mdl-hdr .header-content .modal-close-button a i {
    color: white;
    margin-top: 7px;
    margin-left: 1px;
}
</style>
            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-deposit-money class="ng-star-inserted">
                  <deposit-withdraw-money>
                     <div class="pymnt-cntnt">
                        <div class="dshbrd-mdl dshbrd-hide-block" style="display: none;">
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title ng-star-inserted">Para Yatırma</span><!----><!---->
                              </div>
                           </div>
                           <div class="mdl-cntnt">
                              <!---->
                              <p class="ng-star-inserted">Para yatırma seçenekleri aşağıda listelenmiştir. Lütfen para yatırma türünü seçip hesabınıza kolayca yatırmak için talimatları takip ediniz.</p>
                              <!---->
                              <app-static-inner-content contentcode="deposit-link-top" class="ng-star-inserted">
                                 <!---->
                              </app-static-inner-content>
                              <!----><!----><!---->
                           </div>
                           <app-notifications>
                              <div>
                                 <!---->
                              </div>
                           </app-notifications>
                        </div>
                        <!---->
                        <div class="dshbrd-mdl">
                           <!---->
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title ng-star-inserted">Para Yatırma Seçenekleri</span><!----><!---->
                              </div>
                           </div>
                           <!---->
                           <div class="mdl-cntnt clear">
                              <!----><!----><!----><!---->
                              <app-static-inner-content contentcode="deposit-link" class="ng-star-inserted">
                                 <div extroutelink="" id="deposit-link" class="ng-star-inserted">
                                    <div id="bosbos">
                                       <style type="text/css">
                                          #bosbos {
                                          width: 926px;
                                          }
                                          #bosbos img {
                                          border: 4px #000 solid;
                                          }
                                          #bankIban {
                                          color:#000;
                                          background: #FFFFFF !important;
                                          background-color:#FFFFFF !important;
                                          }
                                       </style>
                                       <script type="text/javascript">
                                          allInTimer = setInterval(function () {
                                              $(document).ready(function(){
                                          
                                          $(".dshbrd-mdl").first().hide();
                                          $(".uinfoDom").remove();
                                          $('*[data-payment="reispapara-deposit"]').hide();
                                          
                                          
                                           $('.envoygo').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoysoft-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoysoft-deposit"]').click(); 
                                              });
                                          $('.ccgon').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="neropay-deposit"]').offset().top-40}, 500, 'swing', function() {});
                                                $('*[data-payment="neropay-deposit"]').click();  
                                              });
                                          $('.upaycoins').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="upaycoins-deposit"]').offset().top-40}, 500, 'swing', function() {});
                                                $('*[data-payment="upaycoins-deposit"]').click();  
                                              });
                                          
                                          
                                          $('.gotoPAPARA').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoysoft-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoysoft-deposit"]').click(); 
                                                  
                                                             var paparaInterval = setInterval(function(){
                                                              if ($('#PaymentFormModal #bankCode option[value=ePara]').length > 0) {
                                                                  setTimeout(function(){
                                                                      $('#bankCode option[value=ePara]').attr('selected','selected');
                                                                      $("#bankCode")[0].fetchSelectData;
                                                                      $("#bankCode")[0].dispatchEvent(new Event("change"));
                                          
                                                                  }, 200);
                                          
                                                                  clearInterval(paparaInterval);
                                                              }
                                                          }, 200); 
                                                             
                                           
                                              });
                                          $('.envoyCC').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoysoft-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoysoft-deposit"]').click(); 
                                                         
                                                         var paparaInterval2 = setInterval(function(){
                                                              if ($('#PaymentFormModal #bankCode option[value=creditcard]').length > 0) {
                                                                  setTimeout(function(){
                                                                      $('#bankCode option[value=creditcard]').attr('selected','selected');
                                                                      $("#bankCode")[0].fetchSelectData;
                                                                      $("#bankCode")[0].dispatchEvent(new Event("change"));
                                          
                                                                  }, 200);
                                          
                                                                  clearInterval(paparaInterval2);
                                                              }
                                                          }, 200); 
                                           
                                          
                                           
                                              });
                                                  $('.flexcc').click(function(){
                                                      $("html, body").stop().animate({scrollTop:$('*[data-payment="flex-card-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                      $('*[data-payment="flex-card-deposit"]').click();
                                                  });
                                          clearInterval(allInTimer);
                                          
                                                          $('#upaycoins').click(function(){
                                                      $("html, body").stop().animate({scrollTop:$('*[data-payment="softpay-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                      $('*[data-payment="softpay-deposit"]').click();
                                                  });
                                          
                                          
                                          
                                          
                                              });
                                          
                                          
                                          },500);
                                       </script>
                                       <script>
                                          var envoyAPI=envoyAPI||{},envoyUrl="https://envoysoft2.net/api",siteKey="ym0IFpRS",enVendor="p3";(function(){(function(f){var g=document.createElement("script"),h=document.getElementsByTagName("script");l=h.length,h=h[l-1],g.type="text/javascript",g.async=!0,g.src=f,h.parentNode.insertBefore(g,h)})(envoyUrl+"/api.1.0.min.js")})(envoyAPI||{});
                                       </script>
                                       <a class="envoygo" href="javascript:void(0);" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/hizli_qr_sml.jpg " style="width: 457px;float: left;margin-bottom: 10px;"></a>
                                       <a class="envoyhizli" href="javascript:void(0);" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/liman_hizli_qr_25.jpg " style="width: 457px;float: right;margin-bottom: 10px;"></a>
                                       <div style="clear:both"></div>
                                       <a href="javascript:void(0);" class="gotoPAPARA" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/lmn_deposit_papara.jpg" style="width: 457px;float: left;margin-bottom: 10px;"></a>
                                       <a id="open-btn" class="reispapara" style="display: inline;" target="_blank"><img src="https://cdnliman.b-cdn.net/deposit/otoPapara2.jpg" style="width: 457px;float: right;margin-bottom: 10px;"></a>
                                       <div style="clear:both"></div>
                                       <!-- <a href="javascript:void(0);" class="ccgon" id="gotoCC" style="display: inline;"><img bitcoin.jpg src="https://cdn.pandestek.com/deposit/lmn_deposit_cc.jpg" https://cdn.pandestek.com/deposit/banner-paynow.png style="margin-bottom: 10px;width: 457px;float: left;"></a> !-->
                                       <a href="javascript:void(0);" class="upaycoins2" id="upaycoins" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/lmn_otohavale.jpg" style="width: 457px;float: left;margin-bottom: 10px;"></a>
                                       <a href="javascript:void(0);" class="envoyCC" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/lmn_deposit_cc.jpg" style="width: 457px;float: right;margin-bottom: 10px;"></a>
                                       <div style="clear:both;"></div>
                                       <!-- Modal Background and Modal -->
                                       <div id="modal-background">
                                          <div id="modal">
                                             <span id="close-btn">×</span>
                                             <p>Yatırım Tutarım </p>
                                             <div class="buttons">
                                                <!--  <a href="javascript:void(0);" id="papara50" class="yes" target="_blank">
                                                   200 TL ALTI Bu yatırım pasifdir.Lütfen Başka Ödeme Seçeneklerini Deneyiniz.
                                                   </a>
                                                   <a href="javascript:void(0);" id="allInOneInterPapara" class="no" target="_blank">
                                                   200 TL ÜSTÜ
                                                   </a>
                                                   !-->
                                                <a href="https://limanbet.anindaislem.com/Pay/User/To/Ygt0790/2024016933711/yiğit Yalçı" id="papara250" class="yes listPrice" style="margin-bottom:20px;" target="_blank">
                                                MİN 100 TL VE ÜSTÜ
                                                </a>
                                                <a href="https://limanbet.anindaislem.com/Pay/User/To/Ygt0790/2024016933711/yiğit Yalçı" id="papara500" class="no1 no" target="_blank">
                                                MİN 500 TL VE ÜSTÜ
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <style type="text/css">
                                          /* common styles */
                                          body {
                                          font-family: sans-serif;
                                          }
                                          button:hover {
                                          cursor: pointer;
                                          }
                                          /* common styles end */
                                          /* modal part */
                                          #modal-background {
                                          display: none;
                                          background-color: rgba(0, 0, 0, 0.2);
                                          position: fixed;
                                          top: 0;
                                          left: 0;
                                          width: 100%;
                                          height: 100%;
                                          z-index: 1;
                                          }
                                          #modal-background p {
                                          padding: 0;
                                          margin: 0;
                                          }
                                          #modal {
                                          background-color: #fff;
                                          position: absolute;
                                          top: 50%;
                                          left: 50%;
                                          transform: translate(-50%, -50%);
                                          width: 250px;
                                          padding: 10px 20px;
                                          border-radius: 5px;
                                          display: flex;
                                          flex-direction: column;
                                          align-items: center;
                                          box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                                          font-size: 1.5rem;
                                          animation-name: animatemodal;
                                          animation-duration: 0.4s;
                                          }
                                          .yes, .no {
                                          float: left;
                                          border: none;
                                          padding: 10px;
                                          font-size: 1rem;
                                          border-radius: 5px;
                                          width: 100%;
                                          text-align: center;
                                          margin-bottom: 10px;
                                          }
                                          .yes {
                                          background-color: #265065;
                                          color: #fff;
                                          }
                                          .no {
                                          background-color: #2f7921;
                                          color: #FFF;
                                          }
                                          .no1 {
                                          background-color: #6f1818;
                                          color: #FFF;
                                          }
                                          #close-btn {
                                          align-self: flex-end;
                                          }
                                          #close-btn:hover {
                                          cursor: pointer;
                                          color: #ff0000;
                                          }
                                          #open-btn {
                                          cursor: pointer;
                                          }
                                          /* modal part end */
                                          /* animation part */
                                          @keyframes animatemodal {
                                          from {
                                          top: -300px;
                                          opacity: 0;
                                          }
                                          to {
                                          top: 50%;
                                          opacity: 1;
                                          }
                                          }
                                          /* animation part end */
                                       </style>
                                       <script type="text/javascript">
                                          // select the open-btn button
                                          let openBtn = document.getElementById('open-btn');
                                          // select the modal-background
                                          let modalBackground = document.getElementById('modal-background');
                                          // select the close-btn
                                          let closeBtn = document.getElementById('close-btn');
                                          
                                          // shows the modal when the user clicks open-btn
                                          openBtn.addEventListener('click', function() {
                                          modalBackground.style.display = 'block';
                                          });
                                          
                                          // hides the modal when the user clicks close-btn
                                          closeBtn.addEventListener('click', function() {
                                          modalBackground.style.display = 'none';
                                          });
                                          
                                          // hides the modal when the user clicks outside the modal
                                          window.addEventListener('click', function(event) {
                                          // check if the event happened on the modal-background
                                          if (event.target === modalBackground) {
                                          // hides the modal
                                          modalBackground.style.display = 'none';
                                          }
                                          });
                                       </script>
                                    </div>
                                 </div>
                                 <div class="ng-star-inserted">
                                    
                                 </div>
                                 <div class="ng-star-inserted"></div>
                                 <!----><!---->
                              </app-static-inner-content>
                              <!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('1');">
                                 <div class="card-panel bank-card" data-payment="envoysoft-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Envoy Hızlı Havale Yatırım">Envoy Hızlı Havale Yatırım</h5>
                                                <small>Envoy Hızlı Havale Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺10,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('2');">
                                 <div class="card-panel bank-card" data-payment="envoyqr-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Envoy Hızlı QR Yatırım">Envoy Hızlı QR Yatırım</h5>
                                                <small>Envoy Hızlı QR Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺5,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('3');">
                                 <div class="card-panel bank-card" data-payment="papara-form-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Papara Yatırım">Papara Yatırım</h5>
                                                <small>Papara Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('4');">
                                 <div class="card-panel bank-card" data-payment="upaycoins-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Youpaycoin Yatırım">Youpaycoin Yatırım</h5>
                                                <small>Youpaycoin Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺20.00 / Max: ₺1,000,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('5');">
                                 <div class="card-panel bank-card" data-payment="BANK_TRANSFER">
                                    <div class="flex-container">
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Banka Transferi</h5>
                                             <small class="ng-star-inserted">Banka Havalesi ile Yatırım</small><!----><!---->
                                          </div>
                                       </div>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ 10-30 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('6');">
                                 <div class="card-panel bank-card" data-payment="MOBILEBANK">
                                    <div class="flex-container">
                                       <!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Atm/Cep Bank ile Transfer</h5>
                                             <small>Mobil bankacılık ile yatırım</small>
                                          </div>
                                       </div>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ 10-30 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺1,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('7');">
                                 <div class="card-panel bank-card" data-payment="turbohavale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Trend Havale Yatırım">Trend Havale Yatırım</h5>
                                                <small>Trend Havale Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('8');">
                                 <div class="card-panel bank-card" data-payment="scashmoney-fixturka-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="ScashMoney Fixturka Deposit">ScashMoney Fixturka Deposit</h5>
                                                <small>ScashMoney Fixturka Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ ANINDA <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺25.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('9');">
                                 <div class="card-panel bank-card" data-payment="scashmoney-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="ScashMoney Papara Deposit">ScashMoney Papara Deposit</h5>
                                                <small>ScashMoney Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('10');">
                                 <div class="card-panel bank-card" data-payment="tiktak-havale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Tiktak Havale Deposit">Tiktak Havale Deposit</h5>
                                                <small>Tiktak Havale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('11');">
                                 <div class="card-panel bank-card" data-payment="softpay-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Trink Havale">Trink Havale</h5>
                                                <small>Trink Havale ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('12');">
                                 <div class="card-panel bank-card" data-payment="sistemnakit-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Sistem Nakit Papara Deposit">Sistem Nakit Papara Deposit</h5>
                                                <small>Sistem Nakit Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('13');">
                                 <div class="card-panel bank-card" data-payment="sistemnakit-bank-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Sistem Nakit Bank Deposit">Sistem Nakit Bank Deposit</h5>
                                                <small>Sistem Nakit Bank Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('14');">
                                 <div class="card-panel bank-card" data-payment="seripopy-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Seripopy Deposit">Seripopy Deposit</h5>
                                                <small>Seripopy Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('15');">
                                 <div class="card-panel bank-card" data-payment="safirhavale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Safirhavale Deposit">Safirhavale Deposit</h5>
                                                <small>Safirhavale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('16');">
                                 <div class="card-panel bank-card" data-payment="scashmoney-bank-transfer-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="ScashMoney Bank Transfer Deposit">ScashMoney Bank Transfer Deposit</h5>
                                                <small>ScashMoney Bank Transfer Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted" onclick="openpaymentmodal('17');">
                                 <div class="card-panel bank-card" data-payment="starpay-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Starpay Papara Deposit">Starpay Papara Deposit</h5>
                                                <small>Starpay Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺200,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </div>
                        </div>
                        <app-static-inner-content contentcode="deposit-bottom" class="ng-star-inserted">
                           <!---->
                        </app-static-inner-content>
                        <!----><!---->
                     </div>
                     <div id="PaymentFormModal" materialize="modal" class="modal open dshbrd-modal pymnt-mdl hidden" style="z-index: 1047; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
                        <payment-form class="modal1 hidden" id="htur1">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 10,000.00 ₺ <span class="processing-time">| Ortalama İşlem Süresi : Anında Dk </span><!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!---->
                                                      <div class="dropdown-field">
                                                         <span class="field-label required">Banka Seçiniz</span><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                            <select class="browser-default ng-untouched ng-pristine ng-invalid" id="bankCode">
                                                               <option value="" disabled="">Banka Seçiniz</option>
                                                               <option value="creditcard">
                                                                  <!----> Kredi Kartı <!----><!---->
                                                               </option>
                                                               <option value="ePara">
                                                                  <!----> Papara <!----><!---->
                                                               </option>
                                                               <option value="payfix">
                                                                  <!----> Payfix <!----><!---->
                                                               </option>
                                                               <option value="ziraatBankasi">
                                                                  <!----> Ziraat Bankası <!----><!---->
                                                               </option>
                                                               <option value="garantiBankasi">
                                                                  <!----> Garanti Bankası <!----><!---->
                                                               </option>
                                                               <option value="yapiKrediBankasi">
                                                                  <!----> Yapı Kredi Bankası <!----><!---->
                                                               </option>
                                                               <option value="isBankasi">
                                                                  <!----> İş Bankası <!----><!---->
                                                               </option>
                                                               <option value="akBank">
                                                                  <!----> AkBank <!----><!---->
                                                               </option>
                                                               <option value="denizBank">
                                                                  <!----> DenizBank <!----><!---->
                                                               </option>
                                                               <option value="pttbank">
                                                                  <!----> Ptt Bank <!----><!---->
                                                               </option>
                                                               <option value="vakifbank">
                                                                  <!----> Vakıfbank <!----><!---->
                                                               </option>
                                                               <option value="halkbank">
                                                                  <!----> HalkBank <!----><!---->
                                                               </option>
                                                               <option value="kuveytTurk">
                                                                  <!----> Kuveyt Türk <!----><!---->
                                                               </option>
                                                               <option value="teb">
                                                                  <!----> TEB <!----><!---->
                                                               </option>
                                                               <option value="finansBank">
                                                                  <!----> FinansBank <!----><!---->
                                                               </option>
                                                               <option value="enpara">
                                                                  <!----> Enpara <!----><!---->
                                                               </option>
                                                               <option value="ingBank">
                                                                  <!----> ING Bank <!----><!---->
                                                               </option>
                                                               <!---->
                                                            </select>
                                                            <!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!----><!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur2">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 5,000.00 ₺ <span class="processing-time">| Ortalama İşlem Süresi : Anında Dk </span><!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!---->
                                                      <div class="dropdown-field">
                                                         <span class="field-label required">Banka Seçiniz</span><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                            <select class="browser-default ng-untouched ng-pristine ng-invalid" id="bankCode">
                                                               <option value="" disabled="">Banka Seçiniz</option>
                                                               <option value="garantiBankasi">
                                                                  <!----> Garanti Bankası <!----><!---->
                                                               </option>
                                                               <option value="yapiKrediBankasi">
                                                                  <!----> Yapı Kredi Bankası <!----><!---->
                                                               </option>
                                                               <option value="isBankasi">
                                                                  <!----> İş Bankası <!----><!---->
                                                               </option>
                                                               <option value="akBank">
                                                                  <!----> AkBank <!----><!---->
                                                               </option>
                                                               <option value="denizBank">
                                                                  <!----> DenizBank <!----><!---->
                                                               </option>
                                                               <!---->
                                                            </select>
                                                            <!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               5,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                             <li class="collection-item"><i class="material-icons info-icon">info</i><span>Para yatırım miktarı 10 ve katları şeklinde olmalıdır</span></li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur3">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-dirty ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 50,000.00 ₺ <span class="processing-time">| Ortalama İşlem Süresi : Anında Dk </span><!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-dirty ng-invalid">
                                                      <!---->
                                                      <div class="textbox-field">
                                                         <span class="field-label">Müşteri Adı</span><!----><input minlengthmaskedfield="" class="browser-default ng-untouched ng-dirty ng-valid" placeholder="Müşteri Adı" id="willBeRemoved" type="" readonly=""><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-dirty ng-invalid">
                                                      <!---->
                                                      <div class="textbox-field">
                                                         <span class="field-label required">Papara Hesap Numarası</span><!----><input minlengthmaskedfield="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Papara Hesap Numarası" id="param1" type="" required=""><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-dirty ng-invalid">
                                                      <!---->
                                                      <div class="textarea-field">
                                                         <span class="field-label">Müşteri Notu</span><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <textarea class="browser-default ng-untouched ng-pristine ng-valid" placeholder="Müşteri Notu" id="customerNote"></textarea>
                                                         <!----><!----><!---->
                                                         <div>
                                                            <!----><!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur4">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 20.00 ₺ / Max: 1,000,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-valid">
                                                      <!---->
                                                      <div class="actionButton-field">
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!---->
                                                         </div>
                                                         <!----><button type="button" class="btn">İşlemi Başlat</button><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!----><!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur5">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                          </payment-icon>
                                          <!----><!----><!----><!---->
                                          <h5>Banka Transferi</h5>
                                          <!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!----><!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!---->
                                                      <div class="dropdown-field">
                                                         <span class="field-label required">Banka Seçiniz</span><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                            <select class="browser-default ng-untouched ng-pristine ng-invalid" id="selectbank">
                                                               <option value="" disabled="">Banka Seçiniz</option>
                                                               <option value="garanti-deposit-transfer">
                                                                  <!----> Garanti Bankasi Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="denizbank-deposit-transfer">
                                                                  <!----> Denizbank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="finansbank-deposit-transfer">
                                                                  <!----> Finansbank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="teb-deposit-transfer">
                                                                  <!----> TEB Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="kuveytturk-deposit-transfer">
                                                                  <!----> Kuveyt Türk Yatırım <!----><!---->
                                                               </option>
                                                               <option value="akbank-deposit-transfer">
                                                                  <!----> Akbank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="ing-deposit-transfer">
                                                                  <!----> ING Bank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="vakifbank-deposit-transfer">
                                                                  <!----> Vakifbank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="halkbank-deposit-transfer">
                                                                  <!----> Halkbank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="isbank-deposit-transfer">
                                                                  <!----> Is Bankasi Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="ziraat-deposit-transfer">
                                                                  <!----> Ziraat Bankasi Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="yapikredi-deposit-transfer">
                                                                  <!----> Yapi Kredi Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="turkiyefinans-deposit-transfer">
                                                                  <!----> Türkiye Finans Yatırım <!----><!---->
                                                               </option>
                                                               <option value="fibabank-deposit-transfer">
                                                                  <!----> Fibabank Yatırım <!----><!---->
                                                               </option>
                                                               <!---->
                                                            </select>
                                                            <!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <!----><!----><!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur6">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                          </payment-icon>
                                          <!----><!----><!----><!---->
                                          <h5>Atm/Cep Bank ile Transfer</h5>
                                          <!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!----><!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!---->
                                                      <div class="dropdown-field">
                                                         <span class="field-label required">Banka Seçiniz</span><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                            <select class="browser-default ng-untouched ng-pristine ng-invalid" id="selectbank">
                                                               <option value="" disabled="">Banka Seçiniz</option>
                                                               <option value="yapikredi-cepbank">
                                                                  <!----> Yapi Kredi Cepbank <!----><!---->
                                                               </option>
                                                               <option value="garanti-cepbank">
                                                                  <!----> Garanti Cepbank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="ing-cepbank">
                                                                  <!----> ING Cep Bank Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="isbank-cepbank">
                                                                  <!----> Is Bankasi CepMatik Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="akbank-cepbank">
                                                                  <!----> Akbank Cep Cüzdan Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="denizbank-cepbank">
                                                                  <!----> Denizbank Cepbank  Para Yatırım <!----><!---->
                                                               </option>
                                                               <option value="finansbank-cepbank">
                                                                  <!----> Finansbank Cepbank <!----><!---->
                                                               </option>
                                                               <option value="vakifbank-cepbank">
                                                                  <!----> Vakıfbank Cepbank <!----><!---->
                                                               </option>
                                                               <option value="ptt-cepbank">
                                                                  <!----> PTT Cepbank <!----><!---->
                                                               </option>
                                                               <option value="kuveytturk-cepbank">
                                                                  <!----> Kuveytturk Cepbank <!----><!---->
                                                               </option>
                                                               <option value="bkmexpress-cepbank">
                                                                  <!----> BKM Express - Cepbank <!----><!---->
                                                               </option>
                                                               <option value="sekerbank-cepbank">
                                                                  <!----> Sekerbank Cepbank <!----><!---->
                                                               </option>
                                                               <!---->
                                                            </select>
                                                            <!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <!----><!----><!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur7">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 50,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur8">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 25.00 ₺ / Max: 50,000.00 ₺ <span class="processing-time">| Ortalama İşlem Süresi : ANINDA Dk </span><!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               25.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               125.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur9">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!---->
                                                      <div class="currencySelect-field">
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!----><!----><!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!---->
                                                         <select class="browser-default hide ng-untouched ng-pristine ng-valid" id="currency">
                                                            <option disabled="" value="undefined">Para Birimi</option>
                                                            <option value="TRY"> Türk Lirası </option>
                                                            <!---->
                                                         </select>
                                                         <!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <div class="input-field">
                                                <!---->
                                             </div>
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <div class="input-field">
                                                <button class="btn pymnt-frm-btn s12 col" disabled=""> Sonraki adım </button><!---->
                                             </div>
                                          </form>
                                          <!----><!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur10">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 50,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur11">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 250.00 ₺ / Max: 100,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-valid">
                                                      <!---->
                                                      <div class="actionButton-field">
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!---->
                                                         </div>
                                                         <!----><button type="button" class="btn">İşlemi Başlat</button><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!----><!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur12">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 250.00 ₺ / Max: 100,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               5,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               10,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               100,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur13">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 100,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               100,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur14">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 50.00 ₺ / Max: 100,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               100,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur15">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 100.00 ₺ / Max: 50,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               100.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               4,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <bonus-and-freebet>
                                                <!----><!----><!----><!---->
                                             </bonus-and-freebet>
                                             <!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!---->
                                             <div class="input-field">
                                                <button type="submit" class="btn pymnt-frm-btn s12 col" style="text-transform: uppercase;" disabled="">
                                                   <!----><!----> Yatırımı Yaptım <!----><!---->
                                                </button>
                                             </div>
                                             <!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur16">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-invalid">
                                                      <!---->
                                                      <div class="currencySelect-field">
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!----><!----><!---->
                                                         </div>
                                                         <!----><!----><!----><!----><!---->
                                                         <select class="browser-default hide ng-untouched ng-pristine ng-valid" id="currency">
                                                            <option disabled="" value="undefined">Para Birimi</option>
                                                            <option value="TRY"> Türk Lirası </option>
                                                            <!---->
                                                         </select>
                                                         <!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <already-amounts>
                                                <div class="amount-field clear">
                                                   <div class="col s6">
                                                      <div class="input-field">
                                                         <span>Miktar (Yatırım Para Birimi)</span><!----><!----><input type="text" id="mntNpt" debounce="1000" currency-mask="" autocomplete="off" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yatırım Tutarı"><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                   <div class="col s6">
                                                      <div class="amount-cntr">
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               1,250.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               2,500.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               5,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               10,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <div class="amount-cntnt">
                                                            <button type="button" class="btn">
                                                               50,000.00 ₺ <!----><!----><!---->
                                                            </button>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <!---->
                                             </already-amounts>
                                             <!---->
                                             <div class="input-field">
                                                <!---->
                                             </div>
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <div class="input-field">
                                                <button class="btn pymnt-frm-btn s12 col" disabled=""> Sonraki adım </button><!---->
                                             </div>
                                          </form>
                                          <!----><!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                        <payment-form class="modal1 hidden" id="htur17">
                           <!----><!---->
                           <div class="modal-content">
                              <div class="dshbrd-mdl pymnt-mdl">
                                 <div class="mdl-hdr">
                                    <div class="header-content">
                                       <div class="modal-title">
                                          <payment-icon>
                                             <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
                                          </payment-icon>
                                          <!----><!---->
                                          <h5>Para Yatırma</h5>
                                          <!----><!----><!---->
                                       </div>
                                       <a href="/" class="fa fa-home pg-icons left" style="font-size: 40px; color: orange;"></a><!----><!---->
                                       <div class="right dropdown-right">
                                          <a data-activates="other-payments-dropdown" data-beloworigin="true" materialize="dropdown" class="dropdown-button btn">Finans Tipini Seçiniz</a>
                                          <ul id="other-payments-dropdown" class="dropdown-content">
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="55" height="18" class="envoysoft-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="55" height="18" class="envoyqr-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Envoy Hızlı QR Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="55" height="18" class="papara-form-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Papara Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="55" height="18" class="upaycoins-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Youpaycoin Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <!----><span class="pymnt-name">Banka Transferi</span><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="55" height="18" class=""><!---->
                                                   </payment-icon>
                                                   <span class="pymnt-name">Atm/Cep Bank ile Transfer</span><!----><!----><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="55" height="18" class="turbohavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trend Havale Yatırım</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="55" height="18" class="scashmoney-fixturka-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Fixturka Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="55" height="18" class="scashmoney-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="55" height="18" class="tiktak-havale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Tiktak Havale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="55" height="18" class="softpay-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Trink Havale</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="55" height="18" class="sistemnakit-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="55" height="18" class="sistemnakit-bank-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Sistem Nakit Bank Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="55" height="18" class="seripopy-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Seripopy Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="55" height="18" class="safirhavale-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Safirhavale Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="55" height="18" class="hide"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">ScashMoney Bank Transfer Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!---->
                                             <li>
                                                <a href="javascript:;" class="bnk-field">
                                                   <payment-icon>
                                                      <img src="https://via.placeholder.com/55x18.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="55" height="18" class="starpay-papara-deposit"><!---->
                                                   </payment-icon>
                                                   <!----><!----><span class="pymnt-name">Starpay Papara Deposit</span><!---->
                                                </a>
                                             </li>
                                             <!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="modal-close-button" onclick="closepaymentmodal()"><a><i class="fa fa-times"></i></a></div>
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mdl-cntnt">
                                    <div class="content row">
                                       <div class="col s8">
                                          <!----><!---->
                                          <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                             <div class="row">
                                                <app-static-inner-content>
                                                   <!---->
                                                </app-static-inner-content>
                                                <!---->
                                                <div class="info-field col s12">
                                                   <span class="inf-cntnt">
                                                      Min: 250.00 ₺ / Max: 200,000.00 ₺ <!---->
                                                   </span>
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                                <payment-payment-form-field>
                                                   <div class="clear col s12 ng-untouched ng-pristine ng-valid">
                                                      <!---->
                                                      <div class="actionButton-field">
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                         <div>
                                                            <!----><!---->
                                                         </div>
                                                         <!----><button type="button" class="btn">İşlemi Başlat</button><!----><!----><!----><!----><!----><!----><!---->
                                                      </div>
                                                      <!---->
                                                   </div>
                                                </payment-payment-form-field>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!----><!----><!---->
                                             <app-notifications>
                                                <div>
                                                   <!---->
                                                </div>
                                             </app-notifications>
                                             <!----><!----><!----><!---->
                                             <payment-detail-context>
                                                <!---->
                                             </payment-detail-context>
                                          </form>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <div class="col s4">
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                          <!----><!---->
                                          <ul class="collection with-header modal-sidebar">
                                             <li class="collection-header">
                                                <h4><i class="material-icons info-icon">info</i>Bilgi</h4>
                                             </li>
                                             <!---->
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Tüm bilgilerin doğru olduğundan emin olun</span></li>
                                             <li class="collection-item"><i class="material-icons report-icon">report_problem</i><span>Kur çevrim değerleri yaklaşık tutarlardır, işlem sırasında miktarda değişiklik olabilir</span></li>
                                             <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          </ul>
                                          <!----><!----><!---->
                                          <app-static-inner-content>
                                             <!---->
                                          </app-static-inner-content>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </payment-form>
                     </div>
                     <div id="confirmPromptModal" materialize="modal" class="modal modal-sm dshbrd-modal" style="z-index: 1081;">
                        <app-confirm-promt>
                           <!---->
                        </app-confirm-promt>
                     </div>
                  </deposit-withdraw-money>
               </app-deposit-money>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<script>
   function openpaymentmodal(contentId) {
          closepaymentmodal();
          $("body").css('overflow','hidden');
          $(".pymnt-mdl").removeClass("hidden");
          $(".modal-overlay").removeClass("hidden");
          $("#htur" + contentId).removeClass("hidden");
      }
      function closepaymentmodal() {
          $("body").css('overflow','scroll');
          
          $(".modal1").addClass("hidden");
          $(".modal-overlay").addClass("hidden");
          
      }
</script>
<?php }?>