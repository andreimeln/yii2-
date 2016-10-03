<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php
$form = ActiveForm::begin([
	'id' => 'tweet-form',
	'options' => ['class' => 'form-horizontal'],
]);
?>
<?= $form->field($tweet, 'text')->textInput() ?>

<?= Html::submitButton('Submit tweet', ['class' => 'btn btn-primary']) ?>
<?php
ActiveForm::end()
?>
