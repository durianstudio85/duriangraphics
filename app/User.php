<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'account_type', 
        'first_name', 
        'last_name', 
        'photo', 
        'company_name' , 
        'country', 
        'address1', 
        'address2' ,
        'city' ,
        'state' ,
        'zipcode' ,
        'company_no' ,
        'ipaddress',
        'browser',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getOneUserDetail($id ='')
    {
        $oneUser = User::findOrFail($id);
        return $oneUser;
    }
}
