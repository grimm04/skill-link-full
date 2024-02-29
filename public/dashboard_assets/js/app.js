document.getElementById('wrapper').style.minHeight = window.outerHeight+'px';
document.querySelector('[data-target="#menu"]').addEventListener('click', function(ev) {
	ev.preventDefault();
	var menu = $('.sidebar-menu');
	(menu.hasClass('in')) ? menu.removeClass('in') : menu.addClass('in');
	ev.stopPropagation();
});

$('.sidebar-menu').click(function(ev) {
	ev.stopPropagation();
});

$(document).click(function(ev) {
	var menu = $('.sidebar-menu');
	menu.removeClass('in');
});