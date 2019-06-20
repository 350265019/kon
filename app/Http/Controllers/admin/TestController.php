<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/20
 * Time: 10:26
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function test()
    {
        $data ['name'] = 'sora';
        $data ['id'] = '31';
        $data ['data'] = $data;
        return view('admin.test', $data);
    }

    public function getTest()
    {
        echo $_GET['name'];
    }

    public function add()
    {
        //        $data['name'] = 'lisi';
        //        $data['info'] = 'hhhhhh';
        //        $data['status'] = '2';
        $data = array(
            "name" => "wangwu",
            "info" => "return of the king",
            "status" => "1",
            "created_at" => date('Y-m-d H:i:s'),
        );
        $test = DB::table('test')->insert($data);

        var_dump($test);
    }

}
