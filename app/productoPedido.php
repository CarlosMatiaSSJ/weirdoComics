<?php
 ?>
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPedido extends Model
{
        protected $table = "productos_pedidos";
        protected $fillable = ["id_pedido", "descripcion", "precio", "cantidad"];
    

}
