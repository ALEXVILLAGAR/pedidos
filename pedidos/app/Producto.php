<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['nombre','name_image','fecha_vencimiento','precio','id_proveedor','cantidad_disponible'];

    /**
     * Producto belongs to Proveedor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
    	// belongsTo(RelatedModel, foreignKey = proveedor_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Proveedor::class,'id_proveedor');
    }
}
