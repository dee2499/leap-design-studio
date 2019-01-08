<?php

namespace App\Http\Controllers;

use App\Questions;
use App\Tasks;
use App\Tests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Create Test.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
       $test = new Tests();
       $test->test_name = $request->testname;
       $test->prototype_url = $request->prototypeurl;
       $test->user_id = Auth::id();
       $test->save();

       foreach ($request->task as $value) {
           $task = new Tasks();
           $task->task_name = $value;
           $task->test_id = $test->id;
           $task->save();
       }

       foreach ($request->questions as $value) {
           $task = new Questions();
           $task->question = $value;
           $task->test_id = $test->id;
           $task->user_id = Auth::id();
           $task->save();
       }
        $url = $this->randomURL(20);
        $test->random_url = $url;

        if($test->save()){
           return redirect('test/created/'.$url);
        }
    }

    /**
     * Test Created view renderes.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function created(Request $request, $id)
    {
       return view('test.created',['id' => $id]);
    }


    /*
     * Returns random generated url code
     * @params url length
     */
    public function randomURL($URLlength = 8) {
        $url = '';
        $charray = array_merge(range('A','Z'), range('0','9'));
        $max = count($charray) - 1;
        for ($i = 0; $i < $URLlength; $i++) {
            $randomChar = mt_rand(0, $max);
            $url .= $charray[$randomChar];
        }
        return $url;
    }

}
