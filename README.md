# wp-base

This is not a plugin, nor really anything more than a core part with a few
minor functions for jitesoft WordPress plugins.

The lib allows the jitesoft(...) method to be called, which basically contains
a static container which can be queried for objects.  
In case a jitesoft plugin uses the base package, it will inject 
the object into the container making it available to easily query from anywhere:

```php
<?php
jitesoft('logger')->debug(...);
```

Depending on the type of plugin, the object could be either of a singleton type
(which means that it won't be re-created) or as a standard object.  

You could make use of the object in other plugins if wanted, but there will be
no real support of the package.

## Basic usage

```php
// Add something
Jitesoft\WordPress\Plugins\Base\getContainer()->bind('something', 'something');
// Get something
Jitesoft\WordPress\Plugins\Base\getContainer()->get('something'); // 'something'
// Get something via convenience method
jitesoft('something'); // 'something'
```

For full documentation about the underlying container, check out 
[jitesoft/container](https://packagist.org/packages/jitesoft/container)

## License

MIT
