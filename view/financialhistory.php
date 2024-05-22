<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <financial-transactions class="ng-star-inserted">
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Finans Geçmişim</a>
            </div>
            <div class="filter-toggle bet-history-filter"><a href="javascript:;" class="bet-history-dates-btn"><i class="fa fa-calendar"></i> Tarih </a></div>
         </div>
         <app-static-inner-content contentcode="m_financial-transactions-top">
            <!---->
         </app-static-inner-content>
         <!---->
         <app-notifications>
            <div>
               <!---->
            </div>
         </app-notifications>
         <div class="modul-accordion financial-transactions">
            <div class="modul-header">
               <!---->
               <span class="header-text ng-star-inserted">
                  Tarih Aralığı:: <span class="ng-star-inserted">31/01/2024 - 31/01/2024</span><!---->
               </span>
               <!---->
            </div>
            <div class="modul-content">
               <div class="list-filter flex-container">
                  <button class="btn flex-item filter-btn bg active ng-star-inserted"><span>Hepsi</span></button><!----><button class="btn flex-item filter-btn bg ng-star-inserted"><span>Para Yatırma</span></button><!----><button class="btn flex-item filter-btn bg ng-star-inserted"><span>Para Çekme</span></button><!----><button class="btn flex-item filter-btn bg ng-star-inserted"><span>Transfer</span></button><!----><button class="btn flex-item filter-btn bg ng-star-inserted"><span>Spor</span></button><!----><button class="btn flex-item filter-btn bg ng-star-inserted"><span>Jackpot</span></button><!----><!---->
               </div>
               <table class="bet-history-table centered ng-star-inserted">
                  <thead>
                     <tr>
                        <th>İşlem Türü</th>
                        <th>Miktar</th>
                        <th>Statü</th>
                        <th>Tarih/Saat</th>
                        <th>Detay</th>
                        <!---->
                     </tr>
                  </thead>
                  <tbody>
                     <!---->
                  </tbody>
               </table>
               <paginator class="ng-star-inserted">
                  <!---->
               </paginator>
               <!----><!---->
               <div id="transactionHistoryModal" materialize="modal" class="modal" style="z-index: 1045;">
                  <!---->
               </div>
               <!---->
               <div class="card-panel message-box info ng-star-inserted">
                  <i class="material-icons left">info</i>
                  <div>Veri bulunamadı</div>
               </div>
               <!----><!---->
            </div>
         </div>
      </financial-transactions>
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" width="100" height="33" class="scashmoney-bank-transfer-deposit"><img hidden="" src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" width="100" height="33" hidden="" class="hide"><img src="//v3.pronetstatic.com/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" width="100" height="33" hidden="" class="hide"><img src="//v3.pronetstatic.com/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" width="100" height="33" class="scashmoney-bank-transfer-deposit"><img hidden="" src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" width="100" height="33" hidden="" class="hide"><img src="//v3.pronetstatic.com/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" width="100" height="33" hidden="" class="hide"><img src="//v3.pronetstatic.com/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
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
                                       <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" width="100" height="33" class="hide" hidden=""><img src="//v3.pronetstatic.com/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
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
               <financial-transactions class="ng-star-inserted">
                  <div class="trnsctn-hstry-cntnt">
                     <app-static-inner-content contentcode="financial-transactions-top">
                        <!---->
                     </app-static-inner-content>
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-history"></i><span class="inf-title">Tamamlanmış Finansal İşlemler</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <form novalidate="" class="ng-untouched ng-valid ng-star-inserted ng-dirty">
                              <div class="row">
                                 <div class="col s12">
                                    <h5 class="frm-hdr">Lütfen tarih aralığı seçin</h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="date-picker-field col s2">
                                    <label class="field-label active">(GG:AA:YYYY)</label>
                                    <label for="transactionHistoryStartDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="transactionHistoryStartDatePicker_root" tabindex="0" aria-hidden="true">
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
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="transactionHistoryStartDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="transactionHistoryStartDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="transactionHistoryStartDatePicker_table" role="grid" aria-controls="transactionHistoryStartDatePicker" aria-readonly="true">
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
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="transactionHistoryStartDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="transactionHistoryStartDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="transactionHistoryStartDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="transactionHistoryStartDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="transactionHistoryStartDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="1" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="date-picker-field col s2">
                                    <label class="field-label active">(GG:AA:YYYY)</label>
                                    <label for="transactionHistoryEndDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="transactionHistoryEndDatePicker_root" tabindex="0" aria-hidden="true">
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
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="transactionHistoryEndDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="transactionHistoryEndDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="transactionHistoryEndDatePicker_table" role="grid" aria-controls="transactionHistoryEndDatePicker" aria-readonly="true">
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
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="transactionHistoryEndDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="transactionHistoryEndDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="transactionHistoryEndDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="transactionHistoryEndDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="transactionHistoryEndDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="2" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="select-field col s3">
                                    <label class="field-label">İşlem Türü</label>
                                    <select class="browser-default ng-untouched ng-pristine ng-valid">
                                       <option value="null">Hepsi</option>
                                       <option value="19" class="ng-star-inserted">Akbank - Deposit</option>
                                       <option value="38" class="ng-star-inserted">Akbank - Withdraw</option>
                                       <option value="33" class="ng-star-inserted">Akbank Cep Cüzdan</option>
                                       <option value="137" class="ng-star-inserted">Albaraka Türk - Withdraw</option>
                                       <option value="921" class="ng-star-inserted">Anında Papara API Deposit</option>
                                       <option value="78" class="ng-star-inserted">BKM Express - Cepbank</option>
                                       <option value="22" class="ng-star-inserted">Denizbank - Deposit</option>
                                       <option value="41" class="ng-star-inserted">Denizbank - Withdraw</option>
                                       <option value="35" class="ng-star-inserted">Denizbank Cepbank</option>
                                       <option value="412" class="ng-star-inserted">Envoy Hızlı Havale Deposit</option>
                                       <option value="413" class="ng-star-inserted">Envoy Hızlı Havale Withdraw</option>
                                       <option value="521" class="ng-star-inserted">Envoy Hızlı QR Yatırım</option>
                                       <option value="1242" class="ng-star-inserted">FacePay Deposit</option>
                                       <option value="142" class="ng-star-inserted">Fibabank - Deposit</option>
                                       <option value="29" class="ng-star-inserted">Finansbank - Deposit</option>
                                       <option value="48" class="ng-star-inserted">Finansbank - Withdraw</option>
                                       <option value="116" class="ng-star-inserted">Finansbank Cepbank</option>
                                       <option value="18" class="ng-star-inserted">Garanti Bankasi - Deposit</option>
                                       <option value="37" class="ng-star-inserted">Garanti Bankasi - Withdraw</option>
                                       <option value="31" class="ng-star-inserted">Garanti Cepbank</option>
                                       <option value="25" class="ng-star-inserted">Halkbank - Deposit</option>
                                       <option value="44" class="ng-star-inserted">Halkbank - Withdraw</option>
                                       <option value="24" class="ng-star-inserted">ING Bank - Deposit</option>
                                       <option value="43" class="ng-star-inserted">ING Bank - Withdraw</option>
                                       <option value="36" class="ng-star-inserted">ING Cep Bank</option>
                                       <option value="20" class="ng-star-inserted">Is Bankasi - Deposit</option>
                                       <option value="39" class="ng-star-inserted">Is Bankasi - Withdraw</option>
                                       <option value="32" class="ng-star-inserted">Is Bankasi CepMatik</option>
                                       <option value="102" class="ng-star-inserted">Kuveyt Türk - Deposit</option>
                                       <option value="106" class="ng-star-inserted">Kuveyt Türk - Withdraw</option>
                                       <option value="147" class="ng-star-inserted">Kuveytturk Cepbank</option>
                                       <option value="74" class="ng-star-inserted">PTT - Withdraw</option>
                                       <option value="72" class="ng-star-inserted">PTT Cepbank</option>
                                       <option value="264" class="ng-star-inserted">Papara Deposit Form</option>
                                       <option value="270" class="ng-star-inserted">Papara Withdraw Form</option>
                                       <option value="836" class="ng-star-inserted">Payfix Withdraw Form</option>
                                       <option value="1043" class="ng-star-inserted">Payhera API Deposit</option>
                                       <option value="1309" class="ng-star-inserted">Payhera Papara API ile Yatırım</option>
                                       <option value="2109" class="ng-star-inserted">Peakpay ile Yatırım</option>
                                       <option value="1423" class="ng-star-inserted">Safirhavale Deposit</option>
                                       <option value="1572" class="ng-star-inserted">ScashMoney Bank Transfer Deposit</option>
                                       <option value="1945" class="ng-star-inserted">ScashMoney Fixturka Deposit</option>
                                       <option value="1576" class="ng-star-inserted">ScashMoney Papara Deposit</option>
                                       <option value="49" class="ng-star-inserted">Sekerbank - Withdraw</option>
                                       <option value="81" class="ng-star-inserted">Sekerbank Cepbank</option>
                                       <option value="1871" class="ng-star-inserted">Seripopy Deposit</option>
                                       <option value="1872" class="ng-star-inserted">Seripopy Withdraw</option>
                                       <option value="1956" class="ng-star-inserted">Sistem Nakit Bank Deposit</option>
                                       <option value="1958" class="ng-star-inserted">Sistem Nakit Papara Deposit</option>
                                       <option value="1219" class="ng-star-inserted">SoftPay Deposit</option>
                                       <option value="1869" class="ng-star-inserted">Starpay Papara Deposit</option>
                                       <option value="1870" class="ng-star-inserted">Starpay Papara Withdraw</option>
                                       <option value="26" class="ng-star-inserted">TEB - Deposit</option>
                                       <option value="45" class="ng-star-inserted">TEB - Withdraw</option>
                                       <option value="1838" class="ng-star-inserted">THEHavale API Deposit</option>
                                       <option value="1764" class="ng-star-inserted">Tiktak Havale Deposit</option>
                                       <option value="4" class="ng-star-inserted">Transfer To Klas Poker</option>
                                       <option value="62" class="ng-star-inserted">Transfer from Casino</option>
                                       <option value="5" class="ng-star-inserted">Transfer from Klas Poker</option>
                                       <option value="61" class="ng-star-inserted">Transfer to Casino</option>
                                       <option value="1651" class="ng-star-inserted">Turbo Havale Deposit</option>
                                       <option value="104" class="ng-star-inserted">Türkiye Finans - Deposit</option>
                                       <option value="27" class="ng-star-inserted">Vakifbank - Deposit</option>
                                       <option value="46" class="ng-star-inserted">Vakifbank - Withdraw</option>
                                       <option value="138" class="ng-star-inserted">Vakıfbank Cepbank</option>
                                       <option value="23" class="ng-star-inserted">Yapi Kredi - Deposit</option>
                                       <option value="42" class="ng-star-inserted">Yapi Kredi - Withdraw</option>
                                       <option value="34" class="ng-star-inserted">Yapi Kredi Cepbank</option>
                                       <option value="715" class="ng-star-inserted">YouPayCoin Withdraw</option>
                                       <option value="672" class="ng-star-inserted">Youpaycoin Deposit</option>
                                       <option value="21" class="ng-star-inserted">Ziraat Bankasi - Deposit</option>
                                       <option value="40" class="ng-star-inserted">Ziraat Bankasi - Withdraw</option>
                                       <option value="70" class="ng-star-inserted">v2 Bank Deposit</option>
                                       <!---->
                                    </select>
                                 </div>
                                 <div class="select-field col s3">
                                    <label class="field-label">Statü</label>
                                    <select class="browser-default ng-untouched ng-pristine ng-valid">
                                       <option value="null" class="ng-star-inserted">Hepsi</option>
                                       <option value="R" class="ng-star-inserted">İptal Edilen</option>
                                       <option value="C" class="ng-star-inserted">Tamamlandı</option>
                                       <option value="P" class="ng-star-inserted">Bekliyor</option>
                                       <option value="Z" class="ng-star-inserted">Rezerve</option>
                                       <option value="V" class="ng-star-inserted">İşleme Alındı</option>
                                       <option value="N" class="ng-star-inserted">Yeni</option>
                                       <!---->
                                    </select>
                                 </div>
                                 <div class="input-field col s2"><button class="btn w100">Sorgula</button></div>
                              </div>
                              <!---->
                           </form>
                           <!---->
                           <div class="type-btn-grp">
                              <button class="btn bg btn-fnc active ng-star-inserted"><span>Hepsi</span></button><button class="btn bg btn-fnc ng-star-inserted"><span>Para Yatırma</span></button><button class="btn bg btn-fnc ng-star-inserted"><span>Para Çekme</span></button><button class="btn bg btn-fnc ng-star-inserted"><span>Transfer</span></button><button class="btn bg btn-fnc ng-star-inserted"><span>Spor</span></button><button class="btn bg btn-fnc ng-star-inserted"><span>Jackpot</span></button><!---->
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
                           <div class="inf-hdr"><i class="fa fa-bars"></i><span class="inf-title">Tarih aralığı: 28/01/2024 - 28/01/2024</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="scrllble-tbl">
                              <table class="highlight dshbrd-tbl bet-history-table">
                                 <thead>
                                    <tr>
                                       <th><span name="transactionDate">Tarih/Saat</span></th>
                                       <th><span name="transactionTypeName">İşlem Türü</span></th>
                                       <th><span name="transactionAmount">Miktar</span></th>
                                       <th><span name="customerNote">Müşteri Notu</span></th>
                                       <th><span name="status">Statü</span></th>
                                       <th><span name="detail">Detay</span></th>
                                       <!---->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <!---->
                                 </tbody>
                              </table>
                           </div>
                           <paginator>
                              <ul class="pagination ng-star-inserted">
                                 <li class="disabled ng-star-inserted"><a href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
                                 <!---->
                                 <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                                 <!---->
                                 <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
                                 <li class="ng-star-inserted"><a href="javascript:;"><i class="fa fa-angle-double-right"></i></a></li>
                                 <!---->
                              </ul>
                              <!---->
                           </paginator>
                        </div>
                     </div>
                     <!----><!---->
                     <div class="not-found-box ng-star-inserted"><img src="../../../../../../assets/images/not-found-images.png" alt=""><br> Veri bulunamadı </div>
                     <!---->
                     <div id="transactionHistoryModal123" materialize="modal" class="modal modal-sm dshbrd-tckt-modal" style="z-index: 1105;">
                        <!---->
                     </div>
                  </div>
               </financial-transactions>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>