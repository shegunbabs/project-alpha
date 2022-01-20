<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;


    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'mobile', 'gender', 'area_of_specialization'
    ];


    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 'remember_token'
    ];


    /**
     * @var array<int, string>
     */
    protected $casts = [
        'mobile_verified_at' => 'datetime',
    ];
}
