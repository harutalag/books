<?php
/** @var app\models\Author[] $model */
?>
<table class="table mb-4">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Автор</th>
        <th scope="col">
            Количество книг
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $key => $author){?>
        <tr>
            <th><?=++$key?></th>
            <th class="text-nowrap" scope="row"><?=$author->full_name?></th>
            <td><?=$author->book_count?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>