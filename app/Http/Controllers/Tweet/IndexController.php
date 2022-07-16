<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweets = Tweet::all();
        dd($tweets);
        return view('tweet.index')
            ->with('name', 'laravel')
            ->with('version', '8');
        // return view('tweet.index', ['name' => 'laravel']);
    }

    /* Facade エラーなる */
    // public function __invoke(Request $request)
    // {
    //     return View::make('tweet.index', ['name' => 'laravel']);
    // }

    /* Factoryインジェクション エラーなる */
    // public function __invoke(Request $request, Factory $factory)
    // {
    //     return $factory->make('tweet.index', ['name' => 'laravel']);
    // }


}
