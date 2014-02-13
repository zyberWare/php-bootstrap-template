<?php
/**
 * Copyright 2013 Eric Enold <zyberspace@zyberware.org>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
namespace ZyberWare;

/**
 * Basic template for bootstraps.
 */
abstract class BootstrapTemplate
{
    /**
     * Calls all other public methods of the class, except itself and passes all given parameters to them.
     */
    public function run()
    {
        $reflection = new \ReflectionClass($this);
        $methods = $reflection->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($methods as $method) {
            if ($method->name !== 'run') {
                $method->invokeArgs($this, func_get_args());
            }
        }
    }
}
