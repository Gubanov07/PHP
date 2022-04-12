 <?php
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = strlen($str);
    $wordsCount = count(explode(' ', $str));
    $spaceCount = $wordsCount - 1;
    echo 'В тексте '.$wordsCount.' слов, '.$strLen.' символов, '.$spaceCount . ' пробелов.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Главная страница</h1>
    <?php echo $_SESSION['counter']; ?>
    <h2><?php echo "Hello " ?>
        <a href="forma.php"><?php echo $_SESSION['user_name']; ?></a>
    </h2>
    <h1>Форма:</h1>
    <p>
        <span>Имя: </span><?php echo $_SESSION['namee']; ?>
    </p>
    <p>
        <span>Фамилия: </span><?php echo $_SESSION['snamee']; ?>
    </p>
</body>
</html> 
    <form action="main.php" method="GET">
  <textarea name="text" placeholder="">Привет мой милый друг!</textarea>
    <input type="submit">
</form>
</body> 