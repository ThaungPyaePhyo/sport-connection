<?php

namespace App\Services;

use App\Repositories\Sport\SportRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SportService 
{

    public function __construct(protected SportRepositoryInterface $repository)
    {
    }

    public function getAll()
    {
        return $this->repository->all();
    }

    public function create(Request $request): bool
    {
        $input = $request->except('_token');
        DB::beginTransaction();
        try {
            $sport = $this->repository->insert($input);
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            // $this->errorLogger($e->getMessage(), $e->getFile(), $e->getLine());
            return false;
        }
        return true;
    }

}