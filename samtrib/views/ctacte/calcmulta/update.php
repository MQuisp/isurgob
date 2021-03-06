<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ctacte\CalcMulta */

$title = 'Modificar Multa';
$this->params['breadcrumbs'][] = ['label' => 'Configuraciones', 'url' => ['//site/config'] ];
$this->params['breadcrumbs'][] = ['label' => 'Multas', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Modificar Multa';
?>
<div class="multa-update">

    <h1><?= Html::encode($title) ?></h1>

    <div class="form">
    	<?= $this->render('_form', [
        	'model' => $model,
            'error' => $error,
    	]) ?>
    	<br>
    </div>
</div>
