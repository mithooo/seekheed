<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   protected $fillable = [
       'name',
   ];

   public function books()
   {
        return $this->hasMany(Book::class,'subject_id');
   }
   public function lectures()
   {
    return $this->hasMany(Lecture::class,'subject_id');
       
   }
}
