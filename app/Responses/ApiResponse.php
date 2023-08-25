<?php

namespace App\Responses;

class ApiResponse
{
    public static function success($data = null, $message = 'Success', $status = 200)
    {
        return response()->json([
            'data' => $data,
            'meta' => [
                'message' => $message,
                'status' => 'success',
            ],
        ], $status);
    }

    public static function error($message = 'Error', $status = 400)
    {
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => 'error',
            ],
        ], $status);
    }
}