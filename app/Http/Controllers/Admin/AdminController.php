<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use App\Models\News;
use App\Models\Article;
use App\Models\Feedback;

// для вывода онлайн пользователей 
// test
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public $title_page = "Панель приборов";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // онлайн всех пользователей (с учётом гостей)
        $users_online = DB::table(config('session.table'))
        ->distinct()
        ->where('sessions.last_activity', '>', Carbon::now()->subMinutes(5)->getTimestamp())
        ->get();

        // выводим опубликованные новости
        $news = News::where('is_published', 1)->get();

        // выводим опубликованные статьи
        $articles = Article::where('is_published', 1)->get();

        $settings = Setting::All();
        $settings = $settings[0];

        // Новые заявки с обратной формы на сайте
        $feedback_new_count = Feedback::where('status', 0)->count();
        $feedback_new = Feedback::where('status', 0)->take(10)->get();

        return view('admin/index', compact('users_online', 'news', 'articles', 'feedback_new', 'feedback_new_count'));
    }

    public function login()
    {
        return view('admin/login');
    }

    public function settings()
    {
        $settings = Setting::All();
        $settings = $settings[0];

        return view('admin/settings', compact('settings'));
    }

    public function settings_save()
    {
        $data = request()->validate([
            'name' => 'string | min:3',
            'description' => 'string',
        ]);

        Setting::where('id', '=', '1')->update($data);

        return redirect()->route('admin.settings');
    }
}
