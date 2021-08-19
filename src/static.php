<?php
namespace Jitesoft\WordPress\Plugins\Base;

use Jitesoft\Container\Container;

function getContainer(): Container {
    static $container;
    if ($container === null) {
        $container = new Container();
    }

    return $container;
}



