<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products   = Product::with(['category' => function($query) {
            $query->select('id', 'title');
        }])->get();

        return response()->json([
            'products'   => $products
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductRequest $request
     * @return JsonResponse
     */
    public function store(ProductRequest $request): JsonResponse
    {
        $product = Product::create($request->validated());

        return response()->json([
            'product' => $product,
            'message' => 'Product Created successfully'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     * @param ProductRequest $request
     * @return JsonResponse
     */
    public function show(Product $product): JsonResponse
    {
        return response()->json([
            'product' => $product
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     * @param ProductRequest $request
     * @param Product $product
     * @return JsonResponse
     */
    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        $product->update($request->validated());

        return response()->json([
            'product' => $product,
            'message' => 'Product Updated successfully'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json([
            'product' => $product,
            'message' => 'Product Deleted successfully'
        ], Response::HTTP_OK);
    }
}
