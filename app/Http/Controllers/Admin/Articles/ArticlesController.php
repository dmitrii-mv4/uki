<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticlesCategory;
use App\Models\ArticlesTag;
use App\Models\ArticlesBindTag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public $title_page = "Каталог статей";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        //$articles = Article::find(2); // указываем id статьи
        //dd($articles->tags); // получаем все теги связанной со статьёй
        //dd($articles->category); // получаем категорию связанной со статьёй
/////////////////////////////////////////////////////////////////////////////////////////
        

        //dd(Storage::disk('s3')->exists('avatar/1/Nn2sWW9NmKulSx01effmjQskvtYYFieLIigDIqEb.jpg'));
        //$file = Storage::url('images/articles/10XRxxSLr7Kvgzfdu3gyG5gL0eoM5gDTkLrmUsnP.jpg');

        //Storage::disk('public')->put('articles/1', $fileContents);


        //dd($file);

        // Пагинация
        $articles = Article::orderBy('id', 'desc')->paginate('10');

        //$articles = Article::all();
        //dd($articles);

        // Вывести категории по id статьи
        $article = Article::find(2); // указываем id статьи

        return view('admin/articles/index', compact('articles', 'article'));
    }

    public function create()
    {
        $categories = ArticlesCategory::All();
        $tags = ArticlesTag::All();

        return view('admin/articles/create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'category_id' => 'numeric',
            'is_published' => 'numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => '',
            'content' => 'required|string',
        ]);

        if (!empty(request('image')))
        {
            $name_image = Storage::disk('articles')->put('', request('image'));
        } else {
            $name_image = '';
        }

        //dd(request('image'));

        //Storage::put('avatars/1', request('image'));
        //Storage::put('images/articles', request('image'));

        //Storage::disk('articles')->put('', request('image'));
        
        $article = Article::create([
            'title' => $data['title'],
            'articles_category_id' => $data['category_id'],
            'is_published' => $data['is_published'],
            'image' => $name_image,
            'content' => $data['content'],
        ]);

        // $article = DB::table('articles')->insert([
        //     'title' => $data['title'],
        //     'articles_category_id' => $data['category_id'],
        //     'is_published' => $data['is_published'],
        //     'image' => $name_image,
        //     'content' => $data['content'],
        //     'created_at' => date("Y-m-d H:i:s"),
        // ]);

        //dd($article->id);

        $article->tags()->attach($data['tags']);


        // foreach ($data['tags'] as $tag)
        // {
        //     ArticlesBindTag::firstOrCreate([
        //         'article_id' => $article->id,
        //         'tag_id' => $tag,
        //     ]);
        // }



     

        // сохраниние текстового файла
        //Storage::disk('local')->put(request('image'), 'Contents');
        

      
        
        
          

        //dd($data);

        // $imagePath = $request->file('image')->store('public/images/articles');

        //$fileName = time() . '.' . $request->image->extension();
        //$request->image->storeAs('public/images', $fileName);

        // $image = new Image([
        //     'title' => $request->get('title'),
        //     'image' => $imagePath,
        // ]);

        //$image->save();

        //dd($data);

        //Article::create($data);
        return redirect()->route('admin.articles.index');
    }

    public function edit(Article $article)
    {
        $categories = ArticlesCategory::All();
        $tags = ArticlesTag::All();

        return view('admin.articles.edit', compact('article', 'categories', 'tags'));
    }

    public function update(Article $article)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'category_id' => 'numeric',
            'is_published' => 'numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => '',
            'content' => 'required|string',
        ]);

        if (!empty(request('image'))) // если есть картинка
        {
            if (!empty($article->image))
            {
                $name_image = Storage::disk('articles')->put('', request('image'));
            } else {
                $name_image = Storage::disk('articles')->put('', request('image'));
            }

        } else {

            if (!empty($article->image))
            {
                $name_image = $article->image;
            } else {
                $name_image = '';
            }
        }

        $article = Article::create([
            'title' => $data['title'],
            'articles_category_id' => $data['category_id'],
            'is_published' => $data['is_published'],
            'image' => $name_image,
            'content' => $data['content'],
        ]);

        // DB::table('articles')
        //     ->where('id', '=', $article->id)
        //     ->update([
        //         'title' => $data['title'],
        //         'articles_category_id' => $data['category_id'],
        //         'is_published' => $data['is_published'],
        //         'image' => $name_image,
        //         'content' => $data['content'],
        //         'created_at' => $article->created_at,
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ]);

        $article->tags()->sync($data['tags']);

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
