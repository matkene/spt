define(["exports","./Plugin"],function(e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n,r=(n=t)&&n.__esModule?n:{default:n};var o=function(e,t,n){return t&&a(e.prototype,t),n&&a(e,n),e};function a(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var l="scrollable",u=(function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(i,r.default),o(i,[{key:"getName",value:function(){return l}},{key:"render",value:function(){this.$el.asScrollable(this.options)}}],[{key:"getDefaults",value:function(){return{namespace:"scrollable",contentSelector:"> [data-role='content']",containerSelector:"> [data-role='container']"}}}]),i);function i(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,i),function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(i.__proto__||Object.getPrototypeOf(i)).apply(this,arguments))}r.default.register(l,u),e.default=u});