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
     * Ayarlar� kullan�r
     *
     * @param DriverInterface $driver
     * @param array $config
     */
    public function __construct(DriverInterface $driver, array $config = [])
    {
        $this->setDriver($driver ,$config);
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
     * @param array $configs
     * @throws DriverNotInstalledException
     * @return Cache
     */
    public function setDriver(DriverInterface $driver, array $configs = [])
    {

        if(true !== $driver->check())
        {
            throw new DriverNotInstalledException(sprintf('%s s�r�c�n�z kullan�ma haz�r de�il.', get_class($driver)));
        }

        $this->driver = $driver;
        $this->driver->boot($configs);

        return $this;
    }
    /**
     * Dinamik olarak s�r�c�den method �a�r�l�r
     *
     * @param string $name
     * @param array $args
     * @return mixed
     */
    public function __call($name, $args)
    {
        return call_user_func_array([$this->getDriver(), $name], $args);
    }

}
