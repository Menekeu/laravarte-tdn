<?php

namespace App\Models;

use App\Scopes\DataScopable;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use DataScopable;
    protected $fillable = ['name','email','message'];

}
