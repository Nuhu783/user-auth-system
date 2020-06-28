<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'faculty', 'subject', 'class', 'dob', 'phone', 'user_id'];

        public function user(){
        	return $this->belongsTo(User::class);
        }
}
