!(function (e) {
  var t = {};
  function n(r) {
    if (t[r]) return t[r].exports;
    var o = (t[r] = { i: r, l: !1, exports: {} });
    return e[r].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
  }
  (n.m = e),
    (n.c = t),
    (n.d = function (e, t, r) {
      n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r });
    }),
    (n.r = function (e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (n.t = function (e, t) {
      if ((1 & t && (e = n(e)), 8 & t)) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var r = Object.create(null);
      if (
        (n.r(r),
        Object.defineProperty(r, "default", { enumerable: !0, value: e }),
        2 & t && "string" != typeof e)
      )
        for (var o in e)
          n.d(
            r,
            o,
            function (t) {
              return e[t];
            }.bind(null, o)
          );
      return r;
    }),
    (n.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return n.d(t, "a", t), t;
    }),
    (n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (n.p = ""),
    n((n.s = 5));
})([
  function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var r = n(2),
      o = (function () {
        function e() {
          this.qsp = new r.QueryStringParser();
        }
        return (
          (e.prototype.getParamsCombined = function () {
            var e = "";
            if (this.qsp.hasAnyTrackingParam()) {
              var t = this.qsp.get("btag"),
                n = this.qsp.get("partner");
              if ((t && (e = t), n && (e = n), e)) {
                for (
                  var r = [], o = 0, i = ["subid", "source"];
                  o < i.length;
                  o++
                ) {
                  var a = i[o],
                    s = this.qsp.get(a) || "";
                  s && r.push(a + "=" + encodeURIComponent(s));
                }
                r.length && (e += "&" + r.join("&"));
              }
            }
            return e;
          }),
          (e.prototype.process = function (t, n) {
            void 0 === t && (t = 30), void 0 === n && (n = !0);
            var r = this.getParamsCombined();
            r && this.setCookie(e.COOKIE_NAME, r, t, n);
          }),
          (e.prototype.setCookie = function (e, t, n, r) {
            void 0 === n && (n = 30), void 0 === r && (r = !0);
            var o = new Date();
            o.setDate(o.getDate() + n);
            var i = [
              e + "=" + t,
              "expires=" + o.toUTCString(),
              "domain=" + encodeURIComponent(location.host),
              "path=/",
            ];
            r && i.push("secure"), (document.cookie = i.join("; "));
          }),
          (e.prototype.getCookie = function (e) {
            if ((e = encodeURIComponent(e))) {
              var t = "; " + document.cookie,
                n = t.split("; " + e + "=");
              if ((n.length || t.split(";" + e + "="), 2 == n.length)) {
                var r = n.pop();
                return (r = r.split(";").shift()), decodeURIComponent(r);
              }
            }
            return "";
          }),
          (e.prototype.hasCookie = function (e) {
            e = encodeURIComponent(e);
            var t = "; " + document.cookie;
            return (
              t.indexOf("; " + e + "=") > -1 || t.indexOf(";" + e + "=") > -1
            );
          }),
          (e.COOKIE_NAME = "btag"),
          e
        );
      })();
    t.UnsafeHandler = o;
  },
  function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var r = n(0),
      o = n(3),
      i = (function () {
        function e() {}
        return (
          (e.get = function (e) {
            return (
              void 0 === e && (e = !1),
              e ? new r.UnsafeHandler() : new o.SafeHandler()
            );
          }),
          e
        );
      })();
    t.Handler = i;
  },
  function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var r = ["btag", "partner", "subid", "source"],
      o = (function () {
        function e() {
          this.reset();
        }
        return (
          (e.prototype.reset = function () {
            (this.useOwnParser = !window.hasOwnProperty("URLSearchParams")),
              (this.cache = {}),
              (this.index = {});
          }),
          (e.prototype.has = function (e) {
            return this.index.hasOwnProperty(e) ? this.index[e] : !!this.get(e);
          }),
          (e.prototype.get = function (e) {
            return this.index.hasOwnProperty(e)
              ? this.index[e]
                ? this.cache[e]
                : ""
              : this.useOwnParser
              ? this.getParam_legacy(e)
              : this.getParam(e);
          }),
          (e.prototype.getParam = function (e) {
            var t = new URLSearchParams(location.search);
            return t.has(e)
              ? ((this.index[e] = !0),
                (this.cache[e] = t.get(e)),
                this.cache[e])
              : ((this.index[e] = !1), "");
          }),
          (e.prototype.getParam_legacy = function (e) {
            e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var t = new RegExp("[\\?&]" + e + "(=([^&#]*)|&|#|$)").exec(
              location.search
            );
            return t
              ? ((this.index[e] = !0),
                (this.cache[e] = decodeURIComponent(t[1].replace(/\+/g, " "))),
                this.cache[e])
              : ((this.index[e] = !1), "");
          }),
          (e.prototype.hasParams = function () {
            return !!location.search;
          }),
          (e.prototype.hasAnyTrackingParam = function () {
            for (var e = 0, t = r; e < t.length; e++) {
              var n = t[e];
              if (this.has(n)) return !0;
            }
            return !1;
          }),
          e
        );
      })();
    t.QueryStringParser = o;
  },
  function (e, t, n) {
    "use strict";
    var r,
      o =
        (this && this.__extends) ||
        ((r = function (e, t) {
          return (r =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]);
            })(e, t);
        }),
        function (e, t) {
          function n() {
            this.constructor = e;
          }
          r(e, t),
            (e.prototype =
              null === t
                ? Object.create(t)
                : ((n.prototype = t.prototype), new n()));
        });
    Object.defineProperty(t, "__esModule", { value: !0 });
    var i = n(0),
      a = (function (e) {
        function t() {
          return (null !== e && e.apply(this, arguments)) || this;
        }
        return (
          o(t, e),
          (t.prototype.process = function (t, n) {
            void 0 === t && (t = 30),
              void 0 === n && (n = !0),
              this.hasCookie(i.UnsafeHandler.COOKIE_NAME) ||
                e.prototype.process.call(this, t, n);
          }),
          t
        );
      })(i.UnsafeHandler);
    t.SafeHandler = a;
  },
  ,
  function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 }),
      n(1)
        .Handler.get(!0)
        .process(30, "https:" === document.location.protocol);
  },
]);
