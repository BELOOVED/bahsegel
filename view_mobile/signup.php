<?php
if ($detect->isMobile()) {?>
<main>
   <router-outlet></router-outlet>
   <app-authentication>
      <router-outlet></router-outlet>
      <app-signup>
         <div class="breadcrumb-wrapper flex-container">
            <div class="breadcrumbs-cont flex-container flex-item">
               <history-back-button><a class="breadcrumb"><i></i></a></history-back-button>
               <a href="javascript:;" class="breadcrumb">Üye Ol</a>
            </div>
            <div class="filter-toggle"><a class="register-close"><i class="fa fa-times"></i></a></div>
         </div>
         <div class="row">
            <div class="col s12">
               <app-static-inner-content contentcode="m_signupTop">
                  <!---->
               </app-static-inner-content>
            </div>
         </div>
         <div class="register-page">
            <!---->
            <ul class="tabs">
               <li class="tab">
                  <a href="javascript:;" class="active" id="fgj1">
                     <span class="tab-count"> 1 </span><span class="text">Hesap Bilgileri</span><!---->
                  </a>
               </li>
               <li class="tab">
                  <a href="javascript:;" id="fgj2">
                     <span class="tab-count"> 2 </span><span class="text">Kişisel Bilgiler</span><!---->
                  </a>
               </li>
               <li class="tab">
                  <a href="javascript:;" id="fgj3">
                     <span class="tab-count"> 3 </span><span class="text">Bilgileri Onayla</span><!---->
                  </a>
               </li>
               <!---->
            </ul>
            <!---->
            <form novalidate="" class="ng-untouched ng-pristine ng-valid" id="register_form" onsubmit="signUp()">
               <div ngmodelgroup="signUpFields" class="row ng-untouched ng-pristine ng-invalid">
                  <div id="step-ACCOUNT">
                     <!----><!---->
                     <div autocapitalize="none" class="input-field required">
                        <span class="field-label required">Kullanıcı adı </span><!----><!---->
                        <div class="cpf-number-loading">
                           <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="username" placeholder="" type="text" name="login" required=""><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!---->
                        <div>
                           <!----><!---->
                        </div>
                        <!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!---->
                     <div class="flex-container input-group align-items-res">
                        <div class="input-field required">
                           <span class="field-label required">Ad </span><!----><input type="text" autocapitalize="none" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid" id="firstName" placeholder="" required=""><!---->
                        </div>
                        <div class="suffix-field"><input type="checkbox" id="filled-in-box" checked="checked" class="filled-in ng-untouched ng-pristine ng-valid"><label for="filled-in-box">İkinci adım var</label></div>
                        <!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     <div autocapitalize="none" class="input-field required">
                        <span class="field-label required">Soyad </span><!----><!---->
                        <div class="cpf-number-loading">
                           <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="surname" placeholder="" type="text" required=""><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!---->
                        <div>
                           <!----><!---->
                        </div>
                        <!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     <div autocapitalize="none" class="input-field required">
                        <span class="field-label required">E-posta </span><!----><!---->
                        <div class="cpf-number-loading">
                           <!----><!----><!---->
                        </div>
                        <input debounce="500" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="email" placeholder="" type="email" required="" maxlength="100" pattern="^\s*(([^<>()\[\]\\,`~;:$%^*#№\s@&quot;]{2,})|(&quot;.+&quot;))@(([a-zA-Z0-9^(-?)]+\.)+[a-zA-Z]{2,})\s*$"><!----><!----><!----><!----><!----><!----><!---->
                        <div>
                           <!----><!---->
                        </div>
                        <!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     <div autocapitalize="none" class="input-field required">
                        <span class="field-label required">Telefon </span><!----><!---->
                        <div class="cpf-number-loading">
                           <!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!---->
                        <div>
                           <div class="iti iti--allow-dropdown iti--separate-dial-code">
                              <div class="iti__flag-container">
                                 <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="Turkey (Türkiye): +90" aria-activedescendant="iti-0__item-tr-preferred">
                                    <div class="iti__flag iti__tr"></div>
                                    <div class="iti__selected-dial-code">+90</div>
                                    <div class="iti__arrow"></div>
                                 </div>
                              </div>
                              <input type="text" ng2telinput="" class="browser-default ng-untouched ng-pristine ng-invalid" id="phone" placeholder="501 234 56 78" autocomplete="off" name="phone" data-intl-tel-input-id="0" style="padding-left: 81px;">
                           </div>
                           <!----><!---->
                        </div>
                        <!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     <app-notifications>
                        <div>
                           <!---->
                        </div>
                     </app-notifications>
                     <div class="flex-container step-btns">
                        <!----><a href="javascript:;" onclick="step1()" class="btn next-btn flex-item truncate"> Kişisel Bilgilere Gidin </a><!----><!----><!----><!----><!----><!----><!---->
                     </div>
                  </div>
                  <!---->
                  <div id="step-PERSONAL" class="hidden">
                     <!----><!---->
                     <div autocapitalize="none" class="input-field password bubble required">
                        <span class="field-label required">Şifreniz </span><!----><!---->
                        <div class="cpf-number-loading">
                           <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="password" name="password" placeholder="" type="password" required="" maxlength="25"><!----><!----><!---->
                        </div>
                        <!----><!----><!---->
                        <bubble-validator position="right">
                           <div class="bubble-vldtr right">
                              <ul class="vldtr-lst">
                                 <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 büyük harf içermeli. </span></li>
                                 <!----><!---->
                                 <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 küçük harf içermeli. </span></li>
                                 <!----><!---->
                                 <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 nümerik değer içermeli. </span></li>
                                 <!----><!----><!----><!---->
                                 <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 8 değer içermeli. </span></li>
                                 <!----><!----><!---->
                              </ul>
                           </div>
                        </bubble-validator>
                        <!---->
                        <password-eye el="password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                        <!----><!----><!---->
                        <div>
                           <!----><!---->
                        </div>
                        <!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     <div class="field-cont">
                        <div class="radio-tabs flex-container">
                           <div class="radio-tab flex-item"><input type="radio" class="with-gap ng-untouched ng-pristine ng-valid" id="gender-M"><label for="gender-M"><span class="item truncate"> Erkek</span></label></div>
                           <div class="radio-tab flex-item"><input type="radio" class="with-gap ng-untouched ng-pristine ng-valid" id="gender-F"><label for="gender-F"><span class="item truncate"> Kadın</span></label></div>
                           <div class="radio-tab flex-item"><input type="radio" class="with-gap ng-untouched ng-pristine ng-valid" id="gender-X"><label for="gender-X"><span class="item truncate"> Beyan etmek istemiyorum</span></label></div>
                           <!---->
                        </div>
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!---->
                     <div class="select-field required">
                        <span class="field-label required"> Para Birimi </span><!---->
                        <div>
                           <select select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid" id="currencyId" required="" style="flex: 3 1 0%;">
                              <option selected="" value="" disabled="">Seçiniz</option>
                              <!---->
                              <option value="1">Türk Lirası</option>
                              <option value="2">Büyük Britanya Sterlini</option>
                              <option value="3">Amerikan Doları</option>
                              <option value="4">Euro</option>
                              <option value="10">Tenge</option>
                              <!----><!----><!----><!----><!----><!---->
                           </select>
                           <!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!---->
                     <div autocapitalize="none" class="input-field required">
                        <span class="field-label required">Doğum Tarihi </span><!---->
                        <birthdate-input>
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                           <div class="flex-container">
                              <div class="flex-item">
                                 <div class="select-field">
                                    <select id="days" select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid">
                                       <option selected="" value="" disabled="">Gün</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                       <option value="13">13</option>
                                       <option value="14">14</option>
                                       <option value="15">15</option>
                                       <option value="16">16</option>
                                       <option value="17">17</option>
                                       <option value="18">18</option>
                                       <option value="19">19</option>
                                       <option value="20">20</option>
                                       <option value="21">21</option>
                                       <option value="22">22</option>
                                       <option value="23">23</option>
                                       <option value="24">24</option>
                                       <option value="25">25</option>
                                       <option value="26">26</option>
                                       <option value="27">27</option>
                                       <option value="28">28</option>
                                       <option value="29">29</option>
                                       <option value="30">30</option>
                                       <option value="31">31</option>
                                       <!---->
                                    </select>
                                 </div>
                              </div>
                              <div class="flex-item">
                                 <div class="select-field">
                                    <select id="months" select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid">
                                       <option selected="" value="" disabled="">Ay</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                       <!---->
                                    </select>
                                 </div>
                              </div>
                              <div class="flex-item">
                                 <div class="select-field">
                                    <select id="years" select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid">
                                       <option selected="" value="" disabled="">Yıl</option>
                                       <option value="2006">2006</option>
                                       <option value="2005">2005</option>
                                       <option value="2004">2004</option>
                                       <option value="2003">2003</option>
                                       <option value="2002">2002</option>
                                       <option value="2001">2001</option>
                                       <option value="2000">2000</option>
                                       <option value="1999">1999</option>
                                       <option value="1998">1998</option>
                                       <option value="1997">1997</option>
                                       <option value="1996">1996</option>
                                       <option value="1995">1995</option>
                                       <option value="1994">1994</option>
                                       <option value="1993">1993</option>
                                       <option value="1992">1992</option>
                                       <option value="1991">1991</option>
                                       <option value="1990">1990</option>
                                       <option value="1989">1989</option>
                                       <option value="1988">1988</option>
                                       <option value="1987">1987</option>
                                       <option value="1986">1986</option>
                                       <option value="1985">1985</option>
                                       <option value="1984">1984</option>
                                       <option value="1983">1983</option>
                                       <option value="1982">1982</option>
                                       <option value="1981">1981</option>
                                       <option value="1980">1980</option>
                                       <option value="1979">1979</option>
                                       <option value="1978">1978</option>
                                       <option value="1977">1977</option>
                                       <option value="1976">1976</option>
                                       <option value="1975">1975</option>
                                       <option value="1974">1974</option>
                                       <option value="1973">1973</option>
                                       <option value="1972">1972</option>
                                       <option value="1971">1971</option>
                                       <option value="1970">1970</option>
                                       <option value="1969">1969</option>
                                       <option value="1968">1968</option>
                                       <option value="1967">1967</option>
                                       <option value="1966">1966</option>
                                       <option value="1965">1965</option>
                                       <option value="1964">1964</option>
                                       <option value="1963">1963</option>
                                       <option value="1962">1962</option>
                                       <option value="1961">1961</option>
                                       <option value="1960">1960</option>
                                       <option value="1959">1959</option>
                                       <option value="1958">1958</option>
                                       <option value="1957">1957</option>
                                       <option value="1956">1956</option>
                                       <option value="1955">1955</option>
                                       <option value="1954">1954</option>
                                       <option value="1953">1953</option>
                                       <option value="1952">1952</option>
                                       <option value="1951">1951</option>
                                       <option value="1950">1950</option>
                                       <option value="1949">1949</option>
                                       <option value="1948">1948</option>
                                       <option value="1947">1947</option>
                                       <option value="1946">1946</option>
                                       <option value="1945">1945</option>
                                       <option value="1944">1944</option>
                                       <option value="1943">1943</option>
                                       <option value="1942">1942</option>
                                       <option value="1941">1941</option>
                                       <option value="1940">1940</option>
                                       <option value="1939">1939</option>
                                       <option value="1938">1938</option>
                                       <option value="1937">1937</option>
                                       <option value="1936">1936</option>
                                       <option value="1935">1935</option>
                                       <option value="1934">1934</option>
                                       <option value="1933">1933</option>
                                       <option value="1932">1932</option>
                                       <option value="1931">1931</option>
                                       <option value="1930">1930</option>
                                       <option value="1929">1929</option>
                                       <option value="1928">1928</option>
                                       <option value="1927">1927</option>
                                       <option value="1926">1926</option>
                                       <option value="1925">1925</option>
                                       <option value="1924">1924</option>
                                       <!---->
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </form>
                        </birthdate-input><!----><!---->
<div class="cpf-number-loading">
   <!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!---->
<div>
   <!----><!---->
</div>
<!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div class="select-field required">
   <span class="field-label required"> Ülke </span><!---->
   <div>
      <select select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid" id="countryId" required="" style="flex: 3 1 0%;">
         <option selected="" value="" disabled="">Seçiniz</option>
         <!----><!---->
         <option value="84">Afganistan</option>
         <option value="6534">Aland Adaları</option>
         <option value="22">Albania</option>
         <option value="11">Almanya</option>
         <option value="13">Amerika</option>
         <option value="6536">Amerika Birleşik Devletleri Küçük Dış Adaları</option>
         <option value="86">Amerikan Samoası</option>
         <option value="94">Andora</option>
         <option value="95">Angola</option>
         <option value="96">Anguilla</option>
         <option value="97">Antarktika</option>
         <option value="98">Antigua ve Barbuda</option>
         <option value="293">Arjantin</option>
         <option value="100">Aruba</option>
         <option value="6549">Avrupa Birliği</option>
         <option value="102">Avusturya</option>
         <option value="20">Azerbaycan</option>
         <option value="103">Bahamalar</option>
         <option value="104">Bahreyn</option>
         <option value="105">Bangladeş</option>
         <option value="106">Barbados</option>
         <option value="289">Batı Sahara</option>
         <option value="108">Belçika</option>
         <option value="109">Belize</option>
         <option value="110">Benin</option>
         <option value="111">Bermuda</option>
         <option value="107">Beyaz Rusya</option>
         <option value="112">Bhutan</option>
         <option value="6568">Bilinmeyen veya Geçersiz Bölge</option>
         <option value="280">Birleşik Arap Emirlikleri</option>
         <option value="113">Bolivya</option>
         <option value="114">Bosna Hersek</option>
         <option value="115">Botsvana</option>
         <option value="6548">Bouvet Adası</option>
         <option value="116">Brezilya</option>
         <option value="119">Brunei</option>
         <option value="47">Bulgaristan</option>
         <option value="120">Burkina Faso</option>
         <option value="121">Burundi</option>
         <option value="297">Canary Islands</option>
         <option value="125">Cape Verde</option>
         <option value="157">Cebelitarık</option>
         <option value="93">Cezayir</option>
         <option value="131">Christmas Adası</option>
         <option value="140">Cibuti</option>
         <option value="132">Cocos Adaları</option>
         <option value="135">Cook Adaları</option>
         <option value="137">Curacao</option>
         <option value="128">Çad</option>
         <option value="51">Çek Cumhuriyeti</option>
         <option value="130">Çin</option>
         <option value="139">Danimarka</option>
         <option value="142">Doğu Timor</option>
         <option value="141">Dominik Cumhuriyeti</option>
         <option value="143">Ekvator</option>
         <option value="146">Ekvator Ginesi</option>
         <option value="145">El Salvador</option>
         <option value="171">Endonezya</option>
         <option value="147">Eritre</option>
         <option value="99">Ermenistan</option>
         <option value="148">Estonya</option>
         <option value="149">Etiyopya</option>
         <option value="150">Falkland Adaları (Malvinalar)</option>
         <option value="151">Faroe Adaları</option>
         <option value="210">Fas</option>
         <option value="152">Fiji</option>
         <option value="295">Fildişi Sahilleri</option>
         <option value="6541">Filipinler</option>
         <option value="229">Filistin Bölgesi</option>
         <option value="57">Finlandiya</option>
         <option value="43">Fransa</option>
         <option value="6543">Fransız Guyanası</option>
         <option value="6544">Fransız Güney Bölgeleri</option>
         <option value="153">Fransız Polinezyası</option>
         <option value="154">Gabon</option>
         <option value="155">Gambia</option>
         <option value="156">Gana</option>
         <option value="163">Gine</option>
         <option value="164">Gine-Bissau</option>
         <option value="159">Granada</option>
         <option value="158">Grönland</option>
         <option value="6553">Guadeloupe</option>
         <option value="160">Guam</option>
         <option value="161">Guatemala</option>
         <option value="162">Guernsey</option>
         <option value="165">Guyana</option>
         <option value="259">Güney Afrika</option>
         <option value="6554">Güney Georgia ve Güney Sandwich Adaları</option>
         <option value="260">Güney Kore</option>
         <option value="92">Gürcistan</option>
         <option value="166">Haiti</option>
         <option value="6547">Heard Adası ve McDonald Adaları</option>
         <option value="136">Hırvatistan</option>
         <option value="170">Hindistan</option>
         <option value="117">Hint Okyanusu İngiliz Bölgesi</option>
         <option value="10">Hollanda</option>
         <option value="6511">Hollanda Antilleri</option>
         <option value="167">Honduras</option>
         <option value="168">Hong Kong SAR - Çin</option>
         <option value="172">Irak</option>
         <option value="296">İran</option>
         <option value="59">İrlanda</option>
         <option value="6531">İsrail</option>
         <option value="267">İsveç</option>
         <option value="268">İsviçre</option>
         <option value="33">İtalya</option>
         <option value="169">İzlanda</option>
         <option value="177">Jamaika</option>
         <option value="178">Japonya</option>
         <option value="179">Jersey</option>
         <option value="122">Kamboçya</option>
         <option value="123">Kamerun</option>
         <option value="124">Kanada</option>
         <option value="208">Karadağ</option>
         <option value="237">Katar</option>
         <option value="126">Kayman Adaları</option>
         <option value="181">Kazakistan</option>
         <option value="182">Kenya</option>
         <option value="16">Kıbrıs</option>
         <option value="186">Kırgızistan</option>
         <option value="183">Kiribati</option>
         <option value="133">Kolombiya</option>
         <option value="134">Komorlar</option>
         <option value="238">Kongo</option>
         <option value="138">Kongo Demokratik Cumhuriyeti</option>
         <option value="184">Kosovo</option>
         <option value="49">Kosta Rika</option>
         <option value="185">Kuveyt</option>
         <option value="223">Kuzey Kore</option>
         <option value="224">Kuzey Mariana Adaları</option>
         <option value="91">Küba</option>
         <option value="187">Laos</option>
         <option value="189">Lesotho</option>
         <option value="83">Letonya</option>
         <option value="190">Liberya</option>
         <option value="191">Libya</option>
         <option value="6556">Liechtenstein</option>
         <option value="192">Litvanya</option>
         <option value="188">Lübnan</option>
         <option value="193">Lüksemburg</option>
         <option value="18">Macaristan</option>
         <option value="195">Madagaskar</option>
         <option value="6532">Makao S.A.R. Çin</option>
         <option value="194">Makedonya</option>
         <option value="196">Malavi</option>
         <option value="198">Maldivler</option>
         <option value="197">Malezya</option>
         <option value="6656">Mali</option>
         <option value="199">Malta</option>
         <option value="174">Man Adası</option>
         <option value="200">Marshall Adaları</option>
         <option value="6600">Martinik</option>
         <option value="202">Mauritius</option>
         <option value="203">Mayotte</option>
         <option value="204">Meksika</option>
         <option value="144">Mısır</option>
         <option value="205">Mikronezya Federal Eyaletleri</option>
         <option value="207">Moğolistan</option>
         <option value="206">Moldovya Cumhuriyeti</option>
         <option value="6657">Monako</option>
         <option value="209">Montserrat</option>
         <option value="201">Moritanya</option>
         <option value="211">Mozambik</option>
         <option value="212">Myanmar</option>
         <option value="213">Namibya</option>
         <option value="214">Nauru</option>
         <option value="215">Nepal</option>
         <option value="220">Nijer</option>
         <option value="221">Nijerya</option>
         <option value="219">Nikaragua</option>
         <option value="222">Niue</option>
         <option value="6697">Norfolk Adası</option>
         <option value="225">Norveç</option>
         <option value="127">Orta Afrika Cumhuriyeti</option>
         <option value="283">Özbekistan</option>
         <option value="227">Pakistan</option>
         <option value="228">Palau</option>
         <option value="230">Panama</option>
         <option value="231">Papua Yeni Gine</option>
         <option value="232">Paraguay</option>
         <option value="233">Peru</option>
         <option value="235">Pitcairn</option>
         <option value="67">Polonya</option>
         <option value="69">Portekiz</option>
         <option value="236">Porto Riko</option>
         <option value="239">Reunion</option>
         <option value="71">Romanya</option>
         <option value="240">Ruanda</option>
         <option value="14">Rusya</option>
         <option value="241">Saint Barthelemy</option>
         <option value="242">Saint Helena</option>
         <option value="243">Saint Kitts ve Nevis</option>
         <option value="244">Saint Lucia</option>
         <option value="245">Saint Martin</option>
         <option value="246">Saint Pierre ve Miquelon</option>
         <option value="247">Saint Vincent ve Grenadinler</option>
         <option value="248">Samoa</option>
         <option value="249">San Marino</option>
         <option value="250">Sao Tome ve Principe</option>
         <option value="6715">Senegal</option>
         <option value="253">Seyşeller</option>
         <option value="45">Sırbistan</option>
         <option value="6766">Sırbistan-Karadağ</option>
         <option value="6733">Sierra Leone</option>
         <option value="254">Singapur</option>
         <option value="255">Sint Maarten</option>
         <option value="256">Slovakya</option>
         <option value="257">Slovenya</option>
         <option value="258">Solomon Adaları</option>
         <option value="85">Somali</option>
         <option value="261">South Sudan</option>
         <option value="262">Sri Lanka</option>
         <option value="263">Sudan</option>
         <option value="264">Surinam</option>
         <option value="269">Suriye</option>
         <option value="251">Suudi Arabistan</option>
         <option value="265">Svalbard ve Jan Mayen</option>
         <option value="266">Svaziland</option>
         <option value="129">Şili</option>
         <option value="271">Tacikistan</option>
         <option value="272">Tanzanya</option>
         <option value="88">Tayland</option>
         <option value="270">Tayvan</option>
         <option value="273">Togo</option>
         <option value="274">Tokelau</option>
         <option value="87">Tonga</option>
         <option value="90">Trinidad ve Tobago</option>
         <option value="275">Tunus</option>
         <option value="277">Turks ve Caicos Adaları</option>
         <option value="278">Tuvalu</option>
         <option value="12">Türkiye</option>
         <option value="276">Türkmenistan</option>
         <option value="17">Uganda</option>
         <option value="89">Ukrayna</option>
         <option value="226">Umman</option>
         <option value="282">Uruguay</option>
         <option value="6768">Uzak Okyanusya</option>
         <option value="180">Ürdün</option>
         <option value="284">Vanuatu</option>
         <option value="285">Vatikan</option>
         <option value="286">Venezuela</option>
         <option value="287">Vietnam</option>
         <option value="288">Wallis ve Futuna</option>
         <option value="290">Yemen</option>
         <option value="217">Yeni Kaledonya</option>
         <option value="218">Yeni Zelanda</option>
         <option value="39">Yunanistan</option>
         <option value="291">Zambiya</option>
         <option value="292">Zimbabve</option>
         <!----><!----><!----><!----><!---->
      </select>
      <!----><!---->
   </div>
   <!----><!----><!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div autocapitalize="none" class="input-field required">
   <span class="field-label required">Şehir </span><!----><!---->
   <div class="cpf-number-loading">
      <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="cityName" placeholder="" type="text" required=""><!----><!----><!---->
   </div>
   <!----><!----><!----><!----><!----><!----><!---->
   <div>
      <!----><!---->
   </div>
   <!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div class="input-field required">
   <span class="field-label required">Adres </span><!---->
   <textarea cols="30" rows="10" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid" placeholder="" id="address" maxlength="100"></textarea>
   <!---->
</div>
<!----><!----><!----><!----><!----><!----><!---->
<div class="select-field">
   <!----><!----><!----><!----><!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div class="select-field">
   <!----><!----><!----><!----><!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!---->
<app-notifications>
   <div>
      <!---->
   </div>
</app-notifications>
<div class="flex-container step-btns">
   <a href="javascript:;" onclick="backstep1()" class="btn prev-btn flex-item truncate"> Hesap Bilgilerine Gidin </a><!----><a href="javascript:;" onclick="step2()" class="btn next-btn flex-item truncate"> Bilgileri Onayla </a><!----><!----><!----><!----><!----><!----><!---->
</div>
                  </div><!---->
                  <div id="step-confirmation" class="hidden">
                     <div class="register-info"><span>Limanbet sitesine kayıt olunurken, hesabınızın teyidi ve güvenliği için doğru kişisel bilgiler gerekir. Bunu yapmayanların hesapları dondurulur ve/veya hesap temelli olarak feshedilir. Müşteriler kendi ülkelerinin bahis oynama yasalarının getirdiği sorumlulukla hareket ederler. Limanbet açıklama yapmadan herhangi bir üyeliği reddetme hakkına sahiptir.</span></div>
                     <!----><!----><!----><!----><!----><!----><!----><!---->
                     <div class="checkbox-field mar-top-10">
                        <input type="checkbox" class="filled-in ng-untouched ng-pristine ng-invalid" name="privacyPolicy" id="privacyPolicy" required="">
                        <label for="privacyPolicy">
                           <span class="required-icon"></span><!----> 18 yaşının üzerinde olduğumu kabul ediyorum <a class="blue-text privacyPolicy">Gizlilik Politikası </a><!----><!----><!----><!---->
                        </label>
                        <!---->
                     </div>
                     <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     <div class="checkbox-field mar-top-10">
                        <input type="checkbox" class="filled-in ng-untouched ng-pristine ng-invalid" name="termsAndConditions" id="termsAndConditions" required="">
                        <label for="termsAndConditions">
                           <span class="required-icon"></span><!----> Yukarıda verdiğim bilgilerin doğru olduğunu teyit ederim. Ayrıca tüm kuralları, şartları, koşulları, politikaları ve ilgili diğer site kuralları okuduğumu ve kabul ettiğimi onaylıyorum. <a class="blue-text termsAndConditions">şartlar ve koşullar. </a><!----><!----><!----><!---->
                        </label>
                        <!---->
                     </div>
                     <!----><!----><!----><!----><!---->
                     <app-notifications>
                        <div>
                           <!---->
                        </div>
                     </app-notifications>
                     <div class="flex-container step-btns">
                        <a href="javascript:;" onclick="backstep2()" class="btn prev-btn flex-item truncate"> Kişisel Bilgilere Gidin </a><!----><!----><button type="submit" class="btn next-btn flex-item register-btn truncate"> Üye Ol </button><!----><!----><!----><!----><!----><!---->
                     </div>
                  </div>
<!----><!----></div></form><!----><!---->    </div>
         <!----><!---->
         <div class="row">
            <div class="col s12">
               <app-static-inner-content contentcode="signupBottom">
                  <!---->
               </app-static-inner-content>
            </div>
         </div>
         <!---->
         <div id="termsAndConditionsModal" materialize="modal" class="modal" style="z-index: 1049;">
            <div class="mdl-hdr">
               <div class="header-content">
                  <div class="modal-close-button"><a><i class="fa fa-times"></i></a></div>
               </div>
            </div>
            <div class="modal-content">
               <app-static-inner-content contentcode="about-us-gen-terms-cond">
                  <div extroutelink="" id="about-us-gen-terms-cond">
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        1. GİRİŞ
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        1.1 Yukarıda listelenen Hükümler ve Koşulların tümü birden "Hükümler" veya
                        "Anlaşmalar" olarak anılacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        1.2 Hükümler ve Koşullar'da, "bahis" veya "bahis yapma" diye geçen herhangi
                        bir terim,Limanbet web sitesi üzerinden gerçek veya sanal para ile oynanan
                        spor, casino, poker ve diğer şans oyunlarını ifade edecektir. Sözü edilen
                        bu tür oyunlar ayrıca "Hizmetler" olarak da anılacaktır. "Siz", "sizin",
                        "müşteri" veya "oyuncu" diye addedilen tüm şartlar, Limanbet’i veya
                        hizmetlerini kullanan tüm şahıslar ve/veya Limanbet’e kayıtlı
                        müşterilerdir. "Biz", "bize" ve "bizim" diye geçen terimler Limanbet
                        şirketine kasttedmektedir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        1.3 Sorumlu Kumar Oynama Politikası, Kullanım Koşulları, Gizlilik
                        Politikası, Bahis Kuralları, Spor Bahisleri kuralları ve düzenlemeleri,
                        Casino Bahisleri kuralları ve yönetmeliği ile Limanbet Hizmetlerine
                        uygulanan herhangi bir kural ve yönetmelik, Hükümlerin ayrılmaz bir parçası
                        olarak kabul edilmelidirler. Herhangi bir çatışma durumunda, tüm hükümler
                        ve koşullar, kurallar ve düzenlemelerle birlikte işbu metinde veya
                        websitesinde geçerli politikalar çapraz referans olarak incelenecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        1.4 Genel Hüküm ve Koşullara herhangi bir zamanda değişiklik yapma veya
                        değiştirme yetkisi Limanbet sitesine aittir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2. HESAP AÇMA
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.1 Oyuncular, ikamet ettikleri bölgelerdeki yargı merciinin öngördüğü
                        online bahis kurallarını ve düzenlemelerini bilmelidirler.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="">
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                              2.2
                              ABD, İsrail, İngiliz Virgin Adaları, Filipinler ve Hollanda Antilleri'nde
                              ikamet edenlerin hesap açmalarına izin verilmez. Bu yargı bölgelerinde olduğu
                              tespit edilen (geçici veya diğer, ulusal veya bu ülkelerin IP'lerini
                              kullanarak) kişilerin yapmış olduğu bahisler, Limanbet in takdirine bağlı
                              olarak iptal edilecektir ve sadece ilk yatırmış oldukları miktar iade
                              edilecektir.
                              <o:p></o:p>
                           </span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                              i.
                              Buna ek olarak, Limanbet belirtilen ülkeler için hiçbir koşulda NetEnt
                              oyunlarına katılmasına izin vermemektedir: Afganistan, Arnavutluk, Cezayir,
                              Angola, Avustralya, Bahamalar, Botswana, Kamboçya, Ekvador, Etiyopya, Gana, Guyana,
                              Hong Kong, İran, Irak, İsrail, Kuveyt, Laos, Myanmar, Namibya, Nikaragua, Kuzey
                              Kore, Pakistan, Panama, Papua Yeni Gine, Filipinler, Singapur, Sri Lanka,
                              Sudan, Suriye, Tayvan, Trinidad ve Tobago, Tunus, Uganda, Yemen ve Zimbabve.
                              <o:p></o:p>
                           </span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                              ii.
                              Limanbet, NetEnt'e sunulan ve NetEnt tarafından onaylanan belirli yargı
                              yetkisinin, yetkili lisans makamından geçerli oyun türü için yerel bir uzaktan
                              oyun lisansına sahip olmadıkça, Limanbet gerçek parayla NetEnt oyunlarını
                              belirli ülkelere sunamaz.
                              <o:p></o:p>
                           </span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                              Belirli
                              bir yargı yetkisinin birden çok devlete veya bölgeye bölünmesi durumunda, Limanbet
                              yerel uzaktan oyun lisansının, özel olarak izin verdiği sürece sadece bu tür
                              bir eyalette ya da bölgede gerçek parayla NetEnt oyunları sunulabilir.
                              <o:p></o:p>
                           </span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-size: small; color: rgb(255, 255, 255);">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">Şu
                              anda yerel bir lisansa sahip olmayan bölgeler şunlardır: </span><span style="font-family: Arial, sans-serif; letter-spacing: -0.5pt;">Belçika, Bulgaristan, Çek Cumhuriyeti, Danimarka,
                              Estonya, Fransa, İtalya, Letonya, Litvanya, Meksika, Portekiz, Romanya,
                              Sırbistan, İspanya, İsveç, İsviçre, Amerika Birleşik Devletleri ve İngiltere.</span>
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                 <o:p></o:p>
                              </span>
                           </span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-size: small; color: rgb(255, 255, 255);">
                              <span style="font-family: Arial, sans-serif;">iii. Yukarıda belirtilen Ülkelere ek olarak, NetEnt’in Lisanslı
                              müşterileri, yerel bir Lisans sahibi olsa bile, NetEnt’in Havuzlu Jackpot
                              Oyunlarını ve Pooled Jackpot Oyunlarının mobil versiyonlarını (Hall of Gods,
                              Arabian Nights, Mega Fortune &amp; Mega Fortune Dreams) teklif etmesi yasaktır.
                              Yasaklı Ülkeler: Azerbaycan, Çin, Curacao, Danimarka, Hindistan, İtalya,
                              Japonya, Malezya, Katar, Rusya, İspanya, Tayland, Türkiye, Birleşik Arap
                              Emirlikleri, Ukrayna.</span>
                              <span style="font-family: Arial, sans-serif;">
                                 <o:p></o:p>
                              </span>
                           </span>
                        </p>
                        <p class="MsoNormal" style="line-height: normal;"><span style="font-family: Arial, Verdana; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; color: rgb(255, 255, 255);"><span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">iv.
                           Ayrıca Limanbet,&nbsp; Azerbaycan, Çin, Hindistan, Malezya, Katar, Rusya,
                           Tayland, Tunus, Türkiye ve Ukrayna'da ikamet edenler için bir yerel Lisans
                           düzenlenmiş olsa bile NetEnt Markalı Oyunlarını ve Markalı Oyunların mobil
                           versiyonlarını </span><span style="font-family: Arial, sans-serif;">Jumanji video slot, Emojiplanet video slot, Conan video slot,
                           NetEnt Rocks Games consisting of Guns N’ Roses,&nbsp;</span></span><font color="#ffffff" face="Arial, sans-serif" size="2">Ozzy Osbourne,&nbsp;</font><span style="font-family: Arial, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; color: rgb(255, 255, 255);">Jimi Hendrix and Motorhead
                           video slots, Planet of the Apes video slot and The Universal Monster Slot Games
                           consisting of Frankenstein, the Bride of Frankenstein, Dracula, The Mummy, The
                           Wolf Man, Creature from the Black Lagoon, The Invisible Man, The Phantom of the
                           Opera and Scudamore’s Super Stakes (© 2019, NetEnt Product Services Ltd.
                           Scudamore Super Stakes is a trademark of NetEnt Product Services. All Rights
                           Reserved)</span><span style="font-family: Arial, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; color: rgb(255, 255, 255); letter-spacing: -0.25pt;">&nbsp;sunamaz.</span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-size: small; color: rgb(255, 255, 255);">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">iv.i
                              Yukarıdaki madde 2.2 (iv) 'de belirtilen yetki bölgelerine ek olarak,
                              Afganistan, Arnavutluk, Cezayir, Angola, Avustralya, Azerbaycan, Kamboçya,
                              Kanada, Çin, Ekvador, Fransa, Guyana, Hong Kong, Hindistan, Endonezya, İran,
                              Irak, İsrail, Kuveyt, Laos, Malezya, Myanmar, Namibya, Kuzey Kore, Pakistan,
                              Papua Yeni Gine, Filipinler, Katar, Rusya, Singapur, Güney Kore, Sudan, Suriye,
                              Tayvan, Tayland, Tunus, Türkiye, Ukrayna, Amerika Birleşik Devletleri (özel
                              lisans anlaşması alması gereken New Jersey ve Pennsylvania Devletleri hariç) ve
                              Uganda ‘da yerel bir lisans sahibi olsa bile; "</span><span style="font-family: Arial, sans-serif; letter-spacing: -0.5pt;"> Vikings Video Slot </span>
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                 " (bu markalı oyunun mobil versiyonları
                                 da dahil olmak üzere) Limanbet tarafından sunulmamaktadır.
                                 <o:p></o:p>
                              </span>
                           </span>
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        </p>
                        <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                           <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; color: rgb(255, 255, 255);">
                              <span style="font-size: small;">iv.ii
                              Yukarıdaki madde 2.2 (iv) 'de belirtilen yetki bölgelerine ek olarak, Endonezya
                              ve Güney Kore' de yerel bir lisans sahibi olsa bile; "Narcos Video
                              Slot" (bu markalı oyunun mobil versiyonları da dahil olmak üzere) Limanbet
                              tarafından sunulmamaktadır.</span>
                              <span style="font-weight: normal; font-size: 12pt;">
                                 <o:p></o:p>
                              </span>
                           </span>
                        </p>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.3 Limanbet web sitesinin, etkin bir şekilde yasak bölgeler listesine
                        dahil edilmemiş bölgelerde hizmet sunma kapasitesini sürekli
                        denetlemektedir. Limanbet hizmetlerini, belirli bir bölgeye daha fazla
                        sağlayacak bir konumda olmadığında (gerek yasal, ticari veya herhangi başka
                        bir nedenden dolayı), Limanbet gerektiğince Hükümlerin ilgili bölümlerini
                        gözden geçirir ve inceler.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.4 Limanbet tarafından yeni bir bölge yasak bölge listesine eklendiğinde,
                        sınırlandırılmış bölgede ikamet ettiği tespit edilen müşterilerin hesapları
                        derhal kapatılır. Müşterinin, yeni kısıtlanmış bir bölgede oturmakta olduğu
                        belirlendiği durumlarda, ikamet bölgesi yasak topraklar listesine dahil
                        edildiğinde tamamlanmamış olan bahisleri olduğu takdirde Limanbet bu tür
                        bahisleri geçersiz sayma hakkını saklı tutar, ve müşterilerin bahis
                        yatırımlarını iade eder. Müşterinin ikamet ettiği bölge yasak bölgeler
                        listesine girdiği an itibariyle hem tamamlanan hem de henüz gerçekleşmemiş
                        olan bahis oyunlarına birikmiş kazancıyla çoklu kombin bahis yapmışsa eğer
                        Limanbet bu gibi durumlarda, bahis kuponundan henüz daha gerçekleşmemiş
                        oyunları çıkarttıktan sonra tamamlanmış oyunların sonuçlarına göre
                        oranlarını sırayla yeniden hesaplar. Bahsedilen yeni hesaplama işleminden
                        sonra, bir müşteri pozitif bir sonuca sahip olduğu durumlarda, Hükümlerin
                        6.ıncı bölümündeki 'Ödemeler' ve 'Kazançlar'a’ uygun olarak ödeme yapılır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.5 Yasalar ya da herhangi bir diğer düzenleyici kural tarafından
                        yasaklanmış bölgelerde web sitesinin erişilebilir olması, müşteri
                        tarafından Limanbet'in söz konusu hizmetlerinin kumar hizmeti sağlama
                        haklılığı olarak yorumlanmamalıdır. Böyle bir erişilebilirlik durumu, bir
                        müşteri tarafından, sitenin oluşturduğu bir hizmet teklifi olarak, veya bu
                        hizmet teklifinin dayatması veya sitenin herhangi bir hizmetinden
                        faydalanma daveti olarak algılanmamalıdır. Bir müşterinin Limanbet
                        hizmetlerinden faydalanmasının bir sonucu olarak meydana gelebilecek
                        herhangi bir kanun veya yönetmelik ihlalinden hiç bir surete
                        Limanbet.sorumlu değildir
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.6 Limanbet, yalnızca on sekiz (18) yaşını doldurmuş veya kumar ya da
                        bahis oyunları oynama faaliyetlerinin kendi yetki alanları içerisinde
                        geçerli olan kanuna göre yasal yaştaki müşterileri kabul etmektedir. Yasaya
                        aykırı olan oyuncuların hesapları kapatılır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.7 Herhangi bir sınırlama olmaksızın doğru kayıt bilgilerinizi, doğum
                        tarihiniz, ikamet ettiğiniz ülkeniz, geçerli adresiniz, telefon ve kimlik
                        bilgileriniz dahil olmak üzere vermeyi kabul ediyorsunuz. Bu tür
                        ayrıntılardaki değişiklikleri bize bildirmeyi kabul ediyorsunuz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.8 Müşteri hesaplarının 30 ay kullanılmadığı durumlarda veya müşterinin
                        nerede olduğu bilinmediğinde, Limanbet hesap bakiyesini iptal etme hakkını
                        saklı tutar. Bu koşullar altında hesapları iptal etme yetkisi bulunan
                        makama hiçbir surette başvuru yapılamaz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.9 Çalışanların, hizmet sunucuların eski çalışanlarının ve/veya bağlı
                        şirketlerin elemanlarının bahis hesaplarını açmalarına izin verilmemektedir
                        ve Limanbet hizmetlerini ve promosyonlarını kendilerine avantaj sağlayarak
                        kullanamazlar. Aynı kurallar, yukarıda belirtilen şahısların aile üyeleri
                        için de geçerlidir. Bu kuralın ihlal edilmesi hesabın kalıcı olarak
                        kapatılmasına ve sözkonusu hesapların dolandırıcılık olarak
                        değerlendirilmesine neden olacaktır. Bu gibi faaliyetlerden doğan herhangi
                        bir kazanç, hesap sahibinin feshi gibi kabul edilecek ve sadece yatırılan
                        tutar hesap sahibine iade edecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        2.10 Limanbet, herhangi bir Şirket personeline yönelik hakaret içeren,
                        küfür, müstehcen, ırkçı, cinsiyet ayrımcılığı, ayrımcılık veya başka
                        şekillerde saldırgan olan herhangi bir dili kabul etmez ve bu tür bir
                        olayın gerçekleşmesi durumunda herhangi bir uyarı yapmadan hesapları
                        kapatma hakkını saklı tutar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3. KİŞİSEL BAHİS OYUNLARI HESABINIZ
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.1 Hesabınızdaki ad, sizin gerçek, yasal adınız ve kimliğinizle
                        eşleşmelidir. Finansal işlemleriniz (hesap finansman seçenekleriniz),
                        hesabınızı finanse ettiğiniz veya hesabınızdan para çektiğiniz kredi kartı
                        veya diğer ödeme hesaplarının adıyla eşleşmelidir. Bahis oyunları ve para
                        yatırma hesaplarınız arasındaki ad ayrıntılarında tesbit edilen herhangi
                        bir tutarsızlık, Hükümler’in ihlali olarak kabul edilecek ve bu durumda
                        hesap bakiyeniz geçici olarak askıya alınacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.2 Müşterilerimizi Tanıyalım programımız çerçevesinde, para yatıran ve
                        çeken tüm müşterilerin, gerektiği herhangi bir zamanda, kimlik kanıtı,
                        adres kanıtı, ve ödeme kimliği kanıtı, ibraz etmeleri gerekir. Kimliğinizi
                        doğrulamak için, herhangi bir zaman, geçerli bir pasaport / kimlik kartı /
                        sürüş ehliyeti ve / veya kimlik ispatı için tatmin edici belgeler dahil
                        ancak bunlarla sınırlı olmayan; yine uygun adres kanıtı, üç aydan eski
                        olmayan yeni bir kamu hizmet faturası dahil ancak bunlarla sınırlı olmayan
                        tatmin edici bir adres belgesi talep etme hakkımızı saklı tutuyoruz.
                        Gerekli incelemeler makul zaman çerçevesinde yapılacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.3 Kara Para Aklamayla Mücadele ve Terörizm Finansmanının Önlenmesiyle
                        ilgili 2006 Kanun ve sistemin doğruluğu ve bütünlüğü bağlamında yüksek bir
                        güvenlik seviyesini korumak ve Limanbet Hizmet kullanımınızı doğrulamak
                        için, her hangi bir zaman kimliğinizi, yaşınızı ve / veya bize sağladığınız
                        kayıt verilerini (bir 'Güvenlik İncelemesi') bağlamında doğrulama hakkımızı
                        saklı tutuyoruz. Bunlar sizin Limanbet’nin sözleşmelerine ve koşullarına
                        uymanız ve Limanbet koşullarının ve şartlarının ve bağlantılı herhangi
                        yasanın ihlal edilme potansiyeline karşı mali işlemlerinizi Hizmetler
                        aracılığıyla gerçekleştirmeniz dahil ancak bunlarla sınırlı olmayan şekilde
                        olabilir. Bize ve acentelerimize hakkınızda gereken ilgili herhangi
                        soruşturmayı yapmamız için, ve bize verdiğiniz bilgilerin geçerliliğini
                        sağlamak için bu Sözleşmeler uyarınca, herhangi bir üçüncü şahsa bilgileri
                        göndermek; örneğin üçüncü tarafların veri tabanlarına karşı bir kredi
                        raporu ve / veya benzer belge talebinde bulunarak bilgilerinizi doğrulamak
                        için bizi yetkilendiriyorsunuz. Ve / veya üçüncü şahıs veritabanlarına
                        karşı bilgiyi doğrular. Buna ek olarak, bu Güvenlik İncelemelerini
                        kolaylaştırmak için, bizlere, sınırsız takdirde talep ettiğimiz an bilgi
                        veya belgeler sunmayı kabul etmektesiniz. Zaman zaman herhangi bir İnceleme
                        işlemi yaptığımız esnada, hesabınızdan para çekme ve / veya Limanbet
                        Hizmetlerinin tamamına veya belirli bölümlerine erişiminizi
                        kısıtlayabiliriz. Düzenlemeler, güvenlik veya diğer iş nedenlerinden dolayı
                        İnceleme işlemlerini zaman zaman tekrarlayabileceğimizi lütfen unutmayın.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.4 Kimliğiniz hakkında yanlış veya yanıltıcı bilgi vermek Kara Para
                        Aklamayla Mücadele ve Terörizm Finansmanının Önlenmesiyle ilgili 2006 Kanun
                        uyarınca suçtur. Sonuç olarak, özel durumlarda, ilk verilen belgelerin
                        yetersiz olduğu, sahte olduğu, İnternet üzerinden yasa dışı işlemler yapmak
                        için üçüncü taraflardan alındığı düşünüldüğü durumlarda, verilen bilgilerin
                        sadece ülkenin yerel dilinde (İngilizce hariç) olduğu durumlarda, hukuki
                        belgelerin resmi çevirilerini talep etmek de dahil ancak bunlarla sınırlı
                        olmamak üzere, sizinle iletişime geçerek sizden daha fazla bilgi talep
                        edebilir veya bilgiyi uluslararası kabul görmüş biçimde sunmanızı,
                        isteyebiliriz. İncelemeyi geçememeniz durumunda, hesabınızın kalıcı olarak
                        kapatılmasına ve hesabın ödenmemiş bakiyesinin askıya alınmasına neden
                        olabilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.5 Müşteriler, belge sunmayı reddederse, hiçbir belge sunmazsa veya
                        kriterlere uymayan (sahte, değiştirilmiş, güvenlik kontrolleri başarısız
                        gibi) belgeler sunarlarsa Limanbet bu gibi durumlarda oyuncuların
                        hesaplarını derhal kapatma ve hesap bakiyelerini iptal etme hakkını saklı
                        tutar. Böyle durumlarda, müşteriler tüm kazançlara ilişkin haklarını
                        kaybedecekleri gibi bilmelidirler ki depozitoları da geri ödenmeyebilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.6 Doğrulama İncelemeleri kapsamında, yaşınızı, kimliğinizi, adresinizi ve
                        ödeme ayrıntılarınızı doğrulamak için üçüncü taraf kuruluşlardan
                        faydalanabiliriz. Bu süreç, açıklanan ayrıntıları belirli (kamu veya özel)
                        veritabanlarına karşı kontrol etmeyi içerir. Bu sürece girerek, kişisel
                        bilgilerinizi kullanabileceğimizi, kaydettiğimizi ve ifşa edebileceğimizi
                        kabul etmiş oluyorsunuz ve bu veriler bizim veya onlar tarafından
                        kaydedilmiş olabilir. Güvenliğiniz için, bizimle yaptığınız tüm telefon
                        görüşmeleri kaydedilebilir ve denetlenebilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.7 Limanbet, sitenin Servislerini web tabanlı versiyonu da dahil olmak
                        ancak bununla sınırlı olmamak üzere kullanmanızla bağlantılı olarak birden
                        (1) fazla hesaba kaydolmanıza izin vermemektedir. Birden fazla hesaba
                        kaydolur veya oluşturursanız, Limanbet tarafınızdan tutulan herhangi bir
                        veya tüm hesapları feshetme hakkını saklı tutar. Limanbet, tek bir hesap
                        sahibine ödenebilecek azami tutarı bağlı hesaplara yaymak yoluyla aşmayı
                        amaladığınızı ve bunu:
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        i. birden fazla hesaba kaydolarak ve / veya kullanarak; ve / veya
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        ii. bir veya birden fazla şahısla işbirliği yaparak farklı miktarda
                        Limanbet hesapları kullanarak (farklı bahislerle oynanıp oynatılmadığına,
                        farklı fiyat aralıklarına ya da farklı günlerde olmasına bakılmaksızın,)
                        aynı maç / oyun kombinleri oynandığına inanırsak, şahsi karar verme
                        yetkimizi de kullanarak bu davranıştan kaynaklanan kazançları durdurma
                        hakkımızı saklı tutarız.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        3.8 Limanbet, birden çok hesapla ilgili olarak hileli faaliyet yoluyla
                        yaratılan para veya kazançlara el koyma hakkını saklı tutar. Şirketi
                        dolandırmak amacıyla makul gerekçelere dayanarak birden fazla hesap
                        açıldığına inanırsak eğer, söz konusu dolandırıcılık girişimleriyle ilgili
                        herhangi bir işlemi iptal etme hakkını saklı tutuyoruz. Aynı kişisel
                        bilgilere, banka hesabına, IP adresine ancak bunlarla sınırlı olmayan her
                        türlü hesaplar "Kopyalanmış Hesaplar" olarak kabul edilecektir. Kopyalanmış
                        Hesaplar bizim tarafımızdan derhal kapatılabilir; hesap bakiyeleri sahibi
                        tarafından feshedilmiş sayılacaktır. Böyle bir durumda yatırımlar Limanbet
                        tarafından incelenmeye tabi olacaktır. Belgelerin sahte oluşu veya
                        doladırıcılık faaliyetlerinden dolayı şirketin herhangi bir kayıp yaşaması
                        durumunda, zararın eşit tutarı kadar oyuncunun hesabındaki yatırımdan
                        çekilecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4. LIMANBET HİZMETLERİNDEN YARARLANABİLMEK LE İLGİLİ KULLANIM KOŞULLARI
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.1 Bahislerinizle para kaybedebileceğinizi ve böyle bir kayıptan tamamen
                        siz sorumlu olduğunuzu kabul edersiniz. Hiçbir koşul altında sizin
                        tarafınızdan herhangi bir bahisle kaybedilen miktarların bizden geri
                        alınamayacağını kabul edersiniz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.2 Bulunduğunuz konut veya ikamet yerinizin ve / veya bulunduğunuz
                        bölgenin bahis oynamaya izinli olduğunu doğrulamak sizin
                        sorumluluğunuzdadır ve bizimle bahis oynamanızı yasaklayan bir yargı
                        bölgesinde bulunduğunuzda bizimle bahse girmeyeceğinizi kabul etmektesiniz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.3 Hizmetlerimizi sadece meşru bahis amaçlı kullanmayı taahhüt edersiniz.
                        Özellikle,
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        i. ticari faaliyetlerimizde herhangi bir hasara yol açmayı ya da sebebiyet
                        vermeyi ya da engelleme faaliyettinde bulunmayı amaçlayan veya bizim
                        üzerinde herhangi bir vergi, haciz veya harç toplama yetkisi de dahil olmak
                        üzere ancak bunlarla sınırlı olmayan bir yükümlülük yaratma amacıyla
                        faaliyette bulunmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        ii. bahis yapmanın yasak olduğu bölgelerden herhangi bir spor veya yarış
                        için bahis veya bahislerin oynanmasını destekleyen bilgi aktarımı
                        yapmamayı; ve/veya
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        iii. doğrudan veya dolaylı olarak, üçüncü bir tarafın yasadışı olan
                        herhangi bir bölgedeki bir spor veya yarışma için bahis veya bahislerin
                        oynanmasını destekleyen bilgi aktarımı yapmasını sağlayacak düzenleme
                        yapmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        iv. siteye girmek için kullandığınız bilgisayarın IP adresini herhangi bir
                        şekilde saklamaya çalışmak veya siteye girerken kullandığınız bilgisayarın
                        gerçek IP adresini doğru bir şekilde tespit etmemize engel olmak için
                        girişimde bulunmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        v. kendi kişisel bilgileriniz dışında başka bilgi kullanarak bir bahis
                        hesabına kaydolmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        vi. üçüncü bir şahıs adına hareket etmemeyi;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        vii. yasadışı işlemlerden elde edilen para yatırmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        viii. müşterinin kullanması için yetkilendirilmemiş bir kredi kartı
                        kullanarak para yatırmamayı; para kazanmak planıyla üçüncü tarafla birlikte
                        bu tür bir kredi kartını kullanarak sahtecilik yapmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        ix. kişisel veya üçüncü taraf hesaplarını kullanarak kara para aklama veya
                        diğer yasadışı faaliyetlerde bulunmamayı;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        x. tranfer hesabını başkalarına satmamayı taahhüt edersiniz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.4 Mevcut para aklamayla mücadele kurallarının uyarınca, oyuncu yalnızca
                        Limanbet hesabına Servislerimizi kullanmak ve bahis oyunu oynamak için para
                        yatırabilir. Aynı şekilde, oyuncu Limanbet hesabına yatırılan paraları
                        değil, sadece kazançları çekebilir. Oyun etkinlikleri olmadan para yatıran
                        veya çeken oyuncuların ileriki bir duyuruya kadar fonlarını bloke
                        edilecektir. Limanbet bir finansal kuruluşu değildir ve mevduata faiz
                        vermez. Her halukarda, Limanbet, belirli ülkelerdeki ödeme yöntemlerine ve
                        / veya belirli oyunculara kısıtlamalar uygulamak için sınırsız hakkı saklı
                        tutar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.5 Kara para aklama faaliyetlerini önlemek için makul tüm önlemleri
                        alacağız ve Limanbet bunun gerçekleşmediğinden emin olmak için uluslararası
                        denetimlere bağlıdır. Kara para aklamanın ve terörizmin finansmanının
                        risklerini belirlemek için küresel kara para aklama prosedürleri ve
                        parametreleri yürürlüktedir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.6 Limanbet Hüküm ve Koşullarına ve müşterilerin risk profiline uygun
                        olarak müşteri hareketlerinin meşruiyetini değerlendirmek için müiterinin
                        finansal alışkanlıklarını ve davranışlarını incelemek amacıyla her hesaba
                        yönelik gerekli adımlar atılacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        4.7 Limanbet Hizmetleri, tüm kullanıcıların yalnızca eğlence amacıyla
                        kullanılması içindir. Limanbet eğer eğlence amaçı dışında herhangi bir amaç
                        için kullanıldığından şüphelenirse, hesap, risk yönetimi protokolleri
                        uyarınca Limanbet ticari kararına göre sınırlandırılabilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        5. KULLANICI ADI, ŞİFRE, (LIMANBET'NİN) KİŞİSEL HESAP BİLGİLERİ İLE İLGİLİ
                        İFŞA
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        5.1 Müşteriler en az 6 karakterli sayı ve harf içeren bir parola
                        oluşturmaları önerilir. Müşteriler, kullanıcı adlarına veya diğer yaygın
                        bilgilere benzer bir şifre seçmekten kaçınmalıdır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        5.2 Üyelik kaydı esnasında tarafınızdan seçilen kişisel hesabınızın
                        kullanıcı adı, şifre ve diğer kayıtlı bilgileriniz herhangi bir üçüncü
                        kişiye açıklanmamalıdır. Üçüncü bir tarafın Limanbet dışında herhangi bir
                        yolla Limanbet kişisel hesabınıza erişmesi halinde, paranızın durumundan ve
                        hesabınızda saklanan herhangi bir kişisel bilgiden yalnızca siz
                        sorumlusunuz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        5.3 Kullanıcı adınızı, şifrenizi ve diğer kişisel bilgilerinizi güvenli ve
                        gizli tutmayı ve herhangi bir üçüncü şahsın kullanımına izin vermemeyi
                        kabul edersiniz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        5.4 Kullanıcı adlarının ve güvenlik ayrıntılarının güvenli bir şekilde
                        muhafaza edilmesini sağlamak, müşterilerin kendi sorumluluğudur.
                        Şüphelenilen bir ihlal varsa müşteriler önceki güvenlik bilgilerini iptal
                        edip yeni giriş bilgileri talep etmeleri için gerekli güvenlik tedbirleri
                        almaları gerekir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        5.5 Müşteriler, Limanbet ile oturum açarken veya iletişim kurarken doğru
                        kullanıcı bilgileri sağlamaları gerekmektedir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6. ÖDEMELER
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.1 Limanbet hesabına cep telefonu numarasıyla para aktararak para yatırmak
                        mümkündür. Yeni ödeme yöntemleri eklendikçe bildirimleri anasayfamızda
                        yapılacak ve e-postayla gönderilecektir. Her yeni yatırma yöntemi için
                        Hükümler ve Koşullar buna göre güncellenecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.2 Cepbank işlemleri, hesaptan kayıtlı cep telefonu numarasına
                        gönderilerek yapılır. kayıtlı cep telefonundan hesaba gönderilerk yapılır.
                        Bu, para göndermenin hızlı ve güvenli bir yoludur ve mevduat sayfasında
                        bulunan sizin belirlediğiniz banka aracılığıyla yapılabilir. Bu işlem
                        hakkında ayrıntılı bilgi, seçilen bankanızın ilgili mevduat sayfasında
                        bulunur.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.3 Para yatırma talebi yapıldıktan ve form tamamen doldurulduktan sonra,
                        paranın Limanbet hesaplarına ulaşması 15 dakika ila 2 saat alır. Bu süreyi
                        aşan herhangi bir gecikme Limanbet müşteri desteğine bildirilmelidir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.4 Oyunculaın sadece kişisel bilgilerini ve kişisel banka hesaplarını
                        kullanmalarna izin verilir. Oyuncular para yatırma formundaki bilgilerin
                        doğru olduğundan emin olmakla yükümlüdürler.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.5 Para yatırma formunda sağlanan oyuncu bilgileri, Limanbet tarafından
                        muhafaza edilen oyuncu verileriyle tamamen aynı olmalıdır. Bir hesaptan
                        para çekme işlemleri ancak hesaba kayıtlı olan kişiye hitaben yapılabilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.6 Oyuncular Limanbet’in para çekme sayfasında bulunan listelenen
                        bankalardan herhangi birinden para çekme talebinde bulunabilirler. Zaman
                        içerisinde Bankaların sayısı artacak ve para çekme yöntemleri eklenecektir.
                        Yeni eklemeler ana sayfamıza dahil olacak ve eklendikçe gerekli bildirimler
                        e-posta yoluyla gönderilecek. Buna bağlı olarak para çekme Hüküm ve
                        Koşulları da güncellenecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.7 Para çekme talebinizde herhangi bir tutarsızlık olmadığı takdirde, para
                        çekme talebiniz 24 saat içinde işleme koyulacaktır. Zaman çerçevesi garanti
                        edilmez ve zaman zaman (hesap ve bilgi doğrulama, resmi tatiller, banka
                        çalışma saatleri gibi sebeplerden dolayı) gecikmeler olabilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.8 Para çekme talimatı verdiğiniz an itibarıyle hesabınıza borç
                        geçirilecektir. Para çekme talepleri her gün yapılabilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.9 Para çekme talebinizle ilgili bir sorun oluşursa, işlem iptal edilir ve
                        para hesabınıza geri yüklenir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.10 Hesabınızda bir bonus miktarı varsa, para çekme talebinde bulunmadan
                        önce bonusun devredilme koşullarını yerine getirmeniz gerekir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.11 Oyuncular, ilk para yatırma miktarlarını tam olarak kullandıktan sonra
                        para çekme talebinde bulunabilirler.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        6.12 Oyuncu para çekme formunda sağladığı bilgileri ile Limanbet tarafından
                        tutulan oyuncunun verileri tamamen aynı olmalıdır. Diğer taraflara yapılan
                        para çekme talepleri dikkate alınmayacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        7. ELEKTRONİK HİZMET SAĞLAYICISI
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        7.1 Limanbet Hizmetlerini kullanabilmek için, bize para göndermeniz ve
                        bizden para almanız gerekebilir. Bu gibi finansal işlemleri
                        gerçekleştirebilmek için üçüncü taraf elektronik ödeme işlemcilerini ve /
                        veya finansal kurumları ('ESP'leri) kullanabiliriz. Bu tür ESP'lere mevduat
                        hesabınıza para yatırıma veya para çekme için işlem yapabilme talimatı
                        verebilmemiz için gerektikçe bize gayrikabil-i rücu izin veriyorsunuz ve
                        platformlarımızdaki ilgili özellikleri kullanarak sunduğunuz talebiniz
                        doğrultusunda gayrikabil-i rücu olarak sizin adınıza talimat verme izni
                        veriyorsunuz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        7.2 İlgili tüm ESP’lerin öngördüğü düzenlemelere uymayı kabul ediyorsunuz.
                        Bu Anlaşmalar ve ESP düzenlemeleri arasında uyumsuzluk ve / veya
                        anlaşmazlık olması durumunda, bu Anlaşmalar hüküm sürdürecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8. KAZANANLAR
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.1 Bahis bürosu hesaplamaları ilk sonuçlara göre netleştirir. Sonraki
                        diskalifiyeler ve iptaller hesaplamaları etkilemez.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.2 Kazançlar tespit edilen oranlarla çarpılır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.3 Bahisler tamamlandıktan sonra kazanan oyuncuların hesaplarına kazanılan
                        miktarlar aktarılır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.4 Müşteriler, hatalı işlemler sonucunda hesaplarına ek para yatırımı
                        yapılmışsa bu bilgiyi Şirkete haber vermekle yükümlüdürler. Aksi takdirde,
                        bu işlemle ilişkili olan kazançların tamamı iptal edilerek kazanım miktarı
                        Limanbet şirketinin hesabına çevrilecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.5 hesabının daha önce kapatılmış bir bahis tekrar hesaplandıktan sonra
                        Kullanıcının hesabı sıfır bakiyesinin altına düşmesi durumunda, oyuncu
                        hesap bakiyesini sıfıra veya üstüne getirmek için yatırım yapmalıdır. Bu
                        gerçekleşinceye kadar şirket hesapları engeller.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.6 Müşterinin para çekme işlemi için kullanacağı hesap müşterinin kendi
                        adına olmalıdır. Aksi halde para çekme talimatları dikkate alınmayacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        8.7 Oyuncu, para yatırmak için kullanılan ödeme yöntemine iptal veya geri
                        ödeme talebinde bulunmayacağını beyan ve kabul eder. Para yatırma işleminin
                        kullanıcıya geri ödenmesi veya iade edilmesi durumunda şirket, uygun
                        olmayan yatırımlarda kullanılan hesaplardan giderler de dahil olmak üzere
                        tam ödeme almak için harekete geçecektir. Hesabın, oyuncu hesabına bahis
                        faaliyetleri dışındaki herhangi bir uygunsuz işlem için aktarıldığı tespit
                        edilmesi durumunda, şirket (hesabın geçici olarak askıya alınop almadığına
                        bakılmaksızın) masraflar için müşteriden ek ücret talep edebilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        9. CANLI BAHİS
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        9.1 Canlı bir etkinlikte sergilenen istatistikler (Skor, saat vb. gibi)
                        yalnızca genel bilgi içindir. Doğruluk garantisi yoktur ve bahis oynarken
                        dikkate alınmamalıdırlar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        9.2 Paraları yatırılan bahisler bekleme modunda tutulacak ve sonra kabul
                        edilecek veya iptal edilecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        9.3 Bahisler bekleme modundayken piyasada önemli bir değişiklik meydana
                        gelmişse iptal edileceklerdir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        9.4 Şirket, önceden bildirimde bulunmaksızın herhangi bir piyasaya yapılan
                        bahisleri askıya alma hakkını saklı tutar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        9.5 Şirket, bahislerin sonuçlar yayınlandıktan sonra yapıldığına dair makul
                        bir şüphesi olduğuna inanırsa veya teknik arıza sırasında yanlış oranla
                        yapılan bahis oyuncuya haksız avantaj elde etmesine neden olmuşsa şirket,
                        bu şartlar altında bahisleri iptal etme hakkını saklı tutar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        10. GİZLİLİK
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        10.1 Yasal olarak, Limanbet Web sitesini kullanımınız sırasında sizden
                        toplanan kişisel bilgilerinizin ne şekilde kullandığımızı belirleyen veri
                        koruma koşullarına uymamız gerekmektedir. Dolayısıyla, kişisel
                        bilgilerinizi kullanma biçimimizle ilgili yükümlülüklerimizi çok ciddiye
                        alıyoruz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        10.2 Bize bilgi vererek, Kişisel Bilgilerinizi Şartlar'da belirtilen
                        amaçlar doğrultusunda işleme koymamız için, Limanbet Web sitesini
                        çalıştırmak veya yasal ya da düzenleyici yükümlülüklere uymak için izin
                        vermiş olursunuz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        10.3 Şirket politikası gereği, hiçbir kişisel bilginin, bu bilgiye erişim
                        ihtiyacı olan hizmet sunmakla yükümlü olanlar dışında herhangi üçüncü
                        tarafla paylaşılamaz.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        10.4 Sizden aldığımız bilgilerin doğru kayıtlarını tutmak için bize
                        gönderdiğiniz herhangi bir iletişim kopyasını (herhangi bir e-postanın
                        kopyaları da dahil olmak üzere) alacağız.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        11. LIMANBET TANITIMLARI VE TALEP EDİLMEMİŞ E-POSTA POLİTİKASI
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        11.1 Bir oyuncu e-posta adresini Limanbet’ye emanet ederse aksini
                        belirtilmedikçe, Limanbet’nin oyuncunun merak ve ilgisini çekebileceğini
                        düşündüğü ürün, hizmet ve özel teklif bildirimlerini e-posta yolu ile
                        almayı açıkça kabul eder. Bu tür abonelik, herhangi bir zamanda oyuncu
                        tarafından iptal edilebilir. Oyuncu e-posta adresine gelen ürün
                        bildirimlerini iptal etmek istiyorsa, Limanbet’in iletişim e-posta adresine
                        gönderilen bir e-postanın referans satırındaki "UNSUBSCRIBE" sözcüğüyle
                        birlikte gönderilmesinden üç gün içinde posta listesinden silinir. .
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        11.2 Tüm bonus ve promosyon teklifleri, iletilirken mevcut olan şartlara ve
                        koşullara tabidir. Prensip olarak, tüm bonuslar ve teklifler yalnızca
                        promosyonel bildiriminin alıcısına yöneliktir ve öngörülen bir zaman dilimi
                        içerisinde yalnızca bir kez kullanılabilir. Promosyon teklifleri paraya
                        çevrilemez, ancak belirli bonus koşullarına tabi kalmaya devam eder.
                        Limanbet, dolandırıcılık ve hile yoluyla bonus ve promosyon ve bonuslardan
                        elde edilen tüm kazanımları sınırsız olarak oyuncudan geri alma hakkını
                        saklı tutar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        11.3 Birkaç kez kayıt yapıp, sahte hesap açan veya bonus tekliflerinden
                        haksız avantaj elde etmek için front men kullanan birlikte hareket eden
                        oyuncu grupları, veya ortaklık kurmuş ya da bireysel oyuncu olarak hareket
                        edenlerin tespit edilmeleri halinde Limanbet bonus tutarlarına, bu bonus
                        teklifleriyle yapılan kazanımları iptal etme ve hesapları kapatma hakkını
                        saklı tutar. Eğlence amaçlı olmayan oyuncular ve bonus promosyonlarını
                        kötüye kullanmaya çalışanlar promosyonlardan sınırlandırılır. Limanbet,
                        herhangi bir bonus teklifini herhangi bir zamanda feshetme veya değiştirme
                        hakkını saklı tutar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        12. DOLANDIRICILIK FAALİYETLERİ, YASAKLANMIŞ İŞLEMLER VE PARA YATIRMA
                        TEYİTLERİ
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        12.1 Uygunsuz oyun oynamaya ve dolandırıcılık faaliyetlerine karşı sıfır
                        tolerans politikamız vardır. Bu faaliyetler arasında oyunu manipüle etme
                        veya ödemede hile yapma, veya çoklu döviz hizmetlerini manipüle etme dahil
                        ancak bunlarla sınırlı olmayan, çalıntı kredi kartlarının kullanımı veya
                        diğer dolandırıcılık faaliyetleri (örneğin, ödeme iadesi veya ödeme iptali)
                        veya yasaklanmış işlem (örn. para aklama) ya da banka veya ESP'nin
                        işlemlerinizi yürütmemesi dahil ancak bunlarla sınırlı olmayan
                        faaliyetlerdir. Bu tür sahtekarlık faaliyetleri hesabın kapatılmasına neden
                        olacaktır. Bu faaliyetlerden doğan herhangi bir kazanç iptal edilecek ve
                        yatırılan tutar Limanbet tarafından incelenecek ve hesap sahibine iade
                        edilemeyecektir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        12.2 Tamamen kendi takdirimize bağlı olarak, bizi ve / veya Grubu veya
                        Limanbet Hizmetlerini kullanan herhangi bir başka üyeyi aldatığınız veya
                        kandırmaya kalkıştığınız tespit edilirse, hesabınızı askıya alma ve / veya
                        kapatma hakkını saklı tutar ve uğranılan zararı geri almak için yasal olan
                        aşağıdakiler dahil herhangi bir yöntemi kullanarak ancak bunlarla sınırlı
                        olmayan:
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        i. tarafınızdan ödenecek tutarı hesabınızdan çekme;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        ii. üçüncü parti tahsilat kurumlarına borçun tahsilatı için talimat verme.
                        Bu kredi derecelendirmenizi olumsuz yönde etkileyebilir ve kişisel
                        bilgilerinizi (kimliğiniz dahil) uygun ajanslarla paylaşmamızı
                        gerektirebilir.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        13. HAKKIN YİTİRİLMESİ VE HESAP KAPANIŞI
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        13.1 Eğer:
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        i. bu Anlaşmalardan herhangi birini ihlal ettiyseniz;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        ii. sahtekarlık, gizli anlaşma (ödeme iadesi ile ilgili olanlar da dahil
                        olmak üzere) veya yasadışı ya da uygunsuz (çoklu para birimini tesislerinin
                        herhangi bir manipülasyonu dahil ancak bununla sınırlı olmayan)
                        faaliyetlerde bulunmak amacıyla Hizmetleri kullandığınız veya bunları
                        kullanmaya çalıştığınızı fark edersek;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        iii. diğer çevrimiçi oyun sitelerinde veya hizmetlerde oynadığınızı ve
                        sahtekarlık, gizli paylaşım (ödeme iadesi ile ilgili olanlar da dahil olmak
                        üzere) veya yasadışı ya da uygunsuz faaliyetlerde bulunduğunuzu fark
                        edersek;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        iv. hesabınızla yaptığınız tüm satın alma işlemleri veya para
                        yatırımlarınız için ‘ödeme iadesi' talebinde bulunduysanız veya satın alma
                        işlemlerini reddettiyseniz;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        v. iflas ederseniz veya dünyanın herhangi bir yerinde buna eşdeğer işlemler
                        gerçekleşirse;
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        vi. ilgili mahkemeler tarafından uluslararası veya yerel para aklama
                        kurallarını ihlal ettiğiniz kanıtlanmış ve yasalar göre karara bağlanmışsa:
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        Tamamen kendi sınırsız takdirimize bağlı olarak, hesabınızla ilgili, veya
                        herhangi bir ESP hesabınızla ilgili (bu terimin madde 7.1 ve 7.2'de
                        tanımlandığı gibi), diğer sitelere ve / veya kumarhaneler ve / veya bize
                        ait veya adımıza işletilen hizmetleri ve oyun hizmetlerini kullanmanız
                        durumunda veya ortak oyun/masa platformuna sahip herhangi hizmet ile ilgili
                        anlaşmaları feshetmek hesap bakiyenizi tevkif etmek, hesabınızı askıya
                        almak ve bu gibi durumlardan kurtulmak için etkilenen ödemelerin,
                        bonusların ve kazançların tutarını bu hesaplardan geri alma hakkımızı saklı
                        tutarız.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        14. TÜM ANLAŞMA, DEĞİŞTİRME VE DEĞİŞİKLİKLER
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        14.1 Tarafımızdan değiştirilen ve / veya değişiklik yapılan bu Anlaşmaları
                        tam olarak anlıyor ve onlara bağlı kalmayı kabul ediyorsunuz. Bu
                        Anlaşmaları, yeni şartları önceden bildirmeksizin istediğimiz zaman
                        değiştirebiliriz, ancak tüm yeni Hükümler ve Koşullar, Limanbet’nin ilgili
                        sayfasında veya siteye eriştiğiniz herhangi bir konumda yayınlanacak ve /
                        veya değiştirilecektir. Yapılan tüm değişiklikler, yayınlandıktan on beş
                        (15) gün içerisinde yürürlüğe girer. Herhangi bir değişiklik sizin için
                        kabul edilemez ise, Hesabınızı kapatarak Limanbet ile ilgili Anlaşmanızı
                        feshedebilirsiniz. Limanbet ile sizin aranızdaki Hükümler ve Koşulların
                        veya Anlaşmaların değiştirilmesinden sonra ve / veya değişilliklerin
                        yürürlüğe girdikten sonra, Hizmetler'i kullanmaya devam etmeniz halinde
                        değişikliklerin sizin tarafınızdan kabul edildiği yönünde anlaşılacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        14.2 Hizmetler'e her eriştiğinizde, bu Anlaşmaları ve değişiklikleri gözden
                        geçirmek tamamen kendi sorumluluğunuzdadır. Değiştirilen herhangi bir
                        Anlaşma (ve burada adı geçen belgeler), Siz ve Bizim aramızdaki tam ve
                        nihayi Anlaşmayı temsil eder ve Siz ve Bizim aramızdaki tüm önceki
                        Anlaşmaları geçersiz kılar.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        15. MUHTELİF
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        15.1 Limanbet Hizmetlerinin bu Hükümler ve Koşulları ile Limanbet
                        Hizmetlerinde bahsedilen oyun kuralları veya diğer belgeler arasında
                        çelişki olması durumunda, Limanbet Hizmetlerinin bu Hüküm ve Koşulları
                        geçerli olacaktır.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        15.2 BU ANLAŞMALAR BAŞKA BİR DİLE TERCÜME EDİLDİYSE, ÇEVİRİ DİLİ VE
                        İNGİLİZCE DİLİ VERSİYONU ARASINDA HERHANGİ BİR ÇATIŞMADA DURUMUNDA
                        İNGİLİZCE VERSİYONU GEÇERLİ OLACAKTIR.
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                        <span style="color: rgb(255, 255, 255);"><br>
                        </span>
                     </div>
                     <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                        15.3 LÜTFEN BU HÜKÜM VE KOŞULLARI ÇIKTI ALARAK BAŞVURABİLECEĞİNİZ BİLGİLER
                        OLARAK SAKLAYINIZ. AYRICA, AKTİVİTELERİNİZE UYGUN OLARAK TÜM İŞLEM
                        MAKBUZLARINIZI VE OYUN KURALLARINI DA ÇIKTI ALARAK SAKLAMANIZI ÖNERİRİZ.
                        </span>
                     </div>
                  </div>
                  <div></div>
                  <div></div>
                  <!----><!---->
               </app-static-inner-content>
            </div>
         </div>
         <div id="checkOurTermsAndConditionsModal" materialize="modal" class="modal pad-10" style="z-index: 1051;">
            <div class="modal-close-button right"><a><i class="fa fa-times"></i></a></div>
            <div class="mdl-hdr">
               <div class="header-content">
                  <h3> Dikkat </h3>
               </div>
            </div>
            <div class="modal-content"><span></span></div>
            <a class="btn primary-color right">Kapat</a>
         </div>
         <div id="privacyPolicyModal" materialize="modal" class="modal" style="z-index: 1053;">
            <div class="mdl-hdr">
               <div class="header-content">
                  <div class="modal-close-button"><a><i class="fa fa-times"></i></a></div>
               </div>
            </div>
            <div class="modal-content">
               <app-static-inner-content contentcode="about-us-privacy-policy">
                  <!---->
               </app-static-inner-content>
            </div>
         </div>
      </app-signup>
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
<script>
   function step1(){
      $('#step-ACCOUNT').addClass('hidden');
      $('#step-PERSONAL').removeClass('hidden');
      $('#fgj1').removeClass('active');
      $('#fgj2').addClass('active');


   }
   function step2(){
      $('#step-PERSONAL').addClass('hidden');
      $('#step-confirmation').removeClass('hidden');
      $('#fgj2').removeClass('active');
     
      $('#fgj3').addClass('active');
}
function backstep1(){
      $('#step-ACCOUNT').removeClass('hidden');
      $('#step-PERSONAL').addClass('hidden');
      $('#fgj1').addClass('active');
      $('#fgj2').removeClass('active');


   }
   function backstep2(){
      $('#step-PERSONAL').removeClass('hidden');
      $('#step-confirmation').addClass('hidden');
      $('#fgj2').addClass('active');
      $('#fgj3').removeClass('active');
}
</script>
<?php }else {?>
    <main>
   <router-outlet></router-outlet>
   <app-authentication class="ng-star-inserted">
      <div class="col s9 rght-cntnt">
         <router-outlet></router-outlet>
         <app-signup class="ng-star-inserted">
            <div class="authntctn-cntr signup ng-star-inserted">
               <div class="register-page container">
                  <!---->
                  <div class="row">
                     <div class="col s12">
                        <app-static-inner-content contentcode="signupTop">
                           <div extroutelink="" id="signupTop" class="ng-star-inserted"><img src="https://cdnliman.b-cdn.net/other/limanregister.png" style="margin-top:10px;"></div>
                           <div class="ng-star-inserted"></div>
                           <div class="ng-star-inserted"></div>
                           <!----><!---->
                        </app-static-inner-content>
                     </div>
                  </div>
                  <div class="row signup-cntr">
                     <!---->
                     <app-notifications>
                        <div>
                           <!---->
                        </div>
                     </app-notifications>
                     <!---->
                     <div class="col s12">
                        <div class="row">
                           <div class="col s12">
                              <h5 class="auth-title">Üye Ol</h5>
                           </div>
                        </div>
                        <!---->
                        <form novalidate="" autocomplete="on" class="ng-untouched ng-pristine ng-valid ng-star-inserted">
                           <div ngmodelgroup="signUpFields" class="row ng-untouched ng-pristine ng-invalid">
                              <!---->
                              <div class="col prsnl-infrmtn s4 ng-star-inserted">
                                 <div class="modul-accordion">
                                    <div class="modul-header"><i class="fa fa-user right"></i><span class="left header-text">Hesap Bilgileri</span></div>
                                    <div class="module-content">
                                       <!----><!---->
                                       <div class="input-field username required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Kullanıcı adı</span><!----><!---->
                                          <div>
                                             <!----><!---->
                                          </div>
                                          <!----><!---->
                                          <div class="cpf-number-loading">
                                             <input debounce="2000" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="username" placeholder="" type="text" required=""><!----><!----><!---->
                                          </div>
                                          <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!---->
                                       <div ng-class="{field.name}" class="input-group align-items-res firstName flex-container ng-star-inserted">
                                          <div class="input-field required">
                                             <span class="field-label required ng-star-inserted">Ad</span><!----><input type="text" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid" id="firstName" placeholder="" required=""><!---->
                                          </div>
                                          <div class="suffix-field ng-star-inserted"><input type="checkbox" id="filled-in-box" checked="checked" class="filled-in ng-untouched ng-pristine ng-valid"><label for="filled-in-box">İkinci adım var</label></div>
                                          <!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       <div class="input-field surname required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Soyad</span><!----><!---->
                                          <div>
                                             <!----><!---->
                                          </div>
                                          <!----><!---->
                                          <div class="cpf-number-loading">
                                             <input debounce="2000" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="surname" placeholder="" type="text" required=""><!----><!----><!---->
                                          </div>
                                          <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       <div class="input-field email required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">E-posta</span><!----><!---->
                                          <div>
                                             <!----><!---->
                                          </div>
                                          <!----><!---->
                                          <div class="cpf-number-loading">
                                             <!----><!----><!---->
                                          </div>
                                          <input debounce="500" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="email" placeholder="" type="email" required="" maxlength="100" pattern="^\s*(([^<>()\[\]\\,`~;:$%^*#№\s@&quot;]{2,})|(&quot;.+&quot;))@(([a-zA-Z0-9^(-?)]+\.)+[a-zA-Z]{2,})\s*$"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       <div class="input-field phone required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Telefon</span><!----><!---->
                                          <div>
                                             <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                                <div class="iti__flag-container">
                                                   <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="Turkey (Türkiye): +90" aria-activedescendant="iti-0__item-tr-preferred">
                                                      <div class="iti__flag iti__tr"></div>
                                                      <div class="iti__selected-dial-code">+90</div>
                                                      <div class="iti__arrow"></div>
                                                   </div>
                                                   <ul class="iti__country-list iti__hide" id="iti-0__country-listbox" role="listbox" aria-label="List of countries">
                                                      <li class="iti__country iti__preferred iti__active" tabindex="-1" id="iti-0__item-tr-preferred" role="option" data-dial-code="90" data-country-code="tr" aria-selected="true">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Turkey (Türkiye)</span><span class="iti__dial-code">+90</span>
                                                      </li>
                                                      <li class="iti__divider" role="separator" aria-disabled="true"></li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-af" role="option" data-dial-code="93" data-country-code="af" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__af"></div>
                                                         </div>
                                                         <span class="iti__country-name">Afghanistan (‫افغانستان‬‎)</span><span class="iti__dial-code">+93</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ax" role="option" data-dial-code="358" data-country-code="ax" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ax"></div>
                                                         </div>
                                                         <span class="iti__country-name">Åland Islands</span><span class="iti__dial-code">+358</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-al" role="option" data-dial-code="355" data-country-code="al" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__al"></div>
                                                         </div>
                                                         <span class="iti__country-name">Albania (Shqipëri)</span><span class="iti__dial-code">+355</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-dz" role="option" data-dial-code="213" data-country-code="dz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__dz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Algeria (‫الجزائر‬‎)</span><span class="iti__dial-code">+213</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-as" role="option" data-dial-code="1" data-country-code="as" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__as"></div>
                                                         </div>
                                                         <span class="iti__country-name">American Samoa</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ad" role="option" data-dial-code="376" data-country-code="ad" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ad"></div>
                                                         </div>
                                                         <span class="iti__country-name">Andorra</span><span class="iti__dial-code">+376</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ao" role="option" data-dial-code="244" data-country-code="ao" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ao"></div>
                                                         </div>
                                                         <span class="iti__country-name">Angola</span><span class="iti__dial-code">+244</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ai" role="option" data-dial-code="1" data-country-code="ai" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ai"></div>
                                                         </div>
                                                         <span class="iti__country-name">Anguilla</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ag" role="option" data-dial-code="1" data-country-code="ag" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ag"></div>
                                                         </div>
                                                         <span class="iti__country-name">Antigua and Barbuda</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ar" role="option" data-dial-code="54" data-country-code="ar" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ar"></div>
                                                         </div>
                                                         <span class="iti__country-name">Argentina</span><span class="iti__dial-code">+54</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-am" role="option" data-dial-code="374" data-country-code="am" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__am"></div>
                                                         </div>
                                                         <span class="iti__country-name">Armenia (Հայաստան)</span><span class="iti__dial-code">+374</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-aw" role="option" data-dial-code="297" data-country-code="aw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__aw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Aruba</span><span class="iti__dial-code">+297</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-at" role="option" data-dial-code="43" data-country-code="at" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__at"></div>
                                                         </div>
                                                         <span class="iti__country-name">Austria (Österreich)</span><span class="iti__dial-code">+43</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-az" role="option" data-dial-code="994" data-country-code="az" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__az"></div>
                                                         </div>
                                                         <span class="iti__country-name">Azerbaijan (Azərbaycan)</span><span class="iti__dial-code">+994</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bs" role="option" data-dial-code="1" data-country-code="bs" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bs"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bahamas</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bh" role="option" data-dial-code="973" data-country-code="bh" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bh"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bahrain (‫البحرين‬‎)</span><span class="iti__dial-code">+973</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bd" role="option" data-dial-code="880" data-country-code="bd" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bd"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bangladesh (বাংলাদেশ)</span><span class="iti__dial-code">+880</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bb" role="option" data-dial-code="1" data-country-code="bb" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bb"></div>
                                                         </div>
                                                         <span class="iti__country-name">Barbados</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-by" role="option" data-dial-code="375" data-country-code="by" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__by"></div>
                                                         </div>
                                                         <span class="iti__country-name">Belarus (Беларусь)</span><span class="iti__dial-code">+375</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-be" role="option" data-dial-code="32" data-country-code="be" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__be"></div>
                                                         </div>
                                                         <span class="iti__country-name">Belgium (België)</span><span class="iti__dial-code">+32</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bz" role="option" data-dial-code="501" data-country-code="bz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Belize</span><span class="iti__dial-code">+501</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bj" role="option" data-dial-code="229" data-country-code="bj" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bj"></div>
                                                         </div>
                                                         <span class="iti__country-name">Benin (Bénin)</span><span class="iti__dial-code">+229</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bm" role="option" data-dial-code="1" data-country-code="bm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bermuda</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bt" role="option" data-dial-code="975" data-country-code="bt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bhutan (འབྲུག)</span><span class="iti__dial-code">+975</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bo" role="option" data-dial-code="591" data-country-code="bo" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bo"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bolivia</span><span class="iti__dial-code">+591</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ba" role="option" data-dial-code="387" data-country-code="ba" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ba"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="iti__dial-code">+387</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bw" role="option" data-dial-code="267" data-country-code="bw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Botswana</span><span class="iti__dial-code">+267</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-br" role="option" data-dial-code="55" data-country-code="br" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__br"></div>
                                                         </div>
                                                         <span class="iti__country-name">Brazil (Brasil)</span><span class="iti__dial-code">+55</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-io" role="option" data-dial-code="246" data-country-code="io" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__io"></div>
                                                         </div>
                                                         <span class="iti__country-name">British Indian Ocean Territory</span><span class="iti__dial-code">+246</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bn" role="option" data-dial-code="673" data-country-code="bn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Brunei</span><span class="iti__dial-code">+673</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bg" role="option" data-dial-code="359" data-country-code="bg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Bulgaria (България)</span><span class="iti__dial-code">+359</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bf" role="option" data-dial-code="226" data-country-code="bf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bf"></div>
                                                         </div>
                                                         <span class="iti__country-name">Burkina Faso</span><span class="iti__dial-code">+226</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bi" role="option" data-dial-code="257" data-country-code="bi" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bi"></div>
                                                         </div>
                                                         <span class="iti__country-name">Burundi (Uburundi)</span><span class="iti__dial-code">+257</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kh" role="option" data-dial-code="855" data-country-code="kh" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kh"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cambodia (កម្ពុជា)</span><span class="iti__dial-code">+855</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cm" role="option" data-dial-code="237" data-country-code="cm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cameroon (Cameroun)</span><span class="iti__dial-code">+237</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ca" role="option" data-dial-code="1" data-country-code="ca" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ca"></div>
                                                         </div>
                                                         <span class="iti__country-name">Canada</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cv" role="option" data-dial-code="238" data-country-code="cv" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cv"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cape Verde (Kabu Verdi)</span><span class="iti__dial-code">+238</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ky" role="option" data-dial-code="1" data-country-code="ky" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ky"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cayman Islands</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cf" role="option" data-dial-code="236" data-country-code="cf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cf"></div>
                                                         </div>
                                                         <span class="iti__country-name">Central African Republic (République centrafricaine)</span><span class="iti__dial-code">+236</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-td" role="option" data-dial-code="235" data-country-code="td" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__td"></div>
                                                         </div>
                                                         <span class="iti__country-name">Chad (Tchad)</span><span class="iti__dial-code">+235</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cl" role="option" data-dial-code="56" data-country-code="cl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Chile</span><span class="iti__dial-code">+56</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cn" role="option" data-dial-code="86" data-country-code="cn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cn"></div>
                                                         </div>
                                                         <span class="iti__country-name">China (中国)</span><span class="iti__dial-code">+86</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cx" role="option" data-dial-code="61" data-country-code="cx" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cx"></div>
                                                         </div>
                                                         <span class="iti__country-name">Christmas Island</span><span class="iti__dial-code">+61</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cc" role="option" data-dial-code="61" data-country-code="cc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cc"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cocos (Keeling) Islands</span><span class="iti__dial-code">+61</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-co" role="option" data-dial-code="57" data-country-code="co" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__co"></div>
                                                         </div>
                                                         <span class="iti__country-name">Colombia</span><span class="iti__dial-code">+57</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-km" role="option" data-dial-code="269" data-country-code="km" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__km"></div>
                                                         </div>
                                                         <span class="iti__country-name">Comoros (‫جزر القمر‬‎)</span><span class="iti__dial-code">+269</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cd" role="option" data-dial-code="243" data-country-code="cd" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cd"></div>
                                                         </div>
                                                         <span class="iti__country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="iti__dial-code">+243</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cg" role="option" data-dial-code="242" data-country-code="cg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="iti__dial-code">+242</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ck" role="option" data-dial-code="682" data-country-code="ck" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ck"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cook Islands</span><span class="iti__dial-code">+682</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cr" role="option" data-dial-code="506" data-country-code="cr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Costa Rica</span><span class="iti__dial-code">+506</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ci" role="option" data-dial-code="225" data-country-code="ci" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ci"></div>
                                                         </div>
                                                         <span class="iti__country-name">Côte d’Ivoire</span><span class="iti__dial-code">+225</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-hr" role="option" data-dial-code="385" data-country-code="hr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__hr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Croatia (Hrvatska)</span><span class="iti__dial-code">+385</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cu" role="option" data-dial-code="53" data-country-code="cu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cuba</span><span class="iti__dial-code">+53</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cw" role="option" data-dial-code="599" data-country-code="cw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Curaçao</span><span class="iti__dial-code">+599</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cy" role="option" data-dial-code="357" data-country-code="cy" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cy"></div>
                                                         </div>
                                                         <span class="iti__country-name">Cyprus (Κύπρος)</span><span class="iti__dial-code">+357</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-cz" role="option" data-dial-code="420" data-country-code="cz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__cz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Czech Republic (Česká republika)</span><span class="iti__dial-code">+420</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-dk" role="option" data-dial-code="45" data-country-code="dk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__dk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Denmark (Danmark)</span><span class="iti__dial-code">+45</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-dj" role="option" data-dial-code="253" data-country-code="dj" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__dj"></div>
                                                         </div>
                                                         <span class="iti__country-name">Djibouti</span><span class="iti__dial-code">+253</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-do" role="option" data-dial-code="1" data-country-code="do" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__do"></div>
                                                         </div>
                                                         <span class="iti__country-name">Dominican Republic (República Dominicana)</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ec" role="option" data-dial-code="593" data-country-code="ec" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ec"></div>
                                                         </div>
                                                         <span class="iti__country-name">Ecuador</span><span class="iti__dial-code">+593</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-eg" role="option" data-dial-code="20" data-country-code="eg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__eg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Egypt (‫مصر‬‎)</span><span class="iti__dial-code">+20</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sv" role="option" data-dial-code="503" data-country-code="sv" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sv"></div>
                                                         </div>
                                                         <span class="iti__country-name">El Salvador</span><span class="iti__dial-code">+503</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gq" role="option" data-dial-code="240" data-country-code="gq" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gq"></div>
                                                         </div>
                                                         <span class="iti__country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="iti__dial-code">+240</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-er" role="option" data-dial-code="291" data-country-code="er" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__er"></div>
                                                         </div>
                                                         <span class="iti__country-name">Eritrea</span><span class="iti__dial-code">+291</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ee" role="option" data-dial-code="372" data-country-code="ee" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ee"></div>
                                                         </div>
                                                         <span class="iti__country-name">Estonia (Eesti)</span><span class="iti__dial-code">+372</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sz" role="option" data-dial-code="268" data-country-code="sz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Eswatini</span><span class="iti__dial-code">+268</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-et" role="option" data-dial-code="251" data-country-code="et" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__et"></div>
                                                         </div>
                                                         <span class="iti__country-name">Ethiopia</span><span class="iti__dial-code">+251</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-fk" role="option" data-dial-code="500" data-country-code="fk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__fk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Falkland Islands (Islas Malvinas)</span><span class="iti__dial-code">+500</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-fo" role="option" data-dial-code="298" data-country-code="fo" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__fo"></div>
                                                         </div>
                                                         <span class="iti__country-name">Faroe Islands (Føroyar)</span><span class="iti__dial-code">+298</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-fj" role="option" data-dial-code="679" data-country-code="fj" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__fj"></div>
                                                         </div>
                                                         <span class="iti__country-name">Fiji</span><span class="iti__dial-code">+679</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-fi" role="option" data-dial-code="358" data-country-code="fi" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__fi"></div>
                                                         </div>
                                                         <span class="iti__country-name">Finland (Suomi)</span><span class="iti__dial-code">+358</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-fr" role="option" data-dial-code="33" data-country-code="fr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__fr"></div>
                                                         </div>
                                                         <span class="iti__country-name">France</span><span class="iti__dial-code">+33</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gf" role="option" data-dial-code="594" data-country-code="gf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gf"></div>
                                                         </div>
                                                         <span class="iti__country-name">French Guiana (Guyane française)</span><span class="iti__dial-code">+594</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pf" role="option" data-dial-code="689" data-country-code="pf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pf"></div>
                                                         </div>
                                                         <span class="iti__country-name">French Polynesia (Polynésie française)</span><span class="iti__dial-code">+689</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ga" role="option" data-dial-code="241" data-country-code="ga" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ga"></div>
                                                         </div>
                                                         <span class="iti__country-name">Gabon</span><span class="iti__dial-code">+241</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gm" role="option" data-dial-code="220" data-country-code="gm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Gambia</span><span class="iti__dial-code">+220</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ge" role="option" data-dial-code="995" data-country-code="ge" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ge"></div>
                                                         </div>
                                                         <span class="iti__country-name">Georgia (საქართველო)</span><span class="iti__dial-code">+995</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-de" role="option" data-dial-code="49" data-country-code="de" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__de"></div>
                                                         </div>
                                                         <span class="iti__country-name">Germany (Deutschland)</span><span class="iti__dial-code">+49</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gh" role="option" data-dial-code="233" data-country-code="gh" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gh"></div>
                                                         </div>
                                                         <span class="iti__country-name">Ghana (Gaana)</span><span class="iti__dial-code">+233</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gi" role="option" data-dial-code="350" data-country-code="gi" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gi"></div>
                                                         </div>
                                                         <span class="iti__country-name">Gibraltar</span><span class="iti__dial-code">+350</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gr" role="option" data-dial-code="30" data-country-code="gr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Greece (Ελλάδα)</span><span class="iti__dial-code">+30</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gl" role="option" data-dial-code="299" data-country-code="gl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Greenland (Kalaallit Nunaat)</span><span class="iti__dial-code">+299</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gd" role="option" data-dial-code="1" data-country-code="gd" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gd"></div>
                                                         </div>
                                                         <span class="iti__country-name">Grenada</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gp" role="option" data-dial-code="590" data-country-code="gp" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gp"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guadeloupe</span><span class="iti__dial-code">+590</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gu" role="option" data-dial-code="1" data-country-code="gu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guam</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gt" role="option" data-dial-code="502" data-country-code="gt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guatemala</span><span class="iti__dial-code">+502</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gg" role="option" data-dial-code="44" data-country-code="gg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guernsey</span><span class="iti__dial-code">+44</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gn" role="option" data-dial-code="224" data-country-code="gn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guinea (Guinée)</span><span class="iti__dial-code">+224</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gw" role="option" data-dial-code="245" data-country-code="gw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guinea-Bissau (Guiné Bissau)</span><span class="iti__dial-code">+245</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-gy" role="option" data-dial-code="592" data-country-code="gy" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__gy"></div>
                                                         </div>
                                                         <span class="iti__country-name">Guyana</span><span class="iti__dial-code">+592</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ht" role="option" data-dial-code="509" data-country-code="ht" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ht"></div>
                                                         </div>
                                                         <span class="iti__country-name">Haiti</span><span class="iti__dial-code">+509</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-hn" role="option" data-dial-code="504" data-country-code="hn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__hn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Honduras</span><span class="iti__dial-code">+504</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-hk" role="option" data-dial-code="852" data-country-code="hk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__hk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Hong Kong (香港)</span><span class="iti__dial-code">+852</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-hu" role="option" data-dial-code="36" data-country-code="hu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__hu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Hungary (Magyarország)</span><span class="iti__dial-code">+36</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-is" role="option" data-dial-code="354" data-country-code="is" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__is"></div>
                                                         </div>
                                                         <span class="iti__country-name">Iceland (Ísland)</span><span class="iti__dial-code">+354</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-in" role="option" data-dial-code="91" data-country-code="in" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__in"></div>
                                                         </div>
                                                         <span class="iti__country-name">India (भारत)</span><span class="iti__dial-code">+91</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-id" role="option" data-dial-code="62" data-country-code="id" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__id"></div>
                                                         </div>
                                                         <span class="iti__country-name">Indonesia</span><span class="iti__dial-code">+62</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ir" role="option" data-dial-code="98" data-country-code="ir" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ir"></div>
                                                         </div>
                                                         <span class="iti__country-name">Iran (‫ایران‬‎)</span><span class="iti__dial-code">+98</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-iq" role="option" data-dial-code="964" data-country-code="iq" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__iq"></div>
                                                         </div>
                                                         <span class="iti__country-name">Iraq (‫العراق‬‎)</span><span class="iti__dial-code">+964</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ie" role="option" data-dial-code="353" data-country-code="ie" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ie"></div>
                                                         </div>
                                                         <span class="iti__country-name">Ireland</span><span class="iti__dial-code">+353</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-im" role="option" data-dial-code="44" data-country-code="im" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__im"></div>
                                                         </div>
                                                         <span class="iti__country-name">Isle of Man</span><span class="iti__dial-code">+44</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-il" role="option" data-dial-code="972" data-country-code="il" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__il"></div>
                                                         </div>
                                                         <span class="iti__country-name">Israel (‫ישראל‬‎)</span><span class="iti__dial-code">+972</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-it" role="option" data-dial-code="39" data-country-code="it" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__it"></div>
                                                         </div>
                                                         <span class="iti__country-name">Italy (Italia)</span><span class="iti__dial-code">+39</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-jm" role="option" data-dial-code="1" data-country-code="jm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__jm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Jamaica</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-jp" role="option" data-dial-code="81" data-country-code="jp" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__jp"></div>
                                                         </div>
                                                         <span class="iti__country-name">Japan (日本)</span><span class="iti__dial-code">+81</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-je" role="option" data-dial-code="44" data-country-code="je" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__je"></div>
                                                         </div>
                                                         <span class="iti__country-name">Jersey</span><span class="iti__dial-code">+44</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-jo" role="option" data-dial-code="962" data-country-code="jo" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__jo"></div>
                                                         </div>
                                                         <span class="iti__country-name">Jordan (‫الأردن‬‎)</span><span class="iti__dial-code">+962</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kz" role="option" data-dial-code="7" data-country-code="kz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Kazakhstan (Казахстан)</span><span class="iti__dial-code">+7</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ke" role="option" data-dial-code="254" data-country-code="ke" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ke"></div>
                                                         </div>
                                                         <span class="iti__country-name">Kenya</span><span class="iti__dial-code">+254</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ki" role="option" data-dial-code="686" data-country-code="ki" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ki"></div>
                                                         </div>
                                                         <span class="iti__country-name">Kiribati</span><span class="iti__dial-code">+686</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-xk" role="option" data-dial-code="383" data-country-code="xk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__xk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Kosovo</span><span class="iti__dial-code">+383</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kw" role="option" data-dial-code="965" data-country-code="kw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Kuwait (‫الكويت‬‎)</span><span class="iti__dial-code">+965</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kg" role="option" data-dial-code="996" data-country-code="kg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Kyrgyzstan (Кыргызстан)</span><span class="iti__dial-code">+996</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-la" role="option" data-dial-code="856" data-country-code="la" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__la"></div>
                                                         </div>
                                                         <span class="iti__country-name">Laos (ລາວ)</span><span class="iti__dial-code">+856</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lv" role="option" data-dial-code="371" data-country-code="lv" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lv"></div>
                                                         </div>
                                                         <span class="iti__country-name">Latvia (Latvija)</span><span class="iti__dial-code">+371</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lb" role="option" data-dial-code="961" data-country-code="lb" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lb"></div>
                                                         </div>
                                                         <span class="iti__country-name">Lebanon (‫لبنان‬‎)</span><span class="iti__dial-code">+961</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ls" role="option" data-dial-code="266" data-country-code="ls" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ls"></div>
                                                         </div>
                                                         <span class="iti__country-name">Lesotho</span><span class="iti__dial-code">+266</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lr" role="option" data-dial-code="231" data-country-code="lr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Liberia</span><span class="iti__dial-code">+231</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ly" role="option" data-dial-code="218" data-country-code="ly" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ly"></div>
                                                         </div>
                                                         <span class="iti__country-name">Libya (‫ليبيا‬‎)</span><span class="iti__dial-code">+218</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-li" role="option" data-dial-code="423" data-country-code="li" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__li"></div>
                                                         </div>
                                                         <span class="iti__country-name">Liechtenstein</span><span class="iti__dial-code">+423</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lt" role="option" data-dial-code="370" data-country-code="lt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Lithuania (Lietuva)</span><span class="iti__dial-code">+370</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lu" role="option" data-dial-code="352" data-country-code="lu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Luxembourg</span><span class="iti__dial-code">+352</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mo" role="option" data-dial-code="853" data-country-code="mo" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mo"></div>
                                                         </div>
                                                         <span class="iti__country-name">Macau (澳門)</span><span class="iti__dial-code">+853</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mk" role="option" data-dial-code="389" data-country-code="mk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Macedonia (FYROM) (Македонија)</span><span class="iti__dial-code">+389</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mg" role="option" data-dial-code="261" data-country-code="mg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Madagascar (Madagasikara)</span><span class="iti__dial-code">+261</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mw" role="option" data-dial-code="265" data-country-code="mw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Malawi</span><span class="iti__dial-code">+265</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-my" role="option" data-dial-code="60" data-country-code="my" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__my"></div>
                                                         </div>
                                                         <span class="iti__country-name">Malaysia</span><span class="iti__dial-code">+60</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mv" role="option" data-dial-code="960" data-country-code="mv" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mv"></div>
                                                         </div>
                                                         <span class="iti__country-name">Maldives</span><span class="iti__dial-code">+960</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ml" role="option" data-dial-code="223" data-country-code="ml" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ml"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mali</span><span class="iti__dial-code">+223</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mt" role="option" data-dial-code="356" data-country-code="mt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Malta</span><span class="iti__dial-code">+356</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mh" role="option" data-dial-code="692" data-country-code="mh" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mh"></div>
                                                         </div>
                                                         <span class="iti__country-name">Marshall Islands</span><span class="iti__dial-code">+692</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mq" role="option" data-dial-code="596" data-country-code="mq" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mq"></div>
                                                         </div>
                                                         <span class="iti__country-name">Martinique</span><span class="iti__dial-code">+596</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mr" role="option" data-dial-code="222" data-country-code="mr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mauritania (‫موريتانيا‬‎)</span><span class="iti__dial-code">+222</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mu" role="option" data-dial-code="230" data-country-code="mu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mauritius (Moris)</span><span class="iti__dial-code">+230</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-yt" role="option" data-dial-code="262" data-country-code="yt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__yt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mayotte</span><span class="iti__dial-code">+262</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mx" role="option" data-dial-code="52" data-country-code="mx" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mx"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mexico (México)</span><span class="iti__dial-code">+52</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-fm" role="option" data-dial-code="691" data-country-code="fm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__fm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Micronesia</span><span class="iti__dial-code">+691</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-md" role="option" data-dial-code="373" data-country-code="md" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__md"></div>
                                                         </div>
                                                         <span class="iti__country-name">Moldova (Republica Moldova)</span><span class="iti__dial-code">+373</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mc" role="option" data-dial-code="377" data-country-code="mc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mc"></div>
                                                         </div>
                                                         <span class="iti__country-name">Monaco</span><span class="iti__dial-code">+377</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mn" role="option" data-dial-code="976" data-country-code="mn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mongolia (Монгол)</span><span class="iti__dial-code">+976</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-me" role="option" data-dial-code="382" data-country-code="me" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__me"></div>
                                                         </div>
                                                         <span class="iti__country-name">Montenegro (Crna Gora)</span><span class="iti__dial-code">+382</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ms" role="option" data-dial-code="1" data-country-code="ms" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ms"></div>
                                                         </div>
                                                         <span class="iti__country-name">Montserrat</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ma" role="option" data-dial-code="212" data-country-code="ma" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ma"></div>
                                                         </div>
                                                         <span class="iti__country-name">Morocco (‫المغرب‬‎)</span><span class="iti__dial-code">+212</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mz" role="option" data-dial-code="258" data-country-code="mz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Mozambique (Moçambique)</span><span class="iti__dial-code">+258</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mm" role="option" data-dial-code="95" data-country-code="mm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Myanmar (Burma) (မြန်မာ)</span><span class="iti__dial-code">+95</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-na" role="option" data-dial-code="264" data-country-code="na" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__na"></div>
                                                         </div>
                                                         <span class="iti__country-name">Namibia (Namibië)</span><span class="iti__dial-code">+264</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-nr" role="option" data-dial-code="674" data-country-code="nr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__nr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Nauru</span><span class="iti__dial-code">+674</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-np" role="option" data-dial-code="977" data-country-code="np" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__np"></div>
                                                         </div>
                                                         <span class="iti__country-name">Nepal (नेपाल)</span><span class="iti__dial-code">+977</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-nl" role="option" data-dial-code="31" data-country-code="nl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__nl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Netherlands (Nederland)</span><span class="iti__dial-code">+31</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-nc" role="option" data-dial-code="687" data-country-code="nc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__nc"></div>
                                                         </div>
                                                         <span class="iti__country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="iti__dial-code">+687</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-nz" role="option" data-dial-code="64" data-country-code="nz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__nz"></div>
                                                         </div>
                                                         <span class="iti__country-name">New Zealand</span><span class="iti__dial-code">+64</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ni" role="option" data-dial-code="505" data-country-code="ni" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ni"></div>
                                                         </div>
                                                         <span class="iti__country-name">Nicaragua</span><span class="iti__dial-code">+505</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ne" role="option" data-dial-code="227" data-country-code="ne" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ne"></div>
                                                         </div>
                                                         <span class="iti__country-name">Niger (Nijar)</span><span class="iti__dial-code">+227</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ng" role="option" data-dial-code="234" data-country-code="ng" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ng"></div>
                                                         </div>
                                                         <span class="iti__country-name">Nigeria</span><span class="iti__dial-code">+234</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-nu" role="option" data-dial-code="683" data-country-code="nu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__nu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Niue</span><span class="iti__dial-code">+683</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-nf" role="option" data-dial-code="672" data-country-code="nf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__nf"></div>
                                                         </div>
                                                         <span class="iti__country-name">Norfolk Island</span><span class="iti__dial-code">+672</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kp" role="option" data-dial-code="850" data-country-code="kp" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kp"></div>
                                                         </div>
                                                         <span class="iti__country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="iti__dial-code">+850</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mp" role="option" data-dial-code="1" data-country-code="mp" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mp"></div>
                                                         </div>
                                                         <span class="iti__country-name">Northern Mariana Islands</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-no" role="option" data-dial-code="47" data-country-code="no" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__no"></div>
                                                         </div>
                                                         <span class="iti__country-name">Norway (Norge)</span><span class="iti__dial-code">+47</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-om" role="option" data-dial-code="968" data-country-code="om" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__om"></div>
                                                         </div>
                                                         <span class="iti__country-name">Oman (‫عُمان‬‎)</span><span class="iti__dial-code">+968</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pk" role="option" data-dial-code="92" data-country-code="pk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Pakistan (‫پاکستان‬‎)</span><span class="iti__dial-code">+92</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pw" role="option" data-dial-code="680" data-country-code="pw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Palau</span><span class="iti__dial-code">+680</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ps" role="option" data-dial-code="970" data-country-code="ps" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ps"></div>
                                                         </div>
                                                         <span class="iti__country-name">Palestine (‫فلسطين‬‎)</span><span class="iti__dial-code">+970</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pa" role="option" data-dial-code="507" data-country-code="pa" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pa"></div>
                                                         </div>
                                                         <span class="iti__country-name">Panama (Panamá)</span><span class="iti__dial-code">+507</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pg" role="option" data-dial-code="675" data-country-code="pg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Papua New Guinea</span><span class="iti__dial-code">+675</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-py" role="option" data-dial-code="595" data-country-code="py" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__py"></div>
                                                         </div>
                                                         <span class="iti__country-name">Paraguay</span><span class="iti__dial-code">+595</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pe" role="option" data-dial-code="51" data-country-code="pe" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pe"></div>
                                                         </div>
                                                         <span class="iti__country-name">Peru (Perú)</span><span class="iti__dial-code">+51</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ph" role="option" data-dial-code="63" data-country-code="ph" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ph"></div>
                                                         </div>
                                                         <span class="iti__country-name">Philippines</span><span class="iti__dial-code">+63</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pl" role="option" data-dial-code="48" data-country-code="pl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Poland (Polska)</span><span class="iti__dial-code">+48</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pt" role="option" data-dial-code="351" data-country-code="pt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Portugal</span><span class="iti__dial-code">+351</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pr" role="option" data-dial-code="1" data-country-code="pr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Puerto Rico</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-qa" role="option" data-dial-code="974" data-country-code="qa" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__qa"></div>
                                                         </div>
                                                         <span class="iti__country-name">Qatar (‫قطر‬‎)</span><span class="iti__dial-code">+974</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-re" role="option" data-dial-code="262" data-country-code="re" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__re"></div>
                                                         </div>
                                                         <span class="iti__country-name">Réunion (La Réunion)</span><span class="iti__dial-code">+262</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ro" role="option" data-dial-code="40" data-country-code="ro" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ro"></div>
                                                         </div>
                                                         <span class="iti__country-name">Romania (România)</span><span class="iti__dial-code">+40</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ru" role="option" data-dial-code="7" data-country-code="ru" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ru"></div>
                                                         </div>
                                                         <span class="iti__country-name">Russia (Россия)</span><span class="iti__dial-code">+7</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-rw" role="option" data-dial-code="250" data-country-code="rw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__rw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Rwanda</span><span class="iti__dial-code">+250</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-bl" role="option" data-dial-code="590" data-country-code="bl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__bl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Barthélemy</span><span class="iti__dial-code">+590</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sh" role="option" data-dial-code="290" data-country-code="sh" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sh"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Helena</span><span class="iti__dial-code">+290</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kn" role="option" data-dial-code="1" data-country-code="kn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Kitts and Nevis</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lc" role="option" data-dial-code="1" data-country-code="lc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lc"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Lucia</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-mf" role="option" data-dial-code="590" data-country-code="mf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__mf"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Martin (Saint-Martin (partie française))</span><span class="iti__dial-code">+590</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-pm" role="option" data-dial-code="508" data-country-code="pm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__pm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="iti__dial-code">+508</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-vc" role="option" data-dial-code="1" data-country-code="vc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__vc"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saint Vincent and the Grenadines</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ws" role="option" data-dial-code="685" data-country-code="ws" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ws"></div>
                                                         </div>
                                                         <span class="iti__country-name">Samoa</span><span class="iti__dial-code">+685</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sm" role="option" data-dial-code="378" data-country-code="sm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sm"></div>
                                                         </div>
                                                         <span class="iti__country-name">San Marino</span><span class="iti__dial-code">+378</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-st" role="option" data-dial-code="239" data-country-code="st" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__st"></div>
                                                         </div>
                                                         <span class="iti__country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="iti__dial-code">+239</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sa" role="option" data-dial-code="966" data-country-code="sa" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sa"></div>
                                                         </div>
                                                         <span class="iti__country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span><span class="iti__dial-code">+966</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sn" role="option" data-dial-code="221" data-country-code="sn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Senegal (Sénégal)</span><span class="iti__dial-code">+221</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-rs" role="option" data-dial-code="381" data-country-code="rs" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__rs"></div>
                                                         </div>
                                                         <span class="iti__country-name">Serbia (Србија)</span><span class="iti__dial-code">+381</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sc" role="option" data-dial-code="248" data-country-code="sc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sc"></div>
                                                         </div>
                                                         <span class="iti__country-name">Seychelles</span><span class="iti__dial-code">+248</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sl" role="option" data-dial-code="232" data-country-code="sl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Sierra Leone</span><span class="iti__dial-code">+232</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sg" role="option" data-dial-code="65" data-country-code="sg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Singapore</span><span class="iti__dial-code">+65</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sx" role="option" data-dial-code="1" data-country-code="sx" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sx"></div>
                                                         </div>
                                                         <span class="iti__country-name">Sint Maarten</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sk" role="option" data-dial-code="421" data-country-code="sk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Slovakia (Slovensko)</span><span class="iti__dial-code">+421</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-si" role="option" data-dial-code="386" data-country-code="si" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__si"></div>
                                                         </div>
                                                         <span class="iti__country-name">Slovenia (Slovenija)</span><span class="iti__dial-code">+386</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sb" role="option" data-dial-code="677" data-country-code="sb" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sb"></div>
                                                         </div>
                                                         <span class="iti__country-name">Solomon Islands</span><span class="iti__dial-code">+677</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-so" role="option" data-dial-code="252" data-country-code="so" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__so"></div>
                                                         </div>
                                                         <span class="iti__country-name">Somalia (Soomaaliya)</span><span class="iti__dial-code">+252</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-za" role="option" data-dial-code="27" data-country-code="za" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__za"></div>
                                                         </div>
                                                         <span class="iti__country-name">South Africa</span><span class="iti__dial-code">+27</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-kr" role="option" data-dial-code="82" data-country-code="kr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__kr"></div>
                                                         </div>
                                                         <span class="iti__country-name">South Korea (대한민국)</span><span class="iti__dial-code">+82</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ss" role="option" data-dial-code="211" data-country-code="ss" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ss"></div>
                                                         </div>
                                                         <span class="iti__country-name">South Sudan (‫جنوب السودان‬‎)</span><span class="iti__dial-code">+211</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-lk" role="option" data-dial-code="94" data-country-code="lk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__lk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Sri Lanka (ශ්‍රී ලංකාව)</span><span class="iti__dial-code">+94</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sd" role="option" data-dial-code="249" data-country-code="sd" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sd"></div>
                                                         </div>
                                                         <span class="iti__country-name">Sudan (‫السودان‬‎)</span><span class="iti__dial-code">+249</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sr" role="option" data-dial-code="597" data-country-code="sr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Suriname</span><span class="iti__dial-code">+597</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sj" role="option" data-dial-code="47" data-country-code="sj" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sj"></div>
                                                         </div>
                                                         <span class="iti__country-name">Svalbard and Jan Mayen</span><span class="iti__dial-code">+47</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-se" role="option" data-dial-code="46" data-country-code="se" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__se"></div>
                                                         </div>
                                                         <span class="iti__country-name">Sweden (Sverige)</span><span class="iti__dial-code">+46</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ch" role="option" data-dial-code="41" data-country-code="ch" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ch"></div>
                                                         </div>
                                                         <span class="iti__country-name">Switzerland (Schweiz)</span><span class="iti__dial-code">+41</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-sy" role="option" data-dial-code="963" data-country-code="sy" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__sy"></div>
                                                         </div>
                                                         <span class="iti__country-name">Syria (‫سوريا‬‎)</span><span class="iti__dial-code">+963</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tw" role="option" data-dial-code="886" data-country-code="tw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Taiwan (台灣)</span><span class="iti__dial-code">+886</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tj" role="option" data-dial-code="992" data-country-code="tj" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tj"></div>
                                                         </div>
                                                         <span class="iti__country-name">Tajikistan</span><span class="iti__dial-code">+992</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tz" role="option" data-dial-code="255" data-country-code="tz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Tanzania</span><span class="iti__dial-code">+255</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-th" role="option" data-dial-code="66" data-country-code="th" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__th"></div>
                                                         </div>
                                                         <span class="iti__country-name">Thailand (ไทย)</span><span class="iti__dial-code">+66</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tl" role="option" data-dial-code="670" data-country-code="tl" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tl"></div>
                                                         </div>
                                                         <span class="iti__country-name">Timor-Leste</span><span class="iti__dial-code">+670</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tg" role="option" data-dial-code="228" data-country-code="tg" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tg"></div>
                                                         </div>
                                                         <span class="iti__country-name">Togo</span><span class="iti__dial-code">+228</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tk" role="option" data-dial-code="690" data-country-code="tk" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tk"></div>
                                                         </div>
                                                         <span class="iti__country-name">Tokelau</span><span class="iti__dial-code">+690</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-to" role="option" data-dial-code="676" data-country-code="to" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__to"></div>
                                                         </div>
                                                         <span class="iti__country-name">Tonga</span><span class="iti__dial-code">+676</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tt" role="option" data-dial-code="1" data-country-code="tt" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tt"></div>
                                                         </div>
                                                         <span class="iti__country-name">Trinidad and Tobago</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tn" role="option" data-dial-code="216" data-country-code="tn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Tunisia (‫تونس‬‎)</span><span class="iti__dial-code">+216</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tr" role="option" data-dial-code="90" data-country-code="tr" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tr"></div>
                                                         </div>
                                                         <span class="iti__country-name">Turkey (Türkiye)</span><span class="iti__dial-code">+90</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tm" role="option" data-dial-code="993" data-country-code="tm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Turkmenistan</span><span class="iti__dial-code">+993</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tc" role="option" data-dial-code="1" data-country-code="tc" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tc"></div>
                                                         </div>
                                                         <span class="iti__country-name">Turks and Caicos Islands</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-tv" role="option" data-dial-code="688" data-country-code="tv" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__tv"></div>
                                                         </div>
                                                         <span class="iti__country-name">Tuvalu</span><span class="iti__dial-code">+688</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ug" role="option" data-dial-code="256" data-country-code="ug" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ug"></div>
                                                         </div>
                                                         <span class="iti__country-name">Uganda</span><span class="iti__dial-code">+256</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ua" role="option" data-dial-code="380" data-country-code="ua" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ua"></div>
                                                         </div>
                                                         <span class="iti__country-name">Ukraine (Україна)</span><span class="iti__dial-code">+380</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ae" role="option" data-dial-code="971" data-country-code="ae" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ae"></div>
                                                         </div>
                                                         <span class="iti__country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span><span class="iti__dial-code">+971</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-us" role="option" data-dial-code="1" data-country-code="us" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__us"></div>
                                                         </div>
                                                         <span class="iti__country-name">United States</span><span class="iti__dial-code">+1</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-uy" role="option" data-dial-code="598" data-country-code="uy" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__uy"></div>
                                                         </div>
                                                         <span class="iti__country-name">Uruguay</span><span class="iti__dial-code">+598</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-uz" role="option" data-dial-code="998" data-country-code="uz" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__uz"></div>
                                                         </div>
                                                         <span class="iti__country-name">Uzbekistan (Oʻzbekiston)</span><span class="iti__dial-code">+998</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-vu" role="option" data-dial-code="678" data-country-code="vu" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__vu"></div>
                                                         </div>
                                                         <span class="iti__country-name">Vanuatu</span><span class="iti__dial-code">+678</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-va" role="option" data-dial-code="39" data-country-code="va" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__va"></div>
                                                         </div>
                                                         <span class="iti__country-name">Vatican City (Città del Vaticano)</span><span class="iti__dial-code">+39</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ve" role="option" data-dial-code="58" data-country-code="ve" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ve"></div>
                                                         </div>
                                                         <span class="iti__country-name">Venezuela</span><span class="iti__dial-code">+58</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-vn" role="option" data-dial-code="84" data-country-code="vn" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__vn"></div>
                                                         </div>
                                                         <span class="iti__country-name">Vietnam (Việt Nam)</span><span class="iti__dial-code">+84</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-wf" role="option" data-dial-code="681" data-country-code="wf" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__wf"></div>
                                                         </div>
                                                         <span class="iti__country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="iti__dial-code">+681</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-eh" role="option" data-dial-code="212" data-country-code="eh" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__eh"></div>
                                                         </div>
                                                         <span class="iti__country-name">Western Sahara (‫الصحراء الغربية‬‎)</span><span class="iti__dial-code">+212</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-ye" role="option" data-dial-code="967" data-country-code="ye" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__ye"></div>
                                                         </div>
                                                         <span class="iti__country-name">Yemen (‫اليمن‬‎)</span><span class="iti__dial-code">+967</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-zm" role="option" data-dial-code="260" data-country-code="zm" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__zm"></div>
                                                         </div>
                                                         <span class="iti__country-name">Zambia</span><span class="iti__dial-code">+260</span>
                                                      </li>
                                                      <li class="iti__country iti__standard" tabindex="-1" id="iti-0__item-zw" role="option" data-dial-code="263" data-country-code="zw" aria-selected="false">
                                                         <div class="iti__flag-box">
                                                            <div class="iti__flag iti__zw"></div>
                                                         </div>
                                                         <span class="iti__country-name">Zimbabwe</span><span class="iti__dial-code">+263</span>
                                                      </li>
                                                   </ul>
                                                </div>
                                                <input type="text" ng2telinput="" class="browser-default ng-untouched ng-pristine ng-invalid ng-star-inserted" id="phone" placeholder="501 234 56 78" data-intl-tel-input-id="0" required="" style="padding-left: 83px;">
                                             </div>
                                             <!----><!---->
                                          </div>
                                          <!----><!---->
                                          <div class="cpf-number-loading">
                                             <!----><!----><!---->
                                          </div>
                                          <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       <div class="three-steps-mode">
                                          <!----><!---->
                                          <div class="flex-container step-btns">
                                             <!----><!----><!----><!----><!---->
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                 </div>
                                 <!---->
                              </div>
                              <!----><!---->
                              <div class="col prsnl-infrmtn s4 ng-star-inserted">
                                 <div class="modul-accordion">
                                    <div class="modul-header"><i class="fa fa-user right"></i><span class="left header-text">Kişisel Bilgiler</span></div>
                                    <div class="module-content">
                                       <!----><!---->
                                       <div class="input-field password bubble required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Şifreniz</span><!----><!---->
                                          <div>
                                             <!----><!---->
                                          </div>
                                          <!----><!---->
                                          <div class="cpf-number-loading">
                                             <input debounce="2000" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="password" placeholder="" type="password" required="" maxlength="25"><!----><!----><!---->
                                          </div>
                                          <!----><!----><!---->
                                          <bubble-validator position="right" class="ng-star-inserted">
                                             <div class="bubble-vldtr right">
                                                <ul class="vldtr-lst">
                                                   <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 büyük harf içermeli. </span></li>
                                                   <!----><!---->
                                                   <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 küçük harf içermeli. </span></li>
                                                   <!----><!---->
                                                   <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 nümerik değer içermeli. </span></li>
                                                   <!----><!----><!----><!---->
                                                   <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 8 değer içermeli. </span></li>
                                                   <!----><!----><!---->
                                                </ul>
                                             </div>
                                          </bubble-validator>
                                          <!---->
                                          <password-eye el="password" class="ng-star-inserted"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                       <div class="field-cont ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Cinsiyet</span><!---->
                                          <div class="radio-tabs flex-container">
                                             <div class="radio-tab flex-item ng-star-inserted"><input type="radio" id="gender-M" class="ng-untouched ng-pristine ng-valid"><label for="gender-M"><span class="item truncate">Erkek</span></label></div>
                                             <div class="radio-tab flex-item ng-star-inserted"><input type="radio" id="gender-F" class="ng-untouched ng-pristine ng-valid"><label for="gender-F"><span class="item truncate">Kadın</span></label></div>
                                             <div class="radio-tab flex-item ng-star-inserted"><input type="radio" id="gender-X" class="ng-untouched ng-pristine ng-valid"><label for="gender-X"><span class="item truncate">Beyan etmek istemiyorum</span></label></div>
                                             <!---->
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!---->
                                       <div class="select-field required ng-star-inserted" style="position: relative;">
                                          <!---->
                                       </div>
                                       <!---->
                                       <div class="select-field required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Para Birimi</span><!---->
                                          <div class="ng-star-inserted">
                                             <select class="browser-default ng-untouched ng-pristine ng-invalid ng-star-inserted" id="currencyId" required="" style="flex: 3 1 0%;">
                                                <option selected="" value="" class="ng-star-inserted">Seçiniz</option>
                                                <!---->
                                                <option value="1" class="ng-star-inserted">Türk Lirası</option>
                                                <option value="2" class="ng-star-inserted">Büyük Britanya Sterlini</option>
                                                <option value="3" class="ng-star-inserted">Amerikan Doları</option>
                                                <option value="4" class="ng-star-inserted">Euro</option>
                                                <option value="10" class="ng-star-inserted">Tenge</option>
                                                <!----><!----><!----><!----><!----><!---->
                                             </select>
                                             <!----><!---->
                                          </div>
                                          <!----><!----><!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!---->
                                       <div class="input-field birthdate required ng-star-inserted">
                                          <span class="field-label required ng-star-inserted">Doğum Tarihi</span><!---->
                                          <birthdate-input class="ng-star-inserted">
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid"><div class="flex-container"><div class="flex-item"><div class="select-field"><select id="days" class="browser-default ng-untouched ng-pristine ng-invalid"><option selected="" value="" disabled="">Gün</option><option value="1" class="ng-star-inserted">1</option><option value="2" class="ng-star-inserted">2</option><option value="3" class="ng-star-inserted">3</option><option value="4" class="ng-star-inserted">4</option><option value="5" class="ng-star-inserted">5</option><option value="6" class="ng-star-inserted">6</option><option value="7" class="ng-star-inserted">7</option><option value="8" class="ng-star-inserted">8</option><option value="9" class="ng-star-inserted">9</option><option value="10" class="ng-star-inserted">10</option><option value="11" class="ng-star-inserted">11</option><option value="12" class="ng-star-inserted">12</option><option value="13" class="ng-star-inserted">13</option><option value="14" class="ng-star-inserted">14</option><option value="15" class="ng-star-inserted">15</option><option value="16" class="ng-star-inserted">16</option><option value="17" class="ng-star-inserted">17</option><option value="18" class="ng-star-inserted">18</option><option value="19" class="ng-star-inserted">19</option><option value="20" class="ng-star-inserted">20</option><option value="21" class="ng-star-inserted">21</option><option value="22" class="ng-star-inserted">22</option><option value="23" class="ng-star-inserted">23</option><option value="24" class="ng-star-inserted">24</option><option value="25" class="ng-star-inserted">25</option><option value="26" class="ng-star-inserted">26</option><option value="27" class="ng-star-inserted">27</option><option value="28" class="ng-star-inserted">28</option><option value="29" class="ng-star-inserted">29</option><option value="30" class="ng-star-inserted">30</option><option value="31" class="ng-star-inserted">31</option><!----></select></div></div><div class="flex-item"><div class="select-field"><select id="months" class="browser-default ng-untouched ng-pristine ng-invalid"><option selected="" value="" disabled="">Ay</option><option value="1" class="ng-star-inserted">1</option><option value="2" class="ng-star-inserted">2</option><option value="3" class="ng-star-inserted">3</option><option value="4" class="ng-star-inserted">4</option><option value="5" class="ng-star-inserted">5</option><option value="6" class="ng-star-inserted">6</option><option value="7" class="ng-star-inserted">7</option><option value="8" class="ng-star-inserted">8</option><option value="9" class="ng-star-inserted">9</option><option value="10" class="ng-star-inserted">10</option><option value="11" class="ng-star-inserted">11</option><option value="12" class="ng-star-inserted">12</option><!----></select></div></div><div class="flex-item"><div class="select-field"><select id="years" class="browser-default ng-untouched ng-pristine ng-invalid"><option selected="" value="" disabled="">Yıl</option><option value="2006" class="ng-star-inserted">2006</option><option value="2005" class="ng-star-inserted">2005</option><option value="2004" class="ng-star-inserted">2004</option><option value="2003" class="ng-star-inserted">2003</option><option value="2002" class="ng-star-inserted">2002</option><option value="2001" class="ng-star-inserted">2001</option><option value="2000" class="ng-star-inserted">2000</option><option value="1999" class="ng-star-inserted">1999</option><option value="1998" class="ng-star-inserted">1998</option><option value="1997" class="ng-star-inserted">1997</option><option value="1996" class="ng-star-inserted">1996</option><option value="1995" class="ng-star-inserted">1995</option><option value="1994" class="ng-star-inserted">1994</option><option value="1993" class="ng-star-inserted">1993</option><option value="1992" class="ng-star-inserted">1992</option><option value="1991" class="ng-star-inserted">1991</option><option value="1990" class="ng-star-inserted">1990</option><option value="1989" class="ng-star-inserted">1989</option><option value="1988" class="ng-star-inserted">1988</option><option value="1987" class="ng-star-inserted">1987</option><option value="1986" class="ng-star-inserted">1986</option><option value="1985" class="ng-star-inserted">1985</option><option value="1984" class="ng-star-inserted">1984</option><option value="1983" class="ng-star-inserted">1983</option><option value="1982" class="ng-star-inserted">1982</option><option value="1981" class="ng-star-inserted">1981</option><option value="1980" class="ng-star-inserted">1980</option><option value="1979" class="ng-star-inserted">1979</option><option value="1978" class="ng-star-inserted">1978</option><option value="1977" class="ng-star-inserted">1977</option><option value="1976" class="ng-star-inserted">1976</option><option value="1975" class="ng-star-inserted">1975</option><option value="1974" class="ng-star-inserted">1974</option><option value="1973" class="ng-star-inserted">1973</option><option value="1972" class="ng-star-inserted">1972</option><option value="1971" class="ng-star-inserted">1971</option><option value="1970" class="ng-star-inserted">1970</option><option value="1969" class="ng-star-inserted">1969</option><option value="1968" class="ng-star-inserted">1968</option><option value="1967" class="ng-star-inserted">1967</option><option value="1966" class="ng-star-inserted">1966</option><option value="1965" class="ng-star-inserted">1965</option><option value="1964" class="ng-star-inserted">1964</option><option value="1963" class="ng-star-inserted">1963</option><option value="1962" class="ng-star-inserted">1962</option><option value="1961" class="ng-star-inserted">1961</option><option value="1960" class="ng-star-inserted">1960</option><option value="1959" class="ng-star-inserted">1959</option><option value="1958" class="ng-star-inserted">1958</option><option value="1957" class="ng-star-inserted">1957</option><option value="1956" class="ng-star-inserted">1956</option><option value="1955" class="ng-star-inserted">1955</option><option value="1954" class="ng-star-inserted">1954</option><option value="1953" class="ng-star-inserted">1953</option><option value="1952" class="ng-star-inserted">1952</option><option value="1951" class="ng-star-inserted">1951</option><option value="1950" class="ng-star-inserted">1950</option><option value="1949" class="ng-star-inserted">1949</option><option value="1948" class="ng-star-inserted">1948</option><option value="1947" class="ng-star-inserted">1947</option><option value="1946" class="ng-star-inserted">1946</option><option value="1945" class="ng-star-inserted">1945</option><option value="1944" class="ng-star-inserted">1944</option><option value="1943" class="ng-star-inserted">1943</option><option value="1942" class="ng-star-inserted">1942</option><option value="1941" class="ng-star-inserted">1941</option><option value="1940" class="ng-star-inserted">1940</option><option value="1939" class="ng-star-inserted">1939</option><option value="1938" class="ng-star-inserted">1938</option><option value="1937" class="ng-star-inserted">1937</option><option value="1936" class="ng-star-inserted">1936</option><option value="1935" class="ng-star-inserted">1935</option><option value="1934" class="ng-star-inserted">1934</option><option value="1933" class="ng-star-inserted">1933</option><option value="1932" class="ng-star-inserted">1932</option><option value="1931" class="ng-star-inserted">1931</option><option value="1930" class="ng-star-inserted">1930</option><option value="1929" class="ng-star-inserted">1929</option><option value="1928" class="ng-star-inserted">1928</option><option value="1927" class="ng-star-inserted">1927</option><option value="1926" class="ng-star-inserted">1926</option><option value="1925" class="ng-star-inserted">1925</option><option value="1924" class="ng-star-inserted">1924</option><!----></select></div></div></div></form></birthdate-input><!----><!----><div><!----><!----></div><!----><!----><div class="cpf-number-loading"><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><div class="select-field required ng-star-inserted" style="position: relative;"><!----><span class="field-label required ng-star-inserted">Ülke</span><!----><div class="ng-star-inserted"><select class="browser-default ng-untouched ng-pristine ng-invalid ng-star-inserted" id="countryId" required="" style="flex: 3 1 0%;"><option selected="" value="" class="ng-star-inserted">Seçiniz</option><!----><!----><option value="84" class="ng-star-inserted">Afganistan</option><option value="6534" class="ng-star-inserted">Aland Adaları</option><option value="22" class="ng-star-inserted">Albania</option><option value="11" class="ng-star-inserted">Almanya</option><option value="13" class="ng-star-inserted">Amerika</option><option value="6536" class="ng-star-inserted">Amerika Birleşik Devletleri Küçük Dış Adaları</option><option value="86" class="ng-star-inserted">Amerikan Samoası</option><option value="94" class="ng-star-inserted">Andora</option><option value="95" class="ng-star-inserted">Angola</option><option value="96" class="ng-star-inserted">Anguilla</option><option value="97" class="ng-star-inserted">Antarktika</option><option value="98" class="ng-star-inserted">Antigua ve Barbuda</option><option value="293" class="ng-star-inserted">Arjantin</option><option value="100" class="ng-star-inserted">Aruba</option><option value="6549" class="ng-star-inserted">Avrupa Birliği</option><option value="102" class="ng-star-inserted">Avusturya</option><option value="20" class="ng-star-inserted">Azerbaycan</option><option value="103" class="ng-star-inserted">Bahamalar</option><option value="104" class="ng-star-inserted">Bahreyn</option><option value="105" class="ng-star-inserted">Bangladeş</option><option value="106" class="ng-star-inserted">Barbados</option><option value="289" class="ng-star-inserted">Batı Sahara</option><option value="108" class="ng-star-inserted">Belçika</option><option value="109" class="ng-star-inserted">Belize</option><option value="110" class="ng-star-inserted">Benin</option><option value="111" class="ng-star-inserted">Bermuda</option><option value="107" class="ng-star-inserted">Beyaz Rusya</option><option value="112" class="ng-star-inserted">Bhutan</option><option value="6568" class="ng-star-inserted">Bilinmeyen veya Geçersiz Bölge</option><option value="280" class="ng-star-inserted">Birleşik Arap Emirlikleri</option><option value="113" class="ng-star-inserted">Bolivya</option><option value="114" class="ng-star-inserted">Bosna Hersek</option><option value="115" class="ng-star-inserted">Botsvana</option><option value="6548" class="ng-star-inserted">Bouvet Adası</option><option value="116" class="ng-star-inserted">Brezilya</option><option value="119" class="ng-star-inserted">Brunei</option><option value="47" class="ng-star-inserted">Bulgaristan</option><option value="120" class="ng-star-inserted">Burkina Faso</option><option value="121" class="ng-star-inserted">Burundi</option><option value="297" class="ng-star-inserted">Canary Islands</option><option value="125" class="ng-star-inserted">Cape Verde</option><option value="157" class="ng-star-inserted">Cebelitarık</option><option value="93" class="ng-star-inserted">Cezayir</option><option value="131" class="ng-star-inserted">Christmas Adası</option><option value="140" class="ng-star-inserted">Cibuti</option><option value="132" class="ng-star-inserted">Cocos Adaları</option><option value="135" class="ng-star-inserted">Cook Adaları</option><option value="137" class="ng-star-inserted">Curacao</option><option value="128" class="ng-star-inserted">Çad</option><option value="51" class="ng-star-inserted">Çek Cumhuriyeti</option><option value="130" class="ng-star-inserted">Çin</option><option value="139" class="ng-star-inserted">Danimarka</option><option value="142" class="ng-star-inserted">Doğu Timor</option><option value="141" class="ng-star-inserted">Dominik Cumhuriyeti</option><option value="143" class="ng-star-inserted">Ekvator</option><option value="146" class="ng-star-inserted">Ekvator Ginesi</option><option value="145" class="ng-star-inserted">El Salvador</option><option value="171" class="ng-star-inserted">Endonezya</option><option value="147" class="ng-star-inserted">Eritre</option><option value="99" class="ng-star-inserted">Ermenistan</option><option value="148" class="ng-star-inserted">Estonya</option><option value="149" class="ng-star-inserted">Etiyopya</option><option value="150" class="ng-star-inserted">Falkland Adaları (Malvinalar)</option><option value="151" class="ng-star-inserted">Faroe Adaları</option><option value="210" class="ng-star-inserted">Fas</option><option value="152" class="ng-star-inserted">Fiji</option><option value="295" class="ng-star-inserted">Fildişi Sahilleri</option><option value="6541" class="ng-star-inserted">Filipinler</option><option value="229" class="ng-star-inserted">Filistin Bölgesi</option><option value="57" class="ng-star-inserted">Finlandiya</option><option value="43" class="ng-star-inserted">Fransa</option><option value="6543" class="ng-star-inserted">Fransız Guyanası</option><option value="6544" class="ng-star-inserted">Fransız Güney Bölgeleri</option><option value="153" class="ng-star-inserted">Fransız Polinezyası</option><option value="154" class="ng-star-inserted">Gabon</option><option value="155" class="ng-star-inserted">Gambia</option><option value="156" class="ng-star-inserted">Gana</option><option value="163" class="ng-star-inserted">Gine</option><option value="164" class="ng-star-inserted">Gine-Bissau</option><option value="159" class="ng-star-inserted">Granada</option><option value="158" class="ng-star-inserted">Grönland</option><option value="6553" class="ng-star-inserted">Guadeloupe</option><option value="160" class="ng-star-inserted">Guam</option><option value="161" class="ng-star-inserted">Guatemala</option><option value="162" class="ng-star-inserted">Guernsey</option><option value="165" class="ng-star-inserted">Guyana</option><option value="259" class="ng-star-inserted">Güney Afrika</option><option value="6554" class="ng-star-inserted">Güney Georgia ve Güney Sandwich Adaları</option><option value="260" class="ng-star-inserted">Güney Kore</option><option value="92" class="ng-star-inserted">Gürcistan</option><option value="166" class="ng-star-inserted">Haiti</option><option value="6547" class="ng-star-inserted">Heard Adası ve McDonald Adaları</option><option value="136" class="ng-star-inserted">Hırvatistan</option><option value="170" class="ng-star-inserted">Hindistan</option><option value="117" class="ng-star-inserted">Hint Okyanusu İngiliz Bölgesi</option><option value="10" class="ng-star-inserted">Hollanda</option><option value="6511" class="ng-star-inserted">Hollanda Antilleri</option><option value="167" class="ng-star-inserted">Honduras</option><option value="168" class="ng-star-inserted">Hong Kong SAR - Çin</option><option value="172" class="ng-star-inserted">Irak</option><option value="296" class="ng-star-inserted">İran</option><option value="59" class="ng-star-inserted">İrlanda</option><option value="6531" class="ng-star-inserted">İsrail</option><option value="267" class="ng-star-inserted">İsveç</option><option value="268" class="ng-star-inserted">İsviçre</option><option value="33" class="ng-star-inserted">İtalya</option><option value="169" class="ng-star-inserted">İzlanda</option><option value="177" class="ng-star-inserted">Jamaika</option><option value="178" class="ng-star-inserted">Japonya</option><option value="179" class="ng-star-inserted">Jersey</option><option value="122" class="ng-star-inserted">Kamboçya</option><option value="123" class="ng-star-inserted">Kamerun</option><option value="124" class="ng-star-inserted">Kanada</option><option value="208" class="ng-star-inserted">Karadağ</option><option value="237" class="ng-star-inserted">Katar</option><option value="126" class="ng-star-inserted">Kayman Adaları</option><option value="181" class="ng-star-inserted">Kazakistan</option><option value="182" class="ng-star-inserted">Kenya</option><option value="16" class="ng-star-inserted">Kıbrıs</option><option value="186" class="ng-star-inserted">Kırgızistan</option><option value="183" class="ng-star-inserted">Kiribati</option><option value="133" class="ng-star-inserted">Kolombiya</option><option value="134" class="ng-star-inserted">Komorlar</option><option value="238" class="ng-star-inserted">Kongo</option><option value="138" class="ng-star-inserted">Kongo Demokratik Cumhuriyeti</option><option value="184" class="ng-star-inserted">Kosovo</option><option value="49" class="ng-star-inserted">Kosta Rika</option><option value="185" class="ng-star-inserted">Kuveyt</option><option value="223" class="ng-star-inserted">Kuzey Kore</option><option value="224" class="ng-star-inserted">Kuzey Mariana Adaları</option><option value="91" class="ng-star-inserted">Küba</option><option value="187" class="ng-star-inserted">Laos</option><option value="189" class="ng-star-inserted">Lesotho</option><option value="83" class="ng-star-inserted">Letonya</option><option value="190" class="ng-star-inserted">Liberya</option><option value="191" class="ng-star-inserted">Libya</option><option value="6556" class="ng-star-inserted">Liechtenstein</option><option value="192" class="ng-star-inserted">Litvanya</option><option value="188" class="ng-star-inserted">Lübnan</option><option value="193" class="ng-star-inserted">Lüksemburg</option><option value="18" class="ng-star-inserted">Macaristan</option><option value="195" class="ng-star-inserted">Madagaskar</option><option value="6532" class="ng-star-inserted">Makao S.A.R. Çin</option><option value="194" class="ng-star-inserted">Makedonya</option><option value="196" class="ng-star-inserted">Malavi</option><option value="198" class="ng-star-inserted">Maldivler</option><option value="197" class="ng-star-inserted">Malezya</option><option value="6656" class="ng-star-inserted">Mali</option><option value="199" class="ng-star-inserted">Malta</option><option value="174" class="ng-star-inserted">Man Adası</option><option value="200" class="ng-star-inserted">Marshall Adaları</option><option value="6600" class="ng-star-inserted">Martinik</option><option value="202" class="ng-star-inserted">Mauritius</option><option value="203" class="ng-star-inserted">Mayotte</option><option value="204" class="ng-star-inserted">Meksika</option><option value="144" class="ng-star-inserted">Mısır</option><option value="205" class="ng-star-inserted">Mikronezya Federal Eyaletleri</option><option value="207" class="ng-star-inserted">Moğolistan</option><option value="206" class="ng-star-inserted">Moldovya Cumhuriyeti</option><option value="6657" class="ng-star-inserted">Monako</option><option value="209" class="ng-star-inserted">Montserrat</option><option value="201" class="ng-star-inserted">Moritanya</option><option value="211" class="ng-star-inserted">Mozambik</option><option value="212" class="ng-star-inserted">Myanmar</option><option value="213" class="ng-star-inserted">Namibya</option><option value="214" class="ng-star-inserted">Nauru</option><option value="215" class="ng-star-inserted">Nepal</option><option value="220" class="ng-star-inserted">Nijer</option><option value="221" class="ng-star-inserted">Nijerya</option><option value="219" class="ng-star-inserted">Nikaragua</option><option value="222" class="ng-star-inserted">Niue</option><option value="6697" class="ng-star-inserted">Norfolk Adası</option><option value="225" class="ng-star-inserted">Norveç</option><option value="127" class="ng-star-inserted">Orta Afrika Cumhuriyeti</option><option value="283" class="ng-star-inserted">Özbekistan</option><option value="227" class="ng-star-inserted">Pakistan</option><option value="228" class="ng-star-inserted">Palau</option><option value="230" class="ng-star-inserted">Panama</option><option value="231" class="ng-star-inserted">Papua Yeni Gine</option><option value="232" class="ng-star-inserted">Paraguay</option><option value="233" class="ng-star-inserted">Peru</option><option value="235" class="ng-star-inserted">Pitcairn</option><option value="67" class="ng-star-inserted">Polonya</option><option value="69" class="ng-star-inserted">Portekiz</option><option value="236" class="ng-star-inserted">Porto Riko</option><option value="239" class="ng-star-inserted">Reunion</option><option value="71" class="ng-star-inserted">Romanya</option><option value="240" class="ng-star-inserted">Ruanda</option><option value="14" class="ng-star-inserted">Rusya</option><option value="241" class="ng-star-inserted">Saint Barthelemy</option><option value="242" class="ng-star-inserted">Saint Helena</option><option value="243" class="ng-star-inserted">Saint Kitts ve Nevis</option><option value="244" class="ng-star-inserted">Saint Lucia</option><option value="245" class="ng-star-inserted">Saint Martin</option><option value="246" class="ng-star-inserted">Saint Pierre ve Miquelon</option><option value="247" class="ng-star-inserted">Saint Vincent ve Grenadinler</option><option value="248" class="ng-star-inserted">Samoa</option><option value="249" class="ng-star-inserted">San Marino</option><option value="250" class="ng-star-inserted">Sao Tome ve Principe</option><option value="6715" class="ng-star-inserted">Senegal</option><option value="253" class="ng-star-inserted">Seyşeller</option><option value="45" class="ng-star-inserted">Sırbistan</option><option value="6766" class="ng-star-inserted">Sırbistan-Karadağ</option><option value="6733" class="ng-star-inserted">Sierra Leone</option><option value="254" class="ng-star-inserted">Singapur</option><option value="255" class="ng-star-inserted">Sint Maarten</option><option value="256" class="ng-star-inserted">Slovakya</option><option value="257" class="ng-star-inserted">Slovenya</option><option value="258" class="ng-star-inserted">Solomon Adaları</option><option value="85" class="ng-star-inserted">Somali</option><option value="261" class="ng-star-inserted">South Sudan</option><option value="262" class="ng-star-inserted">Sri Lanka</option><option value="263" class="ng-star-inserted">Sudan</option><option value="264" class="ng-star-inserted">Surinam</option><option value="269" class="ng-star-inserted">Suriye</option><option value="251" class="ng-star-inserted">Suudi Arabistan</option><option value="265" class="ng-star-inserted">Svalbard ve Jan Mayen</option><option value="266" class="ng-star-inserted">Svaziland</option><option value="129" class="ng-star-inserted">Şili</option><option value="271" class="ng-star-inserted">Tacikistan</option><option value="272" class="ng-star-inserted">Tanzanya</option><option value="88" class="ng-star-inserted">Tayland</option><option value="270" class="ng-star-inserted">Tayvan</option><option value="273" class="ng-star-inserted">Togo</option><option value="274" class="ng-star-inserted">Tokelau</option><option value="87" class="ng-star-inserted">Tonga</option><option value="90" class="ng-star-inserted">Trinidad ve Tobago</option><option value="275" class="ng-star-inserted">Tunus</option><option value="277" class="ng-star-inserted">Turks ve Caicos Adaları</option><option value="278" class="ng-star-inserted">Tuvalu</option><option value="12" class="ng-star-inserted">Türkiye</option><option value="276" class="ng-star-inserted">Türkmenistan</option><option value="17" class="ng-star-inserted">Uganda</option><option value="89" class="ng-star-inserted">Ukrayna</option><option value="226" class="ng-star-inserted">Umman</option><option value="282" class="ng-star-inserted">Uruguay</option><option value="6768" class="ng-star-inserted">Uzak Okyanusya</option><option value="180" class="ng-star-inserted">Ürdün</option><option value="284" class="ng-star-inserted">Vanuatu</option><option value="285" class="ng-star-inserted">Vatikan</option><option value="286" class="ng-star-inserted">Venezuela</option><option value="287" class="ng-star-inserted">Vietnam</option><option value="288" class="ng-star-inserted">Wallis ve Futuna</option><option value="290" class="ng-star-inserted">Yemen</option><option value="217" class="ng-star-inserted">Yeni Kaledonya</option><option value="218" class="ng-star-inserted">Yeni Zelanda</option><option value="39" class="ng-star-inserted">Yunanistan</option><option value="291" class="ng-star-inserted">Zambiya</option><option value="292" class="ng-star-inserted">Zimbabve</option><!----><!----><!----><!----><!----></select><!----><!----></div><!----><!----><!----><!----></div><!----><div class="select-field required ng-star-inserted"><!----><!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><div class="input-field cityName required ng-star-inserted"><span class="field-label required ng-star-inserted">Şehir</span><!----><!----><div><!----><!----></div><!----><!----><div class="cpf-number-loading"><input debounce="2000" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid ng-star-inserted" id="cityName" placeholder="" type="text" required=""><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><div class="input-field required ng-star-inserted"><span class="field-label required ng-star-inserted">Adres</span><!----><textarea cols="30" rows="10" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid" id="address" placeholder="" maxlength="100">                                </textarea><!----></div><!----><!----><!----><!----><!----><!----><div class="select-field ng-star-inserted" style="position: relative;"><!----></div><!----><div class="select-field ng-star-inserted"><!----><!----><!----><!----><!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><div class="select-field ng-star-inserted" style="position: relative;"><!----></div><!----><div class="select-field ng-star-inserted"><!----><!----><!----><!----><!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><div class="three-steps-mode"><!----><!----><div class="flex-container step-btns"><!----><!----><!----><!----><!----></div><!----></div></div></div><!----></div><!----><!----><div class="col prsnl-infrmtn s4 ng-star-inserted"><div class="modul-accordion"><div class="modul-header"><i class="fa fa-user right"></i><span class="left header-text">Bilgileri Onayla</span></div><div class="module-content"><div class="register-info ng-star-inserted"><span>Limanbet sitesine kayıt olunurken, hesabınızın teyidi ve güvenliği için doğru kişisel bilgiler gerekir. Bunu yapmayanların hesapları dondurulur ve/veya hesap temelli olarak feshedilir. Müşteriler kendi ülkelerinin bahis oynama yasalarının getirdiği sorumlulukla hareket ederler. Limanbet açıklama yapmadan herhangi bir üyeliği reddetme hakkına sahiptir.</span></div><!----><!----><!----><!----><!----><!----><!----><!----><div class="checkbox-field mar-top-10 ng-star-inserted"><input type="checkbox" class="filled-in ng-untouched ng-pristine ng-invalid" name="privacyPolicy" id="privacyPolicy" required=""><label for="privacyPolicy"><span class="required-icon ng-star-inserted"></span><!----> 18 yaşının üzerinde olduğumu kabul ediyorum <a class="blue-text privacyPolicy ng-star-inserted">Gizlilik Politikası </a><!----><!----><!----><!----></label><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!----><div class="checkbox-field mar-top-10 ng-star-inserted"><input type="checkbox" class="filled-in ng-untouched ng-pristine ng-invalid" name="termsAndConditions" id="termsAndConditions" required=""><label for="termsAndConditions"><span class="required-icon ng-star-inserted"></span><!----> Yukarıda verdiğim bilgilerin doğru olduğunu teyit ederim. Ayrıca tüm kuralları, şartları, koşulları, politikaları ve ilgili diğer site kuralları okuduğumu ve kabul ettiğimi onaylıyorum. <a class="blue-text termsAndConditions ng-star-inserted">şartlar ve koşullar. </a><!----><!----><!----><!----></label><!----></div><!----><!----><!----><!----><div class="three-steps-mode"><!----><!----><div class="flex-container step-btns"><!----><!----><button type="submit" class="btn next-btn flex-item register-btn ng-star-inserted"> Üye Ol </button><!----><!----><!----></div><!----></div></div></div><app-static-inner-content contentcode="signupRightBottom" class="ng-star-inserted"><!----></app-static-inner-content><!----><!----></div><!----><!----><!----></div><!----></form><!---->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col s12">
                        <app-static-inner-content contentcode="signupBottom">
                           <!---->
                        </app-static-inner-content>
                     </div>
                  </div>
               </div>
               <!---->
            </div>
            <!----><!----><!---->
            <div id="termsAndConditionsModal" materialize="modal" class="modal" style="z-index: 1137;">
               <div class="mdl-hdr">
                  <div class="header-content">
                     <div class="modal-close-button"><a><i class="fa fa-times"></i></a></div>
                  </div>
               </div>
               <div class="modal-content">
                  <app-static-inner-content contentcode="about-us-gen-terms-cond">
                     <div extroutelink="" id="about-us-gen-terms-cond" class="ng-star-inserted">
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           1. GİRİŞ
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           1.1 Yukarıda listelenen Hükümler ve Koşulların tümü birden "Hükümler" veya
                           "Anlaşmalar" olarak anılacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           1.2 Hükümler ve Koşullar'da, "bahis" veya "bahis yapma" diye geçen herhangi
                           bir terim,Limanbet web sitesi üzerinden gerçek veya sanal para ile oynanan
                           spor, casino, poker ve diğer şans oyunlarını ifade edecektir. Sözü edilen
                           bu tür oyunlar ayrıca "Hizmetler" olarak da anılacaktır. "Siz", "sizin",
                           "müşteri" veya "oyuncu" diye addedilen tüm şartlar, Limanbet’i veya
                           hizmetlerini kullanan tüm şahıslar ve/veya Limanbet’e kayıtlı
                           müşterilerdir. "Biz", "bize" ve "bizim" diye geçen terimler Limanbet
                           şirketine kasttedmektedir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           1.3 Sorumlu Kumar Oynama Politikası, Kullanım Koşulları, Gizlilik
                           Politikası, Bahis Kuralları, Spor Bahisleri kuralları ve düzenlemeleri,
                           Casino Bahisleri kuralları ve yönetmeliği ile Limanbet Hizmetlerine
                           uygulanan herhangi bir kural ve yönetmelik, Hükümlerin ayrılmaz bir parçası
                           olarak kabul edilmelidirler. Herhangi bir çatışma durumunda, tüm hükümler
                           ve koşullar, kurallar ve düzenlemelerle birlikte işbu metinde veya
                           websitesinde geçerli politikalar çapraz referans olarak incelenecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           1.4 Genel Hüküm ve Koşullara herhangi bir zamanda değişiklik yapma veya
                           değiştirme yetkisi Limanbet sitesine aittir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2. HESAP AÇMA
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.1 Oyuncular, ikamet ettikleri bölgelerdeki yargı merciinin öngördüğü
                           online bahis kurallarını ve düzenlemelerini bilmelidirler.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="">
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 2.2
                                 ABD, İsrail, İngiliz Virgin Adaları, Filipinler ve Hollanda Antilleri'nde
                                 ikamet edenlerin hesap açmalarına izin verilmez. Bu yargı bölgelerinde olduğu
                                 tespit edilen (geçici veya diğer, ulusal veya bu ülkelerin IP'lerini
                                 kullanarak) kişilerin yapmış olduğu bahisler, Limanbet in takdirine bağlı
                                 olarak iptal edilecektir ve sadece ilk yatırmış oldukları miktar iade
                                 edilecektir.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 i.
                                 Buna ek olarak, Limanbet belirtilen ülkeler için hiçbir koşulda NetEnt
                                 oyunlarına katılmasına izin vermemektedir: Afganistan, Arnavutluk, Cezayir,
                                 Angola, Avustralya, Bahamalar, Botswana, Kamboçya, Ekvador, Etiyopya, Gana, Guyana,
                                 Hong Kong, İran, Irak, İsrail, Kuveyt, Laos, Myanmar, Namibya, Nikaragua, Kuzey
                                 Kore, Pakistan, Panama, Papua Yeni Gine, Filipinler, Singapur, Sri Lanka,
                                 Sudan, Suriye, Tayvan, Trinidad ve Tobago, Tunus, Uganda, Yemen ve Zimbabve.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 ii.
                                 Limanbet, NetEnt'e sunulan ve NetEnt tarafından onaylanan belirli yargı
                                 yetkisinin, yetkili lisans makamından geçerli oyun türü için yerel bir uzaktan
                                 oyun lisansına sahip olmadıkça, Limanbet gerçek parayla NetEnt oyunlarını
                                 belirli ülkelere sunamaz.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 Belirli
                                 bir yargı yetkisinin birden çok devlete veya bölgeye bölünmesi durumunda, Limanbet
                                 yerel uzaktan oyun lisansının, özel olarak izin verdiği sürece sadece bu tür
                                 bir eyalette ya da bölgede gerçek parayla NetEnt oyunları sunulabilir.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-size: small; color: rgb(255, 255, 255);">
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">Şu
                                 anda yerel bir lisansa sahip olmayan bölgeler şunlardır: </span><span style="font-family: Arial, sans-serif; letter-spacing: -0.5pt;">Belçika, Bulgaristan, Çek Cumhuriyeti, Danimarka,
                                 Estonya, Fransa, İtalya, Letonya, Litvanya, Meksika, Portekiz, Romanya,
                                 Sırbistan, İspanya, İsveç, İsviçre, Amerika Birleşik Devletleri ve İngiltere.</span>
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-size: small; color: rgb(255, 255, 255);">
                                 <span style="font-family: Arial, sans-serif;">iii. Yukarıda belirtilen Ülkelere ek olarak, NetEnt’in Lisanslı
                                 müşterileri, yerel bir Lisans sahibi olsa bile, NetEnt’in Havuzlu Jackpot
                                 Oyunlarını ve Pooled Jackpot Oyunlarının mobil versiyonlarını (Hall of Gods,
                                 Arabian Nights, Mega Fortune &amp; Mega Fortune Dreams) teklif etmesi yasaktır.
                                 Yasaklı Ülkeler: Azerbaycan, Çin, Curacao, Danimarka, Hindistan, İtalya,
                                 Japonya, Malezya, Katar, Rusya, İspanya, Tayland, Türkiye, Birleşik Arap
                                 Emirlikleri, Ukrayna.</span>
                                 <span style="font-family: Arial, sans-serif;">
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;"><span style="font-family: Arial, Verdana; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; color: rgb(255, 255, 255);"><span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">iv.
                              Ayrıca Limanbet,&nbsp; Azerbaycan, Çin, Hindistan, Malezya, Katar, Rusya,
                              Tayland, Tunus, Türkiye ve Ukrayna'da ikamet edenler için bir yerel Lisans
                              düzenlenmiş olsa bile NetEnt Markalı Oyunlarını ve Markalı Oyunların mobil
                              versiyonlarını </span><span style="font-family: Arial, sans-serif;">Jumanji video slot, Emojiplanet video slot, Conan video slot,
                              NetEnt Rocks Games consisting of Guns N’ Roses,&nbsp;</span></span><font color="#ffffff" face="Arial, sans-serif" size="2">Ozzy Osbourne,&nbsp;</font><span style="font-family: Arial, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; color: rgb(255, 255, 255);">Jimi Hendrix and Motorhead
                              video slots, Planet of the Apes video slot and The Universal Monster Slot Games
                              consisting of Frankenstein, the Bride of Frankenstein, Dracula, The Mummy, The
                              Wolf Man, Creature from the Black Lagoon, The Invisible Man, The Phantom of the
                              Opera and Scudamore’s Super Stakes (© 2019, NetEnt Product Services Ltd.
                              Scudamore Super Stakes is a trademark of NetEnt Product Services. All Rights
                              Reserved)</span><span style="font-family: Arial, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; color: rgb(255, 255, 255); letter-spacing: -0.25pt;">&nbsp;sunamaz.</span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-size: small; color: rgb(255, 255, 255);">
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">iv.i
                                 Yukarıdaki madde 2.2 (iv) 'de belirtilen yetki bölgelerine ek olarak,
                                 Afganistan, Arnavutluk, Cezayir, Angola, Avustralya, Azerbaycan, Kamboçya,
                                 Kanada, Çin, Ekvador, Fransa, Guyana, Hong Kong, Hindistan, Endonezya, İran,
                                 Irak, İsrail, Kuveyt, Laos, Malezya, Myanmar, Namibya, Kuzey Kore, Pakistan,
                                 Papua Yeni Gine, Filipinler, Katar, Rusya, Singapur, Güney Kore, Sudan, Suriye,
                                 Tayvan, Tayland, Tunus, Türkiye, Ukrayna, Amerika Birleşik Devletleri (özel
                                 lisans anlaşması alması gereken New Jersey ve Pennsylvania Devletleri hariç) ve
                                 Uganda ‘da yerel bir lisans sahibi olsa bile; "</span><span style="font-family: Arial, sans-serif; letter-spacing: -0.5pt;"> Vikings Video Slot </span>
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                    " (bu markalı oyunun mobil versiyonları
                                    da dahil olmak üzere) Limanbet tarafından sunulmamaktadır.
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           </p>
                           <p class="MsoNormal" style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; color: rgb(255, 255, 255);">
                                 <span style="font-size: small;">iv.ii
                                 Yukarıdaki madde 2.2 (iv) 'de belirtilen yetki bölgelerine ek olarak, Endonezya
                                 ve Güney Kore' de yerel bir lisans sahibi olsa bile; "Narcos Video
                                 Slot" (bu markalı oyunun mobil versiyonları da dahil olmak üzere) Limanbet
                                 tarafından sunulmamaktadır.</span>
                                 <span style="font-weight: normal; font-size: 12pt;">
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.3 Limanbet web sitesinin, etkin bir şekilde yasak bölgeler listesine
                           dahil edilmemiş bölgelerde hizmet sunma kapasitesini sürekli
                           denetlemektedir. Limanbet hizmetlerini, belirli bir bölgeye daha fazla
                           sağlayacak bir konumda olmadığında (gerek yasal, ticari veya herhangi başka
                           bir nedenden dolayı), Limanbet gerektiğince Hükümlerin ilgili bölümlerini
                           gözden geçirir ve inceler.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.4 Limanbet tarafından yeni bir bölge yasak bölge listesine eklendiğinde,
                           sınırlandırılmış bölgede ikamet ettiği tespit edilen müşterilerin hesapları
                           derhal kapatılır. Müşterinin, yeni kısıtlanmış bir bölgede oturmakta olduğu
                           belirlendiği durumlarda, ikamet bölgesi yasak topraklar listesine dahil
                           edildiğinde tamamlanmamış olan bahisleri olduğu takdirde Limanbet bu tür
                           bahisleri geçersiz sayma hakkını saklı tutar, ve müşterilerin bahis
                           yatırımlarını iade eder. Müşterinin ikamet ettiği bölge yasak bölgeler
                           listesine girdiği an itibariyle hem tamamlanan hem de henüz gerçekleşmemiş
                           olan bahis oyunlarına birikmiş kazancıyla çoklu kombin bahis yapmışsa eğer
                           Limanbet bu gibi durumlarda, bahis kuponundan henüz daha gerçekleşmemiş
                           oyunları çıkarttıktan sonra tamamlanmış oyunların sonuçlarına göre
                           oranlarını sırayla yeniden hesaplar. Bahsedilen yeni hesaplama işleminden
                           sonra, bir müşteri pozitif bir sonuca sahip olduğu durumlarda, Hükümlerin
                           6.ıncı bölümündeki 'Ödemeler' ve 'Kazançlar'a’ uygun olarak ödeme yapılır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.5 Yasalar ya da herhangi bir diğer düzenleyici kural tarafından
                           yasaklanmış bölgelerde web sitesinin erişilebilir olması, müşteri
                           tarafından Limanbet'in söz konusu hizmetlerinin kumar hizmeti sağlama
                           haklılığı olarak yorumlanmamalıdır. Böyle bir erişilebilirlik durumu, bir
                           müşteri tarafından, sitenin oluşturduğu bir hizmet teklifi olarak, veya bu
                           hizmet teklifinin dayatması veya sitenin herhangi bir hizmetinden
                           faydalanma daveti olarak algılanmamalıdır. Bir müşterinin Limanbet
                           hizmetlerinden faydalanmasının bir sonucu olarak meydana gelebilecek
                           herhangi bir kanun veya yönetmelik ihlalinden hiç bir surete
                           Limanbet.sorumlu değildir
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.6 Limanbet, yalnızca on sekiz (18) yaşını doldurmuş veya kumar ya da
                           bahis oyunları oynama faaliyetlerinin kendi yetki alanları içerisinde
                           geçerli olan kanuna göre yasal yaştaki müşterileri kabul etmektedir. Yasaya
                           aykırı olan oyuncuların hesapları kapatılır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.7 Herhangi bir sınırlama olmaksızın doğru kayıt bilgilerinizi, doğum
                           tarihiniz, ikamet ettiğiniz ülkeniz, geçerli adresiniz, telefon ve kimlik
                           bilgileriniz dahil olmak üzere vermeyi kabul ediyorsunuz. Bu tür
                           ayrıntılardaki değişiklikleri bize bildirmeyi kabul ediyorsunuz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.8 Müşteri hesaplarının 30 ay kullanılmadığı durumlarda veya müşterinin
                           nerede olduğu bilinmediğinde, Limanbet hesap bakiyesini iptal etme hakkını
                           saklı tutar. Bu koşullar altında hesapları iptal etme yetkisi bulunan
                           makama hiçbir surette başvuru yapılamaz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.9 Çalışanların, hizmet sunucuların eski çalışanlarının ve/veya bağlı
                           şirketlerin elemanlarının bahis hesaplarını açmalarına izin verilmemektedir
                           ve Limanbet hizmetlerini ve promosyonlarını kendilerine avantaj sağlayarak
                           kullanamazlar. Aynı kurallar, yukarıda belirtilen şahısların aile üyeleri
                           için de geçerlidir. Bu kuralın ihlal edilmesi hesabın kalıcı olarak
                           kapatılmasına ve sözkonusu hesapların dolandırıcılık olarak
                           değerlendirilmesine neden olacaktır. Bu gibi faaliyetlerden doğan herhangi
                           bir kazanç, hesap sahibinin feshi gibi kabul edilecek ve sadece yatırılan
                           tutar hesap sahibine iade edecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           2.10 Limanbet, herhangi bir Şirket personeline yönelik hakaret içeren,
                           küfür, müstehcen, ırkçı, cinsiyet ayrımcılığı, ayrımcılık veya başka
                           şekillerde saldırgan olan herhangi bir dili kabul etmez ve bu tür bir
                           olayın gerçekleşmesi durumunda herhangi bir uyarı yapmadan hesapları
                           kapatma hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3. KİŞİSEL BAHİS OYUNLARI HESABINIZ
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.1 Hesabınızdaki ad, sizin gerçek, yasal adınız ve kimliğinizle
                           eşleşmelidir. Finansal işlemleriniz (hesap finansman seçenekleriniz),
                           hesabınızı finanse ettiğiniz veya hesabınızdan para çektiğiniz kredi kartı
                           veya diğer ödeme hesaplarının adıyla eşleşmelidir. Bahis oyunları ve para
                           yatırma hesaplarınız arasındaki ad ayrıntılarında tesbit edilen herhangi
                           bir tutarsızlık, Hükümler’in ihlali olarak kabul edilecek ve bu durumda
                           hesap bakiyeniz geçici olarak askıya alınacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.2 Müşterilerimizi Tanıyalım programımız çerçevesinde, para yatıran ve
                           çeken tüm müşterilerin, gerektiği herhangi bir zamanda, kimlik kanıtı,
                           adres kanıtı, ve ödeme kimliği kanıtı, ibraz etmeleri gerekir. Kimliğinizi
                           doğrulamak için, herhangi bir zaman, geçerli bir pasaport / kimlik kartı /
                           sürüş ehliyeti ve / veya kimlik ispatı için tatmin edici belgeler dahil
                           ancak bunlarla sınırlı olmayan; yine uygun adres kanıtı, üç aydan eski
                           olmayan yeni bir kamu hizmet faturası dahil ancak bunlarla sınırlı olmayan
                           tatmin edici bir adres belgesi talep etme hakkımızı saklı tutuyoruz.
                           Gerekli incelemeler makul zaman çerçevesinde yapılacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.3 Kara Para Aklamayla Mücadele ve Terörizm Finansmanının Önlenmesiyle
                           ilgili 2006 Kanun ve sistemin doğruluğu ve bütünlüğü bağlamında yüksek bir
                           güvenlik seviyesini korumak ve Limanbet Hizmet kullanımınızı doğrulamak
                           için, her hangi bir zaman kimliğinizi, yaşınızı ve / veya bize sağladığınız
                           kayıt verilerini (bir 'Güvenlik İncelemesi') bağlamında doğrulama hakkımızı
                           saklı tutuyoruz. Bunlar sizin Limanbet’nin sözleşmelerine ve koşullarına
                           uymanız ve Limanbet koşullarının ve şartlarının ve bağlantılı herhangi
                           yasanın ihlal edilme potansiyeline karşı mali işlemlerinizi Hizmetler
                           aracılığıyla gerçekleştirmeniz dahil ancak bunlarla sınırlı olmayan şekilde
                           olabilir. Bize ve acentelerimize hakkınızda gereken ilgili herhangi
                           soruşturmayı yapmamız için, ve bize verdiğiniz bilgilerin geçerliliğini
                           sağlamak için bu Sözleşmeler uyarınca, herhangi bir üçüncü şahsa bilgileri
                           göndermek; örneğin üçüncü tarafların veri tabanlarına karşı bir kredi
                           raporu ve / veya benzer belge talebinde bulunarak bilgilerinizi doğrulamak
                           için bizi yetkilendiriyorsunuz. Ve / veya üçüncü şahıs veritabanlarına
                           karşı bilgiyi doğrular. Buna ek olarak, bu Güvenlik İncelemelerini
                           kolaylaştırmak için, bizlere, sınırsız takdirde talep ettiğimiz an bilgi
                           veya belgeler sunmayı kabul etmektesiniz. Zaman zaman herhangi bir İnceleme
                           işlemi yaptığımız esnada, hesabınızdan para çekme ve / veya Limanbet
                           Hizmetlerinin tamamına veya belirli bölümlerine erişiminizi
                           kısıtlayabiliriz. Düzenlemeler, güvenlik veya diğer iş nedenlerinden dolayı
                           İnceleme işlemlerini zaman zaman tekrarlayabileceğimizi lütfen unutmayın.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.4 Kimliğiniz hakkında yanlış veya yanıltıcı bilgi vermek Kara Para
                           Aklamayla Mücadele ve Terörizm Finansmanının Önlenmesiyle ilgili 2006 Kanun
                           uyarınca suçtur. Sonuç olarak, özel durumlarda, ilk verilen belgelerin
                           yetersiz olduğu, sahte olduğu, İnternet üzerinden yasa dışı işlemler yapmak
                           için üçüncü taraflardan alındığı düşünüldüğü durumlarda, verilen bilgilerin
                           sadece ülkenin yerel dilinde (İngilizce hariç) olduğu durumlarda, hukuki
                           belgelerin resmi çevirilerini talep etmek de dahil ancak bunlarla sınırlı
                           olmamak üzere, sizinle iletişime geçerek sizden daha fazla bilgi talep
                           edebilir veya bilgiyi uluslararası kabul görmüş biçimde sunmanızı,
                           isteyebiliriz. İncelemeyi geçememeniz durumunda, hesabınızın kalıcı olarak
                           kapatılmasına ve hesabın ödenmemiş bakiyesinin askıya alınmasına neden
                           olabilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.5 Müşteriler, belge sunmayı reddederse, hiçbir belge sunmazsa veya
                           kriterlere uymayan (sahte, değiştirilmiş, güvenlik kontrolleri başarısız
                           gibi) belgeler sunarlarsa Limanbet bu gibi durumlarda oyuncuların
                           hesaplarını derhal kapatma ve hesap bakiyelerini iptal etme hakkını saklı
                           tutar. Böyle durumlarda, müşteriler tüm kazançlara ilişkin haklarını
                           kaybedecekleri gibi bilmelidirler ki depozitoları da geri ödenmeyebilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.6 Doğrulama İncelemeleri kapsamında, yaşınızı, kimliğinizi, adresinizi ve
                           ödeme ayrıntılarınızı doğrulamak için üçüncü taraf kuruluşlardan
                           faydalanabiliriz. Bu süreç, açıklanan ayrıntıları belirli (kamu veya özel)
                           veritabanlarına karşı kontrol etmeyi içerir. Bu sürece girerek, kişisel
                           bilgilerinizi kullanabileceğimizi, kaydettiğimizi ve ifşa edebileceğimizi
                           kabul etmiş oluyorsunuz ve bu veriler bizim veya onlar tarafından
                           kaydedilmiş olabilir. Güvenliğiniz için, bizimle yaptığınız tüm telefon
                           görüşmeleri kaydedilebilir ve denetlenebilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.7 Limanbet, sitenin Servislerini web tabanlı versiyonu da dahil olmak
                           ancak bununla sınırlı olmamak üzere kullanmanızla bağlantılı olarak birden
                           (1) fazla hesaba kaydolmanıza izin vermemektedir. Birden fazla hesaba
                           kaydolur veya oluşturursanız, Limanbet tarafınızdan tutulan herhangi bir
                           veya tüm hesapları feshetme hakkını saklı tutar. Limanbet, tek bir hesap
                           sahibine ödenebilecek azami tutarı bağlı hesaplara yaymak yoluyla aşmayı
                           amaladığınızı ve bunu:
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           i. birden fazla hesaba kaydolarak ve / veya kullanarak; ve / veya
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           ii. bir veya birden fazla şahısla işbirliği yaparak farklı miktarda
                           Limanbet hesapları kullanarak (farklı bahislerle oynanıp oynatılmadığına,
                           farklı fiyat aralıklarına ya da farklı günlerde olmasına bakılmaksızın,)
                           aynı maç / oyun kombinleri oynandığına inanırsak, şahsi karar verme
                           yetkimizi de kullanarak bu davranıştan kaynaklanan kazançları durdurma
                           hakkımızı saklı tutarız.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           3.8 Limanbet, birden çok hesapla ilgili olarak hileli faaliyet yoluyla
                           yaratılan para veya kazançlara el koyma hakkını saklı tutar. Şirketi
                           dolandırmak amacıyla makul gerekçelere dayanarak birden fazla hesap
                           açıldığına inanırsak eğer, söz konusu dolandırıcılık girişimleriyle ilgili
                           herhangi bir işlemi iptal etme hakkını saklı tutuyoruz. Aynı kişisel
                           bilgilere, banka hesabına, IP adresine ancak bunlarla sınırlı olmayan her
                           türlü hesaplar "Kopyalanmış Hesaplar" olarak kabul edilecektir. Kopyalanmış
                           Hesaplar bizim tarafımızdan derhal kapatılabilir; hesap bakiyeleri sahibi
                           tarafından feshedilmiş sayılacaktır. Böyle bir durumda yatırımlar Limanbet
                           tarafından incelenmeye tabi olacaktır. Belgelerin sahte oluşu veya
                           doladırıcılık faaliyetlerinden dolayı şirketin herhangi bir kayıp yaşaması
                           durumunda, zararın eşit tutarı kadar oyuncunun hesabındaki yatırımdan
                           çekilecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4. LIMANBET HİZMETLERİNDEN YARARLANABİLMEK LE İLGİLİ KULLANIM KOŞULLARI
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.1 Bahislerinizle para kaybedebileceğinizi ve böyle bir kayıptan tamamen
                           siz sorumlu olduğunuzu kabul edersiniz. Hiçbir koşul altında sizin
                           tarafınızdan herhangi bir bahisle kaybedilen miktarların bizden geri
                           alınamayacağını kabul edersiniz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.2 Bulunduğunuz konut veya ikamet yerinizin ve / veya bulunduğunuz
                           bölgenin bahis oynamaya izinli olduğunu doğrulamak sizin
                           sorumluluğunuzdadır ve bizimle bahis oynamanızı yasaklayan bir yargı
                           bölgesinde bulunduğunuzda bizimle bahse girmeyeceğinizi kabul etmektesiniz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.3 Hizmetlerimizi sadece meşru bahis amaçlı kullanmayı taahhüt edersiniz.
                           Özellikle,
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           i. ticari faaliyetlerimizde herhangi bir hasara yol açmayı ya da sebebiyet
                           vermeyi ya da engelleme faaliyettinde bulunmayı amaçlayan veya bizim
                           üzerinde herhangi bir vergi, haciz veya harç toplama yetkisi de dahil olmak
                           üzere ancak bunlarla sınırlı olmayan bir yükümlülük yaratma amacıyla
                           faaliyette bulunmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           ii. bahis yapmanın yasak olduğu bölgelerden herhangi bir spor veya yarış
                           için bahis veya bahislerin oynanmasını destekleyen bilgi aktarımı
                           yapmamayı; ve/veya
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           iii. doğrudan veya dolaylı olarak, üçüncü bir tarafın yasadışı olan
                           herhangi bir bölgedeki bir spor veya yarışma için bahis veya bahislerin
                           oynanmasını destekleyen bilgi aktarımı yapmasını sağlayacak düzenleme
                           yapmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           iv. siteye girmek için kullandığınız bilgisayarın IP adresini herhangi bir
                           şekilde saklamaya çalışmak veya siteye girerken kullandığınız bilgisayarın
                           gerçek IP adresini doğru bir şekilde tespit etmemize engel olmak için
                           girişimde bulunmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           v. kendi kişisel bilgileriniz dışında başka bilgi kullanarak bir bahis
                           hesabına kaydolmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           vi. üçüncü bir şahıs adına hareket etmemeyi;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           vii. yasadışı işlemlerden elde edilen para yatırmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           viii. müşterinin kullanması için yetkilendirilmemiş bir kredi kartı
                           kullanarak para yatırmamayı; para kazanmak planıyla üçüncü tarafla birlikte
                           bu tür bir kredi kartını kullanarak sahtecilik yapmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           ix. kişisel veya üçüncü taraf hesaplarını kullanarak kara para aklama veya
                           diğer yasadışı faaliyetlerde bulunmamayı;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           x. tranfer hesabını başkalarına satmamayı taahhüt edersiniz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.4 Mevcut para aklamayla mücadele kurallarının uyarınca, oyuncu yalnızca
                           Limanbet hesabına Servislerimizi kullanmak ve bahis oyunu oynamak için para
                           yatırabilir. Aynı şekilde, oyuncu Limanbet hesabına yatırılan paraları
                           değil, sadece kazançları çekebilir. Oyun etkinlikleri olmadan para yatıran
                           veya çeken oyuncuların ileriki bir duyuruya kadar fonlarını bloke
                           edilecektir. Limanbet bir finansal kuruluşu değildir ve mevduata faiz
                           vermez. Her halukarda, Limanbet, belirli ülkelerdeki ödeme yöntemlerine ve
                           / veya belirli oyunculara kısıtlamalar uygulamak için sınırsız hakkı saklı
                           tutar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.5 Kara para aklama faaliyetlerini önlemek için makul tüm önlemleri
                           alacağız ve Limanbet bunun gerçekleşmediğinden emin olmak için uluslararası
                           denetimlere bağlıdır. Kara para aklamanın ve terörizmin finansmanının
                           risklerini belirlemek için küresel kara para aklama prosedürleri ve
                           parametreleri yürürlüktedir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.6 Limanbet Hüküm ve Koşullarına ve müşterilerin risk profiline uygun
                           olarak müşteri hareketlerinin meşruiyetini değerlendirmek için müiterinin
                           finansal alışkanlıklarını ve davranışlarını incelemek amacıyla her hesaba
                           yönelik gerekli adımlar atılacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           4.7 Limanbet Hizmetleri, tüm kullanıcıların yalnızca eğlence amacıyla
                           kullanılması içindir. Limanbet eğer eğlence amaçı dışında herhangi bir amaç
                           için kullanıldığından şüphelenirse, hesap, risk yönetimi protokolleri
                           uyarınca Limanbet ticari kararına göre sınırlandırılabilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           5. KULLANICI ADI, ŞİFRE, (LIMANBET'NİN) KİŞİSEL HESAP BİLGİLERİ İLE İLGİLİ
                           İFŞA
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           5.1 Müşteriler en az 6 karakterli sayı ve harf içeren bir parola
                           oluşturmaları önerilir. Müşteriler, kullanıcı adlarına veya diğer yaygın
                           bilgilere benzer bir şifre seçmekten kaçınmalıdır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           5.2 Üyelik kaydı esnasında tarafınızdan seçilen kişisel hesabınızın
                           kullanıcı adı, şifre ve diğer kayıtlı bilgileriniz herhangi bir üçüncü
                           kişiye açıklanmamalıdır. Üçüncü bir tarafın Limanbet dışında herhangi bir
                           yolla Limanbet kişisel hesabınıza erişmesi halinde, paranızın durumundan ve
                           hesabınızda saklanan herhangi bir kişisel bilgiden yalnızca siz
                           sorumlusunuz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           5.3 Kullanıcı adınızı, şifrenizi ve diğer kişisel bilgilerinizi güvenli ve
                           gizli tutmayı ve herhangi bir üçüncü şahsın kullanımına izin vermemeyi
                           kabul edersiniz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           5.4 Kullanıcı adlarının ve güvenlik ayrıntılarının güvenli bir şekilde
                           muhafaza edilmesini sağlamak, müşterilerin kendi sorumluluğudur.
                           Şüphelenilen bir ihlal varsa müşteriler önceki güvenlik bilgilerini iptal
                           edip yeni giriş bilgileri talep etmeleri için gerekli güvenlik tedbirleri
                           almaları gerekir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           5.5 Müşteriler, Limanbet ile oturum açarken veya iletişim kurarken doğru
                           kullanıcı bilgileri sağlamaları gerekmektedir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6. ÖDEMELER
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.1 Limanbet hesabına cep telefonu numarasıyla para aktararak para yatırmak
                           mümkündür. Yeni ödeme yöntemleri eklendikçe bildirimleri anasayfamızda
                           yapılacak ve e-postayla gönderilecektir. Her yeni yatırma yöntemi için
                           Hükümler ve Koşullar buna göre güncellenecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.2 Cepbank işlemleri, hesaptan kayıtlı cep telefonu numarasına
                           gönderilerek yapılır. kayıtlı cep telefonundan hesaba gönderilerk yapılır.
                           Bu, para göndermenin hızlı ve güvenli bir yoludur ve mevduat sayfasında
                           bulunan sizin belirlediğiniz banka aracılığıyla yapılabilir. Bu işlem
                           hakkında ayrıntılı bilgi, seçilen bankanızın ilgili mevduat sayfasında
                           bulunur.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.3 Para yatırma talebi yapıldıktan ve form tamamen doldurulduktan sonra,
                           paranın Limanbet hesaplarına ulaşması 15 dakika ila 2 saat alır. Bu süreyi
                           aşan herhangi bir gecikme Limanbet müşteri desteğine bildirilmelidir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.4 Oyunculaın sadece kişisel bilgilerini ve kişisel banka hesaplarını
                           kullanmalarna izin verilir. Oyuncular para yatırma formundaki bilgilerin
                           doğru olduğundan emin olmakla yükümlüdürler.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.5 Para yatırma formunda sağlanan oyuncu bilgileri, Limanbet tarafından
                           muhafaza edilen oyuncu verileriyle tamamen aynı olmalıdır. Bir hesaptan
                           para çekme işlemleri ancak hesaba kayıtlı olan kişiye hitaben yapılabilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.6 Oyuncular Limanbet’in para çekme sayfasında bulunan listelenen
                           bankalardan herhangi birinden para çekme talebinde bulunabilirler. Zaman
                           içerisinde Bankaların sayısı artacak ve para çekme yöntemleri eklenecektir.
                           Yeni eklemeler ana sayfamıza dahil olacak ve eklendikçe gerekli bildirimler
                           e-posta yoluyla gönderilecek. Buna bağlı olarak para çekme Hüküm ve
                           Koşulları da güncellenecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.7 Para çekme talebinizde herhangi bir tutarsızlık olmadığı takdirde, para
                           çekme talebiniz 24 saat içinde işleme koyulacaktır. Zaman çerçevesi garanti
                           edilmez ve zaman zaman (hesap ve bilgi doğrulama, resmi tatiller, banka
                           çalışma saatleri gibi sebeplerden dolayı) gecikmeler olabilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.8 Para çekme talimatı verdiğiniz an itibarıyle hesabınıza borç
                           geçirilecektir. Para çekme talepleri her gün yapılabilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.9 Para çekme talebinizle ilgili bir sorun oluşursa, işlem iptal edilir ve
                           para hesabınıza geri yüklenir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.10 Hesabınızda bir bonus miktarı varsa, para çekme talebinde bulunmadan
                           önce bonusun devredilme koşullarını yerine getirmeniz gerekir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.11 Oyuncular, ilk para yatırma miktarlarını tam olarak kullandıktan sonra
                           para çekme talebinde bulunabilirler.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           6.12 Oyuncu para çekme formunda sağladığı bilgileri ile Limanbet tarafından
                           tutulan oyuncunun verileri tamamen aynı olmalıdır. Diğer taraflara yapılan
                           para çekme talepleri dikkate alınmayacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           7. ELEKTRONİK HİZMET SAĞLAYICISI
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           7.1 Limanbet Hizmetlerini kullanabilmek için, bize para göndermeniz ve
                           bizden para almanız gerekebilir. Bu gibi finansal işlemleri
                           gerçekleştirebilmek için üçüncü taraf elektronik ödeme işlemcilerini ve /
                           veya finansal kurumları ('ESP'leri) kullanabiliriz. Bu tür ESP'lere mevduat
                           hesabınıza para yatırıma veya para çekme için işlem yapabilme talimatı
                           verebilmemiz için gerektikçe bize gayrikabil-i rücu izin veriyorsunuz ve
                           platformlarımızdaki ilgili özellikleri kullanarak sunduğunuz talebiniz
                           doğrultusunda gayrikabil-i rücu olarak sizin adınıza talimat verme izni
                           veriyorsunuz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           7.2 İlgili tüm ESP’lerin öngördüğü düzenlemelere uymayı kabul ediyorsunuz.
                           Bu Anlaşmalar ve ESP düzenlemeleri arasında uyumsuzluk ve / veya
                           anlaşmazlık olması durumunda, bu Anlaşmalar hüküm sürdürecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8. KAZANANLAR
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.1 Bahis bürosu hesaplamaları ilk sonuçlara göre netleştirir. Sonraki
                           diskalifiyeler ve iptaller hesaplamaları etkilemez.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.2 Kazançlar tespit edilen oranlarla çarpılır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.3 Bahisler tamamlandıktan sonra kazanan oyuncuların hesaplarına kazanılan
                           miktarlar aktarılır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.4 Müşteriler, hatalı işlemler sonucunda hesaplarına ek para yatırımı
                           yapılmışsa bu bilgiyi Şirkete haber vermekle yükümlüdürler. Aksi takdirde,
                           bu işlemle ilişkili olan kazançların tamamı iptal edilerek kazanım miktarı
                           Limanbet şirketinin hesabına çevrilecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.5 hesabının daha önce kapatılmış bir bahis tekrar hesaplandıktan sonra
                           Kullanıcının hesabı sıfır bakiyesinin altına düşmesi durumunda, oyuncu
                           hesap bakiyesini sıfıra veya üstüne getirmek için yatırım yapmalıdır. Bu
                           gerçekleşinceye kadar şirket hesapları engeller.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.6 Müşterinin para çekme işlemi için kullanacağı hesap müşterinin kendi
                           adına olmalıdır. Aksi halde para çekme talimatları dikkate alınmayacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           8.7 Oyuncu, para yatırmak için kullanılan ödeme yöntemine iptal veya geri
                           ödeme talebinde bulunmayacağını beyan ve kabul eder. Para yatırma işleminin
                           kullanıcıya geri ödenmesi veya iade edilmesi durumunda şirket, uygun
                           olmayan yatırımlarda kullanılan hesaplardan giderler de dahil olmak üzere
                           tam ödeme almak için harekete geçecektir. Hesabın, oyuncu hesabına bahis
                           faaliyetleri dışındaki herhangi bir uygunsuz işlem için aktarıldığı tespit
                           edilmesi durumunda, şirket (hesabın geçici olarak askıya alınop almadığına
                           bakılmaksızın) masraflar için müşteriden ek ücret talep edebilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           9. CANLI BAHİS
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           9.1 Canlı bir etkinlikte sergilenen istatistikler (Skor, saat vb. gibi)
                           yalnızca genel bilgi içindir. Doğruluk garantisi yoktur ve bahis oynarken
                           dikkate alınmamalıdırlar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           9.2 Paraları yatırılan bahisler bekleme modunda tutulacak ve sonra kabul
                           edilecek veya iptal edilecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           9.3 Bahisler bekleme modundayken piyasada önemli bir değişiklik meydana
                           gelmişse iptal edileceklerdir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           9.4 Şirket, önceden bildirimde bulunmaksızın herhangi bir piyasaya yapılan
                           bahisleri askıya alma hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           9.5 Şirket, bahislerin sonuçlar yayınlandıktan sonra yapıldığına dair makul
                           bir şüphesi olduğuna inanırsa veya teknik arıza sırasında yanlış oranla
                           yapılan bahis oyuncuya haksız avantaj elde etmesine neden olmuşsa şirket,
                           bu şartlar altında bahisleri iptal etme hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           10. GİZLİLİK
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           10.1 Yasal olarak, Limanbet Web sitesini kullanımınız sırasında sizden
                           toplanan kişisel bilgilerinizin ne şekilde kullandığımızı belirleyen veri
                           koruma koşullarına uymamız gerekmektedir. Dolayısıyla, kişisel
                           bilgilerinizi kullanma biçimimizle ilgili yükümlülüklerimizi çok ciddiye
                           alıyoruz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           10.2 Bize bilgi vererek, Kişisel Bilgilerinizi Şartlar'da belirtilen
                           amaçlar doğrultusunda işleme koymamız için, Limanbet Web sitesini
                           çalıştırmak veya yasal ya da düzenleyici yükümlülüklere uymak için izin
                           vermiş olursunuz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           10.3 Şirket politikası gereği, hiçbir kişisel bilginin, bu bilgiye erişim
                           ihtiyacı olan hizmet sunmakla yükümlü olanlar dışında herhangi üçüncü
                           tarafla paylaşılamaz.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           10.4 Sizden aldığımız bilgilerin doğru kayıtlarını tutmak için bize
                           gönderdiğiniz herhangi bir iletişim kopyasını (herhangi bir e-postanın
                           kopyaları da dahil olmak üzere) alacağız.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           11. LIMANBET TANITIMLARI VE TALEP EDİLMEMİŞ E-POSTA POLİTİKASI
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           11.1 Bir oyuncu e-posta adresini Limanbet’ye emanet ederse aksini
                           belirtilmedikçe, Limanbet’nin oyuncunun merak ve ilgisini çekebileceğini
                           düşündüğü ürün, hizmet ve özel teklif bildirimlerini e-posta yolu ile
                           almayı açıkça kabul eder. Bu tür abonelik, herhangi bir zamanda oyuncu
                           tarafından iptal edilebilir. Oyuncu e-posta adresine gelen ürün
                           bildirimlerini iptal etmek istiyorsa, Limanbet’in iletişim e-posta adresine
                           gönderilen bir e-postanın referans satırındaki "UNSUBSCRIBE" sözcüğüyle
                           birlikte gönderilmesinden üç gün içinde posta listesinden silinir. .
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           11.2 Tüm bonus ve promosyon teklifleri, iletilirken mevcut olan şartlara ve
                           koşullara tabidir. Prensip olarak, tüm bonuslar ve teklifler yalnızca
                           promosyonel bildiriminin alıcısına yöneliktir ve öngörülen bir zaman dilimi
                           içerisinde yalnızca bir kez kullanılabilir. Promosyon teklifleri paraya
                           çevrilemez, ancak belirli bonus koşullarına tabi kalmaya devam eder.
                           Limanbet, dolandırıcılık ve hile yoluyla bonus ve promosyon ve bonuslardan
                           elde edilen tüm kazanımları sınırsız olarak oyuncudan geri alma hakkını
                           saklı tutar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           11.3 Birkaç kez kayıt yapıp, sahte hesap açan veya bonus tekliflerinden
                           haksız avantaj elde etmek için front men kullanan birlikte hareket eden
                           oyuncu grupları, veya ortaklık kurmuş ya da bireysel oyuncu olarak hareket
                           edenlerin tespit edilmeleri halinde Limanbet bonus tutarlarına, bu bonus
                           teklifleriyle yapılan kazanımları iptal etme ve hesapları kapatma hakkını
                           saklı tutar. Eğlence amaçlı olmayan oyuncular ve bonus promosyonlarını
                           kötüye kullanmaya çalışanlar promosyonlardan sınırlandırılır. Limanbet,
                           herhangi bir bonus teklifini herhangi bir zamanda feshetme veya değiştirme
                           hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           12. DOLANDIRICILIK FAALİYETLERİ, YASAKLANMIŞ İŞLEMLER VE PARA YATIRMA
                           TEYİTLERİ
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           12.1 Uygunsuz oyun oynamaya ve dolandırıcılık faaliyetlerine karşı sıfır
                           tolerans politikamız vardır. Bu faaliyetler arasında oyunu manipüle etme
                           veya ödemede hile yapma, veya çoklu döviz hizmetlerini manipüle etme dahil
                           ancak bunlarla sınırlı olmayan, çalıntı kredi kartlarının kullanımı veya
                           diğer dolandırıcılık faaliyetleri (örneğin, ödeme iadesi veya ödeme iptali)
                           veya yasaklanmış işlem (örn. para aklama) ya da banka veya ESP'nin
                           işlemlerinizi yürütmemesi dahil ancak bunlarla sınırlı olmayan
                           faaliyetlerdir. Bu tür sahtekarlık faaliyetleri hesabın kapatılmasına neden
                           olacaktır. Bu faaliyetlerden doğan herhangi bir kazanç iptal edilecek ve
                           yatırılan tutar Limanbet tarafından incelenecek ve hesap sahibine iade
                           edilemeyecektir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           12.2 Tamamen kendi takdirimize bağlı olarak, bizi ve / veya Grubu veya
                           Limanbet Hizmetlerini kullanan herhangi bir başka üyeyi aldatığınız veya
                           kandırmaya kalkıştığınız tespit edilirse, hesabınızı askıya alma ve / veya
                           kapatma hakkını saklı tutar ve uğranılan zararı geri almak için yasal olan
                           aşağıdakiler dahil herhangi bir yöntemi kullanarak ancak bunlarla sınırlı
                           olmayan:
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           i. tarafınızdan ödenecek tutarı hesabınızdan çekme;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           ii. üçüncü parti tahsilat kurumlarına borçun tahsilatı için talimat verme.
                           Bu kredi derecelendirmenizi olumsuz yönde etkileyebilir ve kişisel
                           bilgilerinizi (kimliğiniz dahil) uygun ajanslarla paylaşmamızı
                           gerektirebilir.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           13. HAKKIN YİTİRİLMESİ VE HESAP KAPANIŞI
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           13.1 Eğer:
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           i. bu Anlaşmalardan herhangi birini ihlal ettiyseniz;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           ii. sahtekarlık, gizli anlaşma (ödeme iadesi ile ilgili olanlar da dahil
                           olmak üzere) veya yasadışı ya da uygunsuz (çoklu para birimini tesislerinin
                           herhangi bir manipülasyonu dahil ancak bununla sınırlı olmayan)
                           faaliyetlerde bulunmak amacıyla Hizmetleri kullandığınız veya bunları
                           kullanmaya çalıştığınızı fark edersek;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           iii. diğer çevrimiçi oyun sitelerinde veya hizmetlerde oynadığınızı ve
                           sahtekarlık, gizli paylaşım (ödeme iadesi ile ilgili olanlar da dahil olmak
                           üzere) veya yasadışı ya da uygunsuz faaliyetlerde bulunduğunuzu fark
                           edersek;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           iv. hesabınızla yaptığınız tüm satın alma işlemleri veya para
                           yatırımlarınız için ‘ödeme iadesi' talebinde bulunduysanız veya satın alma
                           işlemlerini reddettiyseniz;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           v. iflas ederseniz veya dünyanın herhangi bir yerinde buna eşdeğer işlemler
                           gerçekleşirse;
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           vi. ilgili mahkemeler tarafından uluslararası veya yerel para aklama
                           kurallarını ihlal ettiğiniz kanıtlanmış ve yasalar göre karara bağlanmışsa:
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           Tamamen kendi sınırsız takdirimize bağlı olarak, hesabınızla ilgili, veya
                           herhangi bir ESP hesabınızla ilgili (bu terimin madde 7.1 ve 7.2'de
                           tanımlandığı gibi), diğer sitelere ve / veya kumarhaneler ve / veya bize
                           ait veya adımıza işletilen hizmetleri ve oyun hizmetlerini kullanmanız
                           durumunda veya ortak oyun/masa platformuna sahip herhangi hizmet ile ilgili
                           anlaşmaları feshetmek hesap bakiyenizi tevkif etmek, hesabınızı askıya
                           almak ve bu gibi durumlardan kurtulmak için etkilenen ödemelerin,
                           bonusların ve kazançların tutarını bu hesaplardan geri alma hakkımızı saklı
                           tutarız.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           14. TÜM ANLAŞMA, DEĞİŞTİRME VE DEĞİŞİKLİKLER
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           14.1 Tarafımızdan değiştirilen ve / veya değişiklik yapılan bu Anlaşmaları
                           tam olarak anlıyor ve onlara bağlı kalmayı kabul ediyorsunuz. Bu
                           Anlaşmaları, yeni şartları önceden bildirmeksizin istediğimiz zaman
                           değiştirebiliriz, ancak tüm yeni Hükümler ve Koşullar, Limanbet’nin ilgili
                           sayfasında veya siteye eriştiğiniz herhangi bir konumda yayınlanacak ve /
                           veya değiştirilecektir. Yapılan tüm değişiklikler, yayınlandıktan on beş
                           (15) gün içerisinde yürürlüğe girer. Herhangi bir değişiklik sizin için
                           kabul edilemez ise, Hesabınızı kapatarak Limanbet ile ilgili Anlaşmanızı
                           feshedebilirsiniz. Limanbet ile sizin aranızdaki Hükümler ve Koşulların
                           veya Anlaşmaların değiştirilmesinden sonra ve / veya değişilliklerin
                           yürürlüğe girdikten sonra, Hizmetler'i kullanmaya devam etmeniz halinde
                           değişikliklerin sizin tarafınızdan kabul edildiği yönünde anlaşılacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           14.2 Hizmetler'e her eriştiğinizde, bu Anlaşmaları ve değişiklikleri gözden
                           geçirmek tamamen kendi sorumluluğunuzdadır. Değiştirilen herhangi bir
                           Anlaşma (ve burada adı geçen belgeler), Siz ve Bizim aramızdaki tam ve
                           nihayi Anlaşmayı temsil eder ve Siz ve Bizim aramızdaki tüm önceki
                           Anlaşmaları geçersiz kılar.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           15. MUHTELİF
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           15.1 Limanbet Hizmetlerinin bu Hükümler ve Koşulları ile Limanbet
                           Hizmetlerinde bahsedilen oyun kuralları veya diğer belgeler arasında
                           çelişki olması durumunda, Limanbet Hizmetlerinin bu Hüküm ve Koşulları
                           geçerli olacaktır.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           15.2 BU ANLAŞMALAR BAŞKA BİR DİLE TERCÜME EDİLDİYSE, ÇEVİRİ DİLİ VE
                           İNGİLİZCE DİLİ VERSİYONU ARASINDA HERHANGİ BİR ÇATIŞMADA DURUMUNDA
                           İNGİLİZCE VERSİYONU GEÇERLİ OLACAKTIR.
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;"><span style="color: rgb(255, 255, 255);">
                           15.3 LÜTFEN BU HÜKÜM VE KOŞULLARI ÇIKTI ALARAK BAŞVURABİLECEĞİNİZ BİLGİLER
                           OLARAK SAKLAYINIZ. AYRICA, AKTİVİTELERİNİZE UYGUN OLARAK TÜM İŞLEM
                           MAKBUZLARINIZI VE OYUN KURALLARINI DA ÇIKTI ALARAK SAKLAMANIZI ÖNERİRİZ.
                           </span>
                        </div>
                     </div>
                     <div class="ng-star-inserted"></div>
                     <div class="ng-star-inserted"></div>
                     <!----><!---->
                  </app-static-inner-content>
               </div>
            </div>
            <div id="checkOurTermsAndConditionsModal" materialize="modal" class="modal pad-10 signup-check-modal" style="z-index: 1139;">
               <div class="modal-close-button right"><a><i class="fa fa-times"></i></a></div>
               <div class="mdl-hdr">
                  <div class="header-content">
                     <h3> Dikkat </h3>
                  </div>
               </div>
               <div class="modal-content"><span></span></div>
               <a class="btn primary-color right">Kapat</a>
            </div>
            <div id="privacyPolicyModal" materialize="modal" class="modal" style="z-index: 1141;">
               <div class="mdl-hdr">
                  <div class="header-content">
                     <div class="modal-close-button"><a><i class="fa fa-times"></i></a></div>
                  </div>
               </div>
               <div class="modal-content">
                  <app-static-inner-content contentcode="about-us-privacy-policy">
                     <div extroutelink="" id="about-us-privacy-policy" class="ng-star-inserted">
                        <div><span style="color: rgb(255, 255, 255);">
                           Gizlilik Politikası
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Limanbet, bu Gizlilik Politikasını online sitelerimizde hizmetlerimizi
                           (toplu olarak 'Hizmet') kullandığınızda hangi bilgileri topladığımızı, bu
                           bilgileri neden topladığımızı ve toplanan bilgiyi nasıl kullandığımızı
                           bildirmek için oluşturmuştur.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Zaman zaman bu Gizlilik Politikasın’da değişiklikler yapabiliriz. Bu
                           durumda sizleri değiştirilen şartlarla ilgili online sitelerimizde
                           bilgilendireceğiz. Bu Gizlilik Politikasını düzenli olarak tekrar ziyaret
                           etmenizi öneririz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           1. Toplanan Bilgiler
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bizler bir şahsı tanımlamak için kullanılabilecek ad, soyad, doğum tarihi,
                           kredi kartı bilgileri, ev veya diğer fiziksel adresleri, e-posta
                           adreslerini, telefon numaralarını ve diğer iletişim bilgilerini içeren
                           ancak bunlarla sınırlı olmayan bilgileri "Kişisel Bilgiler" olarak
                           değerlendiririz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bir hesap açmak durumunda kayıt olurken veya Hizmetlerimizi kullanırken
                           Kişisel Bilgilerinizi vermeniz istenebilir. Topladığımız Kişisel Bilgiler,
                           iletişim bilgileri (telefon numarası dahil), nakliye bilgileri, fatura
                           bilgileri, işlem geçmişi, web sitesi kullanım tercihleri, ​​ve Hizmetle
                           ilgili geribildirim gibi bilgileri içerebilir.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Ayrıca, Hizmetle etkileşimde bulunulduğunda, sunucularımız Kaynak IP
                           adresi, erişim zamanı, erişim tarihi, ziyaret edilen web sayfaları,
                           kullanılan dil, yazılım arızalanma raporları ve kullanılan tarayıcı türü
                           gibi bir takım idari ve trafik bilgilerini içeren size özel faaliyet kaydı
                           tutar:
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmetin sağlanması ve kalitesi için bu bilgi önemlidir. Sizin bilginiz
                           olmadan Hizmet üzerinden Kişisel Bilgilerinizi toplamayız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           2. Veri Toplama ve İşleme Verme Yöntemleri
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Kişisel Bilgileriniz bize, sizi Limanbet sitesine yönlendiren çevrimiçi
                           tedarikçilerden ve hizmet sağlayıcılardan gelebilir ayrıca üçüncü taraf
                           tedarikçilerden yasal olarak edinilen müşteri listelerinden edinilebilir.
                           Buna ek olarak, teknik destek sağlamak, çevrimiçi işlemlerinizi yürütmek ve
                           çevrimiçi hesabınızı korumak için üçüncü taraf hizmet sağlayıcılarının
                           hizmetlerinden yararlanabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bu tür tedarikçilere, servis sağlayıcılara ve üçüncü taraf e-ticaret
                           hizmetlerine verdiğiniz tüm bilgilere erişeceğiz ve Kişisel Bilgileri
                           aşağıdaki bölüm 3'te belirtildiği gibi kullanacağız. Bu bilgi, sadece kendi
                           personelimize ve işlemlerinizin tamamlanmasını sağlayacak olan 3. taraflara
                           veya aşağıda 3. bölümde belirtildiği şekilde sizin Hizmet kullanımınızı
                           desteklemek amacıyla ifşa edilebilir. 3. taraf hizmet sağlayıcılar ve
                           çevrimiçi tedarikçiler ile yaptığımız düzenlemelerde sizin gizliliğinizin
                           korumasını sağlamak için önlemler alıyoruz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           3. Bilgi Kullanımı
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Sizden topladığımız Kişisel Bilgileri, Hizmetimizi sunmak, müşteri desteği
                           vermek, gerekli güvenlik ve doğrulama kontrollerini yapmak, çevrimiçi
                           işlemlerinizi yürütmek, belirli iş gereksinimlerini karşılamak ve Hizmetin
                           işleyişi ile bağlantılı olan her türlü amaç için kullanırız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmeti sağlamak, Limanbet ürün ve hizmetleri ile ilgili promosyon teklif
                           ve bilgileri size sunabilmek ve Limanbet’nin ürün ve servis çeşitlerini ve
                           Müşteri Hizmetini daha iyi sunabilmek amacıyla, Kişisel Bilgileriniz bağlı
                           şirketlerimiz, yan kuruluşlarımız, acentelerimiz ve tedarikçilerimizle
                           paylaşılabilir.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Zaman zaman, anketler veya yarışmalar yoluyla sizden bilgi isteyebiliriz.
                           Bu anket veya yarışmalara katılım tamamen gönüllüdür ve bu nedenle, bu tür
                           bilgilerin ifşa edilip edilmemesi konusunda seçim yapma tercihiniz vardır.
                           Talep edilen bilgiler arasında isim, yazışma adresi ve telefon numarası
                           gibi iletişim bilgileri ve posta veya posta kodu ya da yaş gibi demografik
                           bilgiler olabilir.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bir ankete ya da yarışmaya katılmayı seçer ve yarışmayı kazanırsanız,
                           tarafımızdan verilen herhangi bir yarışma ödülünü ya da kazancını kabul
                           ederek, yasa ile yasaklanmış durumlar dışında, adınızın ve diğer
                           bilgilerinizin reklam ve tanıtım amaçlı ek tazminat olmaksızın
                           kullanılmasını kabul etmiş olursunuz. Promosyon bilgisi almama tercihi
                           yapmadığınız taktirde, size ait Kişisel Bilgilerinizi (e-posta adresiniz ve
                           telefon numaranız da dahil olmak üzere) kullanarak size diğer benzer
                           ürünlerimiz, hizmetlerimiz ve diğer oyun ürünlerimiz dahil promosyonlarımız
                           hakkında bilgi vermek için kullanabiliriz. İşbu Gizlilik Politikasında
                           belirtilenler haricinde, Kişisel Bilgilerinizi satmayacağız, kiraya
                           vermeyeceğiz veya paylaşmayacağız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           4. Bilgilerin İfşa Edilme Durumları
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Yasalar gerektirdiği takdirdi Kişisel Bilgilerinizi açıklayabiliriz veya
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Bize, herhangi Limanbet sitesine veya Hizmete gelen herhangi bir yasal
                           süreci yerine getirmek için
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Haklarımızı veya mülkiyetimizi koruyabilmek ve savunmak için
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Hizmet kullanıcılarının veya kamuoyunun kişisel güvenliğini korumak için
                           samimiyetle gerekli olduğuna inanırsak Kişisel Bilgilerinizi
                           açıklayabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div></div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Eğer Limanbet’ye veya Hizmetten yararlanan herhangi başka kullanıcıya karşı
                           hile yapma veya dolandırma teşebbüsünde olduğunuzu düşünürsek buna oyun
                           manipülasyonu, ödemede sahtekarlık dahil ancak bunlarla sınırlı olmayan
                           veya çalıntı kredi kart kullanarak sahtekarlıkla ödemeler yaptığınız
                           yönünde veya diğer hileli etkinlikler (buna herhangi bir para iadesi veya
                           ödemenin geri dönmesi dahil) veya yasaklanmış işlemler (kara para aklama da
                           dahil olmak üzere), yaptığınız yönünde tamammen kendi insiyatifimize bağlı
                           olarak sizden şüphelenirsek bu bilgileri (kimliğinizle birlikte) diğer
                           online oyun siteleriyle, bankalarla, kredi kartı şirketleriyle ve uygun
                           ajanslarla paylaşma hakkımızı saklı tutarız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div></div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           5. Erişim
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Limanbet web sitesinde artık promosyon bildirilerini “almak istemiyorum”
                           tercihini yaparak veya bize ulaşın seçeneğinden e-posta adresine
                           gönderilebilecek bir e-posta ile ya da Müşteri Hizmetlerini arayarak
                           promosyon bildirileri almaktan vazgeçebilirsiniz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Hakkınızda topladığımız Kişisel Bilgilerin doğruluğunu teyit etmek
                           istersiniz;
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Kişisel Bilgilerinizi güncellemek istersiniz;
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Kişisel Bilgilerinizin kullanımıyla ilgili herhangi bir şikâyet varsa
                           eğer Müşteri Hizmetlerini arayabilirsiniz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bize kanıt sağladığınız takdirde, ki bu gibi durumlarda haklı talep
                           sayılır, bize vermiş olduğunuz bilgileri isterseniz değiştirebilir ya da
                           gelecekteki kullanımını yasaklamak için önlem alabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           6. Çerezler
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezler, bilgisayarınıza veya ekipmanınıza yüklenmiş, bazı çevrimiçi
                           sayfaları ziyaret ettiğinizde tercihlerinizi kaydeden küçük metin
                           dosyalarıdır. Limanbet web sitesinin kullanımını izlemek için çerezleri
                           kullanırız. Çerezleri siteye olan trafiği izlemek, Hizmeti iyileştirebilmek
                           ve kullanımınızi daha kolay ve / veya daha alakalı hale getirebilmek için
                           kullanabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bu çerezler, kayıdınız esnasında sizden toplanan bilgileri muhafaza eder ve
                           sizi müşterimiz olarak görmemizi ve size gereken hizmetleri sunmamıza izin
                           verir. Bu verileri siz çevrimiçi durumdayken ilgi alanlarınızı daha iyi
                           anlamak için ve çevrimiçi sitelerimize yaptığınız ziyaretleri artırmak
                           amacıyla da kullanabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezler bize:
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Tercihlerinizi daha iyi anlayıp size daha alakalı promosyon teklifleri
                           sunmamızı
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Sizin isteğinize göre içerik veya işlevselliği değiştirirken
                           tercihlerinizi belirlememizi
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Web sitemizde belirli servislere erişirken kayıtlı bir kullanıcımız
                           olduğunuzu teyit etmemizi ve giriş bilgilerinizi kaydetmemizi
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Hizmetlerimizin kullanımına ilişkin istatistik toplayabilmemizi sağlar.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div></div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Posta araçlarımızın düzgün çalışıp çalışmadığından emin olmak için
                           çerezleri ve web işaretçileri de kullanabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div></div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezleri nasıl reddedebilir veya onlardan nasıl vazgeçebilirim?
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div></div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezleri kabul etme veya reddetme hakkınız var. Çoğu web tarayıcısı
                           çerezleri otomatik olarak kabul etse de, siz isterseniz çerezleri reddetmek
                           için tarayıcınızın ayarını değiştirerek çerezleri reddedebilirsiniz.
                           Çerezleri reddetmeyi seçerseniz, Limanbet sitesinde yer alan tüm interaktif
                           özellikleri deneyimleyemeyebilirsiniz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div></div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           7. Elektronik Servis Sağlayıcılarının Kullanımını Kabul Etmek
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmette gerçek para oyunları oynamak için, bize para gönderip bizden para
                           almanız gerekecektir. Bu tür finansal işlemleri yürürlüğe koymak için
                           üçüncü taraf elektronik ödeme işlemcilerini ve/veya finansal kurumları
                           ("ESP'ler") kullanabiliriz. Bu Gizlilik Politikasını kabul ederek,
                           işlemlerin işlenebilmesi için gerekli olan Kişisel Bilgilerinizi ESP'lerle
                           hatta gerektiğinde bu bilgilerin ülkenizin dışına aktarılarak
                           paylaşılmalarını kabul etmiş olursunuz. Gizliliğinizin korumasını sağlamak
                           için ESP'ler ile olan düzenlemelerimizde önlemler alıyoruz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           8. Güvenlik İncelemesinin Onayı
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Kullanım Hüküm ve Koşullarımızın ve ilgili yasanın olası ihlalini kontrol
                           etmek amacıyla kimliğinizi, yaşınızı ve tarafınızdan sağlanan kayıt
                           verilerinin geçerliliğini, Hizmet kullanımınızı ve finansal işlemlerinizi
                           doğrulamak için güvenlik incelemesi yapma hakkımızı saklı tutuyoruz. Bu
                           Gizlilik Politikası’nı kabul ederek, Hizmetin kullanımında bize verdiğiniz
                           bilgileri doğrulamak amacıyla, bize, personelimize, bağlı şirketlerimize,
                           yan kuruluşlarımıza, acentelere ve tedarikçilerimize Kişisel Bilgilerinizi
                           kullanma ve Kişisel Bilgilerinizi üçüncü kişilerle hatta gerektiğinde bu
                           bilgilerin ülkenizin dışına aktarılarak paylaşma yetkisini vermiş
                           olursunuz. Güvenlik incelemeleri, bir kredi raporu sipariş etmek ve/veya
                           sağladığınız bilgiyi 3. parti veritabanlarına karşı doğrulamak gibi ancak
                           bunlarla sınırlı olmayan hareketler içerebilir. Bu güvenlik incelemelerini
                           kolaylaştırmak için verdiğiniz onayın yanısıra talep edebileceğimiz bu tür
                           bilgi veya belgeleri sunmayı da kabul edersiniz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           9. Çocukların Korunması
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmet, 18 yaşın (veya kendi yetki alanlarındaki kanuni yaşın) altındaki
                           kişilere yönelik değildir veya onlar için tasarlanmamıştır. Hizmet'in
                           herhangi bir bölümünden bize bilgi veren herhangi bir kişinin, 18 yaşında
                           (veya kendi yetki alanlarındaki kanuni yaşta) veya üstü olduğunu kabul
                           ederiz. Bir minörün çevrimiçi siteyle kişisel bilgi girişi yaptığı veya
                           girişi yapmaya çalıştığı fark edilirse bu bilgiyi kabul etmeyip bilgileri
                           kayıtlarımızdan kaldırmak için önlem alırız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           10. Uluslararası Transferler
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmetle ilgili toplanan kişisel bilgiler, bizim veya bağlı
                           şirketlerimizin, tedarikçilerimizin, bağlı kuruluşlaımızın veya acentelerin
                           faaliyet gösterdiği herhangi bir ülkede işleme tabi tutulabilir. Hizmeti
                           kullanarak, bilgilerin ülkeniz dışına taşınmasına izin vermiş olursunuz.
                           Yine de, iştiraklerimiz, acentelerimiz, bağlı şirketlerimiz ve
                           tedarikçilerimizin bulundukları konuma rağmen gizlilik standartlarımıza
                           uymalarını sağlamak için önlem alıyoruz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           11. Üçüncü Taraf Uygulamaları
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çevrim içi üçüncü tarafların işlem yaptığı sitelerin mal sahipleri bizden
                           bağımsız olarak sitelerini işlettikleri için, Limanbet sitesinden veya
                           siteye bağlanan çevrim içi üçüncü taraflara verdiğiniz herhangi bilgi veya
                           görüntünün güvenliğini veya bağlı veya başka programları idare eden çevrim
                           içi üçüncü tarafların topladığı herhangi bilgiyi koruyabileceğimiz
                           garantisini veremeyiz. Üçüncü taraflarca toplanan bilgiler, bu Gizlilik
                           Politikası’na tabi değildir, ancak mevcut ise, üçüncü tarafların kendi
                           gizlilik politikaları tarafından yönetilir. Üçüncü tarafın bilgi
                           uygulamalarıyla ilgili sorularınız varsa, lütfen onlara ait gizlilik
                           politikalarını okuyun. Bu gibi üçüncü tarafların uygulamaları, eylemleri
                           veya politikaları için herhangi bir sorumluluk veya mesuliyet üstlenmiyoruz
                           ve bu çevrimiçi sitelerin içeriğinden veya gizlilik uygulamalarından
                           sorumlu değiliz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           12. Yasal Sorumluluk Reddi
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmet, "OLDUĞU GİBİ" ve "MÜMKÜN OLDUĞU ZAMAN" herhangi bir yükümlülüğü
                           olmaksızın çalışır. Doğrudan kontrolümüzün dışında gerçekleşen olaylardan
                           sorumlu değiliz. Teknolojimizin ve işimizin karmaşıklığı ve sürekli değişen
                           doğası nedeniyle, Kişisel Bilgilerinizin mahremiyeti ile ilgili hatasız bir
                           performansın olacağını garanti etmiyoruz ve Kişisel Bilgilerin kullanımı
                           veya serbest bırakılması ile ilgili dolaylı, rastlantısal, başka sebepten
                           dolayı ortaya çıkan veya cezai tazminatlardan sorumlu değiliz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           13. Birleşme
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Şayet iflas başvurusunda bulunmamız veya üçüncü bir şahıs tarafından satın
                           alınmamız veya birleşmemiz ya da varlıklarımızın hepsini veya bir kısmını
                           üçüncü şahısa satmamız veya tüm önemli varlıklarımızı 3. şahıslara
                           devretmemiz durumunda, Hizmet yoluyla bize verdiğiniz Kişisel ve diğer tüm
                           bilgileri potansiyel ve sonradan ortaya çıkacak olan iş ve birleşme
                           ortaklarıyla paylaşma hakkımızı saklı tutarız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           14. Gizlilik Politikasına Onay Verme
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           İşbu Gizlilik Politikasının (geçerli olduğu haliyle) ilan edilmesine
                           müteakip Kayıt işlemi sırasında ve/veya Hizmet'i kullanmaya devam ettiğiniz
                           sürede [Gönder], [Kabul ediyorum] veya [Onaylıyorum] düğmesini tıklayarak,
                           bu Gizlilik Politikasını kabul etmiş olursunuz. Bu bizim tüm ve tek
                           Gizlilik Politikamız olup önceki herhangi bir versiyonu geçersiz kılar. Bu
                           Gizlilik Politikası, Hükümler ve Koşullarımızla ve çevrimiçi sitelerimize
                           gönderilen ek geçerli şartlara uygun olarak okunmalıdır. Periyodik olarak
                           bu Gizlilik Politikasında değişiklikler yapabiliriz bundan dolayı düzenli
                           olarak değişiklikler için Gizlilik Politikamızı kontrol etmenizi öneririz.
                           </span>
                        </div>
                     </div>
                     <div class="ng-star-inserted"></div>
                     <div class="ng-star-inserted"></div>
                     <!----><!---->
                  </app-static-inner-content>
               </div>
            </div>
         </app-signup>
         <!---->
      </div>
   </app-authentication>
   <!---->
</main>
<?php }?>