<?php

use function Hyperf\Config\config;


if (!function_exists('getModelForGuard')) {

    /**
     * @param string $guard
     *
     * @return string|null
     */
    function getModelForGuard(string $guard)
    {
        return config('permission.models.user');
//        return collect(config('auth.guards'))
//                        ->map(function ($guard) {
//                            if (!isset($guard['provider'])) {
//                                return;
//                            }
//
//                            return config("auth.providers.{$guard['provider']}.model");
//                        })->get($guard);
    }

}

if (!function_exists('isNotLumen')) {

    /**
     * check if application is lumen.
     *
     * @return bool
     */
    function isNotLumen(): bool
    {
        return true;
    }

}
