(function(){function e(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}var f="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)},g="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this;function h(){h=function(){};g.Symbol||(g.Symbol=k)}function l(a,b){this.a=a;f(this,"description",{configurable:!0,writable:!0,value:b})}l.prototype.toString=function(){return this.a};var k=function(){function a(c){if(this instanceof a)throw new TypeError("Symbol is not a constructor");return new l("jscomp_symbol_"+(c||"")+"_"+b++,c)}var b=0;return a}();function m(){h();var a=g.Symbol.iterator;a||(a=g.Symbol.iterator=g.Symbol("Symbol.iterator"));"function"!=typeof Array.prototype[a]&&f(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return n(e(this))}});m=function(){}}function n(a){m();a={next:a};a[g.Symbol.iterator]=function(){return this};return a}var p=this||self;function q(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b}var r=Date.now||function(){return+new Date};h();m();var t=document,u=window;function v(a,b,c){if("array"==q(b))for(var d=0;d<b.length;d++)v(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))};function w(a,b,c){a.addEventListener&&a.addEventListener(b,c,!1)};function x(a,b,c){y(t.hidden)?(this.a="hidden",this.f="visibilitychange"):y(t.mozHidden)?(this.a="mozHidden",this.f="mozvisibilitychange"):y(t.msHidden)?(this.a="msHidden",this.f="msvisibilitychange"):y(t.webkitHidden)&&(this.a="webkitHidden",this.f="webkitvisibilitychange");this.h=a;this.b=!1;this.c=-1;this.i=b;this.j=c;t[this.a]&&z(this,2);B(this);C(this)}function B(a){w(t,a.f,function(){if(t[a.a])a.b&&(a.b=!1,a.c=r(),z(a,0));else{if(-1!=a.c){var b=r()-a.c;0<b&&(a.c=-1,z(a,1,b))}z(a,3)}})}function C(a){w(u,"click",function(b){return a.g(b)})}x.prototype.g=function(){var a=this;this.b=!0;u.setTimeout(function(){a.b=!1},5E3)};function z(a,b,c){var d={gqid:a.i,qqid:a.j};0==b&&(d["return"]=0);1==b&&(d["return"]=1,d.timeDelta=c);2==b&&(d.bgload=1);3==b&&(d.fg=1);b=[];for(var A in d)v(A,d[A],b);a=a.h+"&label=window_focus&"+b.join("&");u.google_image_requests||(u.google_image_requests=[]);d=u.document.createElement("img");d.src=a;u.google_image_requests.push(d)}x.prototype.handleClick=x.prototype.g;function y(a){return"undefined"!==typeof a};function D(a,b,c){return new x(a,b,c)}var E=["wfocusinit"],F=p;E[0]in F||"undefined"==typeof F.execScript||F.execScript("var "+E[0]);for(var G;E.length&&(G=E.shift());)E.length||void 0===D?F[G]&&F[G]!==Object.prototype[G]?F=F[G]:F=F[G]={}:F[G]=D;var H=u.google_wf_async,I;if(I=!(!H||!H.call))I="function"===typeof H;I&&u.google_wf_async();}).call(this);