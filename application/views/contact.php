<main id="contact">

	<div class="container thin-container center-headers" id="contactcontent">

		<h1>Contact me</h1>

		<div class="alert alert-danger" style="display: none;" id="missingalert">Please fill in everything!</div>
		<div class="alert alert-danger" style="display: none;" id="sendalert">Sorry, there was a problem sending your message. Please try again later.</div>

		<form id="contactform" method="POST" action="contact/send">

			<div class="form-group spacious-form-group">
				<label for="fromname">Your name</label>
				<input type="text" class="form-control" id="fromname" name="fromname" placeholder="Name (and company if you like)" required>
			</div>

			<div class="form-group spacious-form-group">
				<label for="frommail">Your e-mail address</label>
				<input type="email" class="form-control" id="frommail" name="frommail" placeholder="E-mail address" required>
			</div>

			<div class="form-group spacious-form-group sdoffset">
				<label for="frommail">Your website</label>
				<input type="email" class="form-control" id="website" name="website" placeholder="Website" autocomplete="off">
			</div>

			<div class="form-group spacious-form-group">
				<label for="message">Your message</label>
				<textarea class="form-control" id="message" name="message" placeholder="Just type something..." rows="5" required></textarea>
			</div>
			
			<div class="form-group spacious-form-group">
	      		<button type="submit" class="btn btn-default" id="sendbutton">Send!</button>
	    	</div>

		</form>
		<div id="sendformcomplete-container">
			<div id="sendformcomplete">
				<span class="glyphicon glyphicon-envelope"></span>
				<p>Sent. Thanks!</p>
			</div>
		</div>


	</div>


</main>