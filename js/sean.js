$('#navhamburger').click(function(){
	if($('#menu').hasClass('nav-visible'))
	{
		$('#menu').removeClass('nav-visible').addClass('nav-hidden');
		$('#navhamburger').removeClass('cross');
	}
	else
	{
		$('#menu').removeClass('nav-hidden').addClass('nav-visible');
		$('#navhamburger').addClass('cross');
	}


});