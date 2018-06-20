<?php namespace App\Services;

use App\Room;
use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserService
 * @package App\Services
 */
class UserService extends Service
{
    public function __construct(RoomService $roomService)
    {
        $this->service = $roomService;
    }

    public function getUser($userId)
    {
        return User::find($userId);
    }

    /**
     * Get all users rooms
     *
     * @return mixed
     */
    public function getUserRooms()
    {
        return $this->service->getRoomsByUser(Auth::user()->id);
    }
}