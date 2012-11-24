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
 * Rid class encapsulates a rid.
 *
 * @package    Doctrine\OrientDB
 * @subpackage Foundation
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Doctrine\OrientDB\Foundation\Types;

use Doctrine\OrientDB\Query\Validator\Rid as RidValidator;

class Rid
{
    protected $rid;

    /**
     * Instantiates a new object, injecting the $rid;
     *
     * @param string $rid
     */
    public function __construct($rid)
    {
        $validator = new RidValidator();
        $validator->check($rid);
        $this->rid = $rid;
    }

    /**
     * Returns the rid associated with the current object.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->rid;
    }
}
