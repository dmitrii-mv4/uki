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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');

        // $current_date = time(); // текущая дата
        // $end_of_tariff_date = strtotime("2024-03-31"); // дата окончания тарифа
        // $amount_of_days = $end_of_tariff_date - $current_date;
        // $amount_of_days = round($amount_of_days / (60 * 60 * 24));

        // View::share ( 'amount_of_days', $amount_of_days );
    }

    public function index()
    {
        View::share ( 'title_page', 'Панель приборов' );

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
        View::share ( 'title_page', 'Настройки системы' );

        $settings = Setting::All();
        $settings = $settings[0];

        return view('admin/settings', compact('settings'));
    }

    public function settings_save()
    {
        // DB::table('settings')
        //     ->where('id', '=', '1')
        //     ->update([
        //         'name' => request()->name,
        //         'description' => request()->description,
        //         'counters' => request()->counters,
        //     ]);

        if (empty(request()->counters))
        {
            $data = request()->validate([
                'name' => 'string | min:3',
                'description' => 'string',
            ]);
            $data['counters'] = '';

        } else {
            $data = request()->validate([
                'name' => 'string | min:3',
                'description' => 'string',
                'counters' => 'string',
            ]);
        }

        Setting::where('id', '=', '1')->update($data);

        return redirect()->route('admin.settings');
    }

    public function about_tariff()
    {
        View::share ( 'title_page', 'О тарифе' );

        return view('admin/about_tariff');
    }
}
