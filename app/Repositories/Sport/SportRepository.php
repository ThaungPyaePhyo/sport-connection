<?php

namespace App\Repositories\Sport;

use Illuminate\Database\Eloquent\Builder;
use App\Api\Foundation\Repository\Eloquent\BaseRepository;
use App\Models\Sport;
use App\Repositories\Sport\SportRepositoryInterface;

class SportRepository extends BaseRepository implements SportRepositoryInterface
{
    public function optionsQuery(array $options): Builder
    {
        return parent::optionsQuery($options);
    }

    public function connection(): Sport 
    {
        return new Sport();
    }
}