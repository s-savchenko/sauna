<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 10.08.16
 * Time: 20:01
 */

namespace backend\widgets;

use \yiister\adminlte\widgets\Box as BoxLte;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\component\Icon;

class Box extends BoxLte
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->initTools();
        Html::addCssClass($this->options, 'box box-' . $this->type);
        if ($this->filled) {
            Html::addCssClass($this->options, 'box-solid');
        }
        echo Html::beginTag('div', $this->options);
        if (isset($this->header)) {
            echo Html::beginTag('div', ['class' => 'box-header with-border']);
            echo Html::tag(
                'h3',
                (isset($this->icon) ? new Icon($this->icon) . '&nbsp;' : '') . $this->header,
                ['class' => 'box-title']
            );
            if (!empty($this->tools)) {
                echo Html::tag('div', $this->tools, ['class' => 'box-tools pull-right']);
            }
            echo Html::endTag('div');
        }
        echo Html::beginTag('div', ['class' => 'box-body']);
    }
}