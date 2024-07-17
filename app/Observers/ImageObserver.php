<?php

namespace App\Observers;

use App\Models\MedicalImaging;
use Illuminate\Database\Eloquent\Model;

class ImageObserver
{
    /**
     * Handle the MedicalImaging "created" event.
     */
    public function created(Model $model): void
    {
        if (request()->hasfile('file')){

            $image = request()->file('file');

            $name = $model->id.'.'.$image->getClientOriginalExtension();

            $path = 'images/'.request()->type ;

            $image->storeAs( $path , $name , 'upload_images') ;

            $model->img = $path.'/'.$name ;
            
        }
    }

    /**
     * Handle the MedicalImaging "updated" event.
     */
    public function updated(Model $model): void
    {
        $model->img = 'fjdlj' ;
    }

    /**
     * Handle the MedicalImaging "deleted" event.
     */
    public function deleted(Model $model): void
    {
        //
    }

    /**
     * Handle the MedicalImaging "restored" event.
     */
    public function restored(MedicalImaging $medicalImaging): void
    {
        //
    }

    /**
     * Handle the MedicalImaging "force deleted" event.
     */
    public function forceDeleted(MedicalImaging $medicalImaging): void
    {
        //
    }
}
