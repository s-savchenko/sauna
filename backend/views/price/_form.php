<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widgets\Box;
use backend\widgets\TimeSelect;
use \common\models\Price;

/* @var $this yii\web\View */
/* @var $model common\models\Price */
/* @var $form yii\widgets\ActiveForm */

Box::begin([
    'header' => 'Добавить цену',
    'type' => 'info'
]);

?>

<div class="price-form">
    <div class="row">
        <div class="col-lg-4">
            <div class="input-group">
                        <span class="input-group-addon">
                          Начиная с
                        </span>
                <?php TimeSelect::run(); ?>
            </div>
            <!-- /input-group -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-4">
            <div class="input-group">
                        <span class="input-group-addon">
                          по
                        </span>
                <?php TimeSelect::run(); ?>
            </div>
            <!-- /input-group -->
        </div>
        <!-- /.col-lg-6 -->
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label"></label>

        <div class="col-sm-10">
            <select class="form-control">
                <option value="<?= Price::WORKDAY ?>">Будний день</option>
                <option value="<?= Price::DAYOFF ?>">Выходной</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label"></label>

        <div class="col-sm-10">
            <select class="form-control">
                <?php
                    foreach ($rooms as $room)
                        printf('<option value="%s">%s</option>', $room->id, $room->name);
                ?>
            </select>
        </div>
    </div>

</div>

<?php
Box::end();