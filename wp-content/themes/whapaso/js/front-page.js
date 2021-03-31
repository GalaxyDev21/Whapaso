jQuery(document).ready(function(){
    jQuery('#pagepiling').pagepiling({
		menu: '#menu',
		anchors: ['', 'About', 'Capabilities', '', 'Contact'],
		direction: 'horizontal',
		navigation: false,
		onLeave: function(index, nextIndex, direction){
			if(nextIndex == 1){
				var $tlt = jQuery('#section1 .textE').textillate({
					in: { effect: 'fadeInLeft', delay: 200 },
					out: { effect: 'fadeOutLeft' },
					loop: true,
					autoStart: false,
					initialDelay: 500
				});
				$tlt.textillate('in');
			} else if(nextIndex == 2) {
				var $tlt = jQuery('#section2 .textE').textillate({
					in: { effect: 'fadeInLeft',sync: true, delay: 500 },
					out: { effect: 'fadeOutLeft' },
					loop: true,
					autoStart: false,
					initialDelay: 500
				});
				$tlt.textillate('in');
				jQuery('.sec3 p').addClass('fadeInRight animated delay-2s');
				setTimeout(function () { 
					jQuery('.sec3 p').removeClass('fadeInRight animated delay-2s');
				}, 2000);
			} else if(nextIndex == 3) {
				var $tlt = jQuery('#section3 .textE').textillate({
					in: { effect: 'fadeInLeft', delay: 100 },
					out: { effect: 'fadeOutLeft' },
					loop: true,
					autoStart: false,
					initialDelay: 500
				});
				$tlt.textillate('in');
				jQuery('.sec4 p').addClass('fadeInRight animated delay-2s');
				setTimeout(function () { 
					jQuery('.sec4 p').removeClass('fadeInRight animated delay-2s');
				}, 2000);
			}
		}
	});
		
	jQuery('.scroll-down').click(function () {
		jQuery.fn.pagepiling.moveSectionDown();
	});
	
	jQuery('.scroll-up').click(function () {
		jQuery.fn.pagepiling.moveSectionUp();
	});
});