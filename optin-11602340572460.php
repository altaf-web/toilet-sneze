<?php
    define('STRIPE_API_KEY', 'sk_test_51HmXTDGZLSxuBZOTp0MFEnVUi3RiRbeRt2HpSBVDSJW3QTDgIP0YB5tS6c8OYO9LPMa7tfi6TdLr92EdFWdSb92300RW8fgPtj'); 
    define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51HmXTDGZLSxuBZOTDhJUY6hLJQ2COliIh5ZUKqtVFMf5Gb4uiF5CBlv5B2mjBbSwb4QuNYWTufyr1A2hw5FqavC500ni9jWtFx');  
?>

<!DOCTYPE html>
<html lang="en" class="clickfunnels-com wf-proximanova-i4-active wf-proximanova-i7-active wf-proximanova-n4-active wf-proximanova-n7-active wf-active bgRepeat wf-proximanova-i3-active wf-proximanova-n3-active elFont_opensans wf-proximanovasoft-n4-active wf-proximanovasoft-n7-active wf-proximasoft-n4-active wf-proximasoft-i4-active wf-proximasoft-i6-active wf-proximasoft-n6-active wf-proximasoft-i7-active wf-proximasoft-n7-active avcHn2VQJenBvoR5hilPG js-focus-visible " style="overflow: initial; background-color: rgb(255, 255, 255); color: rgb(37, 50, 61); font-family: Roboto, Helvetica, sans-serif !important;">
   <head>
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <!-- jQuery is used only for this example; it isn't required to use Stripe -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <meta charset="UTF-8">
      <script>window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","errorBeacon":"bam-cell.nr-data.net","licenseKey":"NRJS-fc902efb332119fff33","applicationID":"367981416","transactionName":"dFZWTENWVQ9QExdNRlJLSFlWXEpMRQBfXUYYSU1aXVBKC1AF","queueTime":0,"applicationTime":525,"agent":""}</script>
      <script>(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRJS-fc902efb332119fff33",applicationID:"367981416"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?f(e,c,o):o()}function n(n,r,i,o){if(!p.aborted||o){e&&e(n,r,i);for(var a=t(i),c=v(n),f=c.length,u=0;u<f;u++)c[u].apply(a,r);var d=s[w[n]];return d&&d.push([b,n,r,a]),a}}function l(e,t){h[e]=v(e).concat(t)}function m(e,t){var n=h[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return h[e]||[]}function g(e){return d[e]=d[e]||i(n)}function y(e,t){u(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var h={},w={},b={on:l,addEventListener:l,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:y,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var c="nr@context",f=e("gos"),u=e(6),s={},d={},p=t.exports=i();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1184.min.js"},w=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:w,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0},{}],"wrap-function":[function(e,t,n){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(7),a="nr@original",c=Object.prototype.hasOwnProperty,f=!1;t.exports=function(e,t){function n(e,t,n,i){function nrWrapper(){var r,a,c,f;try{a=this,r=o(arguments),c="function"==typeof n?n(r,a):n||{}}catch(u){p([u,"",[r,a,i],c])}s(t+"start",[r,a,i],c);try{return f=e.apply(a,r)}catch(d){throw s(t+"err",[r,a,d],c),d}finally{s(t+"end",[r,a,f],c)}}return r(e)?e:(t||(t=""),nrWrapper[a]=e,d(e,nrWrapper),nrWrapper)}function u(e,t,i,o){i||(i="");var a,c,f,u="-"===i.charAt(0);for(f=0;f<t.length;f++)c=t[f],a=e[c],r(a)||(e[c]=n(a,u?c+i:i,o,c))}function s(n,r,i){if(!f||t){var o=f;f=!0;try{e.emit(n,r,i,t)}catch(a){p([a,n,r,i])}f=o}}function d(e,t){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(e);return n.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(r){p([r])}for(var i in e)c.call(e,i)&&(t[i]=e[i]);return t}function p(t){try{e.emit("internal-error",t)}catch(n){}}return e||(e=i),n.inPlace=u,n.flag=a,n}},{}]},{},["loader"]);</script>
      <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
      <meta content="utf-8" http-equiv="encoding">
      <meta name="viewport" content="initial-scale=1">
      <title>SWAT Hygiene</title>
      <meta class="metaTagTop" name="description" content="Toilet's sneeze">
      <meta class="metaTagTop" name="keywords" content="COVID-19 Coronavirus hygiene virus vaporizing vaporize service">
      <meta class="metaTagTop" name="author" content="SWAT TEAM OF MICHIGAN LLC">
      <meta class="metaTagTop" property="og:image" content="assets/img/SWAT-Logo-3600-x-2048.jpg" id="social-image">
      <meta property="og:title" content="SWAT Hygiene">
      <meta property="og:description" content="Toilet's sneeze">
      <meta property="og:url" content="https://myprojectstaging.com/oip/toilet-sneeze/">
      <meta property="og:type" content="website">
      <link rel="stylesheet" media="screen" href="assets/css/lander.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7COswald:400,700%7CDroid+Sans:400,700%7CRoboto:400,700%7CLato:400,700%7CPT+Sans:400,700%7CSource+Sans+Pro:400,600,700%7CNoto+Sans:400,700%7CPT+Sans:400,700%7CUbuntu:400,700%7CBitter:400,700%7CPT+Serif:400,700%7CRokkitt:400,700%7CDroid+Serif:400,700%7CRaleway:400,700%7CInconsolata:400,700" rel="stylesheet" type="text/css">
      <meta property="cf:funnel_id" content="L1BoVmFnZG45em5Jc1ZrZndNS1liZz09LS1OWlFacWR3NUErYzQ4K0RZdGZwSjhRPT0=--190bb5ed99f49f3c08fcd418ccccfa8ef0954791">
      <meta property="cf:page_id" content="cVBRQ3Y2b08rLzZ0VGlXZjBJcGJEQT09LS1lL3FpRXhFWFFuTWVTWGd5K0JkTEJBPT0=--7dbae1f33bbee7a291654429d49a42a5dc6d8a8e">
      <meta property="cf:funnel_step_id" content="YTNCMGhteHI2SFNaM0JSdEd4SGRZdz09LS1naGRSc3JKSmhvcnJiWnl2OXMvYjhBPT0=--8c61477df8b9cfbc8dc41d3b2fced55104a4a38e">
      <meta property="cf:user_id" content="NVZmQWdYcG9YMnRsUGRVQzRtem45Zz09LS01eTRHSEpuRm1kVjE3cjd0b3RRVk5RPT0=--8a5390b80d8adebedffc8eee7ed3c7d4a2d74c70">
      <meta property="cf:account_id" content="ZWNaSnlVci8xNkF1YnE5TWR0ck1oQT09LS1pblYyUEEzYVU1dEhkQ3VuYXB2UUh3PT0=--e236181d497c36078f8a668edc4359bd564ca5b0">
      <meta property="cf:page_code" content="NDM1Nzc1MTI=">
      <meta property="cf:mode_id" content="1">
      <meta property="cf:time_zone" content="Eastern Time (US &amp; Canada)">
      <meta property="cf:app_domain" content="app.clickfunnels.com">
      <script src="assets/js/application.js"></script>
      <style>
         [data-timed-style='fade']{display:none}[data-timed-style='scale']{display:none}
      </style>
      <link rel='icon' type='image/png' href=''>
      </link>
      <meta name="gp-ownership-proof" content="5f9ee41512adfe00709fb351">
   </head>
   <body data-affiliate-param="affiliate_id" data-show-progress="true" style="background: #272f3a">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none !important">
         <filter id="grayscale">
            <fecolormatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"></fecolormatrix>
         </filter>
      </svg>
      <div class="containerWrapper">
         <textarea id="tracking-body-top" style="display: none !important"></textarea>
         <input id="submit-form-action" value="redirect-url" data-url="#" data-ar-service="" data-ar-list="" data-webhook="" type="hidden">
         <div class="nodoHiddenFormFields hide">
            <input id="elHidden1" class="elInputHidden elInput" name="ad" type="hidden">
            <input id="elHidden2" class="elInputHidden elInput" name="tag" type="hidden">
            <input id="elHidden3" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden4" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden5" class="elInputHidden elInput" name="" type="hidden">
         </div>
         <div class="nodoCustomHTML hide"></div>
         <div class="modalBackdropWrapper" style="background-color: rgba(0, 0, 0, 0.4); height: 100%; display: none;"></div>
         <div class="container containerModal midContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius10 shadow0 bgNoRepeat emptySection" id="modalPopup" data-title="Modal" data-block-color="0074C7" style="margin-top: 100px; padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(255, 255, 255); display: none;" data-trigger="none" data-animate="top" data-delay="0">
            <div class="containerInner ui-sortable"></div>
            <div class="closeLPModal"><img src="assets/img/closemodal.png" alt=""></div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <style id="bold_style_tmp_headline1-11592">#tmp_headline1-11592 .elHeadline b{color:rgb(43,143,192);}</style>
         <style id="button_style_tmp_button-56343">#tmp_button-56343 .elButtonFlat:hover{background-color:#24769f!important;}#tmp_button-56343 .elButtonBottomBorder:hover{background-color:#24769f!important;}#tmp_button-56343 .elButtonSubtle:hover{background-color:#24769f!important;}#tmp_button-56343 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(43,143,192)),color-stop(1,#24769f));background-image:-o-linear-gradient(bottom,rgb(43,143,192) 0%,#24769f 100%);background-image:-moz-linear-gradient(bottom,rgb(43,143,192) 0%,#24769f 100%);background-image:-webkit-linear-gradient(bottom,rgb(43,143,192) 0%,#24769f 100%);background-image:-ms-linear-gradient(bottom,rgb(43,143,192) 0%,#24769f 100%);background-image:linear-gradient(to bottom,rgb(43,143,192) 0%,#24769f 100%);}#tmp_button-56343 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(43,143,192)),color-stop(0,#24769f));background-image:-o-linear-gradient(bottom,rgb(43,143,192) 100%,#24769f 0%);background-image:-moz-linear-gradient(bottom,rgb(43,143,192) 100%,#24769f 0%);background-image:-webkit-linear-gradient(bottom,rgb(43,143,192) 100%,#24769f 0%);background-image:-ms-linear-gradient(bottom,rgb(43,143,192) 100%,#24769f 0%);background-image:linear-gradient(to bottom,rgb(43,143,192) 100%,#24769f 0%);}#tmp_button-56343 .elButtonBorder{border:3px solid rgb(43,143,192)!important;color:rgb(43,143,192)!important;}#tmp_button-56343 .elButtonBorder:hover{background-color:rgb(43,143,192)!important;color:#FFF!important;}</style>
         <div id="section-1964610000-sticky-wrapper" class="sticky-wrapper is-sticky" style="margin-left: auto; margin-right: auto; height: 255px;">
            <div id="section-1964610000-sticky-wrapper" class="sticky-wrapper is-sticky" style="margin-left: auto; margin-right: auto; height: 255px;">
               <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 borderLightBottom fullContainer emptySection stickyTop" id="section-1964610000" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 20px; outline: none; border-color: rgb(61, 109, 171); background-color: rgb(39, 86, 148); max-width: 1583px; position: fixed; top: 0px; left: 50%; transform: translateX(-50%);" data-trigger="none" data-animate="fade" data-delay="500">
                  <div class="containerInner ui-sortable">
                     <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin innerToolsTop" id="row-3403410000" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="margin-bottom: 0px; outline: none;">
                        <div id="col-full-106" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
                           <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                              <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-86559" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                 <img src="assets/img/SWAT-Logo-11250-x-7200-BIG.jpg" class="elIMG ximg" width="300" tabindex="0">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         
         <div class="container wideContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 borderLightTop border1px emptySection activeSection_topBorder activeSection_bottomBorder activeSection innerToolsTop" id="section-922410000" data-title="Section" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; border-color: rgb(33, 71, 120); background-color: rgba(255, 255, 255, 0);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-4412110000" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="margin-bottom: 0px; outline: none;">
                  <div id="col-left-135" class="col-md-6 innerContent col_left ui-resizable" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="Left column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-79704" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; cursor: pointer; outline: none;" aria-disabled="false">
                           <div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsSize27 hsTextShadow2" style="text-align: left; color: rgb(255, 255, 255);" data-bold="inherit" contenteditable="false">
                              <b>We are excited to offer this deep clean!&nbsp;</b><b style="background-color: rgba(255, 255, 255, 0);">Please click the links below to download your free materials!</b>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-26817" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; cursor: pointer; outline: none;" aria-disabled="false">
                           <div class="ne elHeadline elMargin0 elBGStyle0 hsTextShadow0 hsSize18 lh4" style="text-align: left; color: rgb(255, 255, 255);" data-bold="inherit" contenteditable="false">
                              You will get immediate access to the bathroom cleaning manual and touch point check list, don't worry, we will Email them to you as well.
                           </div>
                        </div>
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="tmp_divider-33731" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider elDividerStyle1 elDividerShadow1 elDividerColor6">
                              <div class="elDividerInner"></div>
                           </div>
                        </div>
                        <div class="de elNavWrapper de-nav elAlign_center elMargin0 ui-droppable de-editable displayImportantTimed" id="tmp_nav-48758" data-de-type="nav" data-de-editing="false" data-title="navigation" data-ce="false" data-trigger="done" data-animate="fade" data-delay="000" style="margin-top: 30px; outline: none; cursor: pointer; opacity: 1; position: relative; display: block;" aria-disabled="false" data-timed-style="fade" data-timed-minutes="0" data-timed-seconds="1">
                           <nav class="nodoNav elLinkBold elLinkSize1 slide elLinks2">
                              <ul>
                                 <li class="nav1 nodoNavItem"><a href="https://docs.google.com/document/d/10SnV1jYjV3bIrckHW8DNp4A3Adh2krP8UbCq3iAN3aY/edit?usp=sharing" class="nav1link nodoNavLink" target="_blank" style="color: rgb(255, 227, 0); font-size: 34px;">BATHROOM CLEANING MANUAL</a></li>
                                 <li class="nav2 nodoNavItem"><a href="https://docs.google.com/document/d/1nGNU37VIaNj8W0-1d9tjKAfEXB3PhoCMKvLExyZTe5w/edit?usp=sharing" class="nav2link nodoNavLink" target="_blank" style="color: rgb(255, 227, 0); font-size: 34px;">BATHROOM TOUCHPOINT CHECKLIST</a></li>
                                 <li class="nav3 nodoNavItem"><a href="#" class="nav3link nodoNavLink" target="_parent" style="color: rgb(255, 227, 0); font-size: 34px;"></a></li>
                                 <li class="nav4 nodoNavItem"><a href="#" class="nav4link nodoNavLink" target="_parent" style="color: rgb(255, 227, 0); font-size: 34px;">About Us</a></li>
                                 <li class="nav5 nodoNavItem"><a href="#" class="nav5link nodoNavLink" target="_parent" style="color: rgb(255, 227, 0); font-size: 34px;">Resources</a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="de elMargin0 clearfix elFeatureImage_80_20 elScreenshot_right ui-droppable de-editable" id="tmp_featureimage-47198" data-de-type="featureimage" data-de-editing="false" data-title="Image Feature" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 40px; cursor: pointer; outline: none;" aria-disabled="false">
                           <div class="elScreenshot_text">
                              <div class="elScreenshot_text_padding">
                                 <h3 class="ne elScreenshot_text_headline ssHeadlineSize2" style="color: rgb(255, 255, 255);" contenteditable="false"><b>Matthew Castle, Owner</b></h3>
                                 <div class="ne elScreenshot_text_body ssBodySize1" style="color: rgba(255, 255, 255, 0.541176);" contenteditable="false">So excited to be doing your deep clean. I want to empower you to take your hygiene to the next level and that's why I'm giving you these tools. WE, will work together and achieve HYGIENE!</div>
                              </div>
                           </div>
                           <div class="elScreenshot_image elAlign_center">
                              <img src="assets/img/Profile-Pic.jpg" class="elScreenshot_image_src1 ximg imgRoundCorners thumbnailImage shadow30" height="auto" width="100">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div id="col-right-241" class="col-md-6 innerContent col_right ui-resizable" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="Right column" style="outline: none;">
                  <div id="paymentResponse"></div>
                  <form action="submit.php" method="POST" id="paymentFrm">
                     <!-- display errors returned by createToken -->
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin radius10 shadow30" style="padding: 20px; background-color: rgba(255, 255, 255, 0.980392);">

                              <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-89638" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; display: block; cursor: pointer; outline: none;" aria-disabled="false">
                                 <div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize12" style="text-align: left;" data-bold="inherit" contenteditable="false"><b>Your Email Address:</b></div>
                              </div>
                              <div class="de elInputWrapper de-input-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_input-48963" data-de-type="input" data-de-editing="false" data-title="input form" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;" type="email" aria-disabled="false">
                                 <input placeholder="Your Contact Email Address.." id="email" name="email" class="elInput elInput100 elAlign_left elInputBG1 elInputIBlack elInputIRight elInputSmall elInputIEmail required1 elInputBR0 elInputStyl0 garlic-auto-save" data-type="extra" type="email" required=''>
                              </div>



                              <div class="de clearfix elCreditCard elMargin0 ui-droppable de-editable hiddenElementTools" id="tmp_occ-58622" data-de-type="occ" data-de-editing="false" data-title="Credit Card Form" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                       <div class="elCreditCardForm" data-stripe-field-layout="threeField">                                 
                                             <div class="ccNumberWrap">
                                                <div class="ccCardText ccInputText">Credit Card Number:</div>
                                                <input  name="card_num" id="card_num" class="cc-number card-number elInputSmall ccInput elInputStyle1" placeholder="Card number" type="number" data-stripe="number" data-storage="false">
                                             </div>
                                             <div class="ccCVCWrap">
                                                <div class="ccCVCText ccInputText">CVC Code:</div>
                                                <input name="cvc" class="cc-cvc elInputSmall card-cvc ccInput elInputStyle1" placeholder="CVC" type="text" id="payment_cvc" name="payment_cvc" data-stripe="cvc" data-storage="false">
                                             </div>
                                             <div class="ccMonthWrap">
                                                <div class="ccExpMonthText ccInputText">Expiry Month:</div>
                                                <?php
                                                   $month='';
                                                   foreach(range(1,12) as $m ) {
                                                         $month .='<option>'.(($m<=9)?"0".$m:$m).'</option>';
                                                   }
                                                   $retStr = '';
                                                   foreach(range(16,31) as $n){
                                                      $retStr .='<option>'.('20'.$n).'</option>';
                                                   }                                 
                                                ?>
                                                <select name="exp_month" class="card-expiry-month cc-expirey-month elInputSmall ccInput elInputStyle1" data-stripe="exp-month" data-storage="false" id="card_exp_month" name="card_exp_month">
                                                   <?= $month ?>
                                                </select>
                                             </div>
                                             <div class="ccYearWrap">
                                                <div class="ccExpYearText ccInputText">Expiry Year:</div>
                                                <select name="exp_year" class="card-expiry-year  cc-expirey-year elInputSmall ccInput elInputStyle1" data-stripe="exp-year" data-storage="false" id="card_exp_year" name="card_exp_year">
                                                   <?= $retStr ?>
                                                </select>
                                             </div>                                          

                                 </div>
                              </div>



                              <div class="de clearfix elOrderProductOptionsWrapper elMargin0 ui-droppable de-editable" id="tmp_orpo-63537" data-de-type="orpo" data-de-editing="false" data-title="Select Product 2.0" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; cursor: pointer; outline: none;" aria-disabled="false">
                                    <div class="elOrderProductOptions elProductOptionsBox elOrderSelectShow">
                                       <!-- <div class="clearfix elOrderProductOptinLabel">
                                          <div class="pull-left elOrderProductOptinItem">Item</div>
                                          <div class="pull-right elOrderProductOptinLabelPrice">Price</div>
                                       </div>
                                       -->
                                       <div class="clearfix elOrderProductOptinProducts" data-cf-product-template="true">
                                          <div class="pull-left elOrderProductOptinProductName elInputBold activeRadioProduct">
                                             <input type="radio" id="pid-3126490-0" name="purchase[product_id]" value="3126490" data-product-label="Bacteria-shield.com ($99 )" data-product-payment-type="onetime" data-product-amount="99.0" data-product-currency-code="USD" data-business-name="Seller" data-product-display-amount="$99 " data-product-name="Bacteria-shield.com">
                                             <div class="pull-right elOrderProductOptinPrice" data-cf-product-price="true" taxamo-currency="USD">$99 </div>
                                             <label for="pid-3126490-0" data-cf-product-name="true">Bacteria-shield.com</label>
                                          </div>
                                       </div>
                                       <select class="elOrderProductOptionsSelect form-control">
                                          <option value="3126490">Bacteria-shield.com $99 </option>
                                       </select>
                                    </div>
                              </div>

                              <div class="de clearfix elOrderProductOptionsWrapper elMargin0 ui-droppable de-editable" id="tmp_orb-39315" data-de-type="orb" data-de-editing="false" data-title="Order Summary" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; cursor: pointer; outline: none;" aria-disabled="false">
                                    <div class="dashed orderFormBump" style="border: 3px dashed black; padding: 10px; background-color: rgb(252, 248, 227); background-position: initial initial; background-repeat: initial initial;">
                                       <div class="sectioncontent">
                                          <div style="padding: 1px 10px; margin-bottom: 10px; background-color: rgb(255, 255, 153); text-align: center; background-position: initial initial; background-repeat: initial initial;">
                                             <label class="checkbox inline" style=" cursor: pointer; font-size: 14px; font-weight: normal; line-height: 20px; display: inline-block; margin-bottom: 0px; min-height: 20px; padding-left: 20px; padding-top: 0px; margin-top:-1px; vertical-align: middle;">
                                             <img src="https://assets.clickfunnels.com/templates/listhacking-sales/images/arrow-flash-small.gif" alt="" style="max-width: 100%; height: auto; vertical-align: middle; border: 0px; float: left; position: relative; left: -25px;" data-cf-id="flashing-arrow" data-cf-note="flashing arrow" data-cf-editable-type="image">
                                             <input name="purchase[product_ids][]" id="bump-offer" style="margin: 4px 0px 0px -20px; cursor: pointer;float: left;" data-storage="false" type="checkbox">
                                             </label>
                                             <label class="checkbox inline" style="font-weight: normal; line-height: 20px; display: inline-block; min-height: 20px; vertical-align: middle; margin-bottom: 0px; padding-left: 0px; padding-top: 5px"><b style="color: rgb(0, 153, 0); line-height: 30px">
                                             <font class="bumpHeadline" data-cf-id="bump-headline" data-cf-note="bump headline" data-cf-editable-type="rich-text" size="4">Yes, I will Take It!</font></b>
                                             </label>
                                          </div>
                                          
                                          <div class="text-center" style="text-align: center;">
                                             <p style="text-align: left" data-cf-id="order-bump" data-cf-note="orderform bump" data-cf-editable-type="rich-text"><font size="2"><u>
                                                <font color="#CC3300"><b class="otoText">ONE TIME OFFER</b></font></u>: <span class="otoText2">$29.95 Take the question out of disinfecting once and for all with this disinfection manual. Anything and everything you need to know about disinfecting. This manual will take you step by step as you learn how to contain viral hotspots and live in a new hygienic way.</span></font>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                              </div>

                              <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-35080" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false" data-elbuttontype="1">
                                    <button type="submit" class="btn btn-success"  id="payBtn" name="payBtn" class="elButton elButtonSize1 elButtonColor1 elButtonFlat elButtonFull" style="color: rgb(255, 255, 255); background-color: rgb(14, 141, 199);">Order and Get Instant Access</button>
                              </div>
                           </form>
                           
                              <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-35080" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false" data-elbuttontype="1">
                                 <?php 
                                    require('./ajax_file/stripe-php-master/init.php');
                                    \Stripe\Stripe::setApiKey(STRIPE_API_KEY);
                                 ?>
                                 <form action="submit_by_card.php" method="post">
                                 <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                 data-key='<?= STRIPE_PUBLISHABLE_KEY ?>'
                                 data-amount="5000"
                                 data-name='Technado'
                                 data-description="desc"
                                 data-image=""
                                 data-currency='UDD'>
                                 </script>
                                 </form>                    
                              </div>
                        </div>
                        <!-- <style id="button_style_tmp_button-35080">#tmp_button-35080 .elButtonFlat:hover{background-color:#0b72a1!important;}#tmp_button-35080 .elButtonBottomBorder:hover{background-color:#0b72a1!important;}#tmp_button-35080 .elButtonSubtle:hover{background-color:#0b72a1!important;}#tmp_button-35080 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(14,141,199)),color-stop(1,#0b72a1));background-image:-o-linear-gradient(bottom,rgb(14,141,199) 0%,#0b72a1 100%);background-image:-moz-linear-gradient(bottom,rgb(14,141,199) 0%,#0b72a1 100%);background-image:-webkit-linear-gradient(bottom,rgb(14,141,199) 0%,#0b72a1 100%);background-image:-ms-linear-gradient(bottom,rgb(14,141,199) 0%,#0b72a1 100%);background-image:linear-gradient(to bottom,rgb(14,141,199) 0%,#0b72a1 100%);}#tmp_button-35080 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(14,141,199)),color-stop(0,#0b72a1));background-image:-o-linear-gradient(bottom,rgb(14,141,199) 100%,#0b72a1 0%);background-image:-moz-linear-gradient(bottom,rgb(14,141,199) 100%,#0b72a1 0%);background-image:-webkit-linear-gradient(bottom,rgb(14,141,199) 100%,#0b72a1 0%);background-image:-ms-linear-gradient(bottom,rgb(14,141,199) 100%,#0b72a1 0%);background-image:linear-gradient(to bottom,rgb(14,141,199) 100%,#0b72a1 0%);}#tmp_button-35080 .elButtonBorder{border:3px solid rgb(14,141,199)!important;color:rgb(14,141,199)!important;}#tmp_button-35080 .elButtonBorder:hover{background-color:rgb(14,141,199)!important;color:#FFF!important;}</style> -->
                        
                     </div>

                  </div>
               </div>
            </div>
         </div>

<script>
   //set your publishable key
   Stripe.setPublishableKey('pk_test_51HmXTDGZLSxuBZOTDhJUY6hLJQ2COliIh5ZUKqtVFMf5Gb4uiF5CBlv5B2mjBbSwb4QuNYWTufyr1A2hw5FqavC500ni9jWtFx');


//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $('#payBtn').removeAttr("disabled");
        //display the errors on the form
        $(".payment-errors").html(response.error.message);
    } else {
        var form$ = $("#paymentFrm");
        //get token id
        var token = response['id'];
        //insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" 
+ token + "' />");
        //submit form to the server
        form$.get(0).submit();
    }
}

$(document).ready(function() {
    //on form submit
    $("#paymentFrm").submit(function(event) {
        //disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
        
        //create single-use token to charge the user
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        
        //submit from callback
        return false;
    });
});

</script>

 </body>
</html>