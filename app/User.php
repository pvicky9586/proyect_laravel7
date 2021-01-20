<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'privileges', 'profession_id',
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

    public function getAuthIdentifiel()
    {
        return $this->getKey(); //obtener el usuario
    }

    public function getAuthPassword()
    {
        return $this->password; //obtener solo password
    }

    public function getReminderEmail()
    {
        return $this->email; //obtener email
    }

    public function isAdmin(){
        return $this->email == 'developmentsoft2020@gmail.com';
    }

    // public function profile()
    // {
    //       return $this->belongsTo(Profile::class);
    // }


    public function profession()
    {
          return $this->hasOne(Profession::class);
    }


    
    
}
