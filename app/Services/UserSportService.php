<?php

namespace App\Services;

use App\Repositories\UserSport\UserSportRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserSportService 
{

    public function __construct(protected UserSportRepositoryInterface $repository)
    {
    }

    public function getAll()
    {
        return $this->repository->all();
    }

    // public function create(Request $request, $post): bool
    // {
    //     $input = $request->except('_token');
    //     $input['user_id'] = $this->getUser()->id;
    //     $input['post_id'] = $post->id;
    //     DB::beginTransaction();
    //     try {
    //         $comment = $this->repository->insert($input);
    //         DB::commit();
    //     } catch (\Exception $e) {
    //         dd($e->getMessage());
    //         DB::rollBack();
    //         $this->errorLogger($e->getMessage(), $e->getFile(), $e->getLine());
    //         return false;
    //     }
    //     return true;
    // }

}