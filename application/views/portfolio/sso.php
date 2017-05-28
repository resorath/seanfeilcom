<main id="portfoliotop">
	<div id="portfolio-container">
		<div class="portfolio-item">
			<div class="portfolio-feature-image">
				<img src="<?=base_url() ?>content/portfolio/sso.png">
			</div>
			<div class="portfolio-descriptor">
				University of Calgary Single Sign-on Architecture
			</div>
			<div class="portfolio-story">
				<p>In April 2017, I gave a talk at the BCNet conference on single sign-on: applying usability to security. BCNet is not-for-profit shared services organization that provides value for higher education institutions in British Columbia. The University of Calgary is not normally well represented at the conference. I went as a fact finding mission to learn more about the identity infrastructures of british columbia higher ed, but I wanted to make sure I gave something back in return.</p>

				<p>Single sign-on is something that is fairly invisible when it works really well. The big technology companies have already mastered it, but higher ed institutions lag behind. Sometimes improving usability of a system is a hard sell, but improving security is easy. Luckily implementing single-sign on globally in an organization improves both security and usability.</p>


				<div class="portfolio-inline-img">
					<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/3EKUtbz_N10?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen style="margin: 0 auto; display: block;"></iframe>
					<p class="portfolio-inline-img-caption">
						The video I created showing the user experience of the "ideal state" of single sign-on at the University of Calgary.
					</p>
				</div>

				<p>The architecture was built with the premise that, users should only need to provide new information when logging into a system the University supports. Often it is a password for the first point of ingress, a token for access to a sensitive system, or a special "attribute consent" screen to make sure a person is comfortable with where we are sending their private information.</p>

				<p>However the architecture is also designed around the privacy of the user's personal information, and the protection of their sensitive credentials. Passwords are never sent through untrusted systems, and only the most basic information is provided to services. </p>



				<div class="portfolio-inline-img">
					<img src="<?=base_url() ?>content/portfolio/sso-dontbug.png">
					<p class="portfolio-inline-img-caption">
						User's should not be asked for their password or other personal information over and over again. Ask once. 
					</p>
				</div>

				<p>The architecture has gone through several iterations of trying to reduce complexity, while keeping the goal of making things as simple as possible for not only the user using the system, but for services that wish to integrate with our single sign-on environment. The end goal being that every one of the hundreds of diverse software systems at the University all provide one consistent, user-facing sign-on experience.</p>


				<p>Part of the vision is also keeping our single sign-on components part of the Canadian Access Federation. This allows other Universities to leverage our user's identities should they choose, and allow our software systems to leverage theirs. This is a unique model that resides only in the collaborative nature of higher education.</p>

				<p><a href="https://uofc-my.sharepoint.com/personal/sfeil_ucalgary_ca/_layouts/15/guestaccess.aspx?docid=05cf5c266fa5346c68fa0b502648b473b&authkey=AWD1WHpM3U7SR8j5I8W8UqE">The presentation slides, with notes, is available here.</a></p>

				<p><a href="http://blog.seanfeil.com/tag/identity-management/">My blog has some writings on this as well.</a>
			</div>

			<button class="portfolio-readmore btn btn-lg btn-block" onclick='window.location="<?=base_url() ?>/portfolio"'>
				Back to portfolio
			</button>


		</div>
	</div>
</div>