<!DOCTYPE html>
<html lang="ua">

<head>
    <title>Задачі по функціям і формам</title>
</head>

<body>
    <hr>
    <p><b>Задача №7.</b>
        Створити гостьову книгу, де будь-яка людина може оставити коментар в текстовом полі і добавити його.
        Всі добавлені коментарі виводяться над текстовим полем.
    </p>
    <hr>
    <p style="word-wrap: break-word;"><?php include 'print_post.php';
                                        printPost();
                                        ?>
    </p>
    <br><br>
    <div align="center">
        <form action="post.php" method="POST">
            <input type="text" name="text" size="50" maxlength="255">
            <br><br>
            <button>Добавити коментар</button>
        </form>
    </div>

</body>

</html>