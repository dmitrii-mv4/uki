<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories'; // привязать к таблице
    protected $guarded = false; // разрешить любой запрос на добавление в БД

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
