<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'experience'
    ];
    
    public function recipes(){
        return $this->hasMany(Recipe::class,'chef_id', 'id');
    }
}
