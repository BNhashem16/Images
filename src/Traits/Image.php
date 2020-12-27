<?php
namespace Hashem\Image\Traits;

use Illuminate\Support\Facades\Storage;

/**
 *
 */
trait Image
{
    # Store Images.
    public static function store($folder , $parameter)
    {
        if (request()->$parameter !== null) {
            $image = request()->file($parameter)->store($folder.'/'.$parameter, 'public');
        } else {
            $image = null;
        }
        return $image;
    }

    # Update Images.
    public static function update($folder , $parameter , $model)
    {
        if (request()->$parameter !== null) {
            Storage::disk('public')->delete($model->$parameter);
            $image = request()->file($parameter)->store($folder.'/'.$parameter, 'public');
        } else {
            $image = $model->$parameter;
        }
        return $image;
    }

    # Destroy Images.
    public static function destroy($parameter , $model)
    {
        Storage::disk('public')->delete($model->$parameter);
    }
}

