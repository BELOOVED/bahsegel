<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-authentication>
      <router-outlet></router-outlet>
      <app-signin>
         <div class="login-page">
            <div class="filter-toggle"><a class="register-close"><i class="fa fa-times"></i></a></div>
            <!----><!---->
            <form novalidate="" class="login-form clear ng-untouched ng-pristine ng-invalid">
               <div class="title">
                  <h5>Hesabınıza giriş yapınız</h5>
               </div>
               <!----><!---->
               <div class="input-field">
                  <input type="text" required="" autocapitalize="none" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Kullanıcı adı" id="username"><!----><!---->
               </div>
               <!----><!----><!---->
               <div class="input-field password">
                  <input formcontrolname="password" id="password" type="password" required="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Şifreniz">
                  <password-eye el="password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                  <!---->
               </div>
               <!----><!----><button class="btn login-btn"> Giriş Yap </button><!----><!---->
            </form>
            <!---->
            <div class="flex-container btn-group"><a class="forgot-pass" href="/tr/authentication/forgot-password"> Şifremi Unuttum? </a><a class="forgot-username" href="/tr/authentication/forgot-username"> Kullanıcı adını unuttum? </a></div>
            <div class="flex-container btn-group btn-register"><a href="javascript:;" class="register-btn flex-item"><span>Hesabınız yok mu?</span> Yeni hesap oluştur </a></div>
            <!----><a class="contact-support" href="https://lc.chat/now/8806331"><i class="fa fa-comments left"></i> Canlı Destek </a><!----><!----><!---->
         </div>
      </app-signin>
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
         <app-signin>
            <div class="signin-page">
               <app-login>
                  <form novalidate="" class="login-form ng-untouched ng-pristine ng-invalid">
                     <div class="title"><a name="logo" class="lg-cntr" href="/tr"><img class="lg" src="views/trader/limanbet/assets/images/logo.png" alt="limanbet"></a></div>
                     <div class="lg-frm-content">
                        <!----><!----><input type="text" required="" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="Kullanıcı adı" id="username"><!----><!----><!----><!----><!----><!---->
                        <div class="input-field password">
                           <input formcontrolname="password" id="login-password" type="password" required="" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="Şifreniz">
                           <password-eye el="login-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                           <!---->
                        </div>
                        <!----><!----><button class="btn sgn-btn"> Giriş Yap </button><!----><!---->
                        <div class="flex-container ftgtpass-nwacc"><a class="btn flex-item ftgtpass"><i class="fa fa-key pg-icons"></i> Şifremi Unuttum </a><a class="btn flex-item ftgtpass"><i class="fa fa-key pg-icons"></i> Kullanıcı adını unuttum </a></div>
                        <div class="login-form-bottom">
                           <a href="javascript:;" class="btn flex-item nwacc"> Hesabınız yok mu? </a>
                           <div class="login-popup-content clear">
                              <app-static-inner-content contentcode="login-popup-content">
                                 <!---->
                              </app-static-inner-content>
                           </div>
                           <a href="javascript:;" class="waves-effect waves-light register-btn"> Üye Ol </a>
                        </div>
                        <!----><!---->
                     </div>
                  </form>
                  <!----><!---->
               </app-login>
            </div>
         </app-signin>
         <!---->
      </div>
   </app-authentication>
   <!---->
</main>
<?php }?>