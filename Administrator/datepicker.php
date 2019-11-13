
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery datedropper Plugin Example</title>
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="supporting/bootstrap.min.css">
<link href="datedropper.css" rel="stylesheet" type="text/css">
<script>

$( "#demo" ).dateDropper({
  animate: true,

  // bounce, dropDown
  init_animation: "fadein", 
  format: "m-d-Y",
  lang: "en",

  // Set the initial value to current date or lock the control value to current date
  // false(default), from, to.
  lock: false,
  maxYear: t_y_cur,
  minYear: 1950,
  yearsRange: 10,

  //CSS PRIOPRIETIES
  dropPrimaryColor: "#01CEFF",
  dropTextColor: "#333333",
  dropBackgroundColor: "#FFFFFF",
  dropBorder: "1px solid #08C",
  dropBorderRadius: 8,
  dropShadow: "0 0 10px 0 rgba(0, 136, 204, 0.45)",
  dropWidth: 124,
  dropTextWeight: 'bold'
});


</script>
</head>

<body>

<div class="container" style="margin-top:150px;">

<input type="text" id="demo" class="form-control" />
</div>
<!--<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
-->
<script src="supporting/jquery.min.js"></script>



<script src="datedropper.js"></script>
<script>$( "#demo" ).dateDropper();</script>

</body>
</html>
