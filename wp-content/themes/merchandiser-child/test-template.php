<?php
/*
  Template Name: Test Template
 */
get_header();
?>

<head>
  <meta charset="utf-8">
  <link rel="dns-prefetch" href="//d2mdw063ttlqtq.cloudfront.net">
  <link rel="dns-prefetch" href="//0.s3.envato.com">
  <link rel="dns-prefetch" href="//thumb-tf.s3.envato.com" />
  <link rel="dns-prefetch" href="//user-profile.s3.envato.com">
  <link rel="dns-prefetch" href="//image-tf.s3.envato.com" />


  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"fcf8d519de","applicationID":"13909","transactionName":"NTU0DRQNDwshOmIZBRM3dR8TDg84Nys/FRQYBSoLAxQKAjM=","queueTime":0,"applicationTime":284,"agent":"","atts":"DXgvW1wZQRQtPChSS1QOMhwLByUINi0+BFNaeCkKCkBZASUkPhVdVCg/CBMHEBMbOD8fBRk5NRVEWEEPMDw9Sl5ZeHZbDxJBXWZ8fF5FQHRoTkhbUUVoajgDFAQFOx4DDBdFfmoAHwsfNjYYSVdNV2RgFUFATXoWEAgXG0c8cHsvR0JzejgWEg8CEy0vOxgCdW9KUUxQUWRgBjglOxZ2WQoLCAJkDygTGhlzejoOEAwKIWd5RF9GdGhNVlFNX31oHhEXFygzVlNRVEl3fm9cUwQ/LBAVCwwJZnJvSEITajhLBUAeGg=="}</script>
  <script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQcGQldQAQMJ"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,(new Date).getTime(),!0])}catch(s){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),s.xhrWrappable&&t(9),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),c=t(7),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),c.on(m,function(){this.bstStart=Date.now()}),c.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(17)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",c)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),c=t(16),s=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),f.setCurrentRouteName=o(d+"routeName",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){l([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o)}catch(a){l([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){l([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function l(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o){if(!l.aborted){t&&t(n,r,o);for(var i=e(o),a=h(n),c=a.length,s=0;s<c;s++)a[s].apply(i,r);var f=u[y[n]];return f&&f.push([g,n,r,i]),i}}function p(t,e){v[t]=h(t).concat(e)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var v={},y={},g={on:p,emit:n,get:m,listeners:h,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var c="nr@context",s=t("gos"),f=t(15),u={},d={},l=e.exports=o();l.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=g.info=NREUM.info,e=d.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(v,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()],null,"api");var n=d.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var c=t("handle"),s=t(15),f=t("ee"),u=window,d=u.document,l="addEventListener",p="attachEvent",h=u.XMLHttpRequest,m=h&&h.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:h,REQ:u.Request,EV:u.Event,PR:u.Promise,MO:u.MutationObserver},t(12);var w=""+location,v={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},y=h&&m&&m[l]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:a(),origin:w,features:{},xhrWrappable:y};d[l]?(d[l]("DOMContentLoaded",i,!1),u[l]("load",r,!1)):(d[p]("onreadystatechange",o),u[p]("onload",r)),c("mark",["firstbyte",a()],null,"api");var b=0},{}]},{},["loader",2,10,4,3]);</script>
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <title>Merchandiser - eCommerce WordPress Theme for WooCommerce Preview - ThemeForest</title>
  <meta name="description" content="&amp;lt;strong&amp;gt;A simple, fast and reliable eCommerce WordPress Theme&amp;lt;/strong&amp;gt;. Packed with e...">
  <meta name="robots" content="noindex, follow" />
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

  <link href="//public-assets.envato-static.com/assets/market/core/index-2a2cc0506ed55c39d10c4f0a415e8881.css" media="all" rel="stylesheet" type="text/css" />
  <link href="//public-assets.envato-static.com/assets/market/pages/preview/index-06c3fde71ad80d7fee72aea2b868371b.css" media="all" rel="stylesheet" type="text/css" />

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/icons/themeforest.net/apple-touch-icon-144x144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/icons/themeforest.net/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/icons/themeforest.net/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="/icons/themeforest.net/apple-touch-icon-precomposed.png" />

  <script src="//public-assets.envato-static.com/assets/market/pages/full_screen_preview/index-57cb18b92a4f2d63de44c1ddc92e5bc6.js" type="text/javascript"></script>

  <script>
    //function to fix height of iframe!
    var calcHeight = function() {
      var headerDimensions = $('.preview__header').height();
      $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
    }

    $(document).ready(function() {
      calcHeight();
    });

    $(window).resize(function() {
      calcHeight();
    }).load(function() {
      calcHeight();
    });
  </script>


</head>


<div class="preview__header">

  <div class="preview__envato-logo">
    <a href="https://themeforest.net/item/merchandiser-ecommerce-wordpress-theme-for-woocommerce/15791151">Envato Market</a>
  </div>

  <div class="preview__actions">

    <div data-experiment-id="XFaQs_hqTKeP3tsTbnVa8Q" data-variant="5" data-view="googleExperimentTracking"></div>
    <div class="preview__action--item-details">
      <a href="https://themeforest.net/item/merchandiser-ecommerce-wordpress-theme-for-woocommerce/15791151" class="e-btn--outline -color-light">Item details</a>
    </div>
    <div class="preview__action--purchase-form">
      <form accept-charset="UTF-8" action="https://themeforest.net/cart/add/15791151" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="AeETkSoIe2RsaqZRXBJxkdkH88xXfBhtGZXbkZHqNTI=" /></div>
        <input id="license" name="license" type="hidden" value="regular" />
        <input id="size_regular" name="size_regular" type="hidden" value="source" />

        <div class="preview__action--buy">
          <button class="e-btn -color-primary">
            Buy now
          </button>            </div>
      </form>        </div>

    <div class="preview__action--close">

      <a href="http://merchandiser.getbowtied.com/">
        <i class="e-icon -icon-cancel"></i><span>Remove Frame</span>
      </a>
    </div>
  </div>

</div>

<iframe class="full-screen-preview__frame" src="http://merchandiser.getbowtied.com/" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview">
</iframe>


<script>$(function(){viewloader.execute(Views);});</script>

<script>
  // Google Analytics Tracking Code
  (function () {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })

    (window,document,'script','//www.google-analytics.com/analytics.js','ga');

    var ACCOUNTS = ["m"];
    window._envGaTrackerNames = ACCOUNTS;

    ga("create", "UA-11834194-7", {"name":"m","allowLinker":true});

    for (var i = 0; i < ACCOUNTS.length; i++) {
      t = ACCOUNTS[i];

      ga(t+'.require', 'linker');
      ga(t+'.linker:autoLink', ["activeden.net","audiojungle.net","themeforest.net","videohive.net","graphicriver.net","3docean.net","codecanyon.net","photodune.net","market.envato.com","market.styleguide.envato.com"]);

      ga(t+'.require', 'ec');

      ga(t+'.require', 'displayfeatures');

      ga(t+'.require', 'linkid', 'linkid.js');



      if ('') {
        ga(t+'.send', {
          hitType: 'pageview',
          page: ''
        });
      } else if ('') {
        // append the analytics_suffix to the page path so the flash alert/error type can be tracked
        var analyticsSuffix = $.trim('').replace(/([A-Z])/g, '$1').replace(/[-_\s]+/g, '-').toLowerCase();
        var uri = URI(window.location.pathname + window.location.search);
        uri.path(uri.path() + '/' + analyticsSuffix);
        var tracking_path = uri.path() + uri.search();
        ga(t+'.send', {
          hitType: 'pageview',
          page: tracking_path,
        });
      } else {
        ga(t+'.send', 'pageview');
      }
    }
  }());


  ga("create", "UA-34525675-5", "auto", {
    name: "author_analytics",
    allowLinker: true
  });

  ga("author_analytics.send", "pageview");



