// remove the "$" namespace from jQuery, avoids conflicts with other libraries
jQuery.noConflict();

// closure, mapping jQuery to $, window, document and undefined - useful for minifing tools
(function($, window, document, undefined){


// plugins




// pseudo - jQuery plugin - adds pseudo elements to unsupporting browsers - by Valentin Agachi http://agachi.name
if ($.browser.msie && $('html').hasClass('ie7')) // only IE<8
//if ($.browser.msie) // all IEs, due to PIE
{

$.fn.pseudo = function()
{
	if (!this.length) return this;

	var props = ['before', 'after'],
		patterns = {
			text: /^['"]?(.+?)["']?$/,
			url: /^url\(["']?(.+?)['"]?\)$/
		};

	return this.each(function(k){
		var t = $(this), p, c, txt, url,
			id = this.id.length ? this.id + '-' + p : p + '-' + k;
		for (var i in props)
		{
			p = props[i];
			c = this.currentStyle[p];
			if (c && c.length) {
				txt = c.match(patterns.text)[1];
				url = txt.match(patterns.url);
				c = (url && url.length > 1) ? '<img src="' + url[1] + '"/>' : txt;
			} else {
				c = '';
			}
			t[p == 'before' ? 'prepend' : 'append'](
				$('<span class="' + p + '" id="' + id + '">' + c + '</span>')
			);
		}
	});
};

}




$.support['placeholder'] = !!('placeholder' in document.createElement('input')) && !$.browser.opera;

$.fn.placeholders = function(args)
{
	// placeholders - jQuery plugin - adds placeholders to text inputs - by Valentin Agachi - http://agachi.name
	if (!this.length) return this;

	var opts = $.extend({
		className: 'placeholder'
	}, args || {});

	return this.each(function(){
		var t = this, $t = $(t), ph = $t.attr('placeholder'),
			cls = opts.className, key = '_ph';

		if ((!ph || !ph.length) && t.id)
			ph = $('label[for="' + t.id + '"]').hide().text();
		if ((!ph || !ph.length) && t.value.length)
			ph = t.value;

		if ($.support['placeholder'])
		{
			$t.attr('placeholder', ph);
		}
		else
		{
			t.value = ph;
			$.data(t, key, ph);

			$t.addClass(cls).bind('focus', function(){
				$t.removeClass(cls);
				if (this.value == $.data(this, key))
					this.value = '';
			}).bind('blur', function(){
				if (this.value == '')
				{
					$t.addClass(cls);
					this.value = $.data(this, key);
				}
			});
		}
	});
};
if (!$.support['placeholder'])
{
	$('form').bind('submit', function(){
		$(this).find('input, textarea').triggerHandler('focus');
	});
}


// boxLinks - jQuery plugin - transforms block elements into clickable items - by Valentin Agachi http://agachi.name
$.fn.boxLinks = function(args)
{
	if (!this.length) return this;

	var opts = $.extend({
		trigger: 'a',
		classHover: 'hover',
		classFocus: 'focus',
		onEnter: null,
		onLeave: null,
		onClick: function(){
			window.location = $(this).attr('href');
		}
	}, args || {});

	this.has(opts.trigger)
		.each(function(){
			var self = $(this), t = self.css('cursor', 'pointer').find(opts.trigger);
			$.data(this, 'trigger', t);
			$.data(t[0], 'parent', self);
		}).bind('mouseenter', function(){
			var t = $.data(this, 'trigger'), self = $(this).addClass(opts.classHover);
			opts.onEnter && opts.onEnter(self);
			window.status = t.attr('href');
		}).bind('mouseleave', function(){
			var self = $(this).removeClass(opts.classHover);
			opts.onLeave && opts.onLeave(self);
			window.status = '';
		}).bind('click', function(ev){
			var t = $.data(this, 'trigger');
			t.trigger('click');
			ev.stopPropagation();
			return false;
		});

	this.find('a').not(opts.trigger).
		bind('mouseenter', function(){
			$.data(this, 'parent', $(this).parents('.' + opts.classHover).removeClass(opts.classHover));
		}).
		bind('mouseleave', function(){
			$.data(this, 'parent').addClass(opts.classHover);
		});

	this.find(opts.trigger).addClass('trigger')
		.bind('focus', function(){
			var p = $.data(this, 'parent');
			p.addClass(opts.classFocus);
		}).bind('blur', function(){
			var p = $.data(this, 'parent');
			p.removeClass(opts.classFocus);
		}).click(function(ev){
			opts.onClick.apply(this);
			ev.stopPropagation();
			return false;
		});

	this.find('a').not(opts.trigger).click(function(ev){
		ev.stopPropagation();
	});

	return this;
};


// equalHeights - jQuery plugin - forces elements to have the same height (maximum) - by Valentin Agachi http://agachi.name
$.fn.equalHeights = function(add)
{
	var m = 0;
	this.each(function(){
		m = Math.max(m, $(this).outerHeight());
	});
	return this.each(function(){
		var t = $(this), p = 0;
		$.each(['borderTopWidth', 'paddingTop', 'paddingBottom', 'borderBottomWidth'], function(i,n){
			var v = parseInt(t.css(n));
			p += (isNaN(v) ? 0 : v);
		});
		var h = m - p;
		if (add && add[this.id])
			h += add[this.id];
		if ($.browser.msie && $.browser.version <= 6)
			t.css('height', h);
		t.css('min-height', h);
	});
};

$.scrollingHorizontal =
{
	// scrolling plugin helper
	wheel: false,
	slide: function(event, ui)
	{
		var sl = $(ui.handle.parentNode),
			hs = $.data(sl[0], 'ha') - $.data(sl[0], 'hw'),
			t = (- hs * (ui.value) / 100);
		if (hs > 0)
			$('.scroll-area', sl.parents('.scroll-wrap')).css('left', t + 'px');
	},
	up: function(){
		var sb = $(this).parents('.scroll-bar').find('.scroll-bar-in'),
			val = sb.slider('value');
		sb.slider('value', val + 5 * ($.scrollingHorizontal.wheel ? 3 : 1));
		return false;
	},
	dn: function(){
		var sb = $(this).parents('.scroll-bar').find('.scroll-bar-in'),
			val = sb.slider('value');
		sb.slider('value', val - 5 * ($.scrollingHorizontal.wheel ? 3 : 1));
		return false;
	},
	reset: function(wrap)
	{
		var area = wrap.find('.scroll-area');
		$.data(sb[0], 'ha', area.width());
		$.data(sb[0], 'hw', wrap.width());
		wrap.find('.scroll-bar-in').slider('value', 100);
		area.css('left', 0);
	}
};

$.fn.scrollingHorizontal = function(args)
{
	// scrolling - jQuery plugin - creates custom scrolling areas - by Valentin Agachi - http://agachi.name
	if (!this.length) return this;

	var opts = $.extend({
			handleWidth: 50,
			orientation: 'horizontal'
		}, args || {});

	return this.each(function(){
		var wrap = $(this), initialWidth = 0;

		wrap.children().each( function(){ initialWidth += $(this).outerWidth(true); });
		wrap.addClass('scroll-wrap scroll-horizontal').wrapInner('<div class="scroll-area"></div>');

		var area = wrap.find('.scroll-area').width(initialWidth),
			ha = area.width(),
			hw = wrap.width();

		if (ha > hw)
		{
			wrap.append('<div class="scroll-bar"><div class="scroll-bar-in"></div></div>');
			var sbout = wrap.find('.scroll-bar').css({
					paddingRight: opts.handleWidth + 'px'
					//width: hw - 60
				}),
				sb = wrap.find('.scroll-bar-in');
			$.data(sb[0], 'ha', ha);
			$.data(sb[0], 'hw', hw);

			sb.width(sbout.width()).slider({
				orientation: opts.orientation,
				min: 0,
				max: 100,
				slide: $.scrollingHorizontal.slide,
				change: $.scrollingHorizontal.slide
			}).slider('value', 0);
			sb.find('.ui-slider-handle').width(opts.handleWidth);

			wCL = wrap.find('.completed-last');
			if (wCL.length) {
				sb.slider('value', Math.floor(wCL.position()['left'] / initialWidth * 100));
			}
		}
		wrap.bind('updateScroll', function(){
			var ha = area.width();
			$.data(sb[0], 'ha', ha);
		}).bind('mousewheel', function(ev, delta){
			$.scrollingHorizontal.wheel = true;
			$.scrollingHorizontal[(delta < 0 ? 'up' : 'dn')].apply(sb);
			$.scrollingHorizontal.wheel = false;
			return false;
		});
	});
};




// document ready method
$(function(){


	var $win = $(window),
		$doc = $(document),
		$body = $(document.body),
		$page = $('#page'),
		$header = $('#header'),
		$container = $('#container'),
		$footer = $('#footer');

	if ($.fn.pseudo) {
		$('#content, #footer1, .rank, #content-featured h3, .featured-simple ul, .slideshow .buttons	a').pseudo();
		//$('.box-extras span').pseudo();
	}

	if ($.fn.jCarouselLite)
	{
		$('#slideshow-simple').each(function(){
			var sl = $(this),
				slider = sl.find('.slider'),
				slides = slider.find('> ul > li'),
				btns = sl.find('.buttons a');

			slides.each(function(i){
				if (!this.id) this.id = sl.attr('id') + '-' + i;
				//s += '<a href="#' + this.id + '" id="trigger-' + this.id + '">' + (i + 1) + '</a>';
				btns.push('#trigger-' + this.id);
			});
			//sl.append('<p class="buttons">' + s + '</p>');

			// remove ".disabled" from "a.prev" this if slideshow is circular
			sl.append('<p class="nav"><a href="#" class="prev"></a><a href="#" class="next"></a></p>');

			slider.jCarouselLite({
				btnGo: btns,
				btnPrev: 'a.prev',
				btnNext: 'a.next',
				visible: 1,
				scroll: 1,
				speed: 1000,
				auto: 3000,
				circular: true,
				afterEnd: function(li){
					btns.removeClass('active');
					console.log(li);
					$('#trigger-' + li[0].id).addClass('active');
				}
			});

			btns.first().addClass('active');
		});


		var slideshowSpeed = 1000,
			slideshowAuto = 5000;

		$('#slideshow-left').each(function(){
			var slL = $(this),
				sliderL = slL.find('.slider'),
				slidesL = sliderL.find('> ul > li');

			slidesL.each(function(i){
				if (!this.id) this.id = slL.attr('id') + '-' + i;
				//s += '<a href="#' + this.id + '" id="trigger-' + this.id + '">' + (i + 1) + '</a>';
				//btns.push('#trigger-' + this.id);
			});
			//sl.append('<p class="buttons">' + s + '</p>');

			// remove ".disabled" from "a.prev" this if slideshow is circular
			//sl.append('<p class="nav"><a href="#" class="prev"></a><a href="#" class="next"></a></p>');

			sliderL.jCarouselLite({
				//btnGo: btns,
				visible: 1,
				scroll: 1,
				speed: slideshowSpeed,
				auto: slideshowAuto,
				circular: true
			});
		});

		$('#slideshow-right').each(function(){
			var slR = $(this),
				sliderR = slR.find('.slider'),
				slidesR = sliderR.find('> ul > li');

			slidesR.each(function(i){
				if (!this.id) this.id = slR.attr('id') + '-' + i;
				//s += '<a href="#' + this.id + '" id="trigger-' + this.id + '">' + (i + 1) + '</a>';
				//btns.push('#trigger-' + this.id);
			});
			//sl.append('<p class="buttons">' + s + '</p>');

			// remove ".disabled" from "a.prev" this if slideshow is circular
			//sl.append('<p class="nav"><a href="#" class="prev"></a><a href="#" class="next"></a></p>');

			sliderR.jCarouselLite({
				//btnGo: btns,
				visible: 2,
				scroll: 1,
				speed: slideshowSpeed,
				auto: slideshowAuto,
				circular: true,
				vertical: true
			});
		});

	}


	var appenders = $('.content-footer a').click(function(){
		var t = this, $t = $(t),
			type = $t.data('type')?$t.data('type'):'casinos-big',
			toAppend = $t.data('append')?$($t.data('append')):$t.parent();

		$.get('php/load-more.php', { type : type }, function(data) {

			toAppend.append(data);
		});
		return false;
	});


	var detailOpeners = $('.btn-2').click(function(){
		var t = this, $t = $(t), detailBox = $t.closest('.widget').find('.more-content');

		if (!$t.hasClass('opened')) {
			$t.addClass('opened').html('-');
			detailBox.slideDown();
		} else {
			$t.removeClass('opened').html('+');
			detailBox.slideUp();
		}

		return false;
	});

	if ($.fn.placeholders)
	{
		$('input[placeholder], textarea[placeholder]').placeholders();
	}

	if ($.fn.boxLinks)
	{
		$('#id li').boxLinks();
	}

	if ($.fn.equalHeights)
	{
		$('#col1, #col2').equalHeights();
	}

	if ($.fn.scrollingHorizontal)
	{
		$('#content-featured .scroll').scrollingHorizontal();
	}

    $(".rollover").hover(
        function(){
            img_src = $(this).attr('src'); //grab original image
            new_src = $(this).attr('rel'); //grab rollover image
            $(this).attr('src', new_src); //swap images
            $(this).attr('rel', img_src); //swap images
        },
        function(){
            $(this).attr('src', img_src); //swap images
            $(this).attr('rel', new_src); //swap images
        }
    );

    var cache = new Array();

    $(".rollover").each(function(){
        var cacheImage = document.createElement('img');
        cacheImage.src = $(this).attr('rel');
        cache.push(cacheImage)
    })

});


})(jQuery, window, document);



// DEV-START

// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
	log.history = log.history || [];
	log.history.push(arguments);
	if(this.console) {
		arguments.callee = arguments.callee.caller;
		var newarr = [].slice.call(arguments);
		(typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
	}
};

// make it safe to use console.* always
window.console=(function(b){function c(){}for(var d="assert,debug,dir,error,info,log,timeStamp,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}return b})(window.console||{});

// DEV-END
