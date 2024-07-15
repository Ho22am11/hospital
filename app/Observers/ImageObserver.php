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
        $model->update([
            'img' => 'hossam' ,
        ]);
    }

    /**
     * Handle the MedicalImaging "updated" event.
     */
    public function updated(MedicalImaging $medicalImaging): void
    {
        //
    }

    /**
     * Handle the MedicalImaging "deleted" event.
     */
    public function deleted(MedicalImaging $medicalImaging): void
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
