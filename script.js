$(document).ready(function() {

  // INFORMATION POPUP
  // toggle on click with bootstrap .modal()
  $('tr').click(function() {
    $(this).attr('data-toggle', 'modal','data-target', '#addModal');
    $('#addModal').modal('show');
  });

  // NAVIGATION HELP
  // wrench tool icon displayed on the navbar 
  $('.glyphicon-wrench').click(function() {
    $(this).attr('data-toggle', 'help','data-target', '#addHelp');
    $('#addHelp').modal('show');
    // navigation blinks
    $('a').fadeOut(100).fadeIn(500)
      .fadeOut(100).fadeIn(500)
      .fadeOut(100).fadeIn(500);
  });

  // SEARCH BOX
  $("#searchInput").keyup(function () {
    //split the current value of searchInput
    var data = this.value.split(" ");
    //create a jquery object of the rows
    var row = $("#fbody").find("tr");
    if (this.value == "") {
      row.show();
      return;
    }
    //hide all the rows
    row.hide();

    //Recursively filter the jquery object to get results.
    row.filter(function (i, v) {
      var $this = $(this);
      for (var i = 0; i < data.length; ++i) {
        if ($this.is(":contains('" + data[i] + "')")) {
          return true;
        }
      }
      return false;
    })
    //show the rows that match.
    .show();
  }).focus(function () {
    this.value = "";
    $(this).css({
      "color": "black"
    });
    $(this).unbind('focus');
  }).css({
    "color": "#C0C0C0"
  });

  // PAGINATION CONTROLLER for index.php
  // pre-hide to 5 places
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
  // show all elements in the table
  $( ".pagination li:nth-child(4)" ).click(function() {
    $("tr").show();
  });

});