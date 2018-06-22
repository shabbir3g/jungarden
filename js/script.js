(function ($) {
	"use strict";

	$(document).ready(function(){
		
		
		$('.navbar-nav li a').addClass('nav-link');
		$('.navbar-nav li ul').addClass('dropdown-menu');
		$('.navbar-nav li.menu-item-has-children').addClass('dropdown');
		//$('.navbar-nav li.menu-item-has-children a').addClass('dropdown-toggle nav-link');
       
			
		var theToggle = document.getElementById('toggle');

		// hasClass
		function hasClass(elem, className) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}
		
		// toggleClass
		function toggleClass(elem, className) {
			var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
			if (hasClass(elem, className)) {
				while (newClass.indexOf(" " + className + " ") >= 0 ) {
					newClass = newClass.replace( " " + className + " " , " " );
				}
				elem.className = newClass.replace(/^\s+|\s+$/g, '');
			} else {
				elem.className += ' ' + className;
			}
		}

		theToggle.onclick = function() {
		   toggleClass(this, 'on');
		   return false;
		}
		
		
		$(window).scroll(function () {
		 var shrinkHeader = 200;
		  jQuery(window).scroll(function() {
			var scroll = getCurrentScroll();
			  if ( scroll >= shrinkHeader ) {
				   jQuery('.header-top-fixed').addClass('shrink');
				}
				else {
					jQuery('.header-top-fixed').removeClass('shrink');
				}
		  });
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
			}
		});
		
		
		$(window).scroll(function () {
            if ($(this).scrollTop() > 600) {
                $('.to-top a').fadeIn();
            } else {
                $('.to-top a').fadeOut();
            }
        });
		   $('.to-top a').on('click',function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
			});
        
		mixitup('.blog-post');
			
	});

}(jQuery));