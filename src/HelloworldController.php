<?php

namespace Mhiran\Helloworld;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HelloworldController extends Controller
{

    public function index($timezone = null)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('helloworld::helloworld', compact('current_time'));
    }

}
