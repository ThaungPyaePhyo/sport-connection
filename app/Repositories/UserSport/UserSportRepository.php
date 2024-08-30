<?php

namespace App\Repositories\Sport;

use Illuminate\Database\Eloquent\Builder;
use App\Api\Foundation\Repository\Eloquent\BaseRepository;
use App\Models\UserSport;
use App\Repositories\UserSport\UserSportRepositoryInterface;

class UserSportRepository extends BaseRepository implements UserSportRepositoryInterface
{
    public function optionsQuery(array $options): Builder
    {
        return parent::optionsQuery($options);
    }

    public function connection(): UserSport 
    {
        return new UserSport();
    }
}