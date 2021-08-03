<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = array('id', 'name');
    
    public $incrementing = false;
    //オートインクリメントまたは整数値ではない値を主キーを使う場合は$incrementingプロパティをfalseに設定します。

    public static $rules = array(
        'id' => 'required',
        'name' => 'required | max;20',
      );
}
