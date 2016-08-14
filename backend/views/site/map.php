<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 14.08.16
 * Time: 12:33
 */

use yii\bootstrap\ActiveForm;
use backend\widgets\Box;
use common\models\Settings;

$this->title = 'Схема проезда';
$this->params['breadcrumbs'][] = $this->title;

echo Settings::map();

Box::begin([
    'header' => 'Редактирование',
    'type' => 'info'
]);

ActiveForm::begin(['options' => ['class' => 'form-horizontal settings-form']]); ?>
    <div class="box-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">Адрес</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" placeholder="Адрес"
                       value="<?= Settings::address()?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Код карты</label>

            <div class="col-sm-10">
                <textarea class="form-control" name="map" placeholder="Код карты"><?= Settings::map()?></textarea>
                <p class="text-muted">* Введите код, полученный в конструкторе Яндекс.Карты</p>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info">Сохранить</button>
    </div>
    <!-- /.box-footer -->
<?php
ActiveForm::end();

Box::end();