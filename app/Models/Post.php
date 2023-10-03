<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


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

}
