# phpUnit Tutorial

This repo shows how to create a composer package and write a test for it.

[![Build Status](https://travis-ci.org/dergachev/phpunit-tutorial.png)](https://travis-ci.org/dergachev/phpunit-tutorial)


## Install steps

```
curl -s http://getcomposer.org/installer | php
#    creates ./composer.phar

# php composer.phar init  
#    creates ./composer.json, interactively (only needed to do this once!)
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


## Travis steps 

Required adding the following to README.md:

```
[![Build Status](https://travis-ci.org/dergachev/phpunit-tutorial.png)](https://travis-ci.org/dergachev/phpunit-tutorial)
```

And the following to .travis.yml:

```
language: php
php:
  - "5.5"
  - "5.4"
  - "5.3"
```

Then signed into https://travis-ci.org/profile , clicked "Sync" to pull in new
github repo, and enabled travis on it.  The first build MUST BE TRIGGERED via
git push.

Resources:

* https://travis-ci.org/dergachev/phpunit-tutorial/
* http://about.travis-ci.org/docs/user/getting-started/
* http://about.travis-ci.org/docs/user/languages/php/
* http://about.travis-ci.org/docs/user/status-images/

