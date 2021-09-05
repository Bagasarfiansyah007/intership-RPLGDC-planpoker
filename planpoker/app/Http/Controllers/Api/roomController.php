<?php

namespace App\Http\Controllers\Api;

//use App\Models\User;
use App\Models\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Bridge\AccessToken;

class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function createRoom(Request $request)
    {
        $user = Auth::user();
        
        $validatedData = $request->validate([
            'namaRoom' => 'required'
        ]);


        $validatedData['roomCode'] = rand(100000, 999999);
        $validatedData['user_id'] = $user->id;

        room::create($validatedData);
        return response()->json(['message' => 'room has been created'], 200);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $user = Auth::user();
        $room = room::findOrFail($id);

        if($user->id == $room->user_id) {
            
            $room->namaRoom = $request->namaRoom;
            $result = $room->save();
            if($result) {
                return response()->json(['message' => 'room has been edited']);
            } else {
                return response()->json(['message' => 'edited has been failed']);
            }
        } else {
            return response()->json(['message' => 'cannot edit room']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        //
    }

    public function deleteRoom($id)
    {
        $room = room::find($id);
        if($room){
            $result = $room->delete();
            if($result){
                return response()->json(['message' => 'room has been deleted']);
            } else {
                return response()->json(['message' => 'delete room operation has been failed']);
            }
        } else {
            return response()->json(['message' => 'Cannot find room']);
        }
    }
}
