<?php
namespace Hashem\Image\Traits;


/**
 *
 */
trait Image
{
    public static function store($folder , $parameter)
    {
        if ($parameter) {
            $image = request()->file($parameter)->store($folder.'/'.$parameter, 'public');
        } else {
            $image = null;
        }
        return $image;
    }
}

