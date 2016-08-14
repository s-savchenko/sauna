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
            <label class="col-sm-2 control-label">Промо-акция</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="promo" placeholder="Надпись рядом с формой заказа"
                       value="<?= Settings::promo()?>">
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info">Сохранить</button>
    </div>
    <!-- /.box-footer -->
<?php ActiveForm::end();