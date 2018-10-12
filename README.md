# Laravel Linux MSSQL fix

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Total Downloads][ico-downloads]][link-downloads]

This package optimizes the SQL Server driver from Laravel on Linux. 

## Install

Via Composer

``` bash
$ composer require evaldx/laravel-linux-mssql-fix
```

Once composer has been updated and the package has been installed, the service provider will need to be loaded.

For Laravel 5, open `config/app.php` and add following line to the providers array:
``` php
Evaldx\SqlServerGrammar\SqlServerGrammarServiceProvider::class,
```

## Usage

Once you included the service provider the Laravel will start using the custom grammar.


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

