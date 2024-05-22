<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <router-outlet></router-outlet>
      <transfer class="ng-star-inserted">
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Transfer</a>
            </div>
         </div>
         <!---->
         <div class="modul-accordion-account ng-star-inserted">
            <div class="modul-content">
               <div class="account-transfer">
                  <div class="title"> Bu Hesaptan </div>
                  <div class="account-list">
                     <a class="btn ng-star-inserted">
                        <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name"> Spor </span><span class="money ng-star-inserted">0.35 ₺</span><!---->
                     </a>
                     <!----><!----><!---->
                     <a class="btn ng-star-inserted">
                        <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name"> Klas Poker </span><span class="money ng-star-inserted">0.00 ₺</span><!---->
                     </a>
                     <!----><!----><!----><!----><!----><!---->
                  </div>
                  <div class="title"> Bu Hesaba </div>
                  <div class="account-list">
                     <a class="btn ng-star-inserted">
                        <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name"> Spor </span><span class="money ng-star-inserted">0.35 ₺</span><!---->
                     </a>
                     <!----><!----><!---->
                     <a class="btn ng-star-inserted">
                        <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name"> Klas Poker </span><span class="money ng-star-inserted">0.00 ₺</span><!---->
                     </a>
                     <!----><!----><!----><!----><!----><!---->
                  </div>
                  <div class="payment-wrapper">
                     <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                        <div class="input-field ng-star-inserted">
                           <input debounce="700" currency-mask="" type="text" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Tutar Gir"><i class="fa fa-database cashout-icon pg-icons"></i><!---->
                        </div>
                        <!----><button class="btn transfer-btn" disabled=""> Transfer </button><button type="button" class="btn reset-btn"> Sıfırla </button>
                     </form>
                  </div>
               </div>
               <app-notifications>
                  <div>
                     <!---->
                  </div>
               </app-notifications>
            </div>
         </div>
         <exchange-calculator class="ng-star-inserted">
            <div class="modul-accordion">
               <div class="modul-header"><span class="header-text"> Döviz Hesaplama </span></div>
               <div class="modul-content">
                  <div class="exchange">
                     <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                        <div class="select-field">
                           <span class="field-label required">Para Birimi</span>
                           <select select-modal="" name="from" id="from" required="" class="browser-default ng-untouched ng-pristine ng-invalid">
                              <option disabled="" selected="" value="null">Seçiniz</option>
                              <option value="72" class="ng-star-inserted">Lempira</option>
                              <option value="76" class="ng-star-inserted">Indian Rupee</option>
                              <option value="77" class="ng-star-inserted">Rupiah</option>
                              <option value="84" class="ng-star-inserted">Won</option>
                              <option value="85" class="ng-star-inserted">Som</option>
                              <option value="88" class="ng-star-inserted">Lebanese Pound</option>
                              <option value="90" class="ng-star-inserted">Swiss Franc</option>
                              <option value="92" class="ng-star-inserted">Denar</option>
                              <option value="93" class="ng-star-inserted">Malaysian Ringgit</option>
                              <option value="95" class="ng-star-inserted">Mexican Peso</option>
                              <option value="101" class="ng-star-inserted">New Zealand Dollar</option>
                              <option value="105" class="ng-star-inserted">Norwegian Krone</option>
                              <option value="110" class="ng-star-inserted">Sol</option>
                              <option value="111" class="ng-star-inserted">Philippine Piso</option>
                              <option value="118" class="ng-star-inserted">Singapore Dollar</option>
                              <option value="121" class="ng-star-inserted">Rand</option>
                              <option value="123" class="ng-star-inserted">Swedish Krona</option>
                              <option value="124" class="ng-star-inserted">Naira</option>
                              <option value="125" class="ng-star-inserted">Grivna</option>
                              <option value="127" class="ng-star-inserted">Baht</option>
                              <option value="1" class="ng-star-inserted">Turkish Lira</option>
                              <option value="2" class="ng-star-inserted">Great Britain Pound</option>
                              <option value="3" class="ng-star-inserted">United States Dollar</option>
                              <option value="4" class="ng-star-inserted">Euro</option>
                              <option value="132" class="ng-star-inserted">Peso Uruguayo</option>
                              <option value="5" class="ng-star-inserted">Ghana Cedi</option>
                              <option value="133" class="ng-star-inserted">Uzbekistan Sum</option>
                              <option value="6" class="ng-star-inserted">Poland</option>
                              <option value="7" class="ng-star-inserted">Ugandan Shilling</option>
                              <option value="391" class="ng-star-inserted">Sierra Leonean Leone</option>
                              <option value="135" class="ng-star-inserted">Dong</option>
                              <option value="8" class="ng-star-inserted">Leke</option>
                              <option value="9" class="ng-star-inserted">Ruble</option>
                              <option value="10" class="ng-star-inserted">Tenge</option>
                              <option value="11" class="ng-star-inserted">Manat</option>
                              <option value="12" class="ng-star-inserted">Real Brasileiro</option>
                              <option value="142" class="ng-star-inserted">CFA Franc BCEAO</option>
                              <option value="15" class="ng-star-inserted">Ethiopian Birr</option>
                              <option value="147" class="ng-star-inserted">Mozambican Metical</option>
                              <option value="23" class="ng-star-inserted">Kenyan Shilling</option>
                              <option value="151" class="ng-star-inserted">Tanzanian Shilling</option>
                              <option value="153" class="ng-star-inserted">Tunisian Dinar</option>
                              <option value="160" class="ng-star-inserted">Moroccan Dirham</option>
                              <option value="161" class="ng-star-inserted">Zambian Kwacha</option>
                              <option value="37" class="ng-star-inserted">Argentine Peso</option>
                              <option value="39" class="ng-star-inserted">Australian Dollar</option>
                              <option value="45" class="ng-star-inserted">Boliviano</option>
                              <option value="177" class="ng-star-inserted">CFA Franc BEAC</option>
                              <option value="50" class="ng-star-inserted">Riel</option>
                              <option value="178" class="ng-star-inserted">Angolan Kwanza</option>
                              <option value="51" class="ng-star-inserted">Canadian Dollar</option>
                              <option value="53" class="ng-star-inserted">Chilean Peso</option>
                              <option value="54" class="ng-star-inserted">Yuan Renminbi</option>
                              <option value="184" class="ng-star-inserted">Leone</option>
                              <!---->
                           </select>
                        </div>
                        <div class="select-field">
                           <span class="field-label required">Para Birimi</span>
                           <select name="to" id="to" select-modal="" required="" class="browser-default ng-untouched ng-pristine ng-invalid">
                              <option disabled="" selected="" value="null">Seçiniz</option>
                              <option value="72" class="ng-star-inserted">Lempira</option>
                              <option value="76" class="ng-star-inserted">Indian Rupee</option>
                              <option value="77" class="ng-star-inserted">Rupiah</option>
                              <option value="84" class="ng-star-inserted">Won</option>
                              <option value="85" class="ng-star-inserted">Som</option>
                              <option value="88" class="ng-star-inserted">Lebanese Pound</option>
                              <option value="90" class="ng-star-inserted">Swiss Franc</option>
                              <option value="92" class="ng-star-inserted">Denar</option>
                              <option value="93" class="ng-star-inserted">Malaysian Ringgit</option>
                              <option value="95" class="ng-star-inserted">Mexican Peso</option>
                              <option value="101" class="ng-star-inserted">New Zealand Dollar</option>
                              <option value="105" class="ng-star-inserted">Norwegian Krone</option>
                              <option value="110" class="ng-star-inserted">Sol</option>
                              <option value="111" class="ng-star-inserted">Philippine Piso</option>
                              <option value="118" class="ng-star-inserted">Singapore Dollar</option>
                              <option value="121" class="ng-star-inserted">Rand</option>
                              <option value="123" class="ng-star-inserted">Swedish Krona</option>
                              <option value="124" class="ng-star-inserted">Naira</option>
                              <option value="125" class="ng-star-inserted">Grivna</option>
                              <option value="127" class="ng-star-inserted">Baht</option>
                              <option value="1" class="ng-star-inserted">Turkish Lira</option>
                              <option value="2" class="ng-star-inserted">Great Britain Pound</option>
                              <option value="3" class="ng-star-inserted">United States Dollar</option>
                              <option value="4" class="ng-star-inserted">Euro</option>
                              <option value="132" class="ng-star-inserted">Peso Uruguayo</option>
                              <option value="5" class="ng-star-inserted">Ghana Cedi</option>
                              <option value="133" class="ng-star-inserted">Uzbekistan Sum</option>
                              <option value="6" class="ng-star-inserted">Poland</option>
                              <option value="7" class="ng-star-inserted">Ugandan Shilling</option>
                              <option value="391" class="ng-star-inserted">Sierra Leonean Leone</option>
                              <option value="135" class="ng-star-inserted">Dong</option>
                              <option value="8" class="ng-star-inserted">Leke</option>
                              <option value="9" class="ng-star-inserted">Ruble</option>
                              <option value="10" class="ng-star-inserted">Tenge</option>
                              <option value="11" class="ng-star-inserted">Manat</option>
                              <option value="12" class="ng-star-inserted">Real Brasileiro</option>
                              <option value="142" class="ng-star-inserted">CFA Franc BCEAO</option>
                              <option value="15" class="ng-star-inserted">Ethiopian Birr</option>
                              <option value="147" class="ng-star-inserted">Mozambican Metical</option>
                              <option value="23" class="ng-star-inserted">Kenyan Shilling</option>
                              <option value="151" class="ng-star-inserted">Tanzanian Shilling</option>
                              <option value="153" class="ng-star-inserted">Tunisian Dinar</option>
                              <option value="160" class="ng-star-inserted">Moroccan Dirham</option>
                              <option value="161" class="ng-star-inserted">Zambian Kwacha</option>
                              <option value="37" class="ng-star-inserted">Argentine Peso</option>
                              <option value="39" class="ng-star-inserted">Australian Dollar</option>
                              <option value="45" class="ng-star-inserted">Boliviano</option>
                              <option value="177" class="ng-star-inserted">CFA Franc BEAC</option>
                              <option value="50" class="ng-star-inserted">Riel</option>
                              <option value="178" class="ng-star-inserted">Angolan Kwanza</option>
                              <option value="51" class="ng-star-inserted">Canadian Dollar</option>
                              <option value="53" class="ng-star-inserted">Chilean Peso</option>
                              <option value="54" class="ng-star-inserted">Yuan Renminbi</option>
                              <option value="184" class="ng-star-inserted">Leone</option>
                              <!---->
                           </select>
                        </div>
                        <div class="amount input-field"><span class="field-label required">Miktar</span><input type="number" id="amount" name="amount" required="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Miktar"></div>
                        <button class="btn calculate w100" disabled="">Hesapla</button>
                     </form>
                  </div>
                  <!---->
               </div>
            </div>
         </exchange-calculator>
         <!----><!---->
      </transfer>
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
               <app-transfer class="ng-star-inserted">
                  <!---->
                  <div class="trnsfr-cntnt ng-star-inserted">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title">Hesaplar Arası Transfer</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="trnsfr-cntnt">
                              <div class="accnt-lst-wrp">
                                 <div class="transfer-from">
                                    <div class="title"> Bu Hesaptan </div>
                                    <div class="account-list">
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Spor</span><span class="money ng-star-inserted">0.50 ₺</span><!---->
                                       </a>
                                       <!----><!----><!---->
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Klas Poker</span><span class="money ng-star-inserted">0.00 ₺</span><!---->
                                       </a>
                                       <!----><!----><!----><!----><!----><!---->
                                    </div>
                                 </div>
                                 <div class="transfer-from">
                                    <div class="title"> Bu Hesaba </div>
                                    <div class="account-list">
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Spor</span><span class="money ng-star-inserted">0.50 ₺</span><!---->
                                       </a>
                                       <!----><!----><!---->
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Klas Poker</span><span class="money ng-star-inserted">0.00 ₺</span><!---->
                                       </a>
                                       <!----><!----><!----><!----><!----><!---->
                                    </div>
                                 </div>
                                 <div class="transfer-from">
                                    <div class="payment-wrapper">
                                       <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                          <div class="input-field ng-star-inserted">
                                             <input currency-mask="" debounce="700" type="text" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Tutar Gir"><i class="fa fa-database cashout-icon pg-icons" title="Bahis Bozdur"></i><!---->
                                          </div>
                                          <!---->
                                          <div class="input-field w100 inline-block"><button class="btn transfer-btn right" type="button" onclick="usernotdefined()"> Transfer </button><button type="button" class="btn reset-btn right"> Sıfırla </button></div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <app-notifications>
                              <div>
                                 <!---->
                              </div>
                           </app-notifications>
                        </div>
                     </div>
                     <exchange-calculator>
                        <div class="dshbrd-mdl">
                           <div class="mdl-hdr">
                              <div class="inf-hdr"><i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title">Döviz Hesaplama</span></div>
                           </div>
                           <div class="mdl-cntnt">
                              <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                 <div class="row">
                                    <div class="col s3">
                                       <div class="select-field">
                                          <select name="from" id="from" materialize="material_select" class="browser-default ng-untouched ng-pristine ng-valid">
                                             <option disabled="" value="null">Para Birimi</option>
                                             <option value="72" class="ng-star-inserted">Lempira</option>
                                             <option value="76" class="ng-star-inserted">Indian Rupee</option>
                                             <option value="77" class="ng-star-inserted">Rupiah</option>
                                             <option value="84" class="ng-star-inserted">Won</option>
                                             <option value="85" class="ng-star-inserted">Som</option>
                                             <option value="88" class="ng-star-inserted">Lebanese Pound</option>
                                             <option value="90" class="ng-star-inserted">Swiss Franc</option>
                                             <option value="92" class="ng-star-inserted">Denar</option>
                                             <option value="93" class="ng-star-inserted">Malaysian Ringgit</option>
                                             <option value="95" class="ng-star-inserted">Mexican Peso</option>
                                             <option value="101" class="ng-star-inserted">New Zealand Dollar</option>
                                             <option value="105" class="ng-star-inserted">Norwegian Krone</option>
                                             <option value="110" class="ng-star-inserted">Sol</option>
                                             <option value="111" class="ng-star-inserted">Philippine Piso</option>
                                             <option value="118" class="ng-star-inserted">Singapore Dollar</option>
                                             <option value="121" class="ng-star-inserted">Rand</option>
                                             <option value="123" class="ng-star-inserted">Swedish Krona</option>
                                             <option value="124" class="ng-star-inserted">Naira</option>
                                             <option value="125" class="ng-star-inserted">Grivna</option>
                                             <option value="127" class="ng-star-inserted">Baht</option>
                                             <option value="1" class="ng-star-inserted">Turkish Lira</option>
                                             <option value="2" class="ng-star-inserted">Great Britain Pound</option>
                                             <option value="3" class="ng-star-inserted">United States Dollar</option>
                                             <option value="4" class="ng-star-inserted">Euro</option>
                                             <option value="132" class="ng-star-inserted">Peso Uruguayo</option>
                                             <option value="5" class="ng-star-inserted">Ghana Cedi</option>
                                             <option value="133" class="ng-star-inserted">Uzbekistan Sum</option>
                                             <option value="6" class="ng-star-inserted">Poland</option>
                                             <option value="7" class="ng-star-inserted">Ugandan Shilling</option>
                                             <option value="391" class="ng-star-inserted">Sierra Leonean Leone</option>
                                             <option value="135" class="ng-star-inserted">Dong</option>
                                             <option value="8" class="ng-star-inserted">Leke</option>
                                             <option value="9" class="ng-star-inserted">Ruble</option>
                                             <option value="10" class="ng-star-inserted">Tenge</option>
                                             <option value="11" class="ng-star-inserted">Manat</option>
                                             <option value="12" class="ng-star-inserted">Real Brasileiro</option>
                                             <option value="142" class="ng-star-inserted">CFA Franc BCEAO</option>
                                             <option value="15" class="ng-star-inserted">Ethiopian Birr</option>
                                             <option value="147" class="ng-star-inserted">Mozambican Metical</option>
                                             <option value="23" class="ng-star-inserted">Kenyan Shilling</option>
                                             <option value="151" class="ng-star-inserted">Tanzanian Shilling</option>
                                             <option value="153" class="ng-star-inserted">Tunisian Dinar</option>
                                             <option value="160" class="ng-star-inserted">Moroccan Dirham</option>
                                             <option value="161" class="ng-star-inserted">Zambian Kwacha</option>
                                             <option value="37" class="ng-star-inserted">Argentine Peso</option>
                                             <option value="39" class="ng-star-inserted">Australian Dollar</option>
                                             <option value="45" class="ng-star-inserted">Boliviano</option>
                                             <option value="177" class="ng-star-inserted">CFA Franc BEAC</option>
                                             <option value="50" class="ng-star-inserted">Riel</option>
                                             <option value="178" class="ng-star-inserted">Angolan Kwanza</option>
                                             <option value="51" class="ng-star-inserted">Canadian Dollar</option>
                                             <option value="53" class="ng-star-inserted">Chilean Peso</option>
                                             <option value="54" class="ng-star-inserted">Yuan Renminbi</option>
                                             <option value="184" class="ng-star-inserted">Leone</option>
                                             <!---->
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col s3">
                                       <div class="select-field">
                                          <select name="to" id="to" materialize="material_select" class="browser-default ng-untouched ng-pristine ng-valid">
                                             <option disabled="" value="null">Para Birimi</option>
                                             <option value="72" class="ng-star-inserted">Lempira</option>
                                             <option value="76" class="ng-star-inserted">Indian Rupee</option>
                                             <option value="77" class="ng-star-inserted">Rupiah</option>
                                             <option value="84" class="ng-star-inserted">Won</option>
                                             <option value="85" class="ng-star-inserted">Som</option>
                                             <option value="88" class="ng-star-inserted">Lebanese Pound</option>
                                             <option value="90" class="ng-star-inserted">Swiss Franc</option>
                                             <option value="92" class="ng-star-inserted">Denar</option>
                                             <option value="93" class="ng-star-inserted">Malaysian Ringgit</option>
                                             <option value="95" class="ng-star-inserted">Mexican Peso</option>
                                             <option value="101" class="ng-star-inserted">New Zealand Dollar</option>
                                             <option value="105" class="ng-star-inserted">Norwegian Krone</option>
                                             <option value="110" class="ng-star-inserted">Sol</option>
                                             <option value="111" class="ng-star-inserted">Philippine Piso</option>
                                             <option value="118" class="ng-star-inserted">Singapore Dollar</option>
                                             <option value="121" class="ng-star-inserted">Rand</option>
                                             <option value="123" class="ng-star-inserted">Swedish Krona</option>
                                             <option value="124" class="ng-star-inserted">Naira</option>
                                             <option value="125" class="ng-star-inserted">Grivna</option>
                                             <option value="127" class="ng-star-inserted">Baht</option>
                                             <option value="1" class="ng-star-inserted">Turkish Lira</option>
                                             <option value="2" class="ng-star-inserted">Great Britain Pound</option>
                                             <option value="3" class="ng-star-inserted">United States Dollar</option>
                                             <option value="4" class="ng-star-inserted">Euro</option>
                                             <option value="132" class="ng-star-inserted">Peso Uruguayo</option>
                                             <option value="5" class="ng-star-inserted">Ghana Cedi</option>
                                             <option value="133" class="ng-star-inserted">Uzbekistan Sum</option>
                                             <option value="6" class="ng-star-inserted">Poland</option>
                                             <option value="7" class="ng-star-inserted">Ugandan Shilling</option>
                                             <option value="391" class="ng-star-inserted">Sierra Leonean Leone</option>
                                             <option value="135" class="ng-star-inserted">Dong</option>
                                             <option value="8" class="ng-star-inserted">Leke</option>
                                             <option value="9" class="ng-star-inserted">Ruble</option>
                                             <option value="10" class="ng-star-inserted">Tenge</option>
                                             <option value="11" class="ng-star-inserted">Manat</option>
                                             <option value="12" class="ng-star-inserted">Real Brasileiro</option>
                                             <option value="142" class="ng-star-inserted">CFA Franc BCEAO</option>
                                             <option value="15" class="ng-star-inserted">Ethiopian Birr</option>
                                             <option value="147" class="ng-star-inserted">Mozambican Metical</option>
                                             <option value="23" class="ng-star-inserted">Kenyan Shilling</option>
                                             <option value="151" class="ng-star-inserted">Tanzanian Shilling</option>
                                             <option value="153" class="ng-star-inserted">Tunisian Dinar</option>
                                             <option value="160" class="ng-star-inserted">Moroccan Dirham</option>
                                             <option value="161" class="ng-star-inserted">Zambian Kwacha</option>
                                             <option value="37" class="ng-star-inserted">Argentine Peso</option>
                                             <option value="39" class="ng-star-inserted">Australian Dollar</option>
                                             <option value="45" class="ng-star-inserted">Boliviano</option>
                                             <option value="177" class="ng-star-inserted">CFA Franc BEAC</option>
                                             <option value="50" class="ng-star-inserted">Riel</option>
                                             <option value="178" class="ng-star-inserted">Angolan Kwanza</option>
                                             <option value="51" class="ng-star-inserted">Canadian Dollar</option>
                                             <option value="53" class="ng-star-inserted">Chilean Peso</option>
                                             <option value="54" class="ng-star-inserted">Yuan Renminbi</option>
                                             <option value="184" class="ng-star-inserted">Leone</option>
                                             <!---->
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col s3">
                                       <div class="input-field"><input type="number" id="amount" name="amount" class="browser-default ng-untouched ng-pristine ng-valid" placeholder="Miktar"></div>
                                    </div>
                                    <div class="col s3">
                                       <div class="input-field"><button class="btn w100" disabled=""><i aria-hidden="true" class="fa fa-calculator"></i>Hesapla</button></div>
                                    </div>
                                 </div>
                              </form>
                              <!---->
                           </div>
                        </div>
                     </exchange-calculator>
                  </div>
                  <!---->
               </app-transfer>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>