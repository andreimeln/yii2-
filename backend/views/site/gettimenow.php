<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 29.09.16
 * Time: 17:56
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php
$t=time();
$moment_now = date(DATE_RFC2822);

echo "<br><br> In order to send date $moment_now to our Twitter press the button:";

$form = ActiveForm::begin([
    'id' => 'gettimenow-form',
    'options' => ['class' => 'form-horizontal'],
]);
?>
<?= $form->field($timenow, 'text')->hiddenInput(['value'=> $moment_now])->label(false); ?>

<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
<?php
ActiveForm::end()
?>