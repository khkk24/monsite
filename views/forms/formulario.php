<?php

use \yii\widgets\ActiveForm;
use \yii\helpers\html;
?>

<h2>Je suis bel et Bien dans formulario </h2>
<hr>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nome') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'idade') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar Dados', ['class' =>'btn btn-primary'])?>
    </div>

<?php ActiveForm::end() ?>