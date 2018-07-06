$(document).ready(function () {
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(100);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(100);
    });
    
    $('ul.nav li.dropdown .dropdown-menu').on('mouseenter', function () {
        $(this).parent('.dropdown').find('.dropdown-toggle').addClass('hove');
    }).mouseleave(function() {
        $(this).parent('.dropdown').find('.dropdown-toggle').removeClass('hove');
    });
	
	
});
/*------------------ searchbar code -------------------*/
	function toggle_searchbar()
	{
		$('.searchbar_block').fadeToggle(300);
	}