!function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){"use strict";n.r(e);n(2),n(1)},function(module,exports){function calculation(t){$("#calculation").text(t)}function reset(){$("#calculation").text(""),$("#answer").text("0")}function getTotal(total){-1!=total.indexOf("x")?total=total.replace(/\x/g,"*"):-1!=total.indexOf("÷")&&(total=total.replace(/\÷/g,"/")),$("#answer").text(eval(total)),$("#post-answer").val(eval(total))}function getBrowser(){let t,e=navigator.userAgent,n=navigator.appName;n=-1!=(t=e.indexOf("Opera"))?"Opera":-1!=(t=e.indexOf("MSIE"))?"Microsoft Internet Explorer":-1!=(t=e.indexOf("Chrome"))?"Chrome":-1!=(t=e.indexOf("Safari"))?"Safari":-1!=(t=e.indexOf("Firefox"))?"Firefox":"Unknown",$("#browser").val(n)}$(document).ready(function(){let t="";$(".button").on("click",function(e){var n=$(this).text();"AC"===n?(reset(),t=""):isNaN(n)&&"."!==n?"÷"===n||"x"===n||"+"===n||"-"===n?(calculation(t+=$(this).text()),operator=n):"="===n&&(getTotal(t),calculation(t+=$(this).text()),$("#calculation").text(""),t=""):calculation(t+=$(this).text())})}),getBrowser()},function(t,e){}]);