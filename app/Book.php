<?php

namespace App;

use App\Helpers\FileHelper;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'subject_id',
        'title',
        'image',
        'file',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function getImageAttribute($value)
    {
        return asset('public/' . $value);
    }

    public function setImageAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['image'] = ImageHelper::saveImageFromApi($value, 'images/book');
        } else if (is_file($value)) {
            $this->attributes['image'] = ImageHelper::saveImage($value, 'images/book');
        }
    }

    public function setFileAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['file'] = FileHelper::saveFile($value);
        }
    }

    public function getFileAttribute($value){
        return $value;
    }

}
