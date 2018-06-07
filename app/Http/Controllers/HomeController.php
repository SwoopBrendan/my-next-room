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
        return view('home')->with([
            'extras'        => $this->service->getExtras(),
            'requirements'  => $this->service->getRequirements(),
        ]);
    }
}
