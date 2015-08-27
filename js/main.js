


/* Javascript general */
$(document).ready( function() {
	
	$('html').niceScroll();
    if ($('.scroll-list').length > 0) {
		$('.scroll-list').niceScroll();
    }
    /*-------------------------------------- Click modales ---------------------------------------------*/

    $(document).on("click",".select-modal .option-selected", function (e) {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).parent().find('.option-wrapper').removeClass('active');
        }
        else{
            $(this).addClass('active');
            $(this).parent().find('.option-wrapper').addClass('active');
        }
    });

	/*---------------------------- Menu left animations ----------------------------*/

	$('header .menu-box').click(function(e) {
		if($(this).hasClass('clicked')) {
			$(this).removeClass('clicked');
			$('.menu-left').removeClass('fx-menu-open');
			$('.wrapper-nav').removeClass('fx-menu-push-toright');
			$('.page').removeClass('fx-menu-push-toright');
			setTimeout(function(){ $('.page').addClass('right');}, 1000);
			setTimeout(function(){ $('.wrapper-nav').addClass('right');}, 1000);
		}
		else{
			$(this).addClass('clicked');
			$('.page').removeClass('right');
			$('.wrapper-nav').removeClass('right');
			$('.menu-left').addClass('fx-menu-open');
			$('.wrapper-nav').addClass('fx-menu-push-toright');
			$('.page').addClass('fx-menu-push-toright');
		}
	});

	$('header .menu-left .close-icon').click(function(e) {
		$('header .menu-box').removeClass('clicked');
		$('.menu-left').removeClass('fx-menu-open');
		$('.wrapper-nav').removeClass('fx-menu-push-toright');
		$('.page').removeClass('fx-menu-push-toright');	
		setTimeout(function(){ $('.page').addClass('right');}, 1000);
		setTimeout(function(){ $('.wrapper-nav').addClass('right');}, 1000);
	});

	/*---------------------------- Menu right animations ----------------------------*/
	function showPanel(now){
			now.addClass('clicked');

			$('.page').removeClass('left');
			$('.wrapper-nav').removeClass('left');

			$('.menu-right').addClass('fx-menu-open');
			$('.wrapper-nav').addClass('fx-menu-push-toleft');
			$('.page').addClass('fx-menu-push-toleft');

			changePanel(now);			
	}

	function hidePanel(){

			$('.menu-right').removeClass('fx-menu-open');
			$('.wrapper-nav').removeClass('fx-menu-push-toleft');
			$('.page').removeClass('fx-menu-push-toleft');
			setTimeout(function(){ $('.page').addClass('left');}, 500);
			setTimeout(function(){ $('.wrapper-nav').addClass('left');}, 500);
			setTimeout(function(){ $('.notifications').hide();}, 500);
			setTimeout(function(){ $('.widgets').hide();}, 500);
			$('.clicked').removeClass('clicked');
	}


	function changePanel(now){
		if($('.clicked').length > 1){
				$('.clicked').removeClass('clicked');
				hidePanel();
				setTimeout(function(){ 
					showPanel(now);
					if ($('header .user-notifications').hasClass('clicked')) {
						$('.notifications').show();
					}
					if ($('.page-info .btn.modify-btn').hasClass('clicked')) {
						$('.widgets').show();
					}
				}, 500);
			
		}
		else{

					if ($('header .user-notifications').hasClass('clicked')) {
						$('.notifications').show();
					}
					if ($('.page-info .btn.modify-btn').hasClass('clicked')) {
						$('.widgets').show();
					}
		
		}
		
	}

	$('header .user-notifications').click(function(e) {
		if($(this).hasClass('clicked')) {
			hidePanel();
		}
		else{
			showPanel($(this));
		}
	});

	$('.page-info .btn.modify-btn').click(function(e) {
		if($(this).hasClass('clicked')) {
			hidePanel();
		}
		else{
			showPanel($(this));
		}
	});

	$('header .menu-right .close-icon').click(function(e) {
		hidePanel();
	});

	/*---------------------------- Open day routine ----------------------------*/

	$('.days-routine-list .top-bar').click(function(e) {
		if($(this).hasClass('open')) {
			$(this).removeClass('open');
			$(this).parent().find('.exercise-list').removeClass('open');
		}
		else{
			$('.top-bar').removeClass('open');
			$('.exercise-list').removeClass('open');
			$(this).addClass('open');
			$(this).parent().find('.exercise-list').addClass('open');		}
	});

	/*---------------------------- Open modal routine success ----------------------------*/

	$('.days-routine-list .exercise-list .save-btn').click(function(e) {
			$('.modal-success').addClass('active');
			setTimeout(function(){ 
				$('.modal-success').removeClass('active');	
			}, 2500);
	});

	/*---------------------------- Masonry dashboard ----------------------------*/

	var $container = $('.grid');
	// init
	$container.packery({
	  itemSelector: '.grid-item',
	  columnWidth: ".grid-sizer",
	  rowHeight: 205,
	});

	/*---------------------------- Masonry dashboard draggables ----------------------------*/

	// get item elements, jQuery-ify them
	var $itemElems = $container.find('.grid-item');
	// make item elements draggable
	$itemElems.draggable();
	// bind Draggable events to Packery
    $container.packery( 'bindUIDraggableEvents', $itemElems );
	 
	/*---------------------------- Masonry dashboard remove item ----------------------------*/

	 $container.on( 'click', '.grid-item .close-icon', function( event ) {
		// remove clicked element
		$container.packery( 'remove', $(event.target).parents('.grid-item'));
		// layout remaining item elements
		$container.packery();
	});

	/*---------------------------- Masonry dashboard edit note ----------------------------*/

 	$('.grid .grid-item .edit-icon').click(function(e) {
 		$(this).parents('.grid-item').addClass('edit-mode');
	});
	$('.grid .grid-item .edit-wrapper .cancel').click(function(e) {
 		$(this).parents('.grid-item').removeClass('edit-mode');
	});
	$('.grid .grid-item .edit-wrapper .accept').click(function(e) {
 		$(this).parents('.grid-item').removeClass('edit-mode');
	});

	/*---------------------------- Masonry dashboard video note ----------------------------*/

 	$('.grid .grid-item .icon-play').click(function(e) {
 		$(this).parents('.grid-item').addClass('video-mode'); 
 	
   
	});
	
	$(window).load(function() {
        $('.flash-out').removeClass('flash-out').addClass('flash-in');
	});
})