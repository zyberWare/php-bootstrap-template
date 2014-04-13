zyberware/bootstrap-template
===========
Basic template for php-bootstraps.

Example
-------

```php
class Bootstrap extends \ZyberWare\BootstrapTemplate
{
    public function doSomeStuff()
    {
        ...
    }

    public function doSomeOtherStuffWithAWeirdName($varWeGetFromTheRunMethod, $another)
    {
        ...
    }
}

$bootstrap = new Bootstrap();
$bootstrap->run('random', 'strings');
```

Documentation
-------------
To create the docs, just run `phpdoc` in the the project-root.
An online-version is available at [phpdoc.zyberware.org/bootstrap-template/](http://phpdoc.zyberware.org/bootstrap-template/).

License
-------
This software is licensed under the [Mozilla Public License v. 2.0](http://mozilla.org/MPL/2.0/). For more information, read the file `LICENSE`.
