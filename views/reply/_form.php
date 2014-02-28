<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Reply $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="reply-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'topic_id')->textInput() ?>

		<?= $form->field($model, 'source')->textarea(['rows' => 6]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
