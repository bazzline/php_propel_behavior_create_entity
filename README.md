# Create Entity Behavior for Propel

This free as in freedom behavior should easy up entity creation in your [propel](http://www.propelorm.org) query classes.

Thanks to the [StateMachineBehavior](https://github.com/willdurand/StateMachineBehavior) to act as such a great template.

The versioneye status is:
[![dependencies](https://www.versioneye.com/user/projects/540f69de9e16223a73000002/badge.svg?style=flat)](https://www.versioneye.com/user/projects/540f69de9e16223a73000002)

Downloads:
[![Downloads this Month](https://img.shields.io/packagist/dm/net_bazzline/php_propel_behavior_create_entity.svg)](https://packagist.org/packages/net_bazzline/php_propel_behavior_create_entity)

It is available at [openhub.net](https://openhub.net/p/php_propel_behavior_create_entity).

# Usage

* the behavior adds a "createEntity" method to the table query class
```php
$query = DemoQuery::create();
//create a new instance of class "Demo" without using new
$entity = $query->createEntity();
```

# Installation

* make sure you have "extension=pdo_sqlite.so" enabled if you want to run phpunit
* add the following to your propel.ini
```
propel.behavior.create_entity.class = lib.vendor.net_bazzline.php_propel_behavior_create_entity.source.CreateEntityBehavior
```
* add usage in your `schema.xml`
```
#for the whole database
<database name="propel" defaultIdMethod="native" package="lib.model">
    <behavior name="create_entity" />
</database>
#for one table
<database name="propel" defaultIdMethod="native" package="lib.model">
    <table name="my_table">
        <column name="id" type="INTEGER" required="true" primaryKey="true" autoIncrement="true" />
        <behavior name="create_entity" />
    </table>
</database>
```

# History

* [asdasd](adasd)