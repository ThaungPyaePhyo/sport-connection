<?php

namespace App\Services;

trait Helper
{
    public function sendResponse($data, $message = 'Operation successful', $success = true, $statusCode = 200)
    {
        return response()->json([
            'success' => $success,
            'data' => $data,
            'message' => $message
        ], $statusCode);
    }
}