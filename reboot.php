<!DOCTYPE html>
<html>
<head>
	<title>Reboot Test</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
</head>
<body class="main">
<p>Reboot:</p>
<?php
  echo shell_exec('ls');
  $output = shell_exec('sudo reboot 2>&1');
  echo "<pre>$output</pre>";
?>  

</body>
</html>
