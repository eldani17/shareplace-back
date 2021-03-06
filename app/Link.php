<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    Protected $fillable=[
    'name',
    ];


    public function user(){
    	return $this->belongsTo(User::class);
    }
}
