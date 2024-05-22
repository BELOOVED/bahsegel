<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <limit-settings class="ng-star-inserted">
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Bahis Limitlendirme</a>
            </div>
         </div>
         <div class="modul-accordion-account">
            <div class="modul-content">
               <!---->
               <ul class="account tabs ng-star-inserted">
                  <li class="tab"><a href="javascript:;" class="active">Genel Limitler</a></li>
                  <li class="tab ng-star-inserted"><a href="javascript:;"> Spor Bahis Limitleri </a></li>
                  <!---->
                  <li class="tab ng-star-inserted"><a href="javascript:;">Casino Limitleri</a></li>
                  <!---->
               </ul>
               <!---->
               <div class="col s12 tab-content ng-star-inserted" id="limitTab-0" hidden="">
                  <table class="limit-settings-table">
                     <thead>
                        <tr>
                           <th>Limit Türü</th>
                           <th>Miktar</th>
                           <th>Yönet</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="ng-star-inserted">
                           <td>Bahis Limiti</td>
                           <td class="limit-settings-item">
                              <div class="currency-symbol ng-star-inserted">
                                 Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <tr class="ng-star-inserted">
                           <td>Kayıp Limiti</td>
                           <td class="limit-settings-item">
                              <div class="currency-symbol ng-star-inserted">
                                 Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <tr class="ng-star-inserted">
                           <td>Bahis süresi limiti(dk.) (Girilen süre boyunca bahis alınamaz)</td>
                           <td class="limit-settings-item">
                              <!----><!----><!---->
                              <div class="currency-symbol ng-star-inserted">
                                 <!---->  Dakika(lar) <!----><!----><!----><!---->
                              </div>
                              <!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <tr class="ng-star-inserted">
                           <td>Günlük Bahis Süresi Limiti(dak.) - Girilen süre boyunca günlük bahis alımına izin verilir</td>
                           <td class="limit-settings-item">
                              <!----><!----><!---->
                              <div class="currency-symbol ng-star-inserted">
                                 <!---->  Dakika(lar) <!----><!----><!----><!---->
                              </div>
                              <!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <!---->
                     </tbody>
                  </table>
               </div>
               <!---->
               <div class="col s12 tab-content ng-star-inserted" id="limitTab-1" hidden="">
                  <table class="limit-settings-table">
                     <thead>
                        <tr>
                           <th>Limit Türü</th>
                           <th>Miktar</th>
                           <th>Yönet</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="ng-star-inserted">
                           <td>Casino Bahis Limiti</td>
                           <td class="limit-settings-item">
                              <div class="currency-symbol ng-star-inserted">
                                 Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <tr class="ng-star-inserted">
                           <td>Casino Kaybetme Limiti</td>
                           <td class="limit-settings-item">
                              <div class="currency-symbol ng-star-inserted">
                                 Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <tr class="ng-star-inserted">
                           <td>Oturum süresi limiti(dk.) (Herhangi bir işlem yapılmadığı durumda, girilen süre bitiminde oturum kapatılır)</td>
                           <td class="limit-settings-item">
                              <!----><!----><!---->
                              <div class="currency-symbol ng-star-inserted">
                                 <!---->  Dakika(lar) <!----><!----><!----><!---->
                              </div>
                              <!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <!---->
                     </tbody>
                  </table>
               </div>
               <!---->
               <div class="col s12 tab-content active ng-star-inserted" id="limitTab-2">
                  <table class="limit-settings-table">
                     <thead>
                        <tr>
                           <th>Limit Türü</th>
                           <th>Miktar</th>
                           <th>Yönet</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="ng-star-inserted">
                           <td>Para Yatırma Limiti</td>
                           <td class="limit-settings-item">
                              <div class="currency-symbol ng-star-inserted">
                                 Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!---->
                              <div class="currency-symbol ng-star-inserted">
                                 Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!----><!---->
                           </td>
                        </tr>
                        <tr class="ng-star-inserted">
                           <td>Kendini Engelle</td>
                           <td class="limit-settings-item">
                              <!----><!----><!---->
                              <div class="currency-symbol ng-star-inserted">
                                 <!----><!----><!----><!----><!---->
                              </div>
                              <!----><!----><!----><!----><!---->
                           </td>
                           <td>
                              <a class="set-btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></a><!----><a class="limit-reset-btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></a><!---->
                           </td>
                        </tr>
                        <!---->
                     </tbody>
                  </table>
               </div>
               <!----><!---->
            </div>
         </div>
      </limit-settings>
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
               <limit-settings class="ng-star-inserted">
                  <div class="bet-lmt-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-ban"></i><span class="inf-title">Bahis Limitlendirme</span></div>
                        </div>
                        <!---->
                        <div class="mdl-cntnt">
                           <div class="row">
                              <div class="col s12">
                                 <ul materialize="tabs" class="tabs">
                                    <li class="tab col s4 ng-star-inserted active"><a href="javascript:;" class="active" style=""> Spor Bahis Limitleri </a></li>
                                    <li class="tab col s4 ng-star-inserted"><a href="javascript:;" style="" class=""> Casino Limitleri </a></li>
                                    <li class="tab col s4 ng-star-inserted"><a href="javascript:;" style="" class=""> Genel Limitler </a></li>
                                    <!---->
                                    <li class="indicator" style="right: 606px; left: 0px;"></li>
                                 </ul>
                              </div>
                              <div class="col s12 tab-content ng-star-inserted active" id="limitTab-0">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Bahis Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Kayıp Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Bahis süresi limiti(dk.) (Girilen süre boyunca bahis alınamaz)</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Günlük Bahis Süresi Limiti(dak.) - Girilen süre boyunca günlük bahis alımına izin verilir</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!---->
                              <div class="col s12 tab-content ng-star-inserted" id="limitTab-1">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Casino Bahis Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Casino Kaybetme Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Oturum süresi limiti(dk.) (Herhangi bir işlem yapılmadığı durumda, girilen süre bitiminde oturum kapatılır)</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!---->
                              <div class="col s12 tab-content ng-star-inserted" id="limitTab-2">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Para Yatırma Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Kendini Engelle</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!----><!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><!----><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!----><!---->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="limitConfigModal" materialize="modal" class="modal modal-md open dshbrd-modal" style="z-index: 1125;">
                     <!---->
                  </div>
               </limit-settings>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>