<?php include 'show.php'; ?>

<!DOCTYPE html>
<html lang="ua">

<head>
    <title>Задачі по функціям і формам</title>
</head>

<body>
    <hr>
    <p> <b>Задача №6.</b>
        Створити сторінку, на якій можливо загрузити декілька світлин в галерею. Всі завантажені світлини повині
        поміщатися в папку gallery і виводитися на сторінці в <br>вигляді таблиці.</p>
    </p>
    <hr>
    <br>
    <p align="center"><b>Фотогалерея</b></p>

    <div align="center">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <div style="width: 85% ">
                <hr>
                Вибрати файл:
                <input type="file" name="filename" />
            </div>
            <br>
            <div style="width: 85% ">
                <button>Завантажити</button>
                <hr>
            </div>
        </form>
    </div>
    <br>
    <div align="center">
        <div style="border: 1px grey solid; width: 80% ">
            <table>
                <?php showFiles() ?>
            </table>
        </div>
    </div>

</body>

</html>