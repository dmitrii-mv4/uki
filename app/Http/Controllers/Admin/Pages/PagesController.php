<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public $title_page = "Cтраницы сайта";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // Пагинация
        $pages = Page::paginate('10');

        //$pages = Page::all();

        //dd($pages);

        // $pach = '../public/pages/';
        // $dh  = opendir($pach);

        // while (false !== ($filename = readdir($dh))) {
        //     $files[] = $filename;
        // }

        // dd($files);

        return view('admin/pages/index', compact('pages'));
    }

    public function page($page)
    {
        $page_db = Page::where('url', $page)->get();


        $page = $page[0];
        
            //abort('404');
        

        //dd($page);

        //$pach_public = $request->url();

        //$public_2 = '';

        //$pach_public = '../public/pages/'.$page.'.php' ;

        return view('page', compact('page'));

        //return $page;
    }

    public function create()
    {
        return view('admin/pages/create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'url' => 'string',
            'content' => 'string',
            'is_published' => '',
        ]);

        Page::create($data);
        return redirect()->route('admin.pages.index');
    }

    public function edit(Page $page)
    {
        $pages = Page::All();

        return view('admin.pages.edit', compact('page', 'pages'));
    }

    public function update(Page $page)
    {
        $data = request()->validate([
            'title' => 'string',
            'url' => 'string',
            'content' => 'string',
            'is_published' => '',
        ]);

        $page->update($data);
        return redirect()->route('admin.pages.edit', $page->id);
    }

    public function delete()
    {
        $page = Page::withTrashed()->find(2);
        $page->restore();        
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}
