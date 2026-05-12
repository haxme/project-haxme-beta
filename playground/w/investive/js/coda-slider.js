// This is the slider script
$(document).ready(function () {

	var $panels = $('#slider .scrollContainer > div');
	var $container = $('#slider .scrollContainer');

	// if false, we'll float all the panels left and fix the width 
	// of the container
	var horizontal = true;

	// float the panels left if we're going horizontal
	if (horizontal) {
		$panels.css({
			'float' : 'left',
			'position' : 'relative' // IE fix to ensure overflow is hidden
		});

		// calculate a new width for the container (so it holds all panels)
		$container.css('width', $panels[0].offsetWidth * $panels.length);
	}

	// collect the scroll object, at the same time apply the hidden overflow
	// to remove the default scrollbars that will appear
	var $scroll = $('#slider .scroll').css('overflow', 'hidden');

	// apply our left + right buttons
	$scroll
		.before('<img class="scrollButtons left" src="img/slider/scroll_left.png" />')
		.after('<img class="scrollButtons right" src="img/slider/scroll_right.png" />');

	// handle nav selection
	function selectNav() {
		$(this)
			.parents('ul:first')
				.find('a')
					.removeClass('selected')
				.end()
			.end()
			.addClass('selected');
	}

	$('#slider .navigation').find('a').click(selectNav);

	// go find the navigation link that has this target and select the nav
	function trigger(data) {
		var el = $('#slider .navigation').find('a[href$="' + data.id + '"]').get(0);
		selectNav.call(el);
	}

	if (window.location.hash) {
		trigger({ id : window.location.hash.substr(1) });
	} else {
		$('ul.navigation a:first').click();
	}

	// offset is used to move to *exactly* the right place, since I'm using
	// padding on my example, I need to subtract the amount of padding to
	// the offset.  Try removing this to get a good idea of the effect
	var offset = parseInt((horizontal ? 
		$container.css('paddingTop') : 
		$container.css('paddingLeft')) 
		|| 0) * -1;


	var scrollOptions = {
		target: $scroll, // the element that has the overflow

		// can be a selector which will be relative to the target
		items: $panels,

		navigation: '.navigation a',

		// selectors are NOT relative to document, i.e. make sure they're unique
		prev: 'img.left', 
		next: 'img.right',

		// allow the scroll effect to run both directions
		axis: 'xy',

		onAfter: trigger, // our final callback

		offset: offset,

		// duration of the sliding effect
		duration: 500,

		// easing - can be used with the easing plugin: 
		// http://gsgd.co.uk/sandbox/jquery/easing/
		easing: 'swing'
	};

	// apply serialScroll to the slider - we chose this plugin because it 
	// supports// the indexed next and previous scroll along with hooking 
	// in to our navigation.
	$('#slider').serialScroll(scrollOptions);

	// now apply localScroll to hook any other arbitrary links to trigger 
	// the effect
	$.localScroll(scrollOptions);

	// finally, if the URL has a hash, move the slider in to position, 
	// setting the duration to 1 because I don't want it to scroll in the
	// very first page load.  We don't always need this, but it ensures
	// the positioning is absolutely spot on when the pages loads.
	scrollOptions.duration = 1;
	$.localScroll.hash(scrollOptions);

});
//End Slider script

//This is the contac form script
$(document).ready(function(){
		$("form").submit(function(){
			var str = $("form").serialize();
			 $.ajax({
			 type: "POST",
			 url: "contactform/contact.php",
			 data: str,
			 success: function(msg){
				$("#note").ajaxComplete(function(event, request, settings){
						if(msg == 'OK'){ // Message Sent? Show the 'Thank You' message and hide the form
							  result = '<div class="notification_ok"><p>Your message has been sent. Thank you!</p></div>';
							  $("#fields").hide();
						}else{
							  result = msg;
				  }
			   $(this).html(result);
				  });
				 }});
			   return false;
				});
			 });

//end contact form script

//lightBox Script
//$(document).ready(function(){
//		$('a.lightbox1').lightBox();
//		$('a.lightbox2').lightBox();
//		$('a.lightbox3').lightBox();
//	}); 
// end lightBox Script