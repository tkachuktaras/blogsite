<!DOCTYPE HTML>
<html>

<head>
    <?php require "./blocks/head.php"; ?>
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/login_page.css">
</head>

<body>
    <?php require "./blocks/header.php" ?>
    
    <form class="login__form" action="" method="post">
        <div class="container">
            <div class="divfor__form">
                <div class="main__form shadow">
                    <div class="login__maintittle">
                        Вход в аккаунт
                    </div>
                    <input class="input__" placeholder="Username">
                    <input type="password" class="input__" placeholder="Password">
                    <div class="login__btn">
                        <button class="login__a">Войти</button>
                    </div>
                    <div class="create__acc">
                        Смешарик? Тогда <a class="create__acc_a" href="reg.php">Создай аккаунт</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php require "./blocks/footer.php" ?>
</body>

</html>