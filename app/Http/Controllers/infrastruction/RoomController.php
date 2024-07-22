<?php

namespace App\Http\Controllers\infrastruction;

use App\Actions\UpdateAction;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class RoomController extends Controller
{
   use ApiResponseTrait;
     
    public function index()
    {
 
        return $this->ApiResponse( Room::all() , 'All Rooms' , 201);
    }

    public function store(Request $request , UpdateAction $updateAction ){

       
        return $updateAction->execute('Room', $request->all(), $request->id_room );
    }

    public function show($id)
    {
        return $this->ApiResponse( Room::find($id) , 'the Room' , 201);
    }

    public function update(Request $request, $id, UpdateAction $updateAction )
    {
        return $updateAction->execute('Room', $request->all(), $id);
    }


    public function destroy($id , UpdateAction $updateAction )
    {
        Room::find($id);
    
    }
}
