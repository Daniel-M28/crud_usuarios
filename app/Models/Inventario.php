<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $codigo
 * @property $producto
 * @property $existencias
 * @property $entradas
 * @property $salidas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'producto' => 'required',
		'existencias' => 'required',
		'entradas' => 'required',
		'salidas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','producto','existencias','entradas','salidas'];



}
