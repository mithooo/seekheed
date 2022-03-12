<?php

namespace App;

use App\Helpers\FileHelper;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'subject_id',
        'title',
        'thumbnail',
        'file'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function getThumbnailAttribute($value)
    {
        return asset('public/' . $value);
    }

    public function setThumbnailAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['thumbnail'] = ImageHelper::saveImageFromApi($value, 'images/thumbnail');
        } else if (is_file($value)) {
            $this->attributes['thumbnail'] = ImageHelper::saveImage($value, 'images/thumbnail');
        }
    }
    public function setFileAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['file'] = FileHelper::saveVideoFile($value);
        }
    }
    public function getFileAttribute($value){
        return $value;
    }
   
}
