<?php

namespace App\Observers;

use App\Models\BookRoom;
use App\Models\Room;

class BookRoomObserver
{

    public function created(Room $room): void
    {
        BookRoom::create([
            'Booking_start_date' => now()->format('Y-m-d') ,
            'id_patient' => request()->id_patient ,
            'id_room' => request()->id_room ,
         ]);
    }

    /**
     * Handle the Room "updated" event.
     */
    public function updated(Room $room): void
    {
        $book = BookRoom::where('id_room' ,request()->id);

        $book->update([
           'cancellation_date' => now()->format('Y-m-d') ,

        ]);


    }

    /**
     * Handle the Room "deleted" event.
     */
    public function deleted(Room $room): void
    {
        //

    }

    /**
     * Handle the Room "restored" event.
     */
    public function restored(Room $room): void
    {
        //
    }

    /**
     * Handle the Room "force deleted" event.
     */
    public function forceDeleted(Room $room): void
    {
        $room->name = '2';
    }
}
