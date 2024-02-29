<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\Book $model */
/** @var \yii\bootstrap5\ActiveForm $form */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation' => true,
        'options' => ['enctype'=>'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'isbn', ['enableAjaxValidation' => true])
                ->widget(\yii\widgets\MaskedInput::className(), ['mask' => '999-9-99-999999-9'])
                ->textInput();
            ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'authors')->widget(\kartik\select2\Select2::classname(), [
                'data' => \app\models\Author::getAuthorsList(),
                'options' => ['placeholder' => 'Выберите автора ...', 'multiple' => true],
                'pluginOptions' => [
                    'tags' => true,
                    'tokenSeparators' => [',', ' '],
                    'maximumInputLength' => 10
                ],
            ]);
            ?>

            <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::classname(), [
                'options' => ['placeholder' => 'Введите дату рождения ...'],
                'removeButton' => false,
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]);
            ?>

            <?= $form->field($model, 'photo')->widget(floor12\files\components\FileInputWidget::class) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
