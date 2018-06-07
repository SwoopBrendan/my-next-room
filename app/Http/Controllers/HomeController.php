<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     *
     * @param HomeService $service
     */
    public function __construct(HomeService $service)
    {
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = $this->service->getExtras();

        return view('home')->with([
            'extras' => $extras
        ]);
    }
}
