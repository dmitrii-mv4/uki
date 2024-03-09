<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    public $title_page = "Новости сайта";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // Пагинация
        $news = News::paginate('10');

        // Вывести категории по id статьи
        $news_item = News::find(2); // указываем id статьи

        return view('admin/news/index', compact('news', 'news_item'));
    }

    public function create()
    {
        return view('admin/news/create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => '',
            'is_published' => '',
        ]);

        News::create($data);
        return redirect()->route('admin.news.index');
    }

    public function edit(News $news_item)
    {
        return view('admin.news.edit', compact('news_item'));
    }

    public function update(News $news_item)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => '',
            'is_published' => '',
        ]);

        $news_item->update($data);
        return redirect()->route('admin.news.edit', $news_item->id);
    }

    public function delete()
    {
        $news_item = News::withTrashed()->find(2);
        $news_item->restore();        
    }

    public function destroy(News $news_item)
    {
        $news_item->delete();
        return redirect()->route('admin.news.index');
    }
}
