<html>
<head>
	<title>squawk.cc - referrer display</title>
</head>
<body style="background-color:white">
	<h2>Referrer</h2>
	<?php if( $_SERVER['HTTP_REFERER'] ) :?>
		<p>You were referred to this page by:</p>
		<pre><?php echo $_SERVER['HTTP_REFERER']; ?></pre>
	<?php else : ?>
		<p>There was no referrer sent from your browser.</p>
	<?php endif; ?>
</body>
</html>
