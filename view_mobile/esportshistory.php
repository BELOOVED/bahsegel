<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-iframe-reports class="ng-star-inserted">
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">E-Sporlar Hesap Hrk. Raporu</a>
            </div>
            <div class="filter-toggle bet-history-filter">
               <a href="javascript:;" class="filter-toggle-btn">
                  <i class="fa fa-filter"></i> Filtrele 
                  <select select-modal="" class="browser-default ng-untouched ng-pristine ng-valid">
                     <option value="null" class="ng-star-inserted">ALL</option>
                     <!---->
                     <option value="R" class="ng-star-inserted">ROLLEDBACK</option>
                     <!---->
                     <option value="O" class="ng-star-inserted">OPEN</option>
                     <!---->
                     <option value="L" class="ng-star-inserted">LOSS</option>
                     <!---->
                     <option value="W" class="ng-star-inserted">WIN</option>
                     <!----><!---->
                  </select>
               </a>
            </div>
            <div class="filter-toggle bet-history-filter"><a href="javascript:;" class="bet-history-dates-btn"><i class="fa fa-calendar"></i> Tarih </a></div>
         </div>
         <!----><!---->
         <message-box type="error" icon="fa fa-exclamation-circle" class="ng-star-inserted">
            <div class="card-panel message-box error">
               <div class="icon left ng-star-inserted"><i class="fa fa-exclamation-circle"></i></div>
               <!----><!---->
               <div class="ng-star-inserted">
                  Veri bulunamadı<!----><!----><!----><!---->
               </div>
               <!----><!----><!----><!----><!---->
            </div>
         </message-box>
         <!----><!----><!---->
         <div id="betHistoryModal" materialize="modal" class="modal modal-md dshbrd-tckt-modal hdr-fix" style="z-index: 1049;">
            <!---->
         </div>
      </app-iframe-reports>
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
               <app-iframe-reports class="ng-star-inserted">
                  <div class="bet-hstry-cntnt bet-lmt-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-cntnt">
                           <ul class="tabs ng-star-inserted">
                              <!---->
                              <li class="tab ng-star-inserted"><a href="#" routerlinkactive="active" class="iframe-tabs"> Golden Race </a></li>
                              <!----><!---->
                              <li class="tab ng-star-inserted"><a href="#" routerlinkactive="active" class="iframe-tabs active"> E-Sporlar Hesap Hrk. Raporu </a></li>
                              <!----><!---->
                           </ul>
                           <!----><!---->
                           <form novalidate="" class="ng-untouched ng-valid ng-dirty">
                              <div class="row">
                                 <div class="col s12">
                                    <h5 class="frm-hdr">Lütfen tarih aralığı seçin</h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="date-picker-field col s5">
                                    <label for="betHistoryStartDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="betHistoryStartDatePicker_root" tabindex="0" aria-hidden="true">
                                          <div class="picker__holder">
                                             <div class="picker__frame">
                                                <div class="picker__wrap">
                                                   <div class="picker__box">
                                                      <div class="picker__date-display">
                                                         <div class="picker__year-display">
                                                            <div>2024</div>
                                                         </div>
                                                         <span class="picker__weekday-display">Paz, </span><span class="picker__month-display">Oca </span><span class="picker__day-display">28</span>
                                                      </div>
                                                      <div class="picker__container__wrapper">
                                                         <div class="picker__calendar-container">
                                                            <div class="picker__header">
                                                               <div class="picker__month">Ocak</div>
                                                               <div class="picker__year">2024</div>
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="betHistoryStartDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="betHistoryStartDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="betHistoryStartDatePicker_table" role="grid" aria-controls="betHistoryStartDatePicker" aria-readonly="true">
                                                               <thead>
                                                                  <tr>
                                                                     <th class="picker__weekday" scope="col" title="Pazar">Paz</th>
                                                                     <th class="picker__weekday" scope="col" title="Pazartesi">Pzt</th>
                                                                     <th class="picker__weekday" scope="col" title="Salı">S</th>
                                                                     <th class="picker__weekday" scope="col" title="Çarşamba">Ç</th>
                                                                     <th class="picker__weekday" scope="col" title="Perşembe">P</th>
                                                                     <th class="picker__weekday" scope="col" title="Cuma">C</th>
                                                                     <th class="picker__weekday" scope="col" title="Cumartesi">Ct</th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1703970000000" role="gridcell" aria-label="31/12/2023" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704056400000" role="gridcell" aria-label="01/01/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704142800000" role="gridcell" aria-label="02/01/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704229200000" role="gridcell" aria-label="03/01/2024" tabindex="0">3</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704315600000" role="gridcell" aria-label="04/01/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704402000000" role="gridcell" aria-label="05/01/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704488400000" role="gridcell" aria-label="06/01/2024" tabindex="0">6</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704574800000" role="gridcell" aria-label="07/01/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704661200000" role="gridcell" aria-label="08/01/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704747600000" role="gridcell" aria-label="09/01/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704834000000" role="gridcell" aria-label="10/01/2024" tabindex="0">10</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704920400000" role="gridcell" aria-label="11/01/2024" tabindex="0">11</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705006800000" role="gridcell" aria-label="12/01/2024" tabindex="0">12</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705093200000" role="gridcell" aria-label="13/01/2024" tabindex="0">13</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705179600000" role="gridcell" aria-label="14/01/2024" tabindex="0">14</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705266000000" role="gridcell" aria-label="15/01/2024" tabindex="0">15</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705352400000" role="gridcell" aria-label="16/01/2024" tabindex="0">16</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705438800000" role="gridcell" aria-label="17/01/2024" tabindex="0">17</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705525200000" role="gridcell" aria-label="18/01/2024" tabindex="0">18</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705611600000" role="gridcell" aria-label="19/01/2024" tabindex="0">19</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705698000000" role="gridcell" aria-label="20/01/2024" tabindex="0">20</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705784400000" role="gridcell" aria-label="21/01/2024" tabindex="0">21</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705870800000" role="gridcell" aria-label="22/01/2024" tabindex="0">22</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705957200000" role="gridcell" aria-label="23/01/2024" tabindex="0">23</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706043600000" role="gridcell" aria-label="24/01/2024" tabindex="0">24</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706130000000" role="gridcell" aria-label="25/01/2024" tabindex="0">25</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706216400000" role="gridcell" aria-label="26/01/2024" tabindex="0">26</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706302800000" role="gridcell" aria-label="27/01/2024" tabindex="0">27</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1706389200000" role="gridcell" aria-label="28/01/2024" aria-selected="true" aria-activedescendant="true" tabindex="0">28</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706475600000" role="gridcell" aria-label="29/01/2024" tabindex="0">29</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706562000000" role="gridcell" aria-label="30/01/2024" tabindex="0">30</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706648400000" role="gridcell" aria-label="31/01/2024" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706734800000" role="gridcell" aria-label="01/02/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706821200000" role="gridcell" aria-label="02/02/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706907600000" role="gridcell" aria-label="03/02/2024" tabindex="0">3</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706994000000" role="gridcell" aria-label="04/02/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707080400000" role="gridcell" aria-label="05/02/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707166800000" role="gridcell" aria-label="06/02/2024" tabindex="0">6</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707253200000" role="gridcell" aria-label="07/02/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707339600000" role="gridcell" aria-label="08/02/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707426000000" role="gridcell" aria-label="09/02/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707512400000" role="gridcell" aria-label="10/02/2024" tabindex="0">10</div>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="betHistoryStartDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="betHistoryStartDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="betHistoryStartDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="betHistoryStartDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="betHistoryStartDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="1" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="date-picker-field col s5">
                                    <label for="betHistoryEndDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="betHistoryEndDatePicker_root" tabindex="0" aria-hidden="true">
                                          <div class="picker__holder">
                                             <div class="picker__frame">
                                                <div class="picker__wrap">
                                                   <div class="picker__box">
                                                      <div class="picker__date-display">
                                                         <div class="picker__year-display">
                                                            <div>2024</div>
                                                         </div>
                                                         <span class="picker__weekday-display">Paz, </span><span class="picker__month-display">Oca </span><span class="picker__day-display">28</span>
                                                      </div>
                                                      <div class="picker__container__wrapper">
                                                         <div class="picker__calendar-container">
                                                            <div class="picker__header">
                                                               <div class="picker__month">Ocak</div>
                                                               <div class="picker__year">2024</div>
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="betHistoryEndDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="betHistoryEndDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="betHistoryEndDatePicker_table" role="grid" aria-controls="betHistoryEndDatePicker" aria-readonly="true">
                                                               <thead>
                                                                  <tr>
                                                                     <th class="picker__weekday" scope="col" title="Pazar">Paz</th>
                                                                     <th class="picker__weekday" scope="col" title="Pazartesi">Pzt</th>
                                                                     <th class="picker__weekday" scope="col" title="Salı">S</th>
                                                                     <th class="picker__weekday" scope="col" title="Çarşamba">Ç</th>
                                                                     <th class="picker__weekday" scope="col" title="Perşembe">P</th>
                                                                     <th class="picker__weekday" scope="col" title="Cuma">C</th>
                                                                     <th class="picker__weekday" scope="col" title="Cumartesi">Ct</th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1703970000000" role="gridcell" aria-label="31/12/2023" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704056400000" role="gridcell" aria-label="01/01/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704142800000" role="gridcell" aria-label="02/01/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704229200000" role="gridcell" aria-label="03/01/2024" tabindex="0">3</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704315600000" role="gridcell" aria-label="04/01/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704402000000" role="gridcell" aria-label="05/01/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704488400000" role="gridcell" aria-label="06/01/2024" tabindex="0">6</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704574800000" role="gridcell" aria-label="07/01/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704661200000" role="gridcell" aria-label="08/01/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704747600000" role="gridcell" aria-label="09/01/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704834000000" role="gridcell" aria-label="10/01/2024" tabindex="0">10</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704920400000" role="gridcell" aria-label="11/01/2024" tabindex="0">11</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705006800000" role="gridcell" aria-label="12/01/2024" tabindex="0">12</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705093200000" role="gridcell" aria-label="13/01/2024" tabindex="0">13</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705179600000" role="gridcell" aria-label="14/01/2024" tabindex="0">14</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705266000000" role="gridcell" aria-label="15/01/2024" tabindex="0">15</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705352400000" role="gridcell" aria-label="16/01/2024" tabindex="0">16</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705438800000" role="gridcell" aria-label="17/01/2024" tabindex="0">17</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705525200000" role="gridcell" aria-label="18/01/2024" tabindex="0">18</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705611600000" role="gridcell" aria-label="19/01/2024" tabindex="0">19</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705698000000" role="gridcell" aria-label="20/01/2024" tabindex="0">20</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705784400000" role="gridcell" aria-label="21/01/2024" tabindex="0">21</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705870800000" role="gridcell" aria-label="22/01/2024" tabindex="0">22</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705957200000" role="gridcell" aria-label="23/01/2024" tabindex="0">23</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706043600000" role="gridcell" aria-label="24/01/2024" tabindex="0">24</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706130000000" role="gridcell" aria-label="25/01/2024" tabindex="0">25</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706216400000" role="gridcell" aria-label="26/01/2024" tabindex="0">26</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706302800000" role="gridcell" aria-label="27/01/2024" tabindex="0">27</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1706389200000" role="gridcell" aria-label="28/01/2024" aria-selected="true" aria-activedescendant="true" tabindex="0">28</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706475600000" role="gridcell" aria-label="29/01/2024" tabindex="0">29</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706562000000" role="gridcell" aria-label="30/01/2024" tabindex="0">30</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706648400000" role="gridcell" aria-label="31/01/2024" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706734800000" role="gridcell" aria-label="01/02/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706821200000" role="gridcell" aria-label="02/02/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706907600000" role="gridcell" aria-label="03/02/2024" tabindex="0">3</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706994000000" role="gridcell" aria-label="04/02/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707080400000" role="gridcell" aria-label="05/02/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707166800000" role="gridcell" aria-label="06/02/2024" tabindex="0">6</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707253200000" role="gridcell" aria-label="07/02/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707339600000" role="gridcell" aria-label="08/02/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707426000000" role="gridcell" aria-label="09/02/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707512400000" role="gridcell" aria-label="10/02/2024" tabindex="0">10</div>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="betHistoryEndDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="betHistoryEndDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="betHistoryEndDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="betHistoryEndDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="betHistoryEndDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="2" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="input-field col s12 m2"><button class="btn w100">Sorgula</button></div>
                              </div>
                           </form>
                           <div class="type-btn-grp">
                              <button class="btn bg stts- fltr-btn active ng-star-inserted"><i class="fa fa-bars stts-"></i><i class="stts-">Hepsi</i></button><button class="btn bg stts-R fltr-btn ng-star-inserted"><i class="stts-"></i><i class="stts-">İade</i></button><button class="btn bg stts-O fltr-btn ng-star-inserted"><i class="fa fa-clock-o stts-"></i><i class="stts-">Tamamlanmamış</i></button><button class="btn bg stts-L fltr-btn ng-star-inserted"><i class="fa fa-times stts-"></i><i class="stts-">Kayıp</i></button><button class="btn bg stts-W fltr-btn ng-star-inserted"><i class="fa fa-check stts-"></i><i class="stts-">Kazanç</i></button><!----><!----><!---->
                           </div>
                        </div>
                     </div>
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-bars"></i><span class="inf-title">En Son Yapılan İşlemler</span></div>
                        </div>
                        <!---->
                        <message-box type="error" icon="fa fa-exclamation-circle" class="ng-star-inserted">
                           <div class="card-panel message-box error">
                              <div class="icon left ng-star-inserted"><i class="fa fa-exclamation-circle"></i></div>
                              <!----><!---->
                              <div class="ng-star-inserted">
                                 Veri bulunamadı<!----><!----><!----><!---->
                              </div>
                              <!----><!----><!----><!----><!---->
                           </div>
                        </message-box>
                        <!----><!----><!---->
                     </div>
                  </div>
                  <div id="betHistoryModal" materialize="modal" class="modal modal-md dshbrd-tckt-modal hdr-fix" style="z-index: 1121;">
                     <!---->
                  </div>
               </app-iframe-reports>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>