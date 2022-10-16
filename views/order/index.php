<?php 

/** @var yii\web\View $this */
$this->title = 'Заказы';

/*
    Добавьте в tbody таблицы код для вывода информации из массива orders
    в соответствии с заголовком
<?php var_dump($orders); ?>
    Дополнительные задания (необязательно к выполнению):
        - если отсутствует какая-либо информация по клиенту - подсветить строку красным
        - добавить итоговую сумму работ по каждому заказу
*/
?>
<script>
    function change_img_mouse_over(){
        let change_img = document.getElementById("change_img");
        change_img.src = "img/2img.png"
    }
    function change_img_mouse_out(){
        let change_img = document.getElementById("change_img");
        change_img.src = "img/1img.png"
    }
</script>  
<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID заказа</th>
                <th>ФИО клиента</th>
                <th>Телефон клиента</th>
                <th>Имя питомца</th>
                <th>Работы</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1;?>
            <?php for($i = 0; $i < count($orders); $i++): ?>

                <?php if(array_search(null, $orders[$i])): ?> <!--Подсвечивание красным -->
                <tr class="bg-danger">
                <?php else: ?>
                <tr class="table-success">
                <?php endif; ?>
                    <th><?= $orders[$i]["id"] ?></th>
                    <th><?= $orders[$i]["name"] ?></th>
                    <th><?= $orders[$i]["phone"] ?></th>
                    <th><?= $orders[$i]["name_pet"] ?></th>
                    <th><?= $orders[$i]["name_work"] ?></th>
                </tr>

                <?php if( $orders[$i]["id"] != $orders[$i + 1]["id"]): ?>  <!--Вывод суммы заказов -->
                    <tr class="table-info">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Cумма заказов id = <?= $orders[$i]["id"] ?>:</th>
                        <th><?= $counter ?></th>
                    </tr>
                    <?php $counter = 1; ?>
                <?php else: ?>
                    <?php ++$counter; ?>
                <?php endif; ?>

            <?php endfor; ?>
        </tbody>
    </table>
    <img  src = "img/1img.png" widtg = "250" height = "250" id = "change_img" onmouseover = "change_img_mouse_over()" onmouseout = "change_img_mouse_out()">
</div>
