<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{

  protected $fillable = [
    'name', 'email', 'password', 'telp', 'jenis_kelamin', 'tanggal_lahir', 'alamat_lengkap'
  ];

  protected $hidden = [
    'password', 'remember_token'
  ];

  protected $casts = [
    'tanggal_lahir' => 'date',
    'jenis_kelamin' => 'boolean'
  ];

  public static function rules($update = false, $id = null)
  {
    $common = [
      'email'    => "required|email|unique:agens,email,$id",
      'password' => 'nullable|confirmed',
      'jenis_kelamin' => 'required',
    ];

    if ($update) {
      return $common;
    }

    return array_merge($common, [
      'email'    => 'required|email|max:255|unique:agens',
      'password' => 'required|confirmed|min:6',
    ]);
  }

  public function setPasswordAttribute($value='')
  {
    $this->attributes['password'] = bcrypt($value);
  }
}
