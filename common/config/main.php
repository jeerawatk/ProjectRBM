<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'formatter' => [
          'class' => 'yii\i18n\Formatter',
          'dateFormat' => 'php:Y-m-d',
          'datetimeFormat' => 'php:d/m/Y H:i:s',
          'timeFormat' => 'php:H:i:s',
          'timeZone' => 'Asia/Bangkok',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
