$(document).ready(function(){
	$('.tabs-content:not(:first)').hide();
	$('#tabs ul li').click(function(){
		$('#tabs ul li').removeClass('active');
		$(this).addClass('active');

		$('.tabs-content').hide();
		var activeTab = $(this).find('a').attr('href');

		$(activeTab).fadeIn();
		return false;
	});
	//END TABS NAV
	//SLIDE
	function startSlider(){
		interval = setInterval(function(){
			a = parseInt($('#test').css('margin-left'));
			console.log(a);
			$('#slider ul').animate({'margin-left':'-=620'},1000,function(){
				$('#slider ul li:first').appendTo('#slider ul');
				$('#slider ul').css('margin-left',0);
			});
			$('#test').animate({'margin-left':a+102}, 1000, function() {
				if(parseInt(a) > 408) {
					$('#test').css('margin-left', 0);
				}
			})

		},3000);
	}

	function pauseSlider(){
		clearInterval(interval);
	}
	

	$('#slider ul').on('mouseenter',pauseSlider).on('mouseleave', startSlider);
	startSlider();
})