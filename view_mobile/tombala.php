<?php
if ($detect->isMobile()) {?>
<main onclick="loginorp1ay()">
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-bingo class="ng-star-inserted">
         <!----><!----><!----><!---->
         <div class="gm-bx ng-star-inserted">
            <iframe id="gm-frm" frameborder="0" scrolling="no" allow="autoplay; screen-wake-lock;" class="iframeDefaultSize ng-star-inserted" width="100%" height="909px" src="https://casino.pronetgaming.eu/livegames.php?k=WHdLDv3Ie9aE1i2WcBbu%2Ba5fJJ%2FiWlfgTOydugfqxI4rZTOQT4xvhnxB%2Bbz3LH1QqdkuRhWMLV6fckdjkeOPpDFwIfPAE87a3Hkf18rrVRWvu17uc05RgGiGJXtNBbmu3DJh33zEOQLBTasQ1jHYEt57bhbi%2BbJo7weduY%2F2XLpf0qoofgJLmefJGYRi4CgcUk%2FlDddICo6mDObvaKShRnNFPEVL%2FZsF03PM6ONGx%2FFa0%2BlU2ZmPe1s6l%2FW3S7gcGaYKC1qThvx45OfeDXcxgrhLzdDp3%2Fln0DlVK5oH7%2BwbYK7UncWX7MHk12q5hq9zocB3nbDppjyUDC9yfk8QJ0Wj7%2FOQ1Ws%2FFP3VafIOIkmlgngjrf5ZcmiwqVQiMyOSFs7Y4OGolShSOIdpSCnzhQ%3D%3D"></iframe><!---->
         </div>
         <!----><!----><!---->
      </app-bingo>
      <!----><!---->
   </app-games>
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
   <main onclick="loginorp1ay()">
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-bingo class="ng-star-inserted">
         <!---->
         <div materialize="modal" class="modal" style="z-index: 1121;">
            <tckn-verification type="openGame">
               <div class="dshbrd-mdl">
                  <div class="mdl-hdr">
                     <div class="inf-hdr"><span class="inf-title">Oturum Güvenliği Kimlik Numarası Kontrolü</span></div>
                  </div>
                  <div class="mdl-cntnt">
                     <div class="tckn-vrfctn">
                        <p>Güvenlik gereği bu işlemi gerçekleştirebilmek için TC Kimlik Numaranızın son 4 hanesini girmeniz gerekmektedir.</p>
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                           <input type="password" id="tckn" required="" name="tckn" pattern="^[0-9]+$" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="TC Kimlik No Son 4 Hanesini giriniz" minlength="4" maxlength="4"><!----><!---->
                           <div class="input-field">
                              <!----><button class="btn ng-star-inserted" disabled="">Gönder</button><!---->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </tckn-verification>
         </div>
         <div class="casino-detail-bg game-id-9427 ng-star-inserted">
            <app-static-inner-content contentcode="bingo-top">
               <div extroutelink="" id="bingo-top" class="ng-star-inserted">
                  <panel-gallery gallery="31" autoplay="true" type="loop" interval="5000" arrows="true" vce-ready="">
                     <div id="panel_gallery31" class="panel_gallery bmm bm no_arrows">
                        <div>
                           <div class="splide splide--loop splide--ltr splide--draggable is-active" id="splide18" style="visibility: visible;">
                              <div class="splide__arrows">
                                 <button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide18-track" aria-label="Previous slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                                 <button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide18-track" aria-label="Next slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                              </div>
                              <div class="splide__track" id="splide18-track">
                                 <!---->
                                 <ul class="splide__list" id="splide18-list" style="transform: translateX(1425px);"></ul>
                              </div>
                              <div></div>
                              <ul class="splide__pagination"></ul>
                           </div>
                           <div class="panel_gallery_module">
                              <!---->
                           </div>
                        </div>
                     </div>
                  </panel-gallery>
               </div>
               <div class="ng-star-inserted"></div>
               <div class="ng-star-inserted"></div>
               <!----><!---->
            </app-static-inner-content>
            <div class="casino-detail-cntr">
               <div class="flex-container signin-msg-csn mar-bottom-10 ng-star-inserted">
                  <div class="flex-item">
                     <message-box type="info" content="MESSAGES.LOGIN_TO_PLAY_CASINO">
                        <div class="card-panel message-box info">
                           <!----><!---->
                           <div class="ng-star-inserted">
                              Casino oyunlarını oynamak için giriş yapınız<!----><!----><!----><!---->
                           </div>
                           <!----><!----><!----><!----><!---->
                        </div>
                     </message-box>
                  </div>
                  <button class="btn t1">Giriş Yap</button>
               </div>
               <!---->
               <div class="gm-bx-l">
                  <div class="title flex-container">
                     <div class="flex-item txt"><span class="ctry-n"> Canlı Tombala </span></div>
                     <div class="gm-acn">
                        <a class="btn popup" ><i class="material-icons pg-icons">account_balance</i></a><a class="btn refresh" ><i class="fa fa-exchange pg-icons"></i></a><a href="javascript:;" class="btn refresh"><i class="fa fa-refresh pg-icons"></i></a>
                        <app-user-favorite classes="btn fvrt-lnk">
                           <!---->
                        </app-user-favorite>
                        <a class="btn close" ><i class="material-icons pg-icons">close</i></a>
                     </div>
                  </div>
                  <!----><!---->
                  <div class="gm-bx ng-star-inserted">
                     <iframe id="gm-frm" frameborder="0" class="iframeDefaultSize ng-star-inserted" width="100%" height="909px" src="https://casino.pronetgaming.eu/livegames.php?k=WHdLDv3Ie9aE1i2WcBbu%2Ba5fJJ%2FiWlfgTOydugfqxI4rZTOQT4xvhnxB%2Bbz3LH1QqdkuRhWMLV6fckdjkeOPpHj3PB51cDjQ44UjRDeJG%2FNQBtbptAQlwEErOptoxzNhSEdySDx5uGwziqsK8rZ7CCxA88Jx3ZmzEPjjk2C3AB%2Bgm4a3GmwumbpFZr8Tkv8qhT97kGQ%2FA%2BFGIlf2eGK0BMBgBb1Pu7x6I1rjcYOVio0Gbs7hrxRkBuGYdtLERI%2Brd5h8JMUQrZeb94XTyxVYh%2Bym5atm0L0dZU1PR2NvaMqVCfR94zY51t%2FySHHd2I43R621hdykDHXxUiymu%2Fedo5nlcJHBY1OjdM1lDKurdVFPwNlN6gwDKyG8kr1Eb6GHZ3eYA8ZbhAqUZz3%2FwOfHMg%3D%3D" allowfullscreen="true"></iframe><!---->
                  </div>
                  <!---->
               </div>
            </div>
            <app-static-inner-content contentcode="bingo-bottom">
               <!---->
            </app-static-inner-content>
         </div>
         <!---->
      </app-bingo>
      <!---->
   </app-games>
   <!---->
</main>
<?php }?>