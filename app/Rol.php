<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';

    protected $fillable = ['nombre', 'detalles'];

    protected $hidden = ['created_at','update_at'];

    protected $casts = ['detalles' => 'array'];

    protected $appends = ['full_nombre'];

    public function users(){
      return $this->hasMany(App\User);
    }

    public function setNombreAttribute($value){
      $this->attributes['nombre'] = ucfirst($value);
    }

    public function getfullNombreAttribute()
    {
      return "{$this->id}--{$this->nombre}";
    }

}
