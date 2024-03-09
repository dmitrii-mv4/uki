<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;

// для вывода онлайн пользователей
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public $title_page = "Пользователи";

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

        // онлайн зарегистрированных пользователей
        // $users_online = DB::table(config('session.table'))
        // ->distinct()
        // ->select(['users.id', 'users.name', 'users.email'])
        // ->whereNotNull('user_id')
        // ->where('sessions.last_activity', '>', Carbon::now()->subMinutes(5)->getTimestamp())
        // ->leftJoin('users', config('session.table') . '.user_id', '=', 'users.id')
        // ->get();

        //dd($users_online);

        // общий онлайн
        //return DB::table(config('session.table'))->count();

        $users = User::paginate('10');

        return view('admin/users/index', compact('users', 'users_online'));
    }

    public function create()
    {
        return view('admin/users/create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'role' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => [''],
        ]);

        User::create($data);
        return redirect()->route('admin.users.index');       
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'role' => ['string'],
        ]);

        //dd($user['id']);

        $user->update($data);

        return redirect()->route('admin.users.edit', $user->id);
    }

    public function delete()
    {
        $user = User::withTrashed()->find(2);
        $user->restore();        
    }

    public function destroy(User $user)
    {
        if ($user->id != 1)
        {
            $user->delete();
            return redirect()->route('admin.users.index');
        } else {
            return redirect()->route('admin.users.index');
        }
    }
}
