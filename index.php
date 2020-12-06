<!DOCTYPE html>
<html lang="en" class="clickfunnels-com wf-proximanova-i4-active wf-proximanova-i7-active wf-proximanova-n4-active wf-proximanova-n7-active wf-active bgRepeat wf-proximanova-i3-active wf-proximanova-n3-active elFont_opensans wf-proximanovasoft-n4-active wf-proximanovasoft-n7-active wf-proximasoft-n4-active wf-proximasoft-i4-active wf-proximasoft-i6-active wf-proximasoft-n6-active wf-proximasoft-i7-active wf-proximasoft-n7-active avcHn2VQJenBvoR5hilPG js-focus-visible " style="overflow: initial; background-color: rgb(255, 255, 255); color: rgb(37, 50, 61); font-family: Roboto, Helvetica, sans-serif !important;">
   <head>
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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

      <script src="assets/js/application.js"></script>
      <style>
         [data-timed-style='fade']{display:none}[data-timed-style='scale']{display:none}
      </style>
      <link rel='icon' type='image/png' href=''>
      </link>
      <meta name="gp-ownership-proof" content="5f9ee41512adfe00709fb351">
   </head>
   <body data-affiliate-param="affiliate_id" data-show-progress="true">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none !important">
         <filter id="grayscale">
            <fecolormatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"></fecolormatrix>
         </filter>
      </svg>
      <div class="containerWrapper">
         <style id="globalHeadlineCSS" data-font-fam="Montserrat">.elHeadlineWrapper[data-htype="headline"]{font-family:"Montserrat",Helvetica,sans-serif!important;}</style>
         <textarea id="tracking-body-top" style="display: none !important"></textarea>
         <input id="submit-form-action" value="redirect-url" data-url="#" data-ar-service="API" data-ar-list="Extreme Funnel Makeover" data-webhook="" type="hidden" data-ar-list-id="41468">
         <div class="nodoHiddenFormFields hide">
            <input id="elHidden1" class="elInputHidden elInput" name="ad" type="hidden">
            <input id="elHidden2" class="elInputHidden elInput" name="tag" type="hidden">
            <input id="elHidden3" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden4" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden5" class="elInputHidden elInput" name="" type="hidden">
         </div>
         <div class="nodoCustomHTML hide"></div>
         <div class="modalBackdropWrapper" style="background-color: rgba(0, 0, 0, 0.4); height: 100%; display: none;"></div>
         <div class="container containerModal noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius10 shadow0 bgNoRepeat borderLight border5px emptySection noBounce midContainer" id="modalPopup" data-title="Modal" data-block-color="0074C7" style="margin-top: 100px; padding-top: 40px; padding-bottom: 40px; border-color: rgb(28, 28, 28); outline: none; position: fixed; background-color: rgb(255, 255, 255); display: none;" data-trigger="none" data-animate="top" data-delay="0">
            <div class="containerInner ui-sortable" style="padding-left: 30px; padding-right: 30px;">
               <form id="modal_form" name="modal_form">
               <div class="row noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin bgCover100 fade load" id="row--21006" data-trigger="load" data-animate="fade" data-delay="500" data-title="1 column row" style='padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 75%; max-width: 100%; background-image: url("assets/img/SWAT-LOGO-552-X-288-Opacic.jpg");' data-timed-style="fade" data-timed-seconds="3">
                  <div id="col-full-117" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-93578" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 38px;" data-bold="inherit" contenteditable="false" data-opacity="1"><b>Special One Time Offer! Get Your Bathroom Sealed As Part Of Your Deep Clean!</b></div>
                        </div>
                        <div class="de elVideoWrapper de-video-block elVideoWidth100 elMargin0 ui-droppable de-editable" id="tmp_video-87958" data-de-type="video" data-de-editing="false" data-title="video" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" data-video-type="youtube" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false" data-youtube-url="https://youtu.be/zyxKfJngyso" data-youtube-autoplay="yes" data-youtube-unmute-label="true" data-youtube-controls="no" data-youtube-block-pause="false">
                           <div class="elVideoplaceholder">
                              <div class="elVideoplaceholder_inner"></div>
                           </div>
                           <div class="elVideo iframeunmuted" style="display: none;"><iframe width="640" height="360" allow="autoplay" src="https://www.youtube.com/embed/zyxKfJngyso?mute=1&amp;autoplay=0&amp;&amp;modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent" frameborder="0" allowfullscreen="" wmode="opaque" data-popup-autoplay="true"></iframe></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-78286" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 32px;" data-bold="inherit" contenteditable="false">
                              <b>
                              $99FOR BOTH BATHROOMS!</b>
                              <div><b><br></b></div>
                              <div><b>50% SAVINGS</b></div>
                              <div><b>&amp; Receive A Free </b></div>
                              <div><b>HYGIENE MIST &amp; Touch Point Check List</b></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input type="hidden" name="hidden_email" id="hidden_email" value="0">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--76794" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                  <div id="col-full-100" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-83893" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" data-elbuttontype="1" aria-disabled="false">
                           <a href="javascript:void(0)" id="modal_btn_sbmt" class="elButton elButtonSize1 modal_btn_sbmt elButtonColor1 elButtonRounded elButtonPadding2 elBtnVP_10 elButtonCorner3 elButtonFluid elBtnHP_25 elBTN_b_1 elButtonShadowN1 elButtonTxtColor1" style="color: rgb(255, 255, 255);font-weight: 600; background-color: rgb(1, 116, 199);font-size: 20px" rel="noopener noreferrer">
                           <!--
                             href="#submit-form" 
                             target="_blank" 
                          -->
                           <span class="elButtonMain btnTxt">YES, For $99, Make Both Bathrooms Anti-Microbial &amp; Spray Your Hygiene Mist As Part Of The Deal! Throw In Your Bathroom TouchPoint Checklist too!</span>
                           <span class="elButtonSub"></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--55483" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                  <div id="col-full-174" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="button-30742" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" data-elbuttontype="1" aria-disabled="false">
                           <a href="javascript:void(0)"  class="elButton elButtonSize1 modal_btn_sbmt elButtonColor1 elButtonRounded elButtonPadding2 elBtnVP_10 elButtonCorner3 elButtonFluid elBtnHP_25 elBTN_b_1 elButtonShadowN1 elButtonTxtColor1" style="color: rgb(255, 255, 255);font-weight: 600; background-color: rgb(1, 116, 199);font-size: 20px" rel="noopener noreferrer" id="undefined-663">
                           <!-- href="https://myprojectstaging.com/oip/toilet-sneeze/optin-11602340572460.php -->
                           <span class="elButtonMain btnTxt">No, I don't want my bathrooms to be anti-microbial, schedule my deep clean first, maybe we can talk about it.</span>
                           <span class="elButtonSub"></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
            </div>
            <div class="closeLPModal"><img src="assets/img/closemodal.png" alt=""></div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <style id="bold_style_tmp_headline1-90167">#tmp_headline1-90167 .elHeadline b{color:rgb(230,51,51);}</style>
         <style id="button_style_tmp_button-94931">#tmp_button-94931 .elButtonFlat:hover{background-color:#0564a9!important;}#tmp_button-94931 .elButtonBottomBorder:hover{background-color:#0564a9!important;}#tmp_button-94931 .elButtonSubtle:hover{background-color:#0564a9!important;}#tmp_button-94931 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(6,124,209)),color-stop(1,#0564a9));background-image:-o-linear-gradient(bottom,rgb(6,124,209) 0%,#0564a9 100%);background-image:-moz-linear-gradient(bottom,rgb(6,124,209) 0%,#0564a9 100%);background-image:-webkit-linear-gradient(bottom,rgb(6,124,209) 0%,#0564a9 100%);background-image:-ms-linear-gradient(bottom,rgb(6,124,209) 0%,#0564a9 100%);background-image:linear-gradient(to bottom,rgb(6,124,209) 0%,#0564a9 100%);}#tmp_button-94931 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(6,124,209)),color-stop(0,#0564a9));background-image:-o-linear-gradient(bottom,rgb(6,124,209) 100%,#0564a9 0%);background-image:-moz-linear-gradient(bottom,rgb(6,124,209) 100%,#0564a9 0%);background-image:-webkit-linear-gradient(bottom,rgb(6,124,209) 100%,#0564a9 0%);background-image:-ms-linear-gradient(bottom,rgb(6,124,209) 100%,#0564a9 0%);background-image:linear-gradient(to bottom,rgb(6,124,209) 100%,#0564a9 0%);}#tmp_button-94931 .elButtonBorder{border:3px solid rgb(6,124,209)!important;color:rgb(6,124,209)!important;}#tmp_button-94931 .elButtonBorder:hover{background-color:rgb(6,124,209)!important;color:#FFF!important;}</style>
         <style id="button_style_tmp_button-26551">#tmp_button-26551 .elButtonFlat:hover{background-color:#d67100!important;}#tmp_button-26551 .elButtonBottomBorder:hover{background-color:#d67100!important;}#tmp_button-26551 .elButtonSubtle:hover{background-color:#d67100!important;}#tmp_button-26551 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,135,0)),color-stop(1,#d67100));background-image:-o-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:-moz-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:-ms-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:linear-gradient(to bottom,rgb(255,135,0) 0%,#d67100 100%);}#tmp_button-26551 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(255,135,0)),color-stop(0,#d67100));background-image:-o-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:-moz-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:-webkit-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:-ms-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:linear-gradient(to bottom,rgb(255,135,0) 100%,#d67100 0%);}#tmp_button-26551 .elButtonBorder{border:3px solid rgb(255,135,0)!important;color:rgb(255,135,0)!important;}#tmp_button-26551 .elButtonBorder:hover{background-color:rgb(255,135,0)!important;color:#FFF!important;}</style>
         <style id="button_style_tmp_button-26551-143">#tmp_button-26551-143 .elButtonFlat:hover{background-color:#d67100!important;}#tmp_button-26551-143 .elButtonBottomBorder:hover{background-color:#d67100!important;}#tmp_button-26551-143 .elButtonSubtle:hover{background-color:#d67100!important;}#tmp_button-26551-143 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,135,0)),color-stop(1,#d67100));background-image:-o-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:-moz-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:-ms-linear-gradient(bottom,rgb(255,135,0) 0%,#d67100 100%);background-image:linear-gradient(to bottom,rgb(255,135,0) 0%,#d67100 100%);}#tmp_button-26551-143 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(255,135,0)),color-stop(0,#d67100));background-image:-o-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:-moz-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:-webkit-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:-ms-linear-gradient(bottom,rgb(255,135,0) 100%,#d67100 0%);background-image:linear-gradient(to bottom,rgb(255,135,0) 100%,#d67100 0%);}#tmp_button-26551-143 .elButtonBorder{border:3px solid rgb(255,135,0)!important;color:rgb(255,135,0)!important;}#tmp_button-26551-143 .elButtonBorder:hover{background-color:rgb(255,135,0)!important;color:#FFF!important;}</style>
         <style id="bullet_list_icon_color_tmp_list-94235">#tmp_list-94235 li:before{color:rgb(0,84,102)!important;}</style>
         <style id="bullet_list_icon_color_list-13328">#list-13328 li:before{color:rgb(0,84,102)!important;}</style>
         <style id="pricing_style_tmp_pricing-72669">#tmp_pricing-72669 .pricing-panel{border-color:rgb(224,224,224)!important;background-color:rgb(224,224,224)!important;}#tmp_pricing-72669 .panel-heading.panel-heading-gradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(224,224,224)),color-stop(1,#cccccc));background-image:-o-linear-gradient(bottom,rgb(224,224,224) 0%,#cccccc 100%);background-image:-moz-linear-gradient(bottom,rgb(224,224,224) 0%,#cccccc 100%);background-image:-webkit-linear-gradient(bottom,rgb(224,224,224) 0%,#cccccc 100%);background-image:-ms-linear-gradient(bottom,rgb(224,224,224) 0%,#cccccc 100%);background-image:linear-gradient(to bottom,rgb(224,224,224) 0%,#cccccc 100%);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);}</style>
         <style id="pricing_style_tmp_pricing-47813">#tmp_pricing-47813 .pricing-panel{border-color:rgb(255,198,66)!important;background-color:rgb(255,198,66)!important;}#tmp_pricing-47813 .panel-heading.panel-heading-gradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,198,66)),color-stop(1,#ffba19));background-image:-o-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:-moz-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:-ms-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:linear-gradient(to bottom,rgb(255,198,66) 0%,#ffba19 100%);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);}</style>
         <style id="button_style_tmp_pricing-47813">#tmp_pricing-47813 .elButtonFlat:hover{background-color:#ffba19!important;}#tmp_pricing-47813 .elButtonBottomBorder:hover{background-color:#ffba19!important;}#tmp_pricing-47813 .elButtonSubtle:hover{background-color:#ffba19!important;}#tmp_pricing-47813 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,198,66)),color-stop(1,#ffba19));background-image:-o-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:-moz-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:-ms-linear-gradient(bottom,rgb(255,198,66) 0%,#ffba19 100%);background-image:linear-gradient(to bottom,rgb(255,198,66) 0%,#ffba19 100%);}#tmp_pricing-47813 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(255,198,66)),color-stop(0,#ffba19));background-image:-o-linear-gradient(bottom,rgb(255,198,66) 100%,#ffba19 0%);background-image:-moz-linear-gradient(bottom,rgb(255,198,66) 100%,#ffba19 0%);background-image:-webkit-linear-gradient(bottom,rgb(255,198,66) 100%,#ffba19 0%);background-image:-ms-linear-gradient(bottom,rgb(255,198,66) 100%,#ffba19 0%);background-image:linear-gradient(to bottom,rgb(255,198,66) 100%,#ffba19 0%);}#tmp_pricing-47813 .elButtonBorder{border:3px solid rgb(255,198,66)!important;color:rgb(255,198,66)!important;}#tmp_pricing-47813 .elButtonBorder:hover{background-color:rgb(255,198,66)!important;color:#FFF!important;}</style>
         <style id="button_style_tmp_pricing-72669">#tmp_pricing-72669 .elButtonFlat:hover{background-color:#1a96b6!important;}#tmp_pricing-72669 .elButtonBottomBorder:hover{background-color:#1a96b6!important;}#tmp_pricing-72669 .elButtonSubtle:hover{background-color:#1a96b6!important;}#tmp_pricing-72669 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(31,180,218)),color-stop(1,#1a96b6));background-image:-o-linear-gradient(bottom,rgb(31,180,218) 0%,#1a96b6 100%);background-image:-moz-linear-gradient(bottom,rgb(31,180,218) 0%,#1a96b6 100%);background-image:-webkit-linear-gradient(bottom,rgb(31,180,218) 0%,#1a96b6 100%);background-image:-ms-linear-gradient(bottom,rgb(31,180,218) 0%,#1a96b6 100%);background-image:linear-gradient(to bottom,rgb(31,180,218) 0%,#1a96b6 100%);}#tmp_pricing-72669 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(31,180,218)),color-stop(0,#1a96b6));background-image:-o-linear-gradient(bottom,rgb(31,180,218) 100%,#1a96b6 0%);background-image:-moz-linear-gradient(bottom,rgb(31,180,218) 100%,#1a96b6 0%);background-image:-webkit-linear-gradient(bottom,rgb(31,180,218) 100%,#1a96b6 0%);background-image:-ms-linear-gradient(bottom,rgb(31,180,218) 100%,#1a96b6 0%);background-image:linear-gradient(to bottom,rgb(31,180,218) 100%,#1a96b6 0%);}#tmp_pricing-72669 .elButtonBorder{border:3px solid rgb(31,180,218)!important;color:rgb(31,180,218)!important;}#tmp_pricing-72669 .elButtonBorder:hover{background-color:rgb(31,180,218)!important;color:#FFF!important;}</style>
         <style id="pricing_style_tmp_pricing-97542">#tmp_pricing-97542 .pricing-panel{border-color:rgb(235,235,235)!important;background-color:rgb(235,235,235)!important;}#tmp_pricing-97542 .panel-heading.panel-heading-gradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(235,235,235)),color-stop(1,#d7d7d7));background-image:-o-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:-moz-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:-webkit-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:-ms-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:linear-gradient(to bottom,rgb(235,235,235) 0%,#d7d7d7 100%);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);}</style>
         <style id="button_style_tmp_pricing-97542">#tmp_pricing-97542 .elButtonFlat:hover{background-color:#d7d7d7!important;}#tmp_pricing-97542 .elButtonBottomBorder:hover{background-color:#d7d7d7!important;}#tmp_pricing-97542 .elButtonSubtle:hover{background-color:#d7d7d7!important;}#tmp_pricing-97542 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(235,235,235)),color-stop(1,#d7d7d7));background-image:-o-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:-moz-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:-webkit-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:-ms-linear-gradient(bottom,rgb(235,235,235) 0%,#d7d7d7 100%);background-image:linear-gradient(to bottom,rgb(235,235,235) 0%,#d7d7d7 100%);}#tmp_pricing-97542 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(235,235,235)),color-stop(0,#d7d7d7));background-image:-o-linear-gradient(bottom,rgb(235,235,235) 100%,#d7d7d7 0%);background-image:-moz-linear-gradient(bottom,rgb(235,235,235) 100%,#d7d7d7 0%);background-image:-webkit-linear-gradient(bottom,rgb(235,235,235) 100%,#d7d7d7 0%);background-image:-ms-linear-gradient(bottom,rgb(235,235,235) 100%,#d7d7d7 0%);background-image:linear-gradient(to bottom,rgb(235,235,235) 100%,#d7d7d7 0%);}#tmp_pricing-97542 .elButtonBorder{border:3px solid rgb(235,235,235)!important;color:rgb(235,235,235)!important;}#tmp_pricing-97542 .elButtonBorder:hover{background-color:rgb(235,235,235)!important;color:#FFF!important;}</style>
         <style id="bold_style_headline-37576">#headline-37576 .elHeadline b{color:rgb(2,2,2);}</style>
         <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 fullContainer emptySection borderLightBottom border2px" id="section--22157" data-title="Top Section" data-block-color="0074C7" style="padding-top: 15px; padding-bottom: 13px; outline: none; border-color: rgba(255, 255, 255, 0.098); background-color: rgb(247, 248, 250);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin innerToolsTop" id="row-105" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="margin-bottom: 0px; outline: none; padding-top: 0px; padding-bottom: 0px;" col-array="2,10">
                  <div id="col-left-145-148" class="innerContent col_left ui-resizable col-md-4" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="Left column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                        <div class="de elImageWrapper de-image-block elMargin0 elAlign_left ui-droppable de-editable" id="img-61249-144" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 55px; outline: none; cursor: pointer;" data-imagelink="#" aria-disabled="false">
                           <img src="assets/img/SWAT-2048x500.png" class="elIMG ximg" width="36000" data-imagelink="#">
                        </div>
                     </div>
                  </div>
                  <div id="col-right-122-112" class="innerContent col_right ui-resizable col-md-8" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="Right column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-90122-169" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; display: block; cursor: pointer; outline: none;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh3 elMargin0 elBGStyle0 hsTextShadow0 deNormalLS" style="text-align: center; color: rgb(45, 45, 45); font-size: 40px; background-color: rgba(255, 255, 255, 0);" data-bold="inherit" contenteditable="false">
                              <b>Public Health Panic! </b>
                              <div>
                                 <font color="#fc1717"><b><br></b></font>
                                 <div>What The Smart Restaurant Owners Are Doing Now</div>
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
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTopBottom" id="section--20860" data-title="optin" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 15px; outline: none; background-color: rgb(37, 50, 61); color: rgb(255, 255, 255); border-color: rgba(0, 0, 0, 0.227451);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--21020" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 0px; padding-bottom: 0px; margin: 0px; outline: none;">
                  <div id="col-full-108" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-186-175" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" data-hide-on="" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 42px;" data-bold="inherit" contenteditable="false"><b>Share This Video With Your Friends And Get Your Bathroom Deep Cleaned ON US!</b></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-99914" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false" style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                           <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 23px" data-bold="inherit" data-gramm="false" contenteditable="false">2 Bathrooms, One Location, Up to 4 hours, Michigan Only!</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-168" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 10px; padding-bottom: 40px; margin: 0px; outline: none;" col-array="7,5">
                  <div id="col-left-159-141-121" class="innerContent col_left ui-resizable col-md-7" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elVideoWrapper de-video-block elVideoWidth100 elMargin0 ui-droppable de-editable" id="tmp_video-91800-133" data-de-type="video" data-de-editing="false" data-title="video" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" data-video-type="custom" style="outline: none; cursor: pointer; box-shadow: rgba(23, 28, 33, 0.4) 0px 4px 19px 0px; margin-top: 10px;" data-element-theme="customized" data-youtube-url="https://youtu.be/KpMISPLcgzA" data-youtube-autoplay="yes" aria-disabled="false" data-hide-on="">
                           <div class="elVideoplaceholder">
                              <div class="elVideoplaceholder_inner"> </div>
                           </div>
                           <div class="elVideo" style="display: none;">
                              <div id="ppdiv-wrapper-2150691" style="width: 640px;height: 360px;">
                                 <div id="ppdiv_2150691" style="width: 100%; height:360px;"></div>
                              </div>
                              <script type="text/javascript" src="https://s3.amazonaws.com/press-play-v2/2141191/2150691/outer.js"></script>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-14891" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">
                              <div><b>Watch The Videos For More Details...</b></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-87291" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 22px;" data-bold="inherit" data-opacity="8" contenteditable="false"></div>
                        </div>
                     </div>
                  </div>
                  <div id="col-right-148-160-179" class="innerContent col_right ui-resizable col-md-5" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-98600" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-95662" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 21px;" data-bold="inherit" data-opacity="8" contenteditable="false">
                              <div><b>Watch the video now and enter your email below to be taken to the next page where you can share this video and unlock your  access to the new bathroom cleaning manual, the touchpoint checklist and schedule your bathroom deep clean today!</b></div>
                           </div>
                        </div>
                        
                        <form action="javascript:void(0)">
                          <div class="de elInputWrapper de-input-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_input-28142" data-de-type="input" data-de-editing="false" data-title="input" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" type="email" style="margin-top: 20px; outline: none; cursor: pointer;" data-element-theme="customized" aria-disabled="false" required="">
                            <input type="email" required="" placeholder="Your Email Address (to unlock the Manual and Checklist)" name="email" class="elInput elInput100 elAlign_left elInputBR5 elInputIRight elInputMid elInputStyle1 elInputBG1 elInputBold elInputIColor required1" data-type="extra" style="" id="email_1">
                          </div>
                          <div class="de elBTN elMargin0 elAlign_left ui-droppable de-editable" id="tmp_button-32943-152-147-133" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;" data-element-theme="customized" data-hide-on="" data-elbuttontype="1" aria-disabled="false"> 
                          <a  onclick="myFunction('email_1')" href="javascript:void(0)" class="elButton elButtonSize1 btn1 elButtonColor1 elButtonRounded elButtonPadding2 elBtnVP_10 elButtonCorner3 elButtonFluid elBtnHP_25 elButtonShadowN1 elButtonTxtColor1 elBTN_b_1_2" style="color: rgb(255, 255, 255); background: rgb(1, 116, 199); font-size: 20px;" id="undefined-407-713"> <span class="elButtonMain">Step 1 of 2: Submit Email to Unlock The NEW Bathroom Cleaning Manual AND Touchpoint Checklist</span> <span class="elButtonSub"></span></a>
                          <!-- href="#open-popup" -->
                        </div>
                        </form>

                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-65384" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>

                        <div class="de elBTN de-editable elAlign_center elMargin0 ui-droppable" id="tmp_button-76797" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                           <a href="https://www.swathygiene.com" class="elButton elButtonSize1 elButtonColor1 elButtonRounded elButtonPadding2 elBtnVP_10 elButtonCorner3 elButtonFluid elBtnHP_25 elBTN_b_1 elButtonShadowN1 elButtonTxtColor1" style="color: rgb(255, 255, 255);font-weight: 600; background-color: rgb(1, 116, 199);font-size: 20px" rel="noopener noreferrer">
                           <span class="elButtonMain">No Thanks! I Don't Want To Get A Fresh Start On A Clean Bathroom or Get Control Of My Hygiene!</span>
                           <span class="elButtonSub"></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <style id="button_style_tmp_button-32943-161">#tmp_button-32943-161 .elButtonFlat:hover{background-color:#e6e6e6!important;}#tmp_button-32943-161 .elButtonBottomBorder:hover{background-color:#e6e6e6!important;}#tmp_button-32943-161 .elButtonSubtle:hover{background-color:#e6e6e6!important;}#tmp_button-32943-161 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,255,255)),color-stop(1,#e6e6e6));background-image:-o-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:-moz-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:-ms-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:linear-gradient(to bottom,rgb(255,255,255) 0%,#e6e6e6 100%);}#tmp_button-32943-161 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(255,255,255)),color-stop(0,#e6e6e6));background-image:-o-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:-moz-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:-webkit-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:-ms-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:linear-gradient(to bottom,rgb(255,255,255) 100%,#e6e6e6 0%);}#tmp_button-32943-161 .elButtonBorder{border:3px solid rgb(255,255,255)!important;color:rgb(255,255,255)!important;}#tmp_button-32943-161 .elButtonBorder:hover{background-color:rgb(255,255,255)!important;color:#000!important;}</style>
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection activeSection_topBorder0 activeSection_bottomBorder0" id="section--86195" data-title="Section" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgba(255, 255, 255, 0.0980392); color: rgb(37, 50, 61);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-103" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;" col-array="6,6">
                  <div id="col-left-159-132" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0px;">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-67322-160" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"> <img src="assets/img/toilet-sneeze.png" class="elIMG ximg thumbnailImageDark img-circle" alt="" width=""></div>
                     </div>
                  </div>
                  <div id="col-right-148-173" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-171" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 50px;" data-bold="inherit" contenteditable="false"><b>The Fact Is! TOILETS SNEEZE!</b></div>
                        </div>
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-32913" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-42932-105-145" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 40px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">Flushing <b>AEROSOLIZES</b> all the organisms found in feces, and there are <b>3.2 million microbes/per sq inch
                              of toilet bowl,...</b>
                           </div>
                        </div>
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-99373" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-13122" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 25px; outline: none; cursor: pointer;" aria-disabled="false">
                           <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false" contenteditable="false">
                              <b>7 of 10</b>
                              would <b>NOT</b> return 
                              <div>
                                 to a place with dirty restrooms  
                                 <div><u>Harris Poll Survey, Business Wire
                                    </u>
                                 </div>
                                 <div><br></div>
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
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTopBottom border1px" id="section--86195-180" data-title="Section - Clone" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(247, 248, 250); color: rgb(37, 50, 61); border-color: rgba(37, 50, 61, 0.137255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-103-116" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;" col-array="6,6">
                  <div id="col-left-159-132-113" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-171-138" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: left; font-size: 50px;" data-bold="inherit" contenteditable="false"><b>Bathroom Deep Clean! --&gt;&gt;&gt;</b></div>
                        </div>
                        <div class="de elSeperator elMargin0 ui-droppable hiddenElementTools de-editable" id="divider-21232" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-42932-105-145-136" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">Now you can <b>see how the PROFESSIONALS do it! and save your own sweat and tear. </b> Our customizable bathroom deep clean is a no obligation introduction to our services. It gives us the opportunity to show you we care. </div>
                        </div>
                     </div>
                  </div>
                  <div id="col-right-148-173-104" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elVideoWrapper de-video-block elVideoWidth100 elMargin0 ui-droppable de-editable" id="tmp_video-61298" data-de-type="video" data-de-editing="false" data-title="video" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" data-video-type="youtube" style="margin-top: 35px; outline: none; cursor: pointer;" aria-disabled="false" data-youtube-url="https://youtu.be/tR_s4yTFrOk" data-video-title="BIG BOY DEEP CLEAN">
                           <div class="elVideoplaceholder">
                              <div class="elVideoplaceholder_inner"></div>
                           </div>
                           <div class="elVideo" style="display: none;"><iframe width="640" height="360" src="https://www.youtube.com/embed/tR_s4yTFrOk?autoplay=0&amp;modestbranding=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent" frameborder="0" allowfullscreen="" wmode="opaque" title="BIG BOY DEEP CLEAN"></iframe></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--86195-100" data-title="Section - Clone" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgba(255, 255, 255, 0.0980392); color: rgb(37, 50, 61);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-103-147" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;" col-array="6,6">
                  <div id="col-left-159-132-133" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-67322-160-108" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"> <img src="assets/img/Kaivac-2048-x-2048.jpg" class="elIMG ximg" alt="" width="350"></div>
                     </div>
                  </div>
                  <div id="col-right-148-173-103" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-171-135" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 50px;" data-bold="inherit" contenteditable="false"><b>Introducing Touchless Cleaning</b></div>
                        </div>
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-70833" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-42932-105-145-134" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: left; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">The game of hygiene has been completely redesigned to be cleaner, easier to execute, and a lot faster. Now we can deep clean in half the time...</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTopBottom border1px" id="section--86195-180-119" data-title="Section - Clone - Clone" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(247, 248, 250); color: rgb(37, 50, 61); border-color: rgba(37, 50, 61, 0.137255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-103-116-161" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;" col-array="6,6">
                  <div id="col-left-159-132-113-167" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-171-138-105" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 50px;" data-bold="inherit" contenteditable="false"><b>Reliability!</b></div>
                        </div>
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-47508" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-42932-105-145-136-133" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">Trusted by local Government Authority's to get the job done at an affordable rate! Our ability's go way beyond deep cleaning!</div>
                        </div>
                     </div>
                  </div>
                  <div id="col-right-148-173-104-184" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elVideoWrapper de-video-block elVideoWidth100 elMargin0 ui-droppable de-editable" id="tmp_video-49024" data-de-type="video" data-de-editing="false" data-title="video" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" data-video-type="youtube" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false" data-youtube-url="https://youtu.be/sqTTX-nzbhA">
                           <div class="elVideoplaceholder">
                              <div class="elVideoplaceholder_inner"></div>
                           </div>
                           <div class="elVideo" style="display: none;"><iframe width="640" height="360" src="https://www.youtube.com/embed/sqTTX-nzbhA?autoplay=0&amp;modestbranding=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent" frameborder="0" allowfullscreen="" wmode="opaque"></iframe></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTopBottom border1px" id="section--86195-180-119-119" data-title="Section - Clone - Clone - Clone" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(247, 248, 250); color: rgb(37, 50, 61); border-color: rgba(37, 50, 61, 0.137255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-103-116-161-139" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;" col-array="6,6">
                  <div id="col-left-159-132-113-167-152" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-67322-160-183-129-122" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 35px; outline: none; cursor: pointer; display: block;" aria-disabled="false"> <img src="assets/img/piggybank-2913293_1920.jpg" class="elIMG ximg thumbnailImageDark imgRoundCorners shadow40" alt="" width="350"></div>
                     </div>
                  </div>
                  <div id="col-right-148-173-104-184-112" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="tmp_divider-91706" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-171-138-105-145" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 50px;" data-bold="inherit" contenteditable="false"><b>Saving You Money!</b></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-42932-105-145-136-133-152" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">"When push comes to shove, it's about putting your money where your mouth is. That's why we've developed our no charge bathroom deep clean, to get you started on the right foot</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection activeSection_topBorder0 activeSection_bottomBorder0" id="section--86195-100-156" data-title="Section - Clone - Clone" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgba(255, 255, 255, 0.0980392); color: rgb(37, 50, 61);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-103-147-168" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px auto; outline: none; width: 80%; max-width: 100%;" col-array="6,6">
                  <div id="col-left-159-132-133-170" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-171-135-160" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 26px;" data-bold="inherit" contenteditable="false"><b>Protecting You With Our Exclusive Touchpoint Service!</b></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-42932-105-145-134-106" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">We are Michigan's leading provider of touchpoint services... sealing your surfaces for weeks</div>
                        </div>
                     </div>
                  </div>
                  <div id="col-right-148-173-103-168" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-88404" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-67322-160-108-162" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"> <img src="assets/img/Dandy-Randy-Cooler-Pic.jpg" class="elIMG ximg" alt="" width="350"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTopBottom" id="section--20860-117" data-title="optin - Clone" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 15px; outline: none; background-color: rgb(37, 50, 61); color: rgb(255, 255, 255); border-color: rgba(0, 0, 0, 0.227451);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--21020-164" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 0px; padding-bottom: 0px; margin: 0px; outline: none;">
                  <div id="col-full-108-124" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-67114-122-186-175-150" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="headline" data-hide-on="" aria-disabled="false">
                           <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 42px;" data-bold="inherit" contenteditable="false"><b>Share This Video With Your Friends And Get Your Bathroom Deep Cleaned ON US!</b></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-99914-101" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false" style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                           <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 23px" data-bold="inherit" data-gramm="false" contenteditable="false">2 Bathrooms, Up to 4 hours, Michigan Only!</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-168-185" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 10px; padding-bottom: 40px; margin: 0px; outline: none;" col-array="7,5">
                  <div id="col-left-159-141-121-167" class="innerContent col_left ui-resizable col-md-7" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elVideoWrapper de-video-block elVideoWidth100 elMargin0 ui-droppable de-editable" id="tmp_video-91800-133-174" data-de-type="video" data-de-editing="false" data-title="video" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" data-video-type="youtube" style="outline: none; cursor: pointer; box-shadow: rgba(23, 28, 33, 0.4) 0px 4px 19px 0px; margin-top: 10px;" data-element-theme="customized" data-youtube-url="https://youtu.be/KpMISPLcgzA" data-youtube-autoplay="yes" aria-disabled="false" data-hide-on="">
                           <div class="elVideoplaceholder">
                              <div class="elVideoplaceholder_inner"> </div>
                           </div>
                           <div class="elVideo" style="display: none;"><iframe width="640" height="360" allow="autoplay" src="https://www.youtube.com/embed/KpMISPLcgzA?mute=1&amp;autoplay=1&amp;&amp;modestbranding=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent" frameborder="0" allowfullscreen="" wmode="opaque"></iframe></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-14891-183" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 18px;" data-bold="inherit" data-opacity="8" contenteditable="false">
                              <div><b>Watch The Videos For More Details...</b></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-87291-171" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 22px;" data-bold="inherit" data-opacity="8" contenteditable="false"></div>
                        </div>
                     </div>
                  </div>
                  <div id="col-right-148-160-179-132" class="innerContent col_right ui-resizable col-md-5" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-98600-116" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
                           </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-95662-108" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 21px;" data-bold="inherit" data-opacity="8" contenteditable="false">
                              <div><b>If you haven't yet, watch the video now and enter your email below to be taken to the next page where you can share this video and unlock your  access to the new bathroom cleaning manual and schedule your bathroom deep clean today!</b></div>
                           </div>
                        </div>
                        <div class="de elInputWrapper de-input-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_input-28142-107" data-de-type="input" data-de-editing="false" data-title="input" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" type="email" style="margin-top: 20px; outline: none; cursor: pointer;" data-element-theme="customized" aria-disabled="false">
                           <input type="email" id="email_2" placeholder="Your Email Address (to unlock the Bathroom Manual)" name="email" class="elInput elInput100 elAlign_left elInputBR5 elInputIRight elInputMid elInputStyle1 elInputBG1 elInputBold elInputIColor required1" data-type="extra" style="">
                        </div>
                        <div class="de elBTN elMargin0 elAlign_left ui-droppable de-editable" id="tmp_button-32943-152-147-133-188" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;" data-element-theme="customized" data-hide-on="" data-elbuttontype="1" aria-disabled="false"> 
                          <a onclick="myFunction('email_2')" href="javascript:void(0)" class="elButton btn2 elButtonSize1 elButtonColor1 elButtonRounded elButtonPadding2 elBtnVP_10 elButtonCorner3 elButtonFluid elBtnHP_25 elButtonShadowN1 elButtonTxtColor1 elBTN_b_1_2" style="color: rgb(255, 255, 255); background: rgb(1, 116, 199); font-size: 20px;" id="undefined-407-713-169"> <span class="elButtonMain">Step 1 of 2: Yes! Schedule My Deep Clean And Unlock The NEW Bathroom Cleaning Manual NOW!</span> <span class="elButtonSub"></span> </a></div>
                          <!-- href="#open-popup" -->
                          <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-65384-128" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; display: block; cursor: pointer;" aria-disabled="false">
                           <div class="elDivider  elDividerStyle1 ">
                              <div class="elDividerInner" data-width-border="30" data-height-border="5" style="border-color: rgb(0, 116, 205);"></div>
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
         <div class="container fullContainer noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--61477" data-title="Section" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-119" data-trigger="none" data-animate="fade" data-delay="500" data-title="3 column row" style="margin: 0px;outline: none;padding: 40px 0px;width: 80%; margin-left: auto; margin-right: auto;">
                  <div id="col-left-157-177-154-156-120" class="col-md-4 innerContent col_left ui-resizable" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-left: 15px; padding-right: 15px;">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="img-22235-115-179" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"> <img src="assets/img/SWAT-SATISFACTION-GUARANTEE.png" class="elIMG ximg" alt=""></div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-51811-128-137-166-120" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer; display: block;" data-htype="content" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh6 deUppercase" style="text-align: center; font-size: 32px; color: rgb(47, 47, 47);" data-bold="inherit" contenteditable="false"><b>100% Satisfaction guArantee</b></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-71168-181-188" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 16px; color: rgba(47, 47, 47, 0.701961);" data-bold="inherit" contenteditable="false">Click here for details</div>
                        </div>
                     </div>
                  </div>
                  <div id="col-center-184-178-173-175-144" class="col-md-4 innerContent col_right ui-resizable" data-col="center" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-left: 15px; padding-right: 15px;">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-38932-175-150" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false"> <img src="assets/img/Certificate-copy-1920.jpg" class="elIMG ximg" alt=""></div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-49849" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 25px; outline: none; cursor: pointer;" aria-disabled="false">
                           <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center;font-size: 32px" data-bold="inherit" data-gramm="false" contenteditable="false"><b>7 Day Sanitation Certificate!</b></h1>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-76562-134-186" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 16px; color: rgba(47, 47, 47, 0.701961);" data-bold="inherit" contenteditable="false">Exclusively Offered By SWAT Team Of Michigan LLC</div>
                        </div>
                     </div>
                  </div>
                  <div id="col-right-159-120-146-158-133" class="col-md-4 innerContent col_right ui-resizable" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding-left: 15px; padding-right: 15px;">
                        <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="img-50550-169-171" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; display: block; cursor: pointer;" aria-disabled="false"> <img src="assets/img/APPLES-TO-APPLES-Click-Up.jpg" class="elIMG ximg" alt=""></div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-73395-132-171" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" data-htype="content" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh6 deUppercase" style="text-align: center; font-size: 26px; color: rgb(47, 47, 47);" data-bold="inherit" contenteditable="false"><b>LOWEST COST APPLES TO APPLES PRICING</b></div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-50586-116-150" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <div class="ne elHeadline hsSize2 elMargin0 elBGStyle0 hsTextShadow0 lh2" style="text-align: center; font-size: 16px; color: rgba(47, 47, 47, 0.701961);" data-bold="inherit" contenteditable="false">Guaranteed to be your right choice! Every Time!</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 fullContainer emptySection borderLightBottom border2px" id="section--32509" data-title="Section" data-block-color="0074C7" style="padding-top: 15px; padding-bottom: 13px; outline: none; border-color: rgba(255, 255, 255, 0.0980392); background-color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
               <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--32067" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 40px; padding-bottom: 40px; margin: 0px; outline: none;">
                  <div id="col-full-149" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                     <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                        <div class="de elImageWrapper de-image-block elMargin0 elAlign_center ui-droppable de-editable" id="img-61249-176" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; display: block;" aria-disabled="false">
                           <img src="assets/img/foot-logo.png" class="elIMG ximg">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
         </div>
         <style id="button_style_tmp_button-76797">
            #tmp_button-76797 .elButtonFlat:hover {
            background-color: #0b72a1 !important;
            }
            #tmp_button-76797 .elButtonBottomBorder:hover {
            background-color: #0b72a1 !important;
            }
            #tmp_button-76797 .elButtonSubtle:hover {
            background-color: #0b72a1 !important;
            }
            #tmp_button-76797 .elButtonGradient {
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(14, 141, 199)), color-stop(1, #0b72a1));
            background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: linear-gradient(to bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            }
            #tmp_button-76797 .elButtonGradient:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(14, 141, 199)), color-stop(0, #0b72a1));
            background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: linear-gradient(to bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            }
            #tmp_button-76797 .elButtonBorder {
            border: 3px solid rgb(14, 141, 199) !important;
            color: rgb(14, 141, 199) !important;
            }
            #tmp_button-76797 .elButtonBorder:hover {
            background-color: rgb(14, 141, 199) !important;
            color: #FFF !important;
            }
         </style>
         <style id="button_style_tmp_button-83893">
            #tmp_button-83893 .elButtonFlat:hover {
            background-color: #0b72a1 !important;
            }
            #tmp_button-83893 .elButtonBottomBorder:hover {
            background-color: #0b72a1 !important;
            }
            #tmp_button-83893 .elButtonSubtle:hover {
            background-color: #0b72a1 !important;
            }
            #tmp_button-83893 .elButtonGradient {
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(14, 141, 199)), color-stop(1, #0b72a1));
            background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: linear-gradient(to bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            }
            #tmp_button-83893 .elButtonGradient:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(14, 141, 199)), color-stop(0, #0b72a1));
            background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: linear-gradient(to bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            }
            #tmp_button-83893 .elButtonBorder {
            border: 3px solid rgb(14, 141, 199) !important;
            color: rgb(14, 141, 199) !important;
            }
            #tmp_button-83893 .elButtonBorder:hover {
            background-color: rgb(14, 141, 199) !important;
            color: #FFF !important;
            }
         </style>
         <style id="bold_style_tmp_headline1-90122">#tmp_headline1-90122 .elHeadline b{color:rgb(255,255,255);}</style>
         <style id="button_style_tmp_button-32943-161">#tmp_button-32943-161 .elButtonFlat:hover{background-color:#e6e6e6!important;}#tmp_button-32943-161 .elButtonBottomBorder:hover{background-color:#e6e6e6!important;}#tmp_button-32943-161 .elButtonSubtle:hover{background-color:#e6e6e6!important;}#tmp_button-32943-161 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(255,255,255)),color-stop(1,#e6e6e6));background-image:-o-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:-moz-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:-webkit-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:-ms-linear-gradient(bottom,rgb(255,255,255) 0%,#e6e6e6 100%);background-image:linear-gradient(to bottom,rgb(255,255,255) 0%,#e6e6e6 100%);}#tmp_button-32943-161 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(255,255,255)),color-stop(0,#e6e6e6));background-image:-o-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:-moz-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:-webkit-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:-ms-linear-gradient(bottom,rgb(255,255,255) 100%,#e6e6e6 0%);background-image:linear-gradient(to bottom,rgb(255,255,255) 100%,#e6e6e6 0%);}#tmp_button-32943-161 .elButtonBorder{border:3px solid rgb(255,255,255)!important;color:rgb(255,255,255)!important;}#tmp_button-32943-161 .elButtonBorder:hover{background-color:rgb(255,255,255)!important;color:#000!important;}</style>
         <style id="bold_style_tmp_headline1-90122">#tmp_headline1-90122 .elHeadline b{color:rgb(255,255,255);}</style>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7CRoboto%7CMontserrat%7C" id="custom_google_font" google-font="Roboto">
         <style id="bold_style_tmp_headline1-90122-137">#tmp_headline1-90122-137 .elHeadline b{color:rgb(255,255,255);}</style>
         <style id="bold_style_tmp_headline1-90122-169">#tmp_headline1-90122-169 .elHeadline b{ color: rgb(252, 23, 23);}</style>
         <style id="button_style_button-30742">
            #button-30742 .elButtonFlat:hover {
            background-color: #0b72a1 !important;
            }
            #button-30742 .elButtonBottomBorder:hover {
            background-color: #0b72a1 !important;
            }
            #button-30742 .elButtonSubtle:hover {
            background-color: #0b72a1 !important;
            }
            #button-30742 .elButtonGradient {
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(14, 141, 199)), color-stop(1, #0b72a1));
            background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            background-image: linear-gradient(to bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            }
            #button-30742 .elButtonGradient:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(14, 141, 199)), color-stop(0, #0b72a1));
            background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            background-image: linear-gradient(to bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            }
            #button-30742 .elButtonBorder {
            border: 3px solid rgb(14, 141, 199) !important;
            color: rgb(14, 141, 199) !important;
            }
            #button-30742 .elButtonBorder:hover {
            background-color: rgb(14, 141, 199) !important;
            color: #FFF !important;
            }
         </style>
         <input type="hidden" name="cf-state-county-dropdown-feature-enabled" value="true">
      </div>
      <style id="custom-css"></style>
      <input type="hidden" value="43577512" id="page-id">
      <input type="hidden" value="43577512" id="root-id">
      <input type="hidden" value="core" id="variant-check">
      <input type="hidden" value="2297410" id="user-id">
      <input type="hidden" value="" id="cf-cid">
      <script>
         function CFFacebookMessengerCheckbox() {}
         CFFacebookMessengerCheckbox.endpoint = "https://app.clickfunnels.com/facebook_user_ref";
      </script>
      <script type="text/javascript">
         window.CFAppDomain = "app.clickfunnels.com"
      </script>
      <script src="assets/js/lander.js"></script>
      <div id="fb-root"></div>
      <script>
         window.addEventListener('load', function(){
         	(function(d, s, id){
         	  if($('.fbCommentsPlaceholder').size()>0){
         	   var js, fjs = d.getElementsByTagName(s)[0];
         	   if (d.getElementById(id)) {return;}
         	   js = d.createElement(s); js.id = id;
         	   js.src = "https://connect.facebook.net/en_US/sdk.js";
         	   fjs.parentNode.insertBefore(js, fjs);
         	  }
         	 }(document, 'script', 'facebook-jssdk'));
         });
          
      </script>
      <script>
         window.cfFacebookInitOptions = {
           appId            : 246441615530259,
           autoLogAppEvents : false,
           status           : true,
           xfbml            : true,
           version          : "v3.3"
         };
         window.fbAsyncInit = function() {
           FB.init(window.cfFacebookInitOptions);
         
           FB.Event.subscribe('messenger_checkbox', function(e) {
             var a = document.createElement('a');
             a.href = window.location.href;
             if(/[&\?]debug/.test(a.search)) {
               console.log("messenger_checkbox event", e);
             }
           });
         
           var initializeClickFunnelsFBMessengerCheckbox = function(){
             if(typeof(CFFacebookMessengerCheckbox) === "undefined") {
               setTimeout(initializeClickFunnelsFBMessengerCheckbox, 100);
               return;
             }
             CFFacebookMessengerCheckbox.fbLoaded(FB);
           };
         
           initializeClickFunnelsFBMessengerCheckbox();
         
           // Iterates over all .fb-comments elements on the page, and renders them using the FB SDK.
           // It only runs if we have not told the FB.init() to render XFBML on page load
           var renderFacebookComments = function(renderXFBMLAtLoadTime) {
             // If we have already marked XFBML to render at page load time, do not proceed.
             if(renderXFBMLAtLoadTime) { return; }
         
             var comments = document.getElementsByClassName('fb-comments');
             var i = 0;
             var len = comments.length;
             var comment = null;
             for(; i < len; i++) {
               comment = comments[i];
               FB.XFBML.parse(comment.parentElement); // comments need to be rendered/parsed from their parent element.
             }
           }
         
           renderFacebookComments(true);
         };
      </script>
      <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
      <![endif]-->
      <form target="_parent" data-cf-form-action="true" action="https://myprojectstaging.com/oip/toilet-sneeze/" method="post" id="cfAR" style="display:none">
         <span data-cf-form-fields="true"></span>
         <input id="cf_contact_name" name="contact[name]" data-cf-form-field="name" placeholder="name" data-stripe="name">
         <input id="cf_contact_first_name" name="contact[first_name]" data-cf-form-field="first_name" placeholder="first_name" data-recurly="first_name">
         <input id="cf_contact_last_name" name="contact[last_name]" data-cf-form-field="last_name" placeholder="last_name" data-recurly="last_name">
         <input id="cf_contact_email" name="contact[email]" data-cf-form-field="email" placeholder="email">
         <input id="cf_contact_phone" name="contact[phone]" data-cf-form-field="phone" placeholder="phone" data-recurly="phone">
         <input id="cf_contact_address" name="contact[address]" data-cf-form-field="address" placeholder="address" data-stripe="address_line1" data-recurly="address1">
         <input id="cf_contact_city" name="contact[city]" data-cf-form-field="city" placeholder="city" data-stripe="address_city" data-recurly="city">
         <input id="cf_contact_state" name="contact[state]" data-cf-form-field="state" placeholder="state" data-stripe="address_state" data-recurly="state">
         <input id="cf_contact_country" name="contact[country]" data-cf-form-field="country" placeholder="country" data-stripe="address_country" data-recurly="country">
         <input id="cf_contact_zip" name="contact[zip]" data-cf-form-field="zip" placeholder="ZIP" data-stripe="address_zip" data-recurly="postal_code">
         <input id="cf_contact_shipping_address" name="contact[shipping_address]" data-cf-form-field="shipping_address" placeholder="shipping_address" data-stripe="shipping_address">
         <input id="cf_contact_shipping_city" name="contact[shipping_city]" data-cf-form-field="shipping_city" placeholder="shipping_city" data-stripe="shipping_city">
         <input id="cf_contact_shipping_state" name="contact[shipping_state]" data-cf-form-field="shipping_state" placeholder="shipping_state" data-stripe="shipping_state">
         <input id="cf_contact_shipping_country" name="contact[shipping_country]" data-cf-form-field="shipping_country" placeholder="shipping_country" data-stripe="shipping_country">
         <input id="cf_contact_shipping_zip" name="contact[shipping_zip]" data-cf-form-field="shipping_zip" placeholder="shipping_ZIP" data-stripe="shipping_zip">
         <input id="cf_contact_vat_number" name="contact[vat_number]" data-cf-form-field="vat_number" data-recurly="vat_number">
         <input id="cf_contact_affiliate_id" name="contact[affiliate_id]" data-cf-form-field="affiliate_id" data-param="affiliate_id">
         <input id="cf_contact_cf_affiliate_id" name="contact[cf_affiliate_id]" data-cf-form-field="cf_affiliate_id" data-param="cf_affiliate_id">
         <input id="cf_cf_affiliate_id" name="cf_affiliate_id" data-param="cf_affiliate_id">
         <input id="cf_contact_affiliate_aff_sub" name="contact[aff_sub]" data-cf-form-field="aff_sub" data-param="aff_sub">
         <input id="cf_contact_affiliate_aff_sub2" name="contact[aff_sub2]" data-cf-form-field="aff_sub2" data-param="aff_sub2">
         <input id="cf_contact_time_zone" name="time_zone" data-cf-form-field="time_zone" placeholder="time_zone">
         <input id="utm_source" name="utm_source" data-cf-form-field="utm_source" data-param="utm_source">
         <input id="utm_medium" name="utm_medium" data-cf-form-field="utm_medium" data-param="utm_medium">
         <input id="utm_campaign" name="utm_campaign" data-cf-form-field="utm_campaign" data-param="utm_campaign">
         <input id="utm_term" name="utm_term" data-cf-form-field="utm_term" data-param="utm_term">
         <input id="utm_content" name="utm_content" data-cf-form-field="utm_content" data-param="utm_content">
         <input id="cf_uvid" name="cf_uvid" data-cf-form-field="cf_uvid">
         <input type="text" name="webinar_delay" id="webinar_delay" placeholder="Webinar Delay">
         <span data-cf-product-template="true">
         <input type="radio" name="purchase[product_id]" value="" data-storage="false">
         <input type="checkbox" name="purchase[product_ids][]" value="" data-storage="false">
         </span>
         <span data-cf-product-variations-template="true">
         <input type="checkbox" class="pvPurchaseProductName" name="purchase[product_variants][][product_id]" value="" data-storage="false">
         <input type="checkbox" class="pvPurchaseProductVariantName" name="purchase[product_variants][][product_variant_id]" value="" data-storage="false">
         <input type="input" class="pvPurchaseProductVariantQuantity" name="purchase[product_variants][][quantity]" value="" data-storage="false">
         </span>
         <input id="cf_contact_number" data-stripe="number" data-storage="false" data-recurly="number">
         <input id="cf_contact_month" data-stripe="exp-month" data-storage="" data-recurly="month">
         <input id="cf_contact_year" data-stripe="exp-year" data-storage="" data-recurly="year">
         <input id="cf_contact_cvc" data-stripe="cvc" data-storage="false" data-recurly="cvv">
         <input type="hidden" name="purchase[payment_method_nonce]" data-storage="false">
         <input type="hidden" name="purchase[order_saas_url]" data-storage="false">
         <input type="submit">
         <input name="contact[cart_affiliate_id]" value="" type="hidden" style="display:none;" data-param="affiliate">
      </form>
      <span class="countdown-time" style="display:none;"></span>
      <span class="webinar-last-time" style="display:none;"></span>
      <span class="webinar-ext" style="display:none;"></span>
      <span class="webinar-ot" style="display:none;"></span>
      <span class="contact-created" style="display:none;"></span>
      <script></script>
      <div class="otoloading" style="display: none;">
         <div class="otoloadingtext">
            <h2>Working...</h2>
            <div><i class="fa fa-spinner fa-spin"></i></div>
         </div>
      </div>
      <script type="text/javascript">
         document.createElement('video');document.createElement('audio');document.createElement('track');
      </script>
      <style>
         #IntercomDefaultWidget {
         display:none;
         }
         .selectAW-date-demo, .elTicketAddToCalendar, .elTicketAddToCalendarV2 {
         display:none;
         }
         .video-js {
         padding-top:56.25%;
         }
         .vjs-big-play-button,.vjs-control-bar {
         z-index: 10 !important;
         }
         .vjs-fullscreen {
         padding-top:0;
         }
      </style>
      <script type="text/html" id="cfx_all_canada">
         <option value="">Select Province</option>
         <option value="">------------------------------</option>
         <option value="AB">Alberta</option>
         <option value="BC">British Columbia</option>
         <option value="MB">Manitoba</option>
         <option value="NB">New Brunswick</option>
         <option value="NL">Newfoundland and Labrador</option>
         <option value="NS">Nova Scotia</option>
         <option value="ON">Ontario</option>
         <option value="PE">Prince Edward Island</option>
         <option value="QC">Quebec</option>
         <option value="SK">Saskatchewan</option>
         <option value="NT">Northwest Territories</option>
         <option value="NU">Nunavut</option>
         <option value="YT">Yukon</option>
      </script>
      <script type="text/html" id="cfx_all_states">
         <option value="">Select State</option>
         <option value="">------------------------------</option>
         <option value="AL">Alabama</option>
         <option value="AK">Alaska</option>
         <option value="AZ">Arizona</option>
         <option value="AR">Arkansas</option>
         <option value="CA">California</option>
         <option value="CO">Colorado</option>
         <option value="CT">Connecticut</option>
         <option value="DE">Delaware</option>
         <option value="DC">District Of Columbia</option>
         <option value="FL">Florida</option>
         <option value="GA">Georgia</option>
         <option value="HI">Hawaii</option>
         <option value="ID">Idaho</option>
         <option value="IL">Illinois</option>
         <option value="IN">Indiana</option>
         <option value="IA">Iowa</option>
         <option value="KS">Kansas</option>
         <option value="KY">Kentucky</option>
         <option value="LA">Louisiana</option>
         <option value="ME">Maine</option>
         <option value="MD">Maryland</option>
         <option value="MA">Massachusetts</option>
         <option value="MI">Michigan</option>
         <option value="MN">Minnesota</option>
         <option value="MS">Mississippi</option>
         <option value="MO">Missouri</option>
         <option value="MT">Montana</option>
         <option value="NE">Nebraska</option>
         <option value="NV">Nevada</option>
         <option value="NH">New Hampshire</option>
         <option value="NJ">New Jersey</option>
         <option value="NM">New Mexico</option>
         <option value="NY">New York</option>
         <option value="NC">North Carolina</option>
         <option value="ND">North Dakota</option>
         <option value="OH">Ohio</option>
         <option value="OK">Oklahoma</option>
         <option value="OR">Oregon</option>
         <option value="PA">Pennsylvania</option>
         <option value="RI">Rhode Island</option>
         <option value="SC">South Carolina</option>
         <option value="SD">South Dakota</option>
         <option value="TN">Tennessee</option>
         <option value="TX">Texas</option>
         <option value="UT">Utah</option>
         <option value="VT">Vermont</option>
         <option value="VA">Virginia</option>
         <option value="WA">Washington</option>
         <option value="WV">West Virginia</option>
         <option value="WI">Wisconsin</option>
         <option value="WY">Wyoming</option>
      </script>

      <script type="text/html" id="cfx_all_countries">
         <option value="">Select Country</option>
         <option value="">------------------------------</option>
         <option value="United States of America">United States</option>
         <option value="Canada">Canada</option>
         <option value="United Kingdom">United Kingdom</option>
         <option value="Ireland">Ireland</option>
         <option value="Australia">Australia</option>
         <option value="New Zealand">New Zealand</option>
         <option value="">------------------------------</option>
         <option value="Afghanistan">Afghanistan</option>
         <option value="Albania">Albania</option>
         <option value="Algeria">Algeria</option>
         <option value="American Samoa">American Samoa</option>
         <option value="Andorra">Andorra</option>
         <option value="Angola">Angola</option>
         <option value="Anguilla">Anguilla</option>
         <option value="Antarctica">Antarctica</option>
         <option value="Antigua and Barbuda">Antigua and Barbuda</option>
         <option value="Argentina">Argentina</option>
         <option value="Armenia">Armenia</option>
         <option value="Aruba">Aruba</option>
         <option value="Australia">Australia</option>
         <option value="Austria">Austria</option>
         <option value="Azerbaijan">Azerbaijan</option>
         <option value="Bahamas">Bahamas</option>
         <option value="Bahrain">Bahrain</option>
         <option value="Bangladesh">Bangladesh</option>
         <option value="Barbados">Barbados</option>
         <option value="Belarus">Belarus</option>
         <option value="Belgium">Belgium</option>
         <option value="Belize">Belize</option>
         <option value="Benin">Benin</option>
         <option value="Bermuda">Bermuda</option>
         <option value="Bhutan">Bhutan</option>
         <option value="Bolivia">Bolivia</option>
         <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
         <option value="Botswana">Botswana</option>
         <option value="Bouvet Island">Bouvet Island</option>
         <option value="Brazil">Brazil</option>
         <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
         <option value="Brunei Darussalam">Brunei Darussalam</option>
         <option value="Bulgaria">Bulgaria</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Burundi">Burundi</option>
         <option value="Cambodia">Cambodia</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Canada">Canada</option>
         <option value="Cape Verde">Cape Verde</option>
         <option value="Cayman Islands">Cayman Islands</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Chad">Chad</option>
         <option value="Chile">Chile</option>
         <option value="China">China</option>
         <option value="Christmas Island">Christmas Island</option>
         <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
         <option value="Colombia">Colombia</option>
         <option value="Comoros">Comoros</option>
         <option value="Congo">Congo</option>
         <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
         <option value="Cook Islands">Cook Islands</option>
         <option value="Costa Rica">Costa Rica</option>
         <option value="Cote D'ivoire">Cote D'ivoire</option>
         <option value="Croatia">Croatia</option>
         <option value="Cuba">Cuba</option>
         <option value="Cyprus">Cyprus</option>
         <option value="Czech Republic">Czech Republic</option>
         <option value="Denmark">Denmark</option>
         <option value="Djibouti">Djibouti</option>
         <option value="Dominica">Dominica</option>
         <option value="Dominican Republic">Dominican Republic</option>
         <option value="Ecuador">Ecuador</option>
         <option value="Egypt">Egypt</option>
         <option value="El Salvador">El Salvador</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Estonia">Estonia</option>
         <option value="Ethiopia">Ethiopia</option>
         <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
         <option value="Faroe Islands">Faroe Islands</option>
         <option value="Fiji">Fiji</option>
         <option value="Finland">Finland</option>
         <option value="France">France</option>
         <option value="French Guiana">French Guiana</option>
         <option value="French Polynesia">French Polynesia</option>
         <option value="French Southern Territories">French Southern Territories</option>
         <option value="Gabon">Gabon</option>
         <option value="Gambia">Gambia</option>
         <option value="Georgia">Georgia</option>
         <option value="Germany">Germany</option>
         <option value="Ghana">Ghana</option>
         <option value="Gibraltar">Gibraltar</option>
         <option value="Greece">Greece</option>
         <option value="Greenland">Greenland</option>
         <option value="Grenada">Grenada</option>
         <option value="Guadeloupe">Guadeloupe</option>
         <option value="Guam">Guam</option>
         <option value="Guatemala">Guatemala</option>
         <option value="Guinea">Guinea</option>
         <option value="Guinea-bissau">Guinea-bissau</option>
         <option value="Guyana">Guyana</option>
         <option value="Haiti">Haiti</option>
         <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
         <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
         <option value="Honduras">Honduras</option>
         <option value="Hong Kong">Hong Kong</option>
         <option value="Hungary">Hungary</option>
         <option value="Iceland">Iceland</option>
         <option value="India">India</option>
         <option value="Indonesia">Indonesia</option>
         <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
         <option value="Iraq">Iraq</option>
         <option value="Ireland">Ireland</option>
         <option value="Israel">Israel</option>
         <option value="Italy">Italy</option>
         <option value="Jamaica">Jamaica</option>
         <option value="Japan">Japan</option>
         <option value="Jordan">Jordan</option>
         <option value="Kazakhstan">Kazakhstan</option>
         <option value="Kenya">Kenya</option>
         <option value="Kiribati">Kiribati</option>
         <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
         <option value="Korea, Republic of">Korea, Republic of</option>
         <option value="Kuwait">Kuwait</option>
         <option value="Kyrgyzstan">Kyrgyzstan</option>
         <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
         <option value="Latvia">Latvia</option>
         <option value="Lebanon">Lebanon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Liberia">Liberia</option>
         <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
         <option value="Liechtenstein">Liechtenstein</option>
         <option value="Lithuania">Lithuania</option>
         <option value="Luxembourg">Luxembourg</option>
         <option value="Macao">Macao</option>
         <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Malawi">Malawi</option>
         <option value="Malaysia">Malaysia</option>
         <option value="Maldives">Maldives</option>
         <option value="Mali">Mali</option>
         <option value="Malta">Malta</option>
         <option value="Marshall Islands">Marshall Islands</option>
         <option value="Martinique">Martinique</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Mauritius">Mauritius</option>
         <option value="Mayotte">Mayotte</option>
         <option value="Mexico">Mexico</option>
         <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
         <option value="Moldova, Republic of">Moldova, Republic of</option>
         <option value="Monaco">Monaco</option>
         <option value="Mongolia">Mongolia</option>
         <option value="Montserrat">Montserrat</option>
         <option value="Morocco">Morocco</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Myanmar">Myanmar</option>
         <option value="Namibia">Namibia</option>
         <option value="Nauru">Nauru</option>
         <option value="Nepal">Nepal</option>
         <option value="Netherlands">Netherlands</option>
         <option value="Netherlands Antilles">Netherlands Antilles</option>
         <option value="New Caledonia">New Caledonia</option>
         <option value="New Zealand">New Zealand</option>
         <option value="Nicaragua">Nicaragua</option>
         <option value="Niger">Niger</option>
         <option value="Nigeria">Nigeria</option>
         <option value="Niue">Niue</option>
         <option value="Norfolk Island">Norfolk Island</option>
         <option value="Northern Mariana Islands">Northern Mariana Islands</option>
         <option value="Norway">Norway</option>
         <option value="Oman">Oman</option>
         <option value="Pakistan">Pakistan</option>
         <option value="Palau">Palau</option>
         <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
         <option value="Panama">Panama</option>
         <option value="Papua New Guinea">Papua New Guinea</option>
         <option value="Paraguay">Paraguay</option>
         <option value="Peru">Peru</option>
         <option value="Philippines">Philippines</option>
         <option value="Pitcairn">Pitcairn</option>
         <option value="Poland">Poland</option>
         <option value="Portugal">Portugal</option>
         <option value="Puerto Rico">Puerto Rico</option>
         <option value="Qatar">Qatar</option>
         <option value="Reunion">Reunion</option>
         <option value="Romania">Romania</option>
         <option value="Russian Federation">Russian Federation</option>
         <option value="Rwanda">Rwanda</option>
         <option value="Saint Helena">Saint Helena</option>
         <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
         <option value="Saint Lucia">Saint Lucia</option>
         <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
         <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
         <option value="Samoa">Samoa</option>
         <option value="San Marino">San Marino</option>
         <option value="Sao Tome and Principe">Sao Tome and Principe</option>
         <option value="Saudi Arabia">Saudi Arabia</option>
         <option value="Senegal">Senegal</option>
         <option value="Serbia and Montenegro">Serbia and Montenegro</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sierra Leone">Sierra Leone</option>
         <option value="Singapore">Singapore</option>
         <option value="Slovakia">Slovakia</option>
         <option value="Slovenia">Slovenia</option>
         <option value="Solomon Islands">Solomon Islands</option>
         <option value="Somalia">Somalia</option>
         <option value="South Africa">South Africa</option>
         <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
         <option value="Spain">Spain</option>
         <option value="Sri Lanka">Sri Lanka</option>
         <option value="Sudan">Sudan</option>
         <option value="Suriname">Suriname</option>
         <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
         <option value="Swaziland">Swaziland</option>
         <option value="Sweden">Sweden</option>
         <option value="Switzerland">Switzerland</option>
         <option value="Syrian Arab Republic">Syrian Arab Republic</option>
         <option value="Taiwan, Province of China">Taiwan, Province of China</option>
         <option value="Tajikistan">Tajikistan</option>
         <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
         <option value="Thailand">Thailand</option>
         <option value="Timor-leste">Timor-leste</option>
         <option value="Togo">Togo</option>
         <option value="Tokelau">Tokelau</option>
         <option value="Tonga">Tonga</option>
         <option value="Trinidad and Tobago">Trinidad and Tobago</option>
         <option value="Tunisia">Tunisia</option>
         <option value="Turkey">Turkey</option>
         <option value="Turkmenistan">Turkmenistan</option>
         <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
         <option value="Tuvalu">Tuvalu</option>
         <option value="Uganda">Uganda</option>
         <option value="Ukraine">Ukraine</option>
         <option value="United Arab Emirates">United Arab Emirates</option>
         <option value="United Kingdom">United Kingdom</option>
         <option value="United States">United States</option>
         <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
         <option value="Uruguay">Uruguay</option>
         <option value="Uzbekistan">Uzbekistan</option>
         <option value="Vanuatu">Vanuatu</option>
         <option value="Venezuela">Venezuela</option>
         <option value="Viet Nam">Viet Nam</option>
         <option value="Virgin Islands, British">Virgin Islands, British</option>
         <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
         <option value="Wallis and Futuna">Wallis and Futuna</option>
         <option value="Western Sahara">Western Sahara</option>
         <option value="Yemen">Yemen</option>
         <option value="Zambia">Zambia</option>
         <option value="Zimbabwe">Zimbabwe</option>
      </script>
      <script>
         var page_key = 'n8ijy1dc8kd4nabz';
         var fid = '9985712';
         var fspos = '1';
         var fvrs = '3';
         var cf_tracker = cf_tracker || [];
         (function() {
           cf_key = 'v6u1vih0';The Fact Is! TOILETS SNEEZE!
           page_key = 'n8ijy1dc8kd4nabz';
           serverUrl = 'assets/img/background.png';
           var cf = document.createElement('script');
           cf.type = 'text/javascript';
           cf.async = true;
           cf.src = 'assets/js/vendor.js';
           var s = document.getElementsByTagName('script')[0];
           s.parentNode.insertBefore(cf, s);
         })();
      </script>

        <script>
          
         function myFunction(type){           
           if(type  !== ''){
            var btn = (type==="email_1")?'btn1':'btn2';
              if(document.getElementById(type).value) {
                  var mail = document.getElementById(type).value;
                  document.getElementsByClassName(btn)[0].setAttribute('href','#open-popup');
                  document.getElementById("hidden_email").value = mail;
              } else {
                document.getElementById(type).focus();
              }
           }
         }

          $(function() {
            $('.modal_btn_sbmt').on('click', function() {
               var btnTxtVal = $(this).find('span').text();
               var email_add = $("#hidden_email").val();
               $.ajax({
                  url      :"ajax_file/request.php",
                  type     :"post",
                  data     :  {
                     'action':  'send_email',
                     'btnTxtVal' : btnTxtVal,
                     'email'     : email_add,
                  },
                  cache : false,
                  success : function(r){
                     location.href = "optin-11602340572460.php";
                  }
               });

            });
          });
        </script>

      <script type="text/javascript" src="https://app.clickfunnels.com/mailcheck.min.js" async="async"></script><script type="text/javascript">window.addEventListener("load",function(){for(var e=["ar","at","au","be","br","ca","ch","cl","cn","cz","de","dk","es","eu","fi","fr","hk","hu","in","it","jp","kr","mx","nl","no","nz","pl","pt","ru","se","tk","tr","tw","uk","us"],i=0;i<e.length;i++){var a=e[i];Mailcheck.defaultTopLevelDomains.push(a),Mailcheck.defaultTopLevelDomains.push("com."+a)}var t=Mailcheck.defaultDomains.slice();for(i=0;i<t.length;i++)for(var s=t[i],l=0;l<e.length;l++){a=e[l];Mailcheck.defaultDomains.push(s+"."+a)}Mailcheck.defaultDomains.push("clickfunnels.com"),$('input[name="email"]').on("blur",function(){_this=this,$(this).mailcheck({suggested:function(e,i){$(".email_suggestion").remove(),$(e).parent().append('<div class="email_suggestion">Did you mean <a href="#">'+i.full+"</a>?</div>")},empty:function(){$(".email_suggestion").remove()}}),$.each("chenowith52@gmail.com, test@test.com, test@gmail.com, test@mail.com".split(","),function(e,i){0<=$(_this).val().search(i.trim())&&($(".email_suggestion").remove(),$(_this).val(""),$(_this).after('<div class="email_suggestion">Please use real email.</div>'))})}),$("body").on("click",".email_suggestion a",function(){$('input[name="email"]').val($(this).text())})});</script><script type="text/javascript">function getURLParameter(e){return decodeURIComponent((RegExp(e+"=(.+?)(&|$)").exec(location.search)||[,null])[1])}function getURLParameterExact(e){for(var t=window.location.search.substring(1).split("&"),n=0;n<t.length;n++){var r=t[n].split("=");if(r[0]==e)return r[1]}}</script><script type="text/javascript">window.addEventListener("load",function(){$(function(){"null"!=getURLParameter("email")&&($('input[name="contact[email]"]').val(getURLParameterExact("email")),$("[name=email]").val(getURLParameterExact("email"))),"null"!=getURLParameter("name")&&($('input[name="contact[name]"]').val(getURLParameterExact("name")),$("[name=name]").val(getURLParameterExact("name"))),"null"!=getURLParameter("first_name")&&($('input[name="contact[first_name]"]').val(getURLParameter("first_name")),$("[name=first_name]").val(getURLParameter("first_name"))),"null"!=getURLParameter("last_name")&&($('input[name="contact[last_name]"]').val(getURLParameter("last_name")),$("[name=last_name]").val(getURLParameter("last_name"))),"null"!=getURLParameter("address_1")&&($('input[name="contact[address_1]"]').val(getURLParameter("address")),$("[name=address_1]").val(getURLParameter("address_1"))),"null"!=getURLParameter("address_2")&&($('input[name="contact[address_1]"]').val(getURLParameter("address")),$("[name=address_2]").val(getURLParameter("address_2"))),"null"!=getURLParameter("city")&&($('input[name="contact[city]"]').val(getURLParameter("city")),$("[name=city]").val(getURLParameter("city"))),"null"!=getURLParameter("state")&&($('input[name="contact[state]"]').val(getURLParameter("state")),$("[name=state]").val(getURLParameter("state"))),"null"!=getURLParameter("zip")&&($('input[name="contact[zip]"]').val(getURLParameter("zip")),$("[name=zip]").val(getURLParameter("zip"))),"null"!=getURLParameter("phone")&&($('input[name="contact[phone]"]').val(getURLParameter("phone")),$("[name=phone]").val(getURLParameter("phone")))})});</script>
      <script type="text/javascript" src="https://app.clickfunnels.com/assets/pushcrew.js" async="async"></script>
      <meta name='can_calculate_taxes' content='false'>
   </body>
</html>