<?php
$site = $_GET['site'];
$depth = $_GET['d'];
$host = parse_url($site, PHP_URL_HOST);
$now = date("Y/m/d/His");
$dir = "./sitespeed-result/" . $now . "/" . $host;
mkdir($dir, 0777, true);
?>
<html>
<head>
<?php
echo "<meta http-equiv='refresh' content='1;/sitespeed-result/" . $now . "/" . $host . "/result.php' />";
?>
</head>
<body>
<?php
exec('cd /var/www');
$output = shell_exec('./sitespeed.io -u ' . $site . ' -d ' . $depth . ' > sitespeed-result/' . $now . '/' . $host . '/test-result.html &' );
echo "<pre>$output</pre>";
?>
</body>
</html>