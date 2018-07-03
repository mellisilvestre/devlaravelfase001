<?php

namespace CodeShopping\Http\Controllers\Api;

use  CodeShopping\Http\Controllers\Controller;
use CodeShopping\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index(Category $category)
    {
        return Category::all();
    }

   
  
    public function store(Request $request)
    {
        $category = Category::create($request->all() + ['slug' => 'teste']);
        $category->refresh();
        return $category;
    } 

 
    public function show(Category $category)
    {
        return $category;
    }

 

  
    public function update(Request $request, Category $category)
    {
        //
    }

  
    public function destroy(Category $category)
    {
        //
    }
}
