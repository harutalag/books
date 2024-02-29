<?php

/** @var yii\web\View $this */
use yii\widgets\ListView;
use yii\bootstrap5\ActiveForm;

$this->title = 'My Yii Application';
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Список авторов</h1>
        </div>
    </div>
</section>
<div class="site-index">
    <?=
    ListView::widget([
        'dataProvider' => $listDataProvider,
        'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
        ],
        'itemView' => '_list_item',
        'layout' => "{pager}\n<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>{items}</div>\n{summary}",
    ]);
    ?>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'subscribe']); ?>
                <div class="modal-body">
                    <?= $form->field($model, 'phone',)
                        ->widget(\yii\widgets\MaskedInput::className(), ['mask' => '+7(999) 999-9999'])
                        ->textInput();
                    ?>

                    <?= $form->field($model, 'author_id')->hiddenInput(['id' => 'subscribe_author_id'])->label(false) ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <?= \yii\helpers\Html::submitButton('Подпистся', ['class' => 'btn btn-primary send-subscribe', 'name' => 'subscribe-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<?php
$js = <<<js
$('.subscribe-btn').on('click', function (){
    $('#subscribe_author_id').val($(this).data('author'));
});
js;
$this->registerJs($js);
?>
