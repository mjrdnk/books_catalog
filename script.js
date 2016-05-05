$('index.php').ready(function() {
	
	$("tr:gt(5)").hide();
	
	// show only 5 elements in the table
	$( ".pagination li:nth-child(1)" ).click(function() {
		$("tr").show();
		$("tr:gt(5)").hide();
	});

	// show only 10 elements in the table
	$( ".pagination li:nth-child(2)" ).click(function() {
		$("tr").show();
		$("tr:gt(10)").hide();
	});

	// show only 15 elements in the table
	$( ".pagination li:nth-child(3)" ).click(function() {
		$("tr").show();
		$("tr:gt(15)").hide();
	});

});
