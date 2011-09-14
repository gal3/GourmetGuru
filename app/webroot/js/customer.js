$(document).ready(function() {
	
	$('.animate').hide();
	
	$("#toggle").toggle(function(){
		$(".animate").animate({ height: 'show', opacity: 'show' }, 'fast');
	},function(){
		$(".animate").animate({ height: 'hide', opacity: 'hide' }, 'fast');
	});
	
	$('.animate2').hide();
	
	$("#toggle2").toggle(function(){
		$(".animate2").animate({ height: 'show', opacity: 'show' }, 'fast');
	},function(){
		$(".animate2").animate({ height: 'hide', opacity: 'hide' }, 'fast');
	});
	
	$("#sugTable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
	
	try{
		$("a").imgPreview({
			imgCSS: { width: 300 }
		});
	}catch(e){
		console.log("Error:". e);
	}
 });
