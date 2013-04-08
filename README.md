# FreeJsMin

FreeJsMin is a PHP implementation of "JSMin, The JavaScript Minifier" algorithm described by Douglas Crockford in the [JSMin documentation](https://github.com/douglascrockford/JSMin/blob/67754f619d0562f583dc5e869d2c05c0af21aca9/README).  As such, FreeJsMin is *NOT* encumbered by the (arguably unenforceable) morality clause contained in the JSMin license.

## Usage

Instantiate FreeJsMin and call the minify() method with the JavaScript source to be minified:

```php
    use VIPSoft\FreeJsMin\JsMin;

    ...

    $minifier = new JsMin();
    $output = $minifier->minify($javaScript);
```

## Source

[Github](https://github.com/vipsoft/FreeJsMin)

## Copyright 

Copyright (c) 2013 VIP Software Technologies Inc.

## License

BSD 2-Clause "Simplified".  See LICENSE.md for details.

## Credits

* Anthon Pang [robocoder](http://github.com/robocoder)
* [Others](https://github.com/vipsoft/FreeJsMin/graphs/contributors)
