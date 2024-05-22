<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <place-bet class="ng-star-inserted">
      <div>
         <router-outlet></router-outlet>
         <app-ultraplay-esports class="ng-star-inserted">
            <!----><!----><iframe frameborder="0" name="ultraplayFrame" onload="resizeIframe(this)" id="ultraplayFrame" allow="autoplay; screen-wake-lock;" class="iframeDefaultSize ng-star-inserted" src="https://ultraplay.limanbet569.com/ui/externallogin?loginToken=&amp;deviceType=Mobile&amp;lang=tr-TR&amp;oddformat=decimal&amp;viewFormat=european" height="1146px" width="100%"></iframe><!----><!---->
         </app-ultraplay-esports>
         <!----><!---->
      </div>
   </place-bet>
   <!---->
   <payments-widget>
      <!---->
      <div id="PaymentFormModal" materialize="modal" class="modal modal-md open dshbrd-modal pymnt-mdl black-text" style="z-index: 1025;">
         <div class="modal-header"><a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons white-text">close</i></a></div>
         <!---->
      </div>
   </payments-widget>
</main>
<?php }else{?>
    <main onclick="loginorp1ay()">
   <router-outlet></router-outlet>
   <app-placebet class="ng-star-inserted">
      <div class="clear static" id="">
         <!----><!---->
         <div id="">
            <router-outlet></router-outlet>
            <app-ultraplay-esports class="ng-star-inserted">
               <!----><!----><iframe frameborder="0" onload="resizeIframe(this)" name="ultraplayFrame" id="ultraplayFrame" allowfullscreen="true" class="iframeDefaultSize ng-star-inserted" src="https://ultraplay.limanbet569.com/ui/externallogin?loginToken=&amp;deviceType=Desktop&amp;lang=tr-TR&amp;oddformat=decimal&amp;viewFormat=european" height="768px" width="100%"></iframe><!----><!---->
            </app-ultraplay-esports>
            <!---->
         </div>
         <!---->
      </div>
   </app-placebet>
   <!---->
</main>
<?php }?>