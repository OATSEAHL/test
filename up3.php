<!DOCTYPE html>
<html>
<head>
	<title>Clone Git Repo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
</head>
<body class="main">
<p>Update:</p>
<?php
  exec('php composer.phar update',$output, $return_val);
  // print_r( $output );
  var_dump($output);
  echo "\n";
  echo 'Error: '. $return_val ."\n";
  echo "<p>Did it pull?</p><p> - Error 0 means all okay, but Error 1 means probably a rights issue!</p>";
  require "testchange.php";
  echo "<p>Testdata: ".$testdata."</p>";
?>  

</body>
</html>
