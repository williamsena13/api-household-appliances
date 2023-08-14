<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function all()
    {
        return Product::with('brand')->get();
    }

    public function create($data)
    {
        return Product::create($data);
    }

    public function update($id, $data)
    {
        $product = Product::find($id);

        if (!$product) {
            return false; // Produto não encontrado
        }

        $product->update($data);
        return $product; // Retornar o produto atualizado
    }

    public function find($id)
    {
        return Product::with('brand')->find($id);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return false; // Produto não encontrado
        }

        $product->delete();
        return true; // Exclusão bem-sucedida
    }
}