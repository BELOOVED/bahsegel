<?php
if ($detect->isMobile()) {?>
<main onclick="islemkisiti()">
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <payment-component class="ng-star-inserted">
         <router-outlet></router-outlet>
         <withdraw-money class="ng-star-inserted">
            <deposit-withdraw-money>
               <div class="breadcrumb-wrapper flex-container">
                  <div class="breadcrumbs-cont flex-container flex-item">
                     <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
                     <!----><a href="javascript:;" class="breadcrumb ng-star-inserted">Para Çekme</a><!---->
                  </div>
               </div>
               <!----><!---->
               <app-static-inner-content contentcode="m_withdraw-link-top" class="ng-star-inserted">
                  <!---->
               </app-static-inner-content>
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
                        <!----><!----><!----><!----><!----><!---->
                        <app-static-inner-content contentcode="m_withdraw-link" class="ng-star-inserted">
                           <div extroutelink="" id="m_withdraw-link" class="ng-star-inserted">
                              <div id="bosbos">&nbsp;</div>
                           </div>
                           <div class="ng-star-inserted">
                              
                           </div>
                           <div class="ng-star-inserted"></div>
                           <!----><!---->
                        </app-static-inner-content>
                        <!---->
                        <ul class="money-list-menu">
                           <!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" data-payment="envoysoft-withdraw" >
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Çekim" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-413.png" width="100" height="33" class="envoysoft-withdraw"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Envoy Hızlı Havale Çekim" class="ng-star-inserted">Envoy Hızlı Havale Çekim</b><br class="ng-star-inserted"><small class="ng-star-inserted">Envoy Hızlı Havale Çekim ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 10,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" >
                                 <div class="img-wrapper">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" width="100" height="33" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                    </payment-icon>
                                 </div>
                                 <br>
                                 <ul class="flex-item info">
                                    <li><b>Banka Transferi</b></li>
                                    <li>
                                       <!----><small class="ng-star-inserted">Banka Transferi ile Para Çekme</small><!---->
                                    </li>
                                    <li class="trans-fee ng-star-inserted">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <!---->
                                    <li class="bank-amound-limit"><small>Min: ₺100.00 / Max: ₺100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" data-payment="papara-form-withdraw" >
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Çekim Form" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-270.png" width="100" height="33" class="papara-form-withdraw"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Papara Çekim Form" class="ng-star-inserted">Papara Çekim Form</b><br class="ng-star-inserted"><small class="ng-star-inserted">Papara Çekim Form ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 100.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" data-payment="upaycoins-withdraw" >
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=YouPayCoin Çekim" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-715.png" width="100" height="33" class="upaycoins-withdraw"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="YouPayCoin Çekim" class="ng-star-inserted">YouPayCoin Çekim</b><br class="ng-star-inserted"><small class="ng-star-inserted">YouPayCoin Çekim ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 200.00 / Max. TRY: 1,000,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" data-payment="payfix-form-withdraw" >
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Payfix Çekim Form" width="100" height="33" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-836.png" width="100" height="33" class="payfix-form-withdraw"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Payfix Çekim Form" class="ng-star-inserted">Payfix Çekim Form</b><br class="ng-star-inserted"><small class="ng-star-inserted">Payfix Çekim Form ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 100.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" data-payment="seripopy-withdraw" >
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Seripopy Withdraw" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/withdraw-1872.png" width="100" height="33" class="seripopy-withdraw"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Seripopy Withdraw" class="ng-star-inserted">Seripopy Withdraw</b><br class="ng-star-inserted"><small class="ng-star-inserted">Seripopy Withdraw ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 50.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                           <li class="ng-star-inserted">
                              <a queryparamshandling="merge" class="flex-container" data-payment="starpay-papara-withdraw" >
                                 <div class="img-wrapper ng-star-inserted">
                                    <payment-icon width="100" height="33">
                                       <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Withdraw" width="100" height="33" class="hide" hidden=""><img src="/images/limanbet/upload_files/withdraw-1870.png" width="100" height="33" class="starpay-papara-withdraw"><!---->
                                    </payment-icon>
                                 </div>
                                 <!----><!----><br>
                                 <ul class="flex-item info">
                                    <li>
                                       <b title="Starpay Papara Withdraw" class="ng-star-inserted">Starpay Papara Withdraw</b><br class="ng-star-inserted"><small class="ng-star-inserted">Starpay Papara Withdraw ile işlem yap</small><!----><!----><!----><!----><!---->
                                    </li>
                                    <!---->
                                    <li class="trans-fee">
                                       <b>İşlem limiti &amp; İşlem zamanı</b><br>
                                       <small>
                                          <!---->Bedava<!----><!----><!----><!----><!---->
                                       </small>
                                    </li>
                                    <li class="bank-amound-limit"><small>Min. TRY: 200.00 / Max. TRY: 100,000.00</small></li>
                                 </ul>
                              </a>
                           </li>
                           <!----><!----><!----><!----><!----><!---->
                        </ul>
                     </div>
                     <!---->
                     <app-static-inner-content contentcode="m_withdraw-bottom" class="ng-star-inserted">
                        <!---->
                     </app-static-inner-content>
                     <!---->
                  </div>
               </div>
            </deposit-withdraw-money>
         </withdraw-money>
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
   <main onclick="islemkisiti()">
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <div class="container dshbrd-cntr">
         <div class="row">
         <?php include 'modules/sidebar.php' ?>

            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-withdraw-money class="ng-star-inserted">
                  <deposit-withdraw-money>
                     <div class="pymnt-cntnt">
                        <div class="dshbrd-mdl dshbrd-hide-block" style="display: none;">
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><!----><span class="inf-title ng-star-inserted">Para Çekme</span><!---->
                              </div>
                           </div>
                           <div class="mdl-cntnt">
                              <!----><!----><!---->
                              <p class="ng-star-inserted">Para çekme seçenekleri aşağıda listelenmiştir. Lütfen para çekme türünü seçip hesabınızdan kolayca para çekmek için talimatları takip ediniz.</p>
                              <app-static-inner-content contentcode="withdraw-link-top" class="ng-star-inserted">
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
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><!----><span class="inf-title ng-star-inserted">Para Çekme Seçenekleri</span><!---->
                              </div>
                           </div>
                           <!---->
                           <div class="mdl-cntnt clear">
                              <!----><!----><!----><!----><!---->
                              <app-static-inner-content contentcode="withdraw-link" class="ng-star-inserted">
                                 <div extroutelink="" id="withdraw-link" class="ng-star-inserted">
                                    <div id="bosbos">
                                       <script type="text/javascript">
                                          allInTimer = setInterval(function () {
                                              $(document).ready(function(){ 
                                          
                                          $(".dshbrd-mdl").first().hide();
                                          $(".uinfoDom").remove();
                                          
                                          
                                          clearInterval(allInTimer);
                                              
                                            });
                                          },500);
                                       </script>
                                    </div>
                                 </div>
                                 <div class="ng-star-inserted">
                                    
                                 </div>
                                 <div class="ng-star-inserted"></div>
                                 <!----><!---->
                              </app-static-inner-content>
                              <!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="envoysoft-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Çekim" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-413.png" width="100" height="33" class="envoysoft-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Envoy Hızlı Havale Çekim">Envoy Hızlı Havale Çekim</h5>
                                                <small>Envoy Hızlı Havale Çekim ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺10,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="BANK_TRANSFER">
                                    <div class="flex-container">
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Banka Transferi</h5>
                                             <!----><small class="ng-star-inserted">Banka Transferi ile Para Çekme</small><!---->
                                          </div>
                                       </div>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="papara-form-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Papara Çekim Form" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-270.png" width="100" height="33" class="papara-form-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Papara Çekim Form">Papara Çekim Form</h5>
                                                <small>Papara Çekim Form ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="upaycoins-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=YouPayCoin Çekim" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-715.png" width="100" height="33" class="upaycoins-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="YouPayCoin Çekim">YouPayCoin Çekim</h5>
                                                <small>YouPayCoin Çekim ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺200.00 / Max: ₺1,000,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="payfix-form-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Payfix Çekim Form" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-836.png" width="100" height="33" class="payfix-form-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Payfix Çekim Form">Payfix Çekim Form</h5>
                                                <small>Payfix Çekim Form ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="seripopy-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Seripopy Withdraw" class="hide" hidden=""><img src="/images/limanbet/upload_files/withdraw-1872.png" width="100" height="33" class="seripopy-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Seripopy Withdraw">Seripopy Withdraw</h5>
                                                <small>Seripopy Withdraw ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="starpay-papara-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Withdraw" class="hide" hidden=""><img src="/images/limanbet/upload_files/withdraw-1870.png" width="100" height="33" class="starpay-papara-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Starpay Papara Withdraw">Starpay Papara Withdraw</h5>
                                                <small>Starpay Papara Withdraw ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺200.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </div>
                        </div>
                        <!---->
                        <app-static-inner-content contentcode="withdraw-bottom" class="ng-star-inserted">
                           <!---->
                        </app-static-inner-content>
                        <!---->
                     </div>
                     <div id="PaymentFormModal" materialize="modal" class="modal open dshbrd-modal pymnt-mdl" style="z-index: 1091;">
                        <!---->
                     </div>
                     <div id="confirmPromptModal" materialize="modal" class="modal modal-sm dshbrd-modal" style="z-index: 1093;">
                        <app-confirm-promt>
                           <!---->
                        </app-confirm-promt>
                     </div>
                  </deposit-withdraw-money>
               </app-withdraw-money>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>