<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'address',
        'email',
        'sex',
        'mobile',
        'class',
        'school_name',
        'discount',
        'comment'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','id','user_id');
    }

}
