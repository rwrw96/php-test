<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../PHP/css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

<?php
    require('dbconnect.php');
    $id = $_REQUEST['id'];

    $memos = $db -> prepare('DELETE FROM memos WHERE id=?');
    $memos -> execute(array($id));
    $memo = $memos -> fetch();
?>

<article>
    <p>削除成功しました</p>
    <p><a href="update.php?id=<?php print($memo['id']); ?>">更新</a></p>
    <a href="index.php">戻る</a>
</article>



</main>
</body>    
</html>