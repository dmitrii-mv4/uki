<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticlesTag;
use Illuminate\Support\Facades\View;

class TagsController extends Controller
{
    public $title_page = "Управление тегами";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // Пагинация
        $tags = ArticlesTag::paginate('10');

        return view('admin/articles/tags/index', compact('tags'));
    }

    public function create()
    {
        return view('admin/articles/tags/create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        ArticlesTag::create($data);
        return redirect()->route('admin.articles.tags.index');
    }

    public function edit(ArticlesTag $tag)
    {
        return view('admin.articles.tags.edit', compact('tag'));
    }

    public function update(ArticlesTag $tag)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        $tag->update($data);
        return redirect()->route('admin.articles.tags.edit', $tag->id);
    }

    public function delete()
    {
        $tag = ArticlesTag::withTrashed()->find(2);
        $tag->restore();
    }

    public function destroy(ArticlesTag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.articles.tags.index');
    }
}
