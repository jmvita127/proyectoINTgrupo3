<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Cart;

class User extends Authenticatable
{
  protected $table = 'Users';

  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'avatar', 'last_name', 'sec_question', 'sec_answer', 'isAdmin'
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


  public function carrito() {

    return $this->belongsToMany(Product::class,'Cart');
  }

  public function favoritos()
  {
    return $this->belongsToMany(Product::class);
  }

  public function isAdmin()
  {
    return $this->is_admin === 1;
  }


}
