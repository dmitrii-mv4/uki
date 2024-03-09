<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        //dd($articles->tags);

        return view('articles/index', compact('articles'));


        // 2 вариант:: выводим статью по id категории
        // $category = Category::find(1); // id категории
        // dd($category->articles); // выводим статью

        // 3 вариант:: выводит категории по id статьи
        // $article = Article::find(2); // указываем id статьи
        // dd($article->category); // выводим категорию 



        //$blog = Blog::find(1);
        //$blog = Blog::where('is_published', 1)->get();
        //dd($blog);

        // foreach ($blog as $items)
        // {
        //     dump($items->title);
        // }

        // 1 вариант:: получить статью с категорией id 1 (без дописки в модели) OLD
        // $category = Category::find(1);
        // $articles_cat_1 = Article::where('category_id', $category->id)->get();
        // dd($articles_cat_1);
    }

    public function create()
    {
        $categories = Category::All();

        return view('articles/create', compact('categories'));

        // Articles::create([
        //     'title' => 'заголовок',
        //     'content' => 'contant post',
        //     'is_published' => 1,
        // ]);
        // return 'create';
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => '',
        ]);

        Article::create($data);
        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $categories = Category::All();

        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Article $article)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => '',
        ]);

        $article->update($data);
        return redirect()->route('articles.show', $article->id);
    }

    public function delete()
    {
        $article = Article::withTrashed()->find(2);
        $article->restore();

        //$article = Articles::find(2);
        //$article->delete();
        return 'delete';
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
