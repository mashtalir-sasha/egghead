<?php

use SleepingOwl\Admin\Navigation\Page;

return [

    AdminSection::addMenuPage(\App\Models\About::class)
        ->setIcon('fas fa-info-circle')
        ->setPriority(1)
        ->setTitle('Про нас'),
    AdminSection::addMenuPage(\App\Models\AboutOther::class)
        ->setIcon('fas fa-info-circle')
        ->setPriority(2)
        ->setTitle('Про нас (інше)'),
    AdminSection::addMenuPage(\App\Models\Teacher::class)
        ->setIcon('fas fa-users')
        ->setPriority(3)
        ->setTitle('Викладачі'),
    [
        'title' => "Офлайн курси",
        'icon' => 'fas fa-graduation-cap',
        'priority' => '4',
        'pages' => [
            (new Page(\App\Models\OffGroup::class))
                ->setIcon('fas fa-users')
                ->setPriority(1)
                ->setTitle('Групові'),
            (new Page(\App\Models\OffIndivid::class))
                ->setIcon('fas fa-user')
                ->setPriority(2)
                ->setTitle('Індивідуальні'),
        ]
    ],
    [
        'title' => "Онлайн курси",
        'icon' => 'fas fa-signal',
        'priority' => '5',
        'pages' => [
            (new Page(\App\Models\OnGroup::class))
                ->setIcon('fas fa-users')
                ->setPriority(1)
                ->setTitle('Групові'),
            (new Page(\App\Models\OnIndivid::class))
                ->setIcon('fas fa-user')
                ->setPriority(2)
                ->setTitle('Індивідуальні'),
        ]
    ],
    AdminSection::addMenuPage(\App\Models\Banner::class)
        ->setIcon('fas fa-image')
        ->setPriority(6)
        ->setTitle('Банери'),
    AdminSection::addMenuPage(\App\Models\Faq::class)
        ->setIcon('fas fa-question')
        ->setPriority(7)
        ->setTitle('Питання-відповідь'),
    AdminSection::addMenuPage(\App\Models\Contact::class)
        ->setIcon('fas fa-info')
        ->setPriority(8)
        ->setTitle('Контакти'),
];
