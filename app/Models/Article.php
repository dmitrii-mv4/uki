<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'articles'; // привязать к таблице
    protected $guarded = false; // разрешить любой запрос на добавление в БД

    public function category()
    {
        return $this->belongsTo(ArticlesCategory::class, 'articles_category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(ArticlesTag::class, 'articles_bind_tags', 'article_id', 'tag_id');
    }
}
