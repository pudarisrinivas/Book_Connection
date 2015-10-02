$mav(document).ready(function(){			
	$mav('#verticalcollapse ul.level0').before('<span class="head"><a href="javascript:void(0)"></a></span>');			
	$mav('#verticalcollapse li.level0.active').addClass('selected');

	

	// applying the settings			
	$mav("#verticalcollapse  li  span").click(function(){
		if(false == $mav(this).next('ul').is(':visible')) {
			$mav('#verticalcollapse ul').slideUp(300);
		}
		$mav(this).next('.level0').slideToggle(300);
		
		if($mav(this).parent().hasClass('selected')) {
			$mav(this).parent().addClass('unselected');
		}
		
		$mav('#verticalcollapse li.selected').each(function() {
				$mav(this).removeClass('selected');
		});
		if(!$mav(this).parent().hasClass('unselected')) {
			$mav(this).parent().addClass('selected');
		}
		$mav('#verticalcollapse li.unselected').each(function() {
				$mav(this).removeClass('unselected');
		});
	});
});


