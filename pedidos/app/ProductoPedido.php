<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPedido extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['cantidad_unidades','id_pedido'];

    /**
     * ProductoPedido has one Pedido.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pedido()
    {
    	// hasOne(RelatedModel, foreignKeyOnRelatedModel = productoPedido_id, localKey = id)
    	return $this->hasOne(Pedido::class,'id_pedido');
    }
}