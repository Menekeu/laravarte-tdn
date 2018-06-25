<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['title','description','image','video','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
