<?php

namespace frontend\components;

use frontend\models\NavMenu;
use yii\base\Widget;

class NavMenuWidget extends Widget
{
    public $tpl;
    public $data;
    public $html;

    public function init()
    {
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }

        $this->tpl .= '.php';
    }

    public function run()
    {
        $this->data = NavMenu::find()->where(['status' => 1])->indexBy('id')->asArray()->orderBy(['position' => SORT_ASC])->all();
        $this->html = $this->getMenuHtml($this->data);

        return $this->html;
    }

    protected function getMenuHtml($data)
    {
        $str = '';

        foreach ($data as $menuItem) {
            if ($menuItem['href'] == '#main') {
                continue;
            }
            $str .= $this->catToTemplate($menuItem);
        }

        return $str;
    }

    protected function catToTemplate($menuItem)
    {
        ob_start();

        include __DIR__ . '/menu_tpl/' . $this->tpl;

        return ob_get_clean();
    }
}