<?php  namespace App\Services;

use App\Room;
use App\RoomExtra;
use App\RoomRequirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class RoomService
 * @package App\Services
 */
class RoomService extends Service
{
    public function __construct()
    {

    }

    /**
     * Save A Room
     *
     * @param Request $request
     * @param null $roomId
     */
    public function saveRoom(Request $request, $roomId = null)
    {
        $room = Room::firstOrNew(['id' => $roomId]);

        $room->name             = $request->get('name');
        $room->slug             = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $room->name)));
        $room->description      = $request->get('description');
        $room->length           = $request->get('length');
        $room->width            = $request->get('width');
        $room->deposit          = $request->get('deposit');
        $room->rent             = $request->get('rent');
        $room->lease_term_min   = $request->get('lease-min');
        $room->lease_term_max   = $request->get('lease-max');
        $room->available_from   = $request->get('available-from');
        $room->available_to     = $request->get('available-to');
        $room->room_count       = $request->get('rooms');
        $room->bathroom_count   = $request->get('bathrooms');
        $room->user_id          = Auth::user()->id;
        $room->location_id      = $request->get('locations');

        $room->save();

        if ($request->has('extra_check')) {
            foreach ($request->get('extra_check') as $extra) {
                $this->saveExtra($room->id, $extra);
            }
        }

        if ($request->has('requirement_check')) {
            foreach ($request->get('requirement_check') as $requirement) {
                $this->saveRequirement($room->id, $requirement);
            }
        }
    }

    /**
     * Save a room extra
     *
     * @param $roomId
     * @param $extraId
     */
    public function saveExtra($roomId, $extraId)
    {
        $roomExtra = new RoomExtra();

        $roomExtra->room_id = $roomId;
        $roomExtra->extra_id = $extraId;

        $roomExtra->save();
    }

    /**
     * Save a room requirement
     *
     * @param $roomId
     * @param $requirementId
     */
    public function saveRequirement($roomId, $requirementId)
    {
        $roomRequirement = new RoomRequirement();

        $roomRequirement->room_id = $roomId;
        $roomRequirement->requirement_id = $requirementId;

        $roomRequirement->save();
    }
}