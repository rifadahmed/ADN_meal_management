<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function total_receivable(){
        return $this->hasMany('App\Models\Financial','shareholder_id');
    }
    public function total_paid(){
        return $this->hasMany('App\Models\Disburshment','shareholder_id');
    }

    // public function isAdmin()
    //     {
    //     if ($this->name=='rifad') 
    //     {
    //         return true;
    //     } 
    //     return false;
    //     }
}
