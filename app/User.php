<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

  protected $table = 'users';

  protected $fillable = ['name', 'apellido', 'telefono', 'email', 'rol_id'];

  protected $hidden = ['created_at','update_at'];


  public function rol(){
    return $this->belongsTo(App\Rol);
  }


  public function setNameAttribute($value){
    $this->attributes['name'] = ucfirst($value);
  }

  public function setApellidoAttribute($value){
    $this->attributes['apellido'] = ucfirst($value);
  }


}
