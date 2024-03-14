<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\Setting;
use App\Models\Page;
use App\Models\Feedback;

class HomeController extends Controller
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
        $counters_site = $settings['counters'];

        View::share ( 'name_site', $name_site);
        View::share ( 'description_site', $description_site);
        View::share ( 'counters_site', $counters_site);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title_page = '';

        View::share ( 'title_page', $title_page);
        return view('home');
    }

    public function feedback()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'surname' => 'string',
            'phone' => 'required|string',
            'email' => '',
            'content' => '',
            'status' => '',
            'feedback_forms_id' => '',
        ]);

        Feedback::create($data);
        return redirect()->route('home');
    }

    public function inslall()
    {
        return view('install');
    }
}
