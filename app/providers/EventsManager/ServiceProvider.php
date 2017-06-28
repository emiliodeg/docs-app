<?php

/*
  +------------------------------------------------------------------------+
  | Phalcon                                                                |
  +------------------------------------------------------------------------+
  | Copyright (c) 20111-2017 Phalcon Team (https://phalconphp.com)         |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconphp.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
*/

namespace Docs\Providers\EventsManager;

use Phalcon\DiInterface;
use Phalcon\Events\Manager;
use Phalcon\Di\ServiceProviderInterface;

/**
 * Docs\Providers\EventsManager\ServiceProvider
 *
 * @package Docs\Providers\EventsManager
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di)
    {
        $di->setShared(
            'eventsManager',
            function () {
                $em = new Manager();
                $em->enablePriorities(true);

                return $em;
            }
        );
    }
}
