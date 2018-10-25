<?php

namespace SanderVanHooft\Tests\Skeleton;

use Orchestra\Testbench\TestCase;

abstract class BaseTestCase extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return ['SanderVanHooft\Skeleton\SkeletonServiceProvider'];
    }

    protected function withPackageMigrations()
    {
        // Example migration run
        // include_once __DIR__.'/database/migrations/CreateUsersTable.php';
        // (new \SanderVanHooft\Tests\Skeleton\Database\Migrations\CreateUsersTable())->up();
    }
}
