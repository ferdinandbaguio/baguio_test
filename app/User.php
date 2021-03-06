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
        'userStatus',
        'userType',
        'idnumber',
        'password',
        'gender',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'description',
        'picture',
        'yearLevel',
        'status',
        'employmentStatus',
        'updateStatus',
        'position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 
    ];

    protected $appends = [
        'full_name'
    ];


    public function getFullNameAttribute() {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->middlename) . ' ' . ucfirst($this->lastname);
    }
}
