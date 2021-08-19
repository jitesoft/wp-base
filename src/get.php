<?php /** @noinspection ALL */

/**
 * Fetch an object from the jitesoft container.
 *
 * @param string $abstract
 * @return mixed|null
 */
function jitesoft(string $abstract) {
    $container = Jitesoft\WordPress\Plugins\Base\getContainer();
    if (!$container->has($abstract)) {
        return null;
    }
    return $container->get($abstract);
}
