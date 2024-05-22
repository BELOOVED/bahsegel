
   <main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <div class="container dshbrd-cntr">
         <div class="row">
         <?php include 'modules/sidebar.php' ?>

            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-personal-and-account-detail class="ng-star-inserted">
                  <div class="prsnl-accnt-inf-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="material-icons">supervisor_account</i><label class="inf-title">Kişisel ve Hesap Bilgilerim</label></div>
                        </div>
                        <div class="mdl-cntnt">
                           <!----><!---->
                           <?php
                                 $user = $db->query("SELECT * from users where id='$_SESSION[user_id]' ")->fetch_assoc();
                           ?>
                           <table class="striped ng-star-inserted">
                              <tbody>
                                 <tr>
                                    <td>Kullanıcı adı</td>
                                    <td><?=$user["login"]?></td>
                                 </tr>
                                 <tr>
                                    <td>E-posta</td>
                                    <td><?=$user["email"]?></td>
                                 </tr>
                                 <tr>
                                    <td>Para Birimi</td>
                                    <td>
                                       <span class="ng-star-inserted">TRY</span><!---->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Kullanıcı Numarası</td>
                                    <td>2022046625030</td>
                                 </tr>
                                 <tr class="ng-star-inserted">
                                    <td>Ad</td>
                                    <td><?=$user["adi"]?> </td>
                                 </tr>
                                 <!----><!---->
                                 <tr class="ng-star-inserted">
                                    <td>Soyad</td>
                                    <td><?=$user["soyadi"]?></td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Doğum tarihi</td>
                                    <td>**/**/****</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Kimlik</td>
                                    <td>***********</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Telefon</td>
                                    <td><?=$user["phone"]?></td>
                                 </tr>
                                 <!---->
                                 <tr class="personel-gender ng-star-inserted">
                                    <td>Cinsiyet</td>
                                    <td>F</td>
                                 </tr>
                                 <!----><!---->
                                 <tr class="ng-star-inserted">
                                    <td>Ülke</td>
                                    <!---->
                                    <td class="ng-star-inserted">TUR</td>
                                    <!---->
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Şehir</td>
                                    <td>*********</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Adres</td>
                                    <td>***************************</td>
                                 </tr>
                                 <!---->
                              </tbody>
                           </table>
                           <!----><!----><!----><!----><!---->
                        </div>
                     </div>
                  </div>
                  <phone-verify>
                     <!---->
                  </phone-verify>
                  <!---->
               </app-personal-and-account-detail>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
