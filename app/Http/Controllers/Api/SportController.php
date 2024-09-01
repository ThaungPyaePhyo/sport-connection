<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SportRequest;
use App\Http\Resources\SportResource;
use App\Services\Helper;
use App\Services\SportService;
use Illuminate\Http\Request;

class SportController extends Controller
{
    use Helper;

    public function __construct(protected SportService $service)
    {   
    }
    
    public function index()
    {
        $index = $this->service->getAll();
        return SportResource::collection($index);
    }

    public function store(SportRequest $request)
    {
        $input = $this->service->create($request);        
        return $this->sendResponse($input, 'Resource created successfully', true, 201);
    }
}
