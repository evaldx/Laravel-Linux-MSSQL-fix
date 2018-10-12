<?php

namespace Evaldx\SqlServerGrammar;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Connection;
use Evaldx\SqlServerGrammar\Extensions\Database\Connections\SqlServerOptimizedConnection;

class SqlServerGrammarServiceProvider extends ServiceProvider
{
    /**
     * Register the application services and bind the sqlsrv driver to our custom connection
     *
     * @return void
     */
    public function register()
    {
        Connection::resolverFor('sqlsrv', function ($connection, $database, $prefix, $config) {
            return new SqlServerOptimizedConnection($connection, $database, $prefix, $config);
        });
    }
}
