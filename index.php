<?php include 'init.php'?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pastoral Dystopia</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/reset.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/menu.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<style>
.pink, nav b, #header h1 a, #header h1 a:hover, #page a{
	color: <?php echo $settings['theme_color'];?>; /* MOVE */
}

</style>

</head>

<body>


<div id="container">

<?php include ("widgets/menu.php");?> 

<content>
	<?php include ("widgets/title.php");?>
    <div id="page">
        <?php 
		
		
if ($current_selection == "home"){
		echo $settings['home_content'];
	}else {
		echo page_content($current_selection);
}
		
		
		
		?>
    </div>
</content>
</div>

<script>
$(function(){
	$('body').on('click', '#nav_dropper', function(e){
		$('nav').toggleClass('collaps');
	});

});


</script>
</body>
</html>