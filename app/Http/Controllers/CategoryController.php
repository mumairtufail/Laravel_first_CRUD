<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();


        return view('categories.list', compact('categories'));
        
    }
    
    public function create()
    {
        return view('categories.new');
    }
    

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|unique:categories|max:255'
        ]);
    
        $category = new Category;
        $category->title = $request->title;
        $category->save();
    
        return redirect('/')->withSuccess('New Category Created');

    }
    

public function edit($id)
{
    $category = Category::where('id', $id)->first();
    return view('categories.edit', compact('category'));
}

public function update(Request $request, $id)
{
   $category = Category::where('id', $id)->first();
   $category->title = $request->title;
   $category->save();
   return redirect('/');
}

public function destroy($id)
{
    $category = Category::whereId($id)->first();
    $category->delete();
    return redirect('/');
}

}
