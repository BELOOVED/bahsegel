<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-authentication>
      <router-outlet></router-outlet>
      <ng-component>
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Şifremi Unuttum</a>
            </div>
         </div>
         <div id="forgot-password">
            <div class="container">
               <div class="row">
                  <div class="col s12 m12 l6 offset-l3">
                     <div class="description">Kullanıcı adı veya sistemde kayıtlı mail adresinizi girip mail adresinize gelen linki takip ederek şifrenizi yenileyebilirsiniz</div>
                     <!----><!----><!----><!---->
                     <form novalidate="" action="#" class="login-form ng-untouched ng-pristine ng-invalid">
                        <div class="input-field"><input name="username" type="text" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="Kullanıcı adı"></div>
                        <!----><!----><button class="btn forgot-btn login-btn fbtn truncate" disabled=""> Aktivasyon kodunu e-posta adresime gönderin </button><!---->
                     </form>
                     <!----><!----><!---->
                  </div>
               </div>
            </div>
         </div>
         <!---->
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
                        <div class="forgoten-password-header">
                           <h4> Şifremi Unuttum </h4>
                        </div>
                        <div class="description">Kullanıcı adı veya sistemde kayıtlı mail adresinizi girip mail adresinize gelen linki takip ederek şifrenizi yenileyebilirsiniz</div>
                        <!----><!----><!----><!---->
                        <form novalidate="" action="#" class="login-form ng-untouched ng-pristine ng-invalid">
                           <div class="input-field"><input name="username" type="text" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="Kullanıcı adı"></div>
                           <!----><!----><button class="btn login-btn fbtn" disabled=""> Aktivasyon kodunu e-posta adresime gönderin </button><!---->
                        </form>
                        <!----><!----><!---->
                     </div>
                  </div>
               </div>
            </div>
            <!---->
         </ng-component>
         <!---->
      </div>
   </app-authentication>
   <!---->
</main>
<?php }?>