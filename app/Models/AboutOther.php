<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutOther extends Model
{
    use HasFactory;

    public function getImagesAttribute($value)
    {
        return empty($value) ? NULL : explode(',', $value);
    }

    public function setImagesAttribute($photos)
    {
        if (isset($this->attributes['images'])) {
            $this->attributes['images'] = explode(',', $this->attributes['images']);
            foreach ($this->attributes['images'] as $photo) {
                if (!in_array($photo, $photos)) {

                    $file = public_path() . DIRECTORY_SEPARATOR . $photo;

                    if (file_exists($file)) {
                        @unlink($file);
                    }
                }
            }
        }
        if (empty($photos))
            $this->attributes['images'] = NULL;
        else
            $this->attributes['images'] = implode(',', $photos);
        if (!empty($photos)) {
            foreach ($photos as $photo) {
                $file = public_path() . DIRECTORY_SEPARATOR . $photo;

                $img = \Image::make($file);
                $img->fit(170, 190, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save($file, 100);

            }
        }
    }
}
