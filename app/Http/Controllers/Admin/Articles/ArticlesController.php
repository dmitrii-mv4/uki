<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class ArticlesController extends Controller
{
    public $title_page = "Каталог статей";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // Пагинация
        $articles = Article::paginate('10');

        //$articles = Article::all();
        //dd($articles);

        // Вывести категории по id статьи
        $article = Article::find(2); // указываем id статьи

        return view('admin/articles/index', compact('articles', 'article'));
    }

    public function create()
    {
        $categories = Category::All();

        return view('admin/articles/create', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => '',
            'is_published' => '',
        ]);

        Article::create($data);
        return redirect()->route('admin.articles.index');
    }

    public function edit(Article $article)
    {
        $categories = Category::All();

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Article $article)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => '',
            'is_published' => '',
        ]);

        $article->update($data);
        return redirect()->route('admin.articles.edit', $article->id);
    }

    public function delete()
    {
        $article = Article::withTrashed()->find(2);
        $article->restore();        
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
