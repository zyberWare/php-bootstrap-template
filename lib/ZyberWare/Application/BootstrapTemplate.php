<?php
/**
 * Copyright 2013 Eric Enold <zyberspace@zyberware.org>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
namespace ZyberWare\Application;

/**
 * Basic template for bootstraps.
 */
abstract class BootstrapTemplate
{
    /**
     * Calls all other public methods of the class, except itself.
     *
     * @param Core $application The application-core
     *
     * @todo Remove the application-core dependency and just pass all given parameters to the called methods.
     */
    public function run(Core $application)
    {
        $reflection = new \ReflectionClass($this);
        $methods = $reflection->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($methods as $method) {
            if ($method->name !== 'run') {
                $method->invoke($this, $application);
            }
        }
    }
}
