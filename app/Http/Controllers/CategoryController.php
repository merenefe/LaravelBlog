<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index');
    }

        // Kategori düzenleme formu
        public function edit(Category $category)
        {
            return view('categories.edit', compact('category'));
        }

        // Kategori düzenleme işlemi
        public function update(Request $request, Category $category)
        {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $category->update([
                'name' => $request->name,
            ]);

            return redirect()->route('categories.index')->with('success', 'Kategori başarıyla güncellendi.');
        }

        // Kategori silme
        public function destroy(Category $category)
        {
            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Kategori başarıyla silindi.');
        }
}
