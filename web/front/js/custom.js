// Pretty Photo
(function($) {
 "use strict";
	jQuery('a[data-gal]').each(function() {
			jQuery(this).attr('rel', jQuery(this).data('gal'));
		});     
		jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
})(jQuery);


// Grid Effects
(function($) {
"use strict";
$(function() {
		Grid.init();
		});
	
	$('#pocp1').pullOutContentPanel({
		pocp_scrollbars : true,
		pocp_showonload: false,
		pocp_pg_overlay: true,
		pocp_clickout: false
	});
})(jQuery);
	
// CP Menu
(function($) {
 "use strict";
			var $mainNav    = $('#cp-nav').children('ul'),
		optionsList = '<option value="" selected>Navigate...</option>';
		$mainNav.on('mouseenter', 'li', function() {
			var $this    = $(this),
				$subMenu = $this.children('ul');
			if( $subMenu.length ) $this.addClass('hover');
			$subMenu.hide().stop(true, true).fadeIn(500);
		}).on('mouseleave', 'li', function() {
			$(this).removeClass('hover').children('ul').stop(true, true).fadeOut(50);
		});
	
		
	$("#cp-nav").naver({
		animated: true
	});
})(jQuery);


// DM Top
(function($) {
 "use strict";
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 1) {
			jQuery('.dmtop').css({bottom:"25px"});
		} else {
			jQuery('.dmtop').css({bottom:"-100px"});
		}
	});
	jQuery('.dmtop').click(function(){
		jQuery('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});
})(jQuery);


// Tooltip
(function($) {
 "use strict";
    $('.social, .clients').tooltip({
      selector: "a[data-toggle=tooltip]"
    })

    $('.social, .clients').tooltip()
})(jQuery);


// Skills Bar
(function($) {
 "use strict";
    var maxWidth = 290;
    $('.skill-level').each(function () {
        animateSkill($(this));
    });
    function animateSkill(skillLevelContainer) {
    var level = parseInt(skillLevelContainer.attr('data-value'));
	level = level*85/100;
    var w = maxWidth * level / 100;
    skillLevelContainer.animate({ width: level+'%' }, {
        duration: 3000,
        step: function (currentWidth) {
            var percent = parseInt(currentWidth / maxWidth * 100);
            if (isNaN(percent))
                percent = 0;
            //jQuery(this).parent().find('.skill-percent').html(percent + '%');
        }
    });
}
    var bars = $('.bars')
    $('#skills li').click(function () {
        var previousSection = $($('#skills .selected a').attr('href'));
        $('#skills li').removeClass('selected');
        $(this).addClass('selected');
        previousSection.hide();
        var currentSection = $($(this).find('a').attr('href')).show();
        currentSection.find('.skill-level').css('width', '0px').each(function () {
            animateSkill($(this));
        });
        return false;
    });
})(jQuery);

	
// Animate Count
(function($) {
 "use strict";
		function count($this){
			var current = parseInt($this.html(), 10);
			current = current + 1; /* Where 50 is increment */
	
		$this.html(++current);
		if(current > $this.data('count')){
			$this.html($this.data('count'));
		} else {    
			setTimeout(function(){count($this)}, 50);
		}
	}        
	
	$(".stat-count").each(function() {
	  $(this).data('count', parseInt($(this).html(), 10));
	  $(this).html('0');
	  count($(this));
	 });
})(jQuery);
				 
// Carousel Sliders
(function($) {
 "use strict";
      $('.testimonials').flexslider({
        animation: 'fade',
        slideshow: false,
        animationLoop: false,
		directionNav: false,
        controlNav: true,
		prevText: "",
		nextText: "",
      });
	
      $('.recent-posts').flexslider({
        animation: 'fade',
        slideshow: false,
        animationLoop: false,
        controlNav: false,
		prevText: "",
		nextText: "",
      });
})(jQuery);
  	  
// Isotope Masonry Effects
	$.Isotope.prototype._getMasonryGutterColumns = function() {
		var gutter = this.options.masonry.gutterWidth || 0;
		containerWidth = this.element.parent().width();
		this.masonry.columnWidth = this.options && this.options.masonry.columnWidth ||
			this.$filteredAtoms.outerWidth(true) ||
			containerWidth;
		this.masonry.columnWidth += gutter;
		this.masonry.cols = Math.floor(containerWidth / this.masonry.columnWidth);
		this.masonry.cols = Math.max(this.masonry.cols, 1);
	};
	 
	$.Isotope.prototype._masonryReset = function() {
		this.masonry = {};
		this._getMasonryGutterColumns();
		var i = this.masonry.cols;
		this.masonry.colYs = [];
		while (i--) {
			this.masonry.colYs.push( 0 );
		}
	};
	 
	$.Isotope.prototype._masonryResizeChanged = function() {
		var prevColCount = this.masonry.cols;
		this._getMasonryGutterColumns();
		return ( this.masonry.cols !== prevColCount );
	};
	 
	$.Isotope.prototype._masonryGetContainerSize = function() {
		var gutter = this.options.masonry.gutterWidth || 0;
		var unusedCols = 0,
			i = this.masonry.cols;
		while ( --i ) {
			if ( this.masonry.colYs[i] !== 0 ) {
				break;
			}
		  unusedCols++;
		}
		return {
			height : Math.max.apply( Math, this.masonry.colYs ),
			width : ((this.masonry.cols - unusedCols) * this.masonry.columnWidth) - gutter
		};
	};

// Portfolio
(function($) {
"use strict";
		var $container = $('.portfolio'),
			$items = $container.find('.portfolio-item, .blog-item'),
			portfolioLayout = 'fitRows';
	
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
			
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			},
			masonry: {
				
			}
		}, refreshWaypoints());
	
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}
	
		$('nav.portfolio-filter ul a').on('click', function() {
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector }, refreshWaypoints());
			$('nav.portfolio-filter ul a').removeClass('active');
			$(this).addClass('active');
			return false;
		});
	
		function getColumnNumber() { 
			var winWidth = $(window).width(), 
				columnNumber = 1;
	
			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
			
			return columnNumber;
		}       
		
		function setColumns() {
			var winWidth = $(window).width(), 
				columnNumber = getColumnNumber(), 
				itemWidth = Math.floor(winWidth / columnNumber);
			
			$container.find('.portfolio-item, .blog-item').each(function() { 
				$(this).css( { 
					width : itemWidth + 'px' 
				});
			});
		}
	
		function setPortfolio() { 
			setColumns();
			$container.isotope('reLayout');
		}
		
		$container.imagesLoaded(function () { 
			setPortfolio();
		});
	
		$(window).on('resize', function () { 
			setPortfolio();          
		});
})(jQuery);

// DM Animations
(function($) {
 "use strict";
     $('.dmleft').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass('animated fadeInLeft');
		}
	});
     $('.dmright').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass('animated fadeInRight');
		}
	});
	$('.dmup').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass('animated fadeInUp');
		}
	});
	$('.dmflip').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass('animated flipInY');
		}
	});
	$('.dmin').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass('animated bounceIn');
		}
	});
	
	$('.dmx').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass('animated flipInX');
		}
	});
})(jQuery);