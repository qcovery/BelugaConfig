<?php
namespace BelugaConfig\Module\Configuration;

$config = [
    'service_manager' => [
        'allow_override' => true,
        'factories' => [
            'BelugaConfig\AjaxHandler\GetResultCount' => 'BelugaConfig\AjaxHandler\GetResultCountFactory',
        ],
        'aliases' => [
            'getResultCount' => 'BelugaConfig\AjaxHandler\GetResultCount',
        ],
    ],
];

return $config;

