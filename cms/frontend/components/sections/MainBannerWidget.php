<?php

namespace frontend\components\sections;

use yii\base\Widget;

class MainBannerWidget extends Widget
{
    public $tpl;
    public $data;
    public $html;

    public function init()
    {
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'MainBanner';
        }

        $this->tpl .= '.php';
    }

    public function run()
    {
        $this->data = [
            'img-path' => '/img/big-logo.png',
            'alt' => 'Dva Dyhaniya Decor...',
            'link' => '#about',
            'btnText' => 'Почему мы...',
        ];

        $this->html = $this->getHtml($this->data);

        return $this->html;
    }

    protected function getHtml($data)
    {
        ob_start();

        include __DIR__ . '/views/' . $this->tpl;

        return ob_get_clean();
    }
}