<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use App\Responses\ApiResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return ApiResponse::success(ProductResource::collection($products), __('api.product_list'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $product = $this->productService->createProduct($data);
        return ApiResponse::success(new ProductResource($product), __('api.product_created'));
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);

        if (!$product) {
            return ApiResponse::error(__('api.product_not_found'), 404);
        }

        return ApiResponse::success(new ProductResource($product), __('api.product_found'));
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->validated();
        $product = $this->productService->updateProduct($id, $data);

        if (!$product) {
            return ApiResponse::error(__('api.product_not_found'), 404);
        }

        return ApiResponse::success(new ProductResource($product), __('api.product_updated'));
    }

    public function destroy($id)
    {
        $result = $this->productService->deleteProduct($id);

        if (!$result) {
            return ApiResponse::error(__('api.product_not_found'), 404);
        }

        return ApiResponse::success(null, __('api.product_deleted'));
    }
}