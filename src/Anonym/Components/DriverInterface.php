<?php

namespace Anonym\Components\Cache;

/**
 * Interface DriverInterface
 * @package Anonym\Components\Cache
 */
interface DriverInterface
{

    /**
     *
     *
     * @return bool
     */
    public function check();

    /**
     * Ayarlar� kullan�r ve baz� ba�lang�� i�lemlerini ger�ekle�tirir
     *
     * @param array $configs
     * @return mixed
     */
    public function boot(array $configs = []);
}
