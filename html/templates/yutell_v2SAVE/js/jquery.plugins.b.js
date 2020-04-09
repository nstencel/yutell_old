/*!
	Autosize v1.18.9 - 2014-05-27
	Automatically adjust textarea height based on user input.
	(c) 2014 Jack Moore - http://www.jacklmoore.com/autosize
	license: http://www.opensource.org/licenses/mit-license.php
*/
(function(e){var t,o={className:"autosizejs",id:"autosizejs",append:"\n",callback:!1,resizeDelay:10,placeholder:!0},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o=window.getComputedStyle?window.getComputedStyle(u,null):!1;o?(t=u.getBoundingClientRect().width,(0===t||"number"!=typeof t)&&(t=parseInt(o.width,10)),e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){t-=parseInt(o[i],10)})):t=p.width(),s.style.width=Math.max(t,0)+"px"}function a(){var a={};if(t=u,s.className=i.className,s.id=i.id,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a).attr("wrap",p.attr("wrap")),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=!u.value&&i.placeholder?(p.attr("placeholder")||"")+i.append:u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width(),y=p.css("resize");p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word"}),"vertical"===y?p.css("resize","vertical"):"both"===y&&p.css("resize","horizontal"),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

/*
 *	jQuery dotdotdot 1.6.14
 *
 *	Copyright (c) Fred Heusschen
 *	www.frebsite.nl
 *
 *	Plugin website:
 *	dotdotdot.frebsite.nl
 *
 *	Dual licensed under the MIT and GPL licenses.
 *	http://en.wikipedia.org/wiki/MIT_License
 *	http://en.wikipedia.org/wiki/GNU_General_Public_License
 */
!function(t,e){function n(t,e,n){var r=t.children(),o=!1;t.empty();for(var i=0,d=r.length;d>i;i++){var l=r.eq(i);if(t.append(l),n&&t.append(n),a(t,e)){l.remove(),o=!0;break}n&&n.detach()}return o}function r(e,n,i,d,l){var s=!1,c="table, thead, tbody, tfoot, tr, col, colgroup, object, embed, param, ol, ul, dl, blockquote, select, optgroup, option, textarea, script, style",u="script";return e.contents().detach().each(function(){var f=this,h=t(f);if("undefined"==typeof f||3==f.nodeType&&0==t.trim(f.data).length)return!0;if(h.is(u))e.append(h);else{if(s)return!0;e.append(h),l&&e[e.is(c)?"after":"append"](l),a(i,d)&&(s=3==f.nodeType?o(h,n,i,d,l):r(h,n,i,d,l),s||(h.detach(),s=!0)),s||l&&l.detach()}}),s}function o(e,n,r,o,d){var c=e[0];if(!c)return!1;var f=s(c),h=-1!==f.indexOf(" ")?" ":"　",p="letter"==o.wrap?"":h,g=f.split(p),v=-1,w=-1,b=0,y=g.length-1;for(o.fallbackToLetter&&0==b&&0==y&&(p="",g=f.split(p),y=g.length-1);y>=b&&(0!=b||0!=y);){var m=Math.floor((b+y)/2);if(m==w)break;w=m,l(c,g.slice(0,w+1).join(p)+o.ellipsis),a(r,o)?(y=w,o.fallbackToLetter&&0==b&&0==y&&(p="",g=g[0].split(p),v=-1,w=-1,b=0,y=g.length-1)):(v=w,b=w)}if(-1==v||1==g.length&&0==g[0].length){var x=e.parent();e.detach();var T=d&&d.closest(x).length?d.length:0;x.contents().length>T?c=u(x.contents().eq(-1-T),n):(c=u(x,n,!0),T||x.detach()),c&&(f=i(s(c),o),l(c,f),T&&d&&t(c).parent().append(d))}else f=i(g.slice(0,v+1).join(p),o),l(c,f);return!0}function a(t,e){return t.innerHeight()>e.maxHeight}function i(e,n){for(;t.inArray(e.slice(-1),n.lastCharacter.remove)>-1;)e=e.slice(0,-1);return t.inArray(e.slice(-1),n.lastCharacter.noEllipsis)<0&&(e+=n.ellipsis),e}function d(t){return{width:t.innerWidth(),height:t.innerHeight()}}function l(t,e){t.innerText?t.innerText=e:t.nodeValue?t.nodeValue=e:t.textContent&&(t.textContent=e)}function s(t){return t.innerText?t.innerText:t.nodeValue?t.nodeValue:t.textContent?t.textContent:""}function c(t){do t=t.previousSibling;while(t&&1!==t.nodeType&&3!==t.nodeType);return t}function u(e,n,r){var o,a=e&&e[0];if(a){if(!r){if(3===a.nodeType)return a;if(t.trim(e.text()))return u(e.contents().last(),n)}for(o=c(a);!o;){if(e=e.parent(),e.is(n)||!e.length)return!1;o=c(e[0])}if(o)return u(t(o),n)}return!1}function f(e,n){return e?"string"==typeof e?(e=t(e,n),e.length?e:!1):e.jquery?e:!1:!1}function h(t){for(var e=t.innerHeight(),n=["paddingTop","paddingBottom"],r=0,o=n.length;o>r;r++){var a=parseInt(t.css(n[r]),10);isNaN(a)&&(a=0),e-=a}return e}if(!t.fn.dotdotdot){t.fn.dotdotdot=function(e){if(0==this.length)return t.fn.dotdotdot.debug('No element found for "'+this.selector+'".'),this;if(this.length>1)return this.each(function(){t(this).dotdotdot(e)});var o=this;o.data("dotdotdot")&&o.trigger("destroy.dot"),o.data("dotdotdot-style",o.attr("style")||""),o.css("word-wrap","break-word"),"nowrap"===o.css("white-space")&&o.css("white-space","normal"),o.bind_events=function(){return o.bind("update.dot",function(e,d){e.preventDefault(),e.stopPropagation(),l.maxHeight="number"==typeof l.height?l.height:h(o),l.maxHeight+=l.tolerance,"undefined"!=typeof d&&(("string"==typeof d||d instanceof HTMLElement)&&(d=t("<div />").append(d).contents()),d instanceof t&&(i=d)),g=o.wrapInner('<div class="dotdotdot" />').children(),g.contents().detach().end().append(i.clone(!0)).find("br").replaceWith("  <br />  ").end().css({height:"auto",width:"auto",border:"none",padding:0,margin:0});var c=!1,u=!1;return s.afterElement&&(c=s.afterElement.clone(!0),c.show(),s.afterElement.detach()),a(g,l)&&(u="children"==l.wrap?n(g,l,c):r(g,o,g,l,c)),g.replaceWith(g.contents()),g=null,t.isFunction(l.callback)&&l.callback.call(o[0],u,i),s.isTruncated=u,u}).bind("isTruncated.dot",function(t,e){return t.preventDefault(),t.stopPropagation(),"function"==typeof e&&e.call(o[0],s.isTruncated),s.isTruncated}).bind("originalContent.dot",function(t,e){return t.preventDefault(),t.stopPropagation(),"function"==typeof e&&e.call(o[0],i),i}).bind("destroy.dot",function(t){t.preventDefault(),t.stopPropagation(),o.unwatch().unbind_events().contents().detach().end().append(i).attr("style",o.data("dotdotdot-style")||"").data("dotdotdot",!1)}),o},o.unbind_events=function(){return o.unbind(".dot"),o},o.watch=function(){if(o.unwatch(),"window"==l.watch){var e=t(window),n=e.width(),r=e.height();e.bind("resize.dot"+s.dotId,function(){n==e.width()&&r==e.height()&&l.windowResizeFix||(n=e.width(),r=e.height(),u&&clearInterval(u),u=setTimeout(function(){o.trigger("update.dot")},100))})}else c=d(o),u=setInterval(function(){if(o.is(":visible")){var t=d(o);(c.width!=t.width||c.height!=t.height)&&(o.trigger("update.dot"),c=t)}},500);return o},o.unwatch=function(){return t(window).unbind("resize.dot"+s.dotId),u&&clearInterval(u),o};var i=o.contents(),l=t.extend(!0,{},t.fn.dotdotdot.defaults,e),s={},c={},u=null,g=null;return l.lastCharacter.remove instanceof Array||(l.lastCharacter.remove=t.fn.dotdotdot.defaultArrays.lastCharacter.remove),l.lastCharacter.noEllipsis instanceof Array||(l.lastCharacter.noEllipsis=t.fn.dotdotdot.defaultArrays.lastCharacter.noEllipsis),s.afterElement=f(l.after,o),s.isTruncated=!1,s.dotId=p++,o.data("dotdotdot",!0).bind_events().trigger("update.dot"),l.watch&&o.watch(),o},t.fn.dotdotdot.defaults={ellipsis:"... ",wrap:"word",fallbackToLetter:!0,lastCharacter:{},tolerance:0,callback:null,after:null,height:null,watch:!1,windowResizeFix:!0},t.fn.dotdotdot.defaultArrays={lastCharacter:{remove:[" ","　",",",";",".","!","?"],noEllipsis:[]}},t.fn.dotdotdot.debug=function(){};var p=1,g=t.fn.html;t.fn.html=function(n){return n!=e&&!t.isFunction(n)&&this.data("dotdotdot")?this.trigger("update",[n]):g.apply(this,arguments)};var v=t.fn.text;t.fn.text=function(n){return n!=e&&!t.isFunction(n)&&this.data("dotdotdot")?(n=t("<div />").text(n).html(),this.trigger("update",[n])):v.apply(this,arguments)}}}(jQuery);

// jansy-bootstrap.min.js
+function($){"use strict";var Rowlink=function(element,options){this.$element=$(element)
this.options=$.extend({},Rowlink.DEFAULTS,options)
this.$element.on('click.bs.rowlink','td:not(.rowlink-skip)',$.proxy(this.click,this))}
Rowlink.DEFAULTS={target:"a"}
Rowlink.prototype.click=function(e){var target=$(e.currentTarget).closest('tr').find(this.options.target)[0]
if($(e.target)[0]===target)return
e.preventDefault();if(target.click){target.click()}else if(document.createEvent){var evt=document.createEvent("MouseEvents");evt.initMouseEvent("click",true,true,window,0,0,0,0,0,false,false,false,false,0,null);target.dispatchEvent(evt);}}
var old=$.fn.rowlink
$.fn.rowlink=function(options){return this.each(function(){var $this=$(this)
var data=$this.data('bs.rowlink')
if(!data)$this.data('bs.rowlink',(data=new Rowlink(this,options)))})}
$.fn.rowlink.Constructor=Rowlink
$.fn.rowlink.noConflict=function(){$.fn.rowlink=old
return this}
$(document).on('click.bs.rowlink.data-api','[data-link="row"]',function(e){if($(e.target).closest('.rowlink-skip').length!==0)return
var $this=$(this)
if($this.data('bs.rowlink'))return
$this.rowlink($this.data())
$(e.target).trigger('click.bs.rowlink')})}(window.jQuery);+function($){"use strict";var isIphone=(window.orientation!==undefined)
var isAndroid=navigator.userAgent.toLowerCase().indexOf("android")>-1
var isIE=window.navigator.appName=='Microsoft Internet Explorer'
var Inputmask=function(element,options){if(isAndroid)return
this.$element=$(element)
this.options=$.extend({},Inputmask.DEFAULTS,options)
this.mask=String(this.options.mask)
this.init()
this.listen()
this.checkVal()}
Inputmask.DEFAULTS={mask:"",placeholder:"_",definitions:{'9':"[0-9]",'a':"[A-Za-z]",'w':"[A-Za-z0-9]",'*':"."}}
Inputmask.prototype.init=function(){var defs=this.options.definitions
var len=this.mask.length
this.tests=[]
this.partialPosition=this.mask.length
this.firstNonMaskPos=null
$.each(this.mask.split(""),$.proxy(function(i,c){if(c=='?'){len--
this.partialPosition=i}else if(defs[c]){this.tests.push(new RegExp(defs[c]))
if(this.firstNonMaskPos===null)this.firstNonMaskPos=this.tests.length-1}else{this.tests.push(null)}},this))
this.buffer=$.map(this.mask.split(""),$.proxy(function(c,i){if(c!='?')return defs[c]?this.options.placeholder:c},this))
this.focusText=this.$element.val()
this.$element.data("rawMaskFn",$.proxy(function(){return $.map(this.buffer,function(c,i){return this.tests[i]&&c!=this.options.placeholder?c:null}).join('')},this))}
Inputmask.prototype.listen=function(){if(this.$element.attr("readonly"))return
var pasteEventName=(isIE?'paste':'input')+".bs.inputmask"
this.$element.on("unmask.bs.inputmask",$.proxy(this.unmask,this)).on("focus.bs.inputmask",$.proxy(this.focusEvent,this)).on("blur.bs.inputmask",$.proxy(this.blurEvent,this)).on("keydown.bs.inputmask",$.proxy(this.keydownEvent,this)).on("keypress.bs.inputmask",$.proxy(this.keypressEvent,this)).on(pasteEventName,$.proxy(this.pasteEvent,this))}
Inputmask.prototype.caret=function(begin,end){if(this.$element.length===0)return
if(typeof begin=='number'){end=(typeof end=='number')?end:begin
return this.$element.each(function(){if(this.setSelectionRange){this.setSelectionRange(begin,end)}else if(this.createTextRange){var range=this.createTextRange()
range.collapse(true)
range.moveEnd('character',end)
range.moveStart('character',begin)
range.select()}})}else{if(this.$element[0].setSelectionRange){begin=this.$element[0].selectionStart
end=this.$element[0].selectionEnd}else if(document.selection&&document.selection.createRange){var range=document.selection.createRange()
begin=0-range.duplicate().moveStart('character',-100000)
end=begin+range.text.length}return{begin:begin,end:end}}}
Inputmask.prototype.seekNext=function(pos){var len=this.mask.length
while(++pos<=len&&!this.tests[pos]);return pos}
Inputmask.prototype.seekPrev=function(pos){while(--pos>=0&&!this.tests[pos]);return pos}
Inputmask.prototype.shiftL=function(begin,end){var len=this.mask.length
if(begin<0)return
for(var i=begin,j=this.seekNext(end);i<len;i++){if(this.tests[i]){if(j<len&&this.tests[i].test(this.buffer[j])){this.buffer[i]=this.buffer[j]
this.buffer[j]=this.options.placeholder}else
break
j=this.seekNext(j)}}this.writeBuffer()
this.caret(Math.max(this.firstNonMaskPos,begin))}
Inputmask.prototype.shiftR=function(pos){var len=this.mask.length
for(var i=pos,c=this.options.placeholder;i<len;i++){if(this.tests[i]){var j=this.seekNext(i)
var t=this.buffer[i]
this.buffer[i]=c
if(j<len&&this.tests[j].test(t))c=t
else
break}}},Inputmask.prototype.unmask=function(){this.$element.unbind(".bs.inputmask").removeData("bs.inputmask")}
Inputmask.prototype.focusEvent=function(){this.focusText=this.$element.val()
var len=this.mask.length
var pos=this.checkVal()
this.writeBuffer()
var that=this
var moveCaret=function(){if(pos==len)that.caret(0,pos)
else
that.caret(pos)}
moveCaret()
setTimeout(moveCaret,50)}
Inputmask.prototype.blurEvent=function(){this.checkVal()
if(this.$element.val()!==this.focusText){this.$element.trigger('change')
this.$element.trigger('input')}}
Inputmask.prototype.keydownEvent=function(e){var k=e.which
if(k==8||k==46||(isIphone&&k==127)){var pos=this.caret(),begin=pos.begin,end=pos.end
if(end-begin===0){begin=k!=46?this.seekPrev(begin):(end=this.seekNext(begin-1))
end=k==46?this.seekNext(end):end}this.clearBuffer(begin,end)
this.shiftL(begin,end-1)
return false}else if(k==27){this.$element.val(this.focusText)
this.caret(0,this.checkVal())
return false}}
Inputmask.prototype.keypressEvent=function(e){var len=this.mask.length
var k=e.which,pos=this.caret()
if(e.ctrlKey||e.altKey||e.metaKey||k<32){return true}else if(k){if(pos.end-pos.begin!==0){this.clearBuffer(pos.begin,pos.end)
this.shiftL(pos.begin,pos.end-1)}var p=this.seekNext(pos.begin-1)
if(p<len){var c=String.fromCharCode(k)
if(this.tests[p].test(c)){this.shiftR(p)
this.buffer[p]=c
this.writeBuffer()
var next=this.seekNext(p)
this.caret(next)}}return false}}
Inputmask.prototype.pasteEvent=function(){var that=this
setTimeout(function(){that.caret(that.checkVal(true))},0)}
Inputmask.prototype.clearBuffer=function(start,end){var len=this.mask.length
for(var i=start;i<end&&i<len;i++){if(this.tests[i])this.buffer[i]=this.options.placeholder}}
Inputmask.prototype.writeBuffer=function(){return this.$element.val(this.buffer.join('')).val()}
Inputmask.prototype.checkVal=function(allow){var len=this.mask.length
var test=this.$element.val()
var lastMatch=-1
for(var i=0,pos=0;i<len;i++){if(this.tests[i]){this.buffer[i]=this.options.placeholder
while(pos++<test.length){var c=test.charAt(pos-1)
if(this.tests[i].test(c)){this.buffer[i]=c
lastMatch=i
break}}if(pos>test.length)break}else if(this.buffer[i]==test.charAt(pos)&&i!=this.partialPosition){pos++
lastMatch=i}}if(!allow&&lastMatch+1<this.partialPosition){this.$element.val("")
this.clearBuffer(0,len)}else if(allow||lastMatch+1>=this.partialPosition){this.writeBuffer()
if(!allow)this.$element.val(this.$element.val().substring(0,lastMatch+1))}return(this.partialPosition?i:this.firstNonMaskPos)}
var old=$.fn.inputmask
$.fn.inputmask=function(options){return this.each(function(){var $this=$(this)
var data=$this.data('bs.inputmask')
if(!data)$this.data('bs.inputmask',(data=new Inputmask(this,options)))})}
$.fn.inputmask.Constructor=Inputmask
$.fn.inputmask.noConflict=function(){$.fn.inputmask=old
return this}
$(document).on('focus.bs.inputmask.data-api','[data-mask]',function(e){var $this=$(this)
if($this.data('bs.inputmask'))return
$this.inputmask($this.data())})}(window.jQuery);+function($){"use strict";var isIE=window.navigator.appName=='Microsoft Internet Explorer'
var Fileinput=function(element,options){this.$element=$(element)
this.$input=this.$element.find(':file')
if(this.$input.length===0)return
this.name=this.$input.attr('name')||options.name
this.$hidden=this.$element.find('input[type=hidden][name="'+this.name+'"]')
if(this.$hidden.length===0){this.$hidden=$('<input type="hidden">').insertBefore(this.$input)}this.$preview=this.$element.find('.fileinput-preview')
var height=this.$preview.css('height')
if(this.$preview.css('display')!=='inline'&&height!=='0px'&&height!=='none'){this.$preview.css('line-height',height)}this.original={exists:this.$element.hasClass('fileinput-exists'),preview:this.$preview.html(),hiddenVal:this.$hidden.val()}
this.listen()}
Fileinput.prototype.listen=function(){this.$input.on('change.bs.fileinput',$.proxy(this.change,this))
$(this.$input[0].form).on('reset.bs.fileinput',$.proxy(this.reset,this))
this.$element.find('[data-trigger="fileinput"]').on('click.bs.fileinput',$.proxy(this.trigger,this))
this.$element.find('[data-dismiss="fileinput"]').on('click.bs.fileinput',$.proxy(this.clear,this))},Fileinput.prototype.change=function(e){var files=e.target.files===undefined?(e.target&&e.target.value?[{name:e.target.value.replace(/^.+\\/,'')}]:[]):e.target.files
e.stopPropagation()
if(files.length===0){this.clear()
return}this.$hidden.val('')
this.$hidden.attr('name','')
this.$input.attr('name',this.name)
var file=files[0]
if(this.$preview.length>0&&(typeof file.type!=="undefined"?file.type.match(/^image\/(gif|png|jpeg)$/):file.name.match(/\.(gif|png|jpe?g)$/i))&&typeof FileReader!=="undefined"){var reader=new FileReader()
var preview=this.$preview
var element=this.$element
reader.onload=function(re){var $img=$('<img>')
$img[0].src=re.target.result
files[0].result=re.target.result
element.find('.fileinput-filename').text(file.name)
if(preview.css('max-height')!='none')$img.css('max-height',parseInt(preview.css('max-height'),10)-parseInt(preview.css('padding-top'),10)-parseInt(preview.css('padding-bottom'),10)-parseInt(preview.css('border-top'),10)-parseInt(preview.css('border-bottom'),10))
preview.html($img)
element.addClass('fileinput-exists').removeClass('fileinput-new')
element.trigger('change.bs.fileinput',files)}
reader.readAsDataURL(file)}else{this.$element.find('.fileinput-filename').text(file.name)
this.$preview.text(file.name)
this.$element.addClass('fileinput-exists').removeClass('fileinput-new')
this.$element.trigger('change.bs.fileinput')}},Fileinput.prototype.clear=function(e){if(e)e.preventDefault()
this.$hidden.val('')
this.$hidden.attr('name',this.name)
this.$input.attr('name','')
if(isIE){var inputClone=this.$input.clone(true);this.$input.after(inputClone);this.$input.remove();this.$input=inputClone;}else{this.$input.val('')}this.$preview.html('')
this.$element.find('.fileinput-filename').text('')
this.$element.addClass('fileinput-new').removeClass('fileinput-exists')
if(e!==undefined){this.$input.trigger('change')
this.$element.trigger('clear.bs.fileinput')}},Fileinput.prototype.reset=function(){this.clear()
this.$hidden.val(this.original.hiddenVal)
this.$preview.html(this.original.preview)
this.$element.find('.fileinput-filename').text('')
if(this.original.exists)this.$element.addClass('fileinput-exists').removeClass('fileinput-new')
else this.$element.addClass('fileinput-new').removeClass('fileinput-exists')
this.$element.trigger('reset.bs.fileinput')},Fileinput.prototype.trigger=function(e){this.$input.trigger('click')
e.preventDefault()}
var old=$.fn.fileinput
$.fn.fileinput=function(options){return this.each(function(){var $this=$(this),data=$this.data('bs.fileinput')
if(!data)$this.data('bs.fileinput',(data=new Fileinput(this,options)))
if(typeof options=='string')data[options]()})}
$.fn.fileinput.Constructor=Fileinput
$.fn.fileinput.noConflict=function(){$.fn.fileinput=old
return this}
$(document).on('click.fileinput.data-api','[data-provides="fileinput"]',function(e){var $this=$(this)
if($this.data('bs.fileinput'))return
$this.fileinput($this.data())
var $target=$(e.target).closest('[data-dismiss="fileinput"],[data-trigger="fileinput"]');if($target.length>0){e.preventDefault()
$target.trigger('click.bs.fileinput')}})}(window.jQuery);+function($){"use strict";var OffCanvas=function(element,options){this.$element=$(element)
this.options=$.extend({},OffCanvas.DEFAULTS,options)
this.state=null
this.placement=null
if(this.options.recalc){this.calcClone()
$(window).on('resize',$.proxy(this.recalc,this))}if(this.options.autohide)$(document).on('click',$.proxy(this.autohide,this))
if(this.options.toggle)this.toggle()
if(this.options.disablescrolling){this.options.disableScrolling=this.options.disablescrolling
delete this.options.disablescrolling}}
OffCanvas.DEFAULTS={toggle:true,placement:'auto',autohide:true,recalc:true,disableScrolling:false,modal:false}
OffCanvas.prototype.offset=function(){switch(this.placement){case'left':case'right':return this.$element.outerWidth()
case'top':case'bottom':return this.$element.outerHeight()}}
OffCanvas.prototype.calcPlacement=function(){if(this.options.placement!=='auto'){this.placement=this.options.placement
return}if(!this.$element.hasClass('in')){this.$element.css('visiblity','hidden !important')}var horizontal=$(window).width()/this.$element.width()
var vertical=$(window).height()/this.$element.height()
var element=this.$element
function ab(a,b){if(element.css(b)==='auto')return a
if(element.css(a)==='auto')return b
var size_a=parseInt(element.css(a),10)
var size_b=parseInt(element.css(b),10)
return size_a>size_b?b:a}this.placement=horizontal>=vertical?ab('left','right'):ab('top','bottom')
if(this.$element.css('visibility')==='hidden !important'){this.$element.removeClass('in').css('visiblity','')}}
OffCanvas.prototype.opposite=function(placement){switch(placement){case'top':return'bottom'
case'left':return'right'
case'bottom':return'top'
case'right':return'left'}}
OffCanvas.prototype.getCanvasElements=function(){var canvas=this.options.canvas?$(this.options.canvas):this.$element
var fixed_elements=canvas.find('*').filter(function(){return $(this).css('position')==='fixed'}).not(this.options.exclude)
return canvas.add(fixed_elements)}
OffCanvas.prototype.slide=function(elements,offset,callback){if(!$.support.transition){var anim={}
anim[this.placement]="+="+offset
return elements.animate(anim,100,callback)}var placement=this.placement
var opposite=this.opposite(placement)
elements.each(function(){if($(this).css(placement)!=='auto')$(this).css(placement,(parseInt($(this).css(placement),10)||0))
if($(this).css(opposite)!=='auto')$(this).css(opposite,(parseInt($(this).css(opposite),10)||0))})
this.$element.one($.support.transition.end,callback).emulateTransitionEnd(100)}
OffCanvas.prototype.disableScrolling=function(){var bodyWidth=$('body').width()
var prop='padding-'+this.opposite(this.placement)
if($('body').data('offcanvas-style')===undefined){$('body').data('offcanvas-style',$('body').attr('style')||'')}$('body').css('overflow','hidden')
if($('body').width()>bodyWidth){var padding=parseInt($('body').css(prop),10)+$('body').width()-bodyWidth
setTimeout(function(){$('body').css(prop,padding)},1)}$('body').on('touchmove.bs',function(e){e.preventDefault();});}
OffCanvas.prototype.enableScrolling=function(){$('body').off('touchmove.bs');}
OffCanvas.prototype.show=function(){if(this.state)return
var startEvent=$.Event('show.bs.offcanvas')
this.$element.trigger(startEvent)
if(startEvent.isDefaultPrevented())return
this.state='slide-in'
this.calcPlacement();var elements=this.getCanvasElements()
var placement=this.placement
var opposite=this.opposite(placement)
var offset=this.offset()
var offsetTop=$('header').outerHeight();if(elements.index(this.$element)!==-1){$(this.$element).data('offcanvas-style',$(this.$element).attr('style')||'')
this.$element.css('top',offsetTop)
this.$element.css(placement);}if(this.options.disableScrolling)this.disableScrolling()
if(this.options.modal)this.toggleBackdrop()
var complete=function(){if(this.state!='slide-in')return
this.state='slid'
this.$element.trigger('shown.bs.offcanvas')}
setTimeout($.proxy(function(){this.$element.addClass('in');this.slide(elements,offset,$.proxy(complete,this))},this),1)}
OffCanvas.prototype.hide=function(fast){if(this.state!=='slid')return
var startEvent=$.Event('hide.bs.offcanvas')
this.$element.trigger(startEvent)
if(startEvent.isDefaultPrevented())return
this.state='slide-out'
var elements=$('.canvas-slid')
var placement=this.placement
var offset=-1*this.offset()
var complete=function(){if(this.state!='slide-out')return
this.state=null
this.placement=null
this.$element.removeClass('in')
elements.removeClass('canvas-sliding')
elements.add(this.$element).add('body').each(function(){$(this).attr('style',$(this).data('offcanvas-style')).removeData('offcanvas-style')})
this.$element.trigger('hidden.bs.offcanvas')}
if(this.options.disableScrolling)this.enableScrolling()
if(this.options.modal)this.toggleBackdrop()
elements.removeClass('canvas-slid').addClass('canvas-sliding')
$('#navslide-toggle').removeClass('is-active')
setTimeout($.proxy(function(){this.slide(elements,offset,$.proxy(complete,this))},this),1)}
OffCanvas.prototype.toggle=function(){if(this.state==='slide-in'||this.state==='slide-out')return
this[this.state==='slid'?'hide':'show']()}
OffCanvas.prototype.toggleBackdrop=function(callback){callback=callback||$.noop;if(this.state=='slide-in'){var doAnimate=$.support.transition;this.$backdrop=$('<div class="modal-backdrop fade" />').insertAfter(this.$element);if(doAnimate)this.$backdrop[0].offsetWidth
this.$backdrop.addClass('in')
doAnimate?this.$backdrop.one($.support.transition.end,callback).emulateTransitionEnd(150):callback()}else if(this.state=='slide-out'&&this.$backdrop){this.$backdrop.removeClass('in');$('body').off('touchmove.bs');var self=this;if($.support.transition){this.$backdrop.one($.support.transition.end,function(){self.$backdrop.remove();callback()
self.$backdrop=null;}).emulateTransitionEnd(150);}else{this.$backdrop.remove();this.$backdrop=null;callback();}}else if(callback){callback()}}
OffCanvas.prototype.calcClone=function(){this.$calcClone=this.$element.clone().html('').addClass('offcanvas-clone').removeClass('in').appendTo($('body'))}
OffCanvas.prototype.recalc=function(){if(this.$calcClone.css('display')==='none'||(this.state!=='slid'&&this.state!=='slide-in'))return
this.state=null
this.placement=null
var elements=this.getCanvasElements()
this.$element.removeClass('in')
console.log(this)
elements.removeClass('canvas-slid')
elements.add(this.$element).add('body').each(function(){$(this).attr('style',$(this).data('offcanvas-style')).removeData('offcanvas-style')})}
OffCanvas.prototype.autohide=function(e){if($(e.target).closest(this.$element).length===0)this.hide()}
var old=$.fn.offcanvas
$.fn.offcanvas=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.offcanvas')
var options=$.extend({},OffCanvas.DEFAULTS,$this.data(),typeof option==='object'&&option)
if(!data)$this.data('bs.offcanvas',(data=new OffCanvas(this,options)))
if(typeof option==='string')data[option]()})}
$.fn.offcanvas.Constructor=OffCanvas
$.fn.offcanvas.noConflict=function(){$.fn.offcanvas=old
return this}
$(document).on('click.bs.offcanvas.data-api','[data-toggle=offcanvas]',function(e){var $this=$(this),href
var target=$this.attr('data-target')||e.preventDefault()||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,'')
var $canvas=$(target)
var data=$canvas.data('bs.offcanvas')
var option=data?'toggle':$this.data()
e.stopPropagation()
if(data)data.toggle()
else $canvas.offcanvas(option)})}(window.jQuery);+function($){'use strict';function transitionEnd(){var el=document.createElement('bootstrap')
var transEndEventNames={WebkitTransition:'webkitTransitionEnd',MozTransition:'transitionend',OTransition:'oTransitionEnd otransitionend',transition:'transitionend'}
for(var name in transEndEventNames){if(el.style[name]!==undefined){return{end:transEndEventNames[name]}}}return false}if($.support.transition!==undefined)return
$.fn.emulateTransitionEnd=function(duration){var called=false,$el=this
$(this).one($.support.transition.end,function(){called=true})
var callback=function(){if(!called)$($el).trigger($.support.transition.end)}
setTimeout(callback,duration)
return this}
$(function(){$.support.transition=transitionEnd()})}(window.jQuery);