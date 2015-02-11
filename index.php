<?
include_once('twitterlib.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;" />
  <title></title>
</head>
<body>
<?
$content = $connection->get("followers/list");
var_dump($content);
?>
YO
あれ
</body>
</html>
