<?php

namespace frontend\components\sections;

use yii\base\Widget;

class AboutWidget extends Widget
{
    public $tpl;
    public $data;
    public $html;

    public function init()
    {
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'About';
        }

        $this->tpl .= '.php';
    }

    public function run()
    {
        $cards = [
            [
                'img' => '<i class="fa fa-briefcase ot-circle"></i>',
                'title' => 'Комплексный подход',
                'text' => 'Создаем концепции от небольшой детали до масштабного оформления!'
            ],
            [
                'img' => '<i class="fa fa-photo ot-circle"></i>',
                'title' => 'Эксклюзивность',
                'text' => 'Наши кейсы всегда уникальны! А наши идеи и желания часто опережают время...'
            ],
            [
                'img' => '<i class="fa fa-camera-retro ot-circle"></i>',
                'title' => 'Лучшие фотозоны',
                'text' => 'Наши фото-стенды способны воссоздать любой из миров... Мы способны окунуть вас как в "глубокую древность",
                        так и отправить путешествовать в далекое будущее...'
            ],
            [
                'img' => '<i class="fa fa-cube ot-circle"></i>',
                'title' => 'Магия',
                'text' => 'Работая с нами, Вы всегда получите больше, чем расчитывали!'
            ],
        ];
        $this->data = [
            'title' => 'О нас',
            'text' => 'Команда Dva Duhaniya Decor – это сумасшедшие  и влюбленные в свою работу люди!
                        Это люди  где каждый художник, архитектор, декоратор, дизайнер, технолог – инноватор,
                        химик, физик, немного  маг и волшебник! Мы создаем – то, во что верим и любим!
                        Верим, что важна каждая деталь!',
            'card-content' => $cards,
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