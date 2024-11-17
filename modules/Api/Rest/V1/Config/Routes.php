<?php

declare(strict_types=1);

namespace Modules\Api\Rest\V1\Config;

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->addPlaceholder('platformType', '(podcasting|social|funding)');

$routes->group(
    config('RestApi')
        ->gateway,
    [
        'namespace' => 'Modules\Api\Rest\V1\Controllers',
        'filter'    => 'rest-api',
    ],
    static function ($routes): void {
        $routes->group(
            'podcasts',
            static function ($routes): void {
                $routes->get('/', 'PodcastController::list');

                $routes->group(
                    '(:num)',
                    static function ($routes): void {
                        $routes->get('/', 'PodcastController::view/$1');

                        $routes->group(
                            'credits',
                            static function ($routes): void {
                                $routes->get('/', 'CreditController::list/$1');
                            }
                        );

                        $routes->group(
                            'episodes',
                            static function ($routes): void {
                                $routes->get('/', 'EpisodeController::list/$1');

                                $routes->group(
                                    '(:num)',
                                    static function ($routes): void {
                                        $routes->get('/', 'EpisodeController::view/$2');
                                        $routes->group(
                                            'credits',
                                            static function ($routes): void {
                                                $routes->get('/', 'CreditController::list/$1/$2');
                                            }
                                        );
                                    }
                                );
                            }
                        );

                        $routes->group(
                            'platforms',
                            static function ($routes): void {
                                $routes->get('/', 'PlatformController::list/$1');
                                $routes->get('(:platformType)', 'PlatformController::list/$1/$2');
                                $routes->get('(:any)', 'ExceptionController::notFound');
                            }
                        );
                    }
                );
            }
        );

        $routes->group(
            'episodes',
            static function ($routes): void {
                $routes->get('/', 'EpisodeController::list');
                $routes->post('/', 'EpisodeController::attemptCreate');
                $routes->post('(:num)/publish', 'EpisodeController::attemptPublish/$1');
                $routes->get('(:num)', 'EpisodeController::view/$1');
            }
        );

        $routes->group(
            'credits',
            static function ($routes): void {
                $routes->get('/', 'CreditsController::list');
            }
        );

        $routes->get('(:any)', 'ExceptionController::notFound');
    }
);
