<?php
 ?>
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function productos()
    {
        return $this->hasMany("App\ProductoPedido", "idPedido");
    }

}