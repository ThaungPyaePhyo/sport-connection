<?php

namespace App\Repositories\Sport;

use App\Api\Foundation\Repository\EloquentRepositoryInterface;

interface SportRepositoryInterface extends EloquentRepositoryInterface
{
    public function optionsQuery(array $options);
    public function connection();
}