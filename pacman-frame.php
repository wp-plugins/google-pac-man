<!doctype html><html onmousemove="google&&google.fade&&google.fade(event)">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Google PAC-MAN</title>
  <script>
    window.google = {
      kEI: "zNr2S6z3C4f0eNui1bYK",
      kEXPI: "17259,18168,24661,24737,24745",
      kCSI: {
        e: "17259,18168,24661,24737,24745",
        ei: "zNr2S6z3C4f0eNui1bYK",
        expi: "17259,18168,24661,24737,24745"
      },
      ml: function () {},
      kHL: "en",
      time: function () {
        return (new Date).getTime()
      },
      log: function (b, d, c) {
        var a = new Image,
          e = google,
          g = e.lc,
          f = e.li;
        a.onerror = (a.onload = (a.onabort = function () {
          delete g[f]
        }));
        g[f] = a;
        c = c || "/gen_204?atyp=i&ct=" + b + "&cad=" + d + "&zx=" + google.time();
        a.src = c;
        e.li = f + 1
      },
      lc: [],
      li: 0,
      Toolbelt: {}
    };
    window.google.sn = "webhp";
    window.google.timers = {
      load: {
        t: {
          start: (new Date).getTime()
        }
      }
    };
    try {
      window.google.pt = window.chrome && window.chrome.csi && Math.floor(window.chrome.csi().pageT);
    } catch (u) {}
    window.google.jsrt_kill = 1;
    var _gjwl = location;

    function _gjuc() {
      var b = _gjwl.href.indexOf("#");
      if (b >= 0) {
        var a = _gjwl.href.substring(b + 1);
        if (/(^|&)q=/.test(a) && a.indexOf("#") == -1 && !/(^|&)cad=h($|&)/.test(a)) {
          _gjwl.replace("/search?" + a.replace(/(^|&)fp=[^&]*/g, "") + "&cad=h");
          return 1
        }
      }
      return 0
    }
    function _gjp() {
      !(window._gjwl.hash && window._gjuc()) && setTimeout(_gjp, 500)
    };
    window._gjp && _gjp()
  </script>
  <style>
    #gog{padding:3px 8px 0}
    .gac_m td{line-height:17px;}
    .h{color:#36c;font-size:20px}
    .q{color:#00c}
    .ts td{padding:0}
    .ts{border-collapse:collapse}
    #fctr,#ghead,#pmocntr,#sbl,#tba,#tbe,.fade{opacity:0;}
    #fctr,#ghead,#pmocntr,#sbl,#tba,#tbe,.fade{background:#fff;}
    a.gb1,a.gb2,a.gb3,a.gb4{color:#11c !important}
    #gog{background:#fff;}
    #guser{padding-bottom:7px !important;text-align:right}
    .gbh,.gbd{border-top:1px solid #c9d7f1;font-size:1px}
    .gbh{height:0;position:absolute;top:24px;width:100%}
    #gbs,.gbm{background:#fff;left:0;position:absolute;text-align:left;visibility:hidden;z-index:1000}
    .gbm{border:1px solid;border-color:#c9d7f1 #36c #36c #a2bae7;z-index:1001}
    .gb1{margin-right:.5em}
    .gb1,.gb3{zoom:1}
    .gb2{display:block;padding:.2em .5em;}
    .gb2,.gb3{text-decoration:none;border-bottom:none}
    a.gb1,a.gb2,a.gb3,a.gb4{color:#00c !important}
    a.gb2:hover{background:#36c;color:#fff !important}
    .fl a{color:#4272db}
    a.gb1,a.gb4{text-decoration:underline}
    a.gb3:hover{text-decoration:none}
    #ghead a.gb2:hover{color:#fff!important}
    .ds{display:-moz-inline-box}
    .ds{border-bottom:solid 1px #e7e7e7;border-right:solid 1px #e7e7e7;display:inline-block;margin:3px 0 4px;margin-left:4px;margin-right:3px:height:32px}
    .sblc{padding-top:5px}
    .sblc a{display:block;margin:2px 0;margin-left:13px;font-size:11px;}
    .ftl,#fll a{margin:0 12px}
    #addlang a{padding:0 3px}
    .gac_v div{display:none}
    .gac_v .gac_v2,.gac_bt{display:block!important}
	#lnkInsertCoin { font-family:verdana; font-size:12px; color:#fff; padding-bottom:10px; } 
  </style>
  <noscript>
    <style>
      #fctr,#ghead,#pmocntr,#sbl,#tba,#tbe,.fade{opacity:1;}
    </style>
  </noscript>
  <script>
    google.y = {};
    google.x = function (e, g) {
      google.y[e.id] = [e, g];
      return false
    };
    if (!window.google) window.google = {};
    window.google.crm = {};
    window.google.cri = 0;
    window.clk = function (e, f, g, k, l, b, m) {
      if (document.images) {
        var a = encodeURIComponent || escape,
          c = new Image,
          h = window.google.cri++;
        window.google.crm[h] = c;
        c.onerror = (c.onload = (c.onabort = function () {
          delete window.google.crm[h]
        }));
        if (b && b.substring(0, 6) != "&sig2=") b = "&sig2=" + b;
        c.src = ["/url?sa=T", "", f ? "&oi=" + a(f) : "", g ? "&cad=" + a(g) : "", "&ct=", a(k || "res"), "&cd=", a(l), "&ved=", a(m), e ? "&url=" + a(e.replace(/#.*/, "")).replace(/\+/g, "%2B") : "", "&ei=", "zNr2S6z3C4f0eNui1bYK", b].join("")
      }
      return true
    };
  </script>
</head>
<body>
<div id='pacman-wrapper'>
<textarea id='csi' style='display:none'></textarea>
<iframe name='wgjf' style='display:none'>
</iframe>

<div id='lga' style="background:black">
	<div id='logo' style="width:580px;height:180px;background:url(pacman10-hp.png) 0 0 no-repeat;position:relative;" title="PAC-MAN™ ©1980 NAMCO BANDAI Games Inc.">
		<div id="logo-l" style="width:200px;height:2px;left:177px;top:157px;background:#990;position:absolute;display:none;overflow:hidden">
			<div id="logo-b" style="position:absolute;left:0;background:#ff0;height:8px;width:0">
			</div>
		</div>
		
	</div>
	<div style="text-align:center; padding-bottom:10px"><a id="lnkInsertCoin" href="#">click here to play</a></div>
	<script>
	  google.pml = function () {
      function d(a) {
        if (!google.pml_installed) {
          google.pml_installed = true;
          if (!a) {
            document.getElementById("logo").style.background = "black";
            window.setTimeout(function () {
              var b = document.getElementById("logo-l");
              if (b) b.style.display = "block"
            }, 400)
          }
          a = document.createElement("script");
          a.type = "text/javascript";
          a.src = "js/pacman10-hp.2.js";
          google.dom.append(a)
        }
      }
      function e() {
        if (document.f && document.f.btnI) document.f.btnI.onclick = function () {
          typeof google.pacman != "undefined" ? google.pacman.insertCoin() : d(false);
          return false
        }
		document.getElementById("lnkInsertCoin").onclick = function () {
          typeof google.pacman != "undefined" ? google.pacman.insertCoin() : d(false);
          return false		
		};
      }
      if (!google.pml_loaded) {
        google.pml_loaded = true;
        window.setTimeout(function () {
          document.f && document.f.q && document.f.q.value == "" && d(true)
        }, 1E4);
        e();
        google.rein && google.rein.push(e);
        google.dstr && google.dstr.push(function () {
          google.pacman && google.pacman.destroy();
          if (google.pml_installed) {
            for (var a = (document.getElementById("xjsc") || document.body).getElementsByTagName("script"), b = 0, c; c = a[b++];) c.src.indexOf("/js/") != -1 && google.dom.remove(c);
            google.pml_installed = false
          }
        });
        google.pacManQuery = function () {
          google.nav(document.getElementById("dlink").href)
        }
      }
    };
	</script>
</div>
<div id='xjsi'>
	<script>
    if (google.y) google.y.first = [];
    if (google.y) google.y.first = [];
    google.dstr = [];
    google.rein = [];
    window.setTimeout(function () {
      var a = document.createElement("script");
      // Google src originally links to /extern_js/f/SOME_LONG_HASH/ANOTHER_HASH.js
      // It is regenerated upon each page refresh
      a.src = "google.js";
      (document.getElementById("xjsd") || document.body).appendChild(a);
      if (google.timers && google.timers.load.t) google.timers.load.t.xjsls = (new Date).getTime();
    }, 0);;
    google.neegg = 1;
    google.y.first.push(function () {
      google.ac.i(document.f, document.f.q, '', '', '', {
        o: 1,
        sw: 1
      });
      (function () {
        var h, i, j = 1,
          k = google.time(),
          l = [];

        function m(a, f) {
          var b = [];
          for (var c = 0, e; e = a[c++];) {
            var d = document.getElementById(e);
            d && b.push(d)
          }
          for (var c = 0, g; g = f[c++];) b = b.concat(n(g[0], g[1]));
          for (var c = 0; b[c]; c++) b[c] = [b[c], "opacity", 0, 1, 0, ""];
          return b
        }
        function n(a, f) {
          var b = [],
            c = new RegExp("(^|\\s)" + f + "($|\\s)");
          for (var e = 0, d, g = document.getElementsByTagName(a); d =
          g[e++];) c.test(d.className) && b.push(d);
          return b
        }
        google.fade = function (a) {
          if (google.fx && j) {
            a = a || window.event;
            var f = 1,
              b = google.time() - k;
            if (a && a.type == "mousemove") {
              var c = a.clientX,
                e = a.clientY;
              f = (h || i) && (h != c || i != e) && b > 600;
              h = c;
              i = e
            }
            if (f) {
              j = 0;
              google.fx.animate(600, m(["fctr", "ghead", "pmocntr", "sbl", "tba", "tbe"], [
                ["span", "fade"],
                ["div", "fade"],
                ["div", "gbh"]
              ]));
              for (var d = 0; d < l.length; ++d) if (typeof l[d] == "function") l[d]()
            }
          }
        };
        google.addFadeNotifier = function (a) {
          l.push(a);
          if (!j) a()
        };
      })();;
      google.History && google.History.initialize('/')
    });
    if (google.j && google.j.en && google.j.xi) {
      window.setTimeout(google.j.xi, 0);
      google.fade = null;
    }
    google.pml && google.pml();
  </script>
</div>
<script>

</div>
  (function () {
    var b, d, e, f;

    function g(a, c) {
      if (a.removeEventListener) {
        a.removeEventListener("load", c, false);
        a.removeEventListener("error", c, false)
      } else {
        a.detachEvent("onload", c);
        a.detachEvent("onerror", c)
      }
    }
    function h(a) {
      f = (new Date).getTime();
      ++d;
      a = a || window.event;
      var c = a.target || a.srcElement;
      g(c, h)
    }
    var i = document.getElementsByTagName("img");
    b = i.length;
    d = 0;
    for (var j = 0, k; j < b; ++j) {
      k = i[j];
      if (k.complete || typeof k.src != "string" || !k.src)++d;
      else if (k.addEventListener) {
        k.addEventListener("load", h, false);
        k.addEventListener("error", h, false)
      } else {
        k.attachEvent("onload", h);
        k.attachEvent("onerror", h)
      }
    }
    e = b - d;

    function l() {
      google.timers.load.t.ol = (new Date).getTime();
      google.timers.load.t.iml = f;
      google.kCSI.imc = d;
      google.kCSI.imn = b;
      google.kCSI.imp = e;
      google.report && google.report(google.timers.load, google.kCSI)
    }
    if (window.addEventListener) window.addEventListener("load", l, false);
    else if (window.attachEvent) window.attachEvent("onload", l);
    google.timers.load.t.prt = (f = (new Date).getTime());
  })();
  (function () {
    var b, d, e, f;

    function g(a, c) {
      if (a.removeEventListener) {
        a.removeEventListener("load", c, false);
        a.removeEventListener("error", c, false)
      } else {
        a.detachEvent("onload", c);
        a.detachEvent("onerror", c)
      }
    }
    function h(a) {
      f = (new Date).getTime();
      ++d;
      a = a || window.event;
      var c = a.target || a.srcElement;
      g(c, h)
    }
    var i = document.getElementsByTagName("img");
    b = i.length;
    d = 0;
    for (var j = 0, k; j < b; ++j) {
      k = i[j];
      if (k.complete || typeof k.src != "string" || !k.src)++d;
      else if (k.addEventListener) {
        k.addEventListener("load", h, false);
        k.addEventListener("error", h, false)
      } else {
        k.attachEvent("onload", h);
        k.attachEvent("onerror", h)
      }
    }
    e = b - d;

    function l() {
      google.timers.load.t.ol = (new Date).getTime();
      google.timers.load.t.iml = f;
      google.kCSI.imc = d;
      google.kCSI.imn = b;
      google.kCSI.imp = e;
      google.report && google.report(google.timers.load, google.kCSI)
    }
    if (window.addEventListener) window.addEventListener("load", l, false);
    else if (window.attachEvent) window.attachEvent("onload", l);
    google.timers.load.t.prt = (f = (new Date).getTime());
  })();
</script>
</body>
</html>