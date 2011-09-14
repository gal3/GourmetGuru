   <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1', {'packages':['corechart']});
      
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);
      
	  function drawChart(){
		var result1 = <?php echo json_encode($result); ?>;

		if (!isEmpty(result1)){
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Cuisine Type');
				data.addColumn('number', 'Count');
				for(var i in result1){
					data.addRow([i, result1[i] ]);
				}
				  // Instantiate and draw our chart, passing in some options.
				  var chart3 = new google.visualization.PieChart(document.getElementById('chart_div3'));
				  var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));
				 // var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
				  chart3.draw(data, {width: 400, height: 240});
				  chart2.draw(data, {width: 400, height: 240});
				  
			}
			
			//new chart
			var result2 = <?php echo json_encode($result2); ?>;

		if (!isEmpty(result2)){
				var data2 = new google.visualization.DataTable();
				data2.addColumn('string', 'Cuisine Type');
				data2.addColumn('number', 'Count');
				for(var i in result2){
					data2.addRow([i, result2[i] ]);
				}
				  // Instantiate and draw our chart, passing in some options.
				  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
				  chart.draw(data2, {width: 400, height: 240});
			}
			
			
	}
	
	
	function isEmpty(obj) {
		for(var prop in obj) {
			if(obj.hasOwnProperty(prop))
				return false;
			}
		return true;
	}
	  
</script>

<h2><?php __('Statistics');?></h2>

<p>This section is dedicated for you, the customer, to keep track of your statistics. If there are other charts you like us to provide,
<?php echo $this->Html->link('contact us', array('controller' => 'customers', 'action' => 'contact')); ?>!</p> 
 <?php if( empty($result) ) echo '<p style="font-size:xx-small; color: #C9C299">There are hidden charts that is order specific, please make your first order.  </p>' ?>



<div class="two-col">
	
	<div class="col">
		<h3 >Cuisine preferences of all users by percentage</h3>
		<div class="figure" id="chart_div"></div>
		<!--<p>Showing the frequency of your orders by cuisine by percentage.</p>-->
	</div>
	<div class="col" <?php if( empty($result) ) echo 'hidden="true"';?>>
		<h3 align="center"> <?php if( empty($result) ) echo 'hidden="true"';?>Count of orders of each type.</h3>
		<div class="figure" id="chart_div2" ></div>
	</div>
</div>
	


<div <?php if( empty($result) ) echo 'hidden="true"';?> >
<h3 >Percentage of cuisine types ordered.</h3>
<div id="chart_div3" ></div>
</div>
	  









