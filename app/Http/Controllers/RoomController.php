<?php namespace App\Http\Controllers;

use App\Helpers\ExceptionHelper;
use App\Http\Requests\RoomRequest;
use App\Services\RoomService;
use Illuminate\Http\Request;
use Throwable;

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
     * Show create room form
     */
    public function create()
    {
        return view('pages.room.create')->with([
            'extras'        => $this->service->getExtras(),
            'requirements'  => $this->service->getRequirements(),
            'greaterAreas'  => $this->service->getGreaterAreas()
        ]);
    }

    /**
     * Create new Room
     *
     * @param RoomRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RoomRequest $request)
    {
        try {

            $this->service->saveRoom($request);

            return redirect()->to('user')->with([
               'success' => 'Room Created Successfully'
            ]);

        } catch (Throwable $t) {

            ExceptionHelper::outputAndLog($t, 'Room Create Failed');

            return redirect()->to('room/create')->with([
                'error' => 'Room Create Failed'
            ]);

        }
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

    public function getLocations($greaterAreaId)
    {
        return json_encode($this->service->getLocations($greaterAreaId));
    }
}
