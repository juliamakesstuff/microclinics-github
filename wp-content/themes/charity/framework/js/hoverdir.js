(function(e,t){e.HoverDir=function(t,n){this.$el=e(n);this._init(t)};e.HoverDir.defaults={hoverDelay:0,reverse:false};e.HoverDir.prototype={_init:function(t){this.options=e.extend(true,{},e.HoverDir.defaults,t);this._loadEvents()},_loadEvents:function(){var t=this;this.$el.on("mouseenter.hoverdir, mouseleave.hoverdir",function(n){var r=e(this),i=n.type,s=r.find("span"),o=t._getDir(r,{x:n.pageX,y:n.pageY}),u=t._getClasses(o);s.removeClass();if(i==="mouseenter"){s.hide().addClass(u.from);clearTimeout(t.tmhover);t.tmhover=setTimeout(function(){s.show(0,function(){e(this).addClass("da-animate").addClass(u.to)})},t.options.hoverDelay)}else{s.addClass("da-animate");clearTimeout(t.tmhover);s.addClass(u.from)}})},_getDir:function(e,t){var n=e.width(),r=e.height(),i=(t.x-e.offset().left-n/2)*(n>r?r/n:1),s=(t.y-e.offset().top-r/2)*(r>n?n/r:1),o=Math.round((Math.atan2(s,i)*(180/Math.PI)+180)/90+3)%4;return o},_getClasses:function(e){var t,n;switch(e){case 0:!this.options.reverse?t="da-slideFromTop":t="da-slideFromBottom";n="da-slideTop";break;case 1:!this.options.reverse?t="da-slideFromRight":t="da-slideFromLeft";n="da-slideLeft";break;case 2:!this.options.reverse?t="da-slideFromBottom":t="da-slideFromTop";n="da-slideTop";break;case 3:!this.options.reverse?t="da-slideFromLeft":t="da-slideFromRight";n="da-slideLeft";break}return{from:t,to:n}}};var n=function(e){if(this.console){console.error(e)}};e.fn.hoverdir=function(t){if(typeof t==="string"){var r=Array.prototype.slice.call(arguments,1);this.each(function(){var i=e.data(this,"hoverdir");if(!i){n("cannot call methods on hoverdir prior to initialization; "+"attempted to call method '"+t+"'");return}if(!e.isFunction(i[t])||t.charAt(0)==="_"){n("no such method '"+t+"' for hoverdir instance");return}i[t].apply(i,r)})}else{this.each(function(){var n=e.data(this,"hoverdir");if(!n){e.data(this,"hoverdir",new e.HoverDir(t,this))}})}return this}})(jQuery)

/* ------------------------------------------------------------------------ */
/* Initialize Hoverdir
/* ------------------------------------------------------------------------ */

jQuery(function() {
		jQuery('.portfolio-item').hoverdir();
	});

/* ------------------------------------------------------------------------ */
/* EOF
/* ------------------------------------------------------------------------ */