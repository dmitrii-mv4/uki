<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'feedback'; // привязать к таблице
    protected $guarded = false; // разрешить любой запрос на добавление в БД

    public function forms()
    {
        return $this->belongsTo(FeedbackForms::class, 'feedback_forms_id', 'id');
    }
}
