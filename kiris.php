<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кіріс</title>
</head>
<body>
    <div>
        <form action="kiris_create.php">
            <label for="date">Күні</label>
            <input type="date" value="<?=date('Y-m-d');?>" name="date">
            <label for="sum">Сомасы</label>
            <input type="number" name="sum">
            <label for="group">Бөлім</label>
            <input type="text" name="group">
            <label for="description">Түсінктеме</label>
            <textarea name="despription" id="description"></textarea>
            <input type="submit">
        </form>
    </div>
</body>
</html>