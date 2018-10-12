<?php

namespace Evaldx\SqlServerGrammar\Tests;

class ServiceProviderTest extends TestCase
{
    /**
     * It should have the sqlsrv connection bound
     */
    public function testSqlsrvConnectionBound()
    {
        $this->assertTrue($this->app->bound('db.connection.sqlsrv'));
    }
}