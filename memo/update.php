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
    $memos = $db -> prepare('SELECT * FROM memos WHERE id = ? ');
    $memos -> execute(array($id));
    $memo = $memos -> fetch();
?>


<article>
    <form action="update_do.php" method="POST">
        <input type="hidden" name="id" value="<?php print($id); ?>">
        <textarea name="memo" cols="30" rows="10"><?php print($memo['memo']); ?></textarea>
        <button action="submit">修正する</button>
        <p><a href="index.php">戻る</a></p>
    </form>
</article>
</main>
</body>    
</html>