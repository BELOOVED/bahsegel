<?php
if ($detect->isMobile()) {?>
    <main>
   <router-outlet></router-outlet>
   <app-authentication>
      <router-outlet></router-outlet>
      <ng-component>
         <div id="forgot-password">
            <div class="container">
               <div class="row">
                  <div class="col s6 offset-s3 fotgot-pass-main">
                     <h4> Kullanıcı adını unuttum </h4>
                     <div class="description">Kullanıcı adını e-mail ile almak için lütfen kayıtlı e-mail adresini giriniz</div>
                     <form novalidate="" action="#" class="login-form ng-untouched ng-pristine ng-invalid">
                        <div class="input-field"><input name="email" type="email" formcontrolname="email" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="E-posta"></div>
                        <button class="btn forgot-btn login-btn fbtn truncate" disabled=""> Kullanıcı adını gönder </button><!---->
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </ng-component>
      <!---->
   </app-authentication>
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
   <app-authentication>
      <div class="col s9 rght-cntnt">
         <router-outlet></router-outlet>
         <ng-component>
            <div id="forgot-password">
               <div class="container">
                  <div class="row">
                     <div class="col s6 offset-s3 fotgot-pass-main">
                        <h4> Kullanıcı adını unuttum </h4>
                        <div class="description">Kullanıcı adını e-mail ile almak için lütfen kayıtlı e-mail adresini giriniz</div>
                        <form novalidate="" action="#" class="login-form ng-untouched ng-pristine ng-invalid">
                           <div class="input-field"><input name="email" type="email" formcontrolname="email" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="E-posta"></div>
                           <button class="btn login-btn fbtn" disabled=""> Kullanıcı adını gönder </button><!---->
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </ng-component>
         <!---->
      </div>
   </app-authentication>
   <!---->
</main>
<?php }?>