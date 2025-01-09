<?php

namespace app\components;

class OverlayWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render("widget/overlay");
    }
}