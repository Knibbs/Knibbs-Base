// Generated by CoffeeScript 1.6.1
/* Responsive navigation javascript
*/
(function(){(function(e,t){"use strict";return e.fn.knibbsmenu=function(n){return this.each(function(){var r,i,s,o,u,a,f,l,c,h,p,d,v;d=e.extend({breakpoint:768,responsivePattern:"toggle",animationSpeed:250},n);u=e(this);o=u.find("li");f=e(t);v=void 0;r=e("body");u.addClass("knibbsmenu");i=e(".knibbs-button");l=function(){var t;u.find("li").each(function(){var t;t=e(this);if(t.has("ul").length)return t.addClass("with-ul").find("ul").hide()});t=u.find(".with-ul");t.append('<span class="navicon"></span>');if(d.responsivePattern==="toggle")return u.addClass("knibbs-toggle");if(d.responsivePattern==="off-canvas"){u.addClass("knibbs-offcanvas")}};l();a=e(".knibbsmenu .navicon");s=e(".knibbs-inner");c=!1;i.on("click",function(){u=e(".knibbsmenu.knibbs-sm");if(u.hasClass("knibbs-toggle"))return u.slideToggle(d.animationSpeed);if(u.hasClass("knibbs-offcanvas")){if(c){s.animate({left:0},{duration:d.animationSpeed});u.animate({left:"-70%"},{duration:d.animationSpeed});return c=!1}s.animate({left:"70%"},{duration:d.animationSpeed});u.animate({left:0},{duration:d.animationSpeed});return c=!0}});h=function(){u.find("li ul").slideUp(200);if(d.responsivePattern==="off-canvas"&&e(".knibbsmenu.knibbs-sm").length)return function(){u=e(".knibbsmenu.knibbs-sm");s.animate({left:0},{duration:d.animationSpeed});u.animate({left:"-70%"},{duration:d.animationSpeed});return c=!1}()};p=function(){var t;t=f.width();if(t<=d.breakpoint){if(e(".knibbs-lg").length){h();u.hasClass("knibbs-toggle")&&u.hide()}u.removeClass("knibbs-lg").addClass("knibbs-sm");i.show();o.off("mouseenter mouseleave");a.off("click");return a.on("click",function(t){var n,r;t.stopPropagation();r=e(this);n=r.parent(".with-ul").children("ul");return n.stop(!0,!0).slideToggle({duration:d.animationSpeed})})}h();u.removeClass("knibbs-sm").addClass("knibbs-lg");i.hide();u.hasClass("knibbs-toggle")&&u.slideDown();o.off("mouseenter mouseleave");a.off("click");return o.on("mouseenter",function(){return e(this).children("ul").stop(!0,!0).slideDown(d.animationSpeed)}).on("mouseleave",function(){return e(this).children("ul").stop(!0,!0).slideUp(d.animationSpeed)})};p();return f.resize(function(){clearTimeout(v);return v=setTimeout(p,200)})})}})(jQuery,window)}).call(this);