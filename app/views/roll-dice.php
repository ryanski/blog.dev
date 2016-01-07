<!DOCTYPE <html>
<head>
	<title></title>
</head>
<body><h1>My guess is <?php echo $guess; ?>!</h1>
	  <h1>The number is <?php echo $number; ?>!</h1>
	  <?php if($guess==$number): ?>
	  	<h2>You were right!</h2>
	  <?php else: ?>
	  	<h2>You were wrong!  Try again.</h2>
	  <?php endif; ?> 


</body>
</html>