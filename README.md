ZF2 MultiDatabase Module
===========================

Introduction
------------
This simple module allows you to define multiple database connections easily in ZF2 projects.

Usage
-----
Usage is very straightforward, simply add configuration keys as shown:

```
array(
        'db-portal' => array(
                'driver' => 'Pdo',
                'dsn' => 'mysql:dbname=portal;host=localhost',
                'driver_options' => array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES\'UTF8\''
                )
        ),
        'db-radius' => array(
                'driver' => 'Pdo',
                'dsn' => 'mysql:dbname=radius;host=localhost',
                'driver_options' => array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES\'UTF8\''
                )
        ),
        'service_manager' => array(
                'factories' => array(
                        'Zend\Db\Adapter\Adapter' => new AdapterServiceFactory('db-portal'),
                        'Radius-Db' => new AdapterServiceFactory('db-radius')
                )
        )
);
```


