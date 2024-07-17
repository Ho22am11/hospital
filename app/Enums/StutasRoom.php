<?php

namespace App\Enums ;

enum StutasRoom : int 
{
    case Active = 1 ;
    case InActive = 0 ;

    public function check(){

        return match($this){
            self::Active => 'booked' ,
            self::InActive => 'empty' ,
        };
    }

}