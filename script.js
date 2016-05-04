$(document).ready(function() {
	$("tr:gt(5)").hide();
	
	$( ".pagination li:nth-child(1)" ).click(function() {
		$("tr").show();
		$("tr:gt(5)").hide();
	});

	$( ".pagination li:nth-child(2)" ).click(function() {
		$("tr").show();
		$("tr:gt(10)").hide();
	});

	$( ".pagination li:nth-child(3)" ).click(function() {
		$("tr").show();
		$("tr:gt(15)").hide();
	});

	/*var price = $("[name='price']");
	if(!price.val().toFixed(2)) {
		
	} */
});
