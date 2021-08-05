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
<h2>Practice!</h2>
<?php 
    require('dbconnect.php'); 

    if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
    } else {
        $page = 1 ;
    }
    
    $start = ($page - 1) * 5;

    $memos = $db -> prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?, 5');
    $memos -> bindparam(1, $start, PDO::PARAM_INT);
    $memos -> execute();
?>
<article>
    <?php while ($memo = $memos -> fetch()): ?>
        <p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print($memo['memo']); ?></a></p>
        <time><?php print($memo['created_at']); ?></time>
        <hr>
    <?php endwhile; ?>
    
    <?php if($page >= 2): ?>
    <a href="index.php?page=<?php print($page-1); ?>"><?php print($page - 1); ?>ページ目へ</a>
    |
    <?php endif; ?>
    
    <?php 
        $counts = $db -> query('SELECT COUNT(*) as cnt FROM memos ');
        $count = $counts -> fetch();
        $MAX_PAGE = ceil($count['cnt'] / 5);
        if($page < $MAX_PAGE ):
    ?>
    <a href="index.php?page=<?php print($page+1); ?>"><?php print($page + 1); ?>ページ目へ</a>
    <?php endif; ?>
</article>
</main>
</body>    
</html>