l5-odbc-driver
==============

Laravel 5.2 ODBC driver

Installation
============

To Install this in your Laravel 5.2 app, open composer.json and add:

```json
"require": {
  "phareous/odbc-driver": "dev-master"
}
```

And then run:

`composer update`

This will download the required package from Packagist.org.

Then, in your app/config directory, open app.php and find:

`Illuminate\Database\DatabaseServiceProvider::class`

And replace it with:

`Ccovey\ODBCDriver\ODBCDriverServiceProvider::class`

Finally, be sure to add the odbc driver with connection information to the `connections` array in `config/database.php` file like so:

```php
    'connections' => [
        'odbc' => [
            'driver' => 'odbc',
            'dsn' => 'odbc:Driver={iSeries Access ODBC Driver};System=my_system_name;',
            'grammar' => '',
            'username' => 'foo',
            'password' => 'bar',
            'database' => '',
        ],
    ],
```

Note that database is a required value in the array.

Notes
==========

To add a custom grammar, add your file to ODBCDriver/Grammars with the name you would like to use (currently there is a DB2 grammar file if you would like a reference). Then, in your odbc config array, add the class name to the grammar key. If you would like to submit a grammar for use in the package, please submit a pull request and I will get it in asap.

If you would like to use a Laravel provided file, just add that instead. For example, if you want to use SQL Server Gramamr instead, you can add like so:

```php
'odbc' => [
    'driver' => 'odbc',
    'dsn' => 'odbc:some driver',
    'grammar' => 'SqlServerGrammar',
    'username' => 'foo',
    'password' => 'bar',
    'database' => '',
],


