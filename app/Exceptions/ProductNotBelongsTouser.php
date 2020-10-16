<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsTouser extends Exception
{
    public function render(){
        return ['errors'=>'Product Not Belongs to User'];
    }
}
