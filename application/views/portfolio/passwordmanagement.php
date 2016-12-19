<main id="portfoliotop">
	<div id="portfolio-container">
		<div class="portfolio-item">
			<div class="portfolio-feature-image">
				<img src="<?=base_url() ?>content/portfolio/passwordmanagement-interior.png">
			</div>
			<div class="portfolio-descriptor">
				Password Management
			</div>
			<div class="portfolio-story">
				<p>The University of Calgary's identity and access management systems are incredibly complex. With complexity on the back end combined with no budget for user experience, the organic result for a user is a frustrating maze of ancient web utilties and overly technical documentation.</p>

				<p>When the University adopted Microsoft's Office 365, the existing utilities for changing passwords, creating accounts, and other simple tasks simply broke. We now had more virtual directories and more complexity that didn't work with each other. For the average student, they now had:</p>

				<ul style="margin-bottom: 30px">
					<li>Three different places to change their password.</li>
					<li>Two different sets of password recovery questions if they lost theirs.</li>
					<li>Two different online accounts.</li>
				</ul>

				<p>Staff had it worse.</p>



				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-old.png">
					<p class="portfolio-inline-img-caption">
						The old menu. Good luck.
					</p>
				</div>

				<p>A new system was quickly developed. It was rough around the edges, but it allowed users to change their password for all their accounts in only one spot, without having to understand the complexities of their accounts and passwords. A similar tool was built for the IT Support Centre to do the same thing on user's behalf.</p>

				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-welcome.png">
					<p class="portfolio-inline-img-caption">
						The welcome screen of the new password management tool. This design was inspired by the Apple ID front page at the time.
					</p>
				</div>

				<p>The new tool's power came from having the keys to the castle. Custom libraries were created quickly perform tasks in OpenLDAP, Active Directory, Forefront Identity Manager, Azure AD, Office 365, and read data from PeopleSoft. The tool was written in a modern ASP.NET MVC framework which made it easy to update, and to share resources with the applications development team in IT.</p>

				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-recover.png">
					<p class="portfolio-inline-img-caption">
						Password recovery was a simple wizard which led the user through simple steps. The goal of the wizard was to identify what accounts the user had and then pull what information was available on those accounts and ask the user a series of identifying questions. This process was inspired by the Google account recovery.
					</p>
				</div>

				<p>The complexity still existed in our back-end directory services, but Password Management only told the user what was relevant to them through a useful little dashboard. The heavy lifting was done by the new libraries which merged multiple digital identities of the same person into one. When information needed to be updated, it called on a number of systems to make the changes and keep the information in sync.

				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-dashboard.png">
					<p class="portfolio-inline-img-caption">
						One panel from the dashboard, making a user's account look incredibly simple. Some user's have accounts from the days of when the University ran on an IBM Mainframe which have been ported through time.
					</p>
				</div>		

				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-changepassword.png">
					<p class="portfolio-inline-img-caption">
						The change password screen with a password complexity helper. Password complexity is an artifact of legacy directory systems. 
					</p>
				</div>

				<p>Password Admin was created alongside Password Management	as a Support Centre tool for assisting users with their accounts. It replaces a similarily complex set of tools by leveraging the same powerful libraries built for Password Management. The tool compartmentalizes access to personal information so the tool can be diversely deployed to many support groups across campus. 			

				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-admin.png">
					<p class="portfolio-inline-img-caption">
						One view of the password admin screen, showing public and semi-private personal information.
					</p>
				</div>

				<div class="portfolio-nostretch-img">
					<img src="<?=base_url() ?>content/portfolio/passwordmanagement-admin2.png">
					<p class="portfolio-inline-img-caption">
						Accounts list showing at-a-glance view of accounts and issues. 20 different account issues can be shown to the support analysts with quick ways to identify cause and resolve. 
					</p>
				</div>

				<p>Ultimately Password Management will be replaced by an enterprise solution once we have sufficiently reduced our back-end complexity. However, currently support calls for online accounts are down as are first-tier support resolution times at the Support Centre.</p>

			</div>

			<button class="portfolio-readmore btn btn-lg btn-block" onclick='window.location="<?=base_url() ?>/portfolio"'>
				Back to portfolio
			</button>


		</div>
	</div>
</div>