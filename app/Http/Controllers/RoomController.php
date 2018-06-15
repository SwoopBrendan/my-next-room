<?php namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * RoomController constructor.
     * @param RoomService $service
     */
    public function __construct(RoomService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.room.create')->with([
            'extras'        => $this->service->getExtras(),
            'requirements'  => $this->service->getRequirements(),
            'greaterAreas'  => $this->getGreaterAreas()
        ]);
    }

    /**
     * Create new Room
     *
     * @param RoomRequest $request
     */
    public function store(RoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getGreaterAreas()
    {
        return $this->service->getGreaterAreas();
    }

    public function getLocations(Request $request)
    {
        return json_encode(['hello', 'world']);

//        return json_encode($this->service->getLocations($request->get('greaterAreaId')));
    }
}
