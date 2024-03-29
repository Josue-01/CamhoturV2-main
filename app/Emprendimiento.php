<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprendimiento extends Model
{
  protected $primaryKey = 'idEmprendimiento';

  protected $fillable = [
    'id_Distrito',
    'nombreEmprendimiento',
    // 'descripcionEmprendimiento',
    'tipo_emprendimiento',
    'nombre_completo',
    'telefono',
    'telefono2',
    'correo_electronico',
    'link_instagram',
    'link_facebook'
  ];

  static $rules = [
    'id_Distrito' => 'required',
    'nombreEmprendimiento' => 'required',
    'tipo_emprendimiento' => 'required',
    // 'descripcionEmprendimiento' => 'required',
    'nombre_completo' => 'required',
    'telefono' => 'required',
    'correo_electronico' => 'email',
    'link_instagram' => 'nullable|url',
    'link_facebook' => 'nullable|url'
  ];

  protected $perPage = 20;

  public function distrito()
  {
    return $this->hasOne('App\Distrito', 'id', 'id_Distrito');
  }

  public function catalogos()
  {
    return $this->hasMany(Catalogo::class, 'id_Empre');
  }
}
