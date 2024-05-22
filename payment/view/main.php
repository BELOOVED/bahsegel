<html dir="LTR" style="overflow-y: scroll;">
   <head>
      <meta charset="utf-8">
      <title>MoneyMatrix Cashier</title>
      <base href="/">
      <link href="/payment/assets/css/stt.css" rel="stylesheet" type="text/css">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <link href="https://static.moneymatrix.com/cashier/styles/default.css" rel="stylesheet" type="text/css">
      <style>
         .spinner .default-spinner {
         display: block;
         position: absolute;
         z-index: 10;
         background-size: contain;
         left: calc(50% - 50px);
         top: 0;
         }
         .spinner .default-spinner {
         animation: rotator 1.4s linear infinite;
         }
         @keyframes rotator {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(270deg); }
         }
         .spinner .default-spinner .path {
         stroke-dasharray: 187;
         stroke-dashoffset: 0;
         transform-origin: center;
         animation:
         dash 1.4s ease-in-out infinite,
         colors 1.4s ease-in-out infinite;
         }
         @keyframes colors {
         0% { stroke: #00239C; }
         100% { stroke: #00239C; }
         }
         @keyframes dash {
         0% { stroke-dashoffset: 187; }
         50% {
         stroke-dashoffset: 46.75;
         transform:rotate(135deg);
         }
         100% {
         stroke-dashoffset: 187;
         transform:rotate(450deg);
         }
         }
      </style>
      <link rel="stylesheet" href="styles.805c1d9b4be249702bc6.css">
      <style>      @font-face {      font-family: 'Metric';      src: url('https://static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.eot');      src: local('&#x263A'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.ttf') format('truetype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.woff') format('woff'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.svg#AllerBold') format('svg'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.svg#AllerBold') format('svg');      font-weight: bold;      font-style: normal;     }     @font-face {      font-family: 'Metric';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.eot');      src: local('&#x263A'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.ttf') format('truetype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.woff') format('woff'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.eot?#iefix') format('embedded-opentype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.svg#Metric-Semibold') format('svg'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.svg#Metric-Semibold') format('svg');      font-weight: 600;      font-style: normal;     }     @font-face {      font-family: 'Metric';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.eot');      src: local('&#x263A'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.ttf') format('truetype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.woff') format('woff'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.svg#AllerItalic') format('svg'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.svg#AllerItalic') format('svg');      font-weight: 100;      font-style: normal;     }     @font-face {      font-family: 'Metric';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.eot');      src: local('&#x263A'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.ttf') format('truetype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.woff') format('woff'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.svg#AllerRegular') format('svg'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.svg#AllerRegular') format('svg');      font-weight: normal;      font-style: normal;     }     @font-face {      font-family: 'Roboto';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Medium.ttf') format('truetype');      font-weight: 500;      font-style: normal;     }     @font-face {      font-family: 'Roboto';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.eot?#iefix') format('embedded-opentype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.woff2') format('woff2'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.woff') format('woff'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;     }      @font-face {      font-family: "Roboto";      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.eot');      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.eot?#iefix') format('embedded-opentype'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.woff2') format('woff2'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.woff') format('woff'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.ttf') format('truetype');      font-weight: 700;      font-style: normal;     }      @font-face {      font-family: 'Roboto Condensed';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;     }       @font-face {      font-family: 'Roboto Condensed';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Bold.ttf') format('truetype');      font-weight: 700;      font-style: normal;     }       @font-face {      font-family: 'Roboto Condensed';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Italic.ttf') format('truetype');      font-weight: 400;      font-style: italic;     }      @font-face {      font-family: 'Roboto Condensed';      src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Light.ttf') format('truetype');      font-weight: 300;      font-style: italic;     }      @font-face {      font-family: 'Helvetica Neue LT Pro 45 Light';      font-style: normal;      font-weight: normal;      src: local('Helvetica Neue LT Pro 45 Light'),      url('//static.glastcoper.com/mmprod/cashier/assets/fonts/HelveticaNeueLTPro-Lt.woff') format('woff');     }     @font-face {      font-family: 'Helvetica Neue LT Pro 65 Medium';      font-style: normal;      font-weight: normal;      src: local('Helvetica Neue LT Pro 65 Medium'),        url('//static.glastcoper.com/mmprod/cashier/assets/fonts/HelveticaNeueLTPro-Md.woff') format('woff');     }      @font-face {       font-family: 'Helvetica Neue LT Pro 75 Bold';       font-style: normal;       font-weight: normal;       src: local('Helvetica Neue LT Pro 75 Bold'),       url('//static.glastcoper.com/mmprod/cashier/assets/fonts/HelveticaNeueLTPro-Bd.woff') format('woff');     }      @font-face {       font-family: 'Jost';       src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Jost-Regular.ttf') format('truetype');       font-weight: 400;       font-style: normal;     }      @font-face {       font-family: 'Jost';       src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Jost-Italic.ttf') format('truetype');       font-weight: 400;       font-style: italic;     }      @font-face {       font-family: 'Jost';       src: url('//static.glastcoper.com/mmprod/cashier/assets/fonts/Jost-Bold.ttf') format('truetype');       font-weight: 700;       font-style: normal;     }</style>
      <style></style>
      <script charset="utf-8" src="200-es2015.a6b7bfc829beb893488c.js"></script>
      <style>[_ngcontent-yoo-c59]:root{--general-page-title-color:#516183;--general-overlay-background-color:hsla(0,0%,100%,0.5);--general-spinner-color:#00239c;--general-page-title-size:24px;--general-page-title-font-weight:600;--general-background-color:#fff;--general-inner-background-color:#f3f6f9;--general-link-color:#00e;--general-subtitle-size:18px;--general-main-text-size:16px;--general-warning-color:#f0a85f;--general-success-color:#32b398;--general-error-color:#e76049;--general-error-text-size:14px;--general-main-text-color:#505963;--general-button-text-size:16px;--general-font-family:Metric,"Times New Roman",Arial,sans-serif;--primary-button-background-color:#307fe2;--primary-button-background-color-hover:#516182;--primary-button-text-color:#fff;--primary-button-text-size:18px;--primary-button-text-color-hover:#fff;--primary-button-border-color:#307fe2;--primary-button-border-color-hover:#516182;--primary-button-border-radius:3px;--primary-button-disabled-text-color:#a1abbe;--secondary-button-background-color:#fff;--secondary-button-background-color-hover:#fff;--secondary-button-text-color:#151515;--secondary-button-border-color:#151515;--secondary-button-border-color-hover:#151515;--secondary-button-text-color-hover:#151515;--secondary-button-font-size:16px;--input-background-color:#fff;--input-border-color:#dee3ed;--input-border-radius:3px;--input-disabled-background-color:#f3f6f9;--input-disabled-text-color:#a0a9bc;--input-focused-border-color:#307fe2;--input-font-size:16px;--input-text-color:#505963;--input-icons-color:#a0a9bc;--label-color:#505963;--label-font-size:16px;--label-font-weight:400;--selector-height:34px;--selector-width:250px;--payment-method-selected-border-color:#307fe2;--payment-selected-border-radius:3px;--payment-method-name-color:#516183;--payment-method-details-font-size:13px;--payment-method-background-color:#f3f6f9;--payment-method-font-color:#516183;--payment-method-logo-border-color:#f3f6f9;--payment-method-logo-border-radius:3px;--payment-method-logo-background-color:#fff;--payment-list-background-color:#f3f6f9;--payment-method-provider-background-color:rgba(0,0,0,0.6);--payment-method-provider-text-color:#fff;--payment-method-provider-prifix-color:#a0a9bc;--slider-payment-background-color:#f3f6f9;--slider-button-color:#a0a9bc;--pending-withdrawal-even-background-color:#f3f6f9;--pending-withdrawal-logo-border-radius:4px;--pending-withdrawal-logo-background-color:#fff;--pending-withdrawal-amount-color:#307fe2;--pending-withdrawal-title-size:16px;--pending-withdrawal-title-amount-color:#505963;--pending-withdrawal-value-amount-size:18px;--pending-withdrawal-value-size:16px;--footer-font-size:14px;--scrollbar-width:4px;--scrollbar-track-bg-color:transparent;--scrollbar-background-color:#a0a9bc;--scrollbar-background-hover-color:#848c9f;--tooltip-icon-color:#516183;--tooltip-label-color:#505963;--tooltip-label-font-size:15px;--tooltip-background-color:#fff;--tooltip-border-color:#e6e6e6;--transaction-history-summary-box-background-color:#fff;--transaction-history-summary-box-shadow-color:rgba(0 0 0 .25);--transaction-history-summary-box-text-color:#000;--transaction-history-summary-box-title-color:#343a40;--transaction-history-filter-title-font-weight:600;--transaction-history-filter-title-font-color:#000;--transaction-history-filter-background-color:#fff;--transaction-history-filter-mobile-background-color:#fff;--transaction-history-filter-mobile-overlay-color:rgba(0,0,0,0.6);--transaction-history-filter-border-color:#d3d3d3;--transaction-history-filter-text-color:#000;--transaction-history-filter-selected-background-color:#307fe2;--transaction-history-filter-selected-text-color:#fff;--transaction-history-filter-background-color-hover:rgba(48,127,226,0.3);--transaction-history-filter-width:255px;--transaction-history-filter-selected-height:calc(var(--selector-height) - 2px);--transaction-history-filter-icon-color:invert(0%) sepia(1%) saturate(4%) hue-rotate(334deg) brightness(100%) contrast(100%);--transaction-history-table-light-row-color:#fff;--deposit-url:url(/assets/deposit-history.svg);--withdrawal-url:url(/assets/withdrawal-history.svg);--transaction-history-table-dark-row-color:#f3f6f9;--transaction-history-table-light-row-text-color:#000;--transaction-history-table-dark-row-text-color:#000;--transaction-history-empty-table-text-color:#505963;--transaction-history-table-details-background-color:#fff;--transaction-history-table-details-title-color:#495057;--transaction-history-table-details-value-color:#000;--transaction-history-table-details-text-size:14px;--transaction-history-table-details-mobile-text-size:14px;--transaction-history-table-text-size:18px;--transaction-history-table-mobile-text-size:14px;--transaction-history-table-header-color:#000;--transaction-history-table-header-size:14px;--transaction-history-table-header-mobile-size:14px;--transaction-history-table-header-font-weight:400;--transaction-history-table-amount-positive-color:#388d79;--transaction-history-table-amount-negative-color:#ec1c24;--transaction-history-table-header-underline-color:#495057;--modal-primary-background-color:#fff;--modal-secondary-background-color:#f3f6f9;--modal-overlay-color:#516183;--modal-overlay-opacity:0.5;--modal-title-text-color:#516183;--modal-title-text-size:18px;--modal-title-text-weight:600;--modal-text-size:16px;--modal-close-icon-color:#c8d0dd;--modal-close-icon-hover-color:#000;--calendar-background-color:#fff;--calendar-text-color:rgba(0,0,0,0.87);--calendar-arrow-color:rgba(0,0,0,0.54);--calendar-table-header-color:rgba(0,0,0,0.38);--calendar-body-label-color:rgba(0,0,0,0.54);--calendar-table-header-divider-color:rgba(0,0,0,0.12);--calendar-table-today-background-color:rgba(0,0,0,0.38);--calendar-selected-day-background-color:#307fe2;--calendar-background-color-day-hover:rgba(48,127,226,0.3);--calendar-background-color-day-between:rgba(48,127,226,0.2);--pagination-current-background-color:#307fe2;--pagination-current-text-color:#fff;--pagination-color:#505963;--pagination-hover-color:#516182;--pagination-hover-background-color:rgba(56,141,121,0.3);--pagination-disabled-color:#cacaca;--pagination-border-radius:5px;--offline-shop-background-color:#010100;--offline-shop-toggle-button-color:#020202;--offline-shop-toggle-button-text-color:#d7bf6a;--offline-shop-search-border-color:#d7bf6a;--offline-shop-search-text-color:#6b6b6b;--offline-shop-shop-button-gradient-start-color:#91590e;--offline-shop-shop-button-gradient-end-color:#d7bf6a;--offline-shop-shop-button-text-color:#1d1d1d;--offline-shop-deposit-button-gradient-start-color:#91590e;--offline-shop-deposit-button-gradient-end-color:#d7bf6a;--offline-shop-deposit-button-text-color:#fff;--offline-shop-info-window-background-color:#1d1d1d;--offline-shop-info-window-title-color:#d7bf6a;--offline-shop-info-window-text-color:#fff;--offline-shop-close-button-color:#fff;--offline-shop-marker-color:#d7bf6a;--offline-shop-marker-selected-color:#91590e;--direction-left:left;--direction-right:right}[_ngcontent-yoo-c59]:root   apple-pay-button[_ngcontent-yoo-c59]{--apple-pay-button-width:100%;--apple-pay-button-height:30px;--apple-pay-button-border-radius:var(--primary-button-border-radius);--apple-pay-button-padding:5px 0px}html[dir=rtl][_ngcontent-yoo-c59]{--direction-left:right;--direction-right:left}@media screen and (max-width:710px){html[_ngcontent-yoo-c59]{--scrollbar-width:4px}}[_nghost-yoo-c59]{display:inline-block;vertical-align:top;width:82px;height:44px;overflow:hidden;background:var(--payment-method-logo-background-color);border-radius:var(--payment-method-logo-border-radius);border:thin solid var(--payment-method-logo-border-color);box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.selected[_nghost-yoo-c59]{border-color:var(--payment-method-selected-border-color)}[_nghost-yoo-c59]   img[_ngcontent-yoo-c59]{-o-object-fit:none;object-fit:none;-o-object-position:center;object-position:center;height:100%;width:100%;pointer-events:none}[_nghost-yoo-c59]   .paymeth-logo-placeholder[_ngcontent-yoo-c59]{font-weight:700;height:45px;padding-top:11px}[_nghost-yoo-c59]   .paymeth-logo-placeholder[_ngcontent-yoo-c59], [_nghost-yoo-c59]   .paymeth-logo-provider[_ngcontent-yoo-c59]{white-space:nowrap;text-align:center;text-overflow:ellipsis;overflow:hidden}[_nghost-yoo-c59]   .paymeth-logo-provider[_ngcontent-yoo-c59]{position:relative;top:-14px;font-size:12px;line-height:10px;height:12px;color:var(--payment-method-provider-text-color);background:var(--payment-method-provider-background-color)}[_nghost-yoo-c59]   .paymeth-logo-provider[_ngcontent-yoo-c59]   .paymeth-logo-provider-prefix[_ngcontent-yoo-c59]{color:var(--payment-method-provider-prifix-color)}@media screen and (min-width:710px){[_nghost-yoo-c59]{height:66px;width:104px}[_nghost-yoo-c59]   .paymeth-logo-placeholder[_ngcontent-yoo-c59]{padding-top:23px;height:67px}}</style>
   </head>
   <body>
      <mm-root class="spinner" ng-version="9.1.0">
         <div class="main default">
            <div class="content-wrapper">
            <section class="content" style="
    padding: 50px;
" onclick="swal.fire('Hata!','Canlı Destek İle İletişime Geçiniz','warning');"
                <svg width="100px" height="100px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg" class="spinner">
                    <circle fill="none" stroke-width="1" stroke-linecap="round" cx="33" cy="33" r="30" class="path"></circle>
                </svg>
                <router-outlet></router-outlet>
                <mm-cashier _nghost-nft-c137="">
                    <!---->
                    <div _ngcontent-nft-c137="" class="height-wrapper">
                      <!----><!---->
                      <h1 _ngcontent-nft-c137="" class="page-title"> Ödeme Yöntemleri </h1>
                      <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                      <mm-cashier-paymeth-list _ngcontent-nft-c137="" ngdefaultcontrol="" class="ng-untouched ng-pristine ng-valid">
                          <section class="cashier-paymeth-list">
                            <div class="cashier-paymeth-list-group" data-index="0">
                                <!---->
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/crypto'" title="Tether">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Tether" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.BinancePay.Kripto/Deposit/2218-Generic.BinancePay.Kripto-2-1674587959066_tr.png" alt="Tether"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Tether </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 5,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/HemenOde.Havale/Deposit/2218-HemenOde.Havale-2-1674632120608_tr.png" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 500,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="7/24 Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="7/24 Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.A1Havale/Deposit/2218-Generic.A1Havale-2-1675891512345_tr.png" alt="7/24 Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> 7/24 Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 1,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.Kasamda.Havale/Deposit/2218-Generic.Kasamda.Havale-2-1689342211729_tr.webp" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 1,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.open('/payfix/', '_blank');"
 title="PayFix">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="PayFix" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.PayFix/Deposit/2218-Generic.PayFix-2-1686221042614_tr.png" alt="PayFix"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> PayFix </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 25.00 - 750,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/parazula'" title="Parazula">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Parazula" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/FastPara.Parazula/Deposit/2218-FastPara.Parazula-2-1672339226290_tr.png" alt="Parazula"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Parazula </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/mefete'" title="MEFETE">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="MEFETE" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/HemenOde.VipMefete/Deposit/2218-HemenOde.VipMefete-2-1674588395774_tr.png" alt="MEFETE"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> MEFETE </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 50.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.FlexPep.WinPapara/Deposit/2218-Generic.FlexPep.WinPapara-2-1690215041361_tr.png" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 200.00 - 50,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Hızlı QR">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Hızlı QR" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.Kasamda.OtoHavale2/Deposit/2218-Generic.Kasamda.OtoHavale2-2-1689340809477_tr.png" alt="Hızlı QR"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Hızlı QR </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.Kasamda.OtoHavale/Deposit/2218-Generic.Kasamda.OtoHavale-2-1689341944047_tr.webp" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 250.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Süper Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Süper Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/SuperHavale/Deposit/2218-SuperHavale-2-1671049588202_tr.png" alt="Süper Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Süper Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 50,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/mefete'" title="Anında Mefete">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Anında Mefete" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Aninda.JetCMT/Deposit/2218-Aninda.JetCMT-2-1674588192824_tr.png" alt="Anında Mefete"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Anında Mefete </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 50.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/pep'" title="Pep">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Pep" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.FlexPep.Cuzdan/Deposit/2218-Generic.FlexPep.Cuzdan-2-1689874208710_tr.webp" alt="Pep"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Pep </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 200.00 - 25,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Cuzdan724.OtoPapara/Deposit/2218-Cuzdan724.OtoPapara-2-1674588527289_tr.png" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 1,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.Kasamda.ManuelPapara/Deposit/2218-Generic.Kasamda.ManuelPapara-2-1689342025964_tr.webp" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 500,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Cuzdan724.ManualPapara/Deposit/2218-Cuzdan724.ManualPapara-2-1674588744046_tr.png" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 500,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/FastPara.OtoPapara/Deposit/2218-FastPara.OtoPapara-2-1674588970396_tr.png" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 150.00 - 1,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/HemenOde.VipPapara/Deposit/2218-HemenOde.VipPapara-2-1674589312115_tr.png" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 200.00 - 30,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="Papara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Papara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.A1Finance.Papara/Deposit/2218-Generic.A1Finance.Papara-2-1683130699757_tr.png" alt="Papara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Papara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Cuzdan724.BankTransfer/Deposit/2218-Cuzdan724.BankTransfer-2-1674589414518_tr.png" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 1,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Cuzdan724.OtoBankTransfer/Deposit/2218-Cuzdan724.OtoBankTransfer-2-1674589508524_tr.png" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 50.00 - 800,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/FastPara.BankTransfer/Deposit/2218-FastPara.BankTransfer-2-1674589609446_tr.png" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 150.00 - 1,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.FlexPep.FastHavale/Deposit/2218-Generic.FlexPep.FastHavale-2-1689874296900_tr.webp" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 500,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/havale'" title="Havale">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Havale" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Aninda.Havale/Deposit/2218-Aninda.Havale-2-1674632216313_tr.png" alt="Havale"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Havale </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 50,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/creditcard'" title="Kredi Kartı">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Kredi Kartı" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/PayzNet/Deposit/2218-PayzNet-2-1661887097491_tr.png" alt="Kredi Kartı"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Kredi Kartı </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 2,500.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/creditcard'" title="Kredi Kartı">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Kredi Kartı" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.FlexPep.KrediKarti/Deposit/2218-Generic.FlexPep.KrediKarti-2-1689874368624_tr.webp" alt="Kredi Kartı"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Kredi Kartı </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 1,250.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/papara'" title="ParolaPara">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="ParolaPara" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/HemenOde.ParolaPara/Deposit/2218-HemenOde.ParolaPara-2-1686916615256_tr.png" alt="ParolaPara"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> ParolaPara </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 500.00 - 100,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/crypto'" title="Bitcoin">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Bitcoin" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.BinancePay.BTC/Deposit/2218-Generic.BinancePay.BTC-2-1660860103182_tr.png" alt="Bitcoin"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Bitcoin </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 5,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/crypto'" title="Ethereum">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Ethereum" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.BinancePay.ETH/Deposit/2218-Generic.BinancePay.ETH-2-1664383249027_tr.png" alt="Ethereum"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Ethereum </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 5,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/crypto'" title="Kripto">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Kripto" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Cuzdan724.Crypto/Deposit/2218-Cuzdan724.Crypto-2-1674632707845_tr.png" alt="Kripto"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Kripto </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 200.00 - 8,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <div class="cashier-paymeth-list-item" onclick="window.location.href = '/payment/crypto'" title="Kripto">
                                  <div class="cashier-paymeth-list-item-wrapper">
                                      <mm-paymeth-logo _nghost-nft-c59="" title="Kripto" class="paymeth-logo">
                                        <!----><img _ngcontent-nft-c59="" unselectable="on" src="//static.glastcoper.com/mmprod/_payicons/2218/Generic.Kasamda.Kripto/Deposit/2218-Generic.Kasamda.Kripto-2-1689342110405_tr.webp" alt="Kripto"><!----><!---->
                                      </mm-paymeth-logo>
                                      <div class="cashier-paymeth-list-name"> Kripto </div>
                                      <div class="cashier-paymeth-list-processing-time"> Anında </div>
                                      <div class="cashier-paymeth-list-limits"> TRY 100.00 - 5,000,000.00 </div>
                                  </div>
                                  <div class="custom-tooltip">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                </div>
                                <!---->
                            </div>
                            <!---->
                          </section>
                      </mm-cashier-paymeth-list>
                      <!----><!---->
                    </div>
                </mm-cashier>
                <!---->
                <mm-modal>
                    <!----><!---->
                </mm-modal>
              </section>
               <footer class="footer">Secure 256-bit TLS-encryption</footer>
            </div>
         </div>
      </mm-root>
      <script src="runtime-es2015.30ca01735a05ae744d6d.js" type="module"></script><script src="runtime-es5.30ca01735a05ae744d6d.js" nomodule="" defer=""></script><script src="polyfills-es5.5b361ab8192b0948b549.js" nomodule="" defer=""></script><script src="polyfills-es2015.97f5ccd5eb33f5de36d5.js" type="module"></script><script src="main-es2015.51137094d7cf08b93016.js" type="module"></script><script src="main-es5.51137094d7cf08b93016.js" nomodule="" defer=""></script>
   </body>
</html>