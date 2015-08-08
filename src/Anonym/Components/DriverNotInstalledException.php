<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyad�r.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\Cache;
use Exception;

/**
 * Class DriverNotInstalledException
 * @package Anonym\Components\Cache
 */
class DriverNotInstalledException extends Exception
{

    /**
     * �stisnay� olu�turur
     *
     * @param string $message
     */
    public function __construct($message = '')
    {
        $this->message = $message;
    }

}
