<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index(){
        try {
            $products = $this->product->getAll(5);

            if($products->all()):
                return response()->json($products, 200);
            else:
                return response()->json(['status' => 'Sem produtos cadastrados'], 200);
            endif;

        } catch (\Throwable $e) {
            return response()->json(['status' => 'Erro ao buscar produtos'], 500);
        }   
    }

    
    public function store(Request $request)
    {
        //
    }

    
    
    public function show($id)
    {
        //
    }


    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
