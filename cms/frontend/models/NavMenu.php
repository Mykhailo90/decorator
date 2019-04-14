<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class NavMenu extends ActiveRecord
{
    public $title;
    public $href;
    public $position;
    public $status;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'href', 'position', 'status'], 'required'],
            [['position', 'status'], 'integer'],
            [['title', 'href'], 'string'],
            [['title', 'href', 'position'], 'unique'],
        ];
    }

    public static function tableName()
    {
        return 'nav_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Название раздела',
            'href' => 'Имя линка (only english)',
            'position' => 'Порядковый номер',
            'status' => 'Отображаем'
        ];
    }
}
