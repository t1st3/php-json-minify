php-json-minify
==============

[![Latest Stable Version](https://poser.pugx.org/jonrandoem/php-json-minify/v/stable.png)](https://packagist.org/packages/jonrandoem/php-json-minify)
[![Build Status](https://travis-ci.org/jonrandoem/php-json-minify.png?branch=master)](https://travis-ci.org/jonrandoem/php-json-minify)


About
--------------

URL: [https://github.com/jonrandoem/php-json-minify](https://github.com/jonrandoem/php-json-minify)

Author: jonrandoem

Version: 0.1.0



Build dependencies
--------------

In order to build your generated Composer project from its source, you will need Grunt and PHP on the command line.

So, you must install PHP5 on your system on your command line. Test it:

```
php --help
```


To install Grunt globally on the command line (and run the above build task), run:

```
npm install -g grunt-cli
```


Then, with Grunt, you can install Composer, PhpDocumentor, PhpUnit and PhpCPD locally. Just run once:

```
grunt init
```




Build the sources
--------------

Once all your dependencies are installed, you can build your project with Grunt:

```
grunt build
```

The build process will run the following tasks:

* PhpLint: runs php -l over the "src" folder
* Runs the tests located in the "tests" folder with [PHPUnit](http://phpunit.de/)
* Generates a [PhpDocumentor](http://phpdoc.org) documentation in the "doc" folder from the files of the "src" folder
* Detects copy/paste of code in the files of the "src" folder with [PhpCPD](https://github.com/sebastianbergmann/phpcpd)

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)


Usage
--------------

```
<?php
require_once(dirname(__FILE__) . '/src/jonrandoem/JSONMin/JSONMin.php');
use jonrandoem\JSONMin\JSONMin as jsonMin;

$a = jsonMin::minify('{"a": "b"}');
echo $a;

}
?>
```



Credits
--------------

php-json-minify was initiated with [generator-composer](https://github.com/T1st3/generator-composer), a [Yeoman](http://yeoman.io) generator that builds a PHP Composer project.

This project is based on JSON.minify (https://github.com/getify/JSON.minify) by Kyle Simspon (https://github.com/getify), which is released under the MIT license.

This project uses the following as development dependencies:

* [PHPUnit](http://phpunit.de/)
* [PhpDocumentor](http://phpdoc.org)
* [Php Copy/Paste Detector](https://github.com/sebastianbergmann/phpcpd)


License
--------------

[License](https://github.com/jonrandoem/php-json-minify/blob/master/LICENSE)