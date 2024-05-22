<?php if(isset($us['id'])) {?>
<div class="col s3 lft-cntnt">
               <div class="uinfoDom" style="background-color: #fff;color: #000;border-bottom: 1px solid #e0e0e0;text-align: center;">
                  <h5 class="u-name" style="font-size: 14px;padding-top: 6px;font-weight: bold;">
                     <!---->SIRADAKİ DOMAİN
                  </h5>
                  <div> <b style="background: #ad1c1c;color: #fff;padding: 4px;margin-bottom: 2px;display: block;"><?=$main['updatelink']?></b></div>
               </div>
               <div class="u-info">
                  <h5 class="u-name">
                     <?=$us['login']?><!---->
                  </h5>
                  <h5 class="u-number">Kullanıcı Numarası : 202401693371<?=$us['id']?></h5>
               </div>
               <div class="dshbrd-sdbr">
                  <ul materialize="collapsible" data-collapsible="expandable" class="collapsible">
                     <li class="ng-star-inserted active">
                        <div class="collapsible-header ng-star-inserted active">Hesabım</div>
                        <div class="collapsible-body ng-star-inserted" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/deposit" class="ng-star-inserted"><i class="fa fa-money"></i> Para Yatırma</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/withdraw" class="ng-star-inserted"><i class="fa fa-money"></i> Para Çekme</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/transfer" class="ng-star-inserted"><i class="fa fa-exchange"></i> Transfer</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/bonuses" class="ng-star-inserted"><i class="fa fa-gift"></i> Bonus Detaylarım</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <!----><a routerlinkactive="active" href="/promotions" class="ng-star-inserted"><i class="fa fa-calendar-plus-o"></i> Şikayet ve Öneriler</a><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <li class="active ng-star-inserted">
                        <div class="collapsible-header active ng-star-inserted">İşlemler</div>
                        <div class="collapsible-body ng-star-inserted" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/history" class="ng-star-inserted"><i class="fa fa-history"></i> Bahis Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/history" class="ng-star-inserted"><i class="fa fa-history"></i> Jackpot Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/financialhistory" class="ng-star-inserted"><i class="fa fa-pie-chart"></i> Finans Geçmişim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/bonushistory" class="ng-star-inserted"><i class="fa fa-gift"></i> Bonus Hareketlerim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/casinohistory" class="ng-star-inserted"><i class="fa fa-history"></i> Casinopro Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/freespinhistory" class="ng-star-inserted"><i class="fa fa-history"></i> Freespin Detayları</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/history" class="ng-star-inserted"><i class="fa fa-history"></i> Betradar</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/goldenhistory" class="ng-star-inserted"><i class="fa fa-history"></i> Golden Race</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/history" class="ng-star-inserted"><i class="fa fa-history"></i> Betmakers</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/esportshistory" class="ng-star-inserted"><i class="fa fa-history"></i> E-Sporlar Hesap Hrk. Raporu</a><!----><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <li class="active ng-star-inserted">
                        <div class="collapsible-header active ng-star-inserted">Kullanıcı Hareketleri</div>
                        <div class="collapsible-body ng-star-inserted" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/account" class="ng-star-inserted"><i class="fa fa-user"></i> Kişisel ve Hesap Bilgilerim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/account" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Kişisel Bilgiler</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/account" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Hesap Bilgileri</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/changepassword" class="ng-star-inserted"><i class="fa fa-unlock-alt"></i> Şifremi Değiştir</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/betlimit" class="ng-star-inserted"><i class="fa fa-clock-o"></i> Bahis Limitlendirme</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/account" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Ayarlar</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/account" class="ng-star-inserted"><i class="fa fa-id-card-o"></i> Dokümanlar</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/2fa" class="ng-star-inserted"><i class="fa fa-check-square-o"></i> İki adımlı doğrulama</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/account" class="ng-star-inserted"><i class="fa fa-users"></i> Arkadaş referansı</a><!----><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <!---->
                  </ul>
               </div>
            </div>
            <?php }else{
                header('location: /');
                }?>