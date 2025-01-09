<?php

namespace app\components;

class FooterWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render("widget/footer");
    }
}