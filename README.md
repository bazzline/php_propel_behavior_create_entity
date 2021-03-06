# Full Stop

I still like the idea but there is currently no use case to develop it anymore.

# Create Entity Behavior for Propel

This free as in freedom behavior should easy up entity creation in your [propel](http://www.propelorm.org) query classes.

Thanks to the [StateMachineBehavior](https://github.com/willdurand/StateMachineBehavior) to act as such a great template.

The build status of the current master branch is tracked by Travis CI: 
[![Build Status](https://travis-ci.org/bazzline/php_propel_behavior_create_entity.png?branch=master)](http://travis-ci.org/bazzline/php_propel_behavior_create_entity)
[![Latest stable](https://img.shields.io/packagist/v/net_bazzline/php_propel_behavior_create_entity.svg)](https://packagist.org/packages/net_bazzline/php_propel_behavior_create_entity)

The scrutinizer status are:
[![code quality](https://scrutinizer-ci.com/g/bazzline/php_propel_behavior_create_entity/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bazzline/php_propel_behavior_create_entity/)

The versioneye status is:
[![dependencies](https://www.versioneye.com/user/projects/55be795c653762002000209a/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55be795c653762002000209a)

Downloads:
[![Downloads this Month](https://img.shields.io/packagist/dm/net_bazzline/php_propel_behavior_create_entity.svg)](https://packagist.org/packages/net_bazzline/php_propel_behavior_create_entity)

It is available at [openhub.net](https://openhub.net/p/php_propel_behavior_create_entity).

# Why

* no `new` in your code anymore
* eases up writing test code (`createEntity` can be mocked)

# Usage

* make sure you have `extension=pdo_sqlite.so` enabled if you want to run phpunit
* the behavior adds a `createEntity` method to the table query class
```php
$query = DemoQuery::create();
//create a new instance of class "Demo" without using new
$entity = $query->createEntity();
```

# Installation

## By Hand

```
mkdir -p vendor/net_bazzline/php_propel_behavior_create_entity
cd vendor/net_bazzline/php_propel_behavior_create_entity
git clone https://github.com/bazzline/php_propel_behavior_create_entity
```

## With [Packagist](https://packagist.org/packages/net_bazzline/php_propel_behavior_create_entity)

```
"net_bazzline/php_propel_behavior_create_entity": "dev-master"
```

## Enable Behavior in Propel

* add the following to your propel.ini
```
propel.behavior.create_entity.class = lib.vendor.net_bazzline.php_propel_behavior_create_entity.source.CreateEntityBehavior
```
* add usage in your `schema.xml`
```xml
<!-- for the whole database -->
<database name="propel" defaultIdMethod="native" package="lib.model">
    <behavior name="create_entity" />
</database>
<!-- for one table -->
<database name="propel" defaultIdMethod="native" package="lib.model">
    <table name="my_table">
        <column name="id" type="INTEGER" required="true" primaryKey="true" autoIncrement="true" />
        <behavior name="create_entity" />
    </table>
</database>
```

# API 

[API](http://bazzline.net/2eafe1bfd5db29029fbe3c3fc94eddeaa6433b47/index.html) available at [bazzline.net](http://www.bazzline.net)

# History

* upcoming
    * @todo
    * added "why" section
    * optimized reading
* [1.2.0](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.2.0) - released at 06.03.2016
    * added support for php 7.0
    * removed support for php 5.3.3
* [1.1.4](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.1.4) - released at 06.03.2016
    * updated dependencies
* [1.1.3](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.1.3) - released at 11.01.2015
    * fixed dependency handling for phpunit 4.8.*
* [1.1.2](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.1.2) - released at 11.12.2015
    * updated dependency
* [1.1.1](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.1.1) - released at 07.11.2015
    * updated dependency
* [1.1.0](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.1.0) - released at 17.09.2015
    * fixed issue when dealing with namespaces
* [1.0.1](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.0.1) - released at 19.08.2015
    * updated dependency
* [1.0.0](https://github.com/bazzline/php_propel_behavior_create_entity/tree/1.0.0) - released at 02.08.2015
    * initial release

# Final Words

Star it if you like it :-). Add issues if you need it. Pull patches if you enjoy it. Write a blog entry if you use it. [Donate something](https://gratipay.com/~stevleibelt) if you love it :-].
