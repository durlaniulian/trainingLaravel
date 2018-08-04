<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','bio'
    ];
    
    protected $appends = [
        'humanCreatedAt'
    ];


    public function getHumanCreatedAtAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function scopeActive($query){
        return $query->where('activated',true);
    }
    public function scopeInactive($query){
        return $query->where('activated',false);
    }

 
}
