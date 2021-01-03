<?php
namespace Bnhashem\File\Traits;

use Illuminate\Support\Facades\Storage;

/**
 *
 */
trait File
{
    # Store Files.
    public static function store($folder , $parameter)
    {
        # Case 1 --> If Input Not Null
        if (request()->$parameter !== null)
        {
            $file = request()->file($parameter)->store($folder.'/'.$parameter, 'public');
        }
        # Case 2 --> If Input Is Null
        else
        {
            $file = null;
        }
        return $file;
    }

    # Update Files.
    public static function update($folder , $parameter , $model)
    {
        # Case 1 --> If Input Not Null
       if (request()->$parameter !== null)
        {
            Storage::disk('public')->delete($model->$parameter);
            $file = request()->file($parameter)->store($folder.'/'.$parameter, 'public');
        }

        # Case 2 --> If Input Is Null
        else
        {
            $file = $model->$parameter;
        }
        return $file;
    }

    # Destroy Files.
    public static function destroy($parameter , $model)
    {
        Storage::disk('public')->delete($model->$parameter);
    }
}

