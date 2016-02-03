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

if($('#portfolio-masonry').length > 0)
{
	$('#portfolio-masonry').masonry({
		itemSelector : '.portfolio-item',
		columnWidth: 0
	});
}

$('#contactform').submit(function(e) {

	e.preventDefault();
	$('#missingalert').hide();
	$('#sendalert').hide();

	$('#sendbutton').attr('disabled', 'disabled').html('Sending <img src="' + window.base_url + 'content/throbber.gif">');

	if(validateForm("contactform", ['fromname', 'frommail', 'message']))
	{
		$.post(window.base_url + 'contact/send', $('#contactform').serialize(), function(data) {
			console.log(data);
			if(data == "success")
			{
				$('#contactform input, #contactform textarea').each(function (i){
					$(this).addClass('zerowidthfade');
				});

				$('#contactform label').each(function (i){
					$(this).fadeOut(1300);
				});

				$('#sendbutton').html("Sent!").fadeOut(1300, function() {

					$('#sendformcomplete-container').fadeIn();

				});

			}
			else if(data == "missing")
			{
				$('#missingalert').show();
				$('#sendbutton').removeAttr('disabled').html("Send!");
			}
			else
			{
				$('#sendalert').show();
				$('#sendbutton').removeAttr('disabled').html("Send!");
			}

		});
	}

});

function validateForm(name, fields)
{

  var i, l = fields.length;
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms[name][fieldname].value === "") {
      $('#' + fieldname).shake(3, 14, 500);
      return false;
    }
  }
  return true;
}

jQuery.fn.shake = function(intShakes, intDistance, intDuration) {
  
    intShakes = intShakes || 10;
    intDistance = intDistance || 2;
    intDuration = intDuration || 1000;
  
    this.each(function() {
        $(this).css("position","relative"); 
        for (var x=1; x<=intShakes; x++) {
        $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
    .animate({left:intDistance}, ((intDuration/intShakes)/2))
    .animate({left:0}, (((intDuration/intShakes)/4)));
    }
  });
return this;
};