<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <casino-pro-history class="ng-star-inserted">
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Casinopro Geçmişi</a>
            </div>
            <div class="filter-toggle bet-history-filter">
               <a href="javascript:;" class="filter-toggle-btn">
                  <i class="fa fa-filter"></i> Filtrele 
                  <select select-modal="" class="browser-default ng-untouched ng-pristine ng-valid">
                     <option value="0: Object" class="ng-star-inserted">Hepsi</option>
                     <option value="1: Object" class="ng-star-inserted">Kazanç</option>
                     <option value="2: Object" class="ng-star-inserted">Kayıp</option>
                     <!---->
                  </select>
               </a>
            </div>
            <div class="filter-toggle bet-history-filter"><a href="javascript:;" class="bet-history-dates-btn"><i class="fa fa-calendar"></i>Tarih </a></div>
         </div>
         <!---->
         <app-notifications>
            <div>
               <!---->
            </div>
         </app-notifications>
         <div class="modul-accordion-account bet-history-filter-text"><span class="field-label">Hepsi</span></div>
         <!----><!---->
         <div class="card-panel message-box info ng-star-inserted">
            <i class="material-icons left">info</i>
            <div>Veri bulunamadı</div>
         </div>
         <!----><!---->
      </casino-pro-history>
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
               <casino-pro-history class="ng-star-inserted">
                  <div class="csno-pro-hstry-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-history"></i><span class="inf-title">Casinopro Geçmişi</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <form novalidate="" class="ng-untouched ng-valid ng-dirty">
                              <div class="row">
                                 <div class="col s12">
                                    <h5 class="frm-hdr">Tarih Aralığı Seç</h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="date-picker-field col s5">
                                    <label for="casinoProHistoryStartDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="casinoProHistoryStartDatePicker_root" tabindex="0" aria-hidden="true">
                                          <div class="picker__holder">
                                             <div class="picker__frame">
                                                <div class="picker__wrap">
                                                   <div class="picker__box">
                                                      <div class="picker__date-display">
                                                         <div class="picker__year-display">
                                                            <div>2024</div>
                                                         </div>
                                                         <span class="picker__weekday-display">Cmt, </span><span class="picker__month-display">Oca </span><span class="picker__day-display">27</span>
                                                      </div>
                                                      <div class="picker__container__wrapper">
                                                         <div class="picker__calendar-container">
                                                            <div class="picker__header">
                                                               <div class="picker__month">Ocak</div>
                                                               <div class="picker__year">2024</div>
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="casinoProHistoryStartDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="casinoProHistoryStartDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="casinoProHistoryStartDatePicker_table" role="grid" aria-controls="casinoProHistoryStartDatePicker" aria-readonly="true">
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
                                                                        <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1706302800000" role="gridcell" aria-label="27/01/2024" aria-selected="true" aria-activedescendant="true" tabindex="0">27</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today" data-pick="1706389200000" role="gridcell" aria-label="28/01/2024" tabindex="0">28</div>
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
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="casinoProHistoryStartDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="casinoProHistoryStartDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="casinoProHistoryStartDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="casinoProHistoryStartDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="casinoProHistoryStartDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="1" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="date-picker-field col s5">
                                    <label for="casinoProHistoryEndDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="casinoProHistoryEndDatePicker_root" tabindex="0" aria-hidden="true">
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
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="casinoProHistoryEndDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="casinoProHistoryEndDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="casinoProHistoryEndDatePicker_table" role="grid" aria-controls="casinoProHistoryEndDatePicker" aria-readonly="true">
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
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="casinoProHistoryEndDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="casinoProHistoryEndDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="casinoProHistoryEndDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="casinoProHistoryEndDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="casinoProHistoryEndDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="1" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="input-field col s2"><button type="submit" class="btn w100">Sorgula</button></div>
                              </div>
                           </form>
                           <div class="type-btn-grp">
                              <button class="btn bg stts- fltr-btn active ng-star-inserted"><i class="stts-">Hepsi</i><i class="fa fa-bars right stts-"></i></button><button class="btn bg stts-W fltr-btn ng-star-inserted"><i class="stts-W">Kazanç</i><i class="fa fa-check right stts-W"></i></button><button class="btn bg stts-L fltr-btn ng-star-inserted"><i class="stts-L">Kayıp</i><i class="fa fa-times right stts-L"></i></button><!---->
                           </div>
                        </div>
                     </div>
                     <app-notifications>
                        <div>
                           <!---->
                        </div>
                     </app-notifications>
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-bars"></i><span class="inf-title">Tarih aralığı: 27/01/2024 - 28/01/2024</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="scrllble-tbl">
                              <table class="dshbrd-tbl">
                                 <thead>
                                    <tr>
                                       <th>Bahis Numarası</th>
                                       <th>Oynanılan Tarih</th>
                                       <th>Kazanılan Tarih</th>
                                       <th>Ana Kasa tutarından oynandı</th>
                                       <th>Bonus'tan oynandı</th>
                                       <th>Kazanılan Miktar - Ana Kasa</th>
                                       <th>Kazanılan Miktar - Bonus</th>
                                       <th>Oyun Sağlayıcı</th>
                                       <th>Oyun</th>
                                       <th>Kategori</th>
                                       <th>Statü</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr class="ng-star-inserted">
                                       <td>54148908827</td>
                                       <td>2024-01-27 23:09</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148898871</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148896580</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148893020</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <span class="ng-star-inserted">2024-01-27 23:08</span><!----><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>5.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-check stts-W"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148890776</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148888716</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148886737</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148884580</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148881507</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <span class="ng-star-inserted">2024-01-27 23:08</span><!----><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-check stts-W"></i></td>
                                    </tr>
                                    <!---->
                                    <tr class="ng-star-inserted">
                                       <td>54148879460</td>
                                       <td>2024-01-27 23:08</td>
                                       <td>
                                          <!----><span class="ng-star-inserted">-</span><!---->
                                       </td>
                                       <td>2.50 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>0.00 ₺</td>
                                       <td>3 Oaks Gaming</td>
                                       <td>Magic Apple</td>
                                       <td>Video Slots</td>
                                       <td><i aria-hidden="true" class="fa fa-times stts-L"></i></td>
                                    </tr>
                                    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                 </tbody>
                              </table>
                           </div>
                           <paginator>
                              <ul class="pagination ng-star-inserted">
                                 <li class="disabled ng-star-inserted"><a href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
                                 <!---->
                                 <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                                 <li class="waves-effect active ng-star-inserted"><a href="javascript:;">1</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">2</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">3</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">4</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">5</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">6</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">7</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">8</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">9</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">10</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">11</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">12</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">13</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">14</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">15</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">16</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">17</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">18</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">19</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">20</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">21</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">22</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">23</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">24</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">25</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">26</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">27</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">28</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">29</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">30</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">31</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">32</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">33</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">34</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">35</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">36</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">37</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">38</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">39</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">40</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">41</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">42</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">43</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">44</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">45</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">46</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">47</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">48</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">49</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">50</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">51</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">52</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">53</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">54</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">55</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">56</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">57</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">58</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">59</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">60</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">61</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">62</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">63</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">64</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">65</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">66</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">67</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">68</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">69</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">70</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">71</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">72</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">73</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">74</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">75</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">76</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">77</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">78</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">79</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">80</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">81</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">82</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">83</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">84</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">85</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">86</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">87</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">88</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">89</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">90</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">91</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">92</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">93</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">94</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">95</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">96</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">97</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">98</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">99</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">100</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">101</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">102</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">103</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">104</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">105</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">106</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">107</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">108</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">109</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">110</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">111</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">112</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">113</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">114</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">115</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">116</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">117</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">118</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">119</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">120</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">121</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">122</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">123</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">124</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">125</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">126</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">127</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">128</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">129</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">130</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">131</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">132</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">133</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">134</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">135</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">136</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">137</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">138</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">139</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">140</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">141</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">142</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">143</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">144</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">145</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">146</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">147</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">148</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">149</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">150</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">151</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">152</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">153</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">154</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">155</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">156</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">157</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">158</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">159</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">160</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">161</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">162</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">163</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">164</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">165</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">166</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">167</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">168</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">169</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">170</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">171</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">172</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">173</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">174</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">175</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">176</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">177</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">178</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">179</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">180</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">181</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">182</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">183</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">184</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">185</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">186</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">187</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">188</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">189</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">190</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">191</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">192</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">193</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">194</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">195</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">196</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">197</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">198</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">199</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">200</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">201</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">202</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">203</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">204</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">205</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">206</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">207</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">208</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">209</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">210</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">211</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">212</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">213</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">214</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">215</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">216</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">217</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">218</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">219</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">220</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">221</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">222</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">223</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">224</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">225</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">226</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">227</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">228</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">229</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">230</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">231</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">232</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">233</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">234</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">235</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">236</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">237</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">238</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">239</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">240</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">241</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">242</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">243</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">244</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">245</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">246</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">247</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">248</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">249</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">250</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">251</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">252</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">253</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">254</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">255</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">256</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">257</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">258</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">259</a></li>
                                 <li class="waves-effect ng-star-inserted"><a href="javascript:;">260</a></li>
                                 <!---->
                                 <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
                                 <li class="ng-star-inserted"><a href="javascript:;"><i class="fa fa-angle-double-right"></i></a></li>
                                 <!---->
                              </ul>
                              <!---->
                           </paginator>
                        </div>
                     </div>
                     <!----><!----><!---->
                  </div>
               </casino-pro-history>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>