<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Разделы сайта', 'options' => ['class' => 'header']],
                    ['label' => 'Шапка сайта', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Главная страница', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Раздел о нас', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Раздел статистики', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    [
                        'label' => 'Раздел портфолио',
                        'icon' => 'file-code-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Удалить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Редактировать', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ]
                    ],

                    [
                        'label' => 'Аренда декора',
                        'icon' => 'file-code-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Удалить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Редактировать', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ],
                    ],

                    [
                        'label' => 'Раздел видео',
                        'icon' => 'file-code-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Удалить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Редактировать', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ]
                    ],

                    [
                        'label' => 'Раздел Блог',
                        'icon' => 'file-code-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Удалить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Редактировать', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ],
                    ],

                    [
                        'label' => 'Раздел партнеры',
                        'icon' => 'file-code-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Удалить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Редактировать', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ]
                    ],

                    [
                        'label' => 'Раздел команда',
                        'icon' => 'file-code-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Добавить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Удалить контент', 'icon' => 'dashboard', 'url' => ['/gii']],
                            ['label' => 'Редактировать', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ]
                    ],


                    ['label' => 'Раздел контакты', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Подвал сайта', 'icon' => 'file-code-o', 'url' => ['/gii']],

                ],
            ]
        ) ?>

    </section>

</aside>
