# phpUnit Tutorial

This repo shows how to create a composer package and write a test for it.

## Install steps

```
curl -s http://getcomposer.org/installer | php
#    creates ./composer.phar

php composer.phar init  
#    creates ./composer.json, interactively
#    use it to add dev-dependency on phpunit 3.7.*

php composer.phar install --dev

php composer.phar update --dev
# run this whenever you tweak autoload in composer.json, regenerates vendor/autoload.php
```

## Resources

PHPUnit and Composer:

* https://jtreminio.com/2013/03/unit-testing-tutorial-introduction-to-phpunit/
* https://jtreminio.com/2013/03/unit-testing-tutorial-part-2-assertions-writing-a-useful-test-and-dataprovider/

Composer:

* http://getcomposer.org/doc/01-basic-usage.md
* http://getcomposer.org/doc/04-schema.md
* http://stackoverflow.com/questions/13764309/how-to-use-phpunit-installed-from-composer

