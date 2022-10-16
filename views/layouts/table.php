<?php 

/** @var yii\web\View $this */
$this->title = 'Заказы';
use app\assets\AppAsset;
AppAsset::register($this);
/*
    Добавьте в tbody таблицы код для вывода информации из массива orders
    в соответствии с заголовком

    Дополнительные задания (необязательно к выполнению):
        - если отсутствует какая-либо информация по клиенту - подсветить строку красным
        - добавить итоговую сумму работ по каждому заказу
*/
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица</title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

