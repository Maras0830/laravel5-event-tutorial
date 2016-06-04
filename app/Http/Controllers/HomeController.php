<?php

namespace App\Http\Controllers;

use App\Events\MemberLoginEvent;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        event(new MemberLoginEvent($request));
    }
}
