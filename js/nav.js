$(document).ready(function() {
		   var stickyNavTop = $('#topnav').offset().top;

		   var stickyNav = function(){
		   var scrollTop = $(window).scrollTop();

		   if (scrollTop > stickyNavTop) { 
			  $('#topnav').addClass('sticky');
		   } else {
			  $('#topnav').removeClass('sticky');
			}
		   };

		   stickyNav();

		   $(window).scroll(function() {
			  stickyNav();
		   });
		   });