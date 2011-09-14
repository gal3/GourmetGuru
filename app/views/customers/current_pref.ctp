<h3 id = "toggle">My Preferences</h3>
<i style="font-size:xx-small; color: #C9C299"> Click above to show/hide</i>
<div class="animate" style="display: block;">
<p>Your suggestions are based on the following:</p>

<dl>
	<dt>Calorie (per day)</dt>
	<dd><?php echo $cpCalorie; ?></dd>
	
	<dt>Budget (per day)</dt>
	<dd><?php echo $cpBudget; ?></dd>
	
	<dt>Dining Type</dt>
	<dd><?php echo $dineType; ?></dd>
	
	<dt>Cuisine Types</dt>
	<dd><?php echo $cuisineType; ?></dd>
</dl>

<p>Change your mind? You can modify your <a href="preferences/null/suggestions">suggestion preferences</a>.</p>

</div>
<h3 id="toggle2" >Current ratio for <?php echo $ratio[2]; ?> </h3>
<i  style="font-size:xx-small; color: #C9C299"> Click above to show/hide</i>
<div class="animate2" style="display: block;">
			<p>Calorie and budget are currently based on an estimate of 25/40/35 ~ Breakfast/Lunch/Dinner ratio. <br/>All-day(Anytime) suggestions based on one-third of total daily values.</p>
			<dl>
				<dt>Calorie</dt>
				<dd><?php echo number_format($ratio[0], 2); ?></dd>
					<dt>Budget</dt>
				<dd><?php echo number_format($ratio[1], 2); ?></dd>
			</dl>
	</div>
