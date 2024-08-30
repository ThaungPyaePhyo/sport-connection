<?php

namespace App\Repositories\UserSport;

use App\Api\Foundation\Repository\EloquentRepositoryInterface;

interface UserSportRepositoryInterface extends EloquentRepositoryInterface
{
    public function optionsQuery(array $options);
    public function connection();
}