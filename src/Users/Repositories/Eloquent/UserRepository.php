<?php

namespace HEGO\Domains\Users\Repositories\Eloquent;

use Illuminate\Pagination\LengthAwarePaginator;
use HEGO\Domains\Users\Contracts\Repositories\UserRepository as UserRepositoryContract;
use HEGO\Domains\Users\Models\User;
use HEGO\Support\Domain\Database\Eloquent\Repository;

class UserRepository extends Repository implements UserRepositoryContract
{
    protected $model = User::class;

    /**
     * @param $model
     * @param array $data
     */
    protected function setModelData($model, array $data)
    {
        if (array_key_exists('password', $data)) {
            $data['password'] = bcrypt($data['password']);
        }

        parent::setModelData($model, $data);
    }
}