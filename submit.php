<html>
<head>
<meta http-equiv='refresh' content='1;result.php' />
</head>
<body>
<?php
$site = $_GET['site'];
$depth = $_GET['d'];
exec('cd /var/www');
$output = shell_exec('./sitespeed.io -u ' . $site . ' -d ' . $depth . ' > test-result.html &' );
echo "<pre>$output</pre>";
?>
</body>
</html>