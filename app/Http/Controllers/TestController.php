<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 18-6-14
 * Time: 上午10:53
 */

namespace App\Http\Controllers;


use App\Test;

class TestController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        $test = new Test();
        $test->u_id = 1;
        $test->name = 'test';
        $test->save();
        return view('test');
    }
}