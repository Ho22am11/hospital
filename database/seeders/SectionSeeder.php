<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = ['Surgical' , 'Intensive Care' , 'Radiology ' , 
    'Laboratory' , 'Cardiology' , 'Oncology' , 'Pediatrics'
    , 'Orthopedics' , 'Psychiatry' ,  ];

    foreach( $sections as $section){
        Section::create(['name' => $section ]);
    }
    

    DB::table('book_rooms')->truncate();
    
    }
}
