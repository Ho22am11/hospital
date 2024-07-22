<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        for ($num_room = 1 ; $num_room <= 100 ; $num_room++ ){
            Room::create(['name' => $num_room , 'status' => false]);
        } 
    }
}
