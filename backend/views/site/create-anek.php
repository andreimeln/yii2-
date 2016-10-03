<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php
$form = ActiveForm::begin([
	'id' => 'anek-form',
	'options' => ['class' => 'form-horizontal'],
]);
?>
<?= $form->field($anek, 'text')->textInput() ?>
<?= $form->field($anek, 'image')->textInput() ?>

<?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
<?php
ActiveForm::end()
?>
Contact GitHub API Training Shop Blog About
