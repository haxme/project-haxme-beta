$(window).load(function() {
	$('#slider').nivoSlider();
});

$(document).ready(function(){
						   $(".opacity").fadeTo("slow", 0.3); // This sets the opacity of the thumbs to fade down to 30% when the page loads
						   $(".opacity").hover(function(){
						   $(this).fadeTo("slow", 1); // This should set the opacity to 100% on hover
						   },function(){
						   $(this).fadeTo("slow", 0.3); // This should set the opacity back to 30% on mouseout
						   });
						   });


$(document).ready(function(){

				//Horizontal Sliding
				$('.boxgrid.slideright').hover(function(){
					$(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});
			
		
				//Full Caption Sliding (Hidden to Visible)
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
				});
			
			});

