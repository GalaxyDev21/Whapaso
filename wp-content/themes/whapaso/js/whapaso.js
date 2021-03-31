jQuery(document).ready(function() {

	//wow
	new WOW().init();

	//whapaso screen
	jQuery('.welcome').delay(5000).fadeOut('slow').promise().done(function(){
		var $tlt = jQuery('#section1 .textE').textillate({
			in: { effect: 'fadeInLeft', delay: 200 },
			out: { effect: 'fadeOutLeft', sync: true },
			loop: true,
			autoStart: false,
			initialDelay: 0
		});
		$tlt.textillate('in');
		
		jQuery('#nav-icon1').click(function(){
			jQuery(this).toggleClass('open');
			jQuery('#menu').toggleClass('open');
		});
	});
	
	//parallax
	jQuery('.parallax-window').parallax({
		speed: 0.5
	});

	//before-after
	var windowWidth = jQuery(window).width(), haft_win = windowWidth / 2;
	jQuery('.wrapper-after').width(windowWidth);
	jQuery(window).resize(function () {
        var windowWidth = jQuery(window).width();
        jQuery('.wrapper-after').css('width', windowWidth + 'px');
	});
	var $dragMe = jQuery("#dragme");
	var $beforeAfter = jQuery("#before-after");
	var $viewAfter = jQuery(".view-after");
	if (jQuery("#dragme").length == 0)
		return;
	Draggable.create($dragMe, {
		type: "left",
		bounds: $beforeAfter,
		onDrag: updateImages
	});
	animateTo(haft_win);
	jQuery(window).resize(function () {
		var windowWidth = jQuery(window).width(), haft_win = windowWidth / 2;
		animateTo(haft_win);
	});
	function updateImages() {
		TweenLite.set($viewAfter, {width: $dragMe.css("left")});
	}
	function animateTo(_left) {
		TweenLite.to($dragMe, 1, {left: _left, onUpdate: updateImages});
	}
	$beforeAfter.on("click", function (event) {
		var eventLeft = event.clientX - $beforeAfter.offset().left;
		animateTo(eventLeft);
	});
});