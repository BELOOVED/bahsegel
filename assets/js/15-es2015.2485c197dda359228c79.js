(self.webpackChunkfenrir=self.webpackChunkfenrir||[]).push([[15],{58015:function(t,e,n){"use strict";n.r(e),n.d(e,{DynamicContentModule:function(){return D}});var s=n(7035),r=n(46627),i=n(16617),o=n(97296),a=n(97597),c=n(76857),p=n(72643),l=n(60664),h=n(46583);const d=["scriptsContainer"],u=["stylesContainer"];function g(t,e){1&t&&(p.TgZ(0,"div",7),p._UZ(1,"div",8),p.qZA())}function m(t,e){if(1&t&&p._UZ(0,"message-box",9),2&t){const t=p.oxw();p.Q6J("content",t.pageProps.messageData)}}function y(t,e){if(1&t&&(p.ynx(0),p._UZ(1,"div",10),p.BQk()),2&t){const t=p.oxw();p.xp6(1),p.Q6J("innerHTML",t.htmlContent,p.oJD)}}i.N.map.dynamicContent;class f{constructor(t,e,n,s,r,i,o,a,p){this.route=t,this.dynamicContentService=e,this.sanitizer=n,this.scriptStyleMatcher=s,this.modalService=r,this.router=i,this.translateFactory=o,this.el=a,this.storage=p,this.destroyed$=new c.xQ,this.pageProps={preloader:!1,noData:!1,messageData:null},this.currentLang=this.translateFactory.currentLang.code}ngOnInit(){}ngAfterViewInit(){this.route.params.pipe((0,a.R)(this.destroyed$)).subscribe(()=>{this.getContent()})}getContent(){this.pageProps.preloader=!0;const t=[];this.dynamicContentService.getDynamicContent(this.route.snapshot.params.slug).then(e=>{if(e&&e.onlyLoggedUsers&&!this.isAuth())this.router.navigate([this.currentLang,"authentication","signin"],{queryParams:{return:this.router.url}});else{t.push(e),this.pageProps.preloader=!1,this.htmlContent=this.sanitizer.bypassSecurityTrustHtml(this.scriptStyleMatcher.clearScriptInContent(t)),this.scriptStyleMatcher.matchScriptSrc(t,this.scriptsContainer,!1),this.scriptStyleMatcher.matchStyleSrc(t,this.stylesContainer,!1);this.scriptStyleMatcher.findModalAction(t)&&setTimeout(()=>{const t=this.el.nativeElement.getElementsByClassName("top-layer");if(t&&t.length)for(const e in t)if("object"==typeof t[e]){const n=t[e].getAttribute("href").split("/");t[e].addEventListener("click",s=>{t[e].style.pointerEvents="none";const r=n[n.length-1],i=new o.u_l("app-dynamic-modal-content","dmc-mdl",null,0,null,null,!0,{pageSlug:r});this.modalService.modalObserver.next(i),this.modalService.emitModalActions({action:"modal",params:["open"]}),s.preventDefault()},!1)}},2e3)}}).catch(t=>{this.pageProps={preloader:!1,noData:!0,messageData:t[0]}})}isAuth(){return this.storage.local.get(i.N.AUTH_KEY_HEADER)}ngOnDestroy(){this.destroyed$.next(!0),this.destroyed$.complete()}}f.\u0275fac=function(t){return new(t||f)(p.Y36(r.gz),p.Y36(o.IAe),p.Y36(l.H7),p.Y36(o.xPe),p.Y36(o.F$_),p.Y36(r.F0),p.Y36(o.chr),p.Y36(p.SBq),p.Y36(o.SwN))},f.\u0275cmp=p.Xpm({type:f,selectors:[["app-dynamic-content"]],viewQuery:function(t,e){if(1&t&&(p.Gf(d,5),p.Gf(u,5)),2&t){let t;p.iGM(t=p.CRH())&&(e.scriptsContainer=t.first),p.iGM(t=p.CRH())&&(e.stylesContainer=t.first)}},decls:7,vars:3,consts:[["class","progress",4,"ngIf"],["type","error",3,"content",4,"ngIf"],[4,"ngIf"],["id","scripts"],["scriptsContainer",""],["id","styles"],["stylesContainer",""],[1,"progress"],[1,"indeterminate"],["type","error",3,"content"],[3,"innerHTML"]],template:function(t,e){1&t&&(p.YNc(0,g,2,0,"div",0),p.YNc(1,m,1,1,"message-box",1),p.YNc(2,y,2,1,"ng-container",2),p._UZ(3,"div",3,4),p._UZ(5,"div",5,6)),2&t&&(p.Q6J("ngIf",e.pageProps.preloader),p.xp6(1),p.Q6J("ngIf",!e.pageProps.preloader&&e.pageProps.noData),p.xp6(1),p.Q6J("ngIf",!e.pageProps.preloader&&!e.pageProps.noData))},directives:[s.O5,h.W],encapsulation:2});const C=[{path:":slug",component:f,data:{name:"dynamic-content"}}];class v{}v.\u0275fac=function(t){return new(t||v)},v.\u0275mod=p.oAB({type:v}),v.\u0275inj=p.cJS({imports:[[r.Bz.forChild(C)],r.Bz]});var S=n(6778);class D{}D.\u0275fac=function(t){return new(t||D)},D.\u0275mod=p.oAB({type:D}),D.\u0275inj=p.cJS({imports:[[s.ez,v,S.m]]})}}]);