</script>



<script>
  // GA: universal analytics link wrapper
  (function(){
    window._envTrkrs = [["m", "UA-11834194-7"]];

    var debug = false;
    var MAX_RETRIES = 10;

    /*
     The script needs to wait until the Analytics script
     has been downloaded from Google before initializing
     */
    var waitForAnalytics = function(){
      this.count = this.count || 0;

      if (window.ga && ga.getByName) {
        e.init();
      } else {
        if (count < MAX_RETRIES) { setTimeout(waitForAnalytics, 250); }
        count++;
      }
    };

    var e = {
      _envArray: [],
      _envTrkrs: (window._envTrkrsCust && window._envTrkrsCust.length) ? window._envTrkrs.concat(window._envTrkrsCust) : window._envTrkrs,
      init: function() {
        for (var i=0; i < _envTrkrs.length; i++) {
          if(!ga.getByName(_envTrkrs[i][0])) {
            ga("create", _envTrkrs[i][1], "auto", {name: _envTrkrs[i][0], allowLinker: true});
          }
        }

        document.addEventListener('DOMContentLoaded', function(){
          e.wrapperInit();
        });

        if (debug) {console.log('Initiated');}
      },
      wrapperInit: function() {
        if (typeof window._envIsRunning != 'undefined' || window._envIsRunning == true) {
          return
        }
        window._envIsRunning = true;

        if (document.addEventListener) {
          document.addEventListener('click', function(event){
            var target = event.target;
            if (target && target.tagName === 'A') {
              e._envLinksTracker(event);
            }
          });
        }
      },
      isInArray: function(e, t) {
        for (var n = 0; n < t.length; n++) {
          var r = new RegExp(t[n], 'i');
          if (r.test(e)) {
            return n
          }
        }
        return -1
      },
      _envTrackevent: function(e, t, n, r) {
        for (var i = 0; i < this._envTrkrs.length; i++) {
          var s = this._envTrkrs[i][0].length == 0 ? '' : this._envTrkrs[i][0] + '.';
          r.length == 0 ? ga(s + 'send', 'event', e, t, n) : ga(s + 'send', 'event', e, t, n, r)
        }
      },
      _envTrackpageview: function(e, t) {
        t = t.charAt(0) == '/' ? t : '/' + t;
        for (var n = 0; n < this._envTrkrs.length; n++) {
          var r = this._envTrkrs[n][0].length == 0 ? '' : this._envTrkrs[n][0] + '.';
          ga(r + 'send', 'pageview', e + t);
        }
      },
      _envLinksTracker: function(t) {
        var r = false;
        var i = {
          outbound: {
            run: true,
            useEvent: true
          },
          download: {
            run: true,
            useEvent: true,
            reg: ''
          },
          self: {
            run: false,
            useEvent: true
          },
          mail: {
            run: true,
            useEvent: true
          },
          ext: /\.(doc.?|xls.?|ppt.?|exe|zip|rar|gz|tar|tgz|dmg|csv|pdf|xpi|txt|mp3)$/i
        };
        var s = t.srcElement ? t.srcElement : this;
        if (t.srcElement) {
          r = true
        }
        while (s.tagName != 'A') {
          s = s.parentNode
        }
        if (s.href == undefined || s.href == null) {
          return true
        }
        var o = s.href;
        if (o.length == 0) return;
        var u = s.hostname.toLowerCase();
        var a = s.pathname;
        if (a.length == 0) {
          a = '/'
        } else if (a.substr(0, 1) != '/') {
          a = '/' + a
        }
        var f = s.protocol;
        var l = s.search;
        var c = location.hostname;
        c = c.replace(/^www\./i, '').toLowerCase();
        u = u.replace(/^www\./i, '').toLowerCase();
        if (o.match(/^#/)) {
          if (i.self.run) {
            i.self.useEvent ? e._envTrackevent('self', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/self', '/' + o);
            return true
          }
        } else if (f.match(/^mailto:/i)) {
          if (i.mail.run) {
            o = o.replace(/^mailto:/i, '');
            i.mail.useEvent ? e._envTrackevent('mailto', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/mailto', o);
            return true
          }
        } else if ((new RegExp(i.ext)).test(a)) {
          if (i.download.run) {
            o = o.replace(/^https?:\/\//i, '');
            i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
            return true
          }
        } else if (u == undefined || u.length == 0 || f.match(/^javascript:/i)) {
          return
        } else if ((new RegExp(c + '$', 'i')).test(u) || (new RegExp(u + '$', 'i')).test(c)) {
          if (i.download.run && i.download.reg.length != 0) {
            if ((new RegExp(i.download.reg, 'i')).test(a + l)) {
              o = o.replace(/^https?:\/\//i, '');
              i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
              return true
            }
          }
        } else if (u != c) {
          if (e.isInArray(u, e._envArray) == -1) {
            if (i.outbound.run) {
              i.outbound.useEvent ? e._envTrackevent('outbound', 'click - ' + c, u + a + l, '') : e._envTrackpageview('/virtual/outbound', u + a);
              return true
            }
          } else if (e.isInArray(u, e._envArray) != -1) {
            var h = s.target;
            if (h != null && h == '_blank') {
              if ((new RegExp(/_utma=/)).test(l)) {
                return true
              }
              var p = e._envTrkrs[0][0].length == 0 ? '' : _envTrkrs[0][0] + '.';
              return true
            } else {
              return false
            }
          }
        }
      }
    };

    waitForAnalytics();
  })()
</script>


<script type="text/javascript">
  // Google AdWords Remarketing
  /* <![CDATA[ */
  var google_conversion_id = 943617023;
  var google_conversion_label = "u-J6CI3SqQMQp-WC_AM";
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/943617023/?value=0&amp;amp;label=u-J6CI3SqQMQp-WC_AM&amp;amp;guid=ON&amp;amp;script=0"/>
  </div>
</noscript>


<div class="is-hidden" data-intercom-app-id="s9exa3j0" data-intercom-settings-payload="{&quot;app_id&quot;:&quot;s9exa3j0&quot;}" data-should-hide="true" data-should-shutdown="false" data-view="intercomSetup" id="intercom-setup"></div>


<script src="//d3cxv97fi8q177.cloudfront.net/mediasource-A249085-fc90-4e98-904f-95b25288c53b1-c-4415.min.js" type="text/javascript"></script>



<div id="primary" class="content-area fullwidth">
<main id="main" class="site-main">
<ul class="blog_posts">
<li class="blog_post getbowtied_blog_ajax_load_more_item_visible">


<artcile id="post-2499" class="post-2499 post type-post status-publish format-standard has-post-thumbnail hentry category-interior-design">

<div class="bg-image-wrapper">
<div class="bg-image" style="background: #F7F7F7 url(http://merchandiser.getbowtied.com/wp-content/uploads/2015/10/StylishWhiteChairInMinimalistStyleInterior.jpg)">

</div>
  </div>
<div class="post_content_wrapper">
  <div class="post_content">

    <ul class="post-categories"">
      <li>
        <a href="http://merchandiser.getbowtied.com/category/interior-design/" rel="category tag">Interior Design</a>

      </li>
    </ul>
    <h3 class="entry-title">
      <a href="http://merchandiser.getbowtied.com/warm-and-airy-tousled-flexitarian-or-cleanse-salvia-metal/" rel="bookmark">

        Warm and Airy: Tousled Flexitarian or Cleanse Salvia Metal
      </a>
    </h3>
    <p>
      Master cleanse street art chambray umami, keytar readymade polaroid try-hard small batch flexitarian Shoreditch cold-pressed…
    </p>
    <a class="read_more" href="http://merchandiser.getbowtied.com/warm-and-airy-tousled-flexitarian-or-cleanse-salvia-metal/">Read More</a>
  </div>

</div>


  <a class="entry-link" href="http://merchandiser.getbowtied.com/warm-and-airy-tousled-flexitarian-or-cleanse-salvia-metal/"></a>


</artcile>


</li>
</ul>

</main>
  </div>

<?php get_footer(); ?>
