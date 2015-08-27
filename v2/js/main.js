$(function() {

	$('.register-login-wrapper a.login').click(function() {
		$('.login-wrapper').css({height: "330px",opacity:"1"});
		$('.register-wrapper').css({height: "0px"});
	});

	$('.login-wrapper a.close-icon').click(function() {
		$('.login-wrapper').css({height: "0px"});
	});

	$('.register-login-wrapper button.register').click(function() {
		$('.register-wrapper').css({height: "410px",opacity:"1"});
		$('.login-wrapper').css({height: "0px"});
	});
	$('.register-wrapper a.close-icon').click(function() {
		$('.register-wrapper').css({height: "0px"});
		$('#registerFormStep2').removeClass('active');
		$('#registerFormStep1').addClass('active');
		$('.register-page').removeClass('active');
		$('.register-page:first-child').addClass('active');
	});

	$('#registerFormStep1 button').click(function() {
		$( ".register-wrapper" ).animate({
		    height: "0px",
		},0, function() {

		  	$('#registerFormStep1').delay( 1000 ).removeClass('active');
		  	$('.register-page').delay( 500 ).removeClass('active');
		  	$('.register-page:last-child').delay( 500 ).addClass('active');
			$( ".register-wrapper" ).delay( 500 ).animate({
			    height: "475px",
			}, 0, function() {
			  	$('#registerFormStep2').delay( 500 ).addClass('active');
		  	});
	    });
 });

	$('#cms-tree-items > ul > li > a').click(function(e) {
		e.preventDefault();
		var $this = $(this);

		/*if($(this).parent().find('ul').first().length > 0 && $(this).parent().find('ul').hasClass('show')) {
			$(this).parent().find('ul').removeClass('show');
			$(this).parent().find('span').removeClass('show');
			$(this).parent().find('ul').stop().slideUp(250);
		}
		else */
		if($(this).parent().find('ul').first().length > 0 && $(this).parent().find('ul').first().css('display') == 'none') {
			$(this).parent().find('ul').addClass('show');
			$(this).parent().find('span').addClass('show');
			$('#cms-tree-items > ul > li > ul').slideUp(250, function() {
				$('#cms-tree-items > ul > li > a span').removeClass('show');
				$this.parent().find('a span').addClass('show');
				$this.parent().find('ul').stop().slideDown(250);
			});
		}
	});

	$('#submit-search').click(function(e) {
		e.preventDefault();

		if($('#search-value').val() != "") {
			$('#search-block').trigger('submit');
		}
	});

	$('#newsletter, #do-partner').submit(function(e) {
		var input = $(this).find('input[type="text"]').val();

		if(input == "") {
			e.preventDefault();
			alert("El correo electrónico es obligatorio.");
			return;
		}

		if(!validateEmail(input)) {
			e.preventDefault();
			alert("El correo electrónico es erróneo.");
			return;
		}
	});

	/*var currentCss = 0;

	$('.zoom-in-font').click(function(e) {
		e.preventDefault();
		currentCss++;

		switch(currentCss) {
			case -2: break;
			case -1: break;
			case 0: $('#css-link').attr('href', 'css/main.css');break;
			case 1: $('#css-link').attr('href', 'css/main@2x.css');break;
			case 2: alert(2);break;
		}
	});

	$('.zoom-out-font').click(function(e) {
		e.preventDefault();
		currentCss--;

		switch(currentCss) {
			case -2: break;
			case -1: break;
			case 0: $('#css-link').attr('href', 'css/main.css');break;
			case 1: alert(1);break;
			case 2: alert(2);break;
		}
	});*/
});