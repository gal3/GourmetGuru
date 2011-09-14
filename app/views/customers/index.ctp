<script type="text/javascript">
		$(document).ready(function(){
			$("#slider").easySlider();
		});
</script>

<div class="two-col">
	<div class="col">
		<h2>Quick Guide</h2>
		<p>Once you log in you'll be provided with a menu customized for the customers</p>
		<p>Navigate to the submenu of what to eat will allow you the choice of either viewing all menu items or we will provide the suggestions based on the preferences you've stated earlier.As well as providing you a quick view of what your preferences are and allow you to change it whenever you want.</p>
		<p>When ordering, choose from the suggestions or the browse all, after choosing, you will need to confirm your order, after confirming, there will be a count down to approximate how long you have to wait for your order before pickup, delivery etc.</p>
		<p>In My Orders menu, the customer will be able to view his/her order history, as well as keep track of his/her current order. All the orders that are complete will be marked as complete. From this view, the customer will also be able to review his previous orders. This bring us to the review form, the customer is allowed to provide his/her comments on the menu item he has ordered, as well as rate it out of 5 stars.  In the My Reviews tab, the customer is able to see all his/her reviews and we provide the option for the customer to reevaluate their review in the form of editing.</p>
		<p>In the statistics section, it keeps track of various stats about the customer as well as the community stats. We also provide a link ( contact us ) for the customer to provide feedback on what other charts that may interest them. Currently there are 3 charts, first chart refers to what type of food you've ordered most often, second chart shows how many of the items you've ordered per food type, and third is a community stat which shows what the community's food interests are.</p>
		<p>Lastly, under the user profile tab is three sub-menus that allows the user to modify personal information, preferences, as well as account settings.</p>
	</div>
	<div class="col centered">
		<h2>Visual overview</h2>
		<div id="sliderwrapper">
			<div id="slider">
				<ul>
					<li>
						<?php echo $this->Html->image("tour01.png"); ?>
						<p>Log in with your username and password. We&rsquo;ll guide you through the rest.</p>
					</li>
					<li>
						<?php echo $this->Html->image("tour02.png"); ?>
						<p>Describe your taste in food. You can specify cuisine, caloric intake, price ranges, and more!</p>
					</li>
					<li>
						<?php echo $this->Html->image("tour03.png"); ?>
						<p>We provide you with suggestions based on your taste and you can place an order with just a few clicks. Isn&rsquo;t that neat?</p>
					</li>
					<li>
						<?php echo $this->Html->image("tour04.png"); ?>
						<p>GourmetGuru provides mouth-watering, vivid photos for all of our featured menu items in high resolution with hovering previews.</p>
					</li>
					<li>
						<?php echo $this->Html->image("tour05.png"); ?>
						<p>Sit back and relax. We&rsquo;ll keep track of your order status with a countdown and provide directions to the restaurant with Google Maps.</p>
					</li>
					<li>
						<?php echo $this->Html->image("tour06.png"); ?>
						<p>With the help of Google API, we provide site-wide statistics using dynamic charts so you're up to date on the hottest local restaurants.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
