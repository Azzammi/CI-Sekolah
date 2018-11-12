$(function(){
	
	var menu = $('#twd-menu'),
		pos = menu.offset();
		
		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+menu.height() && menu.hasClass('navbar-static-top')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('navbar-static-top').addClass('navbar-fixed-top').fadeIn('fast');
				});
			} else if($(this).scrollTop() <= pos.top && menu.hasClass('navbar-fixed-top')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('navbar-fixed-top').addClass('navbar-static-top').fadeIn('fast');
				});
			}
		});

});