<?php
    require_once 'user.php';
    if (!empty($_POST)) {
        $user = new User();
        $user->LoadFromForm($_POST);
        $user->SaveToSession();
        $_SESSION['authorized'] = 1;
        echo '<script>window.location="index.php"</script>' ;
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
        <link rel = 'stylesheet' href='style.css'>
    </head> 
<body>
    <div id = 'content'>
        <form action ='' method = 'post'>
            <h3>Регистрация</h3>
            <input type='text' name='name' placeholder='Имя'><br>
            <input type='text' name='login' placeholder='Логин'><br>
            <input type='text' name='pass' placeholder='Пароль'><br>
            <input type='submit' name=''>
        </form>
    </div>
</body>
</html> 