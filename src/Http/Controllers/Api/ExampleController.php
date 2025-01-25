<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2025-01-25 19:23:42
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Commands\Http\Controllers\Api;

use Illuminate\Foundation\Validation\ValidatesRequests;

class ExampleController extends Controller
{
    public function demo() {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "success";
        return response()->json($data);
    }
}
