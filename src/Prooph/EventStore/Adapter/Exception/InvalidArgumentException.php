<?php
/*
 * This file is part of the prooph/event-store.
 * (c) Alexander Miertsch <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 17.04.14 - 20:46
 */

namespace Prooph\EventStore\Adapter\Exception;

/**
 * Class InvalidArgumentException
 *
 * @package Prooph\EventStore\Adapter\Exception
 * @author Alexander Miertsch <contact@prooph.de>
 */
class InvalidArgumentException extends \InvalidArgumentException implements AdapterException
{
}
 