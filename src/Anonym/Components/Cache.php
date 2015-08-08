<?php

namespace Anonym\Components\Cache;

/**
 * Class Cache
 * @package Anonym\Components\Cache
 */
class Cache
{

    /**
     * S�r�c� objesini tutar
     *
     * @var DriverInterface
     */
    private $driver;


    /**
     * S�r�c� listesini tutar
     *
     * @var array
     */
    private $driverList;


    /**
     * ayarlar� tutar
     *
     *
     * @var array -> config
     */
    private $config;


    /**
     * Ayarlar� kullan�r
     *
     * @param DriverInterface $driver
     * @param array $config
     */
    public function __construct(DriverInterface $driver, array $config = [])
    {
        $this->setDriver($driver);
        $this->setConfig($config);

        $this->useDefaults();
    }

    /**
     *
     * �n tan�ml� ayarlar� ayarlar
     */
    private function useDefaults()
    {
        $this->setDriverList([
            'local' => LocalDriver::class,
        ]);
    }

    /**
     * @return DriverInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param DriverInterface $driver
     * @return Cache
     */
    public function setDriver(DriverInterface $driver)
    {
        $this->driver = $driver;
        return $this;
    }

    /**
     * @return array
     */
    public function getDriverList()
    {
        return $this->driverList;
    }

    /**
     * @param array $driverList
     * @return Cache
     */
    public function setDriverList($driverList)
    {
        $this->driverList = $driverList;
        return $this;
    }

    /**
     * Ayarlar� d�nd�r�r
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Ayarlar� ayarlar
     *
     * @param array $config
     * @return Cache
     */
    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }


}
