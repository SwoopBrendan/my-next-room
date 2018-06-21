<?php  namespace App\Services;

use App\Helpers\DataHelper;
use App\Image;
use App\Room;
use App\RoomExtra;
use App\RoomImage;
use App\RoomRequirement;
use Carbon\Carbon;
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

    public function getRoom($id)
    {
        return Room::find($id);
    }

    public function getRooms($filter = null)
    {
        return Room::all();
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
        $room->available_from   = Carbon::parse($request->get('available-from'));
        $room->available_to     = Carbon::parse($request->get('available-to'));
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

        if ($request->hasFile('picture_1')) {
            $this->saveRoomImage($request, $room->id, 'picture_1');
        }

        if ($request->hasFile('picture_2')) {
            $this->saveRoomImage($request, $room->id, 'picture_2');
        }

        if ($request->hasFile('picture_3')) {
            $this->saveRoomImage($request, $room->id, 'picture_3');
        }

        if ($request->hasFile('picture_4')) {
            $this->saveRoomImage($request, $room->id, 'picture_4');
        }

        if ($request->hasFile('picture_5')) {
            $this->saveRoomImage($request, $room->id, 'picture_5');
        }

        if ($request->hasFile('picture_6')) {
            $this->saveRoomImage($request, $room->id, 'picture_6');
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

    /**
     * Save room image
     *
     * @param Request $request
     * @param $roomId
     * @param $pictureName
     */
    public function saveRoomImage(Request $request, $roomId, $pictureName)
    {
        $file = $request->file($pictureName);
        $extension = $file->getClientOriginalExtension();
        $fileName = DataHelper::createUid() . '.' . $extension;
        $uploadDir = 'images/room/';
        $filePath = $uploadDir . $fileName;
        $file->move($uploadDir, $fileName);

        $image = new Image();
        $image->name = $fileName;
        $image->slug = $fileName;
        $image->type = $extension;
        $image->path = $filePath;
        $image->full_path = $filePath;
        $image->original_name = $file->getClientOriginalName();
        $image->save();

        $roomImage = new RoomImage();
        $roomImage->room_id = $roomId;
        $roomImage->image_id = $image->id;
        $roomImage->save();
    }

    /**
     * Get rooms by user
     *
     * @param $userId
     * @return mixed
     */
    public function getRoomsByUser($userId)
    {
        return Room::where('user_id', $userId)->get();
    }
}