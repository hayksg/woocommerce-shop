addEventListener("load", function() {
	setTimeout(hideURLbar, 0);
}, false);

function hideURLbar(){
	window.scrollTo(0,1);
}

jQuery(function ($) {
    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager:true,
        nav:false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            $('.events').append("<li>after event fired.</li>");
        }
    });

	/* Some improvements for template silly css navbar styles */

	var colLength = $('#menu-top-menu').find('ul.multi-column').length - 1;

	for (i = 0; i <= colLength; i++) {

		var menuTopItem = $('#menu-top-menu').find('ul.multi-column').eq(i).find('ul.multi-column-dropdown');
		var menuTopItemLength = menuTopItem.length;

		if (menuTopItemLength == 1) {
			menuTopItem.parent('div').removeClass('col-sm-4').addClass('col-sm-12');
			menuTopItem.parents('ul.multi-column').css('min-width', '200px');
		}

		if (menuTopItemLength == 2) {
			menuTopItem.parent('div').removeClass('col-sm-4').addClass('col-sm-6');
			menuTopItem.parents('ul.multi-column').css('min-width', '300px');
		}

	}

});

jQuery(window).load(function() {
    jQuery("#flexiselDemo3").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint:480,
                visibleItems: 1
            },
            landscape: {
                changePoint:640,
                visibleItems: 2
            },
            tablet: {
                changePoint:768,
                visibleItems: 3
            }
        }
    });
});
