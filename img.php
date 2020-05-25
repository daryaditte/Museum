<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
    <form enctype="multipart/form-data" action="uploading.php" method="POST">
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!-- Название элемента input определяет имя в массиве $_FILES -->
        Отправить этот файл: <input name="img" type="file" />
        <input type="submit" value="Send File" />
    </form>
</body>
</html>