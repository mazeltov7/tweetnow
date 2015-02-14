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
<ul>
<?
// 各フォロワーのタイムラインを表示する
// そのためにそのフォロワーのfollowingsを取ってきて最新ツイートを時系列で並べる
// みたいなところで、ちょい断念。API的にも取れるfollowingが200と限界あり、保存して全部取ってくるのはできそうだけど、小休止
$followers = $connection->get('followers/list');
$userid = $followers->users[3]->id;

$followings = $connection->get('friends/list', array('user_id' => $userid));
//var_dump(count($followings->users));

  for ($i =0; $i<count($followings->users); $i++) {
    $created[] = $followings->users[$i]->status->created_at;
  };
sort($created);
var_dump($created);
?>
</body>
</html>
