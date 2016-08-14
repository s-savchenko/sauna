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

ActiveForm::begin(['options' => ['class' => 'form-horizontal settings-form']]); ?>
    <div class="box-body">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Название</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Название заведения"
                       required="required" value="<?= Settings::name()?>">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Телефон</label>

            <div class="col-sm-10">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Телефон для связи"
                       required="required" value="<?= Settings::phone()?>">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Электронная почта" value="<?= Settings::email()?>">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Адрес</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" placeholder="улица, номер дома"
                       required="required" value="<?= Settings::address()?>">
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info">Сохранить</button>
    </div>
    <!-- /.box-footer -->
<?php ActiveForm::end();