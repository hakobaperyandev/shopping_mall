<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $categories = Category::whereDoesntHave('product')->select(['id', 'title'])->get();

        return response()->json([
            'categories' => $categories
        ], Response::HTTP_OK);
    }
}
