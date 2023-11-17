<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


/**
 * Class Usuario
 *
 * @property $id
 * @property $Nombre
 * @property $CorreoElectronico
 * @property $Telefono
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
  use HasRoles;
    static $rules = [
		'Nombre' => 'required',
		'CorreoElectronico' => 'required',
		'Telefono' => 'required',
		'Direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','CorreoElectronico','Telefono','Direccion'];



}
