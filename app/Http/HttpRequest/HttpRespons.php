<?php

namespace App\Http\HttpRequest;

/**
 * 
 */


trait HttpRespons
{
    public function success($data = [], $message = "request success", $status = 200)
    {
        return response()->json(['content' => $data, 'message' => $message], $status);
    }
    public function error($data = [], $message = "error occured ", $status)
    {
        return response()->json([
            'content' => $data,
            'message' => $message,

        ], $status);
    }
}
