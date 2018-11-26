<?php 
  include('initialize.php');
  // $result jst variable $bojAdmin is object name , test() is function of class...
	//echo $result = $objAdmin->test();  
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  


  <link rel="stylesheet" href="autocomplete_assets/jquery-ui.css">
  <script src="autocomplete_assets/jquery-1.12.4.js"></script>
  <script src="autocomplete_assets/jquery-ui.js"></script>

  

  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->


  <script>
  $(function() {
		var availableTags = [
      <?php
       echo $result = $objAdmin->view_all(); 
			?>
		];
    

$( "#tag" ).autocomplete({
      source: function(request, response) {
        var results = $.ui.autocomplete.filter(availableTags, request.term);
        response(results.slice(0, 2));
      }
    });

  //   $('#jt_ame').autocomplete({
  //   source:[availableTags],
  //   visibleLimit:6,
  //   limit:6,
  //minLength: 2        

  // });
  //working on .autocomplete



  } );


 


  </script>
</head>
<body>
 
<div class="ui-widget">

  <input id="tag">
</div>
 
<div>
  <label for="tags">Tags: </label>
  <input type="text" id="tags" name="jt_name"> 
</div>

 
</body>
</html>