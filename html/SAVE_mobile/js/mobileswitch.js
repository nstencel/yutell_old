!function(){if(!window.hasMobileSwitch){window.hasMobileSwitch=!0;var c="mmswitch_dismissed",d=MELODYURL+"/mobile/css/";if(!(document.cookie.indexOf(c)>-1)){"function"!=typeof String.prototype.trim&&(String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")});var e,f={isArray:function(a){return"[object Array]"==Object.prototype.toString.call(a)},isObject:function(a){return"[object Object]"==Object.prototype.toString.call(a)},each:function(a,b,c,d){if(f.isObject(a)&&!d)for(var e in a)a.hasOwnProperty(e)&&b.call(c,a[e],e,a);else for(var g=0,h=a.length;h>g;g++)b.call(c,a[g],g,a)},merge:function(a,b){a&&f.each(b,function(b,c){f.isObject(b)&&f.isObject(a[c])?f.merge(a[c],b):a[c]=b})},bind:function(a,b){return function(){return a.apply(b,arguments)}},queryObject:function(a,b){var c,d=0,e=a;for(b=b.split(".");(c=b[d++])&&e.hasOwnProperty(c)&&(e=e[c]);)if(d===b.length)return e;return null},setCookie:function(a,b,c,d,e){c=c||365;var f=new Date;f.setDate(f.getDate()+c);var g=[a+"="+b,"expires="+f.toUTCString(),"path="+e||"/"];d&&g.push("domain="+d),document.cookie=g.join(";")},addEventListener:function(a,b,c){a.addEventListener?a.addEventListener(b,c):a.attachEvent("on"+b,c)}},g=function(){var a="data-cc-event",b="data-cc-if",c=function(a,b,d){return f.isArray(b)?f.each(b,function(b){c(a,b,d)}):void(a.addEventListener?a.addEventListener(b,d):a.attachEvent("on"+b,d))},d=function(a,b){return a.replace(/\{\{(.*?)\}\}/g,function(a,c){for(var d,e,g=c.split("||");e=g.shift();){if(e=e.trim(),'"'===e[0])return e.slice(1,e.length-1);if(d=f.queryObject(b,e))return d}return""})},e=function(a){var b=document.createElement("div");return b.innerHTML=a,b.children[0]},g=function(a,b,c){var d=a.parentNode.querySelectorAll("["+b+"]");f.each(d,function(a){var d=a.getAttribute(b);c(a,d)},window,!0)},h=function(b,d){g(b,a,function(a,b){var e=b.split(":"),g=f.queryObject(d,e[1]);c(a,e[0],f.bind(g,d))})},i=function(a,c){g(a,b,function(a,b){f.queryObject(c,b)||a.parentNode.removeChild(a)})};return{build:function(a,b){f.isArray(a)&&(a=a.join("")),a=d(a,b);var c=e(a);return h(c,b),i(c,b),c}}}(),h={options:{message:"Would you like to see the mobile optimized version?",dismiss:"No",confirm:"Yes",link:null,target:"_self",container:null,theme:"mobileswitch.css",domain:null,path:"/",expiryDays:2,markup:['<div class="mm-header {{containerClasses}}"><div class="mm-left"><i class="fa fa-mobile-phone"></i> </div><div class="mm-right"><p>{{options.message}}</p></div><div class="mm-action"><a data-cc-if="options.link" target="{{ options.target }}" href="{{options.link || "#null"}}" class="btn btn-success" rel="nofollow">{{options.confirm}}</a><a href="#null" data-cc-event="click:dismiss" target="_blank" class="btn btn-blue">{{options.dismiss}}</a></div></div>']},init:function(){var b=window["mmswitch_options"];b&&this.setOptions(b),this.setContainer(),this.options.theme?this.loadTheme(this.render):this.render()},setOptionsOnTheFly:function(a){this.setOptions(a),this.render()},setOptions:function(a){f.merge(this.options,a)},setContainer:function(){this.container=this.options.container?document.querySelector(this.options.container):document.body,this.containerClasses="",navigator.appVersion.indexOf("MSIE 8")>-1&&(this.containerClasses+=" cc_ie8")},loadTheme:function(a){var b=this.options.theme;-1===b.indexOf(".css")&&(b=d+b+".css");var c=document.createElement("link");c.rel="stylesheet",c.type="text/css",c.href=b;var e=!1;c.onload=f.bind(function(){!e&&a&&(a.call(this),e=!0)},this),document.getElementsByTagName("head")[0].appendChild(c)},render:function(){this.element&&this.element.parentNode&&(this.element.parentNode.removeChild(this.element),delete this.element),this.element=g.build(this.options.markup,this),this.container.firstChild?this.container.insertBefore(this.element,this.container.firstChild):this.container.appendChild(this.element)},dismiss:function(a){a.preventDefault&&a.preventDefault(),a.returnValue=!1,this.setDismissedCookie(),this.container.removeChild(this.element)},setDismissedCookie:function(){f.setCookie(c,"yes",this.options.expiryDays,this.options.domain,this.options.path)}},i=!1;(e=function(){i||"complete"!=document.readyState||(h.init(),i=!0,window["update_mmswitch_options"]=f.bind(h.setOptionsOnTheFly,h))})(),f.addEventListener(document,"readystatechange",e)}}}();