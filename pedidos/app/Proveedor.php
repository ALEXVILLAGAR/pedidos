<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','telefono'];

    /**
     * Proveedor has many Productos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = proveedor_id, localKey = id)
    	return $this->hasMany(Producto::class,'id_proveedor');
    }
}
