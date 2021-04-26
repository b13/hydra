<?php
return [
    'frontend' => [
        'hydra/respond-headers' => [
            'target' => \B13\Hydra\Middleware\ResponseHeaderMiddleware::class,
            'before' => [
                'typo3/cms-frontend/content-length-headers',
            ],
            'after' => [
                'typo3/cms-frontend/site',
            ],
        ]
    ]
];
