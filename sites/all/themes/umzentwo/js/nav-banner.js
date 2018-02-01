  $(document).ready(function(){
 	if($('#navbar-sticky-wrapper').length == 0){
		$('.front .navbarContainer').sticky({topSpacing:0,bottomSpacing:0});
	}
	  $(window).bind('scroll', function() {
	    var bannerHt = $('#banner').innerHeight();
	    var introHt = $('#intro').innerHeight();
	    var navbarHt = $('#navbar').innerHeight();
	    var navPos = bannerHt+introHt+navbarHt;
		  if ($(window).scrollTop() > navPos) {
			$('.navbarContainer').addClass('fixed');
		  }
		  else {
			$('.navbarContainer').removeClass('fixed');
		  }
		});

  });

$(window).resize(function() {
	$('.front .navbarContainer').unstick();
	$('.front .navbarContainer').sticky({topSpacing:0,bottomSpacing:0});
});


