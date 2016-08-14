<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Статический контент';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Контакты</a></li>
        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Промо</a></li>
        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Преимущества</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="tab_1">
            <?= $this->render('contacts') ?>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <?= $this->render('promo') ?>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane active" id="tab_3">
            <?= $this->render('advantages') ?>
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
