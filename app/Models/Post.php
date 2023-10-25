<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // created_atアクセサ
    public function getCreatedAtAttribute($value)
    {
        Carbon::setLocale('ja');
        return Carbon::parse($value)->diffForHumans();
    }

    // updated_atアクセサ
    public function getUpdatedAtAttribute($value)
    {
        Carbon::setLocale('ja');
        return Carbon::parse($value)->diffForHumans();
    }

    // Post.php
public function prefecture()
{
    return $this->belongsTo(Prefecture::class, 'prefecture_id');
}


}
