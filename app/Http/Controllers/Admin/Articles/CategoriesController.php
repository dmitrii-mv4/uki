<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class CategoriesController extends Controller
{
    public $title_page = "Управление категориями";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // Пагинация
        $categories = Category::paginate('10');

        //$categories = Category::All();

        return view('admin/articles/categories/index', compact('categories'));
    }

    public function create()
    {
        //$categories = Category::All();

        return view('admin/articles/categories/create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        Category::create($data);
        return redirect()->route('admin.articles.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.articles.categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        $category->update($data);
        return redirect()->route('admin.articles.categories.edit', $category->id);
    }

    public function delete()
    {
        $category = Category::withTrashed()->find(2);
        $category->restore();        
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.articles.categories.index');
    }
}
