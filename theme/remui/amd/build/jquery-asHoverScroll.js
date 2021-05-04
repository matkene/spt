!function(t,e){if("function"==typeof define&&define.amd)define(["jquery"],e);else if("undefined"!=typeof exports)e(require("jquery"));else{e(t.jQuery),t.jqueryAsHoverScrollEs={}}}(this,function(t){"use strict";var e,r=(e=t)&&e.__esModule?e:{default:e};var i=function(t,e,i){return e&&n(t.prototype,e),i&&n(t,i),t};function n(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}var s,o,a,l,h,u,c,f,d,p={namespace:"asHoverScroll",list:"> ul",item:"> li",exception:null,direction:"vertical",fixed:!1,mouseMove:!0,touchScroll:!0,pointerScroll:!0,useCssTransforms:!0,useCssTransforms3d:!0,boundary:10,throttle:20,onEnter:function(){$(this).siblings().removeClass("is-active"),$(this).addClass("is-active")},onLeave:function(){$(this).removeClass("is-active")}},v={};function m(t){return d(t,!0)}s=v,o={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},a=["webkit","Moz","O","ms"],l=(0,r.default)("<support>").get(0).style,h=function(){return Boolean(d("transform"))},u=function(){return Boolean(d("perspective"))},c=function(){return Boolean(d("transition"))},f=function(){return Boolean(d("animation"))},d=function(t,e){var i=!1,n=t.charAt(0).toUpperCase()+t.slice(1);return void 0!==l[t]&&(i=t),i||r.default.each(a,function(t,e){return void 0===l[e+n]||(i="-"+e.toLowerCase()+"-"+n,!1)}),e?i:!!i},c()&&(s.transition=new String(m("transition")),s.transition.end=o.transition.end[s.transition]),f()&&(s.animation=new String(m("animation")),s.animation.end=o.animation.end[s.animation]),h()&&(s.transform=new String(m("transform")),s.transform3d=u()),"ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch?s.touch=!0:s.touch=!1,window.PointerEvent||window.MSPointerEvent?s.pointer=!0:s.pointer=!1,s.convertMatrixToArray=function(t){return!(!t||"matrix"!==t.substr(0,6))&&t.replace(/^.*\((.*)\)$/g,"$1").replace(/px/g,"").split(/, +/)},s.prefixPointerEvent=function(t){return window.MSPointerEvent?"MSPointer"+t.charAt(9).toUpperCase()+t.substr(10):t};var g="asHoverScroll",y=0,b=(i(x,[{key:"init",value:function(){this.initPosition(),this.updateLength(),this.bindEvents()}},{key:"bindEvents",value:function(){var t=this,e=this,i=["enter"],n=[];this.options.mouseMove&&(this.$element.on(this.eventName("mousemove"),r.default.proxy(this.onMove,this)),i.push("mouseenter"),n.push("mouseleave")),this.options.touchScroll&&v.touch&&(this.$element.on(this.eventName("touchstart"),r.default.proxy(this.onScrollStart,this)),this.$element.on(this.eventName("touchcancel"),r.default.proxy(this.onScrollEnd,this))),this.options.pointerScroll&&v.pointer&&(this.$element.on(this.eventName(v.prefixPointerEvent("pointerdown")),r.default.proxy(this.onScrollStart,this)),this.$element.on(this.eventName(v.prefixPointerEvent("pointercancel")),r.default.proxy(this.onScrollEnd,this))),this.$list.on(this.eventName(i.join(" ")),this.options.item,function(){e.is("scrolling")||e.options.onEnter.call(t)}),this.$list.on(this.eventName(n.join(" ")),this.options.item,function(){e.is("scrolling")||e.options.onLeave.call(t)}),(0,r.default)(window).on(this.eventNameWithId("orientationchange"),function(){e.update()}),(0,r.default)(window).on(this.eventNameWithId("resize"),this.throttle(function(){e.update()},this.options.throttle))}},{key:"unbindEvents",value:function(){this.$element.off(this.eventName()),this.$list.off(this.eventName()),(0,r.default)(window).off(this.eventNameWithId())}},{key:"onScrollStart",value:function(t){var e=this,i=this;if(!(this.is("scrolling")||3===t.which||0<(0,r.default)(t.target).closest(this.options.exception).length)){this._scroll.time=(new Date).getTime(),this._scroll.pointer=this.pointer(t),this._scroll.start=this.getPosition(),this._scroll.moved=!1;var n=function(){e.enter("scrolling"),e.trigger("scroll")};this.options.touchScroll&&v.touch&&((0,r.default)(document).on(this.eventName("touchend"),r.default.proxy(this.onScrollEnd,this)),(0,r.default)(document).one(this.eventName("touchmove"),r.default.proxy(function(){this.is("scrolling")||((0,r.default)(document).on(i.eventName("touchmove"),r.default.proxy(this.onScrollMove,this)),n())},this))),this.options.pointerScroll&&v.pointer&&((0,r.default)(document).on(this.eventName(v.prefixPointerEvent("pointerup")),r.default.proxy(this.onScrollEnd,this)),(0,r.default)(document).one(this.eventName(v.prefixPointerEvent("pointermove")),r.default.proxy(function(){this.is("scrolling")||((0,r.default)(document).on(i.eventName(v.prefixPointerEvent("pointermove")),r.default.proxy(this.onScrollMove,this)),n())},this))),(0,r.default)(document).on(this.eventName("blur"),r.default.proxy(this.onScrollEnd,this)),t.preventDefault()}}},{key:"onScrollMove",value:function(t){this._scroll.updated=this.pointer(t);var e=this.distance(this._scroll.pointer,this._scroll.updated);if((10<Math.abs(this._scroll.pointer.x-this._scroll.updated.x)||10<Math.abs(this._scroll.pointer.y-this._scroll.updated.y))&&(this._scroll.moved=!0),this.is("scrolling")){t.preventDefault();var i=this._scroll.start+e;this.canScroll()&&(0<i?i=0:i<this.containerLength-this.listLength&&(i=this.containerLength-this.listLength),this.updatePosition(i))}}},{key:"onScrollEnd",value:function(t){this._scroll.moved||(0,r.default)(t.target).trigger("tap"),this.options.touchScroll&&v.touch&&(0,r.default)(document).off(this.eventName("touchmove touchend")),this.options.pointerScroll&&v.pointer&&(0,r.default)(document).off(this.eventName(v.prefixPointerEvent("pointermove pointerup"))),(0,r.default)(document).off(this.eventName("blur")),this.leave("scrolling"),this.trigger("scrolled")}},{key:"pointer",value:function(t){var e={x:null,y:null};return(t=this.getEvent(t)).pageX&&!this.options.fixed?(e.x=t.pageX,e.y=t.pageY):(e.x=t.clientX,e.y=t.clientY),e}},{key:"getEvent",value:function(t){return t=(t=t.originalEvent||t||window.event).touches&&t.touches.length?t.touches[0]:t.changedTouches&&t.changedTouches.length?t.changedTouches[0]:t}},{key:"distance",value:function(t,e){return"vertical"===this.options.direction?e.y-t.y:e.x-t.x}},{key:"onMove",value:function(t){if(t=this.getEvent(t),!this.is("scrolling")&&this.isMatchScroll(t)){var e,i=void 0;(e=(t[this.attributes.page]&&!this.options.fixed?t[this.attributes.page]:t[this.attributes.client])-this.element[this.attributes.offset])<this.options.boundary?i=0:(i=(e-this.options.boundary)*this.multiplier)>this.listLength-this.containerLength&&(i=this.listLength-this.containerLength),this.updatePosition(-i)}}},{key:"isMatchScroll",value:function(t){return!(this.is("disabled")||!this.canScroll()||this.options.exception&&0!==(0,r.default)(t.target).closest(this.options.exception).length)}},{key:"canScroll",value:function(){return this.listLength>this.containerLength}},{key:"getContainerLength",value:function(){return this.element[this.attributes.clientLength]}},{key:"getListhLength",value:function(){return this.$list[0][this.attributes.clientLength]}},{key:"updateLength",value:function(){this.containerLength=this.getContainerLength(),this.listLength=this.getListhLength(),this.multiplier=(this.listLength-this.containerLength)/(this.containerLength-2*this.options.boundary)}},{key:"initPosition",value:function(){var t=this.makePositionStyle(0);this.$list.css(t)}},{key:"getPosition",value:function(){var t=void 0;if(this.options.useCssTransforms&&v.transform){if(this.options.useCssTransforms3d&&v.transform3d,!(t=v.convertMatrixToArray(this.$list.css(v.transform))))return 0;t="X"===this.attributes.axis?t[12]||t[4]:t[13]||t[5]}else t=this.$list.css(this.attributes.position);return parseFloat(t.replace("px",""))}},{key:"makePositionStyle",value:function(t){var e=void 0,i="0px",n="0px";this.options.useCssTransforms&&v.transform?("X"===this.attributes.axis?i=t+"px":n=t+"px",e=v.transform.toString(),t=this.options.useCssTransforms3d&&v.transform3d?"translate3d("+i+","+n+",0px)":"translate("+i+","+n+")"):e=this.attributes.position;var s={};return s[e]=t,s}},{key:"updatePosition",value:function(t){var e=this.makePositionStyle(t);this.$list.css(e)}},{key:"update",value:function(){this.is("disabled")||(this.updateLength(),this.canScroll()||this.initPosition())}},{key:"eventName",value:function(t){if("string"!=typeof t||""===t)return"."+g;for(var e=(t=t.split(" ")).length,i=0;i<e;i++)t[i]=t[i]+"."+g;return t.join(" ")}},{key:"eventNameWithId",value:function(t){if("string"!=typeof t||""===t)return"."+this.options.namespace+"-"+this.instanceId;for(var e=(t=t.split(" ")).length,i=0;i<e;i++)t[i]=t[i]+"."+this.options.namespace+"-"+this.instanceId;return t.join(" ")}},{key:"trigger",value:function(t){for(var e=arguments.length,i=Array(1<e?e-1:0),n=1;n<e;n++)i[n-1]=arguments[n];var s=[this].concat(i);this.$element.trigger(g+"::"+t,s);var o="on"+(t=t.replace(/\b\w+\b/g,function(t){return t.substring(0,1).toUpperCase()+t.substring(1)}));"function"==typeof this.options[o]&&this.options[o].apply(this,i)}},{key:"is",value:function(t){return this._states[t]&&0<this._states[t]}},{key:"enter",value:function(t){void 0===this._states[t]&&(this._states[t]=0),this._states[t]=1}},{key:"leave",value:function(t){this._states[t]=0}},{key:"throttle",value:function(o,r){function a(){p=h(),u=null,d=o.apply(c,f),u||(c=f=null)}var l=this,h=Date.now||function(){return(new Date).getTime()},u=void 0,c=void 0,f=void 0,d=void 0,p=0;return function(){for(var t=arguments.length,e=Array(t),i=0;i<t;i++)e[i]=arguments[i];var n=h(),s=r-(n-p);return c=l,f=e,s<=0||r<s?(u&&(clearTimeout(u),u=null),p=n,d=o.apply(c,f),u||(c=f=null)):u||(u=setTimeout(a,s)),d}}},{key:"enable",value:function(){this.is("disabled")&&(this.leave("disabled"),this.$element.removeClass(this.classes.disabled),this.bindEvents()),this.trigger("enable")}},{key:"disable",value:function(){this.is("disabled")||(this.enter("disabled"),this.initPosition(),this.$element.addClass(this.classes.disabled),this.unbindEvents()),this.trigger("disable")}},{key:"destroy",value:function(){this.$element.removeClass(this.classes.disabled),this.unbindEvents(),this.$element.data(g,null),this.trigger("destroy")}}],[{key:"setDefaults",value:function(t){r.default.extend(p,r.default.isPlainObject(t)&&t)}}]),x);function x(t,e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,x),this.element=t,this.$element=(0,r.default)(t),this.options=r.default.extend({},p,e,this.$element.data()),this.$list=(0,r.default)(this.options.list,this.$element),this.classes={disabled:this.options.namespace+"-disabled"},"vertical"===this.options.direction?this.attributes={page:"pageY",axis:"Y",position:"top",length:"height",offset:"offsetTop",client:"clientY",clientLength:"clientHeight"}:"horizontal"===this.options.direction&&(this.attributes={page:"pageX",axis:"X",position:"left",length:"width",offset:"offsetLeft",client:"clientX",clientLength:"clientWidth"}),this._states={},this._scroll={time:null,pointer:null},this.instanceId=++y,this.trigger("init"),this.init()}function S(t){for(var e=arguments.length,i=Array(1<e?e-1:0),n=1;n<e;n++)i[n-1]=arguments[n];if("string"==typeof t){var s=t;if(/^_/.test(s))return!1;if(!/^(get)/.test(s))return this.each(function(){var t=r.default.data(this,k);t&&"function"==typeof t[s]&&t[s].apply(t,i)});var o=this.first().data(k);if(o&&"function"==typeof o[s])return o[s].apply(o,i)}return this.each(function(){(0,r.default)(this).data(k)||(0,r.default)(this).data(k,new b(this,t))})}var k="asHoverScroll",w=r.default.fn.asHoverScroll;r.default.fn.asHoverScroll=S,r.default.asHoverScroll=r.default.extend({setDefaults:b.setDefaults,noConflict:function(){return r.default.fn.asHoverScroll=w,S}},{version:"0.3.7"})});