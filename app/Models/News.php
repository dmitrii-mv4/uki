<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news'; // привязать к таблице
    protected $guarded = false; // разрешить любой запрос на добавление в БД
}
