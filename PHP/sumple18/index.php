<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

<form action="submit.php" method="post">
    <p>
        <input type="radio" name="gender" value="男">男性
        /
        <input type="radio" name="gender" value="女">女性
    </p>
    <input type="submit" value="送信する">

    <input type="checkbox" name="agree" value="">同意する
    <select name="pref" id="pref">
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
    </select>
</form>

</main>
</body>    
</html>