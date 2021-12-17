<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'audio' => [
        'autoplay' => 'Играть следующий трек автоматически',
    ],

    'defaults' => [
        'page_description' => 'osu! - Ритм всего лишь в *клике* от тебя! С Ouendan/EBA, Taiko и оригинальными режимами игры, а также многофункциональным редактором карт.',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => 'набор карт',
            'beatmapset_covers' => 'обложки карт',
            'contest' => 'конкурс',
            'contests' => 'конкурсы',
            'root' => 'консоль',
        ],

        'artists' => [
            'index' => 'список',
        ],

        'changelog' => [
            'index' => 'список',
        ],

        'help' => [
            'index' => 'заглавная',
            'sitemap' => 'Карта сайта',
        ],

        'store' => [
            'cart' => 'корзина',
            'orders' => 'история заказов',
            'products' => 'товары',
        ],

        'tournaments' => [
            'index' => 'список',
        ],

        'users' => [
            'modding' => 'моддинг',
            'multiplayer' => 'мультиплеер',
            'show' => 'информация',
        ],
    ],

    'gallery' => [
        'close' => 'Закрыть (Esc)',
        'fullscreen' => 'Полноэкранный режим',
        'zoom' => 'Увеличить / уменьшить',
        'previous' => 'Предыдущий (стрелка влево)',
        'next' => 'Следующий (стрелка вправо)',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'карты',
        ],
        'community' => [
            '_' => 'сообщество',
            'dev' => 'разработка',
        ],
        'help' => [
            '_' => 'помощь',
            'getAbuse' => 'сообщить о нарушении',
            'getFaq' => 'чаво',
            'getRules' => 'правила',
            'getSupport' => 'мне правда нужна помощь!',
        ],
        'home' => [
            '_' => 'общее',
            'team' => 'команда',
        ],
        'rankings' => [
            '_' => 'рейтинг',
            'kudosu' => 'по кудосу',
        ],
        'store' => [
            '_' => 'магазин',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Общее',
            'home' => 'Главная',
            'changelog-index' => 'Список изменений',
            'beatmaps' => 'Библиотека карт',
            'download' => 'Скачать osu!',
        ],
        'help' => [
            '_' => 'Помощь и сообщество',
            'faq' => 'Часто задаваемые вопросы',
            'forum' => 'Форумы',
            'livestreams' => 'Прямые трансляции',
            'report' => 'Сообщить о проблеме',
            'wiki' => 'Вики',
        ],
        'legal' => [
            '_' => 'Юридическая информация и статус',
            'copyright' => 'Авторские права (DMCA)',
            'privacy' => 'Конфиденциальность',
            'server_status' => 'Статус серверов',
            'source_code' => 'Исходный код',
            'terms' => 'Условия использования',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => 'Неверный параметр запроса',
            'description' => '',
        ],
        '404' => [
            'error' => 'Страница не найдена',
            'description' => "Извините, но запрашиваемая Вами страница не найдена.",
        ],
        '403' => [
            'error' => "Вы не должны быть здесь.",
            'description' => 'Вы можете попробовать вернуться назад. Наверное.',
        ],
        '401' => [
            'error' => "Вы не должны быть здесь.",
            'description' => 'Вы можете попробовать вернуться назад. Наверное... Или, возможно, войти в аккаунт.',
        ],
        '405' => [
            'error' => 'Страница не найдена',
            'description' => "Извините, но запрашиваемая Вами страница не найдена.",
        ],
        '422' => [
            'error' => 'Недопустимый параметр запроса',
            'description' => '',
        ],
        '429' => [
            'error' => 'Превышен лимит запросов',
            'description' => '',
        ],
        '500' => [
            'error' => 'О нет! Что-то сломалось! ;_;',
            'description' => "Нам уже известно о проблеме, и мы работаем над её исправлением.",
        ],
        'fatal' => [
            'error' => 'О нет! Что-то сломалось (ужасно)! ;_;',
            'description' => "Нам уже известно о проблеме и мы работаем над ее исправлением.",
        ],
        '503' => [
            'error' => 'Закрыто на обслуживание!',
            'description' => "Техническое обслуживание обычно занимает от 5 секунд до 10 минут. Если оно затягивается, смотри :link для получения дополнительной информации.",
            'link' => [
                'text' => '',
                'href' => '',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "На всякий случай, вот код, который вы можете сообщить поддержке!",
    ],

    'popup_login' => [
        'button' => 'вход / регистрация',

        'login' => [
            'forgot' => "Я забыл свои данные",
            'password' => 'пароль',
            'title' => 'Войдите, чтобы продолжить',
            'username' => 'имя пользователя',

            'error' => [
                'email' => "Имя пользователя или электронная почта не существуют",
                'password' => 'Неверный пароль',
            ],
        ],

        'register' => [
            'download' => 'Скачать',
            'info' => 'Скачайте osu!, чтобы создать свою учётную запись!',
            'title' => "Нет аккаунта?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Настройки',
            'follows' => 'Подписки',
            'friends' => 'Друзья',
            'logout' => 'Выйти',
            'profile' => 'Мой профиль',
        ],
    ],

    'popup_search' => [
        'initial' => 'Начните печатать!',
        'retry' => 'Ошибка поиска. Нажмите для повтора.',
    ],
];
