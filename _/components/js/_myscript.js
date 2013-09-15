$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#features a:contains('Features')").parent().addClass('active');
	$("#aboutus a:contains('About Us')").parent().addClass('active');
	$("#backers a:contains('About Us')").parent().addClass('active');
	$("#contactus a:contains('Contact Us')").parent().addClass('active');
	$("#pricing a:contains('Pricing')").parent().addClass('active');
	$("#customers a:contains('Customers')").parent().addClass('active');

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast')
	});//hover

	$("[data-toggle='tooltip']").tooltip({ animation: true});

}); //jQuery is loaded



