<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticlesCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'articles_categories'; // привязать к таблице
    protected $guarded = false; // разрешить любой запрос на добавление в БД

    public function articles()
    {
        return $this->hasMany(Article::class, 'articles_category_id', 'id');
    }
}
