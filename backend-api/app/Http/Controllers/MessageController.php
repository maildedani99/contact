<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class MessageController extends Controller
{

    /**
     * Show a list of all of the application's pins.
     *
     * @return JsonResponse
     */
    public function all()
    {
        Log::info('Retrieving all messages');
        return response()->json(Message::all());
    }

    /**
     * Create a new image instance.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        // Validate the request...

        $pin = Image::create([
            'image_url' => $request->image_url,
            'room_id' => $request->room_id,
        ]);

        $pin->save();
        return response()->json("Created", 201);
    }

    /**
     * Return a given image by id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function getById($id)
    {
        Log::info('Retrieving pin with id: '.$id);
        return response()->json(Pin::findOrFail($id));
    }

    /**
     * Return a collection of images given a room id.
     *
     * @param $roomId
     * @return JsonResponse
     */
    public function getByEvent($eventId)
    {
        Log::info('Retrieving images with room id: '.$eventId);
        $pins = Pin::where('event_id', $eventId)->get();
        return response()->json($pins);
    }
}

    



