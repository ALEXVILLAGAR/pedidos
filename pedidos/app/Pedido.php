<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['estado','fecha'];

    /**
     * Pedido belongs to ProductoPedido.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productoPedido()
    {
    	return $this->belongsTo(ProductoPedido::class,'id_pedido');
    }

    /**
     * Pedido belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    	return $this->belongsTo(User::class,'id_usuario');
    }
}