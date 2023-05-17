<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        Log::info('debug order', ['order' => 123123]);
        Log::error('debug order', ['order' => 123123]);
        Log::warning('debug order', ['order' => 123123]);


        return response()->json([
            'status' => 'ok',
            'data' => [
                'id' => 11111,
                'price' => 100
            ]
        ]);
    }


}
