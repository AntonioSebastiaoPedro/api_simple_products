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
                return response()->json(['message' => 'Sem produtos cadastrados'], 200);
            endif;

        } catch (\Throwable $e) {
            return response()->json(['message' => 'Erro ao buscar produtos'], 500);
        }   
    }

    
    public function store(Request $request)
    {
        try{
            $product = $this->product->insert($request->all());
            if($product):
                return response()->json(['message' => 'Produto cadastrado com sucesso'], 200);
            endif;

        }catch(\Throwable $e){
            return response()->json(['message' => 'Aconteceu um erro ao cadastrar produto'], 500);
        }
    }

    
    
    public function show($id)
    {
        try{
            $product = $this->product->getOne($id);
            if($product):
                return response()->json($product, 200);
            else:
                return response()->json(['message' => 'produto não encontrado'], 404);
            endif;
        }
        catch(\Throwable $e){
            return response()->json(['message' => 'Aconteceu um erro ao buscar produto'], 500);
        }
    }


    
    public function update(Request $request, $id)
    {
        try {
            $product = $this->product->updateProduct($request->all(), $id);
            if($product):
                return response()->json(['message' => 'Produto editado com sucesso'], 200);
            endif;

        } catch (\Throwable $e) {
            return response()->json(['message' => 'Aconteceu um erro ao editar produto'], 500);
        }
    }

    
    public function destroy($id)
    {
        try {
            $product = $this->product->getOne($id);
            if($product):
                $this->product->deleteProduct($id);
                return response()->json(['message' => 'Produto eliminado com sucesso'], 200);
            else:
                return response()->json(['message' => 'produto não encontrado'], 404);
            endif;

        } catch (\Throwable $e) {
            return response()->json(['message' => 'Aconteceu um erro ao eliminar o produto'], 500);
        }
    }
}
