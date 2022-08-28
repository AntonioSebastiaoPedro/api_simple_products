<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";
    public $timesatamps = false;
    protected $fillable = [
        'nome',
        'preco',
        'categoria',
        'descricao',
    ];
    
    public function getAll(int $paginate = null)
    {
        if($paginate != null AND is_int($paginate)):
            return $this->paginate($paginate);
        elseif($paginate === null):
            return $this->all();
        endif;

        return false;
    }


    public function getOne($id_product)
    {
        return $this->find($id_product);
    }
}
