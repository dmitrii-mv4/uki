<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticlesCategory;
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
        $categories = ArticlesCategory::paginate('10');

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

        ArticlesCategory::create($data);
        return redirect()->route('admin.articles.categories.index');
    }

    public function edit(ArticlesCategory $category)
    {
        return view('admin.articles.categories.edit', compact('category'));
    }

    public function update(ArticlesCategory $category)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        $category->update($data);
        return redirect()->route('admin.articles.categories.edit', $category->id);
    }

    public function delete()
    {
        $category = ArticlesCategory::withTrashed()->find(2);
        $category->restore();        
    }

    public function destroy(ArticlesCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.articles.categories.index');
    }
}
