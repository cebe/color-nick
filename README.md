color-nick
==========

A simple PHP lib that can color nick names to make them distinguishable in a chat room.

Requirements
------------

PHP 5.4 or higher.

Installation
------------

Using [Composer](http://getcomposer.org):

    composer require cebe/color-nick

Usage
-----

```php
<?php

use cebe\colornick\Color;

require(__DIR__ . '/vendor/autoload.php');

$color = Color::calculateColor($name);
```

See [example.php](example.php) for a working example.
Here is a screenshot of the output:

![Screenshot of color-nick library rendering result](screenshot.png)

License
-------

MIT, see [LICENSE](LICENSE.md) file for more details.
