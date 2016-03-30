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

$(document).ready(function() {
  var $grid = $('.games-wrapper .fs-row');
      //$sizer = $grid.find('.games__item');

  $grid.shuffle({
    itemSelector: '.games__item',
    easing: 'ease',
    //sizer: $sizer
  });

  $filterOptions = $('.js-filters');

  $filterOptions.on('change', function() {
  	var sort = this.value;
  	$grid.shuffle('shuffle', function($el, shuffle) {
  		return $el.data('cat').length < 10;
		});
  });

  filter = function() {
    if ( hasActiveFilters() ) {
      $grid.shuffle('shuffle', function($el) {
        return itemPassesFilters( $el.data() );
      });
    } else {
      $grid.shuffle( 'shuffle', 'all' );
    }
  }


  $('.js-shuffle-search').on('keyup change', function() {
	  var val = this.value.toLowerCase();
	  $grid.shuffle('shuffle', function($el, shuffle) {

	    // Only search elements in the current group
	    if (shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1) {
	      return false;
	    }

	    var text = $.trim( $el.find('.title').text() ).toLowerCase();
	    return text.indexOf(val) !== -1;
	  });
	});

  // Sort Options

  $('.sort-options').on('change', function() {
  var sort = this.value,
      opts = {};

  // We're given the element wrapped in jQuery
  if ( sort === 'date-created' ) {
    opts = {
      reverse: true,
      by: function($el) {
        return $el.data('date-created');
      }
    };
  } else if ( sort === 'title' ) {
    opts = {
      by: function($el) {
        return $el.data('title').toLowerCase();
      }
    };
  } else if ( sort === 'title-reversed' ) {
    opts = {
    	reverse: true,
      by: function($el) {
        return $el.data('title').toLowerCase();
      }
    };
  }

  // Filter elements
  $grid.shuffle('sort', opts);
});

});

function headHesive(){
	var options = {
	    offset: '.hentry__header',
	    classes: {
	        clone:   'header--clone',
	        stick:   'header--stick',
	        unstick: 'header--unstick'
	    }
	};

	// Initialise with options
	var banner = new Headhesive('#header', options);
}

$(document).ready(function(){
	mobileMenu();
	openModal();
	headHesive();
	$('.hero--fixed').scrollToFixed();
	$('.home__nav').onePageNav({
		currentClass: 'current'
	});
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40,
		positionProperty: 'transform'
	});
});