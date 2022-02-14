<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded=[];

    public  function user(){
        return $this->belongsTo(User::class)->select(['id','name']);
    }
}
