<?php

/*
 * This file is part of the Doctrine\OrientDB package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Undefined exceptionclass gets raised when you try to call a non existing
 * method in a class.
 *
 * @package    Doctrine\ODM
 * @subpackage OrientDB
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Doctrine\ODM\OrientDB;

use Doctrine\OrientDB\Exception;

class UndefinedMethodException extends Exception
{
    const MESSAGE = "The class %s does not have the %s method.";

    /**
     * Constructs the error message.
     *
     * @param string $class
     * @param string $method
     */
    public function __construct($class, $method)
    {
        $this->message = sprintf(self::MESSAGE, $class, $method);
    }
}
