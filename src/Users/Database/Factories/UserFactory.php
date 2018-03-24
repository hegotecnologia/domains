<?php

namespace HEGO\Domains\Users\Database\Factories;

use HEGO\Domains\Users\Models\User;
use HEGO\Support\Domain\Database\ModelFactory;

class UserFactory extends ModelFactory
{
    protected $model = User::class;

    protected function fields()
    {
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10)
        ];
    }
}