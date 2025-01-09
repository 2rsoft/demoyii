<?php

namespace app\components;

class NavbarWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render("widget/navbarSimpel");
    }
}