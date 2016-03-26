// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function openModal(){
	$('.open--modal').magnificPopup({
		type: 'inline',
		preloader: false,
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	$('.open--image').magnificPopup({
		type: 'image',
		//preloader: false,
		//modal: true
	});
}

$('input#search').quicksearch('.games__item',{
	noResults: '#noresults',
	//show: function () {
	//   $(this).addClass('show');
	//},
	//hide: function () {
	//   $(this).removeClass('show');
	//}
});

$(document).ready(function(){
	mobileMenu();
	openModal();
	$('.hero--fixed').scrollToFixed();
	$('.home__nav').onePageNav({
		currentClass: 'current'
	});
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});
});