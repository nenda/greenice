<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Critique */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="critique-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_auteur')->textInput() ?>

    <?= $form->field($model, 'contenu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
