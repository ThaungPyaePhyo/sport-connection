<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SportResource;
use App\Services\SportService;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function __construct(protected SportService $service)
    {   
    }
    
    public function index()
    {
        $index = $this->service->getAll();
        return SportResource::collection($index);
    }
}
