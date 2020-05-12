<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'user_1_id', 
        'user_2_id', 
        'user_3_id', 
        'user_4_id', 
        'user_5_id', 
        'name'
    ];

    protected $casts = [
        'tasks' => 'array'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}