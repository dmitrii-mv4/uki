<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Page;
use App\Models\Setting;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->middleware('auth');

        $settings = Setting::All();
        $settings = $settings[0];

        $name_site = $settings['name'];
        $description_site = $settings['description'];

        View::share ( 'name_site', $name_site);
        View::share ( 'description_site', $description_site);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($page)
    {
        $page = Page::where('url', $page)->get();
        $page = $page[0];

        $title_page = $page->title.' - ';
        View::share ( 'title_page', $title_page);

        return view('page', compact('page'));
    }
}
