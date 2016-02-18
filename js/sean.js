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

$('.nav a').click(function(e) {
	e.preventDefault();
	EPPZScrollTo.scrollVerticalToElementById($(this).attr("href").substring(1), 150);
});

if($('#skills-navbar').length > 0)
{
	$('#skills-navbar').hide();
}

$('#skills-navbar').ready(function() {

	$('#skills-navbar').fadeIn(1000);

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

/* Skills circles */
var stroke = 5;
var trail = 2;
var duration = 1500;
var yob = 1985;
var cy = new Date().getFullYear();

function yfcd(y)
{
    return cy - y;
}

function pyyob(y)
{
    return yfcd(y)/(cy-yob) * 1.4;
}

var circles = new Array();

circles["dotnet"] = new ProgressBar.Circle('#circle-dotnet', {
    color: '#990099',
    strokeWidth: stroke,
    trailWidth: trail,
    duration: duration,
    text: {
        value: '<p class="skillcircle-skill">C# .Net</p><p>'+yfcd(2004)+' years</p>'
    }
});

circles["dotnet"].animate(pyyob(2004), function() {})

///

circles["java"] = new ProgressBar.Circle('#circle-java', {
    color: '#990099',
    strokeWidth: stroke,
    trailWidth: trail,
    duration: duration,
    text: {
        value: '<p class="skillcircle-skill">Java</p><p>'+yfcd(2001)+' years</p>'
    }
});

circles["java"].animate(pyyob(2001), function() {})

///

circles["php"] = new ProgressBar.Circle('#circle-php', {
    color: '#990099',
    strokeWidth: stroke,
    trailWidth: trail,
    duration: duration,
    text: {
        value: '<p class="skillcircle-skill">PHP</p><p>'+yfcd(1999)+' years</p>'
    }
});

circles["php"].animate(pyyob(1999), function() {})


///

circles["htmlcss"] = new ProgressBar.Circle('#circle-htmlcss', {
    color: '#990099',
    strokeWidth: stroke,
    trailWidth: trail,
    duration: duration,
    text: {
        value: '<p class="skillcircle-skill">HTML/CSS</p><p>'+yfcd(1996)+' years</p>'
    }
});

circles["htmlcss"].animate(pyyob(1996), function() {})

///

circles["javascript"] = new ProgressBar.Circle('#circle-javascript', {
    color: '#990099',
    strokeWidth: stroke,
    trailWidth: trail,
    duration: duration,
    text: {
        value: '<p class="skillcircle-skill">Javascript</p><p>'+yfcd(2003)+' years</p>'
    }
});

circles["javascript"].animate(pyyob(2003), function() {})

///

circles["ux"] = new ProgressBar.Circle('#circle-ux', {
    color: '#990099',
    strokeWidth: stroke,
    trailWidth: trail,
    duration: duration,
    text: {
        value: '<p class="skillcircle-skill">UX and HCI</p><p>'+yfcd(2005)+' years</p>'
    }
});

circles["ux"].animate(pyyob(2005), function() {})

//

$('.skillcontainer').click(function() {

    var clicked = $(this);
    $('.skillcontainer').not(this).each(function() {
        var notclicked = $(this);

        notclicked.css('opacity', 0);
    });

    window.setTimeout(function() {
        $('#skillsupportcontainerid').addClass('skillsupportcontainerballoon');
        $('#skillsupportcontainerid').html($("div[data-contentid='" + clicked.data("circlename") + "']").html());
    }, 500)
    //circles[clicked.data("circlename")].animate(0, function() {

});

/* * * * * */

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

var EPPZScrollTo =
{
    /**
     * Helpers.
     */
    documentVerticalScrollPosition: function()
    {
        if (self.pageYOffset) return self.pageYOffset; // Firefox, Chrome, Opera, Safari.
        if (document.documentElement && document.documentElement.scrollTop) return document.documentElement.scrollTop; // Internet Explorer 6 (standards mode).
        if (document.body.scrollTop) return document.body.scrollTop; // Internet Explorer 6, 7 and 8.
        return 0; // None of the above.
    },

    viewportHeight: function()
    { return (document.compatMode === "CSS1Compat") ? document.documentElement.clientHeight : document.body.clientHeight; },

    documentHeight: function()
    { return (document.height !== undefined) ? document.height : document.body.offsetHeight; },

    documentMaximumScrollPosition: function()
    { return this.documentHeight() - this.viewportHeight(); },

    elementVerticalClientPositionById: function(id)
    {
        var element = document.getElementById(id);
        var rectangle = element.getBoundingClientRect();
        return rectangle.top;
    },

    /**
     * Animation tick.
     */
    scrollVerticalTickToPosition: function(currentPosition, targetPosition)
    {
        var filter = 0.2;
        var fps = 60;
        var difference = parseFloat(targetPosition) - parseFloat(currentPosition);

        // Snap, then stop if arrived.
        var arrived = (Math.abs(difference) <= 0.5);
        if (arrived)
        {
            // Apply target.
            scrollTo(0.0, targetPosition);
            return;
        }

        // Filtered position.
        currentPosition = (parseFloat(currentPosition) * (1.0 - filter)) + (parseFloat(targetPosition) * filter);

        // Apply target.
        scrollTo(0.0, Math.round(currentPosition));

        // Schedule next tick.
        setTimeout("EPPZScrollTo.scrollVerticalTickToPosition("+currentPosition+", "+targetPosition+")", (1000 / fps));
    },

    /**
     * For public use.
     *
     * @param id The id of the element to scroll to.
     * @param padding Top padding to apply above element.
     */
    scrollVerticalToElementById: function(id, padding)
    {
        var element = document.getElementById(id);
        if (element == null)
        {
            console.warn('Cannot find element with id \''+id+'\'.');
            return;
        }

        var targetPosition = this.documentVerticalScrollPosition() + this.elementVerticalClientPositionById(id) - padding;
        var currentPosition = this.documentVerticalScrollPosition();

        // Clamp.
        var maximumScrollPosition = this.documentMaximumScrollPosition();
        if (targetPosition > maximumScrollPosition) targetPosition = maximumScrollPosition;

        // Start animation.
        this.scrollVerticalTickToPosition(currentPosition, targetPosition);
    }
};