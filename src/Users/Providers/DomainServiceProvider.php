<?php

namespace HEGO\Domains\Users\Providers;

use HEGO\Domains\Users\Contracts\Repositories\UserRepository as UserRepositoryContract;
use HEGO\Domains\Users\Database\Migrations\CreateUsersTable;
use HEGO\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use HEGO\Domains\Users\Database\Seeders\UsersSeeder;
use HEGO\Domains\Users\Database\Factories\UserFactory;
use HEGO\Domains\Users\Repositories\Eloquent\UserRepository;
use HEGO\Support\Domain\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var array List of domain providers to register
     */
    protected $providers = [
        //
    ];

    /**
     * @var array List of migrations provided by Domain
     */
    protected $migrations = [
        CreateUsersTable::class,
        CreatePasswordResetsTable::class
    ];

    /**
     * @var array List of seeders provided by Domain
     */
    protected $seeders = [
        UsersSeeder::class
    ];

    /**
     * @var array List of model factories to load
     */
    protected $factories = [
        UserFactory::class
    ];

    /**
     * @var array Contract bindings
     */
    public $bindings = [
        UserRepositoryContract::class => UserRepository::class
    ];
}