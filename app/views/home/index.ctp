<script type="text/javascript">
		$(document).ready(function(){
			$("#slider").easySlider();
		});
</script>


<h2>Think less. Eat more.</h2>

<p>Can't decide <em>where</em> to eat? Let the Guru take you on a journey to enrich your tastebuds. GourmetGuru is a social platform that caters towards food enthusiasts through suggestions for hot local restaurants based on your taste in food. We do all the work for you: At the same time, you can save money, keep track of your diet, and share reviews with like-minded foodies.</p>

<div class="two-col">
	<div class="col centered">
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
	
	<div class="col">
	
		<h3>More features</h3>
		<ul>
			<li>We pay the tax!</li>
			<li>All in one: Choose your meal, order, obtain the meal!</li>
			<li>Quick access: One click order</li>
			<li>Write and share your reviews with the world</li>
			<li>And more!</li>
		</ul>
		
		<h3>In the future ...</h3>
		<ul>
			<li>International gourmet networking</li>
			<li>Smart analytics to predict food trends</li>
			<li>Finance your spending on food</li>
		</ul>
		
		<p class="actions"><?php echo $this->Html->link('Register for a free account!', array('controller' => 'users', 'action' => 'register'), array('class' => 'special')); ?></p>
	</div>
	
</div>

<!--h3>For the TA/Prof:</h3>
<p>Try the Sign Up functionality! (Requires a working email address). Currently there are quite a few customers and owners created. Note that we have disabled the choice to sign up as an admin.</p>

<ul>
	<li>admin/admin</li>
	<li>owner/owner...owner1/owner1...owner2/owner2 ...all the way up to owner16/owner16</li>
	<li>customer/customer</li>
	<li>cust2/customer...up to cust10/customer</li>
</ul-->