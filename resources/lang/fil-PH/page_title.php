<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'admin' => [
        '_' => 'admin',
    ],
    'admin_forum' => [
        '_' => 'admin',
    ],
    'admin_store' => [
        '_' => 'admin',
    ],
    'error' => [
        'error' => [
            '400' => 'di-wastong request',
            '404' => 'nawawala',
            '403' => 'ipinagbabawal',
            '401' => 'hindi awtorisado',
            '401-verification' => 'beripikasyon ng account',
            '405' => 'nawawala',
            '422' => 'di-wastong request',
            '429' => 'napakaraming hiling',
            '500' => 'may nasira',
            '503' => 'maintenance',
        ],
    ],
    'forum' => [
        '_' => 'forum',
        'topic_watches_controller' => [
            'index' => 'dashboard',
        ],
    ],
    'main' => [
        'account_controller' => [
            'edit' => 'dashboard',
            'verify_link' => 'beripikasyon ng account',
        ],
        'artists_controller' => [
            '_' => 'featured artists',
        ],
        'beatmap_discussion_posts_controller' => [
            '_' => 'beatmap discussion posts',
        ],
        'beatmap_discussions_controller' => [
            '_' => 'beatmap discussions',
        ],
        'beatmap_packs_controller' => [
            '_' => 'beatmap packs',
        ],
        'beatmapset_discussion_votes_controller' => [
            '_' => 'beatmap discussion votes',
        ],
        'beatmapset_events_controller' => [
            '_' => 'beatmap history',
        ],
        'beatmapset_watches_controller' => [
            'index' => 'dashboard',
        ],
        'beatmapsets_controller' => [
            'discussion' => 'beatmap discussion',
            'index' => 'beatmap listing',
            'show' => 'beatmap info',
        ],
        'changelog_controller' => [
            '_' => 'changelog',
        ],
        'chat_controller' => [
            '_' => 'chat',
        ],
        'comments_controller' => [
            '_' => 'mga komento',
        ],
        'contests_controller' => [
            '_' => 'mga paligsahan',
        ],
        'follows_controller' => [
            'index' => 'dashboard',
        ],
        'friends_controller' => [
            'index' => 'dashboard',
        ],
        'groups_controller' => [
            'show' => 'mga grupo',
        ],
        'home_controller' => [
            'get_download' => 'download',
            'index' => 'dashboard',
            'search' => 'hanapin',
            'support_the_game' => 'suportahan ang laro',
            'testflight' => 'testflight',
        ],
        'legal_controller' => [
            '_' => 'impormasyon',
        ],
        'livestreams_controller' => [
            '_' => 'mga live stream',
        ],
        'matches_controller' => [
            '_' => 'matches',
        ],
        'news_controller' => [
            '_' => 'news',
        ],
        'notifications_controller' => [
            '_' => 'notifications history',
        ],
        'password_reset_controller' => [
            '_' => 'password reset',
        ],
        'ranking_controller' => [
            '_' => 'ranking',
        ],
        'scores_controller' => [
            '_' => 'performance',
        ],
        'store_controller' => [
            '_' => 'osu!store',
        ],
        'tournaments_controller' => [
            '_' => 'tournaments',
        ],
        'users_controller' => [
            '_' => 'player info',
            'disabled' => 'abiso',
        ],
        'wiki_controller' => [
            '_' => 'knowledge base',
        ],
    ],
    'multiplayer' => [
        'rooms_controller' => [
            '_' => 'ranking',
        ],
    ],
    'passport' => [
        'authorization_controller' => [
            '_' => '',
        ],
    ],
    'store' => [
        '_' => 'osu!store',
    ],
    'users' => [
        'modding_history_controller' => [
            '_' => 'modder info',
        ],
        'multiplayer_controller' => [
            '_' => 'kasaysayan sa multiplayer',
        ],
    ],
];
